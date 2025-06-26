<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function registerForm() {
    return view('auth.register');
}
 function register(Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed'
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);

    Auth::login($user);
    return redirect('/dashboard');
}

 function loginForm() {
    return view('auth.login');
}

function login(Request $request) {
  
    $credentials = $request->only('email', 'password');

    // if (Auth::attempt($credentials)) {
    //     return redirect('/dashboard');
    // }
    if (Auth::attempt($credentials)) {
   
    return redirect('/dashboard');
}


    return back()->withErrors(['email' => 'Invalid credentials']);
}

function logout() {
    Auth::logout();
    return redirect('/login');
}
}
