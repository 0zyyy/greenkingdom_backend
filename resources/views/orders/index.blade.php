@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-2xl sm:text-3xl font-bold text-[#55B76B]">My Orders</h1>
            <p class="text-[#666666] mt-2">Track and manage your orders</p>
        </div>

        @if($orders->isEmpty())
            <!-- Empty State -->
            <div class="text-center py-12">
                <div class="mb-4">
                    <svg class="mx-auto h-12 w-12 text-[#55B76B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-[#55B76B]">No orders yet</h3>
                <p class="mt-1 text-[#666666]">Start shopping to see your orders here.</p>
                <div class="mt-6">
                    <a href="{{ route('catalog') }}" 
                       class="inline-flex items-center px-4 py-2 bg-[#55B76B] text-white rounded-md hover:bg-[#3B8B4B] transition-colors">
                        Browse Products
                    </a>
                </div>
            </div>
        @else
            <!-- Orders List -->
            <div class="space-y-6">
                @foreach($orders as $order)
                    <div class="bg-white rounded-lg shadow-sm border border-[#E6E6E6] overflow-hidden">
                        <!-- Order Header -->
                        <div class="bg-[#F8F8F8] px-4 py-3 border-b border-[#E6E6E6] flex justify-between items-center">
                            <div>
                                <p class="text-sm text-[#55B76B]">Order #{{ $order->order_number }}</p>
                                <p class="text-xs text-[#666666]">{{ $order->created_at->format('d M Y, H:i') }}</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="px-3 py-1 rounded-full text-xs 
                                    @if($order->status === 'pending') bg-[#FEF3C7] text-[#55B76B]
                                    @elseif($order->status === 'processing') bg-[#DBEAFE] text-[#55B76B]
                                    @elseif($order->status === 'completed') bg-[#D1FAE5] text-[#55B76B]
                                    @elseif($order->status === 'cancelled') bg-[#FEE2E2] text-[#991B1B]
                                    @endif">
                                    {{ ucfirst($order->status) }}
                                </span>
                                @if($order->status === 'pending')
                                    <form action="{{ route('orders.destroy', $order) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to cancel this order?')"
                                            class="text-red-600 hover:text-red-800 bg-[#FEE2E2] text-xs px-3 py-1 rounded-md">
                                            Cancel Order
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>

                        <!-- Order Items -->
                        <div class="divide-y divide-[#E6E6E6]">
                            @foreach($order->items as $item)
                                <div class="p-4 flex items-center">
                                    <div class="flex-shrink-0 w-20 h-20">
                                        <img src="{{ $item->product->image ? $item->product->image->thumbnail_url : asset('images/icons/1.png') }}" 
                                             alt="{{ $item->product->nama_produk }}"
                                             class="w-full h-full object-cover rounded">
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <h4 class="text-sm font-medium text-[#55B76B]">{{ $item->product->nama_produk }}</h4>
                                        <div class="mt-1 flex justify-between">
                                            <div class="text-sm text-[#666666]">
                                                <p>Qty: {{ $item->quantity }}</p>
                                                <p>Price: Rp {{ number_format($item->unit_price, 0, ',', '.') }}</p>
                                            </div>
                                            <p class="text-sm font-medium text-[#55B76B]">
                                                Rp {{ number_format($item->subtotal, 0, ',', '.') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Order Footer -->
                        <div class="bg-[#F8F8F8] px-4 py-3 border-t border-[#E6E6E6]">
                            <div class="flex justify-between items-center">
                                <div class="text-sm text-[#666666]">
                                    <p>Payment Method: {{ ucfirst($order->payment_method) }}</p>
                                    <p class="mt-1">Shipping Address: {{ $order->shipping_address }}</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-[#666666]">Total Amount</p>
                                    <p class="text-lg font-medium text-[#55B76B]">
                                        Rp {{ number_format($order->total_amount, 0, ',', '.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $orders->links('vendor.pagination.custom') }}
            </div>
        @endif
    </div>
@endsection
