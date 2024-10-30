<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.header')
    <title>Web Development Services | The Savants</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Patrick+Hand&display=swap" rel="stylesheet">
    <style>

.sm\:text-6xl {
        font-size: 3.75rem;
        line-height: 2;
}
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
            left: 20%;
            animation-duration: 25s;
            animation-delay: 0s;
        }
        

        .bubble:nth-child(2) {
            width: 100px;
            height: 100px;
            left: 60%;
            animation-duration: 30s;
            animation-delay: 5s;
        }

        .bubble:nth-child(3) {
            width: 30px;
            height: 30px;
            left: 80%;
            animation-duration: 20s;
            animation-delay: 2s;
        }
        /* .bubble:nth-child(4) {
            width: 30px;
            height: 30px;
            left: 45%;
            top: 30%;
            animation-duration: 20s;
            animation-delay: 2s;
        } */

        /* Add more bubble styles as needed */

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
            Shaping the Future of Web Solutions
        </h1>
        <p class="text-lg sm:text-xl text-gray-800 max-w-3xl mx-auto mb-8 font-handwriting">
            Transform your online presence with our custom web development solutions, carefully designed to cater to your business's unique needs and drive results.
        </p>
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
        <h2 class="text-xl font-semibold text-center text-gray-800 mb-4">Contact Us for your Web service</h2>

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
                    Our Web Development Process
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                    <!-- Consultation -->
                    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg">
                        <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 mb-4">Consultation</h3>
                        <p class="text-gray-700 mb-6">
                            We start with a comprehensive consultation to understand your business goals and requirements. Our team works closely with you to ensure we align our strategies with your vision.
                        </p>
                    </div>
                    <!-- Design -->
                    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg">
                        <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 mb-4">Design</h3>
                        <p class="text-gray-700 mb-6">
                            Our design team creates user-friendly and visually appealing designs that reflect your brand identity. We emphasize responsive design to ensure your site looks great on all devices.
                        </p>
                    </div>
                    <!-- Development -->
                    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg">
                        <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 mb-4">Development</h3>
                        <p class="text-gray-700 mb-6">
                            We use the latest technologies to build responsive websites that deliver an exceptional user experience. Our development process is agile, allowing us to adapt quickly to your needs.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Case Studies -->
        <section class="py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl sm:text-4xl font-bold text-blue-700 mb-8">Case Studies</h2>
                <p class="text-lg sm:text-xl text-gray-800 mb-12">
                    Discover how we've helped businesses like yours achieve their goals through our web development services.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-blue-700 mb-4">E-commerce Platform</h3>
                        <p class="text-gray-700">
                            Developed a custom e-commerce platform that increased sales by 40% within the first three months.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-blue-700 mb-4">Educational Portal</h3>
                        <p class="text-gray-700">
                            Launched an interactive educational portal for a local school, enhancing student engagement and learning outcomes.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-blue-700 mb-4">Corporate Website</h3>
                        <p class="text-gray-700">
                            Revamped a corporate website that improved user navigation and increased lead generation by 30%.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="py-20 px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-bold mb-6 text-blue-700 text-center">Why Choose Our Web Development Services?</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h1m4 4h-1v-4h1m-1 4a2 2 0 11-4 0m-4 0a2 2 0 11-4 0m4-4a2 2 0 11-4 0m2 2v-4" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Expert Developers</h4>
                    </div>
                    <p>Our team consists of seasoned developers familiar with the needs and preferences of Indian businesses and users.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Custom Solutions</h4>
                    </div>
                    <p>We provide customized solutions that fit your business requirements, ensuring that your website stands out in a crowded market.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m-8 4h8m-8-8h8m-3 4v2m-1-6v2" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Ongoing Support</h4>
                    </div>
                    <p>We offer ongoing support and maintenance, ensuring your website remains up-to-date and functions smoothly over time.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12l5-5m0 0l5 5m-5-5v18" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Affordable Pricing</h4>
                    </div>
                    <p>We provide competitive pricing without compromising on quality, making professional web development accessible for businesses of all sizes.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-red-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m-8 4h8m-8-8h8m-3 4v2m-1-6v2" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Proven Track Record</h4>
                    </div>
                    <p>Our success stories and satisfied clients are a testament to our commitment to delivering exceptional web solutions.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-teal-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12l5-5m0 0l5 5m-5-5v18" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Cutting-edge Technology</h4>
                    </div>
                    <p>We leverage the latest technologies and frameworks to create modern websites that are fast, reliable, and secure.</p>
                </div>
            </div>
        </section>
        

        <!-- Testimonials -->
        

        <!-- Call to Action -->
        <section class="py-20 bg-gradient-to-r from-blue-200 to-green-200 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-blue-900 mb-6">Ready to Elevate Your Online Presence?</h2>
            <p class="text-lg sm:text-xl text-gray-800 max-w-xl mx-auto mb-8">
                Contact us today to discuss how our web development services can help your business thrive.
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
