<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function show(){
        $orders = Order::where('user_id', auth()->id())
        ->with(['items.product.image'])
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        
return view('orders.index', compact('orders'));
    }
}
