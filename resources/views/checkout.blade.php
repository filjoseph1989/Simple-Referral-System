@section('content')
    <div class="container mt-10" style="justify-self: center;">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
            <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Checkout Gift Card
                </h3>
            </div>

            <div class="">
                <div class="bg-gray-50 grid-cols-2 px-4 py-5 sm:gap-4 sm:grid sm:px-6">
                    <div class="">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border font-semibold p-1">Name</td>
                                    <td class="border p-1">{{ $item->name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td class="border font-semibold p-1">Description</td>
                                    <td class="border p-1">{{ $item->description ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td class="border font-semibold p-1">Price</td>
                                    <td class="border p-1">Php {{ number_format($item->price, 2) }}</td>
                                </tr>
                                <tr>
                                    <td class="border font-semibold p-1">Stack</td>
                                    <td class="border p-1">{{ $item->quantity ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td class="border font-semibold p-1">Required Points</td>
                                    <td class="border p-1">{{ $item->points ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td class="border font-semibold p-1">Expiration</td>
                                    <td class="border p-1">{{ date('M d, Y', strtotime($item->expiration)) ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td class="border font-semibold p-1">Status</td>
                                    <td class="border p-1">{{ $item->status == 'true' ? 'Active' : 'Inactive' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="">
                        <div class="mt-2">
                            @include('Compoments.message')

                            <div class="mt-2">
                                <a href="#" id="pay" class="bg-teal-600 border mt-2 p-2 text-white" style=" width: 110px; ">
                                    <span>Pay</span>
                                </a>
                                <a href="#" id="credit" class="bg-teal-600 border mt-2 p-2 text-white" style=" width: 110px; ">
                                    <span>Use Credit</span>
                                </a>
                            </div>
                        </div>

                        <form action="{{ route('post.checkout') }}" method="post" class="grid hidden" id="pay-form">
                            @csrf
                            <input type="hidden" name="item" value="{{ $item->id }}">
                            <input type="hidden" name="method" id="method" value="">
                            <label class="mt-3" for="quantity">Quantity</label>
                            <input type="number" name="quantity" id="quantity" value="{{ old('quantity') }}"
                                placeholder="Enter gift card quantity" class="border p-2">

                            <button type="submit" name="pay" class="bg-teal-600 border mt-2 p-2 text-white" style=" width: 110px; ">
                                <span id="pay-submit">Pay</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="{{ mix('js/checkout.js') }}" charset="utf-8"></script>
@endsection

@extends('layout.master')
