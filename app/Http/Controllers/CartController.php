<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Binafy\LaravelCart\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

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
}
