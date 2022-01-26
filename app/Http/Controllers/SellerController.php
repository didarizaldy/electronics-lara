<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index(User $user)
    {
        return view('products', [
            'headtag' => 'Seller',
            'products' => $user->products
        ]);
    }
}
