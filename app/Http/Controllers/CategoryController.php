<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'headtag' => 'Produk Kategori',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('category', [
            'headtag' => $category->name,
            'products' => $category->products,
            'category' => $category->name
        ]);
    }
}
