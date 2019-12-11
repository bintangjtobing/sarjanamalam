<?php

namespace App\Http\Controllers;

use App\UserMod;
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
    public function deleteuser($id)
    {
        $user = UserMod::find($id);

        if ($user) {
            if ($user->delete()) {

                DB::statement('ALTER TABLE users AUTO_INCREMENT = ' . (count(UserMod::all()) + 1) . ';');

                return back()->with('sukses', 'Users has been successfully deleted!');
            }
        }
    }
    public function edituser($id)
    {
        $user  = \App\UserMod::find($id);
        return view('dashboard.user.add', ['user' => $user]);
    }
}
