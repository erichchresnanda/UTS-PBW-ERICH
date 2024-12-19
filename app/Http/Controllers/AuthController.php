<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function login()
    {
        return view('auth.login');
    }

    // Memproses form login
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home'); // Redirect ke halaman home
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Logout pengguna
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    // Menampilkan halaman home
    public function home()
    {
        return view('home', ['user' => Auth::user()]);
    }
}
