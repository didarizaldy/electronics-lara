<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' Kategori : ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' Oleh : ' . $user->name;
        }

        return view('products', [
            "headtag" => "Daftar Produk" . $title,
            // "products" => Product::all()
            "products" => Product::latest()->filter(request(['search', 'category', 'user']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            "headtag" => "Single Product",
            "product" => $product
        ]);
    }
}
