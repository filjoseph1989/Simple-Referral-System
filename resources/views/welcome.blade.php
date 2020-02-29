<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Referral System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>

    <body class="bg-teal-700">
        <div id="app" class="">
            {{--
            @if (Route::has('login'))
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

            <div class="login_form">
                <div class="login_form_wrapper m-10">
                    <h1 class="my-2 text-3xl text-white">Login Form</h1>
    
                    <div class="bg-white border p-5 rounded shadow-2xl">
                        <form action="" method="post" class="form">
                            @csrf
                            
                            <label for="email">Email</label>
                            <input type="email" class="border mb-3 p-1 pl-2" placeholder="Enter your email" required>
    
                            <label for="password">Password</label>
                            <input type="password" class="border mb-3 p-1 pl-2" placeholder="Enter your password" required>
    
                            <div class="my-2">
                                <button type="submit" class="bg-blue-500 border p-1 p-2 pl-5 pr-5 rounded text-white uppercase">Login</button> 
                                <button type="submit" class="bg-orange-400 border p-1 p-2 pl-5 pr-5 rounded text-white uppercase">Sign Up</button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script src="{{ mix('js/app.js') }}?v=0.1"></script>
    </body>
</html>
