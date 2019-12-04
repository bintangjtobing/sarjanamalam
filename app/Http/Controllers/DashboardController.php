<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $usermg = DB::table('users')
            ->select('users.*')
            ->get();
        return view('dashboard.home', ['usermg' => $usermg]);
    }
    // USER
    public function usermgmt()
    {
        $usermg = DB::table('users')
            ->select('users.*')
            ->get();
        return view('dashboard.user.index', ['usermg' => $usermg]);
    }
}
