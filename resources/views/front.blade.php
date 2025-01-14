<!DOCTYPE html>
<html lang="en" class="h-full bg-[color:var(--html-bg-color,theme(colors.white))]">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />

    <link rel="preload" href="/fonts/Inter-roman.var.woff2?v=3.18" as="font" type="font/woff2" crossorigin="">
    <link href="/css/app.css" rel="stylesheet" />
          <script src="https://right-distinct.tailwindui.com/script.js" data-site="SOXJJCZQ" data-auto="false" defer></script>
        <script src="https://cdn.paddle.com/paddle/paddle.js"></script>
    <script>
      window.Prism = window.Prism || {};
      Prism.manual = true;
    </script>
    <script src="/js/prism.js" defer></script>
    <script src="https://cdn.paddle.com/paddle/paddle.js"></script>
    <script src="/js/inertia.js" defer></script>
    <meta name="twitter:card" content="summary_large_image" inertia>
<meta name="twitter:site" content="@tailwindcss" inertia>
<meta name="twitter:title" content="Storefront Pages - Official Tailwind CSS UI Components" inertia>
<meta name="twitter:description" content="Ecommerce storefront page examples for Tailwind CSS, designed and built by the creators of the framework." inertia>
<meta name="twitter:image" content="https://tailwindui.com/img/og-default.png" inertia>
<meta name="twitter:creator" content="@tailwindcss" inertia>
<meta property="og:url" content="https://www.tailwindui.com/" inertia>
<meta property="og:type" content="article" inertia>
<meta property="og:title" content="Storefront Pages - Official Tailwind CSS UI Components" inertia>
<meta property="og:description" content="Ecommerce storefront page examples for Tailwind CSS, designed and built by the creators of the framework." inertia>
<meta property="og:image" content="https://tailwindui.com/img/og-default.png" inertia>
<meta property="description" content="Ecommerce storefront page examples for Tailwind CSS, designed and built by the creators of the framework." inertia>
<title inertia>Storefront Pages - Official Tailwind CSS UI Components</title>  </head>
  <body class="font-sans antialiased text-gray-600 min-h-full flex flex-col" scroll-region>
  <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
    <!-- Mobile menu -->
    
      <div x-show="open" class="relative z-40 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true">
        
          <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state." class="fixed inset-0 bg-black bg-opacity-25"></div>
        

        <div class="fixed inset-0 z-40 flex">
          
            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl" @click.away="open = false">
              <div class="flex px-4 pt-5 pb-2">
                <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400" @click="open = false">
                  <span class="sr-only">Close menu</span>
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/x-mark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
</svg>
                </button>
              </div>

              <!-- Links -->
              <div class="mt-2" x-data="Components.tabs()" @tab-click.window="onTabClick" @tab-keydown.window="onTabKeydown">
                <div class="border-b border-gray-200">
                  <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                    
                      <button id="tabs-1-tab-1" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" x-state:on="Selected" x-state:off="Not Selected" :class="{ &#x27;text-indigo-600 border-indigo-600&#x27;: selected, &#x27;text-gray-900 border-transparent&#x27;: !(selected) }" x-data="Components.tab(0)" aria-controls="tabs-1-panel-1" role="tab" x-init="init()" @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1" :aria-selected="selected ? &#x27;true&#x27; : &#x27;false&#x27;" type="button">Women</button>
                    
                      <button id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" x-state:on="Selected" x-state:off="Not Selected" :class="{ &#x27;text-indigo-600 border-indigo-600&#x27;: selected, &#x27;text-gray-900 border-transparent&#x27;: !(selected) }" x-data="Components.tab(0)" aria-controls="tabs-1-panel-2" role="tab" x-init="init()" @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1" :aria-selected="selected ? &#x27;true&#x27; : &#x27;false&#x27;" type="button">Men</button>
                    
                  </div>
                </div>
                
                  
                    <div id="tabs-1-panel-1" class="space-y-12 px-4 py-6" x-description="&#x27;Women&#x27; tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-1" x-init="init()" x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                      <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Accessories
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Carry
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                      </div>
                    </div>
                  
                    <div id="tabs-1-panel-2" class="space-y-12 px-4 py-6" x-description="&#x27;Men&#x27; tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-2" x-init="init()" x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                      <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Accessories
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Carry
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                      </div>
                    </div>
                  
                
              </div>

              <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                
                  <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                  </div>
                
                  <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                  </div>
                
              </div>

              <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                <div class="flow-root">
                  <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create an account</a>
                </div>
                <div class="flow-root">
                  <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                </div>
              </div>

              <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                <!-- Currency selector -->
                <form>
                  <div class="inline-block">
                    <label for="mobile-currency" class="sr-only">Currency</label>
                    <div class="group relative -ml-2 rounded-md border-transparent focus-within:ring-2 focus-within:ring-white">
                      <select id="mobile-currency" name="currency" class="flex items-center rounded-md border-transparent bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-gray-700 focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-800">
                        
                          <option>CAD</option>
                        
                          <option>USD</option>
                        
                          <option>AUD</option>
                        
                          <option>EUR</option>
                        
                          <option>GBP</option>
                        
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                        <svg class="h-5 w-5 text-gray-500" x-description="Heroicon name: mini/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
</svg>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          
        </div>
      </div>
    

    <!-- Hero section -->
    <div class="relative bg-gray-900">
      <!-- Decorative image and overlay -->
      <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
        <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-hero-full-width.jpg" alt="" class="h-full w-full object-cover object-center">
      </div>
      <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-50"></div>

      <!-- Navigation -->
      <header class="relative z-10">
        <nav aria-label="Top">
          <!-- Top navigation -->
          <div class="bg-gray-900">
            <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
              <!-- Currency selector -->
              <form>
                <div>
                  <label for="desktop-currency" class="sr-only">Currency</label>
                  <div class="group relative -ml-2 rounded-md border-transparent bg-gray-900 focus-within:ring-2 focus-within:ring-white">
                    <select id="desktop-currency" name="currency" class="flex items-center rounded-md border-transparent bg-gray-900 bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-white focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-100">
                      
                        <option>CAD</option>
                      
                        <option>USD</option>
                      
                        <option>AUD</option>
                      
                        <option>EUR</option>
                      
                        <option>GBP</option>
                      
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                      <svg class="h-5 w-5 text-gray-300" x-description="Heroicon name: mini/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
</svg>
                    </div>
                  </div>
                </div>
              </form>

              <div class="flex items-center space-x-6">
                <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
                <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
              </div>
            </div>
          </div>

          <!-- Secondary navigation -->
          <div class="bg-white bg-opacity-10 backdrop-blur-md backdrop-filter">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <div>
                <div class="flex h-16 items-center justify-between">
                  <!-- Logo (lg+) -->
                  <div class="hidden lg:flex lg:flex-1 lg:items-center">
                    <a href="#">
                      <span class="sr-only">Your Company</span>
                      <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="">
                    </a>
                  </div>

                  <div class="hidden h-full lg:flex">
                    <!-- Flyout menus -->
                    <div class="inset-x-0 bottom-0 px-4" x-data="Components.popoverGroup()" x-init="init()">
                      <div class="flex h-full justify-center space-x-8">
                        
                          <div class="flex" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                            <div class="relative flex">
                              <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="relative z-10 flex items-center justify-center text-sm font-medium text-white transition-colors duration-200 ease-out" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                                Women
                                <span class="absolute inset-x-0 -bottom-px h-0.5 transition duration-200 ease-out" aria-hidden="true" x-state:on="Open" x-state:off="Closed" :class="{ &#x27;bg-white&#x27;: open }"></span>
                              </button>
                            </div>

                            
                              <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="&#x27;Women&#x27; flyout menu, show/hide based on flyout menu state." class="absolute inset-x-0 top-full text-sm text-gray-500" x-ref="panel" @click.away="open = false">
                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                <div class="relative bg-white">
                                  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                    <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                                      
                                        <div class="group relative">
                                          <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                                          </div>
                                          <a href="#" class="mt-4 block font-medium text-gray-900">
                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                            New Arrivals
                                          </a>
                                          <p aria-hidden="true" class="mt-1">Shop now</p>
                                        </div>
                                      
                                        <div class="group relative">
                                          <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                                          </div>
                                          <a href="#" class="mt-4 block font-medium text-gray-900">
                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                            Basic Tees
                                          </a>
                                          <p aria-hidden="true" class="mt-1">Shop now</p>
                                        </div>
                                      
                                        <div class="group relative">
                                          <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-cover object-center">
                                          </div>
                                          <a href="#" class="mt-4 block font-medium text-gray-900">
                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                            Accessories
                                          </a>
                                          <p aria-hidden="true" class="mt-1">Shop now</p>
                                        </div>
                                      
                                        <div class="group relative">
                                          <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="object-cover object-center">
                                          </div>
                                          <a href="#" class="mt-4 block font-medium text-gray-900">
                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                            Carry
                                          </a>
                                          <p aria-hidden="true" class="mt-1">Shop now</p>
                                        </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            
                          </div>
                        
                          <div class="flex" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                            <div class="relative flex">
                              <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="relative z-10 flex items-center justify-center text-sm font-medium text-white transition-colors duration-200 ease-out" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                                Men
                                <span class="absolute inset-x-0 -bottom-px h-0.5 transition duration-200 ease-out" aria-hidden="true" x-state:on="Open" x-state:off="Closed" :class="{ &#x27;bg-white&#x27;: open }"></span>
                              </button>
                            </div>

                            
                              <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="&#x27;Women&#x27; flyout menu, show/hide based on flyout menu state." class="absolute inset-x-0 top-full text-sm text-gray-500" x-ref="panel" @click.away="open = false">
                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                <div class="relative bg-white">
                                  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                    <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                                      
                                        <div class="group relative">
                                          <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-cover object-center">
                                          </div>
                                          <a href="#" class="mt-4 block font-medium text-gray-900">
                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                            New Arrivals
                                          </a>
                                          <p aria-hidden="true" class="mt-1">Shop now</p>
                                        </div>
                                      
                                        <div class="group relative">
                                          <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="object-cover object-center">
                                          </div>
                                          <a href="#" class="mt-4 block font-medium text-gray-900">
                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                            Basic Tees
                                          </a>
                                          <p aria-hidden="true" class="mt-1">Shop now</p>
                                        </div>
                                      
                                        <div class="group relative">
                                          <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-cover object-center">
                                          </div>
                                          <a href="#" class="mt-4 block font-medium text-gray-900">
                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                            Accessories
                                          </a>
                                          <p aria-hidden="true" class="mt-1">Shop now</p>
                                        </div>
                                      
                                        <div class="group relative">
                                          <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-cover object-center">
                                          </div>
                                          <a href="#" class="mt-4 block font-medium text-gray-900">
                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                            Carry
                                          </a>
                                          <p aria-hidden="true" class="mt-1">Shop now</p>
                                        </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            
                          </div>
                        

                        
                          <a href="#" class="flex items-center text-sm font-medium text-white">Company</a>
                        
                          <a href="#" class="flex items-center text-sm font-medium text-white">Stores</a>
                        
                      </div>
                    </div>
                  </div>

                  <!-- Mobile menu and search (lg-) -->
                  <div class="flex flex-1 items-center lg:hidden">
                    <button type="button" x-description="Mobile menu toggle, controls the &#x27;mobileMenuOpen&#x27; state." class="-ml-2 p-2 text-white" @click="open = true">
                      <span class="sr-only">Open menu</span>
                      <svg class="h-6 w-6" x-description="Heroicon name: outline/bars-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
</svg>
                    </button>

                    <!-- Search -->
                    <a href="#" class="ml-2 p-2 text-white">
                      <span class="sr-only">Search</span>
                      <svg class="h-6 w-6" x-description="Heroicon name: outline/magnifying-glass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
</svg>
                    </a>
                  </div>

                  <!-- Logo (lg-) -->
                  <a href="#" class="lg:hidden">
                    <span class="sr-only">Your Company</span>
                    <img src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="" class="h-8 w-auto">
                  </a>

                  <div class="flex flex-1 items-center justify-end">
                    <a href="#" class="hidden text-sm font-medium text-white lg:block">Search</a>

                    <div class="flex items-center lg:ml-8">
                      <!-- Help -->
                      <a href="#" class="p-2 text-white lg:hidden">
                        <span class="sr-only">Help</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/question-mark-circle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"></path>
</svg>
                      </a>
                      <a href="#" class="hidden text-sm font-medium text-white lg:block">Help</a>

                      <!-- Cart -->
                      <div class="ml-4 flow-root lg:ml-8">
                        <a href="#" class="group -m-2 flex items-center p-2">
                          <svg class="h-6 w-6 flex-shrink-0 text-white" x-description="Heroicon name: outline/shopping-bag" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
</svg>
                          <span class="ml-2 text-sm font-medium text-white">0</span>
                          <span class="sr-only">items in cart, view bag</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>

      <div class="relative mx-auto flex max-w-3xl flex-col items-center py-32 px-6 text-center sm:py-64 lg:px-0">
        <h1 class="text-4xl font-bold tracking-tight text-white lg:text-6xl">New arrivals are here</h1>
        <p class="mt-4 text-xl text-white">The new arrivals have, well, newly arrived. Check out the latest options from our summer small-batch release while they&#x27;re still in stock.</p>
        <a href="#" class="mt-8 inline-block rounded-md border border-transparent bg-white py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100">Shop New Arrivals</a>
      </div>
    </div>

    <main>
      <!-- Category section -->
      <section aria-labelledby="category-heading" class="pt-24 sm:pt-32 xl:mx-auto xl:max-w-7xl xl:px-8">
        <div class="px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:px-0">
          <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by Category</h2>
          <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
            Browse all categories
            <span aria-hidden="true"> &amp;rarr;</span>
          </a>
        </div>

        <div class="mt-4 flow-root">
          <div class="-my-2">
            <div class="relative box-content h-80 overflow-x-auto py-2 xl:overflow-visible">
              <div class="min-w-screen-xl absolute flex space-x-8 px-4 sm:px-6 lg:px-8 xl:relative xl:grid xl:grid-cols-5 xl:gap-x-8 xl:space-x-0 xl:px-0">
                
                  <a href="#" class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                    <span aria-hidden="true" class="absolute inset-0">
                      <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-01.jpg" alt="" class="h-full w-full object-cover object-center">
                    </span>
                    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                    <span class="relative mt-auto text-center text-xl font-bold text-white">New Arrivals</span>
                  </a>
                
                  <a href="#" class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                    <span aria-hidden="true" class="absolute inset-0">
                      <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-02.jpg" alt="" class="h-full w-full object-cover object-center">
                    </span>
                    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                    <span class="relative mt-auto text-center text-xl font-bold text-white">Productivity</span>
                  </a>
                
                  <a href="#" class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                    <span aria-hidden="true" class="absolute inset-0">
                      <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-04.jpg" alt="" class="h-full w-full object-cover object-center">
                    </span>
                    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                    <span class="relative mt-auto text-center text-xl font-bold text-white">Workspace</span>
                  </a>
                
                  <a href="#" class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                    <span aria-hidden="true" class="absolute inset-0">
                      <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-05.jpg" alt="" class="h-full w-full object-cover object-center">
                    </span>
                    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                    <span class="relative mt-auto text-center text-xl font-bold text-white">Accessories</span>
                  </a>
                
                  <a href="#" class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                    <span aria-hidden="true" class="absolute inset-0">
                      <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-03.jpg" alt="" class="h-full w-full object-cover object-center">
                    </span>
                    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                    <span class="relative mt-auto text-center text-xl font-bold text-white">Sale</span>
                  </a>
                
              </div>
            </div>
          </div>
        </div>

        <div class="mt-6 px-4 sm:hidden">
          <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
            Browse all categories
            <span aria-hidden="true"> &amp;rarr;</span>
          </a>
        </div>
      </section>

      <!-- Featured section -->
      <section aria-labelledby="social-impact-heading" class="mx-auto max-w-7xl px-4 pt-24 sm:px-6 sm:pt-32 lg:px-8">
        <div class="relative overflow-hidden rounded-lg">
          <div class="absolute inset-0">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-01.jpg" alt="" class="h-full w-full object-cover object-center">
          </div>
          <div class="relative bg-gray-900 bg-opacity-75 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
            <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
              <h2 id="social-impact-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                <span class="block sm:inline">Level up</span>
                <span class="block sm:inline">your desk</span>
              </h2>
              <p class="mt-3 text-xl text-white">Make your desk beautiful and organized. Post a picture to social media and watch it get more likes than life-changing announcements. Reflect on the shallow nature of existence. At least you have a really nice desk setup.</p>
              <a href="#" class="mt-8 block w-full rounded-md border border-transparent bg-white py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Shop Workspace</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Collection section -->
      <section aria-labelledby="collection-heading" class="mx-auto max-w-xl px-4 pt-24 sm:px-6 sm:pt-32 lg:max-w-7xl lg:px-8">
        <h2 id="collection-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by Collection</h2>
        <p class="mt-4 text-base text-gray-500">Each season, we collaborate with world-class designers to create a collection inspired by the natural world.</p>

        <div class="mt-10 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
          
            <a href="#" class="group block">
              <div aria-hidden="true" class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-01.jpg" alt="Brown leather key ring with brass metal loops and rivets on wood table." class="h-full w-full object-cover object-center">
              </div>
              <h3 class="mt-4 text-base font-semibold text-gray-900">Handcrafted Collection</h3>
              <p class="mt-2 text-sm text-gray-500">Keep your phone, keys, and wallet together, so you can lose everything at once.</p>
            </a>
          
            <a href="#" class="group block">
              <div aria-hidden="true" class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-02.jpg" alt="Natural leather mouse pad on white desk next to porcelain mug and keyboard." class="h-full w-full object-cover object-center">
              </div>
              <h3 class="mt-4 text-base font-semibold text-gray-900">Organized Desk Collection</h3>
              <p class="mt-2 text-sm text-gray-500">The rest of the house will still be a mess, but your desk will look great.</p>
            </a>
          
            <a href="#" class="group block">
              <div aria-hidden="true" class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-03.jpg" alt="Person placing task list card into walnut card holder next to felt carrying case on leather desk pad." class="h-full w-full object-cover object-center">
              </div>
              <h3 class="mt-4 text-base font-semibold text-gray-900">Focus Collection</h3>
              <p class="mt-2 text-sm text-gray-500">Be more productive than enterprise project managers with a single piece of paper.</p>
            </a>
          
        </div>
      </section>

      <!-- Featured section -->
      <section aria-labelledby="comfort-heading" class="mx-auto max-w-7xl py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
        <div class="relative overflow-hidden rounded-lg">
          <div class="absolute inset-0">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-02.jpg" alt="" class="h-full w-full object-cover object-center">
          </div>
          <div class="relative bg-gray-900 bg-opacity-75 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
            <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
              <h2 id="comfort-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Simple productivity</h2>
              <p class="mt-3 text-xl text-white">Endless tasks, limited hours, a single piece of paper. Not really a haiku, but we&#x27;re doing our best here. No kanban boards, burndown charts, or tangled flowcharts with our Focus system. Just the undeniable urge to fill empty circles.</p>
              <a href="#" class="mt-8 block w-full rounded-md border border-transparent bg-white py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Shop Focus</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer aria-labelledby="footer-heading" class="bg-gray-900">
      <h2 id="footer-heading" class="sr-only">Footer</h2>
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
          <div class="grid grid-cols-2 gap-8 xl:col-span-2">
            <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
              <div>
                <h3 class="text-sm font-medium text-white">Shop</h3>
                <ul role="list" class="mt-6 space-y-6">
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Bags</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Tees</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Objects</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Home Goods</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Accessories</a>
                    </li>
                  
                </ul>
              </div>
              <div>
                <h3 class="text-sm font-medium text-white">Company</h3>
                <ul role="list" class="mt-6 space-y-6">
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Who we are</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Sustainability</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Press</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Careers</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Terms &amp;amp; Conditions</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Privacy</a>
                    </li>
                  
                </ul>
              </div>
            </div>
            <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
              <div>
                <h3 class="text-sm font-medium text-white">Account</h3>
                <ul role="list" class="mt-6 space-y-6">
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Manage Account</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Returns &amp;amp; Exchanges</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Redeem a Gift Card</a>
                    </li>
                  
                </ul>
              </div>
              <div>
                <h3 class="text-sm font-medium text-white">Connect</h3>
                <ul role="list" class="mt-6 space-y-6">
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Contact Us</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Twitter</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Instagram</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-300 hover:text-white">Pinterest</a>
                    </li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="mt-12 md:mt-16 xl:mt-0">
            <h3 class="text-sm font-medium text-white">Sign up for our newsletter</h3>
            <p class="mt-6 text-sm text-gray-300">The latest deals and savings, sent to your inbox weekly.</p>
            <form class="mt-2 flex sm:max-w-md">
              <label for="email-address" class="sr-only">Email address</label>
              <input id="email-address" type="text" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border border-white bg-white py-2 px-4 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900">
              <div class="ml-4 flex-shrink-0">
                <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900">Sign up</button>
              </div>
            </form>
          </div>
        </div>

        <div class="border-t border-gray-800 py-10">
          <p class="text-sm text-gray-400">Copyright &amp;copy; 2021 Your Company, Inc.</p>
        </div>
      </div>
    </footer>
  </div>

</div></body>"></iframe><div class="absolute inset-y-0 left-full hidden cursor-ew-resize items-center px-2 sm:flex"><div class="h-8 w-1.5 rounded-full bg-slate-400"></div></div></div></div></div></div><div><p class="mt-4 text-xs text-slate-500">Images provided by <a href="https://ugmonk.com/" class="font-medium text-sky-600 hover:text-sky-700">Ugmonk</a></p></div></section><section id="component-087fa445e40f73cc5aa809b7ebac72f0"><div class="grid grid-cols-[1fr,auto] items-center"><div class="flex min-w-0"><h2 class="truncate text-base font-medium leading-7 text-slate-900"><a href="#component-087fa445e40f73cc5aa809b7ebac72f0">With offers and testimonials</a></h2><p class="ml-3 hidden whitespace-nowrap rounded-lg bg-slate-100 py-0.5 px-2 text-xs font-semibold leading-6 text-slate-700 lg:block">Requires JS</p></div><button type="button" aria-hidden="true" style="position:fixed;top:1px;left:1px;width:1px;height:0;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0"></button><div class="ml-6 flex items-center"><div class="flex space-x-1 rounded-lg bg-slate-100 p-0.5" role="tablist" aria-orientation="horizontal"><button class="flex items-center rounded-md py-[0.4375rem] pl-2 pr-2 text-sm font-semibold lg:pr-3 bg-white shadow" id="headlessui-tabs-tab-undefined" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected"><svg class="h-5 w-5 flex-none stroke-sky-500" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="M17.25 10c0 1-1.75 6.25-7.25 6.25S2.75 11 2.75 10 4.5 3.75 10 3.75 17.25 9 17.25 10Z"></path><circle cx="10" cy="10" r="2.25"></circle></svg><span class="sr-only lg:not-sr-only lg:ml-2 text-slate-900">Preview</span></button><button class="flex items-center rounded-md py-[0.4375rem] pl-2 pr-2 text-sm font-semibold lg:pr-3 bg-white shadow" id="headlessui-tabs-tab-undefined" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected"><svg class="h-5 w-5 flex-none stroke-sky-500" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="m13.75 6.75 3.5 3.25-3.5 3.25M6.25 13.25 2.75 10l3.5-3.25"></path></svg><span class="sr-only lg:not-sr-only lg:ml-2 text-slate-900">Code</span></button></div><div class="ml-6 mr-3 hidden h-5 w-px bg-slate-900/10 sm:block"></div><div class="relative hidden sm:block"><select class="form-select h-9 w-full rounded-lg border-0 bg-transparent bg-none p-0 pl-3.5 pr-[1.875rem] font-medium text-slate-900 focus:shadow-none focus-visible:ring-2 focus-visible:ring-sky-500 sm:text-sm"><option value="html">HTML</option><option value="react">React</option><option selected="" value="vue">Vue</option></select><svg aria-hidden="true" viewBox="0 0 8 6" width="8" height="6" fill="none" class="pointer-events-none absolute inset-y-0 right-3.5 h-full stroke-slate-500"><path d="M7 1.5l-3 3-3-3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><button class="group relative ml-2 hidden h-9 w-9 items-center justify-center sm:flex"><svg class="h-8 w-8 stroke-slate-400 transition group-hover:rotate-[-4deg] group-hover:stroke-slate-600" fill="none" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12.9975 10.7499L11.7475 10.7499C10.6429 10.7499 9.74747 11.6453 9.74747 12.7499L9.74747 21.2499C9.74747 22.3544 10.6429 23.2499 11.7475 23.2499L20.2475 23.2499C21.352 23.2499 22.2475 22.3544 22.2475 21.2499L22.2475 12.7499C22.2475 11.6453 21.352 10.7499 20.2475 10.7499L18.9975 10.7499" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.9975 12.2499L13.9975 12.2499C13.4452 12.2499 12.9975 11.8022 12.9975 11.2499L12.9975 9.74988C12.9975 9.19759 13.4452 8.74988 13.9975 8.74988L17.9975 8.74988C18.5498 8.74988 18.9975 9.19759 18.9975 9.74988L18.9975 11.2499C18.9975 11.8022 18.5498 12.2499 17.9975 12.2499Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.7475 16.2499L18.2475 16.2499" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.7475 19.2499L18.2475 19.2499" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><g class="opacity-0"><path d="M15.9975 5.99988L15.9975 3.99988" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.9975 5.99988L20.9975 4.99988" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.9975 5.99988L10.9975 4.99988" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g></svg></button></div><div class="col-span-2 row-start-2 min-w-0"><div class="mt-4 focus:outline-none" id="headlessui-tabs-panel-undefined" role="tabpanel" tabindex="0" data-headlessui-state="selected"><div id="frame-087fa445e40f73cc5aa809b7ebac72f0" class="relative"><style>
        #frame-087fa445e40f73cc5aa809b7ebac72f0 {
          height: 6015px;
        }
        @media (min-width: 704px) {
          #frame-087fa445e40f73cc5aa809b7ebac72f0 {
            height: 4268px;
          }
        }
      </style><iframe class="w-full overflow-hidden rounded-lg ring-1 ring-slate-900/10" id="frame-087fa445e40f73cc5aa809b7ebac72f0" title="With offers and testimonials preview" aria-label="With offers and testimonials preview" name="frame-087fa445e40f73cc5aa809b7ebac72f0" srcDoc="<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="/v2-assets/components.css"><script src="/v2-assets/components.js"></script><script src="/js/iframe.js" defer></script><script src="/js/alpine.js" defer></script><body class="antialiased font-sans bg-gray-200 overflow-hidden"><div class="" style="">
  
  <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
    <!-- Mobile menu -->
    
      <div x-show="open" class="relative z-40 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true">
        
          <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state." class="fixed inset-0 bg-black bg-opacity-25"></div>
        

        <div class="fixed inset-0 z-40 flex">
          
            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl" @click.away="open = false">
              <div class="flex px-4 pt-5 pb-2">
                <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400" @click="open = false">
                  <span class="sr-only">Close menu</span>
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/x-mark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
</svg>
                </button>
              </div>

              <!-- Links -->
              <div class="mt-2" x-data="Components.tabs()" @tab-click.window="onTabClick" @tab-keydown.window="onTabKeydown">
                <div class="border-b border-gray-200">
                  <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                    
                      <button id="tabs-1-tab-1" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" x-state:on="Selected" x-state:off="Not Selected" :class="{ &#x27;text-indigo-600 border-indigo-600&#x27;: selected, &#x27;text-gray-900 border-transparent&#x27;: !(selected) }" x-data="Components.tab(0)" aria-controls="tabs-1-panel-1" role="tab" x-init="init()" @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1" :aria-selected="selected ? &#x27;true&#x27; : &#x27;false&#x27;" type="button">Women</button>
                    
                      <button id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" x-state:on="Selected" x-state:off="Not Selected" :class="{ &#x27;text-indigo-600 border-indigo-600&#x27;: selected, &#x27;text-gray-900 border-transparent&#x27;: !(selected) }" x-data="Components.tab(0)" aria-controls="tabs-1-panel-2" role="tab" x-init="init()" @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1" :aria-selected="selected ? &#x27;true&#x27; : &#x27;false&#x27;" type="button">Men</button>
                    
                  </div>
                </div>
                
                  
                    <div id="tabs-1-panel-1" class="space-y-12 px-4 pt-10 pb-6" x-description="&#x27;Women&#x27; tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-1" x-init="init()" x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                      <div class="grid grid-cols-1 items-start gap-y-10 gap-x-6">
                        <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                          <div>
                            <p id="mobile-featured-heading-0" class="font-medium text-gray-900">Featured</p>
                            <ul role="list" aria-labelledby="mobile-featured-heading-0" class="mt-6 space-y-6">
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Sleep</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Swimwear</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Underwear</a>
                                </li>
                              
                            </ul>
                          </div>
                          <div>
                            <p id="mobile-categories-heading" class="font-medium text-gray-900">Categories</p>
                            <ul role="list" aria-labelledby="mobile-categories-heading" class="mt-6 space-y-6">
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Basic Tees</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Artwork Tees</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Bottoms</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Underwear</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Accessories</a>
                                </li>
                              
                            </ul>
                          </div>
                        </div>
                        <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                          <div>
                            <p id="mobile-collection-heading" class="font-medium text-gray-900">Collection</p>
                            <ul role="list" aria-labelledby="mobile-collection-heading" class="mt-6 space-y-6">
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Everything</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Core</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">New Arrivals</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Sale</a>
                                </li>
                              
                            </ul>
                          </div>

                          <div>
                            <p id="mobile-brand-heading" class="font-medium text-gray-900">Brands</p>
                            <ul role="list" aria-labelledby="mobile-brand-heading" class="mt-6 space-y-6">
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Full Nelson</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">My Way</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Re-Arranged</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Counterfeit</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Significant Other</a>
                                </li>
                              
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div id="tabs-1-panel-2" class="space-y-12 px-4 pt-10 pb-6" x-description="&#x27;Men&#x27; tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-2" x-init="init()" x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                      <div class="grid grid-cols-1 items-start gap-y-10 gap-x-6">
                        <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                          <div>
                            <p id="mobile-featured-heading-1" class="font-medium text-gray-900">Featured</p>
                            <ul role="list" aria-labelledby="mobile-featured-heading-1" class="mt-6 space-y-6">
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Casual</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Boxers</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Outdoor</a>
                                </li>
                              
                            </ul>
                          </div>
                          <div>
                            <p id="mobile-categories-heading" class="font-medium text-gray-900">Categories</p>
                            <ul role="list" aria-labelledby="mobile-categories-heading" class="mt-6 space-y-6">
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Artwork Tees</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Pants</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Accessories</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Boxers</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Basic Tees</a>
                                </li>
                              
                            </ul>
                          </div>
                        </div>
                        <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                          <div>
                            <p id="mobile-collection-heading" class="font-medium text-gray-900">Collection</p>
                            <ul role="list" aria-labelledby="mobile-collection-heading" class="mt-6 space-y-6">
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Everything</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Core</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">New Arrivals</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Sale</a>
                                </li>
                              
                            </ul>
                          </div>

                          <div>
                            <p id="mobile-brand-heading" class="font-medium text-gray-900">Brands</p>
                            <ul role="list" aria-labelledby="mobile-brand-heading" class="mt-6 space-y-6">
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Significant Other</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">My Way</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Counterfeit</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Re-Arranged</a>
                                </li>
                              
                                <li class="flex">
                                  <a href="#" class="text-gray-500">Full Nelson</a>
                                </li>
                              
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                
              </div>

              <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                
                  <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                  </div>
                
                  <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                  </div>
                
              </div>

              <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                <div class="flow-root">
                  <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create an account</a>
                </div>
                <div class="flow-root">
                  <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                </div>
              </div>

              <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                <!-- Currency selector -->
                <form>
                  <div class="inline-block">
                    <label for="mobile-currency" class="sr-only">Currency</label>
                    <div class="group relative -ml-2 rounded-md border-transparent focus-within:ring-2 focus-within:ring-white">
                      <select id="mobile-currency" name="currency" class="flex items-center rounded-md border-transparent bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-gray-700 focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-800">
                        
                          <option>CAD</option>
                        
                          <option>USD</option>
                        
                          <option>AUD</option>
                        
                          <option>EUR</option>
                        
                          <option>GBP</option>
                        
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                        <svg class="h-5 w-5 text-gray-500" x-description="Heroicon name: mini/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
</svg>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          
        </div>
      </div>
    

    <header class="relative z-10">
      <nav aria-label="Top">
        <!-- Top navigation -->
        <div class="bg-gray-900">
          <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <!-- Currency selector -->
            <form class="hidden lg:block lg:flex-1">
              <div class="flex">
                <label for="desktop-currency" class="sr-only">Currency</label>
                <div class="group relative -ml-2 rounded-md border-transparent bg-gray-900 focus-within:ring-2 focus-within:ring-white">
                  <select id="desktop-currency" name="currency" class="flex items-center rounded-md border-transparent bg-gray-900 bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-white focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-100">
                    
                      <option>CAD</option>
                    
                      <option>USD</option>
                    
                      <option>AUD</option>
                    
                      <option>EUR</option>
                    
                      <option>GBP</option>
                    
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                    <svg class="h-5 w-5 text-gray-300" x-description="Heroicon name: mini/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
</svg>
                  </div>
                </div>
              </div>
            </form>

            <p class="flex-1 text-center text-sm font-medium text-white lg:flex-none">Get free delivery on orders over $100</p>

            <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
              <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
              <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
              <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
            </div>
          </div>
        </div>

        <!-- Secondary navigation -->
        <div class="bg-white">
          <div class="border-b border-gray-200">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <div class="flex h-16 items-center justify-between">
                <!-- Logo (lg+) -->
                <div class="hidden lg:flex lg:items-center">
                  <a href="#">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="">
                  </a>
                </div>

                <div class="hidden h-full lg:flex">
                  <!-- Mega menus -->
                  <div class="ml-8" x-data="Components.popoverGroup()" x-init="init()">
                    <div class="flex h-full justify-center space-x-8">
                      
                        <div class="flex" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                          <div class="relative flex">
                            <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" :class="{ &#x27;border-indigo-600 text-indigo-600&#x27;: open, &#x27;border-transparent text-gray-700 hover:text-gray-800&#x27;: !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">Women</button>
                          </div>

                          
                            <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="&#x27;Women&#x27; mega menu, show/hide based on flyout menu state." class="absolute inset-x-0 top-full text-gray-500 sm:text-sm" x-ref="panel" @click.away="open = false">
                              <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                              <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                              <div class="relative bg-white">
                                <div class="mx-auto max-w-7xl px-8">
                                  <div class="grid grid-cols-2 items-start gap-y-10 gap-x-8 pt-10 pb-12">
                                    <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                      <div>
                                        <p id="desktop-featured-heading-0" class="font-medium text-gray-900">Featured</p>
                                        <ul role="list" aria-labelledby="desktop-featured-heading-0" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Sleep</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Swimwear</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Underwear</a>
                                            </li>
                                          
                                        </ul>
                                      </div>
                                      <div>
                                        <p id="desktop-categories-heading" class="font-medium text-gray-900">Categories</p>
                                        <ul role="list" aria-labelledby="desktop-categories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Basic Tees</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Artwork Tees</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Bottoms</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Underwear</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Accessories</a>
                                            </li>
                                          
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                      <div>
                                        <p id="desktop-collection-heading" class="font-medium text-gray-900">Collection</p>
                                        <ul role="list" aria-labelledby="desktop-collection-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Everything</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Core</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">New Arrivals</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Sale</a>
                                            </li>
                                          
                                        </ul>
                                      </div>

                                      <div>
                                        <p id="desktop-brand-heading" class="font-medium text-gray-900">Brands</p>
                                        <ul role="list" aria-labelledby="desktop-brand-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">My Way</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Significant Other</a>
                                            </li>
                                          
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          
                        </div>
                      
                        <div class="flex" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                          <div class="relative flex">
                            <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" :class="{ &#x27;border-indigo-600 text-indigo-600&#x27;: open, &#x27;border-transparent text-gray-700 hover:text-gray-800&#x27;: !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">Men</button>
                          </div>

                          
                            <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="&#x27;Men&#x27; mega menu, show/hide based on flyout menu state." class="absolute inset-x-0 top-full text-gray-500 sm:text-sm" x-ref="panel" @click.away="open = false">
                              <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                              <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                              <div class="relative bg-white">
                                <div class="mx-auto max-w-7xl px-8">
                                  <div class="grid grid-cols-2 items-start gap-y-10 gap-x-8 pt-10 pb-12">
                                    <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                      <div>
                                        <p id="desktop-featured-heading-1" class="font-medium text-gray-900">Featured</p>
                                        <ul role="list" aria-labelledby="desktop-featured-heading-1" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Casual</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Boxers</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Outdoor</a>
                                            </li>
                                          
                                        </ul>
                                      </div>
                                      <div>
                                        <p id="desktop-categories-heading" class="font-medium text-gray-900">Categories</p>
                                        <ul role="list" aria-labelledby="desktop-categories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Artwork Tees</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Pants</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Accessories</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Boxers</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Basic Tees</a>
                                            </li>
                                          
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                      <div>
                                        <p id="desktop-collection-heading" class="font-medium text-gray-900">Collection</p>
                                        <ul role="list" aria-labelledby="desktop-collection-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Everything</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Core</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">New Arrivals</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Sale</a>
                                            </li>
                                          
                                        </ul>
                                      </div>

                                      <div>
                                        <p id="desktop-brand-heading" class="font-medium text-gray-900">Brands</p>
                                        <ul role="list" aria-labelledby="desktop-brand-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Significant Other</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">My Way</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                            </li>
                                          
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          
                        </div>
                      

                      
                        <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>
                      
                        <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                      
                    </div>
                  </div>
                </div>

                <!-- Mobile menu and search (lg-) -->
                <div class="flex flex-1 items-center lg:hidden">
                  <button type="button" x-description="Mobile menu toggle, controls the &#x27;mobileMenuOpen&#x27; state." class="-ml-2 rounded-md bg-white p-2 text-gray-400" @click="open = true">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/bars-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
</svg>
                  </button>

                  <!-- Search -->
                  <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Search</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/magnifying-glass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
</svg>
                  </a>
                </div>

                <!-- Logo (lg-) -->
                <a href="#" class="lg:hidden">
                  <span class="sr-only">Your Company</span>
                  <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="" class="h-8 w-auto">
                </a>

                <div class="flex flex-1 items-center justify-end">
                  <div class="flex items-center lg:ml-8">
                    <div class="flex space-x-8">
                      <div class="hidden lg:flex">
                        <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Search</span>
                          <svg class="h-6 w-6" x-description="Heroicon name: outline/magnifying-glass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
</svg>
                        </a>
                      </div>

                      <div class="flex">
                        <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Account</span>
                          <svg class="h-6 w-6" x-description="Heroicon name: outline/user" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
</svg>
                        </a>
                      </div>
                    </div>

                    <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>

                    <div class="flow-root">
                      <a href="#" class="group -m-2 flex items-center p-2">
                        <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: outline/shopping-cart" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
</svg>
                        <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                        <span class="sr-only">items in cart, view bag</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <!-- Hero -->
      <div class="flex flex-col border-b border-gray-200 lg:border-0">
        <nav aria-label="Offers" class="order-last lg:order-first">
          <div class="mx-auto max-w-7xl lg:px-8">
            <ul role="list" class="grid grid-cols-1 divide-y divide-gray-200 lg:grid-cols-3 lg:divide-y-0 lg:divide-x">
              
                <li class="flex flex-col">
                  <a href="#" class="relative flex flex-1 flex-col justify-center bg-white py-6 px-4 text-center focus:z-10">
                    <p class="text-sm text-gray-500">Download the app</p>
                    <p class="font-semibold text-gray-900">Get an exclusive $5 off code</p>
                  </a>
                </li>
              
                <li class="flex flex-col">
                  <a href="#" class="relative flex flex-1 flex-col justify-center bg-white py-6 px-4 text-center focus:z-10">
                    <p class="text-sm text-gray-500">Return when you&amp;#039;re ready</p>
                    <p class="font-semibold text-gray-900">60 days of free returns</p>
                  </a>
                </li>
              
                <li class="flex flex-col">
                  <a href="#" class="relative flex flex-1 flex-col justify-center bg-white py-6 px-4 text-center focus:z-10">
                    <p class="text-sm text-gray-500">Sign up for our newsletter</p>
                    <p class="font-semibold text-gray-900">15% off your first order</p>
                  </a>
                </li>
              
            </ul>
          </div>
        </nav>

        <div class="relative">
          <div aria-hidden="true" class="absolute hidden h-full w-1/2 bg-gray-100 lg:block"></div>
          <div class="relative bg-gray-100 lg:bg-transparent">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:grid lg:grid-cols-2 lg:px-8">
              <div class="mx-auto max-w-2xl py-24 lg:max-w-none lg:py-64">
                <div class="lg:pr-16">
                  <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl xl:text-6xl">Focus on what matters</h1>
                  <p class="mt-4 text-xl text-gray-600">All the charts, datepickers, and notifications in the world can&#x27;t beat checking off some items on a paper card.</p>
                  <div class="mt-6">
                    <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 py-3 px-8 font-medium text-white hover:bg-indigo-700">Shop Productivity</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="h-48 w-full sm:h-64 lg:absolute lg:top-0 lg:right-0 lg:h-full lg:w-1/2">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-hero-half-width.jpg" alt="" class="h-full w-full object-cover object-center">
          </div>
        </div>
      </div>

      <!-- Trending products -->
      <section aria-labelledby="trending-heading" class="bg-white">
        <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:py-32 lg:px-8">
          <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
            <h2 id="trending-heading" class="text-2xl font-bold tracking-tight text-gray-900">Trending products</h2>
            <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
              See everything
              <span aria-hidden="true"> &amp;rarr;</span>
            </a>
          </div>

          <div class="relative mt-8">
            <div class="relative w-full overflow-x-auto">
              <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
                
                  <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                    <div class="group relative">
                      <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                      </div>
                      <div class="mt-6">
                        <p class="text-sm text-gray-500">Black</p>
                        <h3 class="mt-1 font-semibold text-gray-900">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Machined Pen
                          </a>
                        </h3>
                        <p class="mt-1 text-gray-900">$35</p>
                      </div>
                    </div>

                    <h4 class="sr-only">Available colors</h4>
                    <ul role="list" class="mt-auto flex items-center justify-center space-x-3 pt-6">
                      
                        <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color:#111827">
                          <span class="sr-only"> Black </span>
                        </li>
                      
                        <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color:#FDE68A">
                          <span class="sr-only"> Brass </span>
                        </li>
                      
                        <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color:#E5E7EB">
                          <span class="sr-only"> Chrome </span>
                        </li>
                      
                    </ul>
                  </li>
                
                  <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                    <div class="group relative">
                      <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-02.jpg" alt="Black porcelain mug with modern square handle and natural clay accents on rim and bottom." class="h-full w-full object-cover object-center group-hover:opacity-75">
                      </div>
                      <div class="mt-6">
                        <p class="text-sm text-gray-500">Matte Black</p>
                        <h3 class="mt-1 font-semibold text-gray-900">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Earthen Mug
                          </a>
                        </h3>
                        <p class="mt-1 text-gray-900">$28</p>
                      </div>
                    </div>

                    <h4 class="sr-only">Available colors</h4>
                    <ul role="list" class="mt-auto flex items-center justify-center space-x-3 pt-6">
                      
                        <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color:#4B5563">
                          <span class="sr-only"> Matte Black </span>
                        </li>
                      
                        <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color:#FEF3C7">
                          <span class="sr-only"> Natural </span>
                        </li>
                      
                    </ul>
                  </li>
                
                  <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                    <div class="group relative">
                      <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-03.jpg" alt="Natural leather journal with brass disc binding and three paper refill sets." class="h-full w-full object-cover object-center group-hover:opacity-75">
                      </div>
                      <div class="mt-6">
                        <p class="text-sm text-gray-500">Natural</p>
                        <h3 class="mt-1 font-semibold text-gray-900">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Leatherbound Daily Journal Set
                          </a>
                        </h3>
                        <p class="mt-1 text-gray-900">$50</p>
                      </div>
                    </div>

                    <h4 class="sr-only">Available colors</h4>
                    <ul role="list" class="mt-auto flex items-center justify-center space-x-3 pt-6">
                      
                        <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color:#FEF3C7">
                          <span class="sr-only"> Natural </span>
                        </li>
                      
                        <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color:#1F2937">
                          <span class="sr-only"> Black </span>
                        </li>
                      
                        <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color:#7C2D12">
                          <span class="sr-only"> Brown </span>
                        </li>
                      
                    </ul>
                  </li>
                
                  <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                    <div class="group relative">
                      <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-04.jpg" alt="Black leather journal with brass disc binding." class="h-full w-full object-cover object-center group-hover:opacity-75">
                      </div>
                      <div class="mt-6">
                        <p class="text-sm text-gray-500">Black</p>
                        <h3 class="mt-1 font-semibold text-gray-900">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Leatherbound Daily Journal
                          </a>
                        </h3>
                        <p class="mt-1 text-gray-900">$50</p>
                      </div>
                    </div>

                    <h4 class="sr-only">Available colors</h4>
                    <ul role="list" class="mt-auto flex items-center justify-center space-x-3 pt-6">
                      
                        <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color:#111827">
                          <span class="sr-only"> Black </span>
                        </li>
                      
                        <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color:#7C2D12">
                          <span class="sr-only"> Brown </span>
                        </li>
                      
                        <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color:#FEF3C7">
                          <span class="sr-only"> Natural </span>
                        </li>
                      
                    </ul>
                  </li>
                
              </ul>
            </div>
          </div>

          <div class="mt-12 px-4 sm:hidden">
            <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
              See everything
              <span aria-hidden="true"> &amp;rarr;</span>
            </a>
          </div>
        </div>
      </section>

      <!-- Collections -->
      <section aria-labelledby="collections-heading" class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
            <h2 id="collections-heading" class="text-2xl font-bold text-gray-900">Collections</h2>

            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
              
                <div class="group relative">
                  <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
                  </div>
                  <h3 class="mt-6 text-sm text-gray-500">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Desk and Office
                    </a>
                  </h3>
                  <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                </div>
              
                <div class="group relative">
                  <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                  </div>
                  <h3 class="mt-6 text-sm text-gray-500">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Self-Improvement
                    </a>
                  </h3>
                  <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
                </div>
              
                <div class="group relative">
                  <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
                  </div>
                  <h3 class="mt-6 text-sm text-gray-500">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Travel
                    </a>
                  </h3>
                  <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
                </div>
              
            </div>
          </div>
        </div>
      </section>

      <!-- Sale and testimonials -->
      <div class="relative overflow-hidden">
        <!-- Decorative background image and gradient -->
        <div aria-hidden="true" class="absolute inset-0">
          <div class="absolute inset-0 mx-auto max-w-7xl overflow-hidden xl:px-8">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-sale-full-width.jpg" alt="" class="h-full w-full object-cover object-center">
          </div>
          <div class="absolute inset-0 bg-white bg-opacity-75"></div>
          <div class="absolute inset-0 bg-gradient-to-t from-white via-white"></div>
        </div>

        <!-- Sale -->
        <section aria-labelledby="sale-heading" class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 text-center sm:px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:max-w-none">
            <h2 id="sale-heading" class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Get 25% off during our one-time sale</h2>
            <p class="mx-auto mt-4 max-w-xl text-xl text-gray-600">Most of our products are limited releases that won&#x27;t come back. Get your favorite items while they&#x27;re in stock.</p>
            <a href="#" class="mt-6 inline-block w-full rounded-md border border-transparent bg-gray-900 py-3 px-8 font-medium text-white hover:bg-gray-800 sm:w-auto">Get access to our one-time sale</a>
          </div>
        </section>

        <!-- Testimonials -->
        <section aria-labelledby="testimonial-heading" class="relative mx-auto max-w-7xl py-24 px-4 sm:px-6 lg:py-32 lg:px-8">
          <div class="mx-auto max-w-2xl lg:max-w-none">
            <h2 id="testimonial-heading" class="text-2xl font-bold tracking-tight text-gray-900">What are people saying?</h2>

            <div class="mt-16 space-y-16 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
              
                <blockquote class="sm:flex lg:block">
                  <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 text-gray-300">
                    <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor"></path>
                  </svg>
                  <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                    <p class="text-lg text-gray-600">My order arrived super quickly. The product is even better than I hoped it would be. Very happy customer over here!</p>
                    <cite class="mt-4 block font-semibold not-italic text-gray-900">Sarah Peters, New Orleans</cite>
                  </div>
                </blockquote>
              
                <blockquote class="sm:flex lg:block">
                  <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 text-gray-300">
                    <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor"></path>
                  </svg>
                  <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                    <p class="text-lg text-gray-600">I had to return a purchase that didn’t fit. The whole process was so simple that I ended up ordering two new items!</p>
                    <cite class="mt-4 block font-semibold not-italic text-gray-900">Kelly McPherson, Chicago</cite>
                  </div>
                </blockquote>
              
                <blockquote class="sm:flex lg:block">
                  <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 text-gray-300">
                    <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor"></path>
                  </svg>
                  <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                    <p class="text-lg text-gray-600">Now that I’m on holiday for the summer, I’ll probably order a few more shirts. It’s just so convenient, and I know the quality will always be there.</p>
                    <cite class="mt-4 block font-semibold not-italic text-gray-900">Chris Paul, Phoenix</cite>
                  </div>
                </blockquote>
              
            </div>
          </div>
        </section>
      </div>
    </main>

    <footer aria-labelledby="footer-heading" class="bg-white">
      <h2 id="footer-heading" class="sr-only">Footer</h2>
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="border-t border-gray-200">
          <div class="pt-16 pb-20">
            <div class="md:flex md:justify-center">
              <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="" class="h-8 w-auto">
            </div>
            <div class="mx-auto mt-16 max-w-5xl xl:grid xl:grid-cols-2 xl:gap-8">
              <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                  <div>
                    <h3 class="text-sm font-medium text-gray-900">Products</h3>
                    <ul role="list" class="mt-6 space-y-6">
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Bags</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Tees</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Objects</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Home Goods</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Accessories</a>
                        </li>
                      
                    </ul>
                  </div>
                  <div>
                    <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                    <ul role="list" class="mt-6 space-y-6">
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Contact</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Shipping</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Returns</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Warranty</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Secure Payments</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">FAQ</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Find a store</a>
                        </li>
                      
                    </ul>
                  </div>
                </div>
                <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                  <div>
                    <h3 class="text-sm font-medium text-gray-900">Company</h3>
                    <ul role="list" class="mt-6 space-y-6">
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Sustainability</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Press</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Careers</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Terms &amp;amp; Conditions</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Privacy</a>
                        </li>
                      
                    </ul>
                  </div>
                  <div>
                    <h3 class="text-sm font-medium text-gray-900">Legal</h3>
                    <ul role="list" class="mt-6 space-y-6">
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Terms of Service</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Return Policy</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Privacy Policy</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Shipping Policy</a>
                        </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="lg:grid lg:grid-cols-2 lg:gap-x-6 xl:gap-x-8">
            <div class="flex items-center rounded-lg bg-gray-100 p-6 sm:p-10">
              <div class="mx-auto max-w-sm">
                <h3 class="font-semibold text-gray-900">Sign up for our newsletter</h3>
                <p class="mt-2 text-sm text-gray-500">The latest news, articles, and resources, sent to your inbox weekly.</p>
                <form class="mt-4 sm:mt-6 sm:flex">
                  <label for="email-address" class="sr-only">Email address</label>
                  <input id="email-address" type="text" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white py-2 px-4 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                  <div class="mt-3 sm:mt-0 sm:ml-4 sm:flex-shrink-0">
                    <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-white">Sign up</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="relative mt-6 flex items-center py-12 px-6 sm:py-16 sm:px-10 lg:mt-0">
              <div class="absolute inset-0 overflow-hidden rounded-lg">
                <img src="https://tailwindui.com/img/ecommerce-images/footer-02-exclusive-sale.jpg" alt="" class="h-full w-full object-cover object-center saturate-0 filter">
                <div class="absolute inset-0 bg-indigo-600 bg-opacity-90"></div>
              </div>
              <div class="relative mx-auto max-w-sm text-center">
                <h3 class="text-2xl font-bold tracking-tight text-white">Get early access</h3>
                <p class="mt-2 text-gray-200">
                  Did you sign up to the newsletter? If so, use the keyword we sent you to get access. <a href="#" class="whitespace-nowrap font-bold text-white hover:text-gray-200">Go now<span aria-hidden="true"> &amp;rarr;</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="py-10 md:flex md:items-center md:justify-between">
          <div class="text-center md:text-left">
            <p class="text-sm text-gray-500">&amp;copy; 2021 All Rights Reserved</p>
          </div>

          <div class="mt-4 flex items-center justify-center md:mt-0">
            <div class="flex space-x-8">
              
                <a href="#" class="text-sm text-gray-500 hover:text-gray-600">Accessibility</a>
              
                <a href="#" class="text-sm text-gray-500 hover:text-gray-600">Privacy</a>
              
                <a href="#" class="text-sm text-gray-500 hover:text-gray-600">Terms</a>
              
            </div>

            <div class="ml-6 border-l border-gray-200 pl-6">
              <a href="#" class="flex items-center text-gray-500 hover:text-gray-600">
                <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="h-auto w-5 flex-shrink-0">
                <span class="ml-3 text-sm">Change</span>
                <span class="sr-only">location and currency</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

</div></body>"></iframe><div class="absolute inset-y-0 left-full hidden cursor-ew-resize items-center px-2 sm:flex"><div class="h-8 w-1.5 rounded-full bg-slate-400"></div></div></div></div></div></div><div><p class="mt-4 text-xs text-slate-500">Images provided by <a href="https://ugmonk.com/" class="font-medium text-sky-600 hover:text-sky-700">Ugmonk</a></p></div></section><section id="component-738c2f255a1993e2224c28c461972844"><div class="grid grid-cols-[1fr,auto] items-center"><div class="flex min-w-0"><h2 class="truncate text-base font-medium leading-7 text-slate-900"><a href="#component-738c2f255a1993e2224c28c461972844">With image tiles and feature sections</a></h2><p class="ml-3 hidden whitespace-nowrap rounded-lg bg-slate-100 py-0.5 px-2 text-xs font-semibold leading-6 text-slate-700 lg:block">Requires JS</p></div><button type="button" aria-hidden="true" style="position:fixed;top:1px;left:1px;width:1px;height:0;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0"></button><div class="ml-6 flex items-center"><div class="flex space-x-1 rounded-lg bg-slate-100 p-0.5" role="tablist" aria-orientation="horizontal"><button class="flex items-center rounded-md py-[0.4375rem] pl-2 pr-2 text-sm font-semibold lg:pr-3 bg-white shadow" id="headlessui-tabs-tab-undefined" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected"><svg class="h-5 w-5 flex-none stroke-sky-500" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="M17.25 10c0 1-1.75 6.25-7.25 6.25S2.75 11 2.75 10 4.5 3.75 10 3.75 17.25 9 17.25 10Z"></path><circle cx="10" cy="10" r="2.25"></circle></svg><span class="sr-only lg:not-sr-only lg:ml-2 text-slate-900">Preview</span></button><button class="flex items-center rounded-md py-[0.4375rem] pl-2 pr-2 text-sm font-semibold lg:pr-3 bg-white shadow" id="headlessui-tabs-tab-undefined" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected"><svg class="h-5 w-5 flex-none stroke-sky-500" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="m13.75 6.75 3.5 3.25-3.5 3.25M6.25 13.25 2.75 10l3.5-3.25"></path></svg><span class="sr-only lg:not-sr-only lg:ml-2 text-slate-900">Code</span></button></div><div class="ml-6 mr-3 hidden h-5 w-px bg-slate-900/10 sm:block"></div><div class="relative hidden sm:block"><select class="form-select h-9 w-full rounded-lg border-0 bg-transparent bg-none p-0 pl-3.5 pr-[1.875rem] font-medium text-slate-900 focus:shadow-none focus-visible:ring-2 focus-visible:ring-sky-500 sm:text-sm"><option value="html">HTML</option><option value="react">React</option><option selected="" value="vue">Vue</option></select><svg aria-hidden="true" viewBox="0 0 8 6" width="8" height="6" fill="none" class="pointer-events-none absolute inset-y-0 right-3.5 h-full stroke-slate-500"><path d="M7 1.5l-3 3-3-3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><button class="group relative ml-2 hidden h-9 w-9 items-center justify-center sm:flex"><svg class="h-8 w-8 stroke-slate-400 transition group-hover:rotate-[-4deg] group-hover:stroke-slate-600" fill="none" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12.9975 10.7499L11.7475 10.7499C10.6429 10.7499 9.74747 11.6453 9.74747 12.7499L9.74747 21.2499C9.74747 22.3544 10.6429 23.2499 11.7475 23.2499L20.2475 23.2499C21.352 23.2499 22.2475 22.3544 22.2475 21.2499L22.2475 12.7499C22.2475 11.6453 21.352 10.7499 20.2475 10.7499L18.9975 10.7499" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.9975 12.2499L13.9975 12.2499C13.4452 12.2499 12.9975 11.8022 12.9975 11.2499L12.9975 9.74988C12.9975 9.19759 13.4452 8.74988 13.9975 8.74988L17.9975 8.74988C18.5498 8.74988 18.9975 9.19759 18.9975 9.74988L18.9975 11.2499C18.9975 11.8022 18.5498 12.2499 17.9975 12.2499Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.7475 16.2499L18.2475 16.2499" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.7475 19.2499L18.2475 19.2499" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><g class="opacity-0"><path d="M15.9975 5.99988L15.9975 3.99988" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.9975 5.99988L20.9975 4.99988" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.9975 5.99988L10.9975 4.99988" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g></svg></button></div><div class="col-span-2 row-start-2 min-w-0"><div class="mt-4 focus:outline-none" id="headlessui-tabs-panel-undefined" role="tabpanel" tabindex="0" data-headlessui-state="selected"><div id="frame-738c2f255a1993e2224c28c461972844" class="relative"><style>
        #frame-738c2f255a1993e2224c28c461972844 {
          height: 5486px;
        }
        @media (min-width: 704px) {
          #frame-738c2f255a1993e2224c28c461972844 {
            height: 4153px;
          }
        }
      </style><iframe class="w-full overflow-hidden rounded-lg ring-1 ring-slate-900/10" id="frame-738c2f255a1993e2224c28c461972844" title="With image tiles and feature sections preview" aria-label="With image tiles and feature sections preview" name="frame-738c2f255a1993e2224c28c461972844" srcDoc="<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="/v2-assets/components.css"><script src="/v2-assets/components.js"></script><script src="/js/iframe.js" defer></script><script src="/js/alpine.js" defer></script><body class="antialiased font-sans bg-gray-200 overflow-hidden"><div class="" style="">
  
  <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
    <!-- Mobile menu -->
    
      <div x-show="open" class="relative z-40 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true">
        
          <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state." class="fixed inset-0 bg-black bg-opacity-25"></div>
        

        <div class="fixed inset-0 z-40 flex">
          
            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl" @click.away="open = false">
              <div class="flex px-4 pt-5 pb-2">
                <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400" @click="open = false">
                  <span class="sr-only">Close menu</span>
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/x-mark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
</svg>
                </button>
              </div>

              <!-- Links -->
              <div class="mt-2" x-data="Components.tabs()" @tab-click.window="onTabClick" @tab-keydown.window="onTabKeydown">
                <div class="border-b border-gray-200">
                  <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                    
                      <button id="tabs-1-tab-1" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" x-state:on="Selected" x-state:off="Not Selected" :class="{ &#x27;text-indigo-600 border-indigo-600&#x27;: selected, &#x27;text-gray-900 border-transparent&#x27;: !(selected) }" x-data="Components.tab(0)" aria-controls="tabs-1-panel-1" role="tab" x-init="init()" @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1" :aria-selected="selected ? &#x27;true&#x27; : &#x27;false&#x27;" type="button">Women</button>
                    
                      <button id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" x-state:on="Selected" x-state:off="Not Selected" :class="{ &#x27;text-indigo-600 border-indigo-600&#x27;: selected, &#x27;text-gray-900 border-transparent&#x27;: !(selected) }" x-data="Components.tab(0)" aria-controls="tabs-1-panel-2" role="tab" x-init="init()" @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1" :aria-selected="selected ? &#x27;true&#x27; : &#x27;false&#x27;" type="button">Men</button>
                    
                  </div>
                </div>
                
                  
                    <div id="tabs-1-panel-1" class="space-y-10 px-4 pt-10 pb-8" x-description="&#x27;Women&#x27; tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-1" x-init="init()" x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                      <div class="grid grid-cols-2 gap-x-4">
                        
                          <div class="group relative text-sm">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                          </div>
                        
                          <div class="group relative text-sm">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                          </div>
                        
                      </div>
                      
                        <div>
                          <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                          <ul role="list" aria-labelledby="women-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Dresses</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Denim</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                              </li>
                            
                          </ul>
                        </div>
                      
                        <div>
                          <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
                          <ul role="list" aria-labelledby="women-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                              </li>
                            
                          </ul>
                        </div>
                      
                        <div>
                          <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                          <ul role="list" aria-labelledby="women-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Significant Other</a>
                              </li>
                            
                          </ul>
                        </div>
                      
                    </div>
                  
                    <div id="tabs-1-panel-2" class="space-y-10 px-4 pt-10 pb-8" x-description="&#x27;Men&#x27; tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-2" x-init="init()" x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                      <div class="grid grid-cols-2 gap-x-4">
                        
                          <div class="group relative text-sm">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                          </div>
                        
                          <div class="group relative text-sm">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Artwork Tees
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                          </div>
                        
                      </div>
                      
                        <div>
                          <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                          <ul role="list" aria-labelledby="men-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                              </li>
                            
                          </ul>
                        </div>
                      
                        <div>
                          <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
                          <ul role="list" aria-labelledby="men-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                              </li>
                            
                          </ul>
                        </div>
                      
                        <div>
                          <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                          <ul role="list" aria-labelledby="men-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                              </li>
                            
                              <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                              </li>
                            
                          </ul>
                        </div>
                      
                    </div>
                  
                
              </div>

              <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                
                  <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                  </div>
                
                  <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                  </div>
                
              </div>

              <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                <div class="flow-root">
                  <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                </div>
                <div class="flow-root">
                  <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create account</a>
                </div>
              </div>

              <div class="border-t border-gray-200 py-6 px-4">
                <a href="#" class="-m-2 flex items-center p-2">
                  <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="block h-auto w-5 flex-shrink-0">
                  <span class="ml-3 block text-base font-medium text-gray-900">CAD</span>
                  <span class="sr-only">, change currency</span>
                </a>
              </div>
            </div>
          
        </div>
      </div>
    

    <header class="relative overflow-hidden">
      <!-- Top navigation -->
      <nav aria-label="Top" class="relative z-20 bg-white bg-opacity-90 backdrop-blur-xl backdrop-filter">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center">
            <button type="button" x-description="Mobile menu toggle, controls the &#x27;mobileMenuOpen&#x27; state." class="rounded-md bg-white p-2 text-gray-400 lg:hidden" @click="open = true">
              <span class="sr-only">Open menu</span>
              <svg class="h-6 w-6" x-description="Heroicon name: outline/bars-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
</svg>
            </button>

            <!-- Logo -->
            <div class="ml-4 flex lg:ml-0">
              <a href="#">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="">
              </a>
            </div>

            <!-- Flyout menus -->
            <div class="hidden lg:ml-8 lg:block lg:self-stretch" x-data="Components.popoverGroup()" x-init="init()">
              <div class="flex h-full space-x-8">
                
                  <div class="flex" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                    <div class="relative flex">
                      <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" :class="{ &#x27;border-indigo-600 text-indigo-600&#x27;: open, &#x27;border-transparent text-gray-700 hover:text-gray-800&#x27;: !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">Women</button>
                    </div>

                    
                      <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="&#x27;Women&#x27; flyout menu, show/hide based on flyout menu state." class="absolute inset-x-0 top-full bg-white text-sm text-gray-500" x-ref="panel" @click.away="open = false">
                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                        <!-- Fake border when menu is open -->
                        <div class="absolute inset-0 top-0 mx-auto h-px max-w-7xl px-8" aria-hidden="true">
                          <div class="bg-transparent h-px w-full transition-colors duration-200 ease-out" x-state:on="Open" x-state:off="Closed" :class="{ &#x27;bg-gray-200&#x27;: open, &#x27;bg-transparent&#x27;: !(open) }"></div>
                        </div>

                        <div class="relative">
                          <div class="mx-auto max-w-7xl px-8">
                            <div class="grid grid-cols-2 gap-y-10 gap-x-8 py-16">
                              <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                
                                  <div class="group relative text-base sm:text-sm">
                                    <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                      <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                      <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                      New Arrivals
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                  </div>
                                
                                  <div class="group relative text-base sm:text-sm">
                                    <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                      <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                      <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                      Basic Tees
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                  </div>
                                
                              </div>
                              <div class="row-start-1 grid grid-cols-3 gap-y-10 gap-x-8 text-sm">
                                
                                  <div>
                                    <p id="Clothing-heading" class="font-medium text-gray-900">Clothing</p>
                                    <ul role="list" aria-labelledby="Clothing-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Tops</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Dresses</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Pants</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Denim</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Sweaters</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">T-Shirts</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Jackets</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Activewear</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Browse All</a>
                                        </li>
                                      
                                    </ul>
                                  </div>
                                
                                  <div>
                                    <p id="Accessories-heading" class="font-medium text-gray-900">Accessories</p>
                                    <ul role="list" aria-labelledby="Accessories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Watches</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Wallets</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Bags</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Sunglasses</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Hats</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Belts</a>
                                        </li>
                                      
                                    </ul>
                                  </div>
                                
                                  <div>
                                    <p id="Brands-heading" class="font-medium text-gray-900">Brands</p>
                                    <ul role="list" aria-labelledby="Brands-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">My Way</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Significant Other</a>
                                        </li>
                                      
                                    </ul>
                                  </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                  </div>
                
                  <div class="flex" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                    <div class="relative flex">
                      <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" :class="{ &#x27;border-indigo-600 text-indigo-600&#x27;: open, &#x27;border-transparent text-gray-700 hover:text-gray-800&#x27;: !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">Men</button>
                    </div>

                    
                      <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="&#x27;Men&#x27; flyout menu, show/hide based on flyout menu state." class="absolute inset-x-0 top-full bg-white text-sm text-gray-500" x-ref="panel" @click.away="open = false">
                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                        <!-- Fake border when menu is open -->
                        <div class="absolute inset-0 top-0 mx-auto h-px max-w-7xl px-8" aria-hidden="true">
                          <div class="bg-transparent h-px w-full transition-colors duration-200 ease-out" x-state:on="Open" x-state:off="Closed" :class="{ &#x27;bg-gray-200&#x27;: open, &#x27;bg-transparent&#x27;: !(open) }"></div>
                        </div>

                        <div class="relative">
                          <div class="mx-auto max-w-7xl px-8">
                            <div class="grid grid-cols-2 gap-y-10 gap-x-8 py-16">
                              <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                
                                  <div class="group relative text-base sm:text-sm">
                                    <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                      <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                      <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                      New Arrivals
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                  </div>
                                
                                  <div class="group relative text-base sm:text-sm">
                                    <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                      <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                      <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                      Artwork Tees
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                  </div>
                                
                              </div>
                              <div class="row-start-1 grid grid-cols-3 gap-y-10 gap-x-8 text-sm">
                                
                                  <div>
                                    <p id="Clothing-heading" class="font-medium text-gray-900">Clothing</p>
                                    <ul role="list" aria-labelledby="Clothing-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Tops</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Pants</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Sweaters</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">T-Shirts</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Jackets</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Activewear</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Browse All</a>
                                        </li>
                                      
                                    </ul>
                                  </div>
                                
                                  <div>
                                    <p id="Accessories-heading" class="font-medium text-gray-900">Accessories</p>
                                    <ul role="list" aria-labelledby="Accessories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Watches</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Wallets</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Bags</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Sunglasses</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Hats</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Belts</a>
                                        </li>
                                      
                                    </ul>
                                  </div>
                                
                                  <div>
                                    <p id="Brands-heading" class="font-medium text-gray-900">Brands</p>
                                    <ul role="list" aria-labelledby="Brands-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                        </li>
                                      
                                        <li class="flex">
                                          <a href="#" class="hover:text-gray-800">My Way</a>
                                        </li>
                                      
                                    </ul>
                                  </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                  </div>
                

                
                  <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>
                
                  <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                
              </div>
            </div>

            <div class="ml-auto flex items-center">
              <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign in</a>
                <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create account</a>
              </div>

              <div class="hidden lg:ml-8 lg:flex">
                <a href="#" class="flex items-center text-gray-700 hover:text-gray-800">
                  <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="block h-auto w-5 flex-shrink-0">
                  <span class="ml-3 block text-sm font-medium">CAD</span>
                  <span class="sr-only">, change currency</span>
                </a>
              </div>

              <!-- Search -->
              <div class="flex lg:ml-6">
                <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Search</span>
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/magnifying-glass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
</svg>
                </a>
              </div>

              <!-- Cart -->
              <div class="ml-4 flow-root lg:ml-6">
                <a href="#" class="group -m-2 flex items-center p-2">
                  <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: outline/shopping-bag" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
</svg>
                  <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                  <span class="sr-only">items in cart, view bag</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <!-- Hero section -->
      <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
        <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
          <div class="sm:max-w-lg">
            <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Summer styles are finally here</h1>
            <p class="mt-4 text-xl text-gray-500">This year, our new summer collection will shelter you from the harsh elements of a world that doesn&#x27;t care if you live or die.</p>
          </div>
          <div>
            <div class="mt-10">
              <!-- Decorative image grid -->
              <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                  <div class="flex items-center space-x-6 lg:space-x-8">
                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                      <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-01.jpg" alt="" class="h-full w-full object-cover object-center">
                      </div>
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-02.jpg" alt="" class="h-full w-full object-cover object-center">
                      </div>
                    </div>
                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg" alt="" class="h-full w-full object-cover object-center">
                      </div>
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-04.jpg" alt="" class="h-full w-full object-cover object-center">
                      </div>
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg" alt="" class="h-full w-full object-cover object-center">
                      </div>
                    </div>
                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg" alt="" class="h-full w-full object-cover object-center">
                      </div>
                      <div class="h-64 w-44 overflow-hidden rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg" alt="" class="h-full w-full object-cover object-center">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-center font-medium text-white hover:bg-indigo-700">Shop Collection</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main>
      <!-- Category section -->
      <section aria-labelledby="category-heading" class="bg-gray-50">
        <div class="mx-auto max-w-7xl py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
          <div class="sm:flex sm:items-baseline sm:justify-between">
            <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by Category</h2>
            <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
              Browse all categories
              <span aria-hidden="true"> &amp;rarr;</span>
            </a>
          </div>

          <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:grid-rows-2 sm:gap-x-6 lg:gap-8">
            <div class="group aspect-w-2 aspect-h-1 overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-1 sm:row-span-2">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-featured-category.jpg" alt="Two models wearing women&#x27;s black cotton crewneck tee and off-white cotton crewneck tee." class="object-cover object-center group-hover:opacity-75">
              <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50"></div>
              <div class="flex items-end p-6">
                <div>
                  <h3 class="font-semibold text-white">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      New Arrivals
                    </a>
                  </h3>
                  <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                </div>
              </div>
            </div>
            <div class="group aspect-w-2 aspect-h-1 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters." class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
              <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>
              <div class="flex items-end p-6 sm:absolute sm:inset-0">
                <div>
                  <h3 class="font-semibold text-white">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Accessories
                    </a>
                  </h3>
                  <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                </div>
              </div>
            </div>
            <div class="group aspect-w-2 aspect-h-1 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="Walnut desk organizer set with white modular trays, next to porcelain mug on wooden desk." class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
              <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>
              <div class="flex items-end p-6 sm:absolute sm:inset-0">
                <div>
                  <h3 class="font-semibold text-white">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Workspace
                    </a>
                  </h3>
                  <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-6 sm:hidden">
            <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
              Browse all categories
              <span aria-hidden="true"> &amp;rarr;</span>
            </a>
          </div>
        </div>
      </section>

      <!-- Featured section -->
      <section aria-labelledby="cause-heading">
        <div class="relative bg-gray-800 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
          <div class="absolute inset-0 overflow-hidden">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-feature-section-full-width.jpg" alt="" class="h-full w-full object-cover object-center">
          </div>
          <div aria-hidden="true" class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
          <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
            <h2 id="cause-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Long-term thinking</h2>
            <p class="mt-3 text-xl text-white">We&#x27;re committed to responsible, sustainable, and ethical manufacturing. Our small-scale approach allows us to focus on quality and reduce our impact. We&#x27;re doing our best to delay the inevitable heat-death of the universe.</p>
            <a href="#" class="mt-8 block w-full rounded-md border border-transparent bg-white py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Read our story</a>
          </div>
        </div>
      </section>

      <!-- Favorites section -->
      <section aria-labelledby="favorites-heading">
        <div class="mx-auto max-w-7xl py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
          <div class="sm:flex sm:items-baseline sm:justify-between">
            <h2 id="favorites-heading" class="text-2xl font-bold tracking-tight text-gray-900">Our Favorites</h2>
            <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
              Browse all favorites
              <span aria-hidden="true"> &amp;rarr;</span>
            </a>
          </div>

          <div class="mt-6 grid grid-cols-1 gap-y-10 sm:grid-cols-3 sm:gap-y-0 sm:gap-x-6 lg:gap-x-8">
            
              <div class="group relative">
                <div class="h-96 w-full overflow-hidden rounded-lg group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-3 sm:h-auto">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-01.jpg" alt="Model wearing women&amp;#039;s black cotton crewneck tee." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-4 text-base font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Black Basic Tee
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">$32</p>
              </div>
            
              <div class="group relative">
                <div class="h-96 w-full overflow-hidden rounded-lg group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-3 sm:h-auto">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-02.jpg" alt="Model wearing women&amp;#039;s off-white cotton crewneck tee." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-4 text-base font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Off-White Basic Tee
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">$32</p>
              </div>
            
              <div class="group relative">
                <div class="h-96 w-full overflow-hidden rounded-lg group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-3 sm:h-auto">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-03.jpg" alt="Model wearing women&amp;#039;s burgundy red crewneck artwork tee with small white triangle overlapping larger black triangle." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-4 text-base font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Mountains Artwork Tee
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">$36</p>
              </div>
            
          </div>

          <div class="mt-6 sm:hidden">
            <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
              Browse all favorites
              <span aria-hidden="true"> &amp;rarr;</span>
            </a>
          </div>
        </div>
      </section>

      <!-- CTA section -->
      <section aria-labelledby="sale-heading">
        <div class="overflow-hidden pt-32 sm:pt-14">
          <div class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <div class="relative pt-48 pb-16 sm:pb-24">
                <div>
                  <h2 id="sale-heading" class="text-4xl font-bold tracking-tight text-white md:text-5xl">
                    Final Stock.
                    <br>
                    Up to 50% off.
                  </h2>
                  <div class="mt-6 text-base">
                    <a href="#" class="font-semibold text-white">
                      Shop the sale
                      <span aria-hidden="true"> &amp;rarr;</span>
                    </a>
                  </div>
                </div>

                <div class="absolute -top-32 left-1/2 -translate-x-1/2 transform sm:top-6 sm:translate-x-0">
                  <div class="ml-24 flex min-w-max space-x-6 sm:ml-3 lg:space-x-8">
                    <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                      <div class="flex-shrink-0">
                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="">
                      </div>

                      <div class="mt-6 flex-shrink-0 sm:mt-0">
                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="">
                      </div>
                    </div>
                    <div class="flex space-x-6 sm:-mt-20 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                      <div class="flex-shrink-0">
                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-01.jpg" alt="">
                      </div>

                      <div class="mt-6 flex-shrink-0 sm:mt-0">
                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-02.jpg" alt="">
                      </div>
                    </div>
                    <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                      <div class="flex-shrink-0">
                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="">
                      </div>

                      <div class="mt-6 flex-shrink-0 sm:mt-0">
                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer aria-labelledby="footer-heading" class="bg-white">
      <h2 id="footer-heading" class="sr-only">Footer</h2>
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
          <div class="grid grid-cols-2 gap-8 xl:col-span-2">
            <div class="space-y-16 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
              <div>
                <h3 class="text-sm font-medium text-gray-900">Shop</h3>
                <ul role="list" class="mt-6 space-y-6">
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Bags</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Tees</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Objects</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Home Goods</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Accessories</a>
                    </li>
                  
                </ul>
              </div>
              <div>
                <h3 class="text-sm font-medium text-gray-900">Company</h3>
                <ul role="list" class="mt-6 space-y-6">
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Sustainability</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Press</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Careers</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Terms &amp;amp; Conditions</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Privacy</a>
                    </li>
                  
                </ul>
              </div>
            </div>
            <div class="space-y-16 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
              <div>
                <h3 class="text-sm font-medium text-gray-900">Account</h3>
                <ul role="list" class="mt-6 space-y-6">
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Manage Account</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Returns &amp;amp; Exchanges</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Redeem a Gift Card</a>
                    </li>
                  
                </ul>
              </div>
              <div>
                <h3 class="text-sm font-medium text-gray-900">Connect</h3>
                <ul role="list" class="mt-6 space-y-6">
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Contact Us</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Twitter</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Instagram</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Pinterest</a>
                    </li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="mt-16 md:mt-16 xl:mt-0">
            <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
            <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
            <form class="mt-2 flex sm:max-w-md">
              <label for="email-address" class="sr-only">Email address</label>
              <input id="email-address" type="text" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white py-2 px-4 text-base text-indigo-500 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
              <div class="ml-4 flex-shrink-0">
                <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign up</button>
              </div>
            </form>
          </div>
        </div>

        <div class="border-t border-gray-200 py-10">
          <p class="text-sm text-gray-500">Copyright &amp;copy; 2021 Your Company, Inc.</p>
        </div>
      </div>
    </footer>
  </div>

</div></body>"></iframe><div class="absolute inset-y-0 left-full hidden cursor-ew-resize items-center px-2 sm:flex"><div class="h-8 w-1.5 rounded-full bg-slate-400"></div></div></div></div></div></div><div><p class="mt-4 text-xs text-slate-500">Images provided by <a href="https://ugmonk.com/" class="font-medium text-sky-600 hover:text-sky-700">Ugmonk</a> and <a href="https://www.qwstion.com/" class="font-medium text-sky-600 hover:text-sky-700">QWSTION</a></p></div></section><section id="component-464ebe7691b135031411ad52b3560cc1"><div class="grid grid-cols-[1fr,auto] items-center"><div class="flex min-w-0"><h2 class="truncate text-base font-medium leading-7 text-slate-900"><a href="#component-464ebe7691b135031411ad52b3560cc1">With overlapping image tiles and perks</a></h2><p class="ml-3 hidden whitespace-nowrap rounded-lg bg-slate-100 py-0.5 px-2 text-xs font-semibold leading-6 text-slate-700 lg:block">Requires JS</p></div><button type="button" aria-hidden="true" style="position:fixed;top:1px;left:1px;width:1px;height:0;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0"></button><div class="ml-6 flex items-center"><div class="flex space-x-1 rounded-lg bg-slate-100 p-0.5" role="tablist" aria-orientation="horizontal"><button class="flex items-center rounded-md py-[0.4375rem] pl-2 pr-2 text-sm font-semibold lg:pr-3 bg-white shadow" id="headlessui-tabs-tab-undefined" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected"><svg class="h-5 w-5 flex-none stroke-sky-500" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="M17.25 10c0 1-1.75 6.25-7.25 6.25S2.75 11 2.75 10 4.5 3.75 10 3.75 17.25 9 17.25 10Z"></path><circle cx="10" cy="10" r="2.25"></circle></svg><span class="sr-only lg:not-sr-only lg:ml-2 text-slate-900">Preview</span></button><button class="flex items-center rounded-md py-[0.4375rem] pl-2 pr-2 text-sm font-semibold lg:pr-3 bg-white shadow" id="headlessui-tabs-tab-undefined" role="tab" type="button" aria-selected="true" tabindex="0" data-headlessui-state="selected"><svg class="h-5 w-5 flex-none stroke-sky-500" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="m13.75 6.75 3.5 3.25-3.5 3.25M6.25 13.25 2.75 10l3.5-3.25"></path></svg><span class="sr-only lg:not-sr-only lg:ml-2 text-slate-900">Code</span></button></div><div class="ml-6 mr-3 hidden h-5 w-px bg-slate-900/10 sm:block"></div><div class="relative hidden sm:block"><select class="form-select h-9 w-full rounded-lg border-0 bg-transparent bg-none p-0 pl-3.5 pr-[1.875rem] font-medium text-slate-900 focus:shadow-none focus-visible:ring-2 focus-visible:ring-sky-500 sm:text-sm"><option value="html">HTML</option><option value="react">React</option><option selected="" value="vue">Vue</option></select><svg aria-hidden="true" viewBox="0 0 8 6" width="8" height="6" fill="none" class="pointer-events-none absolute inset-y-0 right-3.5 h-full stroke-slate-500"><path d="M7 1.5l-3 3-3-3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><button class="group relative ml-2 hidden h-9 w-9 items-center justify-center sm:flex"><svg class="h-8 w-8 stroke-slate-400 transition group-hover:rotate-[-4deg] group-hover:stroke-slate-600" fill="none" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12.9975 10.7499L11.7475 10.7499C10.6429 10.7499 9.74747 11.6453 9.74747 12.7499L9.74747 21.2499C9.74747 22.3544 10.6429 23.2499 11.7475 23.2499L20.2475 23.2499C21.352 23.2499 22.2475 22.3544 22.2475 21.2499L22.2475 12.7499C22.2475 11.6453 21.352 10.7499 20.2475 10.7499L18.9975 10.7499" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.9975 12.2499L13.9975 12.2499C13.4452 12.2499 12.9975 11.8022 12.9975 11.2499L12.9975 9.74988C12.9975 9.19759 13.4452 8.74988 13.9975 8.74988L17.9975 8.74988C18.5498 8.74988 18.9975 9.19759 18.9975 9.74988L18.9975 11.2499C18.9975 11.8022 18.5498 12.2499 17.9975 12.2499Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.7475 16.2499L18.2475 16.2499" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.7475 19.2499L18.2475 19.2499" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><g class="opacity-0"><path d="M15.9975 5.99988L15.9975 3.99988" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.9975 5.99988L20.9975 4.99988" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.9975 5.99988L10.9975 4.99988" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g></svg></button></div><div class="col-span-2 row-start-2 min-w-0"><div class="mt-4 focus:outline-none" id="headlessui-tabs-panel-undefined" role="tabpanel" tabindex="0" data-headlessui-state="selected"><div id="frame-464ebe7691b135031411ad52b3560cc1" class="relative"><style>
        #frame-464ebe7691b135031411ad52b3560cc1 {
          height: 4859px;
        }
        @media (min-width: 704px) {
          #frame-464ebe7691b135031411ad52b3560cc1 {
            height: 2745px;
          }
        }
      </style><iframe class="w-full overflow-hidden rounded-lg ring-1 ring-slate-900/10" id="frame-464ebe7691b135031411ad52b3560cc1" title="With overlapping image tiles and perks preview" aria-label="With overlapping image tiles and perks preview" name="frame-464ebe7691b135031411ad52b3560cc1" srcDoc="<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="/v2-assets/components.css"><script src="/v2-assets/components.js"></script><script src="/js/iframe.js" defer></script><script src="/js/alpine.js" defer></script><body class="antialiased font-sans bg-gray-200 overflow-hidden"><div class="" style="">
  
  <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
    <!-- Mobile menu -->
    
      <div x-show="open" class="relative z-40 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true">
        
          <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state." class="fixed inset-0 bg-black bg-opacity-25"></div>
        

        <div class="fixed inset-0 z-40 flex">
          
            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl" @click.away="open = false">
              <div class="flex px-4 pt-5 pb-2">
                <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400" @click="open = false">
                  <span class="sr-only">Close menu</span>
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/x-mark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
</svg>
                </button>
              </div>

              <!-- Links -->
              <div class="mt-2" x-data="Components.tabs()" @tab-click.window="onTabClick" @tab-keydown.window="onTabKeydown">
                <div class="border-b border-gray-200">
                  <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                    
                      <button id="tabs-1-tab-1" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" x-state:on="Selected" x-state:off="Not Selected" :class="{ &#x27;text-indigo-600 border-indigo-600&#x27;: selected, &#x27;text-gray-900 border-transparent&#x27;: !(selected) }" x-data="Components.tab(0)" aria-controls="tabs-1-panel-1" role="tab" x-init="init()" @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1" :aria-selected="selected ? &#x27;true&#x27; : &#x27;false&#x27;" type="button">Women</button>
                    
                      <button id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" x-state:on="Selected" x-state:off="Not Selected" :class="{ &#x27;text-indigo-600 border-indigo-600&#x27;: selected, &#x27;text-gray-900 border-transparent&#x27;: !(selected) }" x-data="Components.tab(0)" aria-controls="tabs-1-panel-2" role="tab" x-init="init()" @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1" :aria-selected="selected ? &#x27;true&#x27; : &#x27;false&#x27;" type="button">Men</button>
                    
                  </div>
                </div>
                
                  
                    <div id="tabs-1-panel-1" class="space-y-12 px-4 py-6" x-description="&#x27;Women&#x27; tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-1" x-init="init()" x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                      <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Accessories
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Carry
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                      </div>
                    </div>
                  
                    <div id="tabs-1-panel-2" class="space-y-12 px-4 py-6" x-description="&#x27;Men&#x27; tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-2" x-init="init()" x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                      <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Accessories
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                          <div class="group relative">
                            <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                              <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                              Carry
                            </a>
                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                          </div>
                        
                      </div>
                    </div>
                  
                
              </div>

              <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                
                  <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                  </div>
                
                  <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                  </div>
                
              </div>

              <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                <div class="flow-root">
                  <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create an account</a>
                </div>
                <div class="flow-root">
                  <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                </div>
              </div>

              <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                <!-- Currency selector -->
                <form>
                  <div class="inline-block">
                    <label for="mobile-currency" class="sr-only">Currency</label>
                    <div class="group relative -ml-2 rounded-md border-transparent focus-within:ring-2 focus-within:ring-white">
                      <select id="mobile-currency" name="currency" class="flex items-center rounded-md border-transparent bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-gray-700 focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-800">
                        
                          <option>CAD</option>
                        
                          <option>USD</option>
                        
                          <option>AUD</option>
                        
                          <option>EUR</option>
                        
                          <option>GBP</option>
                        
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                        <svg class="h-5 w-5 text-gray-500" x-description="Heroicon name: mini/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
</svg>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          
        </div>
      </div>
    

    <header class="relative">
      <nav aria-label="Top">
        <!-- Top navigation -->
        <div class="bg-gray-900">
          <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <!-- Currency selector -->
            <form>
              <div>
                <label for="desktop-currency" class="sr-only">Currency</label>
                <div class="group relative -ml-2 rounded-md border-transparent bg-gray-900 focus-within:ring-2 focus-within:ring-white">
                  <select id="desktop-currency" name="currency" class="flex items-center rounded-md border-transparent bg-gray-900 bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-white focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-100">
                    
                      <option>CAD</option>
                    
                      <option>USD</option>
                    
                      <option>AUD</option>
                    
                      <option>EUR</option>
                    
                      <option>GBP</option>
                    
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                    <svg class="h-5 w-5 text-gray-300" x-description="Heroicon name: mini/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
</svg>
                  </div>
                </div>
              </div>
            </form>

            <div class="flex items-center space-x-6">
              <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
              <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
            </div>
          </div>
        </div>

        <!-- Secondary navigation -->
        <div class="bg-white">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
              <!-- Logo (lg+) -->
              <div class="hidden lg:flex lg:flex-1 lg:items-center">
                <a href="#">
                  <span class="sr-only">Your Company</span>
                  <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="">
                </a>
              </div>

              <div class="hidden h-full lg:flex">
                <!-- Flyout menus -->
                <div class="inset-x-0 bottom-0 px-4" x-data="Components.popoverGroup()" x-init="init()">
                  <div class="flex h-full justify-center space-x-8">
                    
                      <div class="flex" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                        <div class="relative flex">
                          <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="text-gray-700 hover:text-gray-800 relative flex items-center justify-center text-sm font-medium transition-colors duration-200 ease-out" :class="{ &#x27;text-indigo-600&#x27;: open, &#x27;text-gray-700 hover:text-gray-800&#x27;: !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                            Women
                            <span class="absolute inset-x-0 -bottom-px z-20 h-0.5 transition duration-200 ease-out" aria-hidden="true" x-state:on="Open" x-state:off="Closed" :class="{ &#x27;bg-indigo-600&#x27;: open }"></span>
                          </button>
                        </div>

                        
                          <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="&#x27;Women&#x27; flyout menu, show/hide based on flyout menu state." class="absolute inset-x-0 top-full z-10 bg-white text-sm text-gray-500" x-ref="panel" @click.away="open = false">
                            <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                            <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                            <!-- Fake border when menu is open -->
                            <div class="absolute inset-0 top-0 mx-auto h-px max-w-7xl px-8" aria-hidden="true">
                              <div class="bg-transparent h-px w-full transition-colors duration-200 ease-out" x-state:on="Open" x-state:off="Closed" :class="{ &#x27;bg-gray-200&#x27;: open, &#x27;bg-transparent&#x27;: !(open) }"></div>
                            </div>

                            <div class="relative">
                              <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                                  
                                    <div class="group relative">
                                      <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                                      </div>
                                      <a href="#" class="mt-4 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        New Arrivals
                                      </a>
                                      <p aria-hidden="true" class="mt-1">Shop now</p>
                                    </div>
                                  
                                    <div class="group relative">
                                      <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                                      </div>
                                      <a href="#" class="mt-4 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Basic Tees
                                      </a>
                                      <p aria-hidden="true" class="mt-1">Shop now</p>
                                    </div>
                                  
                                    <div class="group relative">
                                      <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-cover object-center">
                                      </div>
                                      <a href="#" class="mt-4 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Accessories
                                      </a>
                                      <p aria-hidden="true" class="mt-1">Shop now</p>
                                    </div>
                                  
                                    <div class="group relative">
                                      <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="object-cover object-center">
                                      </div>
                                      <a href="#" class="mt-4 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Carry
                                      </a>
                                      <p aria-hidden="true" class="mt-1">Shop now</p>
                                    </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        
                      </div>
                    
                      <div class="flex" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                        <div class="relative flex">
                          <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="text-gray-700 hover:text-gray-800 relative flex items-center justify-center text-sm font-medium transition-colors duration-200 ease-out" :class="{ &#x27;text-indigo-600&#x27;: open, &#x27;text-gray-700 hover:text-gray-800&#x27;: !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                            Men
                            <span class="absolute inset-x-0 -bottom-px z-20 h-0.5 transition duration-200 ease-out" aria-hidden="true" x-state:on="Open" x-state:off="Closed" :class="{ &#x27;bg-indigo-600&#x27;: open }"></span>
                          </button>
                        </div>

                        
                          <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="&#x27;Women&#x27; flyout menu, show/hide based on flyout menu state." class="absolute inset-x-0 top-full z-10 bg-white text-sm text-gray-500" x-ref="panel" @click.away="open = false">
                            <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                            <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                            <!-- Fake border when menu is open -->
                            <div class="absolute inset-0 top-0 mx-auto h-px max-w-7xl px-8" aria-hidden="true">
                              <div class="bg-transparent h-px w-full transition-colors duration-200 ease-out" x-state:on="Open" x-state:off="Closed" :class="{ &#x27;bg-gray-200&#x27;: open, &#x27;bg-transparent&#x27;: !(open) }"></div>
                            </div>

                            <div class="relative">
                              <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                                  
                                    <div class="group relative">
                                      <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-cover object-center">
                                      </div>
                                      <a href="#" class="mt-4 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        New Arrivals
                                      </a>
                                      <p aria-hidden="true" class="mt-1">Shop now</p>
                                    </div>
                                  
                                    <div class="group relative">
                                      <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="object-cover object-center">
                                      </div>
                                      <a href="#" class="mt-4 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Basic Tees
                                      </a>
                                      <p aria-hidden="true" class="mt-1">Shop now</p>
                                    </div>
                                  
                                    <div class="group relative">
                                      <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-cover object-center">
                                      </div>
                                      <a href="#" class="mt-4 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Accessories
                                      </a>
                                      <p aria-hidden="true" class="mt-1">Shop now</p>
                                    </div>
                                  
                                    <div class="group relative">
                                      <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-cover object-center">
                                      </div>
                                      <a href="#" class="mt-4 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Carry
                                      </a>
                                      <p aria-hidden="true" class="mt-1">Shop now</p>
                                    </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        
                      </div>
                    

                    
                      <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>
                    
                      <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                    
                  </div>
                </div>
              </div>

              <!-- Mobile menu and search (lg-) -->
              <div class="flex flex-1 items-center lg:hidden">
                <button type="button" x-description="Mobile menu toggle, controls the &#x27;mobileMenuOpen&#x27; state." class="-ml-2 rounded-md bg-white p-2 text-gray-400" @click="open = true">
                  <span class="sr-only">Open menu</span>
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/bars-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
</svg>
                </button>

                <!-- Search -->
                <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Search</span>
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/magnifying-glass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
</svg>
                </a>
              </div>

              <!-- Logo (lg-) -->
              <a href="#" class="lg:hidden">
                <span class="sr-only">Your Company</span>
                <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="" class="h-8 w-auto">
              </a>

              <div class="flex flex-1 items-center justify-end">
                <a href="#" class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">Search</a>

                <div class="flex items-center lg:ml-8">
                  <!-- Help -->
                  <a href="#" class="p-2 text-gray-400 hover:text-gray-500 lg:hidden">
                    <span class="sr-only">Help</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/question-mark-circle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"></path>
</svg>
                  </a>
                  <a href="#" class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">Help</a>

                  <!-- Cart -->
                  <div class="ml-4 flow-root lg:ml-8">
                    <a href="#" class="group -m-2 flex items-center p-2">
                      <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: outline/shopping-bag" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
</svg>
                      <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                      <span class="sr-only">items in cart, view bag</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <!-- Hero section -->
      <div class="relative">
        <!-- Background image and overlap -->
        <div aria-hidden="true" class="absolute inset-0 hidden sm:flex sm:flex-col">
          <div class="relative w-full flex-1 bg-gray-800">
            <div class="absolute inset-0 overflow-hidden">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-hero-full-width.jpg" alt="" class="h-full w-full object-cover object-center">
            </div>
            <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
          </div>
          <div class="h-32 w-full bg-white md:h-40 lg:h-48"></div>
        </div>

        <div class="relative mx-auto max-w-3xl px-4 pb-96 text-center sm:px-6 sm:pb-0 lg:px-8">
          <!-- Background image and overlap -->
          <div aria-hidden="true" class="absolute inset-0 flex flex-col sm:hidden">
            <div class="relative w-full flex-1 bg-gray-800">
              <div class="absolute inset-0 overflow-hidden">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-hero-full-width.jpg" alt="" class="h-full w-full object-cover object-center">
              </div>
              <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
            </div>
            <div class="h-48 w-full bg-white"></div>
          </div>
          <div class="relative py-32">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">Mid-Season Sale</h1>
            <div class="mt-4 sm:mt-6">
              <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 py-3 px-8 font-medium text-white hover:bg-indigo-700">Shop Collection</a>
            </div>
          </div>
        </div>

        <section aria-labelledby="collection-heading" class="relative -mt-96 sm:mt-0">
          <h2 id="collection-heading" class="sr-only">Collections</h2>
          <div class="mx-auto grid max-w-md grid-cols-1 gap-y-6 px-4 sm:max-w-7xl sm:grid-cols-3 sm:gap-y-0 sm:gap-x-6 sm:px-6 lg:gap-x-8 lg:px-8">
            
              <div class="group relative h-96 rounded-lg bg-white shadow-xl sm:aspect-w-4 sm:aspect-h-5 sm:h-auto">
                <div>
                  <div aria-hidden="true" class="absolute inset-0 overflow-hidden rounded-lg">
                    <div class="absolute inset-0 overflow-hidden group-hover:opacity-75">
                      <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-collection-01.jpg" alt="Woman wearing a comfortable cotton t-shirt." class="h-full w-full object-cover object-center">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                  </div>
                  <div class="absolute inset-0 flex items-end rounded-lg p-6">
                    <div>
                      <p aria-hidden="true" class="text-sm text-white">Shop the collection</p>
                      <h3 class="mt-1 font-semibold text-white">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Women&amp;#039;s
                        </a>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            
              <div class="group relative h-96 rounded-lg bg-white shadow-xl sm:aspect-w-4 sm:aspect-h-5 sm:h-auto">
                <div>
                  <div aria-hidden="true" class="absolute inset-0 overflow-hidden rounded-lg">
                    <div class="absolute inset-0 overflow-hidden group-hover:opacity-75">
                      <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-collection-02.jpg" alt="Man wearing a comfortable and casual cotton t-shirt." class="h-full w-full object-cover object-center">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                  </div>
                  <div class="absolute inset-0 flex items-end rounded-lg p-6">
                    <div>
                      <p aria-hidden="true" class="text-sm text-white">Shop the collection</p>
                      <h3 class="mt-1 font-semibold text-white">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Men&amp;#039;s
                        </a>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            
              <div class="group relative h-96 rounded-lg bg-white shadow-xl sm:aspect-w-4 sm:aspect-h-5 sm:h-auto">
                <div>
                  <div aria-hidden="true" class="absolute inset-0 overflow-hidden rounded-lg">
                    <div class="absolute inset-0 overflow-hidden group-hover:opacity-75">
                      <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-collection-03.jpg" alt="Person sitting at a wooden desk with paper note organizer, pencil and tablet." class="h-full w-full object-cover object-center">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                  </div>
                  <div class="absolute inset-0 flex items-end rounded-lg p-6">
                    <div>
                      <p aria-hidden="true" class="text-sm text-white">Shop the collection</p>
                      <h3 class="mt-1 font-semibold text-white">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Desk Accessories
                        </a>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        </section>
      </div>

      <section aria-labelledby="trending-heading">
        <div class="mx-auto max-w-7xl py-24 px-4 sm:px-6 sm:py-32 lg:px-8 lg:pt-32">
          <div class="md:flex md:items-center md:justify-between">
            <h2 id="favorites-heading" class="text-2xl font-bold tracking-tight text-gray-900">Trending Products</h2>
            <a href="#" class="hidden text-sm font-medium text-indigo-600 hover:text-indigo-500 md:block">
              Shop the collection
              <span aria-hidden="true"> &amp;rarr;</span>
            </a>
          </div>

          <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
            
              <div class="group relative">
                <div class="h-56 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:h-72 xl:h-80">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="Hand stitched, orange leather long wallet." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Leather Long Wallet
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Natural</p>
                <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
              </div>
            
              <div class="group relative">
                <div class="h-56 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:h-72 xl:h-80">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-03.jpg" alt="12-sided, machined black pencil and pen." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Machined Pencil and Pen Set
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Black</p>
                <p class="mt-1 text-sm font-medium text-gray-900">$70</p>
              </div>
            
              <div class="group relative">
                <div class="h-56 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:h-72 xl:h-80">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-04.jpg" alt="Set of three light and dark brown mini sketch books." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Mini-Sketchbooks
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Light Brown</p>
                <p class="mt-1 text-sm font-medium text-gray-900">$27</p>
              </div>
            
              <div class="group relative">
                <div class="h-56 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:h-72 xl:h-80">
                  <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-01.jpg" alt="Beautiful walnut organizer set with multiple white compartments" class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Organizer Set
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Walnut</p>
                <p class="mt-1 text-sm font-medium text-gray-900">$149</p>
              </div>
            
          </div>

          <div class="mt-8 text-sm md:hidden">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
              Shop the collection
              <span aria-hidden="true"> &amp;rarr;</span>
            </a>
          </div>
        </div>
      </section>

      <section aria-labelledby="perks-heading" class="border-t border-gray-200 bg-gray-50">
        <h2 id="perks-heading" class="sr-only">Our perks</h2>

        <div class="mx-auto max-w-7xl py-24 px-4 sm:px-6 sm:py-32 lg:px-8">
          <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-0">
            
              <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                <div class="md:flex-shrink-0">
                  <div class="flow-root">
                    <img class="-my-1 mx-auto h-24 w-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-returns-light.svg" alt="">
                  </div>
                </div>
                <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                  <h3 class="text-base font-medium text-gray-900">Free returns</h3>
                  <p class="mt-3 text-sm text-gray-500">Not what you expected? Place it back in the parcel and attach the pre-paid postage stamp.</p>
                </div>
              </div>
            
              <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                <div class="md:flex-shrink-0">
                  <div class="flow-root">
                    <img class="-my-1 mx-auto h-24 w-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-calendar-light.svg" alt="">
                  </div>
                </div>
                <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                  <h3 class="text-base font-medium text-gray-900">Same day delivery</h3>
                  <p class="mt-3 text-sm text-gray-500">We offer a delivery service that has never been done before. Checkout today and receive your products within hours.</p>
                </div>
              </div>
            
              <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                <div class="md:flex-shrink-0">
                  <div class="flow-root">
                    <img class="-my-1 mx-auto h-24 w-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-gift-card-light.svg" alt="">
                  </div>
                </div>
                <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                  <h3 class="text-base font-medium text-gray-900">All year discount</h3>
                  <p class="mt-3 text-sm text-gray-500">Looking for a deal? You can use the code &amp;quot;ALLYEAR&amp;quot; at checkout and get money off all year round.</p>
                </div>
              </div>
            
              <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                <div class="md:flex-shrink-0">
                  <div class="flow-root">
                    <img class="-my-1 mx-auto h-24 w-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-planet-light.svg" alt="">
                  </div>
                </div>
                <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                  <h3 class="text-base font-medium text-gray-900">For the planet</h3>
                  <p class="mt-3 text-sm text-gray-500">We’ve pledged 1% of sales to the preservation and restoration of the natural environment.</p>
                </div>
              </div>
            
          </div>
        </div>
      </section>
    </main>

    <footer aria-labelledby="footer-heading" class="bg-gray-50">
      <h2 id="footer-heading" class="sr-only">Footer</h2>
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="border-t border-gray-200 py-20">
          <div class="grid grid-cols-1 md:grid-flow-col md:auto-rows-min md:grid-cols-12 md:gap-x-8 md:gap-y-16">
            <!-- Image section -->
            <div class="col-span-1 md:col-span-2 lg:col-start-1 lg:row-start-1">
              <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="" class="h-8 w-auto">
            </div>

            <!-- Sitemap sections -->
            <div class="col-span-6 mt-10 grid grid-cols-2 gap-8 sm:grid-cols-3 md:col-span-8 md:col-start-3 md:row-start-1 md:mt-0 lg:col-span-6 lg:col-start-2">
              <div class="grid grid-cols-1 gap-y-12 sm:col-span-2 sm:grid-cols-2 sm:gap-x-8">
                <div>
                  <h3 class="text-sm font-medium text-gray-900">Products</h3>
                  <ul role="list" class="mt-6 space-y-6">
                    
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600">Bags</a>
                      </li>
                    
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600">Tees</a>
                      </li>
                    
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600">Objects</a>
                      </li>
                    
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600">Home Goods</a>
                      </li>
                    
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600">Accessories</a>
                      </li>
                    
                  </ul>
                </div>
                <div>
                  <h3 class="text-sm font-medium text-gray-900">Company</h3>
                  <ul role="list" class="mt-6 space-y-6">
                    
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>
                      </li>
                    
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600">Sustainability</a>
                      </li>
                    
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600">Press</a>
                      </li>
                    
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600">Careers</a>
                      </li>
                    
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600">Terms &amp;amp; Conditions</a>
                      </li>
                    
                      <li class="text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-600">Privacy</a>
                      </li>
                    
                  </ul>
                </div>
              </div>
              <div>
                <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                <ul role="list" class="mt-6 space-y-6">
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Contact</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Shipping</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Returns</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Warranty</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Secure Payments</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">FAQ</a>
                    </li>
                  
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Find a store</a>
                    </li>
                  
                </ul>
              </div>
            </div>

            <!-- Newsletter section -->
            <div class="mt-12 md:col-span-8 md:col-start-3 md:row-start-2 md:mt-0 lg:col-span-4 lg:col-start-9 lg:row-start-1">
              <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
              <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
              <form class="mt-2 flex sm:max-w-md">
                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" type="text" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white py-2 px-4 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                <div class="ml-4 flex-shrink-0">
                  <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign up</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="border-t border-gray-100 py-10 text-center">
          <p class="text-sm text-gray-500">&amp;copy; 2021 Your Company, Inc. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>

</div></body>"></iframe><div class="absolute inset-y-0 left-full hidden cursor-ew-resize items-center px-2 sm:flex"><div class="h-8 w-1.5 rounded-full bg-slate-400"></div></div></div></div></div></div><div><p class="mt-4 text-xs text-slate-500">Images provided by <a href="https://ugmonk.com/" class="font-medium text-sky-600 hover:text-sky-700">Ugmonk</a></p></div></section></div></div></div><footer class="mx-auto mt-32 w-full max-w-container px-4 sm:px-6 lg:px-8"><div class="border-t border-slate-900/5 py-10"><svg class="mx-auto h-5 w-auto text-slate-900" aria-hidden="true" viewBox="0 0 160 24" fill="none"><path d="M18.724 1.714c-4.538 0-7.376 2.286-8.51 6.857 1.702-2.285 3.687-3.143 5.957-2.57 1.296.325 2.22 1.271 3.245 2.318 1.668 1.706 3.6 3.681 7.819 3.681 4.539 0 7.376-2.286 8.51-6.857-1.701 2.286-3.687 3.143-5.957 2.571-1.294-.325-2.22-1.272-3.245-2.32-1.668-1.705-3.6-3.68-7.819-3.68zM10.214 12c-4.539 0-7.376 2.286-8.51 6.857 1.701-2.286 3.687-3.143 5.957-2.571 1.294.325 2.22 1.272 3.245 2.32 1.668 1.705 3.6 3.68 7.818 3.68 4.54 0 7.377-2.286 8.511-6.857-1.702 2.286-3.688 3.143-5.957 2.571-1.295-.326-2.22-1.272-3.245-2.32-1.669-1.705-3.6-3.68-7.82-3.68z" class="fill-sky-400"></path><path d="M51.285 9.531V6.857h-3.166v-3.6l-2.758.823v2.777h-2.348v2.674h2.348v6.172c0 3.343 1.686 4.526 5.924 4.011V17.22c-2.094.103-3.166.129-3.166-1.517V9.53h3.166zm12.087-2.674v1.826c-.97-1.337-2.476-2.16-4.468-2.16-3.472 0-6.357 2.931-6.357 6.763 0 3.805 2.885 6.763 6.357 6.763 1.992 0 3.498-.823 4.468-2.186v1.851h2.758V6.857h-2.758zM59.338 17.4c-2.297 0-4.034-1.723-4.034-4.114 0-2.392 1.736-4.115 4.034-4.115s4.034 1.723 4.034 4.115c0 2.391-1.736 4.114-4.034 4.114zM70.723 4.929c.97 0 1.762-.823 1.762-1.775 0-.977-.792-1.774-1.762-1.774s-1.762.797-1.762 1.774c0 .952.792 1.775 1.762 1.775zm-1.379 14.785h2.758V6.857h-2.758v12.857zm5.96 0h2.757V.943h-2.758v18.771zM95.969 6.857l-2.502 8.872-2.655-8.872h-2.63L85.5 15.73l-2.477-8.872h-2.91l4.008 12.857h2.707l2.68-8.665 2.656 8.665h2.706L98.88 6.857h-2.911zm6.32-1.928c.97 0 1.762-.823 1.762-1.775 0-.977-.792-1.774-1.762-1.774s-1.762.797-1.762 1.774c0 .952.792 1.775 1.762 1.775zm-1.379 14.785h2.758V6.857h-2.758v12.857zm12.674-13.191c-1.736 0-3.115.643-3.957 1.98V6.857h-2.758v12.857h2.758v-6.891c0-2.623 1.43-3.703 3.242-3.703 1.737 0 2.86 1.029 2.86 2.983v7.611h2.757V11.82c0-3.343-2.042-5.297-4.902-5.297zm17.982-4.809v6.969c-.971-1.337-2.477-2.16-4.468-2.16-3.473 0-6.358 2.931-6.358 6.763 0 3.805 2.885 6.763 6.358 6.763 1.991 0 3.497-.823 4.468-2.186v1.851h2.757v-18h-2.757zM127.532 17.4c-2.298 0-4.034-1.723-4.034-4.114 0-2.392 1.736-4.115 4.034-4.115 2.297 0 4.034 1.723 4.034 4.115 0 2.391-1.737 4.114-4.034 4.114z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M145.532 3.429h8.511c.902 0 1.768.36 2.407 1.004.638.643.997 1.515.997 2.424v8.572c0 .909-.359 1.781-.997 2.424a3.394 3.394 0 01-2.407 1.004h-8.511a3.39 3.39 0 01-2.407-1.004 3.438 3.438 0 01-.997-2.424V6.857c0-.91.358-1.781.997-2.424a3.39 3.39 0 012.407-1.004zm-5.106 3.428c0-1.364.538-2.672 1.495-3.636a5.09 5.09 0 013.611-1.507h8.511c1.354 0 2.653.542 3.61 1.507a5.16 5.16 0 011.496 3.636v8.572a5.16 5.16 0 01-1.496 3.636 5.086 5.086 0 01-3.61 1.506h-8.511a5.09 5.09 0 01-3.611-1.506 5.164 5.164 0 01-1.495-3.636V6.857zm10.907 6.251c0 1.812-1.359 2.916-3.193 2.916-1.823 0-3.182-1.104-3.182-2.916v-5.65h1.633v5.52c0 .815.429 1.427 1.549 1.427 1.12 0 1.549-.612 1.549-1.428v-5.52h1.644v5.652zm1.72 2.748V7.457h1.644v8.4h-1.644z" fill="currentColor"></path></svg><p class="mt-5 text-center text-sm leading-6 text-slate-500">© 2023 Tailwind Labs Inc. All rights reserved.</p><div class="mt-16 flex items-center justify-center space-x-4 text-sm font-semibold leading-6 text-slate-700"><a href="/privacy-policy">Privacy policy</a><div class="h-4 w-px bg-slate-500/20"></div><a href="/changelog">Changelog</a></div></div></footer></div>  </body>
</html>