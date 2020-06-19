<?php

namespace App\Http\Controllers;

use App\Engin;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        $lastnews = DB::table('news')->orderBy('news.created_at', 'desc')->limit(3)->get();
        $lastposts = DB::table('posts')->orderBy('posts.created_at', 'desc')->limit(3)->get();
        $lastengins = DB::table('engins')->orderBy('engins.created_at', 'desc')->limit(3)->get();
        return view('engincreate', compact('lastnews', 'lastposts', 'lastengins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $engin = new Engin();
        $engin->engin_title = $request->title;
        $engin->engin_short_title = Str::length($request->title) > 100 ? Str::substr($request->title, 0, 70) . '...' : $request->title;
        $engin->engin_description = $request->description;
        $engin->engin_video_link = $request->link;
        if ($request->file('img'))
        {
            $path = Storage::putFile('public',$request->file('img'));
            $url = Storage::url($path);
            $engin->engin_img = $url;
        }
        $engin -> save();
        return redirect()->route('adminpanel')->with('success','Запись успешно добавлена!');
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
        $engin = Engin::find($id);
        return view('enginedit',compact('engin'));
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
        $engin = Engin::find($id);
        $engin->engin_title = $request->title;
        $engin->engin_short_title = Str::length($request->title) > 100 ? Str::substr($request->title, 0, 30) . '...' : $request->title;
        $engin->engin_description = $request->description;
        $engin->engin_video_link = $request->link;
        if ($request->file('img'))
        {
            $path = Storage::putFile('public',$request->file('img'));
            $url = Storage::url($path);
            $engin->engin_img = $url;
        }
        $engin -> update();
        $id = $engin -> engin_id;
        return redirect()->route('articles.show',compact('id'))->with('success','Запись успешно добавлена!');
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
