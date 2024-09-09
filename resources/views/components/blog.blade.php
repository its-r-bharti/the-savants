<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Latest from blog</h2>
            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Get insights on the latest trends and best practices from our experts.</p>
        </div>

        <!-- Swiper -->
        <div class="swiper-container mt-12 lg:mt-16">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                        <img class="object-cover w-full h-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-1.jpg" alt="" />
                    </a>
                    <span class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-rose-500 bg-rose-100 mt-9"> Technology </span>
                    <p class="mt-6 text-xl font-semibold">
                        <a href="#" title="" class="text-black"> How to manage your remote team? </a>
                    </p>
                    <p class="mt-4 text-gray-600">Effective strategies for managing remote teams and increasing productivity.</p>
                    <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                    <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase"> The Savants . Sept 6, 2024 </span>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                        <img class="object-cover w-full h-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-2.jpg" alt="" />
                    </a>
                    <span class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-sky-500 bg-sky-100 mt-9"> Marketing </span>
                    <p class="mt-6 text-xl font-semibold">
                        <a href="#" title="" class="text-black"> 6 Product launch emails you must use in your next campaign </a>
                    </p>
                    <p class="mt-4 text-gray-600">Learn the art of crafting perfect product launch emails for maximum impact.</p>
                    <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                    <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase"> The Savants . Sept 6, 2024 </span>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                        <img class="object-cover w-full h-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-3.jpg" alt="" />
                    </a>
                    <span class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-sky-500 bg-sky-100 mt-9"> Marketing </span>
                    <p class="mt-6 text-xl font-semibold">
                        <a href="#" title="" class="text-black"> Learn from the best: 7 email marketing ideas you can use </a>
                    </p>
                    <p class="mt-4 text-gray-600">Boost your email campaigns with proven strategies from industry leaders.</p>
                    <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                    <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase">  The Savants . Sept 6, 2024  </span>
                </div>
            </div>

            <!-- Add Pagination (optional) -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,  // Default for mobile
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000,  // Auto-slide interval in milliseconds (5000ms = 5 seconds)
            disableOnInteraction: false,  // Continue autoplay even after user interaction
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,  // Show 2 slides on tablets
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,  // Show 3 slides on larger screens
                spaceBetween: 50,
            },
        },
    });
</script>

