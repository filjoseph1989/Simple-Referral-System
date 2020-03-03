<div class="bg-white max-w-sm mt-2 mx-1 overflow-hidden rounded shadow-lg">
    <div class="px-6 py-4">
        <div class="font-bold mb-2 text-md">
            <span>{{ $value->name ?? '' }}</span>
        </div>
        <p class="mb-2">{{ $value->description ?? '' }}</p>
        <a href="{{ route('get.checkout.item', ['giftcard', $value->id]) }}" class="bg-teal-600 border px-4 py-1 rounded text-white">
            <span>Buy</span>
        </a>
    </div>
</div>
