<div class="col-md-4">

<!-- Search Widget -->


<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            Web Design
          </li>
          <li>
            HTML
          </li>
          <li>
            Freebies
          </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            JavaScript
          </li>
          <li>
            CSS
          </li>
          <li>
            Tutorials
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="card my-4">
  <h5 class="card-header">Archives</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
        @foreach($archives as $stats)
          <li>
            <a href="/posts/?month={{$stats['month']}}&year={{$stats['year']}}">{{$stats['month']." ".$stats['year']}} </a>
          </li>@endforeach
        </ul>  
        </div> 
    </div>
  </div>
</div>

<!-- Side Widget -->
<div class="card my-4">
  <h5 class="card-header">About</h5>
  <div class="card-body">
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
  </div>
</div>

</div>
