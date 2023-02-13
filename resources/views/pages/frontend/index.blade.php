@extends('layouts.frontend')

@section('content')
    <!-- START: HERO -->
    <section class="hero flex items-center">
        <div class="hero-caption absolute inset-0 z-20 flex w-full flex-col justify-center text-center md:relative md:w-1/2">
            <h1 class="text-3xl font-semibold leading-tight md:text-5xl">
                The Room <br class="" />You've Dreaming
            </h1>
            <h2 class="my-6 px-8 text-base tracking-wide md:px-0 md:text-lg">
                Kami menyediakan furniture berkelas yang
                <br class="hidden lg:block" />membuat ruangan terasa homey
            </h2>
            <div>
                <a href="#browse-the-room"
                    class="mt-4 inline-block flex-none rounded-full bg-pink-400 px-8 py-3 text-black transition duration-200 hover:bg-black hover:text-pink-400">Explore
                    Now</a>
            </div>
        </div>
        <div class="inset-0 w-full md:relative md:w-1/2">
            <div class="hero-image relative">
                <div class="overlay opacity-35 inset-0 z-10 bg-black"></div>
                <div class="overlay right-0 bottom-0 md:inset-0">
                    <button class="video hero-cta modal-trigger z-30 focus:outline-none"
                        data-content='<div class="md:w-88 relative z-50 w-screen pb-56 md:pb-56">
              <div class="absolute h-full w-full">
                <iframe
                  width="100%"
                  height="100%"
                  src="https://www.youtube.com/embed/3h0_v1cdUIA"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                ></iframe>
              </div>
            </div>'>
                    </button>
                </div>
                <img src="{{ url('./frontend/images/content/image-section-1.png') }}" alt="hero 1"
                    class="absolute inset-0 h-full w-full object-cover object-center md:relative" />
            </div>
        </div>
    </section>
    <!-- END: HERO -->

    <!-- START: BROWSE THE ROOM -->
    <section class="flex bg-gray-100 py-16 px-4" id="browse-the-room">
        <div class="container mx-auto">
            <div class="flex-start mb-4 flex">
                <h3 class="text-2xl font-semibold capitalize">
                    browse the room <br class="" />that we designed for you
                </h3>
            </div>
            <div class="grid grid-cols-9 grid-rows-2 gap-4">
                <div class="card relative col-span-9 row-span-1 md:col-span-4" style="height: 180px">
                    <div class="card-shadow rounded-xl">
                        <img src="{{ url('./frontend/images/content/image-catalog-1.png') }}" alt=""
                            class="overlay h-full w-full overflow-hidden rounded-xl object-cover object-center" />
                    </div>
                    <div class="overlay left-0 top-0 bottom-0 flex flex-col justify-center pl-48 md:pl-72">
                        <h5 class="text-lg font-semibold">Living Room</h5>
                        <span class="">18.309 items</span>
                    </div>
                    <a href="details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <div class="card relative col-span-9 row-span-1 md:col-span-2 md:row-span-2">
                    <div class="card-shadow rounded-xl">
                        <img src="{{ url('./frontend/images/content/image-catalog-3.png') }}" alt=""
                            class="overlay h-full w-full overflow-hidden rounded-xl object-cover object-center" />
                    </div>
                    <div
                        class="overlay right-0 left-0 top-0 bottom-0 flex flex-col justify-center pl-48 pt-0 md:bottom-auto md:items-center md:pl-0 md:pt-12">
                        <h5 class="text-lg font-semibold">Decoration</h5>
                        <span class="">77.392 items</span>
                    </div>
                    <a href="details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <div class="card relative col-span-9 row-span-1 md:col-span-3 md:row-span-2">
                    <div class="card-shadow rounded-xl">
                        <img src="{{ url('./frontend/images/content/image-catalog-4.png') }}" alt=""
                            class="overlay h-full w-full overflow-hidden rounded-xl object-cover object-center" />
                    </div>
                    <div
                        class="overlay right-0 left-0 top-0 bottom-0 flex flex-col justify-center pl-48 pt-0 md:bottom-auto md:items-center md:pl-0 md:pt-12">
                        <h5 class="text-lg font-semibold">Living Room</h5>
                        <span class="">22.094 items</span>
                    </div>
                    <a href="details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <div class="card relative col-span-9 row-span-1 md:col-span-4">
                    <div class="card-shadow rounded-xl">
                        <img src="{{ url('./frontend/images/content/image-catalog-2.png') }}" alt=""
                            class="overlay h-full w-full overflow-hidden rounded-xl object-cover object-center" />
                    </div>
                    <div class="overlay left-0 top-0 bottom-0 flex flex-col justify-center pl-48 md:pl-72">
                        <h5 class="text-lg font-semibold">Children Room</h5>
                        <span class="">837 items</span>
                    </div>
                    <a href="details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END: BROWSE THE ROOM -->

    <!-- START: JUST ARRIVED -->
    <section class="flex flex-col py-16">
        <div class="container mx-auto mb-4">
            <div class="mb-4 flex justify-center text-center">
                <h3 class="text-2xl font-semibold capitalize">
                    Just Arrived <br class="" />this summer for you
                </h3>
            </div>
        </div>
        <div class="overflow-x-hidden px-4" id="carousel">
            <div class="container mx-auto"></div>
            <!-- <div class="z-10 overflow-hidden"> -->
            <div class="relative -mx-4 flex flex-row">
                <!-- START: JUST ARRIVED ROW 1 -->
                <div class="card group relative px-4">
                    <div class="card-shadow relative overflow-hidden rounded-xl" style="width: 287px; height: 386px">
                        <div
                            class="bg-opacity-35 absolute flex h-full w-full items-center justify-center bg-black opacity-0 transition duration-200 group-hover:opacity-100">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-white text-black">
                                <svg class="fill-current" width="43" height="24" viewBox="0 0 43 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z" />
                                    <path
                                        d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z" />
                                </svg>
                            </div>
                        </div>
                        <img src="{{ url('./frontend/images/content/image-arrived-1.png') }}" alt=""
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <h5 class="mt-4 text-lg font-semibold">Cangkir Mauttie</h5>
                    <span class="">IDR 89.300</span>
                    <a href="#details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <!-- END: JUST ARRIVED ROW 1 -->

                <!-- START: JUST ARRIVED ROW 2 -->
                <div class="card group relative px-4">
                    <div class="card-shadow relative overflow-hidden rounded-xl" style="width: 287px; height: 386px">
                        <div
                            class="bg-opacity-35 absolute flex h-full w-full items-center justify-center bg-black opacity-0 transition duration-200 group-hover:opacity-100">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-white text-black">
                                <svg class="fill-current" width="43" height="24" viewBox="0 0 43 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z" />
                                    <path
                                        d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z" />
                                </svg>
                            </div>
                        </div>
                        <img src="{{ url('./frontend/images/content/image-arrived-2.png') }}" alt=""
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <h5 class="mt-4 text-lg font-semibold">Bankyu Minimay</h5>
                    <span class="">IDR 67.899</span>
                    <a href="#details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <!-- END: JUST ARRIVED ROW 2 -->

                <!-- START: JUST ARRIVED ROW 3 -->
                <div class="card group relative px-4">
                    <div class="card-shadow relative overflow-hidden rounded-xl" style="width: 287px; height: 386px">
                        <div
                            class="bg-opacity-35 absolute flex h-full w-full items-center justify-center bg-black opacity-0 transition duration-200 group-hover:opacity-100">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-white text-black">
                                <svg class="fill-current" width="43" height="24" viewBox="0 0 43 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z" />
                                    <path
                                        d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z" />
                                </svg>
                            </div>
                        </div>
                        <img src="{{ url('./frontend/images/content/image-arrived-3.png') }}" alt=""
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <h5 class="mt-4 text-lg font-semibold">Buku Sidu Edition</h5>
                    <span class="">IDR 120.699</span>
                    <a href="#details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <!-- END: JUST ARRIVED ROW 3 -->

                <!-- START: JUST ARRIVED ROW 4 -->
                <div class="card group relative px-4">
                    <div class="card-shadow relative overflow-hidden rounded-xl" style="width: 287px; height: 386px">
                        <div
                            class="bg-opacity-35 absolute flex h-full w-full items-center justify-center bg-black opacity-0 transition duration-200 group-hover:opacity-100">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-white text-black">
                                <svg class="fill-current" width="43" height="24" viewBox="0 0 43 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z" />
                                    <path
                                        d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z" />
                                </svg>
                            </div>
                        </div>
                        <img src="{{ url('./frontend/images/content/image-arrived-4.png') }}" alt=""
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <h5 class="mt-4 text-lg font-semibold">Watch Notes X</h5>
                    <span class="">IDR 1.973.000</span>
                    <a href="#details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <!-- END: JUST ARRIVED ROW 4 -->

                <!-- START: JUST ARRIVED ROW 5 -->
                <div class="card group relative px-4">
                    <div class="card-shadow relative overflow-hidden rounded-xl" style="width: 287px; height: 386px">
                        <div
                            class="bg-opacity-35 absolute flex h-full w-full items-center justify-center bg-black opacity-0 transition duration-200 group-hover:opacity-100">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-white text-black">
                                <svg class="fill-current" width="43" height="24" viewBox="0 0 43 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z" />
                                    <path
                                        d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z" />
                                </svg>
                            </div>
                        </div>
                        <img src="{{ url('./frontend/images/content/image-arrived-5.png') }}" alt=""
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <h5 class="mt-4 text-lg font-semibold">Racking Plants</h5>
                    <span class="">IDR 599.400</span>
                    <a href="#details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <!-- END: JUST ARRIVED ROW 5 -->

                <!-- START: JUST ARRIVED ROW 3 -->
                <div class="card group relative px-4">
                    <div class="card-shadow relative overflow-hidden rounded-xl" style="width: 287px; height: 386px">
                        <div
                            class="bg-opacity-35 absolute flex h-full w-full items-center justify-center bg-black opacity-0 transition duration-200 group-hover:opacity-100">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-white text-black">
                                <svg class="fill-current" width="43" height="24" viewBox="0 0 43 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z" />
                                    <path
                                        d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z" />
                                </svg>
                            </div>
                        </div>
                        <img src="{{ url('./frontend/images/content/image-arrived-3.png') }}" alt=""
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <h5 class="mt-4 text-lg font-semibold">Racking Plants</h5>
                    <span class="">IDR 599.400</span>
                    <a href="#details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <!-- END: JUST ARRIVED ROW 3 -->

                <!-- START: JUST ARRIVED ROW 1 -->
                <div class="card group relative px-4">
                    <div class="card-shadow relative overflow-hidden rounded-xl" style="width: 287px; height: 386px">
                        <div
                            class="bg-opacity-35 absolute flex h-full w-full items-center justify-center bg-black opacity-0 transition duration-200 group-hover:opacity-100">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-white text-black">
                                <svg class="fill-current" width="43" height="24" viewBox="0 0 43 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z" />
                                    <path
                                        d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z" />
                                </svg>
                            </div>
                        </div>
                        <img src="{{ url('./frontend/images/content/image-arrived-1.png') }}" alt=""
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <h5 class="mt-4 text-lg font-semibold">Racking Plants</h5>
                    <span class="">IDR 599.400</span>
                    <a href="#details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
                <!-- END: JUST ARRIVED ROW 1 -->
            </div>
            <!-- </div> -->
        </div>
    </section>
    <!-- END: JUST ARRIVED -->

    <!-- START: CLIENTS -->
    <section class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="my-4 w-full flex-auto px-4 md:my-0 md:w-auto md:flex-initial md:px-6">
                <img src="{{ url('./frontend/images/content/logo-adobe.svg') }}" alt="" class="mx-auto" />
            </div>
            <div class="my-4 w-full flex-auto px-4 md:my-0 md:w-auto md:flex-initial md:px-6">
                <img src="{{ url('./frontend/images/content/logo-ikea.svg') }}" alt="" class="mx-auto" />
            </div>
            <div class="my-4 w-full flex-auto px-4 md:my-0 md:w-auto md:flex-initial md:px-6">
                <img src="{{ url('./frontend/images/content/logo-hermanmiller.svg') }}" alt=""
                    class="mx-auto" />
            </div>
            <div class="my-4 w-full flex-auto px-4 md:my-0 md:w-auto md:flex-initial md:px-6">
                <img src="{{ url('./frontend/images/content/logo-miele.svg') }}" alt="" class="mx-auto" />
            </div>
        </div>
    </section>
    <!-- END: CLIENTS -->

    <!-- START: ASIDE MENU -->
    <section class="">
        <div class="mt-16 border-t border-b border-gray-200 py-12 px-4">
            <div class="mb-8 flex justify-center">
                <img src="{{ url('/frontend/images/content/logo.png') }}"
                    alt="Luxspace | Fulfill your house with beautiful furniture" />
            </div>
            <aside class="container mx-auto">
                <div class="-mx-4 flex flex-wrap justify-center">
                    <div class="accordion mb-4 w-full px-4 md:mb-0 md:w-2/12">
                        <h5 class="relative mb-2 text-lg font-semibold">Overview</h5>
                        <ul class="invisible h-0 overflow-hidden md:visible md:h-auto">
                            <li>
                                <a href="#" class="block py-1 hover:underline">Shipping</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 hover:underline">Refund</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 hover:underline">Promotion</a>
                            </li>
                        </ul>
                    </div>
                    <div class="accordion mb-4 w-full px-4 md:mb-0 md:w-2/12">
                        <h5 class="relative mb-2 text-lg font-semibold">Company</h5>
                        <ul class="invisible h-0 overflow-hidden md:visible md:h-auto">
                            <li>
                                <a href="#" class="block py-1 hover:underline">About</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 hover:underline">Career</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 hover:underline">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="accordion mb-4 w-full px-4 md:mb-0 md:w-2/12">
                        <h5 class="relative mb-2 text-lg font-semibold">Explore</h5>
                        <ul class="invisible h-0 overflow-hidden md:visible md:h-auto">
                            <li>
                                <a href="#" class="block py-1 hover:underline">Terms & Conds</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="block py-1 hover:underline">For Developer</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-4 w-full px-4 md:mb-0 md:w-3/12">
                        <h5 class="relative mb-2 text-lg font-semibold">
                            Special Letter
                        </h5>
                        <form action="#">
                            <label class="relative w-full">
                                <input type="text" class="w-full rounded-xl bg-gray-100 py-3 px-5 focus:outline-none"
                                    placeholder="Your email adress" />
                                <button class="absolute right-0 rounded-xl bg-pink-400 p-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.6177 0.411971C23.6163 0.410624 23.6152 0.409187 23.6138 0.407839C23.6124 0.406492 23.6109 0.405414 23.6095 0.404157C23.236 0.049307 22.7002 -0.0573008 22.2098 0.126411L0.833871 8.13353C0.268743 8.34518 -0.0623361 8.87521 0.0098048 9.4523C0.0821332 10.0294 0.53462 10.4694 1.13589 10.547L11.5833 11.8968C11.6028 11.8994 11.6185 11.9143 11.6212 11.9332L13.0301 21.9417C13.1112 22.5177 13.5704 22.9512 14.1729 23.0204C14.2279 23.0268 14.2824 23.0298 14.3364 23.0298C14.8735 23.0298 15.3486 22.7229 15.5495 22.231L23.9077 1.75274C24.0994 1.28302 23.9882 0.76983 23.6177 0.411971ZM1.30534 9.34475C1.2819 9.34169 1.27136 9.34039 1.26728 9.30788C1.26325 9.27537 1.27319 9.27159 1.29508 9.26347L21.2946 1.77187L11.9404 10.7333C11.8794 10.7163 1.30534 9.34475 1.30534 9.34475ZM14.37 21.7892C14.3614 21.8102 14.358 21.8198 14.3236 21.8158C14.2897 21.8119 14.2883 21.8017 14.2852 21.7794C14.2852 21.7794 12.8535 11.6495 12.8358 11.5911L22.19 2.62972L14.37 21.7892Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </label>
                        </form>
                    </div>
                </div>
            </aside>
        </div>
    </section>
    <!-- END: ASIDE MENU -->
@endsection
