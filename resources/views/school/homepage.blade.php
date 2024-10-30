<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>

<body>
    <div class="bg-white">
        @include('schoolcomponents.SchoolNavbar')


        <div class="relative" x-data="{ state: false }">
            <div class="absolute inset-0 blur-xl h-[580px]"
                style="
                background: linear-gradient(
                  143.6deg,
                  rgba(192, 132, 252, 0) 20.79%,
                  rgba(232, 121, 249, 0.26) 40.92%,
                  rgba(204, 171, 238, 0) 70.35%
                );
              ">
            </div>
            <div class="relative">
                <header>
                    <div :class="{ 'mx-2 pb-5': state, 'hidden': !state }" class="md:hidden">
                        <div class="flex items-center justify-between py-5 md:block">
                            <a href="javascript:void(0)">
                                <img src="https://www.floatui.com/logo.svg" width="120" height="50"
                                    alt="Float UI logo" />
                            </a>
                            <div class="md:hidden">
                                <button @click="state = !state" class="menu-btn text-gray-500 hover:text-gray-800">
                                    <!-- Use x-show for conditional rendering in Alpine -->
                                    <template x-if="state">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </template>
                                    <template x-if="!state">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                        </svg>
                                    </template>
                                </button>
                            </div>
                        </div>
                    </div>
                    <nav :class="{ 'absolute top-0 inset-x-0 bg-white shadow-lg rounded-xl border mx-2 mt-2 md:shadow-none md:border-none md:mx-0 md:mt-0 md:relative md:bg-transparent': state }"
                        class="pb-5 md:text-sm">

                        <!-- Section -->
                        <section>
                            <div
                                class="max-w-screen-xl mx-auto px-4 py-32 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex">
                                <div class="flex-none space-y-5 max-w-xl">
                                    <a href="javascript:void(0)"
                                        class="inline-flex gap-x-6 items-center rounded-full p-1 pr-6 border text-sm font-medium duration-150 hover:bg-white">
                                        {{-- <span
                        class="inline-block rounded-full px-3 py-1 bg-indigo-600 text-white"
                      >
                        News
                      </span>
                      <p class="flex items-center">
                        Read the launch post from here
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                          class="w-5 h-5"
                        > --}}
                                        <path fillRule="evenodd"
                                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                            clipRule="evenodd" />
                                        </svg>
                                        </p>
                                    </a>
                                    <h1 class="text-4xl text-gray-800 font-extrabold sm:text-5xl">
                                      School Management System
                                    </h1>
                                    <p class="text-xl text-blue-900 font-extrabold sm:text-xl">
                                        Efficient, Integrated, and User-Friendly Solutions for Indian Schools
                                    </p>    
                                    <br>
                                    
                                    <p class="text-sm text-gray-900">The Savants’ School Management System is a comprehensive digital solution that helps schools across India streamline their operations, improve communication, and enhance the overall academic experience. With AI-powered tools and an easy-to-use interface, we aim to revolutionize school management for institutions of all sizes.</p>                              
                                
                                    <div class="flex items-center gap-x-3 sm:text-sm">
                                        <a href="https://school.thesavants.in/"
                                            class="flex items-center justify-center gap-x-1 py-2 px-4 text-white font-medium bg-gray-800 duration-150 hover:bg-gray-700 active:bg-gray-900 rounded-full md:inline-flex">
                                            Request a Demo
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="w-5 h-5">
                                                <path fillRule="evenodd"
                                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                    clipRule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="#subscriptionform"
                                            class="flex items-center justify-center gap-x-1 py-2 px-4 text-gray-700 hover:text-gray-900 font-medium duration-150 md:inline-flex">
                                            Subscription
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="w-5 h-5">
                                                <path fillRule="evenodd"
                                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                    clipRule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex-1 hidden md:block">
                                    <!-- Replace with your image -->
                                    <img src="https://raw.githubusercontent.com/sidiDev/remote-assets/c86a7ae02ac188442548f510b5393c04140515d7/undraw_progressive_app_m-9-ms_oftfv5.svg"
                                        class="max-w-xl" />
                                </div>
                            </div>
                        </section>
            </div>
        </div>

        <script>
            document.addEventListener("alpine:init", () => {
                Alpine.data("dropdown", () => ({
                    open: false,
                    toggle() {
                        this.open = !this.open;
                    },
                    close() {
                        this.open = false;
                    },
                    init() {
                        this.$watch("open", (value) => {
                            if (value) {
                                this.$nextTick(() => {
                                    window.addEventListener("click", this.close);
                                });
                            } else {
                                window.removeEventListener("click", this.close);
                            }
                        });
                    },
                }));
            });
        </script>



        {{-- @include('schoolcomponents.schoolfeature') --}}

        <section class="py-10 bg-white sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">
                    <!-- Left Section: Image and Quote -->
                    <div class="relative lg:mb-12">
                        <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg" alt="" />
                        <div class="pl-12 pr-6">
                            <img class="relative rounded-lg shadow-lg"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/girl-working-on-laptop.jpg"
                                alt="" />
                        </div>
                        <div class="absolute left-0 pr-12 bottom-8 xl:bottom-20">
                            <div class="max-w-xs bg-blue-600 rounded-lg sm:max-w-md xl:max-w-md">
                                <div class="px-3 py-4 sm:px-5 sm:py-8">
                                    <div class="flex items-start">
                                        <p class="text-3xl sm:text-4xl">👋</p>
                                        <blockquote class="ml-5">
                                            <p class="text-sm font-medium text-white sm:text-lg">“Our school management software manages everything starting from admission to attendance and exams to result cards & certification.”</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Right Section: Title and Points -->
                    <div class="2xl:pl-16">
                        <h2 class="text-2xl font-bold leading-tight text-black sm:text-3xl lg:text-4xl lg:leading-tight">
                            Why Choose The Savants School Management System?
                        </h2>
                        
                        
                        <!-- Feature List -->
                        <ul class="mt-8 space-y-6 text-gray-800">
                            <li class="flex space-x-4">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.707-4.707a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-lg font-medium">End-to-End Automation: Manage everything from admissions to exam results in one platform.</span>
                            </li>
            
                            <li class="flex space-x-4">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.707-4.707a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-lg font-medium">Customizable for Indian Education: Tailored solutions that understand CBSE, ICSE, and state board requirements.</span>
                            </li>
            
                            <li class="flex space-x-4">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.707-4.707a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-lg font-medium">Seamless Parent-Teacher Communication: Improve transparency and parent involvement through automated notifications and apps.</span>
                            </li>
            
                            <li class="flex space-x-4">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.707-4.707a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-lg font-medium">100% Data Security and Backup: Protect student and staff information with our advanced encryption and regular backups.</span>
                            </li>
            
                            <li class="flex space-x-4">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.707-4.707a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-lg font-medium">Affordable Pricing: Plans that fit the needs and budget of Indian schools.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            

            @include('schoolcomponents.schoolfeature')
            @include('schoolcomponents.sidebar')


        </section>





    </div>

    @include('components.footer')







</body>

</html>
