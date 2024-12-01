<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'email' => 'admin@prayfinds.com',
            'username' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'phone' => '081234567890',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'email' => 'user@prayfinds.com',
            'username' => 'testuser',
            'first_name' => 'Test',
            'last_name' => 'User',
            'phone' => '089123153454',
            'password' => bcrypt("testuser"),
            'role' => 'user',
        ]);

        Category::create([
            'nama_kategori' => 'bags',
        ]);
        Category::create([
            'nama_kategori' => 'outfit',
        ]);
        Category::create([
            'nama_kategori' => 'decoration',
        ]);
        Category::create([
            'nama_kategori' => 'lamp',
        ]);
        Category::create([
            'nama_kategori' => 'lighting',
        ]);

        $productNames = [
            'Bamboo Toothbrush',
            'Reusable Water Bottle',
            'Organic Cotton Tote',
            'Metal Straw Set',
            'Beeswax Food Wrap',
            'Compost Bin',
            'Solar Power Bank',
            'Recycled Paper Notebook',
            'Biodegradable Phone Case',
            'Hemp Face Mask'
        ];

        $descriptions = [
            'Eco-friendly and sustainable choice for daily use',
            'Made from recycled materials',
            'Environmentally conscious product',
            'Reduces plastic waste',
            'Sustainable alternative to conventional products',
            'Perfect for an eco-friendly lifestyle',
            'Helps reduce your carbon footprint',
            'Natural and biodegradable materials',
            'Environmentally responsible choice',
            'Sustainable and reusable design'
        ];

        for ($i = 0; $i < 100; $i++) {
            $nameIndex = $i % count($productNames);
            $descIndex = $i % count($descriptions);
            
            Product::create([
                'nama_produk' => $productNames[$nameIndex] . ' - ' . ($i + 1),
                'deskripsi' => $descriptions[$descIndex],
                'harga' => rand(10000, 500000), // Random price between 10k and 500k
                'stok' => rand(10, 200),        // Random stock between 10 and 200
                'category_id' => rand(1, 3),    // Random category between 1 and 3
                'amount_discount' => rand(0, 30) // Random discount between 0% and 30%
            ]);
        }
    }
}
