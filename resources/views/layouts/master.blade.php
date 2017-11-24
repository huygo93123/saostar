<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('layouts/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('layouts/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('layouts/css/style.css') }}">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ asset('plugin/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/owlcarousel/assets/owl.theme.default.min.css') }}">
    <!-- videojs stylesheets-->
    <link href="{{ asset('plugin/video.js/video-js.css') }}" rel="stylesheet">
    {{--css--}}
    @yield('css')
    {{--end css--}}
    <!--Plugin -->
    <script src="{{ asset('layouts/js/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('plugin/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('plugin/video.js/video.js') }}"></script>
    <script src="{{ asset('plugin/visible/jquery.visible.min.js') }}"></script>
    <script src="{{ asset('layouts/js/main.js') }}"></script>
</head>
<body>
<div class="saostar-wrapper">
    {{--/header--}}
    @include("layouts.elements.top")
    {{--/top banner--}}
    <div class="sw-topbanner">
        <div class="w1000">
            <img src="{{ asset('layouts') }}/images/top-banner.jpg" alt="">
        </div>
    </div>
    {{--main--}}
    <div class="sw-main">
        <div class="w1000">
            @yield('content')
        </div>
    </div>
    {{--bottom banner--}}
    <div class="sw-bottombanner">
        <div class="w1000">
            <img src="{{ asset('layouts') }}/images/top-banner.jpg" alt="">
        </div>
    </div>
    {{--footer--}}
    @include("layouts.elements.footer")
</div>
@yield('script')
</body>
</html>