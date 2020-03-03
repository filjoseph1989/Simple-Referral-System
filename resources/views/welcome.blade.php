@section('content')
    <h1 class="font-bold mt-10 text-5xl text-center text-white">Gift Cards</h1>

    <div class="container flex flex-wrap mt-10 my-auto" style="justify-self: center;">
        @foreach ($giftCard as $key => $value)
            @include('Compoments.gift_card')
        @endforeach
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ mix('css/login.css') }}">
@endsection

@extends('layout.master')
