@section('content')
    <div class="dashboard grid h-10 w-full">
        <div class="bg-teal-900 grid sidebar">
            <div class="bg-blue-400 flex items-center justify-center profile">
                <h1>Fil</h1>
            </div>
            <div class="pt-4">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="bg-white border p-3 rounded">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('post.logout') }}" method="post"
                    class="hidden">
                    @csrf
                </form>
            </div>
        </div>

        <div class="content p-10">
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
                                {{ route('get.invite', $code) }}
                            </dt>

                            {{-- Task 1 --}}
                            <form action="{{ route('post.invite.send') }}" method="post" class="col-span-2 grid grid-cols-2">
                                @csrf

                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 grid">
                                    <input type="hidden" name="invitation_link" value="{{ route('get.invite', $code) }}">
                                    <input type="text" name="name" placeholder="Enter user name" class="border p-1 w-10/12 mb-2">
                                    <input type="text" name="email" placeholder="Enter user email address" class="border p-1 w-10/12">
                                </dd>
                                <dd>
                                    <button type="submit" name="button" class="bg-teal-500 border p-1 pl-4 pr-4 rounded text-white">Send</button>
                                </dd>
                            </form>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
@endsection

@extends('layout.master')
