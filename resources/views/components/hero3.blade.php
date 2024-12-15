<style>
    
</style>
<section class="py-24 bg-gradient-to-b from-green-50 to-green-100s sm:py-24 lg:py-24">
    
<div class="relative bg-gradient-to-b from-green-50 o-green-100">
    <section class="overflow-hidden">
        <div class="flex flex-col lg:flex-row lg:items-stretch lg:max-h-[90vh] lg:min-h-[90vh]">
            <!-- Left Image Section -->
            <div class="relative w-full overflow-hidden lg:w-8/12 lg:order-1">
                <div class="lg:absolute lg:bottom-0 lg:left-0">
                    <img class="w-full object-cover object-center phone-image animate-fade-in" 
                         src="{{ asset('img/savants.png') }}" 
                         alt="Business Management System" />
                </div>
            </div>
            
            <!-- Content Section -->
            <div class="flex items-center justify-center w-full lg:order-2 lg:w-7/12">
                <div class="h-full px-6 pt-16 pb-12 sm:px-8 md:px-12 lg:px-24 2xl:px-32 lg:pt-40 lg:pb-14">
                    <div class="flex flex-col justify-between flex-1 h-full">
                        <div>
                            <h1 id="dynamic-text" 
                                class="text-3xl md:text-5xl font-bold text-black sm:text-6xl xl:text-7xl zoom-text">
                                Grow Your <br> 
                                <span id="dynamic-word" 
                                      class="inline-block text-red-600 font-serif">
                                    Enterprise
                                </span>
                            </h1>
                            <p class="mt-4 text-lg md:text-base text-black sm:text-2xl fade-in-2">
                                At The Savants, we specialize in tailored services to help businesses, 
                                schools, and enterprises thrive in the digital world. Discover how we can help you!
                            </p>
                            <a href="/webapp" 
                               title="" 
                               class="inline-flex items-center px-4 py-4 md:px-6 md:py-5 mt-6 text-sm md:text-base font-semibold text-black transition-all duration-200 bg-green-300 hover:bg-green-400 focus:bg-green-400 fade-in-3" 
                               role="button">
                                Explore Our Product
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</section>


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
