<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Product &raquo; Create
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div>
                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="rounded-t bg-red-500 px-4 py-2 font-bold text-white">
                            There's something wrong!
                        </div>
                        <div class="rounded-b border border-t-0 border-red-400 bg-red-100 px-4 py-3 text-red-700">
                            <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                @endif

                <form action="{{ route('dashboard.product.store') }}" class="w-full" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="-mx-3 mb-6 flex flex-wrap">
                        <div class="w-full px-3">
                            <label for=""
                                class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-700">Name</label>
                            <input type="text" value="{{ old('name') }}" name="name"
                                class="block w-full rounded border border-gray-200 bg-gray-200 py-3 px-4 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                                placeholder="Product Name" autocomplete="off">
                        </div>
                    </div>
                    <div class="-mx-3 mb-6 flex flex-wrap">
                        <div class="w-full px-3">
                            <label for=""
                                class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-700">Description</label>
                            <textarea name="description"
                                class="block w-full rounded border border-gray-200 bg-gray-200 py-3 px-4 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                                autocomplete="off">{!! old('description') !!}</textarea>
                        </div>
                    </div>
                    <div class="-mx-3 mb-6 flex flex-wrap">
                        <div class="w-full px-3">
                            <label for=""
                                class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-700">Price</label>
                            <input type="number" value="{{ old('price') }}" name="price"
                                class="block w-full rounded border border-gray-200 bg-gray-200 py-3 px-4 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                                placeholder="Product Price" autocomplete="off">
                        </div>
                    </div>
                    <div class="-mx-3 mb-6 flex flex-wrap">
                        <div class="w-full px-3">
                            <button type="submit"
                                class="rounded bg-green-500 py-2 px-4 font-bold text-white shadow-lg hover:bg-green-700">
                                Save Product
                            </button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</x-app-layout>
