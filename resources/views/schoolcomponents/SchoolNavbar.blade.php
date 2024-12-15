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
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
            <a href="/school" class="text-sm font-semibold leading-6 text-gray-900">Feature</a>
            <a href="/schoolPrice" class="text-sm font-semibold leading-6 text-gray-900">Pricing</a>
            <a href="/template" class="text-sm font-semibold leading-6 text-gray-900">Templates</a>
            <a href="https://school.thesavants.in/" class="text-sm font-semibold leading-6 text-gray-900">Demo</a>
            <a href="/about" class="text-sm font-semibold leading-6 text-gray-900">About Us</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            {{-- @auth
                <!-- When user is signed in, show their name -->
                <div class="flex items-center space-x-3">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>Hello, {{ Auth::user()->name }}</div>
        
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
        
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
        
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
        
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                    
                </div>
            @else
                <!-- Show Log in button if user is not signed in -->
                <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                        aria-hidden="true">&rarr;</span></a>
            @endauth --}}
            <div class="flex items-center space-x-4">
                <!-- WhatsApp Button -->
                <a href="https://wa.me/919056425289" target="_blank" class="flex items-center space-x-2">
                    <!-- Rounded WhatsApp Icon -->
                    <div class="flex items-center justify-center w-10 h-10 bg-green-500 text-white rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"
                            class="h-6 w-6">
                            <path
                                d="M128 24C66.393 24 16 74.393 16 136c0 22.03 5.714 43.568 16.516 62.266l-11.156 41.328a8 8 0 0 0 9.848 9.847l41.328-11.156C92.432 234.286 113.97 240 136 240c61.607 0 112-50.393 112-112S189.607 24 128 24Zm0 16c52.936 0 96 43.064 96 96s-43.064 96-96 96a95.68 95.68 0 0 1-45.96-11.113 7.998 7.998 0 0 0-5.508-.603l-34.89 9.423 9.423-34.89a8 8 0 0 0-.602-5.508A95.68 95.68 0 0 1 32 136c0-52.936 43.064-96 96-96ZM88.28 80a8 8 0 0 0-8.007 7.925c-.105 11.03 3.467 23.745 14.454 36.43 13.608 15.504 28.507 25.376 45.722 30.345 8.726 2.51 17.526 3.133 26.263 2.114 6.206-.705 11.566-6.052 11.566-12.272v-16.288a8 8 0 0 0-8.007-7.925h-21.566l-.088.007c-6.684.551-10.83 3.275-14.834 6.388-3.352 2.685-7.14 5.637-13.42 2.106-10.91-6.14-19.737-15.517-28.45-27.712-.11-.155-.218-.311-.33-.464-3.635-5.023-.957-8.48 1.615-11.038 1.574-1.568 3.34-3.292 5.228-5.226 3.367-3.539 5.998-7.627 6.306-14.261v-2.02a8 8 0 0 0-8.007-7.925H88.28Z" />
                        </svg>
                    </div>
                    <!-- WhatsApp Number -->
                </a>

                <!-- Talk to Us Button -->
                <a href="#contactModal" class="text-lg font-semibold hover:text-red-600 leading-6 text-gray-900"
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
                        <a href="/"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Home</a>
                            
                        
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
                        {{-- @auth
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="mt-3 space-y-1">
                            <x-responsive-nav-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-responsive-nav-link>
            
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
            
                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                            Log in
                        </a>
                    @endauth --}}

                    <a href="#contactModal" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 " onclick="toggleModal(true)">
                        Talk to Us
                    </a>
                    <a href="https://wa.me/919056425289" target="_blank" class="flex items-center space-x-2">
                        <!-- Rounded WhatsApp Icon -->
                        <div class="flex items-center justify-center w-10 h-10 bg-green-500 text-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"
                                class="h-6 w-6">
                                <path
                                    d="M128 24C66.393 24 16 74.393 16 136c0 22.03 5.714 43.568 16.516 62.266l-11.156 41.328a8 8 0 0 0 9.848 9.847l41.328-11.156C92.432 234.286 113.97 240 136 240c61.607 0 112-50.393 112-112S189.607 24 128 24Zm0 16c52.936 0 96 43.064 96 96s-43.064 96-96 96a95.68 95.68 0 0 1-45.96-11.113 7.998 7.998 0 0 0-5.508-.603l-34.89 9.423 9.423-34.89a8 8 0 0 0-.602-5.508A95.68 95.68 0 0 1 32 136c0-52.936 43.064-96 96-96ZM88.28 80a8 8 0 0 0-8.007 7.925c-.105 11.03 3.467 23.745 14.454 36.43 13.608 15.504 28.507 25.376 45.722 30.345 8.726 2.51 17.526 3.133 26.263 2.114 6.206-.705 11.566-6.052 11.566-12.272v-16.288a8 8 0 0 0-8.007-7.925h-21.566l-.088.007c-6.684.551-10.83 3.275-14.834 6.388-3.352 2.685-7.14 5.637-13.42 2.106-10.91-6.14-19.737-15.517-28.45-27.712-.11-.155-.218-.311-.33-.464-3.635-5.023-.957-8.48 1.615-11.038 1.574-1.568 3.34-3.292 5.228-5.226 3.367-3.539 5.998-7.627 6.306-14.261v-2.02a8 8 0 0 0-8.007-7.925H88.28Z" />
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
<div id="contactModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden z-50">
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
                document.addEventListener('DOMContentLoaded', function () {
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
                <span id="loadingSpinner" class="hidden ml-2 w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin"></span>
            </button>
        </form>
    </div>
</div>



<script>

function toggleModal(show) {
    const modal = document.getElementById('contactModal');
    modal.classList.toggle('hidden', !show);
}
const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const buttonText = document.getElementById('buttonText');
    const loadingSpinner = document.getElementById('loadingSpinner');

    form.addEventListener('submit', function (e) {
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
