@extends('layouts.app')

@section('content')
<!-- jdul -->
<div class="container-fluid" style="background-image: linear-gradient(150deg, rgb(113, 202, 245) 0%, rgb(24, 132, 210), rgb(125, 213, 255) 100%);">
  <div class="text-center">

      @guest
      <h1 style="margin:100px;color:whitesmoke;">Untuk Melihat Video Silahkan <a style="color: yellow" href="{{route('login')}}"><u>Register / Login</u></a> </h1>
      @else
    </div>
  </div>

        <iframe style=" color:#eff6fb;" width="100%" height="500px" src="{{$post->link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
        </iframe>
      @endguest
    </div>
</div>
<!-- jdul -->
<hr>
<div class="container-fluid" style="margin-top:50px;">
  <div class="row">
    <div class="col-md-9">
      <div class="panel">
       <div class="panel-body">
           <h4 class="text-center">{{ $post->title}}</h3>
        <hr>
        <div class="media">
           <div class="media-body">
            <p>{{ $post->content }}</p>
           </div>
           <div class = "sharethis-inline-share-buttons"> </div>
           <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://manusiakoding.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
             </div>
        </div>
        </div>
       </div>
        <div class="col-sm-3">
        <div class="panel panel-primary">
           <div class="panel-heading"><h4 class="text-center">Kategori</h4></div>
           @foreach ($categories as $category)
            <ul class="list-group">
              <li class="list-group-item"> <a style="color:black;" href="{{ route('showkate',$category)}}">{{$category->name}} </a> </li>
            </ul>
           @endforeach
          <div class="recent">
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

<!-- isi -->
<!-- pesan -->
<div class="row w3-container w3-animate-zoom">
     @foreach ($posts as $post)
     <div class="col-md-3" >
       <div class="panel" style="width:100%;height:300px; border: 1px solid;border-color:#f5f5f5 ">
        <div class="panel-body">
          <a href="{{ route('post.show', $post->slug) }}"><h4>{{  $post->title}}</h3></a>
           Diupload : {{ $post->created_at->diffForHumans() }}
             <a href="{{ route('showkate',$post->category_id)}}">
               <button style="padding: 1px 3px;font-size: 11px" class="btn btn-default">{{ $post->category->name }}</button>
             </a>
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
<!-- pengiriman -->
<footer class="footer" style="background-color:whitesmoke;padding:60px;">
<div class="container">
<div class="row">
<div class="columns">
<div class="col-sm-6 col-md-4">
  <h1 class="title is-5">
    <strong>Manusia Koding</strong>
  </h1>
  <p class="" style="color:black;">
    Tempat pembelejaran yang lengkap cocok untuk semua kalangan orang
    pembelajaran yang sangat keren
    mudah , cepat dan efisien
  </p>
</div>

<div class="col-sm-6 col-md-4">
  <h1 class="title is-5">Informasi</h1>

  <p style="color:black;"></p>
</div>

<div class="col-sm-6 col-md-4">
  <h1 class="title is-5">Kontak Kami</h1>
  <div style="color:black;">
    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Ds. Pacet Rt.01, Rw.03, Pacet, Mojokerto</p>
    <p><i class="fa fa-inbox" aria-hidden="true"></i> muhammadfatichulichsan@gmail.com</p>
  </div>
</div>

</div>
</div>
<div class="text-center">
<p>
<a href="https://facebook.com/" target="_blank"><img src="{{asset('img/fb.png')}}"  width="24px"></a>
<a href="https://twitter.com/" target="_blank"><img src="{{asset('img/tw.png')}}"  width="24px"></a>
<a href="https://instagram.com/" target="_blank"><img src="{{asset('img/ig.png')}}" width="24px"></a>
</p>
<p style="color:black;">© 2017 Manusia Koding, Mojokerto</p>
</div>
</div>
</footer>
<script id="dsq-count-scr" src="//manusiakoding.disqus.com/count.js" async></script>
@endsection
