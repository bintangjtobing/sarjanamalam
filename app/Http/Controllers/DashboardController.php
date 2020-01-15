<?php

namespace App\Http\Controllers;

use App\UserMod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $usermg = DB::table('users')
            ->select('users.*')
            ->get();
        return view('authen.dash', ['usermg' => $usermg]);
    }
    // USER
    public function usermgmt()
    {
        $usermg = DB::table('users')
            ->select('users.*')
            ->orderBy('users.created_at', 'desc')
            ->get();
        return view('authen.user', ['usermg' => $usermg]);
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
        $userget = DB::table('users')
            ->where('users.id', '=', $id)
            ->join('provinces', 'users.provinsi', '=', 'provinces.province_id')
            ->select('provinces.*', 'users.*')
            ->get();
        $province = DB::table('provinces')
            ->select('provinces.*')
            ->get();
        return view('dashboard.user.edit', ['userget' => $userget, 'user' => $user, 'province' => $province]);
        // dd($userget);
    }
    public function updateuser(Request $request, $id)
    {
        $user =  \App\UserMod::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->verified_password = $request->password;
        $user->kota = $request->city;
        $user->provinsi = $request->state;
        $user->kodepos = $request->zip;
        $user->tanggallahir = $request->tanggallahir;
        $user->bulanlahir  = $request->bulanlahir;
        $user->tahunlahir = $request->tahunlahir;
        $user->role = $request->role;
        $user->jabatan = $request->jabatan;
        if ($request->hasFile('displaypic')) {
            $request->file('displaypic')->move(public_path('file/img/profilepic/'), $request->file('displaypic')->getClientOriginalName());
            $user->displaypic = $request->file('displaypic')->getClientOriginalName();
        }
        $user->updated_by = auth()->user()->name;

        $user->save();
        return back()->with('sukses', 'Save successfully!');
        // dd($request->all());
    }
    public function eventmgmt()
    {
        $eventL = DB::table('events')
            ->select('events.*')
            ->orderBy('events.created_at', 'desc')
            ->get();
        return view('dashboard.event.index', ['eventL' => $eventL]);
    }
    public function blog()
    {
        $blogList = DB::table('blog')
            ->select('blog.*')
            ->orderBy('blog.created_at', 'desc')
            ->get();
        return view('dashboard.blog.index', ['blogList' => $blogList]);
    }
}
