<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Thread;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_data = DB::table('category')
            ->select('category.*')
            ->get();
        $subcat_data = DB::table('sub_category')
            ->select('sub_category.*')
            ->get();
        $threadsdata = DB::table('threads')
            ->select('threads.*')
            ->orderBy('threads.created_at', 'DESC')
            ->paginate(15);
        $usersData = DB::table('users')
            ->select('users.*')
            ->get();
        $threadsActive = DB::table('threads')
            ->join('users', 'users.id', '=', 'threads.id')
            ->where('threads.created_by', '=', auth()->user()->name)
            ->select('threads.*', 'users.*')
            ->get();
        return view('forum.fill.home', ['category_data' => $category_data, 'subcat_data' => $subcat_data, 'threadsdata' => $threadsdata, 'usersData' => $usersData, 'threadsActive' => $threadsActive]);
    }
    public function addnewtopic()
    {
        $category_data = DB::table('category')
            ->join('sub_category', 'category.category_id', '=', 'sub_category.sub_category_id')
            ->select('category.*', 'sub_category.*')
            ->get();
        // $subcat_data = DB::table('sub_category')
        //     ->select('sub_category.*')
        //     ->get();
        return view('forum.fill.create_threads', ['category_data' => $category_data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifyadd(Request $request)
    {
        // $ip = trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com"));
        $threadsnew = new \App\Thread;
        $threadsnew->subject = $request->subject;
        $threadsnew->category_id = $request->category;
        $threadsnew->sub_category_id = '0';
        $threadsnew->users_id = auth()->user()->id;
        $threadsnew->thread = $request->threads;
        $threadsnew->logIp = $request->getClientIp();
        $threadsnew->created_by = auth()->user()->name;
        $threadsnew->updated_by = auth()->user()->name;
        $threadsnew->save();

        return back()->with('suksestambahdiskusi', 'Yes! Topik diskusi kamu sudah berhasil diterbitkan.');
    }
    public function detailsthreads($id)
    {
        $data_thread = DB::table('threads')
            ->where('threads.id', '=', $id)
            ->select('threads.*')
            ->get();
        $threadsdata = DB::table('threads')
            ->select('threads.*')
            ->orderBy('threads.created_at', 'DESC')
            ->paginate(15);
        $category_data = DB::table('category')
            ->select('category.*')
            ->get();
        $threadsActive = DB::table('threads')
            ->join('users', 'users.id', '=', 'threads.id')
            ->where('threads.created_by', '=', auth()->user()->name)
            ->select('threads.*', 'users.*')
            ->get();
        return view('forum.fill.details', ['data_thread' => $data_thread, 'category_data' => $category_data, 'threadsdata' => $threadsdata, 'threadsActive' => $threadsActive]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function deletethreads($id)
    {
        $data_thread = Thread::find($id);

        if ($data_thread) {
            if ($data_thread->delete()) {

                DB::statement('ALTER TABLE threads AUTO_INCREMENT = ' . (count(Thread::all()) + 1) . ';');

                return back()->with('suksestambahdiskusi', 'Topik pembahasan berhasil dihapus.');
            }
        }
    }
}
