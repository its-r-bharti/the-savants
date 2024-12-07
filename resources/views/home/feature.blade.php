<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>

<body>
    <div class="bg-white">
        @include('components.navbar')
        {{-- @include('components.hero2')
        @include('components.herosection') --}}
        @include('components.function')

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
                    <a class="mt-5 px-4 py-2 text-indigo-600 font-medium bg-indigo-50 rounded-full inline-flex items-center" href="/webapp">
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
        
        {{-- ending Grow business with Online. --}}

        {{-- starting blog --}}

        @include('components.blog')
        {{-- ending of blog --}}

{{-- starting Get full access to The savants. --}}
        {{-- <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="max-w-2xl mx-auto text-left sm:text-center">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Get full access to The Savants</h2>
                    <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                </div>
        
                <div class="mt-8 space-y-8 sm:space-x-12 sm:mt-12 sm:flex sm:items-start sm:justify-center sm:space-y-0 md:space-x-20 lg:mt-20">
                    <div class="flex items-start">
                        <svg class="flex-shrink-0 text-orange-400 w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div class="ml-4">
                            <h3 class="text-xl font-semibold text-black">130+ Blocks</h3>
                            <p class="mt-1.5 text-base text-gray-600">Ready to use</p>
                        </div>
                    </div>
        
                    <div class="flex items-start">
                        <svg class="flex-shrink-0 text-orange-400 w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div class="ml-4">
                            <h3 class="text-xl font-semibold text-black">14 Pages</h3>
                            <p class="mt-1.5 text-base text-gray-600">Make it live</p>
                        </div>
                    </div>
        
                    <div class="flex items-start">
                        <svg class="flex-shrink-0 text-orange-400 w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div class="ml-4">
                            <h3 class="text-xl font-semibold text-black">Easy Access</h3>
                            <p class="mt-1.5 text-base text-gray-600">Anyone can use</p>
                        </div>
                    </div>
                </div>
        
                <form action="#" method="POST" class="max-w-xl mx-auto mt-12">
                    <div class="sm:p-2 sm:bg-white sm:border-2 sm:border-transparent sm:rounded-full sm:focus-within:border-blue-600 sm:focus-within:ring-1 sm:focus-within:ring-blue-600">
                        <div class="flex flex-col items-start sm:flex-row sm:justify-center">
                            <div class="flex-1 w-full min-w-0">
                                <div class="relative text-gray-400 focus-within:text-gray-600">
                                    <label for="email" class="sr-only"></label>
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                        </svg>
                                    </div>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        placeholder="Enter email address"
                                        class="block w-full py-4 pl-10 pr-4 text-base text-black placeholder-gray-500 transition-all duration-200 border-transparent rounded-full focus:border-transparent focus:ring-0 caret-blue-600"
                                        required=""
                                    />
                                </div>
                            </div>
        
                            <button type="submit" class="inline-flex items-center justify-center w-auto px-4 py-4 mt-4 font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-full sm:ml-4 sm:mt-0 sm:w-auto hover:bg-blue-700 focus:bg-blue-700">
                                Get instant access
                                <svg class="w-5 h-5 ml-3 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
        
                <div class="flex items-center justify-start mt-8 sm:justify-center sm:px-0">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                    <span class="ml-2 text-sm text-gray-600"> Your data is complely secured with us. We don’t share with anyone. </span>
                </div>
            </div>
        </section>

        
         --}}
        @include('components.footer')
    </div>

</body>

</html>
