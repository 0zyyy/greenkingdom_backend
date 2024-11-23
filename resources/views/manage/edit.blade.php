@extends('layouts.main')

@section('content')
<div>
    <div class="mx-auto max-w-3xl px-4 text-center sm:px-6 lg:max-w-7xl lg:px-8 mb-8">
        <div class="py-24">
            <h1 class="text-4xl font-bold tracking-tight text-blue">Edit Produk</h1>
        </div>
        <div class="rounded-lg border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default sm:px-7.5 xl:pb-1">
            <form action="{{ route('product.update', $product->id_produk) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div id="nama_produk">
                    <label for="nama_produk" class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Nama
                        produk</label>
                    <input id="nama-produk" type="text" name="nama_produk" value="{{ old('nama_produk', $product->nama_produk) }}"
                        class="block w-full py-3 pl-5 text-orange mt-1 border border-orange rounded-md shadow-sm focus:ring-blue focus:border-blue sm:text-sm" />
                </div>

                <div id="harga_produk">
                    <label for="harga_produk" class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Harga
                        produk</label>
                    <input id="harga_produk" name="harga" type="number" value="{{ old('harga', $product->harga) }}"
                        class="block w-full py-3 pl-5 mt-1 border border-orange rounded-md shadow-sm focus:ring-blue focus:border-blue sm:text-sm" />
                </div>

                <div id="kategori">
                    <label for="category_id" class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Kategori
                        Produk</label>
                    <select name="category_id" id="category_id"
                        class="block w-full py-3 pl-5 mt-1 border border-orange rounded-md shadow-sm focus:ring-blue focus:border-blue sm:text-sm">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div id="deskripsi">
                    <label for="deskripsi"
                        class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi"
                        class="textarea-bordered border border-orange rounded-md textarea-md block w-full py-3 pl-5 mt-1">{{ old('deskripsi', $product->deskripsi) }}</textarea>
                </div>

                <div id="stock">
                    <label for="stock" class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Stock
                        Produk</label>
                    <input id="stock" type="number" name="stok" value="{{ old('stok', $product->stok) }}"
                        class="block w-full py-3 pl-5 mt-1 border border-orange rounded-md shadow-sm focus:ring-blue focus:border-blue sm:text-sm" />
                </div>

                <div id="discount">
                    <label for="discount" class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Discount (%)</label>
                    <input id="discount" type="number" name="amount_discount" value="{{ old('amount_discount', $product->amount_discount) }}"
                        class="block w-full py-3 pl-5 mt-1 border border-orange rounded-md shadow-sm focus:ring-blue focus:border-blue sm:text-sm" />
                </div>

                <div id="product_photo">
                    <label class="block mb-3 font-semibold text-blue text-md mt-4 text-left">Gambar produk</label>
                    
                    <!-- Show current images -->
                    @if($product->thumbnails)
                    <div class="grid grid-cols-3 gap-4 mb-4">
                        @foreach(json_decode($product->thumbnails) as $thumbnail)
                        <div class="relative">
                            <img src="{{ asset('storage/' . $thumbnail) }}" alt="Product thumbnail" class="w-full h-32 object-cover rounded">
                        </div>
                        @endforeach
                    </div>
                    @endif
                    
                    <div class="image-upload-container">
                        <input type="file" name="thumbnails[]" multiple
                            class="block w-full py-3 pl-5 mt-1 border border-orange rounded-md shadow-sm focus:ring-blue focus:border-blue sm:text-sm">
                        <p class="text-sm text-gray-500 mt-1">Upload new images to replace the current ones</p>
                    </div>
                </div>

                <button type="submit" class="btn btn-blue mt-4 flex items-center mb-4" id="update-produk">
                    <p class="font-medium text-white justify-center">Update Produk</p>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form validation
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            const requiredFields = ['nama_produk', 'harga', 'stok', 'deskripsi', 'category_id'];

            for (const field of requiredFields) {
                if (!form[field].value) {
                    e.preventDefault();
                    alert('Mohon isi semua field yang diperlukan');
                    return;
                }
            }
        });
    });
</script>
@endpush 