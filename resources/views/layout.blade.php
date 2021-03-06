<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <title>@yield('title')</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <!-- icon -->
        <link rel="icon" href="{!! url('img/title_logo.jpg') !!}" type="image/jpg" />
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{!! url('css/bootstrap.min.css')!!}">
         {{-- <script src="{!! url('js/jquery-3.1.1.min.js')!!}"></script> --}}
        {{-- <link rel="stylesheet" type="text/css" href="{!! url('css/bootstrap.css')!!}"> --}}
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{!! url('css/style.css')!!}">
        <link rel="stylesheet" type="text/css" href="{!! url('css/alumni/alumni.css')!!}">

        <script type="text/javascript" src="{!! url('js/homepage.js')!!}"></script>
        <script type="text/javascript" src="{!! url('js/user.js')!!}"></script>
        <script type="text/javascript" src="{!! url('js/admin.js')!!}"></script>
        <script type="text/javascript" src="{!! url('js/alumni/alumni.js')!!}"></script>
        <script type="text/javascript" src="{!! url('js/superadmin.js')!!}"></script>
        <!-- Scripts -->
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
       
        {{-- <link href="css/dashboard.css" rel="stylesheet" type="text/css"/> --}}
        {{-- <link href="css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script> --}}

        {{-- ALUMNI CSS AND JAVASCRIPT
        <link href="css/alumni/alumni.css"  rel="stylesheet" type="text/css"/>
        <script src="js/alumni/alumni.js"></script> --}}
        <style>
            * {
                color: black;
            }
            html, body {
                background-color: #fff;
                /*font-family: 'Raleway', sans-serif;*/
                font-family: 'Lato', sans-serif;
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

        @include('navbar')
        @if(Auth::user()):
         <div class="col-md-12" style="margin-top: -20px;">
         @include('sidebar')
        @endif
        @yield('content')
        @if(Auth::user())
            </div>
        @endif
        {{-- @include('footer') --}}
    </body>

</html>
