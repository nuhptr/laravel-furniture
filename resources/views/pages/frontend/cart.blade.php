@extends('layouts.frontend')

@section('content')
    <!-- START: BREADCRUMB -->
    <section class="bg-gray-100 py-8 px-4">
        <div class="container mx-auto">
            <ul class="breadcrumb">
                <li>
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li>
                    <a href="#" aria-label="current-page">Shopping Cart</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- END: BREADCRUMB -->

    <!-- START: COMPLETE YOUR ROOM -->
    <section class="md:py-16">
        <div class="container mx-auto px-4">
            <div class="-mx-4 flex flex-wrap">
                <div class="mb-4 w-full px-4 md:mb-0 md:w-8/12" id="shopping-cart">
                    <div class="flex-start mb-4 mt-8 flex border-b border-gray-200 pb-3 md:border-b-0">
                        <h3 class="text-2xl">Shopping Cart</h3>
                    </div>

                    <div class="mb-4 hidden border-b border-gray-200 md:block">
                        <div class="flex-start -mx-4 flex items-center pb-2">
                            <div class="flex-none px-4">
                                <div class="" style="width: 90px">
                                    <h6>Photo</h6>
                                </div>
                            </div>
                            <div class="w-5/12 px-4">
                                <div class="">
                                    <h6>Product</h6>
                                </div>
                            </div>
                            <div class="w-5/12 px-4">
                                <div class="">
                                    <h6>Price</h6>
                                </div>
                            </div>
                            <div class="w-2/12 px-4">
                                <div class="text-center">
                                    <h6>Action</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p id="cart-empty" class="hidden py-8 text-center">
                        Ooops... Cart is empty
                        <a href="#" class="underline">Shop Now</a>
                    </p>

                    <!-- START: ROW 1 -->
                    <div class="flex-start -mx-4 mb-4 flex flex-wrap items-center" data-row="1">
                        <div class="flex-none px-4">
                            <div class="" style="width: 90px; height: 90px">
                                <img src="{{ url('./frontend/images/content/chair-1.png') }}" alt="chair-1"
                                    class="h-full w-full rounded-xl object-cover" />
                            </div>
                        </div>
                        <div class="w-auto flex-1 px-4 md:w-5/12">
                            <div class="">
                                <h6 class="text-lg font-semibold leading-8 md:text-xl">
                                    Saman Kakka
                                </h6>
                                <span class="text-sm md:text-lg">Office Room</span>
                                <h6 class="block text-base font-semibold md:hidden md:text-lg">
                                    IDR 28.000.000
                                </h6>
                            </div>
                        </div>
                        <div class="hidden w-auto flex-none px-4 md:block md:w-5/12 md:flex-1">
                            <div class="">
                                <h6 class="text-lg font-semibold">IDR 28.000.000</h6>
                            </div>
                        </div>
                        <div class="w-2/12 px-4">
                            <div class="text-center">
                                <button data-delete-item="1" class="border-none px-3 py-1 text-red-600 focus:outline-none">
                                    X
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END: ROW 1 -->

                    <!-- START: ROW 2 -->
                    <div class="flex-start -mx-4 mb-4 flex flex-wrap items-center" data-row="2">
                        <div class="flex-none px-4">
                            <div class="" style="width: 90px; height: 90px">
                                <img src="{{ url('./frontend/images/content/chair-2.png') }}" alt="chair-2"
                                    class="h-full w-full rounded-xl object-cover" />
                            </div>
                        </div>
                        <div class="w-auto flex-1 px-4 md:w-5/12">
                            <div class="">
                                <h6 class="text-lg font-semibold leading-8 md:text-xl">
                                    Green Seat
                                </h6>
                                <span class="text-sm md:text-lg">Office Room</span>
                                <h6 class="block text-base font-semibold md:hidden md:text-lg">
                                    IDR 28.000.000
                                </h6>
                            </div>
                        </div>
                        <div class="hidden w-auto flex-none px-4 md:block md:w-5/12 md:flex-1">
                            <div class="">
                                <h6 class="text-lg font-semibold">IDR 12.500.000</h6>
                            </div>
                        </div>
                        <div class="w-2/12 px-4">
                            <div class="text-center">
                                <button data-delete-item="2" class="border-none px-3 py-1 text-red-600 focus:outline-none">
                                    X
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END: ROW 2 -->

                    <!-- START: ROW 3 -->
                    <div class="flex-start -mx-4 mb-4 flex flex-wrap items-center" data-row="3">
                        <div class="flex-none px-4">
                            <div class="" style="width: 90px; height: 90px">
                                <img src="{{ url('./frontend/images/content/chair-3.png') }}" alt="chair-3"
                                    class="h-full w-full rounded-xl object-cover" />
                            </div>
                        </div>
                        <div class="w-auto flex-1 px-4 md:w-5/12">
                            <div class="">
                                <h6 class="text-lg font-semibold leading-8 md:text-xl">
                                    Pacific
                                </h6>
                                <span class="text-sm md:text-lg">Office Room</span>
                                <h6 class="block text-base font-semibold md:hidden md:text-lg">
                                    IDR 28.000.000
                                </h6>
                            </div>
                        </div>
                        <div class="hidden w-auto flex-none px-4 md:block md:w-5/12 md:flex-1">
                            <div class="">
                                <h6 class="text-lg font-semibold">IDR 88.800.000</h6>
                            </div>
                        </div>
                        <div class="w-2/12 px-4">
                            <div class="text-center">
                                <button data-delete-item="3" class="border-none px-3 py-1 text-red-600 focus:outline-none">
                                    X
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END: ROW 3 -->
                </div>
                <div class="w-full md:w-4/12 md:px-4" id="shipping-detail">
                    <div class="bg-gray-100 px-4 py-6 md:rounded-3xl md:p-8">
                        <form action="success.html">
                            <div class="flex-start mb-6 flex">
                                <h3 class="text-2xl">Shipping Details</h3>
                            </div>

                            <div class="mb-4 flex flex-col">
                                <label for="complete-name" class="mb-2 text-sm">Complete Name</label>
                                <input data-input type="text" id="complete-name"
                                    class="rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm focus:border-blue-200 focus:outline-none"
                                    placeholder="Input your name" />
                            </div>

                            <div class="mb-4 flex flex-col">
                                <label for="email" class="mb-2 text-sm">Email Address</label>
                                <input data-input type="email" id="email"
                                    class="rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm focus:border-blue-200 focus:outline-none"
                                    placeholder="Input your email address" />
                            </div>

                            <div class="mb-4 flex flex-col">
                                <label for="address" class="mb-2 text-sm">Address</label>
                                <input data-input type="text" id="address"
                                    class="rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm focus:border-blue-200 focus:outline-none"
                                    placeholder="Input your address" />
                            </div>

                            <div class="mb-4 flex flex-col">
                                <label for="phone-number" class="mb-2 text-sm">Phone Number</label>
                                <input data-input type="tel" id="phone-number"
                                    class="rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm focus:border-blue-200 focus:outline-none"
                                    placeholder="Input your phone number" />
                            </div>

                            <div class="mb-4 flex flex-col">
                                <label for="complete-name" class="mb-2 text-sm">Choose Courier</label>
                                <div class="-mx-2 flex flex-wrap">
                                    <div class="mb-4 h-24 w-6/12 px-2">
                                        <button type="button" data-value="fedex" data-name="courier"
                                            class="flex h-full w-full items-center justify-center rounded-xl border border-gray-200 bg-white focus:border-red-200 focus:outline-none">
                                            <img src="{{ url('./frontend/images/content/logo-fedex.svg') }}"
                                                alt="Logo Fedex" class="max-h-full object-contain" />
                                        </button>
                                    </div>
                                    <div class="mb-4 h-24 w-6/12 px-2">
                                        <button type="button" data-value="dhl" data-name="courier"
                                            class="flex h-full w-full items-center justify-center rounded-xl border border-gray-200 bg-white focus:border-red-200 focus:outline-none">
                                            <img src="{{ url('./frontend/images/content/logo-dhl.svg') }}" alt="Logo dhl"
                                                class="max-h-full object-contain" />
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 flex flex-col">
                                <label for="complete-name" class="mb-2 text-sm">Choose Payment</label>
                                <div class="-mx-2 flex flex-wrap">
                                    <div class="mb-4 h-24 w-6/12 px-2">
                                        <button type="button" data-value="midtrans" data-name="payment"
                                            class="flex h-full w-full items-center justify-center rounded-xl border border-gray-200 bg-white focus:border-red-200 focus:outline-none">
                                            <img src="{{ url('./frontend/images/content/logo-midtrans.png') }}"
                                                alt="Logo midtrans" class="max-h-full object-contain" />
                                        </button>
                                    </div>
                                    <div class="mb-4 h-24 w-6/12 px-2">
                                        <button type="button" data-value="mastercard" data-name="payment"
                                            class="flex h-full w-full items-center justify-center rounded-xl border border-gray-200 bg-white focus:border-red-200 focus:outline-none">
                                            <img src="{{ url('./frontend/images/content/logo-mastercard.svg') }}"
                                                alt="Logo mastercard" />
                                        </button>
                                    </div>
                                    <div class="mb-4 h-24 w-6/12 px-2">
                                        <button type="button" data-value="bitcoin" data-name="payment"
                                            class="flex h-full w-full items-center justify-center rounded-xl border border-gray-200 bg-white focus:border-red-200 focus:outline-none">
                                            <img src="{{ url('./frontend/images/content/logo-bitcoin.svg') }}"
                                                alt="Logo bitcoin" class="max-h-full object-contain" />
                                        </button>
                                    </div>
                                    <div class="mb-4 h-24 w-6/12 px-2">
                                        <button type="button" data-value="american-express" data-name="payment"
                                            class="flex h-full w-full items-center justify-center rounded-xl border border-gray-200 bg-white focus:border-red-200 focus:outline-none">
                                            <img src="{{ url('./frontend/images/content/logo-american-express.svg') }}"
                                                alt="Logo american-logo-american-express" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" disabled
                                    class="w-full rounded-full bg-pink-400 py-3 px-6 text-lg text-black transition-all duration-200 hover:bg-black hover:text-pink-400 focus:text-black focus:outline-none">
                                    Checkout Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: COMPLETE YOUR ROOM -->
@endsection
