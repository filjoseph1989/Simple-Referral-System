<div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            List Of Gift Cards
        </h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>

    <div class="">
        <div class="bg-gray-50 px-4 py-5 sm:gap-4 sm:grid sm:px-6">
            @if ($gift->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th class="text-left">Name</th>
                            <th class="text-left">Price</th>
                            <th class="text-left">Remaining</th>
                            <th class="text-left">Sold</th>
                            <th class="text-left">Earned</th>
                            <th class="text-left">Required Points</th>
                            <th class="text-left">Expire At</th>
                            <th class="text-left">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($gift as $key => $value)
                            @php
                                $price      = $value->price ?? '0.00';
                                $price      = number_format($price, 2);
                                $expiration = $value->expiration ?? '';
                                $expiration = date('M d, Y', strtotime($expiration));
                                $status     = $value->status == 'true' ? 'Active' : 'Inactive';
                            @endphp

                            <tr>
                                <td class="border p-1">{{ $value->name ?? '' }}</td>
                                <td class="border p-1">{{ "Php {$price}" }}</td>
                                <td class="border p-1">{{ $value->quantity ?? '' }}</td>
                                <td class="border p-1">0</td>
                                <td class="border p-1">Php 0.00</td>
                                <td class="border p-1">{{ $value->points ?? '' }}</td>
                                <td class="border p-1">{{ $expiration }}</td>
                                <td class="border p-1">
                                    <span class="bg-green-500 border pl-1 pr-1 text-white text-sm">{{ strtoupper($status) }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
