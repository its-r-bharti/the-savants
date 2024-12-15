<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>



@include('components.navbar')

<section class="py-24 bg-white sm:py-24 lg:py-24">
</section>

    <section class="py-4 bg-white sm:py-4 lg:py-4">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl text-center">
            <!-- Header -->
            <div class="mb-10">
                <span
                    class="inline-block px-4 py-2 mb-4 text-sm font-semibold text-orange-600 bg-orange-100 rounded-full">OUR
                    PROJECTS</span>
                <h2 class="text-3xl font-extrabold leading-tight text-gray-900 sm:text-4xl">Project We Have Done
                </h2>
                <p class="max-w-xl mx-auto font-extrabold mt-4 text-sm leading-relaxed text-gray-600">We know how
                    to make special apps and online marketing plans that really show off your business and help
                    it achieve its goals.</p>
            </div>


        </div>
        <!-- Projects Section -->

        <style>
            @keyframes moveBlue {
                from {
                    width: 0;
                }

                to {
                    width: 100%;
                }
            }

            .service-card {
                position: relative;
                overflow: hidden;
                border-radius: 1rem;
                background-color: #f0f9ff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
            }

            .service-card:hover {
                transform: translateY(-5px);
            }

            .service-card {
                position: relative;
                overflow: hidden;
                border-radius: 1rem;
                background-color: #f0f9ff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
                height: 300px;
                /* Increased height for the card */
                display: flex;
                /* Ensures centering */
                align-items: center;
                /* Centers content vertically */
                justify-content: center;
                /* Centers content horizontally */
            }

            .service-card:hover::before {
                width: 100%;
                /* When hovering, expand the width */
                animation: moveBlue 1s forwards;
                /* Trigger animation on hover */
            }

            .service-card-content {
                position: relative;
                z-index: 1;
                text-align: center;
            }

            .service-card img {
                height: 96px;
                width: 96px;
                margin: 0 auto 1rem auto;
                /* Center the image */
            }

            .service-card h3 {
                font-size: 1.125rem;
                font-weight: 600;
                color: #1f2937;
                margin-bottom: 0.5rem;
            }

            .service-card p {
                font-size: 0.875rem;
                color: #6b7280;
            }


            .container {
                margin: 0 auto;
                padding: 0rem 2rem 5rem 2rem;
                max-width: 60%;
            }

            @media (max-width: 639px) {
                .container {
                    max-width: 85%;
                }
            }
        </style>

        <div class="container">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- App Development -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="{{ asset('img/logo.png') }}" alt="The savants">
                        <h3>The Savants</h3>
                    </div>
                </div>

                <!-- E-commerce Website -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="{{ asset('img/sansani.png') }}" alt="Sansani Express News">
                        <h3>Sansani Express News</h3>
                    </div>
                </div>

                <!-- Software Development -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="https://www.rase.co.in/_next/image?url=%2Fshiksha.png&w=640&q=75"
                            alt="Siksha Mahakumbh">
                        <h3>Siksha Mahakumbh</h3>
                    </div>
                </div>

                <!-- Game Development -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="https://legalpalz.com/img/about/Legal-Pal-Logo.png" alt="Legal Palz">
                        <h3>Legal Palz</h3>
                    </div>
                </div>

                <!-- Graphic Designing -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="https://www.stpaulspalampur.com/assets/images1/logo.webp"
                            alt="St. Paul's Senior Secondary School">
                        <h3>St. Paul's Senior Secondary School</h3>
                    </div>
                </div>

                <!-- Digital Marketing -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="https://mcspalampur.in/images/logo.jpg" alt="Mount Carmel School Palampur">
                        <h3>Mount Carmel School Palampur</h3>
                    </div>
                </div>

                


            </div>
        </div>

        


    </section>


<style>
    

    img {
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
    }

    
</style>


@include('components.testimonial')
@include('components.stats')
@include('components.question')
@include('components.steps')
@include('components.blog')
@include('components.contact')
{{-- @include('components.team') --}}
@include('components.footer')



<script>
    const serviceCards = document.querySelectorAll('.service-card');
const handleScroll = () => {
    serviceCards.forEach((card, index) => {
        const rect = card.getBoundingClientRect();
        const isVisible = rect.top <= window.innerHeight && rect.bottom >= 0;
        if (isVisible) {
            // Add animation class based on card index
            if (index % 3 === 0) {
                card.classList.add('show-left');
            } else if (index % 3 === 1) {
                card.classList.add('show-center');
            } else {
                card.classList.add('show-right');
            }
        }
    });
};

// Call handleScroll on page load and scroll event
window.addEventListener('scroll', handleScroll);
window.addEventListener('load', handleScroll);
</script>
</html>
