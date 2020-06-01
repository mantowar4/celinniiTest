<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->search) {
            $news = DB::table('news')
                ->where('news_title','like','%'.$request->search.'%')
                ->orWhere('news_short_title','like','%'.$request->search.'%')
                ->orWhere('news_description','like','%'.$request->search.'%')
                ->orderBy('news.created_at','desc')
                ->get();
            return view('News.index',compact('news'));
        }
        $news = DB::table('news')->orderBy('news.created_at','desc')->paginate(6);
        $lastnews = DB::table('news')->orderBy('news.created_at','desc')->limit(3)->get();
        $lastposts = DB::table('posts')->orderBy('posts.created_at','desc')->limit(3)->get();
        return view('News.index',compact('news','lastnews', 'lastposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main');
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
        $new = News::find($id);
        $lastnews = DB::table('news')->orderBy('news.created_at','desc')->limit(3)->get();
        $lastposts = DB::table('posts')->orderBy('posts.created_at','desc')->limit(3)->get();
        return view('News.show',compact('new','lastposts','lastnews'));
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
