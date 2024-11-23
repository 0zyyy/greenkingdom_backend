<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post("/register", [App\Http\Controllers\AuthController::class, "register"]);
Route::post("/login", [App\Http\Controllers\AuthController::class, "login"])->name("login");

Route::middleware("auth:api")->group(function () {
    Route::get("/user", [App\Http\Controllers\AuthController::class, "user"]);
    Route::post("/logout", [App\Http\Controllers\AuthController::class, "logout"]);
    Route::post("/products", [App\Http\Controllers\ProductController::class, "create"]);
    Route::delete("/products/{id}", [App\Http\Controllers\ProductController::class, "delete"]);
    Route::put("/products/{id}", [App\Http\Controllers\ProductController::class, "update"]);
});

Route::get("/products/{id}", [App\Http\Controllers\ProductController::class, "getById"]);
Route::get("/products", [App\Http\Controllers\ProductController::class, "getAll"]);
Route::post("/upload", [App\Http\Controllers\UploadController::class, "store"]);
Route::get("/product/filter", [App\Http\Controllers\ProductController::class, "filterBy"]);
Route::get("/product-example", [App\Http\Controllers\ProductController::class, "contohProduk"]);
Route::get("/nyoba", [App\Http\Controllers\ProductController::class, "nyobaReq"]);
