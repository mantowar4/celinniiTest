<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\News;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostsController extends Controller
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

        $posts = DB::table('posts')->orderBy('posts.created_at','desc')->paginate(6);
        return view('postsindex',compact('posts','lastnews', 'lastposts','lastengins'));
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
        return view('articlecreate', compact('lastnews', 'lastposts', 'lastengins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->post_title = $request->title;
        $post->post_short_title = Str::length($request->title) > 100 ? Str::substr($request->title, 0, 70) . '...' : $request->title;
        $post->post_description = $request->description;
        if ($request->file('img'))
        {
            $path = Storage::putFile('public',$request->file('img'));
            $url = Storage::url($path);
            $post->post_img = $url;
        }
        $post -> save();
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
        $post = Post::find($id);
        $lastnews = DB::table('news')->orderBy('news.created_at','desc')->limit(3)->get();
        $lastposts = DB::table('posts')->orderBy('posts.created_at','desc')->limit(3)->get();
        $lastengins = DB::table('engins')->orderBy('engins.created_at','desc')->limit(3)->get();
        return view('postsshow',compact('post','lastposts','lastnews','lastengins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('articleedit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        $post->post_title = $request->title;
        $post->post_short_title = Str::length($request->title) > 100 ? Str::substr($request->title, 0, 70) . '...' : $request->title;
        $post->post_description = $request->description;
        if ($request->file('img'))
        {
            $path = Storage::putFile('public',$request->file('img'));
            $url = Storage::url($path);
            $post->engin_img = $url;
        }
        $post -> update();
        $id = $post->post_id;
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
        $post = Post::find($id)->First();

        if ($post != null) {
            $post->delete();
            return redirect()->route('adminpanel',app()->getLocale())->with('success','Запись успешно удалена!');
        }
        return redirect()->route('adminpanel',app()->getLocale())->with('success','Запись не найдена!');
    }
}
