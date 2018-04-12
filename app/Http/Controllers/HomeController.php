<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use App\Post;
use Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function write_blog()
    {
        $title='Write Blog';
        return view('posts.write',compact('title'));
    }
    public function view_blog(){
        $title='View Blog';
        $posts=Post::where('user_id','=','Auth::user()')->orderBy('id','desc');
        return view('posts.view')->with('posts',$posts)->with('title',$title);
    }


}
