<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    // Index page search
    public function processcari(Request $request)
    {
        // Menangkap data cari
        $get_search = $request->searchinput;

        // Ambil data  dari table threads
        $search = DB::table('threads')
            ->where('thread', 'like', "%" . $get_search . "%")
            ->select('threads.*')
            ->paginate(15);
        return view('homepage.results_search', ['search' => $search]);
        // dd($search);
    }
}
