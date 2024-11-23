@extends('layouts.main')
@section('content')
    <div class="bg-gray-50">
        <!-- Header - Full Width -->
        <div class="relative w-full h-[300px] overflow-hidden">
            <img src="{{ asset('images/bg_auth.png') }}" alt="Shop Banner" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center justify-center">
                <h1 class="text-4xl font-bold text-[#55B76B]">Shop</h1>
            </div>
        </div>

        <!-- Filters and Sort - Full Width -->
        <div class="w-full bg-[#55B76B] mb-8">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between p-4">
                    <!-- Sort Dropdown -->
                    <div class="relative">
                        <button id="sortButton"
                            class="group inline-flex items-center text-sm font-medium text-white hover:text-gray-100">
                            Show: 15
                            <svg class="ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                            </svg>
                        </button>
                        <div id="sortMenu"
                            class="hidden absolute left-0 mt-2 w-40 rounded-md bg-white shadow-lg ring-1 ring-[#55B76B] ring-opacity-5 z-50">
                            <div class="py-1">
                                <a href="{{ request()->fullUrlWithQuery(['show' => 15]) }}"
                                    class="block px-4 py-2 text-sm text-[#55B76B] hover:bg-[#55B76B] hover:bg-opacity-10">15</a>
                                <a href="{{ request()->fullUrlWithQuery(['show' => 30]) }}"
                                    class="block px-4 py-2 text-sm text-[#55B76B] hover:bg-[#55B76B] hover:bg-opacity-10">30</a>
                                <a href="{{ request()->fullUrlWithQuery(['show' => 50]) }}"
                                    class="block px-4 py-2 text-sm text-[#55B76B] hover:bg-[#55B76B] hover:bg-opacity-10">50</a>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile filter button -->
                    <button type="button" id="openFilterBtn"
                        class="inline-block text-sm font-medium text-white hover:text-gray-100 sm:hidden">
                        Filters
                    </button>

                    <!-- Desktop filters -->
                    <div class="hidden sm:flex sm:items-center sm:space-x-8">
                        <!-- Category Filter -->
                        <div class="relative">
                            <button id="categoryButton"
                                class="group inline-flex items-center text-sm font-medium text-white hover:text-gray-100">
                                Category
                                <svg class="ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                                </svg>
                            </button>
                            <div id="categoryMenu"
                                class="hidden absolute left-0 mt-2 w-40 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 z-50">
                                <div class="py-1">
                                    <div class="px-4 py-2">
                                        <div class="space-y-4">
                                            @foreach ($categories as $category)
                                                <div class="flex items-center">
                                                    <input id="category-{{ $category->id }}" type="checkbox"
                                                        value="{{ $category->id }}"
                                                        class="h-4 w-4 rounded border-gray-300 text-[#55B76B] category-checkbox"
                                                        {{ in_array($category->id, (array) request()->input('filter.category_id', [])) ? 'checked' : '' }}>
                                                    <label for="category-{{ $category->id }}"
                                                        class="ml-3 text-sm text-gray-500">
                                                        {{ $category->nama_kategori }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sort by -->
                        <div class="relative">
                            <button id="sortByButton"
                                class="group inline-flex items-center text-sm font-medium text-white hover:text-gray-100">
                                Sort by: Default
                                <svg class="ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                                </svg>
                            </button>
                            <div id="sortByMenu"
                                class="hidden absolute left-0 mt-2 w-40 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 z-50">
                                <div class="py-1">
                                    <a href="?{{ http_build_query(array_merge(request()->query(), ['sort' => 'created_at'])) }}"
                                        class="block px-4 py-2 text-sm text-[#55B76B] hover:bg-[#55B76B] hover:bg-opacity-10">Default</a>
                                    <a href="?{{ http_build_query(array_merge(request()->query(), ['sort' => '-harga'])) }}"
                                        class="block px-4 py-2 text-sm text-[#55B76B] hover:bg-[#55B76B] hover:bg-opacity-10">Price:
                                        High to Low</a>
                                    <a href="?{{ http_build_query(array_merge(request()->query(), ['sort' => 'harga'])) }}"
                                        class="block px-4 py-2 text-sm text-[#55B76B] hover:bg-[#55B76B] hover:bg-opacity-10">Price:
                                        Low to High</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content - Contained Width -->
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Product Grid -->
            <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
                @foreach ($products->items() as $product)
                    @auth
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_produk" value="{{ $product->id_produk }}">
                            <div class="group relative flex flex-col">
                                <div class="h-56 w-full overflow-hidden rounded-md bg-gray-200 lg:h-72 xl:h-80">
                                    <img src="{{ asset('images/icons/1.png') }}" alt="Organic cotton tote bag"
                                        class="h-full w-full rounded-md rounded">
                                </div>
                                <h3 class="mt-4 text-sm text-[#333333] font-medium">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        {{ $product->nama_produk }}
                                    </a>
                                </h3>
                                <div class="flex justify-between items-center mt-1">
                                    <p class="text-sm font-semibold text-[#333333] font-bold">Rp
                                        {{ number_format($product->harga, 0, ',', '.') }}</p>
                                    <p class="text-sm text-gray-500">235 Reviews</p>
                                </div>
                                <div class="relative flex justify-center items-center">
                                    <button type="submit"
                                        class="w-full mt-3 mb-3 bg-[#55B76B] text-white py-1 px-2 text-center rounded-md hover:bg-[#3B8B4B] transition-colors w-[149px] font-bold">
                                        Add To Cart
                                    </button>
                                </div>
                            </div>
                        </form>
                    @else
                        <div class="group relative flex flex-col">
                            <div class="h-56 w-full overflow-hidden rounded-md bg-gray-200 lg:h-72 xl:h-80">
                                <img src="{{ asset('images/icons/1.png') }}" alt="Organic cotton tote bag"
                                    class="h-full w-full rounded-md rounded">
                            </div>
                            <h3 class="mt-4 text-sm text-[#333333] font-medium">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    {{ $product->nama_produk }}
                                </a>
                            </h3>
                            <div class="flex justify-between items-center mt-1">
                                <p class="text-sm font-semibold text-[#333333] font-bold">Rp
                                    {{ number_format($product->harga, 0, ',', '.') }}</p>
                                <p class="text-sm text-gray-500">235 Reviews</p>
                            </div>
                            <div class="relative flex justify-center items-center">
                                <a href="{{ route('home') }}/#login"
                                    class="w-full mt-3 mb-3 bg-[#55B76B] text-white py-1 px-2 text-center rounded-md hover:bg-[#3B8B4B] transition-colors w-[149px] font-bold">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    @endauth
                @endforeach
            </div>

            <!-- Pagination -->
            {{ $products->links('vendor.pagination.custom') }}
        </div>

        <!-- Mobile filter dialog - Moved to end but still within main container -->
        <div id="mobileFilterDialog" class="relative z-40 sm:hidden hidden">
            <div class="fixed inset-0 bg-black bg-opacity-25"></div>
            <div class="fixed inset-0 z-40 flex">
                <div
                    class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-6 shadow-xl">
                    <!-- Filter Header -->
                    <div class="flex items-center justify-between px-4">
                        <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                        <button type="button" id="closeFilterBtn"
                            class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-50">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Filters -->
                    <form class="mt-4">
                        <!-- Category Filter -->
                        <div class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <button type="button"
                                    class="filter-toggle flex w-full items-center justify-between bg-white px-2 py-3 text-sm text-gray-400">
                                    <span class="font-medium text-gray-900">Category</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="filter-content pt-6 hidden">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="filter-category-0" name="category[]" value="tees" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600">
                                        <label for="filter-category-0" class="ml-3 text-sm text-gray-500">Tees</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-category-1" name="category[]" value="crewnecks"
                                            type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600">
                                        <label for="filter-category-1"
                                            class="ml-3 text-sm text-gray-500">Crewnecks</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="filter-category-2" name="category[]" value="hats" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600">
                                        <label for="filter-category-2" class="ml-3 text-sm text-gray-500">Hats</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Brand Filter -->
                        <div class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <button type="button"
                                    class="filter-toggle flex w-full items-center justify-between bg-white px-2 py-3 text-sm text-gray-400">
                                    <span class="font-medium text-gray-900">Brand</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" />
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="filter-content pt-6 hidden">
                                <!-- Brand filter options -->
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all dropdown buttons and menus
            const sortButton = document.getElementById('sortButton');
            const sortMenu = document.getElementById('sortMenu');
            const categoryButton = document.getElementById('categoryButton');
            const categoryMenu = document.getElementById('categoryMenu');
            const sortByButton = document.getElementById('sortByButton');
            const sortByMenu = document.getElementById('sortByMenu');

            // Function to toggle dropdown
            function toggleDropdown(menu) {
                // Close all other menus first
                [sortMenu, categoryMenu, sortByMenu].forEach(m => {
                    if (m !== menu) m?.classList.add('hidden');
                });
                // Toggle the clicked menu
                menu?.classList.toggle('hidden');
            }

            // Event listeners for dropdown buttons
            sortButton?.addEventListener('click', (e) => {
                e.stopPropagation();
                toggleDropdown(sortMenu);
            });

            categoryButton?.addEventListener('click', (e) => {
                e.stopPropagation();
                toggleDropdown(categoryMenu);
            });

            sortByButton?.addEventListener('click', (e) => {
                e.stopPropagation();
                toggleDropdown(sortByMenu);
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.relative')) {
                    [sortMenu, categoryMenu, sortByMenu].forEach(menu => {
                        menu?.classList.add('hidden');
                    });
                }
            });

            // Handle category checkboxes
            const categoryCheckboxes = document.querySelectorAll('.category-checkbox');

            categoryCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const selectedCategories = Array.from(categoryCheckboxes)
                        .filter(cb => cb.checked)
                        .map(cb => cb.value);

                    // Get current URL parameters
                    const urlParams = new URLSearchParams(window.location.search);

                    // Update or remove the filter parameter
                    if (selectedCategories.length > 0) {
                        urlParams.set('filter[category_id]', selectedCategories.join(','));
                    } else {
                        urlParams.delete('filter[category_id]');
                    }

                    // Redirect with new parameters
                    window.location.href = `${window.location.pathname}?${urlParams.toString()}`;
                });
            });

            // Update button texts based on current parameters
            const currentSort = new URLSearchParams(window.location.search).get('sort');
            if (sortByButton && currentSort) {
                switch (currentSort) {
                    case 'harga':
                        sortByButton.textContent = 'Sort by: Price Low to High';
                        break;
                    case '-harga':
                        sortByButton.textContent = 'Sort by: Price High to Low';
                        break;
                    default:
                        sortByButton.textContent = 'Sort by: Default';
                        break;
                }
            }

            const currentShow = new URLSearchParams(window.location.search).get('show') || '15';
            if (sortButton) {
                sortButton.textContent = `Show: ${currentShow}`;
            }
        });
    </script>
@endsection
