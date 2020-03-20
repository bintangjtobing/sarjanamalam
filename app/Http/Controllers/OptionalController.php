<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptionalController extends Controller
{
    public function index()
    {
        return view('info.sehat');
    }
}
