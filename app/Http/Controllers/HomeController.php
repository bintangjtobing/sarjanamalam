<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage.landingpage');
    }
    public function about()
    {
        return view('homepage.about');
    }
    public function help()
    {
        return view('homepage.help');
    }
    public function private()
    {
        return view('homepage.private');
    }
    public function feedback()
    {
        return view('homepage.feedback');
    }
    public function howsearch()
    {
        return view('homepage.howsearch');
    }
}
