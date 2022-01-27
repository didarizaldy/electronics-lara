<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest();

        if (request('search')) {
            $products->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '&' . request('search') . '%');
        }

        return view('products', [
            "headtag" => "Daftar Produk",
            // "products" => Product::all()
            "products" => $products->get()
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
