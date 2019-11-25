<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function validateLogin(Request $request)
    {
        $tokens = str_random(50);
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/home');
        }
        return back()->with('gagal', 'Otorisasi member gagal. Silahkan cek kembali username atau password anda.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
