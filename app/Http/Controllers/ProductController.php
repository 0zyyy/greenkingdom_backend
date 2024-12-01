<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\QueryBuilder\QueryBuilder;
use App\Models\Category;
use Binafy\LaravelCart\Models\Cart;

class ProductController extends Controller
{
    public function getAll()
    {
        $products = Product::with(["category"])->get();
        return response()->json([
            'status' => true,
            'message' => 'Product Found',
            'total' => count($products),
            'data' => $products
        ], 200);
    }

    public function getById(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        if ($product == null) {
            return response()->json([
                'status' => false,
                'message' => 'Product Not Found',
                'data' => []
            ], 404);
        }
        $related = Product::where("category_id", $product->category_id)->where("id", "!=", $id)->inRandomOrder()->limit(4)->get();
        $productPrice = $product->harga;
        if ($product->amount_discount != 0) {
            $productPrice = $productPrice - ($productPrice * ($product->amount_discount / 100));
        }
        $product->discounted_price = $productPrice;
        return response()->json([
            'status' => true,
            'message' => 'Product Found',
            'data' => $product,
            'related' => $related
        ], 200);
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            "nama_produk" => "required",
            "harga" => "required",
            "category_id" => "required",
            "thumbnails.*" => "required|file|mimes:jpeg,png,jpg,webp|max:2048",
            "deskripsi" => "required",
            "stok" => "required",
        ], [
            "nama_produk.required" => "Nama produk tidak boleh kosong",
            "harga.required" => "Harga tidak boleh kosong",
            "category_id.required" => "Kategori tidak boleh kosong",
            "thumbnails.*.required" => "Gambar produk tidak boleh kosong",
            "deskripsi.required" => "Deskripsi tidak boleh kosong",
            "stok.required" => "Stok tidak boleh kosong"
        ]);

        try {
            $product = new Product();
            $product->id_produk = Str::orderedUuid();
            $product->nama_produk = $validated["nama_produk"];
            $product->harga = $validated["harga"];
            $product->category_id = $validated["category_id"];
            $product->stok = $validated["stok"];
            $product->deskripsi = $validated["deskripsi"];
            $product->save();

            if ($request->hasFile("thumbnails")) {
                $image = [];
                $i = 1;
                foreach ($request->file('thumbnails') as $file) {
                    $path = $file->store('products/images', 'public');
                    $image["thumbnails_" . $i] = asset('storage/' . $path);
                    $i++;
                }
                $product->image()->create([
                    "thumbnail_url" => $image["thumbnails_1"],
                    "image_path" => json_encode($image)
                ]);
            }

            return redirect()->route('manage.product')->with('success', 'Produk berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan produk: ' . $e->getMessage())->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "nama_produk" => "required",
            "harga" => "required",
            "category_id" => "required",
            "thumbnails.*" => "nullable|file|mimes:jpeg,png,jpg,webp|max:2048",
            "deskripsi" => "required",
            "stok" => "required"
        ], [
            "nama_produk.required" => "Nama produk tidak boleh kosong",
            "harga.required" => "Harga tidak boleh kosong",
            "category_id.required" => "Kategori tidak boleh kosong",
            "deskripsi.required" => "Deskripsi tidak boleh kosong",
            "stok.required" => "Stok tidak boleh kosong"
        ]);

        try {
            $product = Product::where("id_produk", $id)->firstOrFail();
            
            $product->nama_produk = $validated["nama_produk"];
            $product->harga = $validated["harga"];
            $product->category_id = $validated["category_id"];
            $product->stok = $validated["stok"];
            $product->deskripsi = $validated["deskripsi"];
            $product->amount_discount = $request->input("discount", 0);
            $product->save();

            if ($request->hasFile("thumbnails")) {
                $image = [];
                $i = 1;
                $foundImage = Image::where("product_id", $product->id)->first();
                
                foreach ($request->file('thumbnails') as $file) {
                    $path = $file->store('products/images', 'public');
                    $image["image_" . $i] = asset('storage/' . $path);
                    $i++;
                }

                if ($foundImage) {
                    // Delete old images
                    foreach (json_decode($foundImage->image_path) as $old) {
                        $path = explode("/", $old);
                        $path = end($path);
                        Storage::delete("public/products/images/" . $path);
                    }
                    
                    $foundImage->update([
                        "thumbnail_url" => $image["image_1"],
                        "image_path" => json_encode($image)
                    ]);
                } else {
                    $product->image()->create([
                        "thumbnail_url" => $image["image_1"],
                        "image_path" => json_encode($image)
                    ]);
                }
            }

            return redirect()->route('manage.product')->with('success', 'Produk berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui produk: ' . $e->getMessage())->withInput();
        }
    }

    public function delete($id)
    {
        try {
            $product = Product::where('id_produk', $id)->firstOrFail();
            // Delete images if they exist
            if ($product->image) {
                foreach (json_decode($product->image->image_path) as $imagePath) {
                    $path = explode("/", $imagePath);
                    $path = end($path);
                    Storage::delete("public/products/images/" . $path);
                }
                $product->image->delete();
            }
            
            $product->delete();
            return redirect()->route('manage.product')->with('success', 'Produk berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus produk: ' . $e->getMessage());
        }
    }

    public function filterBy(Request $request)
    {
        $perPage = null;
        if ($request->get("perPage") == null) {
            $perPage = 12;
        } else {
            $perPage = $request->get("perPage");
        }
        return Product::with(["category"])->paginate($perPage); // this is per page
    }

    public function nyobaReq(Request $request)
    {
        $perPage = $request->get("perPage");
        $products = QueryBuilder::for(Product::class)
            ->allowedSorts(["created_at"])
            ->allowedFilters(["category_id"])
            ->with(["category"])
            ->paginate($perPage);

        return response()->json($products, 200);
    }

    public function contohProduk()
    {
        $products = Product::limit(8)->get();
        return view("welcome", compact("products"));
    }

    public function catalog(Request $request)
    {
        $perPage = $request->get('show', 15); // Default to 15 items

        $products = QueryBuilder::for(Product::class)
            ->allowedSorts(['created_at', 'harga'])
            ->allowedFilters(['category_id'])
            ->with(['category', 'image'])
            ->paginate($perPage);

        $categories = Category::all();
        return view("products.catalog", compact("products", "categories"));
    }

    public function index(Request $request)
    {
        $query = Product::query();
        
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('nama_produk', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('harga', 'LIKE', "%{$searchTerm}%")
                  ->orWhereHas('category', function($q) use ($searchTerm) {
                      $q->where('nama_kategori', 'LIKE', "%{$searchTerm}%");
                  });
            });
        }
        $total = Cart::count();
        $products = $query->latest()
                         ->paginate(10);
                        //  ->withQueryString(); // This preserves the search query in pagination links
        
        return view('manage.product', [
            'products' => $products,
        ]);
    }
}
