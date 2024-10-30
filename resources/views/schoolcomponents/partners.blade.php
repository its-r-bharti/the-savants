<section class="py-4 bg-white sm:py-4 lg:py-4">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-2xl font-bold text-gray-800 sm:text-4xl sm:leading-tight">Trusted by over 100 Schools in India  </h2>
            <br>
            <h2 class="text-xl font-bold text-gray-800 sm:text-sm sm:leading-tight">Our solutions have been tried and tested by top schools, delivering excellent results and increasing productivity. </h2>

        </div>

        <div class="grid items-center max-w-4xl grid-cols-2 mx-auto mt-12 md:mt-20 md:grid-cols-4 gap-x-10 gap-y-16" id="logo-container">
            <div class="logo-slide">
                <img class="object-contain w-full h-6 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-1.png" alt="Logo 1" />
            </div>

            <div class="logo-slide">
                <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-2.png" alt="Logo 2" />
            </div>

            <div class="logo-slide">
                <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-3.png" alt="Logo 3" />
            </div>

            <div class="logo-slide">
                <img class="object-contain w-full mx-auto h-7" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-4.png" alt="Logo 4" />
            </div>

            <div class="logo-slide">
                <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-5.png" alt="Logo 5" />
            </div>

            <div class="logo-slide">
                <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-6.png" alt="Logo 6" />
            </div>

            <div class="logo-slide">
                <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-7.png" alt="Logo 7" />
            </div>

            <div class="logo-slide">
                <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-8.png" alt="Logo 8" />
            </div>
            
        </div>

        <div class="flex items-center justify-center mt-10 space-x-3 md:hidden" id="dots-container">
            <!-- Dots will be dynamically inserted here -->
        </div>

        <p class="mt-10 text-base text-center text-gray-500 md:mt-20">and, 100+ more School</p>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function () {
    const logoSlides = document.querySelectorAll('.logo-slide');
    const dotsContainer = document.getElementById('dots-container');
    let currentSlide = 0;

    function showSlide(index) {
        logoSlides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
        });

        // Update dots
        const dots = document.querySelectorAll('.dot');
        dots.forEach((dot, i) => {
            dot.classList.toggle('bg-blue-600', i === index);
            dot.classList.toggle('bg-gray-300', i !== index);
        });
    }

    function createDots() {
        logoSlides.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.className = 'dot w-2.5 h-2.5 rounded-full cursor-pointer';
            dot.classList.add(index === 0 ? 'bg-blue-600' : 'bg-gray-300');
            dot.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
            });
            dotsContainer.appendChild(dot);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % logoSlides.length;
        showSlide(currentSlide);
    }

    // Initialize carousel
    if (window.innerWidth < 768) {
        logoSlides.forEach(slide => slide.style.display = 'none');
        showSlide(currentSlide);
        createDots();

        // Optional: Auto-slide every 3 seconds
        setInterval(nextSlide, 3000);
    } else {
        logoSlides.forEach(slide => slide.style.display = 'block');
    }

    // Optional: Re-initialize on resize
    window.addEventListener('resize', () => {
        if (window.innerWidth < 768) {
            logoSlides.forEach(slide => slide.style.display = 'none');
            showSlide(currentSlide);
            dotsContainer.innerHTML = ''; // Clear existing dots
            createDots();
        } else {
            logoSlides.forEach(slide => slide.style.display = 'block');
            dotsContainer.innerHTML = ''; // Clear dots
        }
    });
});

</script>