<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Binafy\LaravelCart\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Order;
use App\Models\OrderItem;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $user = Auth::user();
        $product = Product::where('id_produk', $request->id_produk)->first();
        
        // Get or create cart
        $cart = Cart::query()->firstOrCreate(['user_id' => $user->id]);
        
        // Check if item already exists in cart
        $existingItem = $cart->items()->where('itemable_id', $product->id)
                            ->where('itemable_type', Product::class)
                            ->first();
        
        if ($existingItem) {
            // If item exists, increase quantity by 1
            $existingItem->update([
                'quantity' => $existingItem->quantity + 1
            ]);
        } else {
            // If item doesn't exist, add it to cart
            Cart::query()->firstOrCreateWithStoreItems(
                item: $product,
                quantity: 1,
                userId: $user->id
            );
        }
        
        return redirect()->route('products.cart')->with('success', 'Product added to cart');
    }

    public function remove($id)
    {
        $user = Auth::user();
        $cart = Cart::query()->where('user_id', $user->id)->first();
        
        if ($cart) {
            $cart->items()->where('itemable_id', $id)->delete();
        }
        
        return redirect()->back();
    }

    public function clear()
    {
        $user = Auth::user();
        $cart = Cart::query()->where('user_id', $user->id)->first();
        
        if ($cart) {
            $cart->items()->delete();
        }
        
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $cart = Cart::query()->where('user_id', $user->id)->first();
        
        if ($cart) {
            $item = $cart->items()->where('itemable_id', $id)->first();
            
            if ($item) {
                $newQuantity = (int) $request->quantity;
                
                // Prevent quantity from going below 1
                if ($newQuantity < 1) {
                    return redirect()->back();
                }
                
                $item->update([
                    'quantity' => $newQuantity
                ]);
            }
        }
        
        return redirect()->back();
    }

    public function showCart()
    {
        $user = Auth::user();
        $cart = Cart::query()->where('user_id', $user->id)->first();
        if($cart){
            $items = $cart->items()->with('itemable')->get();
            $cartItems = $items->filter(fn($item) => $item->itemable_type === Product::class)
                          ->map(fn($item) => [
                            'id' => $item->itemable_id, //product id
                              'name' => $item->itemable->nama_produk,
                              'price' => $item->itemable->getPrice(),
                              'deskripsi' => $item->itemable->deskripsi,
                              'quantity' => $item->quantity,
                              'image' => $item->itemable->image,
                              'itemable_id' => $item->itemable_id, //product id
                          ])
                          ->all(); 
            return view('products.cart', compact('cartItems'));
        }
        $cartItems = [];
        return view('products.cart', compact('cartItems'));
    }

    public function showCheckout()
    {   
        $user = Auth::user();
        $cart = Cart::query()->where('user_id', $user->id)->first();
        if($cart){
            $items = $cart->items()->with('itemable')->get() ?? [];
            $cartItems = $items->filter(fn($item) => $item->itemable_type === Product::class)
                          ->map(fn($item) => [
                            'id' => $item->itemable_id, //product id
                              'name' => $item->itemable->nama_produk,
                              'price' => $item->itemable->getPrice(),
                              'deskripsi' => $item->itemable->deskripsi,
                              'quantity' => $item->quantity,
                              'image' => $item->itemable->image,
                              'itemable_id' => $item->itemable_id, //product id
                          ])
                          ->all(); 
            $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cartItems));
            return view('products.checkout', compact('cartItems', 'total'));
        }
        $cartItems = [];
        $total = 0;
        return view('products.checkout', compact('cartItems', 'total'));
    }

    public function checkout(Request $request)
    {
        try {
            $user = Auth::user();
            $cart = Cart::query()->where('user_id', $user->id)->first();
            if (!$cart || $cart->items()->with('itemable')->count() === 0) {
                return redirect()->route('products.cart')
                               ->with('error', 'Your cart is empty');
            }
            // Validate request
            $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'address' => 'required|string',
                'address_optional' => 'nullable|string',
                'city' => 'required|string',
                'phone' => 'required|string',
                'payment' => 'required|in:cod,transfer', // Sesuaikan dengan metode pembayaran yang tersedia
            ]);
            DB::beginTransaction();
            try {
                // Create order
                $order = Order::create([
                    'user_id' => $user->id,
                    'tax_amount' => 0,
                    'order_number' => 'ORD-' . time(), // Bisa diganti dengan format yang lebih baik
                    'status' => 'pending',
                    'total_amount' => $cart->items->sum(function($item) {
                        return $item->itemable->harga * $item->quantity;
                    }),
                    'shipping_cost' => 0,
                    'discount_amount' => 0,
                    'coupon_id' => null,
                    'shipping_address' => $request->address,
                    'shipping_state' => "Indonesia",
                    'shipping_city' => $request->city,
                    'shipping_phone' => $request->phone,
                    'payment_method' => $request->payment,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                // Create order items from cart items
                foreach ($cart->items as $cartItem) {
                    $product = $cartItem->itemable;
                    // Check stock
                    if ($product->stok < $cartItem->quantity) {
                        throw new \Exception("Insufficient stock for {$product->nama_produk}");
                    }

                    // Create order item
                    OrderItem::create([
                        'order_id' => $order->id,
                        'product_id' => $product->id_produk,
                        'quantity' => $cartItem->quantity,
                        'unit_price' => $product->harga,
                        'subtotal' => $product->harga * $cartItem->quantity
                    ]);

                    // Update product stock
                    $product->stok -= $cartItem->quantity;
                    $product->save();
                }

                // Clear cart
                $cart->items()->delete();
                $cart->delete();

                DB::commit();

                // Redirect based on payment method
                if ($request->payment_method === 'transfer') {
                    return redirect()->route('payment.show', $order->id)
                                   ->with('success', 'Order created successfully. Please complete your payment.');
                }

                return redirect()->route('orders.index')
                               ->with('success', 'Order placed successfully!');

            } catch (\Exception $e) {
                DB::rollBack();
                Log::error('Checkout error: ' . $e->getMessage());
                return redirect()->back()
                               ->with('error', $e->getMessage());
            }

        } catch (\Exception $e) {
            Log::error('Checkout error: ' . $e->getMessage());
            return redirect()->back()
                           ->with('error', $e->getMessage());
        }
    }
}
