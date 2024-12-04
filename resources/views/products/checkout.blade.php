@extends('layouts.main')
@section('content')
    <div class="max-w-7xl mx-auto p-4 sm:p-6">
        <h2 class="text-2xl sm:text-3xl font-semibold text-[#333333] mb-6 sm:mb-8">Checkout</h2>
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                {{ session('error') }}
            </div>
        @endif
        <form class="space-y-6 sm:space-y-8" action="{{ route('products.checkout.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-12">
                <!-- Left Column - Form Fields -->
                <div class="bg-white rounded-2xl shadow-sm p-6 sm:p-8 order-2 lg:order-1">
                    <h3 class="text-lg sm:text-xl font-medium text-[#333333] mb-6">Shipping Details</h3>
                    <div class="space-y-6">
                        <!-- Name Fields - Stack on mobile -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-2">First Name*</label>
                                <input type="text"
                                    class="w-full p-3 bg-[#F5F5F5] rounded-lg border-0 focus:ring-2 focus:ring-custom-green transition-all duration-200"
                                    name="first_name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-2">Last Name</label>
                                <input type="text"
                                    class="w-full p-3 bg-[#F5F5F5] rounded-lg border-0 focus:ring-2 focus:ring-custom-green transition-all duration-200"
                                    name="last_name">
                            </div>
                        </div>

                        <!-- Other form fields remain the same -->
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-2">Street Address*</label>
                            <input type="text"
                                class="w-full p-3 bg-[#F5F5F5] rounded-lg border-0 focus:ring-2 focus:ring-custom-green transition-all duration-200"
                                name="address">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-2">Apartment, floor, etc.
                                (optional)</label>
                            <input type="text"
                                class="w-full p-3 bg-[#F5F5F5] rounded-lg border-0 focus:ring-2 focus:ring-custom-green transition-all duration-200"
                                name="address_optional">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-2">Town/City*</label>
                            <input type="text"
                                class="w-full p-3 bg-[#F5F5F5] rounded-lg border-0 focus:ring-2 focus:ring-custom-green transition-all duration-200"
                                name="city">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-2">Phone Number*</label>
                            <input type="tel"
                                class="w-full p-3 bg-[#F5F5F5] rounded-lg border-0 focus:ring-2 focus:ring-custom-green transition-all duration-200"
                                name="phone">
                        </div>

                        <div class="flex items-center space-x-2 pt-2">
                            <input type="checkbox" id="save-info" class="rounded text-custom-green focus:ring-custom-green">
                            <label for="save-info" class="text-sm text-gray-600">Save this information for faster check-out
                                next time</label>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Order Summary -->
                <div class="space-y-6 order-1 lg:order-2">
                    <!-- Order Summary Card -->
                    <div class="bg-white rounded-2xl shadow-sm p-6 sm:p-8">
                        <h3 class="text-lg sm:text-xl font-medium text-[#333333] mb-6">Order Summary</h3>
                        @foreach ($cartItems as $item)
                            <!-- Order Items -->
                            <div class="space-y-4 mb-6">
                                <!-- Stack item details on mobile -->
                                <div
                                    class="flex flex-col sm:flex-row sm:items-center justify-between p-4 bg-[#F5F5F5] rounded-lg gap-4">
                                    <div class="flex items-center space-x-4">
                                        <img src="{{ $item['image'] ? $item['image']->thumbnail_url : asset('images/icons/1.png') }}"
                                            alt="{{ $item['name'] }}" class="w-16 h-16 object-cover rounded-lg">
                                        <div>
                                            <h4 class="font-medium text-[#333333]">{{ $item['name'] }}</h4>
                                            <p class="text-sm text-gray-500">Quantity: {{ $item['quantity'] }}</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        @if($item['amount_discount'] > 0)
                                            <span class="line-through text-gray-400 text-sm">
                                                Rp.{{ number_format($item['price'], 0, ',', '.') }}
                                            </span>
                                            <br>
                                            <span class="font-medium text-[#00B207]">
                                                Rp.{{ number_format($item['discounted_price'], 0, ',', '.') }}
                                            </span>
                                            <span class="text-xs text-[#00B207]">
                                                (-{{ number_format($item['amount_discount'], 0) }}%)
                                            </span>
                                        @else
                                            <span class="font-medium text-[#333333]">
                                                Rp.{{ number_format($item['price'], 0, ',', '.') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Price Summary -->
                        <div class="space-y-3 border-t border-gray-200 pt-4">
                            @php
                                $subtotal = array_reduce(
                                    $cartItems,
                                    function ($carry, $item) {
                                        $price = $item['amount_discount'] > 0 
                                            ? $item['discounted_price']
                                            : $item['price'];
                                        return $carry + ($price * $item['quantity']);
                                    },
                                    0,
                                );
                                
                                $total = $subtotal; // Add shipping cost or other fees if needed
                            @endphp
                            <div class="flex justify-between text-[#333333]">
                                <span>Subtotal</span>
                                <span class="font-medium">Rp.{{ number_format($subtotal, 0, ',', '.') }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-[#333333]">Shipping</span>
                                <span class="text-custom-green font-medium">Free</span>
                            </div>
                            <div class="flex justify-between text-[#333333] text-lg font-semibold pt-2">
                                <span>Total</span>
                                <span>Rp.{{ number_format($total, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Methods -->
                    <div class="bg-white rounded-2xl shadow-sm p-6 sm:p-8">
                        <h3 class="text-lg sm:text-xl font-medium text-[#333333] mb-6">Payment Method</h3>
                        <div class="space-y-4">
                            <div
                                class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 space-x-0 sm:space-x-4 p-4 bg-[#F5F5F5] rounded-lg">
                                <input type="radio" name="payment" id="bank"
                                    class="mt-1 text-custom-green focus:ring-custom-green" disabled value="bank">
                                <label for="bank" class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4">
                                    <span class="text-[#333333]">Bank</span>
                                    <div class="flex space-x-2">
                                        <img src="{{ asset('images/Visa.png') }}" alt="Visa" class="h-6">
                                        <img src="{{ asset('images/Mastercard.png') }}" alt="Mastercard" class="h-6">
                                        <img src="{{ asset('images/Nagad.png') }}" alt="Nagad" class="h-6">
                                    </div>
                                </label>
                            </div>

                            <div class="flex items-center space-x-4 p-4 bg-[#F5F5F5] rounded-lg">
                                <input type="radio" name="payment" id="cod"
                                    class="text-custom-green focus:ring-custom-green" value="cod">
                                <label for="cod" class="text-[#333333]">Cash on delivery</label>
                            </div>
                        </div>
                    </div>

                    <!-- Coupon Code -->
                    <div class="bg-white rounded-2xl shadow-sm p-6 sm:p-8">
                        <h3 class="text-lg sm:text-xl font-medium text-[#333333] mb-6">Promo Code</h3>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <input type="text" placeholder="Enter code"
                                class="w-full px-4 py-3 bg-[#F5F5F5] rounded-lg border-0 focus:ring-2 focus:ring-custom-green">
                            <button
                                class="w-full sm:w-auto px-6 py-3 bg-[#333333] text-white rounded-lg hover:bg-gray-800 transition-colors">
                                Apply
                            </button>
                        </div>
                    </div>

                    <!-- Place Order Button -->
                    <button
                        class="w-full py-4 bg-[#00B207] text-white text-lg font-medium rounded-lg hover:bg-[#009706] transition-colors shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                        Place Order
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
