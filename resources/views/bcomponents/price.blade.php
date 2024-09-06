<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>

<body>
    <div class="bg-white">
        @include('bcomponents.BussinessNavbar')
        <br>
        <br>
        <div class="bg-white-900">


            <div class="bg-gradient-to-b from-green-50 to-green-100">
            
            
                <section class="py-10 sm:py-16 lg:py-24">
                    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                            <div>
                                <h1 class="text-4xl font-bold text-black sm:text-6xl lg:text-7xl">
                                    Sensational software, Sensible 
                                    <div class="relative inline-flex">
                                        <span class="absolute inset-x-0 bottom-0 border-b-[30px] border-[#4ADE80]"></span>
                                        <h1 class="relative text-4xl font-bold text-black sm:text-6xl lg:text-7xl">price.</h1>
                                    </div>
                                </h1>
            
                                <p class="mt-8 text-base text-black sm:text-xl">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat.</p>
            
                                <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                                    <a href="#" title="" class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 rounded-3xl bg-orange-500 hover:bg-orange-600 focus:bg-orange-600" role="button"> Start exploring </a>
            
                                </div>
                            </div>
            
                            <div>
                                <img class="w-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/2/hero-img.png" alt="" />
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
            
        </div>

        @include('bcomponents.price')

       
        @include('bcomponents.partners')
        



        
        <!-- testimonials -->
        @include('bcomponents.testimonials')
       

        




        @include('components.footer')
    </div>

</body>

</html>