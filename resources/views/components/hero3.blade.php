<div class="relative bg-gradient-to-b from-green-50 to-green-100">
    <section class="overflow-hidden">
        <div class="flex flex-col lg:flex-row lg:items-stretch lg:max-h-[900px] lg:min-h-[900px]">
            <div class="flex items-center justify-center w-full lg:order-2 lg:w-7/12">
                <div class="h-full px-4 pt-24 pb-16 sm:px-6 lg:px-24 2xl:px-32 lg:pt-40 lg:pb-14">
                    <div class="flex flex-col justify-between flex-1 h-full">
                        <div>
                            <h1 id="dynamic-text" class="text-4xl font-bold text-black sm:text-6xl xl:text-7xl zoom-text">Grow Your <br> <span id="dynamic-word" class="inline-block">Enterprise</span> </h1>
                            <p class="mt-6 text-base text-black sm:text-xl fade-in-2">At The Savants, we specialize in tailored services to help businesses, schools, and enterprises thrive in the digital world. Discover how we can help you!</p>
                            <a href="/webapp" title="" class="inline-flex items-center px-6 py-5 text-base font-semibold text-black transition-all duration-200 bg-green-300 mt-9 hover:bg-green-400 focus:bg-green-400 fade-in-3" role="button"> Explore Our Product </a>
                        </div>

                        <div class="mt-8 border-t-2 border-black lg:mt-auto sm:mt-14">
                            <div class="pt-8 sm:flex sm:items-center sm:justify-between sm:pt-14 fade-in-4">
                                <p class="text-base font-semibold text-black">Available Platforms</p>

                                <div class="flex items-center mt-5 space-x-5 sm:mt-0">
                                    <a href="#" title="" class="block transition-all duration-200 hover:opacity-80 focus:opacity-80 fade-in-5" role="button">
                                        <img class="w-auto rounded h-14 sm:h-16" src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/4/app-store-button.png" alt="App Store" />
                                    </a>

                                    <a href="#" title="" class="block transition-all duration-200 hover:opacity-80 focus:opacity-80 fade-in-6" role="button">
                                        <img class="w-auto rounded h-14 sm:h-16" src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/4/play-store-button.png" alt="Play Store" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative w-full overflow-hidden lg:w-8/12 lg:order-1">
                <div class="lg:absolute lg:bottom-0 lg:left-0">
                    <img class="w-full phone-image animate-fade-in" src="{{ asset('img/savants.png') }}" alt="Business Management System" />
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Add zoom effect on hover for the text
    const textElement = document.querySelector('.zoom-text');
    const dynamicWord = document.getElementById('dynamic-word');

    let words = ['Enterprise','School'];
    let currentIndex = 0;
    let isErasing = false;

    function eraseAndWrite() {
        const fullText = 'Elevate Your Business';
        const newWord = words[currentIndex];
        const eraseSpeed = 100; // milliseconds
        const writeSpeed = 150; // milliseconds

        if (isErasing) {
            let text = dynamicWord.textContent;
            if (text.length > 0) {
                text = text.slice(0, -1);
                dynamicWord.textContent = text;
                setTimeout(eraseAndWrite, eraseSpeed);
            } else {
                isErasing = false;
                currentIndex = (currentIndex + 1) % words.length;
                setTimeout(eraseAndWrite, 500); // Pause before writing
            }
        } else {
            let text = dynamicWord.textContent;
            const word = newWord;
            if (text.length < word.length) {
                text = word.slice(0, text.length + 1);
                dynamicWord.textContent = text;
                setTimeout(eraseAndWrite, writeSpeed);
            } else {
                isErasing = true;
                setTimeout(eraseAndWrite, 2000); // Pause before erasing
            }
        }
    }

    setTimeout(() => eraseAndWrite(), 1000); // Start after a short delay
</script>

<style>
    /* Zoom effect for the text */
    .zoom-text {
        transition: transform 0.5s ease-in-out;
        transform-origin: center;
    }

    /* Animation for zoom-in on page load */
    @keyframes zoomIn {
        0% {
            transform: scale(0.8);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .animate-zoom-in {
        animation: zoomIn 1s ease-in-out;
    }

    /* Image fade-in animation */
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    /* Transition for image hover effect */
    .phone-image {
        transition: transform 0.5s ease-in-out;
    }

    .phone-image:hover {
        transform: scale(1.05);
    }

    /* Fade-in effects for other elements */
    .fade-in-2 {
        animation: fadeIn 1.5s ease-in-out 0.3s both; /* Delayed animation */
    }

    .fade-in-3 {
        animation: fadeIn 1.5s ease-in-out 0.6s both; /* Delayed animation */
    }

    .fade-in-4 {
        animation: fadeIn 1.5s ease-in-out 0.9s both; /* Delayed animation */
    }

    .fade-in-5 {
        animation: fadeIn 1.5s ease-in-out 1.2s both; /* Delayed animation */
    }

    .fade-in-6 {
        animation: fadeIn 1.5s ease-in-out 1.5s both; /* Delayed animation */
    }
</style>
