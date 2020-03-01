@section('content')
    <div id="app" class="">
        <div class="login_form">
            <div class="login_form_wrapper m-10">
                <h1 class="my-2 text-3xl text-white">Login Form</h1>
    
                <div class="bg-white border p-5 rounded shadow-2xl form--login-width">
                    @if ($errors->any())
                        <div class="border mb-2 p-2 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-600 text-sm">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('post.login') }}" method="post" class="form--grid">
                        @csrf

                        <label for="email">Email</label>
                        <input type="email" class="border mb-3 p-1 pl-2" name="email" placeholder="Enter your email" required>
    
                        <label for="password">Password</label>
                        <input type="password" class="border mb-3 p-1 pl-2" name="password" placeholder="Enter your password" required>
    
                        <div class="my-2">
                            <button type="submit" class="bg-blue-500 border p-1 p-2 pl-5 pr-5 rounded text-white uppercase">Login</button>
                            <a href="{{ route('get.signup.form') }}" class="bg-orange-400 border p-1 p-2 pl-5 pr-5 rounded text-white uppercase">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ mix('css/login.css') }}">
@endsection

@extends('layout.master')