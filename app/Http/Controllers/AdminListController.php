<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminListController extends Controller
{
    public function showEngins()
    {
        $engins = DB::table('engins')->orderBy('engins.created_at','desc')->paginate(6);
        return view('enginsindexadmin',compact('engins'));
    }
    public function showPosts()
    {
        $posts = DB::table('posts')->orderBy('posts.created_at','desc')->paginate(6);
        return view('postsindexadmin',compact('posts'));
    }
    public function showNews()
    {
        $news = DB::table('news')->orderBy('news.created_at','desc')->paginate(6);
        return view('newsindexadmin',compact('news'));
    }
}
