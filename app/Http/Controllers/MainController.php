<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {/*
        $news = DB::table('news')->orderBy('news.created_at','desc')->first();
    */
        $lastnews = DB::table('news')->orderBy('news.created_at','desc')->limit(3)->get();
        $lastposts = DB::table('posts')->orderBy('posts.created_at','desc')->limit(3)->get();
        $lastengins = DB::table('engins')->orderBy('engins.created_at','desc')->limit(3)->get();
        return view('main',compact('lastnews', 'lastposts','lastengins'));
    }


    public function search(Request $request)
    {
        $lastnews = DB::table('news')->orderBy('news.created_at','desc')->limit(3)->get();
        $lastposts = DB::table('posts')->orderBy('posts.created_at','desc')->limit(3)->get();
        $lastengins = DB::table('engins')->orderBy('engins.created_at','desc')->limit(3)->get();
        $news = DB::table('news')
            ->where('news_title', 'like', '%' . $request->search . '%')
            ->orWhere('news_short_title', 'like', '%' . $request->search . '%')
            ->orWhere('news_description', 'like', '%' . $request->search . '%')
            ->orderBy('news.created_at', 'desc')
            ->get();
        $posts = DB::table('posts')
            ->where('post_title', 'like', '%' . $request->search . '%')
            ->orWhere('post_short_title', 'like', '%' . $request->search . '%')
            ->orWhere('post_description', 'like', '%' . $request->search . '%')
            ->orderBy('posts.created_at', 'desc')
            ->get();
        $engins = DB::table('engins')
            ->where('engin_title', 'like', '%' . $request->search . '%')
            ->orWhere('engin_short_title', 'like', '%' . $request->search . '%')
            ->orWhere('engin_description', 'like', '%' . $request->search . '%')
            ->orderBy('engins.created_at', 'desc')
            ->get();
        return view('newsindex', compact('news', 'posts','engins','lastnews', 'lastposts', 'lastengins'));

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
