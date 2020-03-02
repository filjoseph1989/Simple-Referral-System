<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="{{ csrf_token() }}">

        <title>Referral System</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @yield('css')
    </head>

    <body class="{{ $bodyClass ?? 'bg-gray-600' }}">
        <div class="main grid" id="app">
            <div class="bg-teal-600 grid grid-cols-2 h-12 navigation text-white">
                <div class=""></div>
                <div class="flex items-center justify-end pr-10">
                    <nav class="">
                        @if (Request::route()->getName() != 'get.main')
                            <a class="mr-2" href="{{ route('get.main') }}">Home</a>
                        @endif

                        @if (Request::route()->getName() != 'get.login.form')
                            <a class="mr-2" href="{{ route('get.login.form') }}">Login</a>
                        @endif

                        @if (Request::route()->getName() != 'get.signup.form')
                            <a href="{{ route('get.signup.form') }}">Sign up</a>
                        @endif
                    </nav>
                </div>
            </div>

            @yield('content')
        </div>

        <script src="{{ mix('js/app.js') }}?v=0.4"></script>
    </body>
</html>
