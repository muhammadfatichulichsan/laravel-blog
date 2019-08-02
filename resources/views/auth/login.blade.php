<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Belajar Pemrograman</title>

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
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            <button style="background-color: white;color: black;" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i>  {{ Auth::user()->name }}</button> <span class="caret"></span>
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
</div>
</nav>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<div style=" background-image: linear-gradient(150deg, rgb(113, 202, 245) 0%, rgb(24, 132, 210), rgb(125, 213, 255) 100%);">
  <div class="text-center">
    <div class="container" style="padding:30px;color:white;">
      <h1>Akun Manusia Koding</h1>
      <h2 style="font-size:20px;">Masuk ke arena Manusia Koding Untuk Melihat / Belajar di Tempat Kami</h2>
  </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
          <h2 style="margin-top: 40px;font-weight:600;">Sudah Punya Akun? Silahkan Masuk</h2>
          <hr>
          <div class="panel panel-default" style="min-height: 331px">
            <div class="panel-heading text-center">Masuk</div>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
         </div>
     </div>
     <div class="col-md-6">
      <h2 style="font-weight:600;">Jika Belum Punya Akun Silahkan Daftar</h2>
      <hr>
      <div class="panel panel-default">
        <div class="panel-heading text-center">Daftar</div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>
         </div>
     </div>
 </div>
</div>
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
</footer>
