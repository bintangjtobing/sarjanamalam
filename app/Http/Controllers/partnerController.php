<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class partnerController extends Controller
{
    public function index()
    {
        $data = \App\formData::all();
        return view('partner.rnhkbp', ['data' => $data]);
    }
    public function submitforms(Request $request)
    {
        $forms = new \App\formData;
        $forms->nama_lengkap = $request->nama_lengkap;
        $forms->tanggal_lahir  = $request->tanggal_lahir;
        $forms->tempat_lahir = $request->tempat_lahir;
        $forms->keanggotaan = $request->keanggotaan;
        $forms->sektor  = $request->sektor;
        $forms->nohp = $request->nohp;
        $forms->alamat = $request->alamat;
        $forms->email = $request->email;
        $forms->instagram = 'https://instagram.com/' . $request->instagram;
        $forms->device = $request->header('User-Agent');
        $forms->logIP = $request->getClientIp();
        $forms->status_formulir = $request->status_formulir;

        $forms->save();
        return view('partner.formdone');
    }
}
