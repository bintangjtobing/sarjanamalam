<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function validateLogin(Request $request)
    {
        $tokens = str_random(50);
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
            'status' => 'active',
        ])) {
            return redirect('/');
        }
        return back()->with('gagal', 'Otorisasi keanggotaan gagal atau silahkan cek kembali username atau password anda.');
    }
    public function logout($log)
    {
        Auth::logout();
        return redirect('/');
    }
}
