<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>

<body>
    <div class="bg-white">
        @include('schoolcomponents.SchoolNavbar')
        
        <div class="bg-gradient-to-r from-green-100 via-blue-100 to-blue-200">


            <div class=" bg-gradient-to-r from-green-100 via-blue-100 to-blue-200">


                <section class="py-10 sm:py-16 lg:py-24">
                    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                            <div>
                                <h1 class="text-4xl font-bold text-black sm:text-6xl lg:text-7xl">
                                    Sensational software, Sensible
                                    <div class="relative inline-flex">
                                        <span
                                            class="absolute inset-x-0 bottom-0 border-b-[30px] border-[#4ADE80]"></span>
                                        <h1 class="relative text-4xl font-bold text-black sm:text-6xl lg:text-7xl">
                                            price.</h1>
                                    </div>
                                </h1>

                                <p class="mt-8 text-base text-black sm:text-xl">We offer flexible and affordable pricing plans to fit the unique needs of Indian schools. Each plan includes powerful features that help you manage your school efficiently</p>

                                <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                                    <a href="/school" title=""
                                        class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white bg-indigo-500 rounded-3xl border-2 border-indigo-500 hover:bg-green-100 hover:text-gray-800 active:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition duration-200"
                                        role="button"> Start exploring </a>

                                </div>
                            </div>

                            <div>
                                <img class="w-full"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/2/hero-img.png"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </section>
            </div>


        </div>

        @include('schoolcomponents.price')


        @include('schoolcomponents.partners')





        <!-- testimonials -->
        @include('schoolcomponents.testimonials')

        {{-- @include('schoolcomponents.subscriptionform') --}}





        @include('components.footer')
    </div>

</body>

</html>
