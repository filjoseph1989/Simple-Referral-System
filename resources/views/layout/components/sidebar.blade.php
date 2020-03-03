<div class="bg-teal-900 grid sidebar">
    <div class="flex items-end profile" style=" background-image: url(https://i.imgur.com/B0D4iRkl.jpg);">
        <div class="bg-black opacity-50 pl-4 w-full py-1">
            <h1 class="text-white">{{ ucwords(Auth::user()->name ?? '') }}</h1>
        </div>
    </div>

    <div>
        <ul>
            <li class="bg-teal-800 border-b flex pl-10 py-3 text-white">
                <a href="{{ route('get.home') }}" class="">Dashboard</a>
            </li>
            <li class="bg-teal-800 border-b flex pl-10 py-3 text-white">
                <a href="{{ route('get.main') }}" class="">Homepage</a>
            </li>
            <li class="bg-teal-800 border-b flex pl-10 py-3 text-white">
                <a href="{{ route('get.gift.card.user') }}" class="">Gift Cards</a>
            </li>

            @if (isset(session('role')->role->name) && session('role')->role->name == 'admin')
                <li class="bg-teal-800 border-b flex pl-10 py-3 text-white">
                    <a href="#" class="">User Role</a>
                </li>
                <li class="bg-teal-800 border-b flex pl-10 py-3 text-white">
                    <a href="{{ route('get.gift.card') }}" class="">Manage Gift Cards</a>
                </li>
            @endif

            <li class="bg-teal-800 flex pl-10 py-3 text-white">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="">Logout</a>
            </li>
        </ul>

        <form id="logout-form" action="{{ route('post.logout') }}" method="post"
            class="hidden">
            @csrf
        </form>
    </div>
</div>
