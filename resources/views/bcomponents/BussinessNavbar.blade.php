<header class="absolute inset-x-0 top-0 z-50">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">The Savants</span>
                @include('components.application-logo')
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                id="mobile-menu-button">
                <span class="sr-only">Menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            {{-- <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
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
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="/school" class="block font-semibold text-gray-900">
                                    Manage your School
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Get a better Management system for your school</p>
                            </div>
                        </div>

                        <!-- Company Management System -->
                        <div
                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div
                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    Manage your Business
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Get a better Management system for your Business</p>
                            </div>
                        </div>

                        <!-- Manage your shops -->
                        <div
                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div
                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    Manage your shops
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>
                                <p class="mt-1 text-gray-600 text-red-700">Coming soon</p>
                            </div>
                        </div>

                        <!-- Hardware -->
                        <div
                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div
                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18a2.25 2.25 0 002.25 2.25zm9.75-9.75h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25zm0 9.75h2.25a2.25 2.25 0 002.25-2.25v-2.25a2.25 2.25 0 00-2.25-2.25h-2.25A2.25 2.25 0 0013.5 18v2.25a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    Hardware
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Let's Order Hardware our Hardware Product</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                        <a href="#"
                            class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path
                                    d="M10 8.25a1.25 1.25 0 100-2.5 1.25 1.25 0 000 2.5zM10 11.25a1.25 1.25 0 100-2.5 1.25 1.25 0 000 2.5zM10 14.25a1.25 1.25 0 100-2.5 1.25 1.25 0 000 2.5z" />
                            </svg>
                            Watch demo
                        </a>

                        <a href="#"
                            class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path
                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016.003 4H3.997a2 2 0 00-1.994 1.884zM18 8.118l-8 4-8-4V14a2 2 0 001.997 2h12.006A2 2 0 0018 14V8.118z" />
                            </svg>
                            Contact sales
                        </a>
                    </div>
                </div>
            </div> --}}

            <a href="/office" class="text-sm font-semibold leading-6 text-gray-900">Feature</a>
            <a href="/bPrice" class="text-sm font-semibold leading-6 text-gray-900">Pricing</a>
            <a href="/btemplate" class="text-sm font-semibold leading-6 text-gray-900">Templates</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Demo</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                    aria-hidden="true">&rarr;</span></a>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div class="lg:hidden hidden" id="mobile-menu" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-10"></div>
        <div
            class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">the Savants</span>
                    @include('components.application-logo')
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
                        
                        <a href="/school"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Feature</a>
                            
                        <a href="/schoolPrice"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Princing</a>
                            
                        <a href="/template"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Templates</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Demo</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                    </div>
                    <div class="py-6">
                        <a href="{{ route('login') }}"
                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                            in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<script>
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
