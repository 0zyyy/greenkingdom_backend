@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-2xl sm:text-3xl font-bold text-[#55B76B]">Manage Orders</h1>
        <p class="text-[#666666] mt-2">View and manage all customer orders</p>
    </div>

    <!-- Filters -->
    <div class="mb-6">
        <select name="status" 
            class="rounded-md border-[#E6E6E6] focus:border-[#55B76B] focus:ring focus:ring-[#55B76B] focus:ring-opacity-50" 
            onchange="window.location.href=this.value">
            <option value="{{ route('admin.orders.index') }}">All Status</option>
            <option value="{{ route('admin.orders.index', ['status' => 'pending']) }}" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="{{ route('admin.orders.index', ['status' => 'processing']) }}" {{ request('status') === 'processing' ? 'selected' : '' }}>Processing</option>
            <option value="{{ route('admin.orders.index', ['status' => 'completed']) }}" {{ request('status') === 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="{{ route('admin.orders.index', ['status' => 'cancelled']) }}" {{ request('status') === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>
    </div>

    <!-- Orders Table -->
    <div class="bg-white rounded-lg shadow-sm border border-[#E6E6E6] overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-[#E6E6E6]">
                <thead class="bg-[#F8F8F8]">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-medium text-[#55B76B] uppercase tracking-wider">Order #</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-[#55B76B] uppercase tracking-wider">Customer</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-[#55B76B] uppercase tracking-wider">Date</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-[#55B76B] uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-[#55B76B] uppercase tracking-wider">Total</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-[#55B76B] uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#E6E6E6]">
                    @foreach($orders as $order)
                    <tr class="hover:bg-[#F8F8F8] transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[#666666]">{{ $order->order_number }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[#666666]">{{ $order->user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[#666666]">{{ $order->created_at->format('d M Y, H:i') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 rounded-full text-xs 
                                @if($order->status === 'pending') bg-[#FEF3C7] text-[#55B76B]
                                @elseif($order->status === 'processing') bg-[#DBEAFE] text-[#55B76B]
                                @elseif($order->status === 'completed') bg-[#D1FAE5] text-[#55B76B]
                                @elseif($order->status === 'cancelled') bg-[#FEE2E2] text-[#991B1B]
                                @endif">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#55B76B]">
                            Rp {{ number_format($order->total_amount, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center gap-3">
                                <form action="{{ route('admin.orders.update-status', $order) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" 
                                        onchange="this.form.submit()" 
                                        class="text-sm rounded-md border-[#E6E6E6] focus:border-[#55B76B] focus:ring focus:ring-[#55B76B] focus:ring-opacity-50">
                                        <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Processing</option>
                                        <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                        <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    </select>
                                </form>
                                <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                        onclick="return confirm('Are you sure you want to delete this order?')"
                                        class="text-red-600 hover:text-red-800 transition-colors">
                                        <button type="submit" onclick="return confirm('Are you sure you want to cancel this order?')"
                                            class="text-red-600 hover:text-red-800 bg-[#FEE2E2] px-3 py-1 rounded-md">
                                            Cancel Order
                                        </button>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $orders->links('vendor.pagination.custom') }}
    </div>
</div>
@endsection 