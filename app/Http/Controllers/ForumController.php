<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('forum.fill.home', ['category_data' => $category_data, 'subcat_data' => $subcat_data]);
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
    public function create()
    {
        //
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
    public function destroy(Thread $thread)
    {
        //
    }
}
