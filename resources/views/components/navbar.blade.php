<header>
    <div class="navbar lg:px-20 mx-auto relative">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="{{ route('home') }}" class="font-semibold">Home</a></li>
                    <li><a href="{{ route('catalog') }}" class="font-semibold">Shop</a></li>
                    <li><a class="font-semibold">Categories</a></li>
                    <li><a href="#about" class="font-semibold">About Us</a></li>
                    <li><a href="#contact" class="font-semibold">Contact Us</a></li>
                </ul>
            </div>
            @include('components.icon')
        </div>
        <div class="navbar-center hidden lg:flex font-medium">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('home') }}"
                        class="font-semibold text-blue hover:bg-[#55B76B] hover:text-white">Home</a></li>
                <li><a href="{{ route('catalog') }}"
                        class="font-semibold text-blue hover:bg-[#55B76B] hover:text-white">Shop</a></li>
                <li>
                    <details>
                        <summary class="font-semibold text-blue hover:bg-[#55B76B] hover:text-white">Categories
                        </summary>
                        <ul class="p-2 bg-base-100 rounded-t-none">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('catalog', ['filter[category_id]' => $category->id]) }}"
                                        class="font-semibold">{{ $category->nama_kategori }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </details>
                </li>
                <li><a href="#about" class="font-semibold text-blue hover:bg-[#55B76B] hover:text-white">About Us</a>
                </li>
                <li><a href="#contact" class="font-semibold text-blue hover:bg-[#55B76B] hover:text-white">Contact
                        Us</a></li>
            </ul>
        </div>
        <div class="navbar-end gap-2">
            <!-- Shopping Cart -->

            @if (Auth::check())
                <a href="{{ route('products.cart') }}" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="badge badge-sm indicator-item">{{ $total }}</span>
                    </div>
                </a>
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="User Avatar" src="{{ asset('images/icons/user.svg') }}" />
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        @if (Auth::user()->role === 'admin')
                            <li><a href="{{ route('manage.product') }}">Manage Products</a></li>
                        @endif
                        <li><a>Profile</a></li>
                        <li><a>Orders</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a class="btn rounded-full hover:bg-[#55B76B] text-white border border-0 md:w-[120px]"
                    href="#login">Login</a>
            @endif
        </div>
    </div>
</header>
