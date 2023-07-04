<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

        <title>{{ config('app.name') }} - @yield('title')</title>

        <!-- CSS Stylesheets -->
        <link rel="stylesheet" href="{{ asset('assets/assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/assets/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/assets/slick/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/assets/elagent-icon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/assets/animation/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        @yield('css')
    </head>

<body data-scroll-animation="true">
{{--    @include('home.section.preloader')--}}
    <div class="body_wrapper">
        @include('home.section.navbar')
        @include('home.section.main_area')

        @yield('content')

        @include('home.section.footer')
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- JavaScript Scripts -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/pre-loader.js') }}"> </script>
    <script src="{{ asset('assets/js/pre-loader.js') }}"> </script>
    <script src="{{ asset('assets/assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/assets/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.wavify.js') }}"></script>
    <script src="{{ asset('assets/assets/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
