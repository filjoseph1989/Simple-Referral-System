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
        <div class="dashboard grid h-10 w-full">
            <div class="bg-teal-900 grid sidebar">
                <div class="flex items-end profile" style=" background-image: url(https://i.imgur.com/B0D4iRkl.jpg);">
                    <div class="bg-black opacity-50 pl-4 w-full py-1">
                        <h1 class="text-white">{{ ucwords(Auth::user()->name ?? '') }}</h1>
                    </div>
                </div>

                <div>
                    <ul>
                        <li class="bg-teal-800 border-b flex pl-10 py-3 text-white">
                            <a href="#" class="">Create User Role</a>
                        </li>
                        <li class="bg-teal-800 flex pl-10 py-3 text-white">
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="">Logout</a>
                        </li>
                    </ul>

                    <form id="logout-form" action="{{ route('post.logout') }}" method="post"
                        class="hidden">
                        @csrf
                    </form>
                </div>
            </div>

            <div class="content p-10">
                @yield('content')
            </div>
        </div>

        <script src="{{ mix('js/app.js') }}?v=0.4"></script>
    </body>
</html>
