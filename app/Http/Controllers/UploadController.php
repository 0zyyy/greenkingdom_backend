<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Siswa;
use Exception;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        // catch exception
        try {
            $validated = $request->validate(["file-json" => "required|file"]);
            if ($validated) {
                $file = $request->file("file-json");
                // read json file
                $json = file_get_contents($file);
                // decode json
                $json_data = json_decode($json, true);
                // insert to database
                for ($i = 0; $i < count($json_data[0]["data"]["ace_search_product_v4"]["data"]["products"]); $i++) {
                    $product = new Product();
                    $product->id_produk = Str::orderedUuid();
                    $product->nama_produk = $json_data[0]["data"]["ace_search_product_v4"]["data"]["products"][$i]["name"];
                    $product->harga = (int)preg_replace("/[^0-9]/","",explode("Rp", $json_data[0]["data"]["ace_search_product_v4"]["data"]["products"][$i]["price"])[1]);
                    $product->deskripsi = Lorem::text(100);
                    $kategori = explode("/", $json_data[0]["data"]["ace_search_product_v4"]["data"]["products"][$i]["categoryBreadcrumb"]);
                    if (str_contains($json_data[0]["data"]["ace_search_product_v4"]["data"]["products"][$i]["categoryBreadcrumb"], "jilbab")) {
                        echo "Masuk Jilbab";
                        $kategori = "jilbab";
                    } else {
                        echo "Gamasuk";
                        $kategori = explode('-',$kategori[2])[0];
                    }
                    $product->category_id = Category::where("nama_kategori","LIKE", '%'.$kategori.'%')->first()->id;
                    $product->stok = random_int(1, 100);
                    $product->save();

                    $product->image()->create([
                        "thumbnail_url" => $json_data[0]["data"]["ace_search_product_v4"]["data"]["products"][$i]["imageUrl"],
                        "image_path" => json_encode(["image_1" => $json_data[0]["data"]["ace_search_product_v4"]["data"]["products"][$i]["imageUrl"]])
                    ]);
                }
                return response()->json([
                    'status' => true,
                    'message' => 'Berhasil Upload'
                ], 200);
            }
        } catch (Exception $e) {
            return dd($e->getMessage());
        }
        return response()->json([
            'status' => false,
            'message' => 'Gagal Upload'
        ], 404);
    }
}
