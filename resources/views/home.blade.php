@extends('layout.dashboard')
@section('title',$title)
@section('content')
@if (Auth::guest())
<script>window.location="/login";</script>
@else

        <!-- Student record -->
        <div class="container">
          <div class="card-deck mt-4 mb-3">
          <div class="card-body p-2">
                        <div class="card-title">
                          <h3 class="text-master text-center"><i class="fa fa-user"></i> Hi ! {{ Auth::user()->name }}</h3>
                        </div>
                      </div>
           
          <h3 class="text-master text-center"> </h3><br>
          <div class="card">
            <div class="card-body pt-2">
              <div class="container">
                <div class="card-deck mt-2">
                  <div class="card p-2 card-bordered bg-transparent">
                    <a href="{{url('/view_blog')}}" class="link">
                      <div class="card-body p-2">
                        <div class="card-title">
                          <h3 class="text-danger text-center"><i class="fa fa-trash"></i> Delete Post</h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="card p-2 card-bordered bg-transparent">
                    <a href="{{url('/view_blog')}}" class="link">
                      <div class="card-body p-2">
                        <div class="card-title">
                          <h3 class="text-primary text-center"><i class="fa fa-eye"></i> View Post</h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="card p-2 card-bordered bg-transparent">
                    <a href="{{url('/write-blog')}}" class="link">
                      <div class="card-body p-2">
                        <div class="card-title">
                          <h3 class="text-complete text-center"><i class="fa fa-diamond"></i> Create Blog</h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="card p-2 card-bordered bg-transparent">
                    <a href="{{url('/view_blog')}}" class="link">
                      <div class="card-body p-2">
                        <div class="card-title">
                          <h3 class="text-info text-center"><i class="fa fa-edit"></i> Edit Posts</h3>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
               
                 
                 
                </div>
              </div>
            </div>
          </div>
        </div>@endif
@endsection
