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
        return view('dashboard.home', ['usermg' => $usermg]);
    }
    // USER
    public function usermgmt()
    {
        $usermg = DB::table('users')
            ->select('users.*')
            ->orderBy('users.created_at', 'desc')
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
        return view('dashboard.user.edit', ['user' => $user]);
    }
    public function updateuser(Request $request, $id)
    {
        $user =  \App\UserMod::find($id);
        // $user->update($request->all());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->verified_password = $request->confirmation_password;
        $user->alamat = $request->address;
        $user->kota = $request->city;
        $user->provinsi = $request->state;
        $user->kodepos = $request->zip;
        $user->tanggallahir = $request->tanggallahir;
        $user->bulanlahir  = $request->bulanlahir;
        $user->tahunlahir = $request->tahunlahir;
        $user->role = $request->role;
        $user->jabatan = $request->jabatan;
        if ($request->hasFile('displaypic')) {
            $request->file('displaypic')->move(public_path('file/img/'), $request->file('displaypic')->getClientOriginalName());
            $user->displaypic = $request->file('displaypic')->getClientOriginalName();
        }
        $user->updated_by = auth()->user()->name;

        $user->save();
        return back()->with('sukses', 'Save successfully!');
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
081397423242