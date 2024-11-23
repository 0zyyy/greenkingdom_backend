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

    <div class="flex justify-center">
        <div class="max-w-3xl px-4 text-center sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="py-24">
                <h1 class="text-4xl font-bold tracking-tight text-blue">Manajemen Produk</h1>
            </div>
            <div class="rounded-lg border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default sm:px-7.5 xl:pb-1">
                <div class="flex items-center justify-between my-3">
                    <div class="flex items-center">
                        <form action="{{ route('manage.product') }}" method="GET" class="flex items-center">
                            <input type="text" 
                                   name="search" 
                                   placeholder="Cari produk..." 
                                   value="{{ request('search') }}"
                                   class="px-4 py-2 border border-orange rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue focus:border-blue"
                            >
                            <button type="submit" 
                                    class="px-4 py-2 bg-blue text-white rounded-r-md hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue">
                                Cari
                            </button>
                        </form>
                        @if(request('search'))
                            <a href="{{ route('manage.product') }}" 
                               class="ml-2 text-blue hover:text-orange">
                                Clear
                            </a>
                        @endif
                    </div>
                    <a href="{{ route('product.create') }}"
                        class="px-3 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue">
                        Tambah Produk
                    </a>
                </div>
                <div class="max-w-full overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-blue">
                                <th class="min-w-[220px] py-4 px-4 font-medium text-white">
                                    Nama Produk
                                </th>
                                <th class="min-w-[150px] py-4 px-4 font-medium text-white">
                                    Created Data
                                </th>
                                <th class="min-w-[120px] py-4 px-4 font-medium text-white">
                                    Kategori Produk
                                </th>
                                <th class="py-4 px-4 font-medium text-white">
                                    Stock
                                </th>
                                <th class="py-4 px-4 font-medium text-white">
                                    Discount
                                </th>
                                <th class="py-4 px-4 font-medium text-white">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <h5 class="font-medium text-blue">{{ $product->nama_produk }}</h5>
                                        <p class="text-sm text-orange">{{ number_format($product->harga, 0, ',', '.') }}</p>
                                    </td>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <p class="text-blue">{{ $product->created_at }}</p>
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
                                            <a href="{{ route('product.show', $product->id_produk) }}"
                                                class="hover:text-orange text-blue">
                                                View
                                            </a>
                                            <a href="{{ route('product.edit', $product->id_produk) }}"
                                                class="hover:text-orange text-blue">
                                                Edit
                                            </a>
                                            <form action="{{ route('product.delete', $product->id_produk) }}" method="POST"
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
                <div class="mb-10">
                    {{ $products->links("vendor.pagination.custom") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
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
@endsection

@push('scripts')
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
@endpush
