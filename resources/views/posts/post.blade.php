

        <div class="card mb-4">
            <img class="card-img-top" src="/images/{{$post->image}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{$post->title}}</h2>
              <p class="card-text">{{ \Illuminate\Support\Str::words(strip_tags($post->body), 5,'....')  }}</p>
              <a href="/posts/{{$post->id}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on {{ $post->created_at->toFormattedDateString() }} by
              <a href="/posts/{{$post->id}}">{{$post->user->name}}</a>
            </div>
          </div>
          
      