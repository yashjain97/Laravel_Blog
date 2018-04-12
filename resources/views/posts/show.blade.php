@extends('layouts.master2')
@section('content')

    <div class="container">

      <div class="row">
        <div class="col-lg-8">
          <h1 class="mt-4">{{$post->title}}</h1>

          <p class="lead">
            by
            <a href="#">{{$post->user->name}}</a> | {{ Counter::showAndCount('show') }} views
          </p>
          
          <hr>
          <p>Posted on {{ $post->created_at->toFormattedDateString() }} | {{ count($post->comments) }} comments</p>

          <hr>
          <img class="img-fluid rounded" src="/images/{{$post->image}}" alt="">

          <hr>
          <p class="lead">{!!$post->body!!}</p>
          <hr>

          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form name="comment-form" method="POST" action="/posts/{{$post->id}}/comments">
              {{ csrf_field() }}
                <div class="form-group">
                    <input class="form-control" type="text" name="fname" placeholder="First Name"><br>
                    <input class="form-control" type="text" name="lname" placeholder="Last Name"/ ><br>
                  <textarea class="form-control"  name="body" rows="3"></textarea>
                </div>
                <button type="submit"name="publish"class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          
            @foreach($post->comments as $comment)
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="/images/blog/comment-1.png" alt="">
            <div class="media-body">
              <h5 class="mt-0">{{$comment->fname ." ".$comment->lname}}</h5>
              {{$comment->body}}
            </div>
          </div>
          @endforeach
         
          </div>
       @include('layouts.side_nav')
      </div>
    </div>
@endsection