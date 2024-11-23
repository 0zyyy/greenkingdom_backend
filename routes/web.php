<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\AuthController;
use Binafy\LaravelCart\Models\Cart;
use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Products
Route::get('/products', [ProductController::class, 'catalog'])->name('catalog');
Route::get('/products/cart', function(){
    return view('products.cart');
})->name('products.cart');
Route::get('/products/checkout', function(){
    return view('products.checkout');
})->name('products.checkout');

// Manage
Route::get('/manage', [ProductController::class, 'index'])->name('manage.product');

Route::get('/products/{id}', [ProductController::class, 'detail'])->name(name: 'product.show');
Route::get('/product/create', function(){
    $categories = Category::all();
    return view('manage.add', compact('categories'));
})->name('product.create');

Route::get('/product/edit/{id}', function($id){
    $product = Product::where('id_produk', $id)->first();
    $categories = Category::all();
    return view('manage.edit', compact('product', 'categories'));
})->name('product.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name(name: 'product.update');

Route::post('/product', [ProductController::class, 'create'])->name('product.store');
Route::delete('/product', [ProductController::class, 'delete'])->name('product.delete');

// Cart Routes
Route::middleware(['auth'])->group(function () {
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'showCart'])->name('products.cart');
    Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart', [CartController::class, 'clear'])->name('cart.clear');
});