@extends('layouts.main')
@section('content')
<!-- Shopping Cart Header -->
<div class="relative h-48">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/bg_cart.png') }}" alt="Cart Background" class="w-full h-full object-cover">
    </div>
    
    <!-- Header Content -->
    <div class="relative container mx-auto px-4 h-full flex items-center">
        <div class="flex items-center text-white gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="black">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <h1 class="text-3xl font-medium text-[#333333]">Shopping Cart</h1>
        </div>
    </div>
</div>

<!-- Rest of your cart content -->
<div class="container px-4 sm:px-6 lg:px-8 py-8 mx-auto">
    <h1 class="text-3xl font-medium text-center mb-12 text-[#333333]">My Shopping Cart</h1>
    
    @if(!empty($cartItems))
        <!-- Cart Table - Full Width -->
        <div class="w-full max-w-[1440px] mx-auto">
            <!-- Desktop Table -->
            <div class="hidden md:block">
                <table class="w-full">
                    <thead>
                        <tr class="border-b text-sm">
                            <th class="text-left pb-4 text-[#333333] w-2/5">PRODUCT</th>
                            <th class="text-center pb-4 text-[#333333] w-1/5">PRICE</th>
                            <th class="text-center pb-4 text-[#333333] w-1/5">QUANTITY</th>
                            <th class="text-center pb-4 text-[#333333] w-1/5">SUBTOTAL</th>
                            <th class="pb-4 w-[100px]"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach($cartItems as $item)
                        <tr class="py-4">
                            <td class="py-6">
                                <div class="flex items-center space-x-4">
                                    <img src="{{ asset($item['image'] ?? 'images/icons/1.png') }}" 
                                         alt="{{ $item['name'] }}" 
                                         class="w-24 h-24 object-cover rounded">
                                    <span class="font-medium text-[#333333]">{{ $item['name'] }}</span>
                                </div>
                            </td>
                            <td class="text-center text-[#333333]">Rp. {{ number_format($item['price'], 0, ',', '.') }}</td>
                            <td class="text-center">
                                <div class="flex items-center justify-center">
                                    <div class="flex items-center bg-white rounded-full border border-[#E6E6E6]">
                                        <form action="{{ route('cart.update', $item['id']) }}" method="POST" class="flex">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" name="quantity" value="{{ $item['quantity'] - 1 }}" 
                                                    class="w-8 h-8 flex items-center justify-center bg-[#E6E6E6] rounded-full text-[#333333] hover:text-gray-600">-</button>
                                            <span class="w-8 text-center">{{ $item['quantity'] }}</span>
                                            <button type="submit" name="quantity" value="{{ $item['quantity'] + 1 }}"
                                                    class="w-8 h-8 flex items-center justify-center bg-[#E6E6E6] rounded-full text-[#333333] hover:text-gray-600">+</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center text-[#333333]">Rp. {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                            <td class="text-center">
                                <div class="flex items-center justify-end space-x-4">
                                    <form action="{{ route('cart.remove', $item['itemable_id']) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-gray-400 hover:text-gray-600">
                                            <svg class="w-4 h-4" viewBox="0 0 14 14" fill="none">
                                                <path d="M13 1L1 13M1 1L13 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Mobile Cart Items -->
            <div class="md:hidden space-y-6">
                @foreach($cartItems as $item)
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex space-x-3">
                            <img src="{{ asset($item['image'] ?? 'images/icons/1.png') }}" 
                                 alt="{{ $item['name'] }}" 
                                 class="w-20 h-20 object-cover rounded">
                            <div>
                                <h3 class="font-medium text-[#333333]">{{ $item['name'] }}</h3>
                                <p class="text-[#333333] mt-1">Rp. {{ number_format($item['price'], 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="flex items-center bg-white rounded-full border border-[#E6E6E6]">
                                <form action="{{ route('cart.update', $item['id']) }}" method="POST" class="flex">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" name="quantity" value="{{ $item['quantity'] - 1 }}" 
                                            class="w-8 h-8 flex items-center justify-center bg-[#E6E6E6] rounded-full text-[#333333] hover:text-gray-600">-</button>
                                    <span class="w-8 text-center">{{ $item['quantity'] }}</span>
                                    <button type="submit" name="quantity" value="{{ $item['quantity'] + 1 }}"
                                            class="w-8 h-8 flex items-center justify-center bg-[#E6E6E6] rounded-full text-[#333333] hover:text-gray-600">+</button>
                                </form>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="text-[#333333]">Rp. {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</span>
                            <form action="{{ route('cart.remove', $item['itemable_id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-gray-400 hover:text-gray-600">
                                    <svg class="w-4 h-4" viewBox="0 0 14 14" fill="none">
                                        <path d="M13 1L1 13M1 1L13 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- After the cart table and before the Cart Total section -->
        <div class="w-full max-w-[1440px] mx-auto mt-8">
            <div class="flex flex-col items-center gap-8">
                <!-- Coupon Code -->
                <div class="w-full max-w-xl">
                    <label class="block text-[#333333] text-sm font-medium mb-2">Coupon Code</label>
                    <div class="flex gap-4">
                        <input type="text" placeholder="Enter code" class="flex-1 px-4 py-2 border border-[#B88E2F] rounded-lg focus:outline-none">
                        <button class="px-6 py-2 bg-[#333333] text-white rounded-lg hover:bg-gray-800">
                            Apply Coupon
                        </button>
                    </div>
                </div>

                <!-- Cart Total -->
                <div class="w-full max-w-md border border-[#E6E6E6] rounded-lg p-4">
                    <h2 class="text-2xl font-medium text-[#333333] mb-6">Cart Total</h2>
                    <div class="space-y-4">
                        @php
                            $subtotal = array_reduce($cartItems, function($carry, $item) {
                                return $carry + ($item['price'] * $item['quantity']);
                            }, 0);
                        @endphp
                        <div class="flex justify-between py-2 text-[#333333]">
                            <span>Subtotal:</span>
                            <span>Rp. {{ number_format($subtotal, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b text-[#333333]">
                            <span>Shipping:</span>
                            <span class="text-[#55B76B]">Free</span>
                        </div>
                        <div class="flex justify-between py-2 text-[#333333]">
                            <span>Total:</span>
                            <span class="font-medium">Rp. {{ number_format($subtotal, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <a href="{{ route('products.checkout') }}" 
                       class="block w-full mt-6 py-3 bg-[#00B207] text-center text-white rounded-lg hover:bg-[#009706] transition-colors">
                        Proceed to checkout
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="text-center py-16">
            <h2 class="text-2xl font-medium text-[#333333] mb-6">Empty Cart</h2>
            <a href="{{ route('catalog') }}" 
               class="inline-block px-8 py-3 bg-[#00B207] text-white rounded-lg hover:bg-[#009706] transition-colors">
                Shop Now
            </a>
        </div>
    @endif
</div>
@endsection
