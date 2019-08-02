@extends('layouts.app')
@section('content')

  <div style="padding-top:1-px ; background-image: linear-gradient(150deg, rgb(113, 202, 245) 0%, rgb(24, 132, 210), rgb(125, 213, 255) 100%);"><div class="text-center"><div class="container" style="padding: 50px; color: white;"><h1 style="font-size: 30px;">Ada {{ $hasil->count()}} Data Terkait : {{$query}}</h1></div></div></div>
<div class="container" style="margin-top:50px;">
  <div class="row">
    @foreach ($hasil as $post)
    <div class="col-md-3 w3-center w3-animate-bottom" >
      <div class="panel" style="width:100%;height:300px">
       <div class="panel-body">
         <a href="{{ route('post.show', $post->slug) }}"><h4>{{  $post->title}}</h3></a>
         <div class="info-meta">
          <ul class="list-inline">
            <li><i class="fa fa-clock-o"></i> {{ $post->created_at->diffForHumans() }}</li>
            <button style="padding: 1px 3px;font-size: 11px" class="btn btn-default">{{ $post->category->name }}</button>
          </ul>
        </div>
        <hr>
        <div class = "media">
         <div class = "media-body">
          <p>{{ str_limit($post->content, 106, ' ...') }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

</div>


</div>

@endsection
