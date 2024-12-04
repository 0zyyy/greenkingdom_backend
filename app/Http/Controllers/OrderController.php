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

    public function destroy(Order $order)
    {
        if (auth()->user()->role === 'admin' || auth()->id() === $order->user_id) {
            if ($order->status === 'pending') {
                $order->update(['status' => 'cancelled']);
                return redirect()->back()->with('success', 'Order has been cancelled successfully.');
            }
            return redirect()->back()->with('error', 'Only pending orders can be cancelled.');
        }
        return redirect()->back()->with('error', 'You are not authorized to perform this action.');
    }

    public function adminIndex()
    {
        $orders = Order::query()
            ->when(request('status'), function ($query, $status) {
                return $query->where('status', $status);
            })
            ->with(['user', 'items.product'])
            ->latest()
            ->paginate(10);

        return view('orders.admin', compact('orders'));
    }

    public function updateStatus(Order $order)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $validated = request()->validate([
            'status' => ['required', 'in:pending,processing,completed,cancelled'],
        ]);

        $order->update($validated);

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }
}
