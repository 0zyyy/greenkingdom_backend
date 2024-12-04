<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\AuthController;
use Binafy\LaravelCart\Models\Cart;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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
Route::get('/', [ProductController::class, 'contohProduk'])->name('home');

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
Route::delete('/product/{id}', [ProductController::class, 'delete'])->name('product.delete');

// Cart Routes
Route::middleware(['auth'])->group(function () {
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'showCart'])->name('products.cart');
    Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart', [CartController::class, 'clear'])->name('cart.clear');
    Route::get('/checkout', [CartController::class, 'showCheckout'])->name('products.checkout');
    Route::post('/checkout', [CartController::class, 'checkout'])->name('products.checkout.store');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Order
    Route::get('/orders', [OrderController::class, 'show'])->name('orders.index');
    Route::get('/admin/orders', [OrderController::class, 'adminIndex'])->name('admin.orders.index');
    Route::patch('/admin/orders/{order}/status', [OrderController::class, 'updateStatus'])->name('admin.orders.update-status');
    Route::delete('/admin/orders/{order}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');
    // User routes
    Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');
    Route::post('/profile/avatar', [ProfileController::class, 'updateAvatar'])->name('profile.avatar.update');
});

