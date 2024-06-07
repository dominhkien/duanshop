<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/outside/outside/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 01:00:22 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('client/img/favicon.ico') }}">

    <!-- All CSS Files -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}">
    <!-- Icon Font -->
    <link rel="stylesheet" href="{{ asset('client/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/pe-icon-7-stroke.css') }}">
    <!-- Plugins css file -->
    <link rel="stylesheet" href="{{ asset('client/css/plugins.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('client/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('client/css/responsive.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('client/js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>

<body>
    @include('client.header')
    @include('client.banner')
    @yield('content')
    @include('client.footer')
    <!-- jQuery latest version -->
    <script src="{{ asset('client/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('client/js/vendor/jquery-migrate.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('client/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('client/js/plugins.js') }}"></script>
    <!-- Ajax Mail js -->
    <script src="{{ asset('client/js/ajax-mail.js') }}"></script>
    <!-- Main js -->
    <script src="{{ asset('client/js/main.js') }}"></script>

</body>


<!-- Mirrored from htmldemo.net/outside/outside/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 01:00:22 GMT -->

</html>
