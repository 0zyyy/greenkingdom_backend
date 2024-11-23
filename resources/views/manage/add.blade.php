@extends('layouts.main')

@section('content')
<div>
<div class="mx-auto max-w-3xl px-4 text-center sm:px-6 lg:max-w-7xl lg:px-8 mb-8">
    <div class="py-24">
        <h1 class="text-4xl font-bold tracking-tight text-blue">Tambah Produk</h1>
    </div>
    <div class="rounded-lg border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default sm:px-7.5 xl:pb-1">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="nama_produk">
                <label for="nama_produk" class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Nama
                    produk</label>
                <input id="nama-produk" type="text" name="nama_produk" value="{{ old('nama_produk') }}"
                    class="block w-full py-3 pl-5 text-orange mt-1 border border-orange rounded-md shadow-sm focus:ring-blue focus:border-blue sm:text-sm" />
            </div>

            <div id="harga_produk">
                <label for="harga_produk" class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Harga
                    produk</label>
                <input id="harga_produk" name="harga" type="number" value="{{ old('harga') }}"
                    class="block w-full py-3 pl-5 mt-1 border border-orange rounded-md shadow-sm focus:ring-blue focus:border-blue sm:text-sm" />
            </div>

            <div id="kategori">
                <label for="category_id" class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Kategori
                    Produk</label>
                <select name="category_id" id="category_id"
                    class="block w-full py-3 pl-5 mt-1 border border-orange rounded-md shadow-sm focus:ring-blue focus:border-blue sm:text-sm">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>

            <div id="deskripsi">
                <label for="deskripsi"
                    class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi"
                    class="textarea-bordered border border-orange rounded-md textarea-md block w-full py-3 pl-5 mt-1">{{ old('deskripsi') }}</textarea>
            </div>

            <div id="stock">
                <label for="stock" class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Stock
                    Produk</label>
                <input id="stock" type="number" name="stok" value="{{ old('stok') }}"
                    class="block w-full py-3 pl-5 mt-1 border border-orange rounded-md shadow-sm focus:ring-blue focus:border-blue sm:text-sm" />
            </div>

            <div id="product_photo">
                <label class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Gambar produk</label>
                <div class="image-upload-container">
                    <input type="file" name="thumbnails[]"
                        class="block w-full py-3 pl-5 mt-1 border border-orange rounded-md shadow-sm focus:ring-blue focus:border-blue sm:text-sm">
                </div>
            </div>

            <button type="submit" class="btn btn-blue mt-4 flex items-center mb-4" id="tambah-produk">
                <p class="font-medium text-white justify-center">Tambah Produk</p>
            </button>
        </form>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        // Add any necessary JavaScript here
        document.addEventListener('DOMContentLoaded', function() {
            // Form validation
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                const requiredFields = ['nama_produk', 'harga', 'stok', 'deskripsi', 'category_id'];
                const thumbnails = document.querySelector('input[name="thumbnails[]"]');

                for (const field of requiredFields) {
                    if (!form[field].value) {
                        e.preventDefault();
                        alert('Mohon isi semua field');
                        return;
                    }
                }

                if (!thumbnails.files.length) {
                    e.preventDefault();
                    alert('Mohon upload minimal satu gambar');
                    return;
                }
            });
        });
    </script>
@endpush
