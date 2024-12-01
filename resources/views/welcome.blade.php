<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cihuyy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen lg:mx-auto">
    <div class="bg-white">
        @include('components.navbar')

        <!-- Hero section -->
        <div class="pt-16 pb-32 sm:pt-24">
            <div class="relative mx-auto max-w-[1440px] px-4 sm:px-16">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                    <!-- Left content -->
                    <div class="flex-1 lg:max-w-[500px]">
                        <h1 class="text-4xl sm:text-5xl font-bold tracking-tight text-[#333333] mb-4">Welcome to
                            <span class="text-[#55B76B]">GreenKingdom</span>
                        </h1>
                        <p class="mt-4 text-xl text-[#333333] font-semibold">Your Eco-Friendly</p>
                        <p class="text-xl text-[#55B76B] font-semibold mb-6">Shopping Destination</p>
                        <div class="flex">
                            <a href="{{ route('catalog') }}"
                                class="bg-[#55B76B] text-white py-2 px-8 rounded-md hover:bg-[#3B8B4B] transition-colors font-bold flex items-center gap-2">
                                SHOP NOW
                            </a>
                        </div>
                    </div>

                    <!-- Right content - Updated with correct sizing -->
                    <div class="flex-1 relative max-w-[300px] sm:max-w-[400px] lg:max-w-[500px] w-full">
                        <!-- Outer rectangle with border -->
                        <div
                            class="absolute top-4 right-4 w-full h-[300px] sm:h-[400px] lg:h-[480px] border-2 border-[#55B76B] rounded-3xl">
                        </div>

                        <!-- Inner rectangle with bg_hero background -->
                        <div class="relative w-full h-[300px] sm:h-[400px] lg:h-[480px] rounded-3xl overflow-hidden">
                            <!-- Background image -->
                            <div class="absolute inset-0">
                                <img src="{{ asset('images/bg_hero.png') }}" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <!-- Image container -->
                            <div class="absolute inset-0 flex items-center justify-center p-4 sm:p-6">
                                <img src="{{ asset('images/icons/1.png') }}" alt="Eco-friendly products"
                                    class="w-full h-auto max-h-[250px] sm:max-h-[320px] lg:max-h-[400px] object-contain rounded-2xl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why us section -->
        <div class="relative py-20">
            <!-- Background decorative elements -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/bulb_icon.png') }}" alt="" class="absolute left-0 top-0 h-32 w-32">
                <img src="{{ asset('images/leaf.png') }}" alt="" class="absolute right-0 bottom-0 h-80 w-80">
            </div>

            <!-- Content -->
            <div class="relative z-10 mx-auto max-w-[1440px] px-16">
                <h2 class="text-2xl font-bold tracking-tight text-[#333333] text-center">Kenapa Memilih GreenKingdom?
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mt-4 gap-4">
                    <div class="p-4 rounded-lg text-center">
                        <img src="{{ asset('images/icons/1.svg') }}" class="mx-auto mb-3 h-[110px]">
                        <div class="text-sm lg:text-lg font-bold text-[#333333] mb-2">Sustainable Products</div>
                        <div class="text-xs lg:text-sm text-gray">Jelajahi kami yang dikuratori dengan cermat pemilihan
                            produk berkelanjutan, masing-masing dirancang untuk mengurangi jejak karbon</div>
                    </div>

                    <div class="p-4 rounded-lg text-center">
                        <img src="{{ asset('images/icons/2.svg') }}" class="mx-auto mb-3 h-[110px]">
                        <div class="text-sm lg:text-lg font-bold text-[#333333] mb-2">Ramah Lingkungan</div>
                        <div class="text-xs lg:text-sm text-gray">Buat pilihan dengan Produk yang ramah lingkungan,
                            mengetahui bahwa pembelian Anda mempromosikan etis Sumber dan Bertanggung Jawab praktik
                            manufaktur.</div>
                    </div>

                    <div class="p-4 rounded-lg text-center">
                        <img src="{{ asset('images/icons/3.svg') }}" class="mx-auto mb-3 h-[110px]">
                        <div class="text-sm lg:text-lg font-bold text-[#333333] mb-2">Pilihan Berkualitas Tinggi</div>
                        <div class="text-xs lg:text-sm text-gray">Berinvestasi dalam jangka panjang dan andal Produk
                            yang memenuhi standar kualitas, memastikan Anda kepuasan dan keawetan barang pembelian Anda.
                        </div>
                    </div>

                    <div class="p-4 rounded-lg text-center">
                        <img src="{{ asset('images/icons/4.svg') }}" class="mx-auto mb-3 h-[110px]">
                        <div class="text-sm lg:text-lg font-bold text-[#333333] mb-2">Keamanan Kemasan</div>
                        <div class="text-xs lg:text-sm text-gray">Kemasan berkelanjutan kami memastikan bahwa pesanan
                            Anda tiba dengan selamat sambil meminimalkan dampaknya pada planet ini.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contoh produk -->
        <div class="mx-auto max-w-[1440px] px-16 py-16">
            <h2 class="text-2xl font-bold tracking-tight text-blue text-center">Our Best-Selling Products</h2>

            <div
                class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-10 sm:gap-x-6 md:gap-y-0 lg:gap-x-8">
                @foreach ($products as $product)
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
                            <p class="text-sm font-semibold text-[#333333] font-bold">Rp.
                                {{ number_format($product->harga, 0, ',', '.') }}</p>
                            <p class="text-sm text-gray-500">235 Reviews</p>
                        </div>
                        <div class="relative flex justify-center items-center">
                            <button
                                class="w-full mt-3 mb-3 bg-[#55B76B] text-white py-1 px-2 rounded-md hover:bg-[#3B8B4B] transition-colors w-[149px] font-bold">
                                Buy Now
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="flex justify-center mt-12">
                <a href="{{ route('catalog') }}"
                    class="inline-flex items-center px-8 py-3 text-base font-bold rounded-md text-white bg-[#55B76B] hover:translate-x-1 hover:-translate-y-1 transition-transform border-4 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                    Explore More Products
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- Abous Us -->
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32" id="about">
            <img src="{{ asset('images/butterfly_large.png') }}" alt=""
                class="absolute right-0 top-0 h-24 w-24">
            <img src="{{ asset('images/bg.png') }}" alt=""
                class="absolute inset-0 -z-10 h-full w-full object-cover object-center opacity-50">
            <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
                aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>

            <div class="relative z-10 mx-auto max-w-[1440px] px-16">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="text-4xl font-bold mb-4 text-[#333333]">About us</h2>

                    <div class="mb-8">
                        <img src="{{ asset('images/logo.png') }}" alt="GreenKingdom"
                            class="h-12 mx-auto bg-white rounded-lg">
                    </div>

                    <p class="text-[#333333] mb-12 font-semibold">
                        At GreenKingdom, we are more than just an e-commerce website; we are a passionate community
                        dedicated to fostering a sustainable and eco-friendly lifestyle. Our mission is to empower
                        environmentally-conscious consumers by offering a curated selection of high-quality, sustainable
                        products that inspire positive change and make a difference in the world.
                    </p>

                    <div class="bg-green-50 p-8 rounded-lg mb-8">
                        <h3 class="text-xl font-bold mb-4 text-[#333333]">Mission Statement</h3>
                        <p class="text-[#333333] italic font-semibold">
                            "To be the leading platform for sustainable living, providing eco-friendly products and
                            fostering a green community that promotes conscious consumption and environmental
                            responsibility"
                        </p>
                    </div>

                    <div class="bg-green-50 p-8 rounded-lg">
                        <h3 class="text-xl font-bold mb-4 text-[#333333]">Vision Statement</h3>
                        <p class="text-[#333333] italic font-semibold">
                            "To create a greener future for generations to come, where every choice matters, and
                            sustainability is at the core of everyday living. We envision a world where eco-friendly
                            practices are the norm, and together, we can make a significant impact on the health of our
                            planet"
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Customer Reviews Section -->
        <div class="relative py-20">
            <!-- Decorative elements -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/recycle_icon.png') }}" alt=""
                    class="absolute left-0 top-0 h-32 w-32">
                <img src="{{ asset('images/daun_icon.png') }}" alt=""
                    class="absolute right-0 top-0 h-24 w-24">
                <img src="{{ asset('images/turbine_icon.png') }}" alt=""
                    class="absolute right-0 bottom-0 h-40 w-40">
            </div>

            <!-- Content -->
            <div class="relative z-10 mx-auto max-w-[1440px] px-16">
                <h2 class="text-2xl font-bold tracking-tight text-[#333333] text-center mb-12">Customer Reviews</h2>
                <div class="relative">
                    <!-- Reviews Wrapper -->
                    <div id="reviewsContainer" class="overflow-hidden">
                        <div id="reviewsSlider" class="flex transition-transform duration-300 ease-in-out">
                            <!-- Review Card 1 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="bg-white p-6 rounded-lg shadow-lg relative border border-[#55B76B] h-[300px] flex flex-col">
                                    <div class="absolute top-4 right-4">
                                        <div class="w-2 h-2 rounded-full bg-[#55B76B]"></div>
                                    </div>
                                    <div class="flex flex-col items-center flex-grow">
                                        <img src="{{ asset('images/image.png') }}" 
                                             alt="Ariana G" 
                                             class="w-20 h-20 rounded-full mb-4 object-cover">
                                        <h3 class="text-lg font-bold text-[#333333] mb-2">Ariana G</h3>
                                        <p class="text-sm text-center text-gray-600 mb-4 flex-grow">
                                            "LUVV the totebag. Thanks GreenKingdom For making and be an E-commerce
                                            for so many Eco-Friendly Product"
                                        </p>
                                        <div class="flex gap-1">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5 text-[#FFA500]" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Card 2 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="bg-white p-6 rounded-lg shadow-lg relative border border-[#55B76B] h-[300px] flex flex-col">
                                    <div class="absolute top-4 right-4">
                                        <div class="w-2 h-2 rounded-full bg-[#55B76B]"></div>
                                    </div>
                                    <div class="flex flex-col items-center flex-grow">
                                        <img src="{{ asset('images/image-1.png') }}" 
                                             alt="Mark" 
                                             class="w-20 h-20 rounded-full mb-4 object-cover">
                                        <h3 class="text-lg font-bold text-[#333333] mb-2">Mark</h3>
                                        <p class="text-sm text-center text-gray-600 mb-4 flex-grow">
                                            "Bamboo Toothbrushes dari GreenKingdom daebak!!, i will make sure all my
                                            members buy
                                            this Eco-Friendly Bamboo Toothbrushes"
                                        </p>
                                        <div class="flex gap-1">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5 text-[#FFA500]" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Card 3 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="bg-white p-6 rounded-lg shadow-lg relative border border-[#55B76B] h-[300px] flex flex-col">
                                    <div class="absolute top-4 right-4">
                                        <div class="w-2 h-2 rounded-full bg-[#55B76B]"></div>
                                    </div>
                                    <div class="flex flex-col items-center flex-grow">
                                        <img src="{{ asset('images/image-2.png') }}" 
                                             alt="JK" 
                                             class="w-20 h-20 rounded-full mb-4 object-cover">
                                        <h3 class="text-lg font-bold text-[#333333] mb-2">JK</h3>
                                        <p class="text-sm text-center text-gray-600 mb-4 flex-grow">
                                            "I recently bought the Hemp Backpack from GreenKingdom, and I must say
                                            it's a fantastic
                                            investment. The durability of the hemp material is impressive, and I
                                            feel good knowing
                                            I'm choosing a sustainable alternative."
                                        </p>
                                        <div class="flex gap-1">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5 text-[#FFA500]" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Card 4 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="bg-white p-6 rounded-lg shadow-lg relative border border-[#55B76B] h-[300px] flex flex-col">
                                    <div class="absolute top-4 right-4">
                                        <div class="w-2 h-2 rounded-full bg-[#55B76B]"></div>
                                    </div>
                                    <div class="flex flex-col items-center flex-grow">
                                        <img src="{{ asset('images/image.png') }}" 
                                             alt="Ariana G" 
                                             class="w-20 h-20 rounded-full mb-4 object-cover">
                                        <h3 class="text-lg font-bold text-[#333333] mb-2">Ariana G</h3>
                                        <p class="text-sm text-center text-gray-600 mb-4 flex-grow">
                                            "The reusable water bottle is perfect! No more plastic bottles for me. GreenKingdom is helping me live more sustainably."
                                        </p>
                                        <div class="flex gap-1">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5 text-[#FFA500]" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Card 5 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="bg-white p-6 rounded-lg shadow-lg relative border border-[#55B76B] h-[300px] flex flex-col">
                                    <div class="absolute top-4 right-4">
                                        <div class="w-2 h-2 rounded-full bg-[#55B76B]"></div>
                                    </div>
                                    <div class="flex flex-col items-center flex-grow">
                                        <img src="{{ asset('images/image-1.png') }}" 
                                             alt="Mark" 
                                             class="w-20 h-20 rounded-full mb-4 object-cover">
                                        <h3 class="text-lg font-bold text-[#333333] mb-2">Mark</h3>
                                        <p class="text-sm text-center text-gray-600 mb-4 flex-grow">
                                            "Love their eco-friendly makeup removers! They work so well and I feel good about not creating waste."
                                        </p>
                                        <div class="flex gap-1">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5 text-[#FFA500]" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Card 6 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="bg-white p-6 rounded-lg shadow-lg relative border border-[#55B76B] h-[300px] flex flex-col">
                                    <div class="absolute top-4 right-4">
                                        <div class="w-2 h-2 rounded-full bg-[#55B76B]"></div>
                                    </div>
                                    <div class="flex flex-col items-center flex-grow">
                                        <img src="{{ asset('images/image-2.png') }}" 
                                             alt="Jennie" 
                                             class="w-20 h-20 rounded-full mb-4 object-cover">
                                        <h3 class="text-lg font-bold text-[#333333] mb-2">Jennie</h3>
                                        <p class="text-sm text-center text-gray-600 mb-4 flex-grow">
                                            "The bamboo cutlery set is perfect for my lunch box. No more disposable plastic utensils!"
                                        </p>
                                        <div class="flex gap-1">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5 text-[#FFA500]" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Card 7 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="bg-white p-6 rounded-lg shadow-lg relative border border-[#55B76B] h-[300px] flex flex-col">
                                    <div class="absolute top-4 right-4">
                                        <div class="w-2 h-2 rounded-full bg-[#55B76B]"></div>
                                    </div>
                                    <div class="flex flex-col items-center flex-grow">
                                        <img src="{{ asset('images/image.png') }}" 
                                             alt="Jisoo" 
                                             class="w-20 h-20 rounded-full mb-4 object-cover">
                                        <h3 class="text-lg font-bold text-[#333333] mb-2">Jisoo</h3>
                                        <p class="text-sm text-center text-gray-600 mb-4 flex-grow">
                                            "These eco-friendly cleaning products are amazing! They clean just as well as conventional ones but better for the environment."
                                        </p>
                                        <div class="flex gap-1">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5 text-[#FFA500]" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Card 8 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="bg-white p-6 rounded-lg shadow-lg relative border border-[#55B76B] h-[300px] flex flex-col">
                                    <div class="absolute top-4 right-4">
                                        <div class="w-2 h-2 rounded-full bg-[#55B76B]"></div>
                                    </div>
                                    <div class="flex flex-col items-center flex-grow">
                                        <img src="{{ asset('images/image-1.png') }}" 
                                             alt="Jin" 
                                             class="w-20 h-20 rounded-full mb-4 object-cover">
                                        <h3 class="text-lg font-bold text-[#333333] mb-2">Jin</h3>
                                        <p class="text-sm text-center text-gray-600 mb-4 flex-grow">
                                            "The quality of GreenKingdom's products is outstanding. The reusable produce bags are sturdy and perfect for grocery shopping!"
                                        </p>
                                        <div class="flex gap-1">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5 text-[#FFA500]" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Card 9 -->
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-3">
                                <div class="bg-white p-6 rounded-lg shadow-lg relative border border-[#55B76B] h-[300px] flex flex-col">
                                    <div class="absolute top-4 right-4">
                                        <div class="w-2 h-2 rounded-full bg-[#55B76B]"></div>
                                    </div>
                                    <div class="flex flex-col items-center flex-grow">
                                        <img src="{{ asset('images/image-2.png') }}" 
                                             alt="Suga" 
                                             class="w-20 h-20 rounded-full mb-4 object-cover">
                                        <h3 class="text-lg font-bold text-[#333333] mb-2">Suga</h3>
                                        <p class="text-sm text-center text-gray-600 mb-4 flex-grow">
                                            "Started with one product, now I've replaced all my household items with GreenKingdom's eco-friendly alternatives. Best decision ever!"
                                        </p>
                                        <div class="flex gap-1">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5 text-[#FFA500]" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Arrows -->
                    <button onclick="moveSlide(-1)" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-6"
                        id="prevReview">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 19L8 12L15 5" stroke="#333333" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button onclick="moveSlide(1)" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-6"
                        id="nextReview">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5L16 12L9 19" stroke="#333333" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <!-- Navigation Dots -->
                    <div class="flex justify-center gap-2 mt-8">
                        <button class="w-2 h-2 rounded-full bg-[#55B76B] dot-indicator" data-index="0"></button>
                        <button class="w-2 h-2 rounded-full bg-gray-300 dot-indicator" data-index="1"></button>
                        <button class="w-2 h-2 rounded-full bg-gray-300 dot-indicator" data-index="2"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section -->
    <div class="relative bg-[#55B76B] px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/butterfly_white.png') }}" alt=""
                class="absolute left-0 top-0 h-32 w-32">
            <div class="h-1/3 bg-[#55B76B] sm:h-2/3"></div>
        </div>
        <div class="relative z-[5] mx-auto max-w-7xl">
            <div class="text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Blogs</h2>
            </div>
            <div
                class="mx-auto mt-12 grid max-w-lg gap-5 md:max-w-none md:grid-cols-2 lg:grid-cols-3 [&>*:last-child]:md:col-span-2 [&>*:last-child]:md:mx-auto [&>*:last-child]:md:w-[calc(50%-0.625rem)] [&>*:last-child]:lg:col-span-1 [&>*:last-child]:lg:w-auto">

                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover"
                            src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                            alt="">
                    </div>
                    <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-[#333333]">
                                <a href="#" class="hover:underline">Article</a>
                            </p>
                            <a href="#" class="mt-2 block">
                                <p class="text-xl font-semibold text-[#333333]">Embracing Sustainability</p>
                                <p class="mt-3 text-base text-[#333333]">The Power of Eco-Friendly Products
                                    at GreenKingdom.</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Roel Aufderehar</span>
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-[#333333]">
                                    <a href="#" class="hover:underline">Roel Aufderehar</a>
                                </p>
                                <div class="flex space-x-1 text-sm text-[#333333]">
                                    <time datetime="2020-03-16">Mar 16, 2020</time>
                                    <span aria-hidden="true">&amp;middot;</span>
                                    <span>6 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover"
                            src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                            alt="">
                    </div>
                    <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-[#333333]">
                                <a href="#" class="hover:underline">Article</a>
                            </p>
                            <a href="#" class="mt-2 block">
                                <p class="text-xl font-semibold text-[#333333]">Sustainable Living
                                    Made Simple</p>
                                <p class="mt-3 text-base text-[#333333]">How GreenKingdom Helps You Make a
                                    Difference</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Brenna Goyette</span>
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-[#333333]">
                                    <a href="#" class="hover:underline">Brenna Goyette</a>
                                </p>
                                <div class="flex space-x-1 text-sm text-[#333333]">
                                    <time datetime="2020-03-10">Mar 10, 2020</time>
                                    <span aria-hidden="true">&amp;middot;</span>
                                    <span>4 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover"
                            src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80"
                            alt="">
                    </div>
                    <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-[#333333]">
                                <a href="#" class="hover:underline">Article</a>
                            </p>
                            <a href="#" class="mt-2 block">
                                <p class="text-xl font-semibold text-[#333333]">GreenKingdom's Guide to
                                    Eco-Friendly Shopping</p>
                                <p class="mt-3 text-base text-[#333333]">Reducing Your Carbon Footprint
                                    One Purchase at a Time</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Daniela Metz</span>
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-[#333333]">
                                    <a href="#" class="hover:underline">Daniela Metz</a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-02-12">Feb 12, 2020</time>
                                    <span aria-hidden="true">&amp;middot;</span>
                                    <span>11 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Login Section -->
    <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32" id="login">
        <!-- Decorative elements -->
        <div class="absolute inset-0 z-10">
            <img src="{{ asset('images/login_topright.png') }}" alt=""
                class="absolute right-0 top-[-30px] h-32 w-32">
            <img src="{{ asset('images/login_bottomleft.png') }}" alt=""
                class="absolute left-0 bottom-0 h-24 w-24">
            <img src="{{ asset('images/butterfly_small.png') }}" alt=""
                class="absolute left-0 top-0 h-24 w-24">
            <img src="{{ asset('images/globe_icon.png') }}" alt=""
                class="absolute right-[-100px] bottom-[-100px] h-128 w-128">
        </div>

        <!-- Background Image -->
        <img src="{{ asset('images/bg_auth.png') }}" alt=""
            class="absolute inset-0 -z-10 h-full w-full object-cover object-center opacity-50">

        <!-- Login Container -->
        <div class="relative z-10 mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
            <!-- Login Card -->
            <div class="bg-white rounded-3xl p-8 lg:p-12 shadow-xl w-full max-w-3xl mx-auto">
                <!-- Card Content Container -->
                <div class="flex flex-col lg:flex-row lg:items-center lg:space-x-12">
                    <!-- Logo -->
                    <div class="flex justify-center items-center mb-8 lg:mb-0">
                        <img src="{{ asset('images/auth_logo.png') }}" alt="GreenKingdom" class="w-48">
                    </div>

                    <!-- Login Content -->
                    <div class="flex-1">
                        <!-- Login Text -->
                        <h2 class="text-2xl font-bold text-center lg:text-left text-[#333333] mb-2">Login</h2>
                        <p class="text-center lg:text-left text-gray-600 mb-8">
                            Join our green community and receive exclusive offers and
                            insightful content straight to your inbox!
                        </p>

                        <!-- Login Form -->
                        <form class="space-y-6" method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Name Input -->
                            <div>
                                <input type="text" placeholder="Enter your username" name="username"
                                    class="w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:border-[#55B76B]">
                            </div>

                            <!-- Phone Number Input -->
                            <div>
                                <input type="password" placeholder="Enter your password" name="password"
                                    class="w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:border-[#55B76B]">
                            </div>

                            <!-- Login Button -->
                            <div>
                                <button type="submit"
                                    class="w-full bg-[#55B76B] text-white py-3 rounded-md hover:bg-[#3B8B4B] transition-colors font-medium">
                                    Login
                                </button>
                            </div>
                        </form>

                        <!-- Create Account Link -->
                        <p class="text-center lg:text-left mt-6 text-sm text-gray-600">
                            Don't have account?
                            <a href="/register" class="text-[#55B76B] hover:underline">Create New</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Continue with footer -->
    @include('components.footer')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOMContentLoaded');
            const slider = document.getElementById('reviewsSlider');
            const prevButton = document.getElementById('prevReview');
            const nextButton = document.getElementById('nextReview');
            const dots = document.querySelectorAll('.dot-indicator');

            let currentIndex = 0;
            const totalSlides = 3;

            function updateSliderPosition() {
                const slideWidth = 100;
                slider.style.transform = `translateX(-${currentIndex * slideWidth}%)`;

                // Update dots
                dots.forEach((dot, index) => {
                    dot.classList.toggle('bg-[#55B76B]', index === currentIndex);
                    dot.classList.toggle('bg-gray-300', index !== currentIndex);
                });
            }

            function showPrevSlide() {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateSliderPosition();
            }

            function showNextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateSliderPosition();
            }

            // Event Listeners
            prevButton.addEventListener('click', showPrevSlide);
            nextButton.addEventListener('click', showNextSlide);

            // Keyboard navigation
            document.addEventListener('keydown', function(event) {
                if (event.key === 'ArrowLeft') {
                    showPrevSlide();
                } else if (event.key === 'ArrowRight') {
                    showNextSlide();
                }
            });

            // Dot navigation
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentIndex = index;
                    updateSliderPosition();
                });
            });

            // Auto-advance slides every 5 seconds
            setInterval(showNextSlide, 5000);
        });
    </script>
    </div>
</body>

</html>
