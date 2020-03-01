@section('content')
    <div id="app" class="">
        <div class="registration_form">
            <div class="registration_form_wrapper m-10">
                <h1 class="my-2 text-3xl text-white">Registration Form</h1>

                <div class="bg-white border p-5 rounded shadow-2xl form--registration-width">
                    @if ($errors->any())
                        <div class="border mb-2 p-2 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-600 text-sm">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('post.signup') }}" method="post" class="form--grid">
                        @csrf

                        <label for="first-name">First Name</label>
                        <input type="text" class="border mb-3 p-1 pl-2" name="first_name" placeholder="Enter your first name" required
                            value="{{ old('first_name') }}">

                        <label for="last-name">Last Name</label>
                        <input type="text" class="border mb-3 p-1 pl-2" name="last_name" placeholder="Enter your last name" required
                            value="{{ old('last_name') }}">

                        <label for="email">Email</label>
                        <input type="email" class="border mb-3 p-1 pl-2" name="email" placeholder="Enter your email" required
                            value="{{ old('email') }}">

                        <label for="password">Password</label>
                        <input type="password" class="border mb-3 p-1 pl-2" name="password" placeholder="Enter your password" required>

                        <label for="password">Confirm Password</label>
                        <input type="password" class="border mb-3 p-1 pl-2" name="password_confirmation" placeholder="Confirm your password" required>

                        <div class="my-2">
                            <button type="submit" class="bg-blue-500 border p-1 p-2 pl-5 pr-5 rounded text-white uppercase">Signup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ mix('css/registration.css') }}">
@endsection

@extends('layout.master')
