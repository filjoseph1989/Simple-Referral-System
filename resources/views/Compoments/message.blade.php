@if ($errors->any())
    <div class="border my-2 p-2 rounded bg-white">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-600 text-sm">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (!is_null(session('status')))
    <div class="bg-white border border-green-500 my-2 p-2 rounded text-sm">
        <p class="{{ session('status')['class'] ?? '' }}">{{ session('status')['message'] ?? '' }}</p>
    </div>
@endif
