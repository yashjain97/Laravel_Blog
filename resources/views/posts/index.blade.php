@extends('layouts.master2')
@section('content')


    <div class="container">

      <div class="row">

        <div class="col-md-8">

          <h1 class="my-4">BLOGGING
            <small>(your life)</small>
          </h1>
          @foreach($posts as $post)
        @include('posts.post')
    @endforeach
    

          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
            {{ $posts->links() }}
            </li>
          </ul>

        </div>
@include('layouts.side_nav')
    
       
      </div>
    </div>
    @endsection
