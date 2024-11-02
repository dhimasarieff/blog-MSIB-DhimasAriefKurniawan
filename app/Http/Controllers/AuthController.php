<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Metode untuk mengelola login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('dashboard'); // Ganti 'dashboard' dengan rute yang sesuai
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Metode untuk mengelola logout
    public function logout()
    {
        Auth::logout();
        return redirect('/'); // Ganti '/' dengan rute yang sesuai setelah logout
    }

}
