<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')


</head>

<body>
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50 ">
            <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="sr-only">The Savants</span>
                        @include('components.application-logo')
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white"
                        id="mobile-menu-button">
                        <span class="sr-only">Menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>

                <div class="hidden lg:flex lg:gap-x-12 ">
                    <a href="/" class="text-lg font-semibold leading-6 hover:text-red-600 text-white">Home</a>
                    <a href="/feature" class="text-lg font-semibold leading-6 hover:text-red-600 text-white">Service</a>
                    <div class="relative">
                        <button type="button" class="flex items-center gap-x-1 text-lg font-bold leading-6 text-white"
                            aria-expanded="false" id="product-menu-button">
                            Product
                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Product flyout menu -->
                        <div class="absolute left-0 z-10 mt-3 hidden w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5"
                            id="product-menu">
                            <div class="p-4">

                                <!-- School Management System -->
                                <div
                                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                    <div
                                        class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="/school" class="block font-semibold text-gray-900">
                                            Manage your School
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Get a better Management system for your school.
                                        </p>
                                    </div>
                                </div>


                                <!-- Company Management System -->
                                <div
                                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                    <div
                                        class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="/office" class="block font-semibold text-gray-900">
                                            Manage your Business
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Get a better Management system for your Business
                                        </p>
                                    </div>
                                </div>



                                <!-- Manage your shops -->
                                <div
                                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                    <div
                                        class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="shop" class="block font-semibold text-gray-900">
                                            Manage your shops
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>

                                    </div>
                                </div>

                                <!-- Hardware -->
                                <div
                                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                    <div
                                        class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18a2.25 2.25 0 002.25 2.25zm9.75-9.75h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25zm0 9.75h2.25a2.25 2.25 0 002.25-2.25v-2.25a2.25 2.25 0 00-2.25-2.25h-2.25A2.25 2.25 0 0013.5 18v2.25a2.25 2.25 0 002.25 2.25z" />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="hardware" class="block font-semibold text-gray-900">
                                            Hardware
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Let's Order Hardware our Hardware Product</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <a href="/ourwork" class="text-lg font-semibold leading-6 hover:text-red-600 text-white">Our
                        Work</a>
                    <a href="/about" class="text-lg font-semibold hover:text-red-600 leading-6 text-white">About
                        Us</a>
                </div>
                <!-- Display admin name or login button -->
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">

                    <div class="flex items-center space-x-4">
                        <!-- WhatsApp Button -->
                        <a href="https://wa.me/919056425289" target="_blank" class="flex items-center space-x-2">
                            <!-- Rounded WhatsApp Icon -->
                            <div class="flex ">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                    viewBox="0 0 48 48">
                                    <path fill="#fff"
                                        d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                    </path>
                                    <path fill="#fff"
                                        d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                    </path>
                                    <path fill="#cfd8dc"
                                        d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                    </path>
                                    <path fill="#40c351"
                                        d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                    </path>
                                    <path fill="#fff" fill-rule="evenodd"
                                        d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <!-- WhatsApp Number -->
                        </a>

                        <!-- Talk to Us Button -->
                        <a href="#contactModal" class="text-lg font-semibold hover:text-red-600 leading-6 text-white"
                            onclick="toggleModal(true)">
                            Talk to Us
                        </a>
                    </div>


                </div>



            </nav>

            <!-- Mobile menu -->
            <div class="lg:hidden hidden" id="mobile-menu" role="dialog" aria-modal="true">
                <div class="fixed inset-0 z-10"></div>
                <div
                    class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">The Savants</span>
                            <img class="h-8 w-auto" src="{{ asset('img/logo.png') }}" alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" id="close-mobile-menu">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="/"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Home</a>
                                <a href="/feature"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Service</a>

                                <div class="-mx-3">
                                    <button type="button"
                                        class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                        aria-controls="disclosure-1" aria-expanded="false">
                                        Product
                                        <svg class="h-5 w-5 flex-none transition-transform" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div class="mt-2 space-y-2 hidden" id="disclosure-1">

                                        <a href="/school"
                                            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Manage
                                            your School</a>
                                        <a href="/office"
                                            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Manage
                                            your Business</a>
                                        <a href="/shop"
                                            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Manage
                                            your shops</a>
                                        <a href="/hardware"
                                            class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Hardware</a>

                                    </div>
                                </div>
                                <a href="/ourwork"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                                <a href="/about"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">About
                                    Us</a>
                            </div>


                            <div class="py-6">


                                <a href="#contactModal"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 "
                                    onclick="toggleModal(true)">
                                    Talk to Us
                                </a>
                                <a href="https://wa.me/919056425289" target="_blank"
                                    class="flex items-center space-x-2">
                                    <!-- Rounded WhatsApp Icon -->
                                    <div class="flex ">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48"
                                            height="48" viewBox="0 0 48 48">
                                            <path fill="#fff"
                                                d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                            </path>
                                            <path fill="#fff"
                                                d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                            </path>
                                            <path fill="#cfd8dc"
                                                d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                            </path>
                                            <path fill="#40c351"
                                                d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                            </path>
                                            <path fill="#fff" fill-rule="evenodd"
                                                d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <!-- WhatsApp Number -->
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Modal Overlay -->
        <div id="contactModal"
            class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden z-50">
            <!-- Modal Content -->
            <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg space-y-4">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold text-gray-800">Talk to Us</h2>
                    <button onclick="toggleModal(false)" class="text-gray-400 hover:text-gray-600">
                        ✕
                    </button>
                </div>
                @if (Session::has('success'))
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var successMessage = '{{ Session::get('success') }}';
                            if (successMessage) {
                                alert(successMessage);
                            }
                        });
                    </script>
                @endif
                <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" name="name" required
                                class="mt-1 w-full px-3 py-2 text-sm bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" required
                                class="mt-1 w-full px-3 py-2 text-sm bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Phone</label>
                            <input type="text" name="phone" required
                                class="mt-1 w-full px-3 py-2 text-sm bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Organization</label>
                            <input type="text" name="company" required
                                class="mt-1 w-full px-3 py-2 text-sm bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" rows="3" required
                            class="mt-1 w-full px-3 py-2 text-sm bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                    </div>
                    <button id="submitBtn" type="submit"
                        class="w-full py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 flex justify-center items-center">
                        <span id="buttonText">Submit</span>
                        <span id="loadingSpinner"
                            class="hidden ml-2 w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin"></span>
                    </button>
                </form>
            </div>
        </div>




        <section id="about"
            class="min-h-screen bg-[#0f172a] flex items-center justify-center pt-16 md:pt-20 py-30 text-white">
            <div class="container mx-auto px-6 lg:px-20 text-center">
                <!-- Heading -->
                <div class="mb-12 max-w-4xl mx-auto">
                    <h2 class="text-2xl md:text-4xl font-bold text-white text-center mb-10">
                        Internship Program by <span class="text-[#64FFDA]">The Savants</span> × <span
                            class="text-[#FFA500]">Bytelog</span>
                    </h2>
                    <p class="text-base md:text-lg text-gray-300">
                        Kickstart your professional journey with The Savants' industry-oriented internship programs.
                        Choose your track, pick a duration, and gain the confidence and competence to thrive in your
                        future career.
                    </p>
                </div>

                <!-- Highlights -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 text-center mb-16">
                    <div class="bg-[#1e293b] p-6 rounded-xl shadow-lg">
                        <h3 class="text-xl md:text-2xl font-semibold text-[#64FFDA] mb-2">Hands-on Projects</h3>
                        <p class="text-gray-300 text-sm md:text-base">Build real-world applications and solve practical
                            problems guided by industry mentors.</p>
                    </div>
                    <div class="bg-[#1e293b] p-6 rounded-xl shadow-lg">
                        <h3 class="text-xl md:text-2xl font-semibold text-[#64FFDA] mb-2">Domain Options</h3>
                        <p class="text-gray-300 text-sm md:text-base">Choose between Web Full Stack Development or
                            Electronics based on your passion and goals.</p>
                    </div>
                    <div class="bg-[#1e293b] p-6 rounded-xl shadow-lg">
                        <h3 class="text-xl md:text-2xl font-semibold text-[#64FFDA] mb-2">Flexible Durations</h3>
                        <p class="text-gray-300 text-sm md:text-base">Intern for 30 days, 45 days, or 6 months. Learn
                            at your pace, earn at your potential.</p>
                    </div>
                </div>

                <!-- CTA Button -->
                <div>
                    <a href="#register"
                        class="inline-block bg-[#64FFDA] text-black font-semibold py-3 px-8 rounded-xl shadow-md hover:bg-[#3de2c2] transition-all duration-300">
                        Apply for Internship
                    </a>
                </div>
            </div>
        </section>





        <section id="domains" class="bg-[#112240] py-16">
            <div class="container mx-auto px-4">
                <h3 class="text-3xl font-semibold text-center text-[#64FFDA] mb-10">Internship Domains</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
                    <!-- Web Full Stack Development -->
                    <div class="bg-[#1C2E4A] p-6 rounded-2xl shadow-md hover:shadow-xl transition">
                        <h4 class="text-2xl font-bold text-[#64FFDA] mb-2">Web Full Stack Development</h4>
                        <p class="text-gray-300 mb-4">Work on both frontend and backend technologies. Learn HTML, CSS,
                            JavaScript, React, Node.js, Express, MongoDB, and more. Collaborate on real-time projects to
                            strengthen your portfolio.</p>
                        <a href="/brochures/mern.pdf" download
                            class="inline-block bg-[#64FFDA] text-[#0A192F] px-4 py-2 rounded-lg font-semibold hover:bg-[#52ccb4] transition">
                            📄 Download Brochure
                        </a>
                    </div>
        
                    <!-- Embedded Systems -->
                    <div class="bg-[#1C2E4A] p-6 rounded-2xl shadow-md hover:shadow-xl transition">
                        <h4 class="text-2xl font-bold text-[#64FFDA] mb-2">Embedded Systems</h4>
                        <p class="text-gray-300 mb-4">Delve into embedded systems, circuit design, PCB prototyping, and
                            IoT integration. This track offers deep technical insights and hands-on electronics projects
                            tailored to industry standards.</p>
                        <a href="/brochures/embedded-systems.pdf" download
                            class="inline-block bg-[#64FFDA] text-[#0A192F] px-4 py-2 rounded-lg font-semibold hover:bg-[#52ccb4] transition">
                            📄 Download Brochure
                        </a>
                    </div>
        
                    <!-- Java Development -->
                    <div class="bg-[#1C2E4A] p-6 rounded-2xl shadow-md hover:shadow-xl transition">
                        <h4 class="text-2xl font-bold text-[#64FFDA] mb-2">Java Development</h4>
                        <p class="text-gray-300 mb-4">Dive deep into core and advanced Java concepts including OOP, JDBC,
                            Servlets, JSP, and Spring Framework. Build scalable applications and enhance your coding skills
                            through real-world software development projects.</p>
                        <a href="/brochures/JAVA.pdf" download
                            class="inline-block bg-[#64FFDA] text-[#0A192F] px-4 py-2 rounded-lg font-semibold hover:bg-[#52ccb4] transition">
                            📄 Download Brochure
                        </a>
                    </div>
        
                </div>
            </div>
        </section>
        
        


        <style>
            .diagonal-strike {
                position: relative;
                display: inline-block;
                color: #bbb;
            }
            .diagonal-strike::after {
                content: "";
                position: absolute;
                top: 50%;
                left: 0;
                width: 100%;
                height: 2px;
                background: red;
                transform: rotate(-15deg);
                transform-origin: center;
            }
        </style>
        
        <section id="durations" class="py-16">
            <div class="container mx-auto px-4 text-center">
                <h3 class="text-3xl font-semibold text-[#64FFDA] mb-6">Choose Your Ideal Internship Duration</h3>
                <p class="text-gray-400 max-w-3xl mx-auto mb-10">
                    Select the internship length that fits your learning goals, availability, and career aspirations.
                    Whether you're looking for a quick exposure or deep industry-level training, we’ve got you covered.
                </p>
        
                <div class="flex flex-col md:flex-row justify-center gap-8">
        
                    <!-- 30 Days Plan -->
                    <div class="bg-[#1C2E4A] p-6 rounded-2xl w-full md:w-1/4 shadow-md text-left flex flex-col justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-3 text-center">30 Days</h4>
                            <ul class="list-disc text-gray-400 pl-5 space-y-2">
                                <li>Introductory-level internship</li>
                                <li>Quick hands-on experience</li>
                                <li>One minor project</li>
                                <li>Certificate of Completion</li>
                                <li>Ideal for first-time interns</li>
                            </ul>
                        </div>
                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-400 mb-1">Current Price:</p>
                            <p class="text-lg">
                                <span class="diagonal-strike text-sm mr-2 text-gray-400">₹2000</span>
                                <span class="text-[#64FFDA] font-semibold">₹1000</span>
                                <span class="text-xs font-medium text-green-600 bg-green-100 px-2 py-0.5 rounded-full">
                                    50% OFF
                                </span>
                            </p>
                            {{-- <p class="text-sm text-red-400 mt-2 font-medium">⏳ The early bird ₹1000 offer has ended!</p> --}}
                            <p class="text-sm text-yellow-400 mt-1 font-medium">⚠️ Enroll before prices go up again!</p>
                        </div>
                        
                    </div>
        
                    <!-- 45 Days Plan -->
                    <div class="bg-[#1C2E4A] p-6 rounded-2xl w-full md:w-1/4 shadow-md text-left flex flex-col justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-3 text-center">45 Days</h4>
                            <ul class="list-disc text-gray-400 pl-5 space-y-2">
                                <li>Balanced mix of theory & practice</li>
                                <li>One major & one minor project</li>
                                <li>Live sessions with mentors</li>
                                <li>Feedback & evaluation reports</li>
                                <li>Certificate with performance rating</li>
                            </ul>
                        </div>
                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-400 mb-1">Current Price:</p>
                            <p class="text-lg">
                                <span class="diagonal-strike text-sm mr-2 text-gray-400">₹3000</span>
                                <span class="text-[#64FFDA] font-semibold">₹1500</span>
                                <span class="text-xs font-medium text-green-600 bg-green-100 px-2 py-0.5 rounded-full">
                                    50% OFF
                                </span>
                            </p>
                            {{-- <p class="text-sm text-red-400 mt-2 font-medium">⏳ The early bird ₹1500 offer has ended!</p> --}}
                            <p class="text-sm text-yellow-400 mt-1 font-medium">⚠️ Enroll before prices go up again!</p>
                        </div>
                    </div>
        
                    <!-- 6 Months Plan -->
                    <div class="bg-[#1C2E4A] p-6 rounded-2xl w-full md:w-1/4 shadow-md text-left flex flex-col justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-white mb-3 text-center">6 Months</h4>
                            <ul class="list-disc text-gray-400 pl-5 space-y-2">
                                <li>Industry-aligned long-term training</li>
                                <li>Multiple real-world projects</li>
                                <li>Resume building & mock interviews</li>
                                <li>Mentorship from senior developers</li>
                                <li>Priority job/internship referrals</li>
                                <li>Letter of Recommendation & Completion</li>
                            </ul>
                        </div>
                        
                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-400 mb-1">Current Price:</p>
                            <p class="text-lg">
                                <span class="diagonal-strike text-sm mr-2 text-gray-400">₹10000</span>
                                <span class="text-[#64FFDA] font-semibold">₹5000</span>
                                <span class="text-xs font-medium text-green-600 bg-green-100 px-2 py-0.5 rounded-full">
                                    50% OFF
                                </span>
                            </p>
                            {{-- <p class="text-sm text-red-400 mt-2 font-medium">⏳ The early bird ₹5000 offer has ended!</p> --}}
                            <p class="text-sm text-yellow-400 mt-1 font-medium">⚠️ Enroll before prices go up again!</p>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
        


        <section id="register" class="bg-[#0f172a] py-20 text-white">
            <div class="container mx-auto px-4 max-w-2xl">
                <h3 class="text-3xl font-semibold text-center text-[#64FFDA] mb-10">Register Now</h3>
                <form method="POST" action="/internship/register" enctype="multipart/form-data"
                    class="bg-[#1e293b] p-8 rounded-2xl shadow-lg space-y-5">
                    @csrf

                    <input name="name" placeholder="Name" required
                        class="w-full bg-[#0f172a] border border-gray-700 text-white px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#64FFDA]">

                    <input name="email" type="email" placeholder="Email" required
                        class="w-full bg-[#0f172a] border border-gray-700 text-white px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#64FFDA]">

                    <input name="phone" type="tel" placeholder="Enter your Phone Number" required
                        class="w-full bg-[#0f172a] border border-gray-700 text-white px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#64FFDA]">

                    <!-- New Fields -->
                    <input name="college_name" placeholder="College Name" required
                        class="w-full bg-[#0f172a] border border-gray-700 text-white px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#64FFDA]">

                    <input name="roll_number" placeholder="Roll Number" required
                        class="w-full bg-[#0f172a] border border-gray-700 text-white px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#64FFDA]">

                    <textarea name="address" placeholder="Address" rows="2" required
                        class="w-full bg-[#0f172a] border border-gray-700 text-white px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#64FFDA]"></textarea>

                    <select name="field" required
                        class="w-full bg-[#0f172a] border border-gray-700 text-white px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#64FFDA]">
                        <option value="">Select Field</option>
                        <option value="web">Web Full Stack Development</option>
                        <option value="electronics">Embedded Systems</option>
                        <option value="java">Java Development</option>

                    </select>

                    <select name="duration" required
                        class="w-full bg-[#0f172a] border border-gray-700 text-white px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#64FFDA]">
                        <option value="">Select Duration</option>
                        <option value="30">30 Days</option>
                        <option value="45">45 Days</option>
                        <option value="180">6 Months</option>
                    </select>

                    <textarea name="message" placeholder="Message (optional)" rows="4"
                        class="w-full bg-[#0f172a] border border-gray-700 text-white px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#64FFDA]"></textarea>

                    <div>
                        <label class="block text-sm mb-2">Upload Resume (PDF Only, optional)</label>
                        <input type="file" name="resume" accept="application/pdf"
                            class="w-full bg-[#0f172a] border border-gray-700 text-white px-4 py-3 rounded-xl file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-[#64FFDA] file:text-black">
                    </div>

                    <button type="submit"
                        class="bg-[#64FFDA] text-black font-bold py-3 px-6 rounded-xl hover:bg-[#38fcd3] transition-all duration-300 w-full">
                        Register
                    </button>
                </form>
            </div>
        </section>


        @include('components.blog')
        @include('components.contact')
        {{-- @include('components.team') --}}
        @include('components.footer')
    </div>

    <script>
        function toggleModal(show) {
            const modal = document.getElementById('contactModal');
            modal.classList.toggle('hidden', );
        }
        const form = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const buttonText = document.getElementById('buttonText');
        const loadingSpinner = document.getElementById('loadingSpinner');

        form.addEventListener('submit', function(e) {
            // Show spinner and disable button
            submitBtn.disabled = true;
            buttonText.textContent = 'Sending...';
            loadingSpinner.classList.remove('hidden');
        });
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const closeMobileMenuButton = document.getElementById('close-mobile-menu');
            const productMenuButton = document.getElementById('product-menu-button');
            const productMenu = document.getElementById('product-menu');
            const disclosureButton = document.querySelector('[aria-controls="disclosure-1"]');
            const disclosureContent = document.getElementById('disclosure-1');

            // Toggle mobile menu
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            closeMobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });

            // Toggle product menu
            productMenuButton.addEventListener('click', function() {
                productMenu.classList.toggle('hidden');
            });

            // Toggle disclosure for mobile product dropdown
            disclosureButton.addEventListener('click', function() {
                disclosureContent.classList.toggle('hidden');
            });
        });
    </script>

</body>

</html>
