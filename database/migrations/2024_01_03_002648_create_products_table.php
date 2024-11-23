<?php

use Faker\Provider\Lorem;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->uuid("id_produk")->unique()->default(DB::raw('(UUID())'));
            $table->string("nama_produk");
            $table->unsignedBigInteger("category_id");
            $table->string("harga");
            $table->string("stok");
            $table->text("deskripsi");
            $table->float("amount_discount")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
