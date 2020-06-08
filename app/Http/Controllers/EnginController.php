<?php

namespace App\Http\Controllers;

use App\Engin;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lastnews = DB::table('news')->orderBy('news.created_at','desc')->limit(3)->get();
        $lastposts = DB::table('posts')->orderBy('posts.created_at','desc')->limit(3)->get();
        $lastengins = DB::table('engins')->orderBy('engins.created_at','desc')->limit(3)->get();

        $engins = DB::table('engins')->orderBy('engins.created_at','desc')->paginate(6);
        return view('enginsindex',compact('engins','lastnews', 'lastposts','lastengins'));
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
        $engin = Engin::find($id);
        $lastnews = DB::table('news')->orderBy('news.created_at','desc')->limit(3)->get();
        $lastposts = DB::table('posts')->orderBy('posts.created_at','desc')->limit(3)->get();
        $lastengins = DB::table('engins')->orderBy('engins.created_at','desc')->limit(3)->get();
        return view('enginsshow',compact('engin','lastposts','lastnews','lastengins'));
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
