<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function validateLogin(Request $request)
    {
        $tokens = Str::random(50);
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
            'status' => 'active',
        ])) {
            $csrf_token = bin2hex(openssl_random_pseudo_bytes(64));
            return redirect('/forum/' . $csrf_token);
        }
        return back()->with('gagal', 'Otorisasi keanggotaan gagal atau silahkan cek kembali username atau password anda.');
    }
    public function logout($log)
    {
        Auth::logout();
        $tokens = bin2hex(openssl_random_pseudo_bytes(64));
        return redirect('/signin/' . $tokens);
    }
}
