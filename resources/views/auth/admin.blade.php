@extends('layouts.app')

@section('content')
<div style="background-image: linear-gradient(141deg, #009e6c 0%, #00d1b2 71%, #00e7eb 100%);">
  <div class="text-center">
    <div class="container" style="padding:80px;color:white;">
      <h1>Akun Manusia Koding</h1>
      <h2 style="font-size:20px;">Masuk ke arena Manusia Koding Untuk Melihat / Belajar di Tempat Kami</h2>
  </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
          <h2 style="font-weight:600;">Sudah Punya Akun? Silahkan Masuk</h2>
          <hr>
          <div class="panel panel-default">
            <div class="panel-heading text-center">Login</div>

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
        <div class="panel-heading text-center">Register</div>
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
            <p><i class="fa fa-paper-plane" aria-hidden="true"></i> <a href="#">@ManusiaKoding</a></p>
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
