<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companyController extends Controller
{
    public function about()
    {
        return view('homepage.company.tentang');
    }
    public function blog()
    {
        return view('homepage.company.blog');
    }
}
