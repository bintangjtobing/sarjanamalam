<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\messagesDB;
use App\UserMod;
use App\Thread;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SearchController extends Controller
{
    // Index page search
    public function index(Request $request)
    {
        // Menangkap data cari
        $get_search = $request->searchinput;

        // Ambil data  dari table threads
        $search = DB::table('threads')
            ->where('thread', 'like', "%" . $get_search . "%")
            ->select('threads.*')
            ->paginate(15);
        dd($search);
        // return view('homepage.results_search');
    }

    // CONTROLLER SEARCH ENGINE
    public function processcari(Request $request)
    {
        // Menangkap data cari
        $get_search = $request->searchinput;

        // Ambil data  dari table threads
        $search = DB::table('threads')
            ->where('thread', 'like', "%" . $get_search . "%")
            ->select('threads.*')
            ->paginate(15);

        dd($search);
    }
}
