@section('content')
    <div class="container mt-10" style="justify-self: center;">
        <div class="bg-white grid mb-4 overflow-hidden py-10 shadow sm:rounded-lg">
            <h1 class="font-bold text-2xl text-center">Thank you for buying with us</h1>
            <div class="flex" style="flex-direction: column;">
                <h2 class="text-2xl text-center">Summary</h2>
                <div class="items-center justify-center px-64">
                    <table class="w-full">
                        <tbody>
                            <tr>
                                <td class="border pl-3">Item Name</td>
                                <td class="border pl-2">{{ $gift->name }}</td>
                            </tr>
                            <tr>
                                <td class="border pl-3">Item Quantity</td>
                                <td class="border pl-2">{{ $quantity }}</td>
                            </tr>
                            <tr>
                                <td class="border pl-3">Item Price</td>
                                <td class="border pl-2">Php {{ number_format($gift->price, 2) }}</td>
                            </tr>
                            <tr>
                                <td class="border pl-3">Item Required Points</td>
                                <td class="border pl-2">{{ $points }}</td>
                            </tr>
                            <tr>
                                <td class="border pl-3">Shipping Cost</td>
                                <td class="border pl-2">Php 0.00</td>
                            </tr>
                            <tr>
                                <td class="border pl-3">Sub-Total</td>
                                <td class="border pl-2">Php 0.00</td>
                            </tr>
                            <tr>
                                <td class="border pl-3">Total</td>
                                @isset($pay)
                                    <td class="border pl-2">Php 0.00</td>
                                @else
                                    <td class="border pl-2">{{ $points }} Points</td>
                                @endisset
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout.master')
