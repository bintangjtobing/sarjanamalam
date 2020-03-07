<?php

namespace App\Http\Controllers;

use App\UserMod;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\successRegisteredUser;
use Carbon\Traits\Timestamp;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    public function create_account(Request $request)
    {
        // VALIDATING INPUTS
        $this->validate($request, [
            'username' => 'required|unique:users|min:5|regex:/^\S*$/u',
            'email' => 'required|unique:users|email',
        ]);

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
        return back()->with('sukses', 'Berhasil! Kami sudah mengirimkan email verifikasi ke email kamu. Harap diverifikasikan agar akun kamu aktif. Terima kasih.');
    }
    public function verification(Request $request, $enc_id)
    {
        $member = base64_decode($enc_id);
        $data_member = \App\UserMod::find($member);
        $datetime = date('d M Y h:m:s');
        $data_member->status = 'active';
        $data_member->email_verified_at = $datetime;
        $data_member->updated_by = $request->getClientIp();
        $data_member->save();
        return view('homepage.verificationsuccess');
    }
}
