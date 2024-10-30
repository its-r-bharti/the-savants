<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.header')
    <title>App Development Services | The Savants</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Patrick+Hand&display=swap" rel="stylesheet">

    <style>
        /* Flying Bubbles Animation */
        .bubble {
            position: absolute;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            animation: bubble-animation 20s infinite;
        }

        @keyframes bubble-animation {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(-500px);
                opacity: 0;
            }
        }

        /* Bubbles Generator */
        .bubble:nth-child(1) {
            width: 40px;
            height: 40px;
            left: 15%;
            animation-duration: 25s;
            animation-delay: 0s;
        }

        .bubble:nth-child(2) {
            width: 60px;
            height: 60px;
            left: 55%;
            animation-duration: 30s;
            animation-delay: 5s;
        }

        .bubble:nth-child(3) {
            width: 30px;
            height: 30px;
            left: 75%;
            animation-duration: 20s;
            animation-delay: 2s;
        }
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Patrick+Hand&display=swap');

.font-handwriting {
    font-family: 'Patrick Hand', cursive;
}

.animate-fade-in {
    animation: fadeIn 2s ease-in-out forwards;
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

        /* Add more bubble styles as needed */
    </style>
</head>

<body>
    <div class="bg-gradient-to-r from-blue-50 to-green-50 text-gray-900 relative overflow-hidden">
        <!-- Flying Bubbles -->
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <!-- Add more bubbles for a dynamic effect -->

        @include('webcomponents.navbar')

       

       

        <!-- Get Started Section -->
<section class="py-56 bg-gradient-to-br from-green-200 via-blue-200 to-blue-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-teal-400 mb-6 animate-fade-in font-handwriting">
            Innovative App Development Services
        </h1>
        <p class="text-lg sm:text-xl text-gray-800 max-w-3xl mx-auto mb-8 font-handwriting">
            Create powerful mobile and web applications that drive user engagement and business growth.          </p>
        <!-- Get Started Button -->
        <a href="javascript:void(0)" onclick="openModal()" class="bg-blue-600 text-white font-semibold px-8 sm:px-10 py-3 sm:py-4 rounded-full shadow-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105">
            Get Started
        </a>
    </div>
</section>

<!-- Modal Structure -->
<div id="contactModal" class="fixed inset-0 hidden z-50 bg-gray-900 bg-opacity-75 flex items-center justify-center overflow-y-auto">
    <div class="bg-white rounded-lg p-6 max-w-md w-full sm:w-96 mx-4 my-8 shadow-lg relative">
        <!-- Close Button -->
        <button onclick="closeModal()" class="text-gray-600 text-2xl absolute top-4 right-4 font-bold">&times;</button>

        <!-- Modal Header -->
        <h2 class="text-xl font-semibold text-center text-gray-800 mb-4">Contact Us for your App service</h2>

        <!-- Contact Form -->
        <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Full name</label>
                <input type="text" name="name" required class="w-full mt-1 px-3 py-2 text-sm text-gray-700 bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 shadow-sm" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" required class="w-full mt-1 px-3 py-2 text-sm text-gray-700 bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 shadow-sm" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" name="phone" required class="w-full mt-1 px-3 py-2 text-sm text-gray-700 bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 shadow-sm" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Organization Name</label>
                <input type="text" name="company" required class="w-full mt-1 px-3 py-2 text-sm text-gray-700 bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 shadow-sm" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Message</label>
                <textarea name="message" required class="w-full mt-1 h-28 px-3 py-2 text-sm text-gray-700 bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 shadow-sm resize-none"></textarea>
            </div>
            <button type="submit" class="w-full px-4 py-2 text-sm text-white font-medium bg-indigo-600 hover:bg-indigo-500 rounded-md shadow-lg transition-all duration-150">
                Submit
            </button>
        </form>

        <!-- Success Message -->
        <div id="successMessage" class="hidden text-center mt-5">
            <p class="text-green-600 font-semibold">Your message has been successfully submitted!</p>
            <button onclick="closeModal()" class="mt-3 bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700">
                Close
            </button>
        </div>
    </div>
</div>

        <!-- Services Overview -->
        <section class="py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-green-700 mb-12">
                    Our App Development Process
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                    <!-- Consultation -->
                    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg">
                        <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 mb-4">Consultation</h3>
                        <p class="text-gray-700 mb-6">
                            We begin by understanding your vision, goals, and target audience to create a custom app that fits your needs perfectly.
                        </p>
                    </div>
                    <!-- Design -->
                    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg">
                        <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 mb-4">Design</h3>
                        <p class="text-gray-700 mb-6">
                            Our designers craft intuitive and engaging interfaces that ensure a seamless user experience across all devices.
                        </p>
                    </div>
                    <!-- Development -->
                    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg">
                        <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 mb-4">Development</h3>
                        <p class="text-gray-700 mb-6">
                            Leveraging the latest technologies, we develop high-performance applications that meet your business objectives.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Case Studies -->
        <section class="py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl sm:text-4xl font-bold text-blue-700 mb-8">Our Success Stories</h2>
                <p class="text-lg sm:text-xl text-gray-800 mb-12">
                    Explore how we have successfully developed applications that have helped our clients achieve their business goals.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-blue-700 mb-4">Health Tracking App</h3>
                        <p class="text-gray-700">
                            Developed an app that allows users to track their health metrics, leading to a 50% increase in user engagement.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-blue-700 mb-4">Food Delivery App</h3>
                        <p class="text-gray-700">
                            Created a streamlined food delivery service app that increased order volumes by 30%.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-blue-700 mb-4">Travel Planner App</h3>
                        <p class="text-gray-700">
                            Launched a travel planner app that offers personalized itineraries, receiving rave reviews from users.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="py-20 px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-bold mb-6 text-blue-700 text-center">Why Choose Our App Development Services?</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l9 6-9 6V6zm12 0l9 6-9 6V6z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Cross-Platform Development</h4>
                    </div>
                    <p>We specialize in creating apps that work seamlessly across multiple platforms, ensuring a wider reach for your audience.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4V1m0 3v20m0-3l-3-3m3 3l3-3" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">User-Centric Design</h4>
                    </div>
                    <p>Our designs focus on user experience, making your app intuitive and engaging to keep users coming back.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h18m-9 9h6m-6-9H3m9-9V1m0 18v-3" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Agile Development Process</h4>
                    </div>
                    <p>We utilize agile methodologies to adapt quickly to changes, ensuring your project stays on track and within budget.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2v20m0 0l-8-8m8 8l8-8" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Scalable Solutions</h4>
                    </div>
                    <p>Our apps are built with scalability in mind, so they can grow alongside your business needs and user demands.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-red-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 10l5 5-5 5m6-5h11M3 3h18m-9 3h9" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Integration with Latest Technologies</h4>
                    </div>
                    <p>We integrate your apps with the latest technologies to enhance performance and ensure future compatibility.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-teal-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 10h4m-2 6h2m-2-6v6m2 0v6m0-12V2m0 6h-2" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Comprehensive Testing</h4>
                    </div>
                    <p>We conduct thorough testing to ensure your app is bug-free and delivers a seamless experience to users.</p>
                </div>
            </div>
        </section>
        

        <!-- Testimonials -->
        {{-- <section class="py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl sm:text-4xl font-bold text-blue-700 mb-8">What Our Clients Say</h2>
                <p class="text-lg sm:text-xl text-gray-800 max-w-3xl mx-auto mb-12">
                    Hear from our satisfied clients who have experienced the transformative power of our app development services.
                </p>
                <div class="flex flex-col space-y-8">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <p class="text-gray-700 italic">"The Savants developed our mobile app efficiently, and our users love it! Their support is outstanding."</p>
                        <p class="text-blue-700 font-bold">- Mary Johnson, Owner of Foodies</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <p class="text-gray-700 italic">"Our app has received positive feedback, and our business has grown significantly thanks to their expertise."</p>
                        <p class="text-blue-700 font-bold">- Robert Lee, Founder of HealthTrack</p>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- Call to Action -->
        <section class="py-20 bg-gradient-to-r from-blue-200 to-green-200 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-blue-900 mb-6">Ready to Bring Your App Idea to Life?</h2>
            <p class="text-lg sm:text-xl text-gray-800 mb-8">
                Contact us today to discuss how our app development services can transform your vision into reality.
            </p>
            <a href="javascript:void(0)" onclick="openModal()" class="primary-btn text-white font-semibold px-8 sm:px-10 py-3 sm:py-4 rounded-full shadow-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105">
                Get a Free Consultation
            </a>
        </section>
    </div>

    @include('components.footer')
    <script>
        // Open modal
        function openModal() {
            document.getElementById('contactModal').classList.remove('hidden');
        }
    
        // Close modal
        function closeModal() {
            document.getElementById('contactModal').classList.add('hidden');
            document.getElementById('contactForm').reset(); // Reset the form
            document.getElementById('contactForm').classList.remove('hidden');
            document.getElementById('successMessage').classList.add('hidden');
        }
    
        // Handle form submission
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            
    
            // Simulate form submission (Replace this with actual form handling if necessary)
            setTimeout(function() {
                // Show success message
                document.getElementById('contactForm').classList.add('hidden');
                document.getElementById('successMessage').classList.remove('hidden');
            }, 500); // Simulate a delay for form submission
        });
    </script>
</body>

</html>
