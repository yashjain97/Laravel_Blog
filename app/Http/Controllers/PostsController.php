<?php

namespace App\Http\Controllers;
use App\Post;
use App\Student;
use App\User;
use App\StuApp;
use Carbon\Carbon;
use Image;
use Auth;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Blog";
        $posts=Post::orderBy('id','desc');



        if($month=request('month')){
            $posts->whereMonth('created_at',Carbon::parse($month)->month);
        }
        if($year=request('year')){
            $posts->whereYear('created_at',$year);
        }
        $posts=$posts->paginate(3);


        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $title='Create Blogs';
        return view('posts.create')->with('title',$title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(),[
            'title'=>'required',
            'category'=>'required',
            'body'=>'required',
            'image'=>'required',

        ]);
        $post= new Post;
        $post->title=$request->title;
        $post->category=$request->category;
        $post->body=$request->body;
        $post->user_id=$request->user_id;


        if($request->hasFile('image')){
            $image=$request->file('image');
            $filename=time(). "." . $image->getClientOriginalExtension();
            $location=public_path('images/'.$filename);
            Image::make($image)->resize(750,300)->save($location);
            $post->image=$filename;
        }
        $post->save();
        return redirect('/')->with('location',$location);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        $title='Edit';
        return view('posts.edit',compact('post','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        //
        $this->validate(request(),[
            'title'=>'required',
            'category'=>'required',
            'body'=>'required',
            'image'=>'required'
        ]);
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->category=$request->input('category');
        $post->body=$request->input('body');
        $post->user_id=$request->input('user_id');

        if($request->hasFile('image')){
            $image=$request->file('image');
            $filename=time(). "." . $image->getClientOriginalExtension();
            $location=public_path('images/'.$filename);
            Image::make($image)->resize(500,300)->save($location);
            $post->image=$filename;
        }
        $post->save();
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $post=Post::find($id);
    $post->delete();
    return redirect('/view_blog');
    }
    public function home()
    {
        $user=auth::user()->id;
         $posts=Post::where('user_id','=',$user)->orderBy('id','desc')->get();
      
        $title='View Blog';
        return view('/view_blog')->with('posts',$posts)->with('title',$title);
    }
    public function main()
    {
        // $title='Dashboard';
        $posts=Post::all();
       
        $title='Dashboard';
        return view('/home')->with('posts',$posts)
                            ->with('title',$title)
                            ;
    }

}
