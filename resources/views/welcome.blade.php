<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>el-PIDSUS</title>

        <!-- Fonts -->
        <link href="{{asset('css/font-awesome.css')}}" type="text/css">


    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('fonts/raleway/raleway-webfont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 95vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                margin-bottom: 20px;
            }

            .title {
                font-size: 55px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 0px;
                font-size: 12px;
                font-weight: 400;
                letter-spacing: 1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: center;
            }

            .m-b-md {
                width: 95%;
         }
            .main-footer {
  -webkit-transition: -webkit-transform 0.3s ease-in-out, margin 0.3s ease-in-out;
  -moz-transition: -moz-transform 0.3s ease-in-out, margin 0.3s ease-in-out;
  -o-transition: -o-transform 0.3s ease-in-out, margin 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, margin 0.3s ease-in-out;
                margin-right: 40px;
                margin-left: 40px;
                  z-index: 600;
  font-size: 12px;
  font-family: 'Raleway', sans-serif;
  font-weight: 100;
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        {{-- <a href="{{ url('/register') }}">Register</a> --}}
                    @endif
                </div>
            @endif

            <div class="content">
            <div class="content" align="center-block">
                <div>
            <img class="img-responsive" src="dist/img/openlaw-dark.png" >
            </div>
                <div class="links">
                SISTEM ELEKTRONIK FIRMA HUKUM
 {{--                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </div>
            </div>
                
            </div>
        </div>
        <div class="main-footer">
        <div class="m-b-md">
        <div class="pull-right">
      <small><b>Version</b> 1.0.0</small>
    </div>
    <small>Copyright © 2014-2016 <a href="http://soerojo.com" target="_blank">Tonny Soerojo &amp; Rekan</a>. All rights reserved.</small> </div>
  </div>
  </body>
</html>
