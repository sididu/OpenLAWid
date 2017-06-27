<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Legal IT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="vendor/adminlte/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="vendor/adminlte/dist/css/AdminLTE.min.css">

        <!-- DataTables -->
        <link rel="stylesheet" href="//cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.css">

        <link rel="stylesheet"
        href="vendor/adminlte/dist/css/skins/skin-green-light.min.css ">
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
                height: 100vh;
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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
            <a href='home' ><img class="pull-right" src="{{ $logo }}" width="285"></a>
                {{-- <h1>el-<strong>PID</strong>SUS<br> --}}
                <h3>{{$title}} <br>        
                <small>{{$subtitle}}</small></h3>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
<!--===================================================-->
            @section('content')

            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                <img src="dist/img/UnderConstruct.png" width="600" alt="">
                </div>
                <div class="col-md-6">
                </div>
            </div>

                @stop

<!--==================================================================-->
            </div>
        </div>
        <footer class="main-footer bg-danger">
            <div class="pull-right text-danger">
             <h5> <small><b>Version</b> 1.0.0</small> | <a href='admin/login'> ADMIN LOGIN</a></h5>
          </div>
          <h5>Legal IT© <small>Copyright © 2014-2016 <a href="http://soerojo.com" target="_blank">Tonny Soerojo &amp; Rekan</a>. All rights reserved.</small> </h5>
      </footer>

    </body>
</html>
