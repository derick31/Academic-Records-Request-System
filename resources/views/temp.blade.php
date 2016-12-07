<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>
        <link href="css/dashboard.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        {{-- ALUMNI CSS AND JAVASCRIPT --}}
        <link href="css/alumni/alumni.css"  rel="stylesheet" type="text/css"/>
        <script src="js/alumni/alumni.js"></script>

        <title>@yield('title')</title>
    </head>
    <body>
        @include('navbar')
        @yield('content')
    </body>
</html>