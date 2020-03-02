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
        @yield('content')

        <script src="{{ mix('js/app.js') }}?v=0.3"></script>
    </body>
</html>
