@extends('layouts.main')
@section('content')
    @if(session('success'))
        <div id="successAlert" class="fixed top-4 right-4 px-4 py-2 bg-green-500 text-white rounded-lg shadow-lg z-50">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div id="errorAlert" class="fixed top-4 right-4 px-4 py-2 bg-red-500 text-white rounded-lg shadow-lg z-50">
            {{ session('error') }}
        </div>
    @endif

    <div class="container mx-auto px-4 py-8">
        <div class="py-6 sm:py-12">
            <h1 class="text-2xl sm:text-4xl font-bold tracking-tight text-blue text-center">Manajemen Produk</h1>
        </div>

        <div class="bg-white rounded-lg border border-stroke shadow-default">
            <div class="hidden sm:flex items-center justify-between p-4">
                <div class="flex items-center">
                    <form action="{{ route('manage.product') }}" method="GET" class="flex items-center">
                        <input type="text" name="search" placeholder="Cari produk..." value="{{ request('search') }}"
                            class="px-4 py-2 border border-orange rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue">
                        <button type="submit" class="px-4 py-2 bg-blue text-white rounded-r-md hover:bg-opacity-90">
                            Cari
                        </button>
                    </form>
                    @if(request('search'))
                        <a href="{{ route('manage.product') }}" class="ml-2 text-blue hover:text-orange">Clear</a>
                    @endif
                </div>
                <a href="{{ route('product.create') }}"
                    class="px-3 py-2 bg-blue text-white rounded-md hover:bg-opacity-90">
                    Tambah Produk
                </a>
            </div>

            <div class="sm:hidden">
                @foreach ($products as $product)
                    <div class="p-4 border-b">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h5 class="font-medium text-blue">{{ $product->nama_produk }}</h5>
                                <p class="text-orange text-sm">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                            </div>
                            <div class="flex gap-3">
                                <a href="{{ route('product.edit', $product->id_produk) }}"
                                    class="text-blue hover:text-orange">Edit</a>
                                <form action="{{ route('product.delete', $product->id_produk) }}" method="POST"
                                    class="inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete(this.closest('form'))"
                                        class="text-blue hover:text-orange">Delete</button>
                                </form>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-y-2 text-sm">
                            <div>
                                <span class="text-gray-500">Kategori:</span>
                                <span class="text-blue ml-1">{{ $product->category->nama_kategori }}</span>
                            </div>
                            <div>
                                <span class="text-gray-500">Stock:</span>
                                <span class="text-blue ml-1">{{ $product->stok }}</span>
                            </div>
                            <div>
                                <span class="text-gray-500">Discount:</span>
                                <span class="text-blue ml-1">{{ $product->amount_discount }}%</span>
                            </div>
                            <div>
                                <span class="text-gray-500">Created:</span>
                                <span class="text-blue ml-1">{{ $product->created_at->format('d/m/Y') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="hidden sm:block overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-blue">
                            <th class="min-w-[220px] py-4 px-4 font-medium text-white text-left">
                                Nama Produk
                            </th>
                            <th class="min-w-[150px] py-4 px-4 font-medium text-white text-left">
                                Created Data
                            </th>
                            <th class="min-w-[120px] py-4 px-4 font-medium text-white text-left">
                                Kategori Produk
                            </th>
                            <th class="py-4 px-4 font-medium text-white text-left">
                                Stock
                            </th>
                            <th class="py-4 px-4 font-medium text-white text-left">
                                Discount
                            </th>
                            <th class="py-4 px-4 font-medium text-white text-left">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="border-b border-[#eee] py-5 px-4">
                                    <h5 class="font-medium text-blue">{{ $product->nama_produk }}</h5>
                                    <p class="text-sm text-orange">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4">
                                    <p class="text-blue">{{ $product->created_at->format('d/m/Y') }}</p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4">
                                    <p class="text-blue">{{ $product->category->nama_kategori }}</p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4">
                                    <p class="text-blue">{{ $product->stok }}</p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4">
                                    <p class="text-blue">{{ $product->amount_discount }}%</p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4">
                                    <div class="flex items-center space-x-3.5">
                                        <a href="{{ route('product.edit', $product->id_produk) }}"
                                            class="hover:text-orange text-blue">
                                            Edit
                                        </a>
                                        <form action="{{ route('product.delete', ['id' => $product->id_produk]) }}" method="POST"
                                            class="inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete(this.closest('form'))"
                                                class="hover:text-orange text-blue">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="p-4">
                <div class="sm:hidden">
                    {{ $products->onEachSide(0)->links("vendor.pagination.custom") }}
                </div>
                <div class="hidden sm:block">
                    {{ $products->onEachSide(2)->links("vendor.pagination.custom") }}
                </div>
            </div>
        </div>

        <div class="fixed bottom-0 left-0 right-0 sm:hidden bg-white border-t shadow-lg p-3">
            <div class="flex items-center gap-3 max-w-lg mx-auto">
                <form action="{{ route('manage.product') }}" method="GET" class="flex flex-1">
                    <input type="text" name="search" placeholder="Cari produk..." value="{{ request('search') }}"
                        class="flex-1 px-3 py-2 text-sm border border-orange rounded-l-md">
                    <button type="submit" class="px-3 py-2 bg-blue text-white rounded-r-md">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                </form>
                <a href="{{ route('product.create') }}" class="p-2 bg-blue text-white rounded-md">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="h-16 sm:h-0"></div>
    </div>

    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-25 items-center justify-center z-50 hidden">
        <div class="bg-white p-6 rounded-2xl max-w-md w-full m-4">
            <h3 class="text-lg font-medium leading-6 text-blue">
                Apakah anda yakin untuk menghapus produk ini?
            </h3>
            <div class="mt-2">
                <p class="text-sm text-gray-500">
                    Produk yang dihapus tidak akan muncul pada katalog
                </p>
            </div>
            <div class="mt-4">
                <button type="button" 
                        onclick="submitDelete()"
                        class="inline-flex justify-center rounded-md border border-transparent bg-blue px-4 py-2 text-sm font-medium text-white hover:bg-orange focus:outline-none focus-visible:ring-2 focus-visible:ring-blue focus-visible:ring-offset-2">
                    Ya
                </button>
                <button type="button" 
                        onclick="closeModal()"
                        class="inline-flex justify-center rounded-md border ml-3 border-transparent bg-blue px-4 py-2 text-sm font-medium text-white hover:bg-orange focus:outline-none focus-visible:ring-2 focus-visible:ring-blue focus-visible:ring-offset-2">
                    Tidak
                </button>
            </div>
        </div>
    </div>
    <script>
        // Handle alerts
        document.addEventListener('DOMContentLoaded', function() {
            const successAlert = document.getElementById('successAlert');
            const errorAlert = document.getElementById('errorAlert');
    
            if (successAlert) {
                setTimeout(() => {
                    successAlert.style.display = 'none';
                }, 3000);
            }
    
            if (errorAlert) {
                setTimeout(() => {
                    errorAlert.style.display = 'none';
                }, 3000);
            }
        });
    
        // Modal handling
        const modal = document.getElementById('deleteModal');
        let formToDelete = null;
    
        function confirmDelete(form) {
            formToDelete = form;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    
        function closeModal() {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            formToDelete = null;
        }
    
        function submitDelete() {
            if (formToDelete) {
                formToDelete.submit();
            }
            closeModal();
        }
    
        // Close modal when clicking outside
        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    
        // Close modal on escape key press
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });
    </script>
@endsection
