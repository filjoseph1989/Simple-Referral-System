<div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Create Gift Cards
        </h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
    <div class="">
        <div class="bg-gray-50 grid-cols-2 px-4 py-5 sm:gap-4 sm:grid sm:px-6">
            <form action="{{ route('post.gift.card') }}" method="post" class="grid">
                @csrf

                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Enter gift card name" class="border p-2">

                <label for="description">Description</label>
                <input type="text" name="description" id="description" value="{{ old('description') }}" placeholder="Enter gift card description" class="border p-2">

                <label class="mt-3" for="price">Price</label>
                <input type="text" name="price" id="price" value="{{ old('price') }}" placeholder="Enter gift card price" class="border p-2">

                <label class="mt-3" for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" value="{{ old('quantity') }}" placeholder="Enter gift card quantity" class="border p-2">

                <label class="mt-3" for="points">Required Credit/Points</label>
                <input type="text" name="points" id="points" value="{{ old('points') }}" placeholder="Enter gift card credits/points" class="border p-2">

                <label class="mt-3" for="expiration">Valid until</label>
                <input type="datetime" name="expiration" id="expiration" value="{{ old('expiration') }}" placeholder="Enter expiration date" class="border p-2">

                <button type="submit" class="bg-teal-600 border mt-2 p-2 text-white" style=" width: 110px; ">
                    <span>Save</span>
                </button>
            </form>
        </div>
    </div>
</div>
