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
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Invite User
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                        Invite user to earn credits. <br>
                        You can copy the link below and give it to the user or simply enter email and click send
                    </p>
                </div>
                <div>
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                {{ route('get.invite', $code) }}
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0">
                                <input type="text" name="email" value="" placeholder="Enter user email address" class="border p-1 w-10/12">
                            </dd>
                            <dd>
                                <button type="button" name="button" class="bg-teal-500 border p-1 pl-4 pr-4 rounded text-white">Send</button>
                            </dd>
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
