<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            "headtag" => "Daftar Produk",
            // "products" => Product::all()
            "products" => Product::latest()->get()
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
