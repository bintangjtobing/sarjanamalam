<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
// use Stevebauman\Location\Location;

class SearchController extends Controller
{
    // Index page search
    public function processcari(Request $request)
    {
        // Menangkap data cari
        $get_search = $request->get_value;

        // Ambil data  dari table threads
        $search = DB::table('threads')
            ->where('thread', 'like', "%" . $get_search . "%")
            ->orWhere('subject', 'like', "%" . $get_search . "%")
            ->select('threads.*')
            ->paginate(15);
        $now = Carbon::now();
        $created_at = Carbon::parse($search['created_at']);
        $updated_at = Carbon::parse($search['updated_at']);

        $diffHuman = $created_at->diffForHumans($now);
        $diffHumanU = $updated_at->diffForHumans($now);

        $ipGet = \Request::ip();
        // $position = \Location::get($ipGet);
        return view('homepage.results_search', ['search' => $search, 'get_search' => $get_search, 'created_at' => $created_at, 'ipGet' => $ipGet]);
        // dd($search);
    }
}
