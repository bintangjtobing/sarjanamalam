<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profileController extends Controller
{
    public function index()
    {
        $data_users = DB::table('users')
            ->select('users.*')
            ->get();
        return view('profile.index', ['data_users' => $data_users]);
    }
}
