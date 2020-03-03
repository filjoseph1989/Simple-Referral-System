@section('content')
    <div class="">
        <div class="">
            @if ($gift->count() > 0)
                @foreach ($gift as $key => $value)
                    <div class="bg-white my-2 p-4 rounded-lg w-1/3">
                        <p class="border-b font-medium">{{ $value->gift_card->name ?? ''}}</p>
                        <p>{{ $value->gift_card->description ?? ''}}</p>
                        <div class="flex pb-0 py-2">
                            @php
                                $price = $value->gift_card->price ?? '0.00';
                                $price = number_format($price, 2);
                            @endphp
                            <span class="bg-teal-600 border mr-2 px-2 rounded text-white">PHP {{ $price }}</span>
                            <span class="bg-teal-600 border mr-2 px-2 rounded text-white">{{ $value->quantity ?? ''}} Item(s)</span>
                            <a href="#" class="bg-teal-600 border px-2 rounded text-white">Redeemed</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="bg-white rounded p-2">No gift card bought yet</p>
            @endif
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
@endsection

@extends('layout.dashboard')
