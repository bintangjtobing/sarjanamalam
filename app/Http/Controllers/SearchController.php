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
    // Search biasa
    // public function processcari(Request $request)
    // {
    //     // Menangkap data cari
    //     $get_search = $request->get_value;

    //     // Ambil data  dari table threads
    //     $search = DB::table('threads')
    //         ->where('thread', 'like', "%" . $get_search . "%")
    //         ->orWhere('subject', 'like', "%" . $get_search . "%")
    //         ->select('threads.*')
    //         ->paginate(15);
    //     $now = Carbon::now();
    //     $created_at = Carbon::parse($search['created_at']);
    //     $updated_at = Carbon::parse($search['updated_at']);

    //     $diffHuman = $created_at->diffForHumans($now);
    //     $diffHumanU = $updated_at->diffForHumans($now);

    //     $ipGet = \Request::ip();
    //     // $position = \Location::get($ipGet);
    //     return view('homepage.results_search', ['search' => $search, 'get_search' => $get_search, 'created_at' => $created_at, 'ipGet' => $ipGet]);
    //     // dd($get_search);
    // }

    // Search on ajax
    public function processcari(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $get_search = $request->input('query');
            if ($get_search != '') {
                $search = DB::table('threads')
                    ->where('thread', 'like', "%" . $get_search . "%")
                    ->orWhere('subject', 'like', "%" . $get_search . "%")
                    ->orderBy('threads.view_count', 'desc')
                    ->select('threads.*')
                    ->get();
            } else {
                $search = DB::table('threads')
                    ->orderBy('threads.view_count', 'DESC')
                    ->limit(3)
                    ->get();
            }
            $total_row =  $search->count();
            if ($total_row > 0) {
                foreach ($search as $data) {
                    $output .= '
                        <tr>
                            <td>' . '<div class="text-overflow"><a href="#">' . str_limit(strip_tags($data->thread), $limit = 75) . '</a></div>' . '</td>
                        </tr>
                    ';
                }
            } else {
                $output .= '
                        <tr>
                            <td align="center" colspan="2">No data found</td>
                        </tr>
                    ';
            }
            $search = array(
                'table_data' => $output,
                'total_data' => $total_row,
                "request" => $request->all()
            );
            echo json_encode($search);
        }
    }
}
