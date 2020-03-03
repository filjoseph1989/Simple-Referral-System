@section('content')
    @include('Compoments.message')

    @include('Compoments.create_gift_cards')

    @include('Compoments.list_gift_cards')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
@endsection

@extends('layout.dashboard')
