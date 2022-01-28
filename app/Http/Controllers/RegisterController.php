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
			'username' => ['required', 'min:4', 'max:15', 'unique:users'],
			'email' => 'required|email:dns|max:30|unique:users',
			'password' => 'required|min:6|max:14'
		]);

		$validatedData['password'] = bcrypt($validatedData['password']);

		User::create($validatedData);

		$request->session()->flash('success', 'Registrasi Berhasil');

		return redirect('/login');
	}
}
