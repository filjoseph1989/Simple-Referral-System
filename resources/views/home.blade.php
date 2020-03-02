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

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Invite User
            </h3>
            <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                Invite user to earn credits. <br>
                You can copy the link below and give it to the user or simply enter email and click send.
            </p>
        </div>
        <div>
            <dl>
                <div class="bg-gray-50 grid-cols-3 px-4 py-5 sm:gap-4 sm:grid sm:px-6">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        <p class="text-black">Referral link</p>
                        <span>{{ route('get.invite', $code) }}</span>
                    </dt>

                    {{-- Task 1 --}}
                    <form action="{{ route('post.invite.send') }}" method="post" class="col-span-2 grid grid-cols-2">
                        @csrf

                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 grid">
                            <input type="hidden" name="invitation_link" value="{{ route('get.invite', $code) }}">
                            <input type="text" name="name" placeholder="Enter user name" class="border p-1 w-10/12 mb-2" required>
                            <input type="text" name="email" placeholder="Enter user email address" class="border p-1 w-10/12" required>
                        </dd>
                        <dd>
                            <button type="submit" name="button" class="bg-teal-500 border p-1 pl-4 pr-4 rounded text-white">Send Invitation</button>
                        </dd>
                    </form>
                </div>
            </dl>
        </div>
    </div>

    <br><br>

    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <div class="flex items-center justify-center w-full" style=" height: 150px;">
            <div class="border flex items-center justify-center p-5" style="border-radius: 50%;height: 120px;width: 120px;">
                25 Points
            </div>
        </div>

        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Your Credits Earned</div>
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
