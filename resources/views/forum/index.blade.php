<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Forum Programmer Indonesia | Belajar Pemrograman</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="shortcut icon" href="https://manusiakoding.000webhostapp.com/img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default" style="margin-bottom:0px;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand">
                      <a href="{{route('home')}}"><img src="{{ asset('img/mk.png') }}" style="padding-top:2px;width:200px;"></a>
                  </a>
              </div>

              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    <a href="{{route('login')}}"><button style="border-color: black; background-color: white; color:black ; margin-top: 6px" class="btn btn-danger"><li><i class="fa fa-sign-in" aria-hidden="true"></i> Masuk</li></button></a>
                    <a href="{{route('login')}}"><button style="margin-top: 6px" class="btn btn-primary"><li><i class="fa fa-user" aria-hidden="true"></i> Gabung</li></button></a>
                    @else

                    <li>
                      <a href="{{route('forum.create')}}">Buat Pertanyaan </a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">{{ Auth::user()->name }}</button> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"
                            > Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#"
                        > Setting
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off" aria-hidden="true"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
    @endguest
</ul>
</div>
</div>
</nav>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
 <!-- jdul -->
  <div style="padding-top:1-px ; background-image: linear-gradient(150deg, rgb(113, 202, 245) 0%, rgb(24, 132, 210), rgb(125, 213, 255) 100%);"><div class="text-center"><div class="container" style="padding: 50px; color: white;"><h1 style="font-size: 30px;">Forum Pertanyaaan</h1></div></div></div>
        <!-- jdul -->


        <div class="container">
          <div class="row w3-container w3-animate-zoom" style="margin-top:50px;">
            @foreach ($pertanyaan as $post)
            <a href="{{route('forum.show',$post)}}">
              <div class="col-md-3" >
                <div class="panel" style="width:100%;height:300px;">
                 <div class="panel-body">
                  <h3 class="text-center">{{$post->judul}}</h3>
                  <div class="info-meta">
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> {{ $post->created_at->diffForHumans() }}</li>
                      <li><i class="fa fa-user"></i> {{ $post->user->name }}</li>
                    </ul>
                  </div>
                  <hr>
                  <div class = "media">
                   <div class = "media-body">
                    <p>{{ str_limit($post->name, 106, ' ...') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div></a>
          @endforeach

        </div>
        {!! $pertanyaan->render() !!}
      </div>
    </div>