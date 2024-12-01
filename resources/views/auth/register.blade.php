@extends('layouts.auth')

@section('content')
<div class="flex min-h-screen">
    <!-- Left side - Logo -->
    <div class="hidden lg:flex lg:w-1/2 items-center justify-center bg-white">
        <img src="{{ asset('images/auth_logo.png') }}" alt="GreenKingdom" class="w-96">
    </div>

    <!-- Right side - Form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center px-8 md:px-16 bg-white">
        <div class="w-full max-w-md">
            <!-- Logo for mobile view -->
            <div class="lg:hidden flex justify-center mb-8">
                <img src="{{ asset('images/auth_logo.png') }}" alt="GreenKingdom" class="w-64">
            </div>

            <h2 class="text-2xl font-medium text-[#55B76B] mb-2">Create an account</h2>
            <p class="text-gray-600 mb-8">Enter your details below</p>
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            <form class="space-y-6" method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name Input -->
                <div>
                    <input 
                        type="text" 
                        name="name" 
                        placeholder="Name"
                        value="{{ old('name') }}"
                        class="w-full px-3 py-2 border-b border-gray-300 focus:border-[#55B76B] focus:outline-none"
                        required
                    >
                    @if($errors->has('name'))
                        <div class="mt-2 text-sm text-warning">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>

                <!-- Username Input -->
                <div>
                    <input 
                        type="text" 
                        name="username" 
                        placeholder="Username"
                        value="{{ old('username') }}"
                        class="w-full px-3 py-2 border-b border-gray-300 focus:border-[#55B76B] focus:outline-none"
                        required
                    >
                    @if($errors->has('username'))
                        <div class="mt-2 text-sm text-warning">
                            {{ $errors->first('username') }}
                        </div>
                    @endif
                </div>

                <!-- Email Input -->
                <div>
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Email"
                        value="{{ old('email') }}"
                        class="w-full px-3 py-2 border-b border-gray-300 focus:border-[#55B76B] focus:outline-none"
                        required
                    >
                    @if($errors->has('email'))
                        <div class="mt-2 text-sm text-warning">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <!-- Phone Number Input -->
                <div>
                    <input 
                        type="tel" 
                        name="phone" 
                        placeholder="Phone Number"
                        value="{{ old('phone') }}"
                        class="w-full px-3 py-2 border-b border-gray-300 focus:border-[#55B76B] focus:outline-none"
                        required
                    >
                    @if($errors->has('phone'))
                        <div class="mt-2 text-sm text-warning">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
                </div>

                <!-- Password Input -->
                <div>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Password"
                        class="w-full px-3 py-2 border-b border-gray-300 focus:border-[#55B76B] focus:outline-none"
                        required
                    >
                    @if($errors->has('password'))
                        <div class="mt-2 text-sm text-warning">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <!-- Create Account Button -->
                <button 
                    type="submit"
                    class="w-full bg-[#00B517] text-white py-3 rounded-md hover:bg-[#009714] transition-colors font-medium"
                >
                    Create Account
                </button>
            </form>

            <!-- Login Link -->
            <div class="mt-6 text-center text-sm text-gray-600">
                Already have account? 
                <a href="{{ route('home') }}" class="text-[#55B76B] hover:underline">Log In</a>
            </div>
        </div>
    </div>
</div>
@endsection
