<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name') }} - @yield('title')</title>

        {{-- Css Stylesheets --}}
        <link rel="stylesheet" href="{{ asset('admin/css/plugin.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/img/favicon.png') }}">
        @yield('css')
    </head>
    <body class="layout-light side-menu overlayScroll">
        @include('admin.section.header')
        @yield('content')

        <div id="overlayer">
                <span class="loader-overlay">
                    <div class="atbd-spin-dots spin-lg">
                        <span class="spin-dot badge-dot dot-primary"></span>
                        <span class="spin-dot badge-dot dot-primary"></span>
                        <span class="spin-dot badge-dot dot-primary"></span>
                        <span class="spin-dot badge-dot dot-primary"></span>
                    </div>
                </span>
        </div>
        <div class="overlay-dark-sidebar"></div>
        <div class="customizer-overlay"></div>

        {{-- JS Scripts --}}
        <script src="{{ asset('admin/js/plugins.min.js') }}"></script>
        <script src="{{ asset('admin/js/script.min.js') }}"></script>
        @yield('js')
    </body>
</html>
