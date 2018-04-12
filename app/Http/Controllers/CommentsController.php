<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Comment;


class CommentsController extends Controller
{
    public function store(Post $post){
        Comment::create([
            'fname'=>request('fname'),
            'lname'=>request('lname'),
            'body'=>request('body'),
            'post_id'=>$post->id
        ]);


        return back();
    }
}