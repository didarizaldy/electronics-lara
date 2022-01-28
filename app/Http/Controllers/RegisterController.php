<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
	public function index()
	{
		return view('register.index', [
			'headtag' => 'Register'
		]);
	}

	public function store(Request $request)
	{
		$validatedData = $request->validate([
			'name' => 'required|max:50',
			'username' => ['required', 'min:4', 'max:12', 'unique:user'],
			'email' => 'required|email:rfc,dns|max:20|unique:users',
			'password' => 'required|min:6|max:14'
		]);

		User::create($validatedData);
	}
}
