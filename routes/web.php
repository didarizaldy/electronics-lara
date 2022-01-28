<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SellerController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "headtag" => "Electronics - A Better Life With Electronics"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "headtag" => "Electronics - Tentang Kami",
        "name" => "Electronics",
        "title" => "Kemudahan Membuatmu Merasakan Kehidupan Yang Lebih Baik",
        "body" => "Kami berkomitmen untuk menciptakan hidup dan dunia yang lebih baik, serta berkontribusi untuk terus mengembangkan masyarakat dan kebahagiaan manusia di seluruh dunia."
    ]);
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{product:slug}', [ProductController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

// Route::get('/seller/{user:username}', [SellerController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
