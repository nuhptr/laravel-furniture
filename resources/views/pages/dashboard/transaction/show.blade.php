<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Transaction &raquo; #{{ $transaction->id }} {{ $transaction->name }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            // Ajax DataTable

            var datatable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}'
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        width: '5%'
                    },
                    {
                        data: 'product.name',
                        name: 'product.name'
                    },
                    {
                        data: 'product.price',
                        name: 'product.price'
                    },
                ]
            })
        </script>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="mb-5 text-lg font-semibold leading-tight text-gray-800">
                Transaction Details
            </h2>

            <div class="bg-white-overflow-hidden mb-10 shadow sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6 sm:rounded-md">
                    <table class="w-full table-auto">
                        <tbody>
                            <tr>
                                <th class="border px-6 py-4 text-left">Name</th>
                                <td class="border px-6 py-4 text-left">{{ $transaction->name }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Email</th>
                                <td class="border px-6 py-4 text-left">{{ $transaction->email }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Address</th>
                                <td class="border px-6 py-4 text-left">{{ $transaction->address }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Phone</th>
                                <td class="border px-6 py-4 text-left">{{ $transaction->phone }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Kurir</th>
                                <td class="border px-6 py-4 text-left">{{ $transaction->courier }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Payment</th>
                                <td class="border px-6 py-4 text-left">{{ $transaction->payment }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Payment Url</th>
                                <td class="border px-6 py-4 text-left">{{ $transaction->payment_url }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Total</th>
                                <td class="border px-6 py-4 text-left">
                                    IDR {{ number_format($transaction->total_price) }}
                                </td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-left">Status</th>
                                <td class="border px-6 py-4 text-left">{{ $transaction->status }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="mb-5 text-lg font-semibold leading-tight text-gray-800">
                Transaction Item
            </h2>
            <div class="overflow-hidden shadow sm:rounded-md">
                <div class="bg-white px-4 py-5 sm:p-6">
                    <table id="crudTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody class="text-center"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
