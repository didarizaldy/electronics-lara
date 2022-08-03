<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index(User $user)
    {
        return view('products', [
            'headtag' => "$user->name : Produk",
            'products' => $user->products->load('category', 'user')
        ]);
    }
}
