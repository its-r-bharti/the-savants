<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-2xl mx-auto text-center">
            <div class="flex items-center justify-center">
                <span class="bg-orange-400 text-center text-sm uppercase tracking-widest font-semibold px-4 py-2 rounded-full">
                    BLOG
                </span>
            </div>
            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">
                Discover the latest trends and insights from our experts.
            </p>
        </div>

        <!-- Blog Swiper Slider -->
        <div class="swiper mt-12 lg:mt-16">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="flex flex-col items-center text-center">
                        <a href="#" class="block w-full h-60 overflow-hidden">
                            <img class="object-cover w-full h-full rounded-lg"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-1.jpg"
                                alt="Blog Post 1" />
                        </a>
                        <span class="inline-flex px-4 py-2 mt-4 text-xs font-semibold tracking-widest uppercase rounded-full text-rose-500 bg-rose-100">
                            Technology
                        </span>
                        <p class="mt-4 text-lg font-semibold text-black">
                            <a href="#">How to manage your remote team?</a>
                        </p>
                        <p class="mt-2 text-gray-600">
                            Learn strategies to effectively manage remote teams and boost productivity.
                        </p>
                        <span class="block mt-4 text-sm font-bold tracking-widest text-gray-500 uppercase">
                            The Savants . Sept 6, 2024
                        </span>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="flex flex-col items-center text-center">
                        <a href="#" class="block w-full h-60 overflow-hidden">
                            <img class="object-cover w-full h-full rounded-lg"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-2.jpg"
                                alt="Blog Post 2" />
                        </a>
                        <span class="inline-flex px-4 py-2 mt-4 text-xs font-semibold tracking-widest uppercase rounded-full text-sky-500 bg-sky-100">
                            Marketing
                        </span>
                        <p class="mt-4 text-lg font-semibold text-black">
                            <a href="#">Introducing Our Latest Innovations</a>
                        </p>
                        <p class="mt-2 text-gray-600">
                            Explore six innovative products designed to enhance your daily routine.
                        </p>
                        <span class="block mt-4 text-sm font-bold tracking-widest text-gray-500 uppercase">
                            The Savants . Sept 6, 2024
                        </span>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="flex flex-col items-center text-center">
                        <a href="#" class="block w-full h-60 overflow-hidden">
                            <img class="object-cover w-full h-full rounded-lg"
                                src="{{ asset('img/blog3.png') }}"
                                alt="Blog Post 3" />
                        </a>
                        <span class="inline-flex px-4 py-2 mt-4 text-xs font-semibold tracking-widest uppercase rounded-full text-sky-500 bg-sky-100">
                            Business
                        </span>
                        <p class="mt-4 text-lg font-semibold text-black">
                            <a href="#">Manage Your Office Efficiently</a>
                        </p>
                        <p class="mt-2 text-gray-600">
                            Optimize your operations with our cutting-edge management solutions.
                        </p>
                        <span class="block mt-4 text-sm font-bold tracking-widest text-gray-500 uppercase">
                            The Savants . Sept 6, 2024
                        </span>
                    </div>
                </div>
            </div>

            <!-- Swiper Navigation -->
            <div class="swiper-pagination mt-6"></div>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
    // Initialize Swiper
    const swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },
    });
</script>
