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
                    <a href="#" aria-label="current-page">Success Checkout</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- END: BREADCRUMB -->

    <!-- START: CONGRATS -->
    <section class="">
        <div class="container mx-auto min-h-screen">
            <div class="flex flex-col items-center justify-center">
                <div class="w-full text-center md:w-4/12">
                    <img src="{{ url('./frontend/images/content/illustration-success.png') }}"
                        alt="congrats illustration" />
                    <h2 class="mb-6 text-3xl font-semibold">Ah yes it’s success!</h2>
                    <p class="mb-12 text-lg">
                        Furniture yang anda beli akan kami kirimkan saat ini juga so now please sit tight and be ready for
                        it
                    </p>
                    <a href="details.html"
                        class="w-full cursor-pointer rounded-full bg-red-200 py-3 px-8 text-lg text-gray-900 transition-all duration-200 focus:text-black focus:outline-none">
                        Back to Shop
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END: CONGRATS -->
@endsection
