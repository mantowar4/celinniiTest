<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lastnews = DB::table('news')->orderBy('news.created_at', 'desc')->limit(3)->get();
        $lastposts = DB::table('posts')->orderBy('posts.created_at', 'desc')->limit(3)->get();
        $lastengins = DB::table('engins')->orderBy('engins.created_at', 'desc')->limit(3)->get();

        if ($request->search) {
            $news = DB::table('news')
                ->where('news_title', 'like', '%' . $request->search . '%')
                ->orWhere('news_short_title', 'like', '%' . $request->search . '%')
                ->orWhere('news_description', 'like', '%' . $request->search . '%')
                ->orderBy('news.created_at', 'desc')
                ->get();
            return view('newsindex', compact('news', 'lastnews', 'lastposts', 'lastengins'));
        }
        $news = DB::table('news')->orderBy('news.created_at', 'desc')->paginate(6);
        return view('newsindex', compact('news', 'lastnews', 'lastposts', 'lastengins'));
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
        return view('newscreate', compact('lastnews', 'lastposts', 'lastengins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new News();
        $new->news_title = $request->title;
        $new->news_short_title = Str::length($request->title) > 100 ? Str::substr($request->title, 0, 70) . '...' : $request->title;
        $new->news_description = $request->description;
        if ($request->file('img'))
        {
            $path = Storage::putFile('public',$request->file('img'));
            $url = Storage::url($path);
            $new->news_img = $url;
        }
        $new -> save();
        return redirect()->route('adminpanel')->with('success','Запись успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = News::find($id);
        $lastnews = DB::table('news')->orderBy('news.created_at', 'desc')->limit(3)->get();
        $lastposts = DB::table('posts')->orderBy('posts.created_at', 'desc')->limit(3)->get();
        $lastengins = DB::table('engins')->orderBy('engins.created_at', 'desc')->limit(3)->get();
        return view('newsshow', compact('new', 'lastposts', 'lastnews', 'lastengins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::find($id);
        return view('newsedit',compact('new'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = News::find($id);
        $new->news_title = $request->title;
        $new->news_short_title = Str::length($request->title) > 100 ? Str::substr($request->title, 0, 70) . '...' : $request->title;
        $new->news_description = $request->description;
        if ($request->file('img'))
        {
            $path = Storage::putFile('public',$request->file('img'));
            $url = Storage::url($path);
            $new->news_img = $url;
        }
        $new -> update();
        $id = $new -> news_id;
        return redirect()->route('news.show',compact('id'))->with('success','Запись успешно отредактирована!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
