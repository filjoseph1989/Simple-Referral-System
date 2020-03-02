@section('content')
    @if ($errors->any())
        <div class="border mb-2 p-2 rounded bg-white">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-red-600 text-sm">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (!is_null(session('status')))
        <div class="bg-white border border-green-500 mb-2 p-2 rounded text-sm">
            <p class="{{ session('status')['class'] ?? '' }}">{{ session('status')['message'] ?? '' }}</p>
        </div>
    @endif

    @include('Compoments.welcome')

    @include('Compoments.create_role')

    @include('Compoments.invite')

    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <div class="flex items-center justify-center w-full" style=" height: 150px;">
            <div class="border flex items-center justify-center p-5 text-lg font-bold points">
                {{ $credit->points ?? '0' }} point{{ (isset($credit->points) && $credit->points > 0) ? "s" : '' }}
            </div>
        </div>

        <div class="px-6 py-4">
            <div class="font-bold mb-2 text-center text-xl">Your Credits Earned</div>
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
@endsection

@extends('layout.dashboard')
