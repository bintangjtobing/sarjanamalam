<?php

namespace App\Http\Controllers;

use App\Mail\resetPasswordUser;
use App\UserMod;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\successRegisteredUser;
use App\socialprovider;
use Carbon\Traits\Timestamp;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

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
        $choosegender = $request->gender;
        $data_member->gender = $choosegender;
        if ($choosegender == 'L')
            $data_member->displaypic  =  'male_zbindd.png';
        else
            $data_member->displaypic  =  'female_bqreki.png';
        $data_member->role = 'user';
        $data_member->jabatan = 'user';
        $data_member->verified = '0';
        $data_member->website = '';
        $data_member->facebook = '';
        $data_member->instagram = '';
        $data_member->twitter = '';
        $data_member->birthday = $request->datebirthday;
        $data_member->status = 'inactive';
        $data_member->password = Hash::make($request->password);
        $data_member->verified_password = $request->ver_password;
        $data_member->remember_token = Str::random(50);
        $data_member->created_by = $request->header('User-Agent');;
        $data_member->updated_by = 'guest';
        $data_member->save();
        \Mail::to($data_member->email)->send(new successRegisteredUser($data_member));
        return back()->with('sukses', 'Berhasil! Verifikasikan email yang telah kami kirimkan ke pesan masuk email kamu. Jika tidak ada, coba periksa di folder spam. Terima kasih.');
        // dd($data_member);
    }
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect('/');
        }
        // check  if we have a logged providers
        $socialProvider = socialprovider::where('provider_id', $socialProvider->getId())->first();
        if (!$socialProvider) {
            // create new  user & provider
            $user = UserMod::firstOrCreate(
                ['email' => $socialUser->getEmail()],
                ['name' => $socialUser->getName()],
                ['username' => $socialUser->getName()]
            );
            $user->socialProvider()->create(
                ['provider_id' => $socialUser->getId(), 'provider' => $provider]
            );
        } else {
            $user = $socialProvider->user;

            auth()->login($user);

            return redirect('/');
        }
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
    public function getAcc(Request $request, $enc_id)
    {
        $member = base64_decode($enc_id);
        $data_member = \App\UserMod::find($member);
        dd($data_member);
    }
    public function resetAccount(Request $request)
    {
        $getData = $request->username;
        $dataUser = DB::table('users')
            ->where('users.username', '=', $request->username)
            ->select('users.*')
            ->get();
        if (count($dataUser) == 0) {
            return redirect()->back()->with('gagal', 'Username tidak dapat ditemukan. Coba ulang ketik username anda dengan benar.');
        } else {
            \Mail::to(DB::table('users')->where('users.username', '=', $request->username)->select('users.email'))->send(new resetPasswordUser($dataUser));
            return back()->with('sukses');
        }
    }
}
