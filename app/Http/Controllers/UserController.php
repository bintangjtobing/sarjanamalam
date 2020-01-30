<?php

namespace App\Http\Controllers;

use App\UserMod;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\successRegisteredUser;

class UserController extends Controller
{
    public function create_account(Request $request)
    {
        $data_member = new \App\UserMod;
        $data_member->name = $request->nama_lengkap;
        $data_member->username = $request->username;
        $data_member->email = $request->email;
        $data_member->role = 'user';
        $data_member->jabatan = 'user';
        $data_member->status = 'inactive';
        $data_member->password = Hash::make($request->password);
        $data_member->verified_password = $request->ver_password;
        $data_member->remember_token = str_random(50);
        $data_member->created_by = 'guest';
        $data_member->updated_by = 'guest';
        $data_member->save();


        \Mail::to($data_member->email)->send(new successRegisteredUser($data_member));

        return back()->with('sukses', 'Tinggal selangkah lagi, kamu upload 1 berita pertama kamu. Jika menarik, berita kamu bisa langsung diangkat di Instagram milik sarjanamalam loh.');
    }
    public function verification(Request $request, $id)
    {

        $data_member = \App\UserMod::find($id);
        $data_member->status = 'active';
        $data_member->save();
        return redirect('/signin')->with('sukses', 'Berhasil mem-verifikasi email. Cobalah masuk ke forum dan cobalah pengalaman baru.');
    }
}
