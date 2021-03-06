<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>POWELL SMYTHE</title>

        {{-- Fonts --}}
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://use.typekit.net/xtn8hhz.css">

        {{-- Styles --}}
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        {{-- Favicons --}}
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
        <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#8b784a">
        <meta name="msapplication-TileColor" content="#bdb5a1">
        <meta name="theme-color" content="#bdb5a1">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
            <div id="app">
                <home></home>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

    </body>
</html>
