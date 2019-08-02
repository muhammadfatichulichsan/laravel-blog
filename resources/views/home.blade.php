@extends('layouts.app')

@section('content')
<!-- jdul -->
<div style="padding-top:1-px ; background-image: linear-gradient(150deg, rgb(113, 202, 245) 0%, rgb(24, 132, 210), rgb(125, 213, 255) 100%);"><div class="text-center"><div class="container" style="padding: 50px; color: white;"><h1 style="font-size: 30px;">Kesusahan Belajar Pemrograman ? ?</h1> <h2 style="font-size: 20px;">Kamu tersesat Di tempat yang tepat ,
  yaitu tempat kami , di tempat ini kami menyediakan berbagai macam bahasa pemrograman yang sekiranya sekarang
  populer di seluruh dunia dan di sini kami mempermudahkan untuk memulai pemrograman</h2></div></div></div>
  <!-- jdul -->

    <div class="container " style="margin-top:20px;color:black;">
              <div class="row">
                <div class="col-md-6">
                  <h1><i class="fa fa-youtube-play"></i><b>Materi Video</b></h1>
                  <br>
                </div>
                <div class="col-md-6">

                </span>
              <form action="{{ url('hasilpencarian') }}" method="post">
                <div class="input-group">
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                  <input type="text" class="form-control" name="q" placeholder="Cari Disini . .">
                  <span class="input-group-btn">
                    <button type="submit" class="btn -btn-default" name="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
                </div>
              </form>
</div>
      </span>
    </div>
        <div class="row w3-container w3-animate-zoom">
     @foreach ($posts as $post)
     <div class="col-md-3" style="padding: 6px">
       <div class="panel" style="width:100%;height:300px; border: 1px solid;border-color:#f5f5f5 ">
        <div class="panel-body">
          <a href="{{ route('post.show', $post->slug) }}"><h4>{{  $post->title}}</h3></a>
           Diupload : {{ $post->created_at->diffForHumans() }}
             <a href="{{url('kategori',$post->slug)}}"><button style="padding: 1px 3px;font-size: 11px" class="btn btn-default">{{ $post->category->name }}</button></a>
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

<div class="text-center">
  {!! $posts->render() !!}
</div>
</div>
</div>
<!-- isi -->
<!-- pesn -->
<div style="margin-top:40px;">
 <div class="judul3" style="background-image: linear-gradient(150deg, rgb(0, 0, 0) 0%, rgb(56, 82, 101), rgb(2, 8, 10) 100%);">
   <div class="w3-container w3-animate-zoom"style="padding:60px;">
     <h1 style="color:whitesmoke;font-weight:600;">Cara Kami Dalam Belajar</h1>
     <h3 style="color:white;">Kami menyediakan tempat belajar di sini ,
       guna mempermudah pengunjung untuk melakukan pembelajaran.
     </h3>
     <a class="btn btn-success btn-large" href="#">Lanjutkan</a>
   </div>
 </div>
 <!-- pesan -->
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

           <p style="color:black;">Web Dalam Pembangunan</p>
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
   </footer>
   @endsection
