@extends("layouts.main")
@section("content")
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
        <!-- Product details -->
        <div class="lg:max-w-lg lg:col-start-2 lg:row-start-1 lg:self-center">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-2">
                    <li>
                        <div class="flex items-center text-sm">
                            <a href="#" class="font-medium text-gray-500 hover:text-gray">Travel</a>

                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                 aria-hidden="true" class="ml-2 h-5 w-5 flex-shrink-0 text-gray-300">
                                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"/>
                            </svg>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center text-sm">
                            <a href="#" class="font-medium text-gray hover:text-gray">Bags</a>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="mt-4">
                <h1 class="text-3xl font-bold tracking-tight text-blue sm:text-4xl">Everyday Ruck Snack</h1>
            </div>

            <section aria-labelledby="information-heading" class="mt-4">
                <h2 id="information-heading" class="sr-only">Product information</h2>

                <div class="flex items-center">
                    <p class="text-lg text-orange font-bold sm:text-xl">$220</p>
                </div>

                <p class="text-blue font-medium mt-4">
                    <span>Description</span>
                </p>
                <div class="mt-4 space-y-6">
                    <p class="text-base text-gray">Don&#039;t compromise on snack-carrying capacity with this
                        lightweight and spacious bag. The drawstring top keeps all your favorite chips, crisps, fries,
                        biscuits, crackers, and cookies secure.</p>
                </div>

                <div class="mt-6 flex items-center">
                    <!-- Heroicon name: mini/check -->
                    <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                              clip-rule="evenodd"/>
                    </svg>
                    <p class="ml-2 text-sm text-blue font-semibold">In stock and ready to ship</p>
                </div>
                <h3 class="mb-5 mt-2 text-md font-medium text-blue">Tersedia dalam: </h3>
                <ul class="flex  md:grid-cols-6">
                    <li class="mx-2">
                        <input type="radio" id="size-s" name="hosting" value="size-s" class="hidden peer"
                               required>
                        <label for="size-s"
                               class="inline-flex items-center justify-center w-[79px] h-[51px] px-3 py-2 text-gray bg-white border border-gray peer-checked:border-0 rounded-lg cursor-pointer  peer-checked:bg-orange peer-checked:text-white hover:text-gray-600 hover:bg-gray-100">
                            <div class="text-lg font-semibold">S</div>
                        </label>
                    </li>
                    <li class="mx-2">
                        <input type="radio" id="size-m" name="hosting" value="size-m" class="hidden peer"
                               required>
                        <label for="size-m"
                               class="inline-flex items-center justify-center w-[79px] h-[51px] px-3 py-2 text-gray bg-white border border-gray peer-checked:border-0 rounded-lg cursor-pointer  peer-checked:bg-orange peer-checked:text-white hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <div class="text-lg font-semibold">M</div>
                        </label>
                    </li>
                    <li class="mx-2">
                        <input type="radio" id="size-l" name="hosting" value="size-l" class="hidden peer"
                               required>
                        <label for="size-l"
                               class="inline-flex items-center justify-center w-[79px] h-[51px] px-3 py-2 text-gray bg-white border border-gray peer-checked:border-0 rounded-lg cursor-pointer  peer-checked:bg-orange peer-checked:text-white hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <div class="text-lg font-semibold">L</div>
                        </label>
                    </li>
                    <li class="mx-2">
                        <input type="radio" id="size-xl" name="hosting" value="size-xl" class="hidden peer"
                               required>
                        <label for="size-xl"
                               class="inline-flex items-center justify-center w-[79px] h-[51px] px-3 py-2 text-gray bg-white border border-gray peer-checked:border-0 rounded-lg cursor-pointer  peer-checked:bg-orange peer-checked:text-white hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <div class="text-lg font-semibold">XL</div>
                        </label>
                    </li>
                </ul>
            </section>
        </div>

        <!-- Product image -->
        <div class="mt-10 lg:col-start-1 lg:row-start-1 lg:mt-0 lg:self-end">
            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg">
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-featured-product-shot.jpg"
                     alt="Model wearing light green backpack with black canvas straps and front zipper pouch."
                     class="h-full  object-cover object-center">
            </div>
        </div>
    </div>

    <!-- Produk terkait -->
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-blue">Produk Terkait</h2>

        <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-5 md:gap-y-0 lg:gap-x-8">
            @for($i = 0; $i < 5; $i++)
                <div class="group relative my-2">
                    <div
                        class="h-56 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg"
                             alt="Hand stitched, orange leather long wallet."
                             class="h-full w-full object-cover object-center">
                    </div>
                    <div class="block lg:flex lg:justify-between lg:items-center">
                        <div>
                            <h3 class="mt-4 text-sm text-blue font-bold">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Leather Long Wallet
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray font-medium">Natural</p>
                        </div>
                        <p class="mt-1 text-sm text-orange font-semibold">$75</p>
                    </div>
                </div>
            @endfor
            <!-- More products... -->
        </div>
    </div>
@endsection
