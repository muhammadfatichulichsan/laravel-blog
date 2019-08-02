@extends('layouts.app')

@section('title')
Forum Programmer Indonesia
@endsection
@section('content')
<div style="padding-top:50px ; background-image: linear-gradient(150deg, rgb(113, 202, 245) 0%, rgb(24, 132, 210), rgb(125, 213, 255) 100%);">
  <div class="w3-container w3-center">
    <div class="container" style="padding: 50px; color: white;">
      <h1 style="font-size: 50px;font-family:arial;"> Pertanyaan <b>{{$forum->user->name}}</b> </h1></div></div></div>
      <div class="w3-container w3-animate-zoom" style="margin-top:70px;">
        <div class="container panel">
          <h1 class="text-center">{{$forum->judul}}</h1>
          <hr>
          <p>{{$forum->name}}</p>
          <div class = "sharethis-inline-share-buttons"> </div>
               <div id="disqus_thread"></div>
        <script>
          (function() {
            var d = document, s = d.createElement('script');
            s.src = 'https://manusiakoding.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
          })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Manusia Koding.</a></noscript>

      </div>
        </div>
      <script id="dsq-count-scr" src="//manusiakoding.disqus.com/count.js" async></script>

      @endsection
