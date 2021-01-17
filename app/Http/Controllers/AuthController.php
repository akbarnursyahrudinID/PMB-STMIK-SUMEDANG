<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/home')->with('loginsukses', 'berhasil');
        }
        return redirect('/login')->with('gagal', 'gagal masuk');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
