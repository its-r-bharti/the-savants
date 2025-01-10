<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>


    <div class="bg-white">
        @include('components.navbar')
        
        <br><br><br><br>
        @include('components.function')

      



        {{-- <section>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 px-8 ">
                <!-- Web Development & Management -->
                <div
                    class="bg-gradient-to-r from-blue-200 to-green-200 shadow-lg rounded-lg p-6 text-gray-900 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-4">
                            <!-- SVG Icon -->
                            <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17l2.25-2.25L18 20.25V12h1.5V6.75h-6.75V12L9.75 9.75V6H6V12H4.5v8.25H9v-3.75z">
                                </path>
                            </svg>
                            <h3 class="text-xl font-bold">Web Development & Website Management</h3>
                        </div>
                        <p class="mb-4">Bring your business online with a professional website. From simple to
                            advanced solutions, we manage it all.</p>
                        <ul class="space-y-2">

                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                E-commerce integration, SEO optimization, dynamic content
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Advanced security protocols, SSL certificates, and GDPR compliance
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Performance optimization, lightning-fast loading times
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Analytics integration, real-time data tracking, and reporting
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                And many more powerful features
                            </li>
                        </ul>
                    </div>
                    <!-- Explore Now Button -->
                    <div class="mt-6">
                        <a href="/webapp"
                            class="inline-block bg-white text-green-600 font-bold py-2 px-4 rounded-lg shadow-md hover:bg-gray-100 transition">Explore
                            Now</a>
                    </div>
                </div>


                <!-- School Management System -->
                <div
                    class="bg-gradient-to-r from-blue-200 to-gray-200 shadow-lg rounded-lg p-6 text-gray-900 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-4">
                            <!-- SVG Icon -->
                            <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071l.879-.879a1.992 1.992 0 011.414-.586h9.172a1.992 1.992 0 011.414.586l.879.879M15 11.5a3.5 3.5 0 01-7 0m7 0a3.5 3.5 0 01-7 0M19.5 11V8.5a5 5 0 00-5-5h-5a5 5 0 00-5 5V11">
                                </path>
                            </svg>
                            <h3 class="text-xl font-bold">School Management System</h3>
                        </div>
                        <p class="mb-4">Simplify school administration with our comprehensive system, designed to
                            handle everything from admissions to alumni management.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Student Enrollment & Attendance Tracking
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Timetable & Class Scheduling
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Fee Payments & Financial Reports
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Parent-Teacher Communication Portal
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Exam & Grade Management
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Hostel & Transport Management
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Alumni Management & Event Coordination
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                And many more powerful features
                            </li>
                        </ul>
                    </div>
                    <!-- Explore Now Button -->
                    <div class="mt-6">
                        <a href="/school"
                            class="inline-block bg-white text-gray-900 font-bold py-2 px-4 rounded-lg shadow-md hover:bg-gray-100 transition">Explore
                            Now</a>
                    </div>
                </div>


                <!-- Enterprise Management System -->
                <div
                    class="bg-gradient-to-r from-blue-200 to-red-200 shadow-lg rounded-lg p-6 text-gray-900 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-4">
                            <!-- SVG Icon -->
                            <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v8m4-4H8"></path>
                            </svg>
                            <h3 class="text-xl font-bold">Enterprise Management System</h3>
                        </div>
                        <p class="mb-4">Maximize productivity with our enterprise-grade management system, offering
                            full control over operations, HR, and more.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Employee Management & Payroll
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Project & Task Tracking
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Financial Management & Reporting
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Inventory & Asset Management
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                HR Management & Recruitment
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Customer Relationship Management (CRM)
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Document Management & Collaboration
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Analytics & Performance Tracking
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                And many more powerful features tailored for your enterprise's success
                            </li>
                        </ul>
                    </div>
                    <!-- Explore Now Button -->
                    <div class="mt-6">
                        <a href="/office"
                            class="inline-block bg-white text-red-600 font-bold py-2 px-4 rounded-lg shadow-md hover:bg-gray-100 transition">Explore
                            Now</a>
                    </div>
                </div>

            </div>
        </section>
        <br> --}}

        {{-- starting Grow business with Online. --}}
        <section class="py-0 bg-white sm:py-0 lg:py-0">
            <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
                <div class="grid items-center md:grid-cols-2 gap-y-10 md:gap-x-20">
                    <div class="pr-12 sm:pr-0">
                        <div class="relative max-w-xs mb-12">
                            <img class="object-bottom rounded-md" src="https://cdn.rareblocks.xyz/collection/celebration/images/features/4/man-eating-noodles.jpg" alt="Team brainstorming session" />
                
                            <img class="absolute origin-bottom-right scale-75 rounded-md -bottom-12 -right-12" src="https://cdn.rareblocks.xyz/collection/celebration/images/features/4/smiling-businessman.jpg" alt="Satisfied client celebrating success" />
                        </div>
                    </div>
                
                    <div>
                        <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Empowering Your Business Through Digital Excellence</h2>
                        <p class="mt-4 text-base leading-relaxed text-gray-600">
                            At *The Savants*, we specialize in delivering cutting-edge web development, advanced management systems, and seamless digital solutions. Our mission is to empower businesses, schools, and enterprises with tailored technology that drives growth, streamlines operations, and maximizes efficiency. Whether you need a dynamic website, an intuitive school management system, or a robust enterprise platform, we are your trusted partner for innovation and success.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="relative max-w-screen-xl mx-auto py-4 px-4 md:px-8">
            <div class="absolute top-0 left-0 w-full h-full bg-white opacity-40"></div>
            <div class="relative z-10 gap-5 items-center lg:flex">
                <div class="flex-1 max-w-lg py-5 sm:mx-auto sm:text-center lg:max-w-max lg:text-left">
                    <h3 class="text-3xl text-gray-800 font-semibold md:text-4xl">
                        Build Your Websites with <span class="text-indigo-600">High-Performance Solutions</span>
                    </h3>
                    <p class="text-gray-500 leading-relaxed mt-3">
                        At *The Savants*, we bring your vision to life with expertly crafted websites designed for speed, functionality, and user engagement. Our solutions are tailored to meet your unique needs, ensuring seamless integration and top-tier performance to drive your business forward.
                    </p>
                    <a class="mt-5 px-4 py-2 text-white bg-indigo-500 rounded-3xl border-2 border-indigo-500 hover:bg-white hover:text-indigo-600 rounded-full inline-flex items-center" href="/webapp">
                        Get Started
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1 duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
                <div class="flex-1 mt-5 mx-auto sm:w-9/12 lg:mt-0 lg:w-auto">
                    <img src="https://i.postimg.cc/kgd4WhyS/container.png" alt="High-performance website design" class="w-full" />
                </div>
            </div>
        </section>
        
        

      

        @include('components.blog')
        
       

        
        
        @include('components.footer')
    </div>



</html>
