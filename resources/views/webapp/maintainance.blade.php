<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.header')
    <title>Website & App Maintenance Services | The Savants</title>
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
            Reliable Website & App Maintenance Services
        </h1>
        <p class="text-lg sm:text-xl text-gray-800 max-w-3xl mx-auto mb-8 font-handwriting">
            Keep your digital presence running smoothly and efficiently with our comprehensive maintenance solutions.        </p>
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
        <h2 class="text-xl font-semibold text-center text-gray-800 mb-4">Contact Us for Maintenance</h2>

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

        <!-- Maintenance Overview -->
        <section class="py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-green-700 mb-12">
                    Why Maintenance Matters
                </h2>
                <p class="text-lg sm:text-xl text-gray-800 max-w-3xl mx-auto mb-8">
                    Regular maintenance is crucial for ensuring your website and app operate optimally. It prevents issues before they arise and keeps your audience engaged.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                    <!-- Performance Monitoring -->
                    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg">
                        <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 mb-4">Performance Monitoring</h3>
                        <p class="text-gray-700 mb-6">
                            We monitor your website and app performance, ensuring fast loading times and smooth user experiences.
                        </p>
                    </div>
                    <!-- Security Updates -->
                    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg">
                        <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 mb-4">Security Updates</h3>
                        <p class="text-gray-700 mb-6">
                            Our team applies the latest security patches to keep your website and app safe from potential threats.
                        </p>
                    </div>
                    <!-- Content Updates -->
                    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg">
                        <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 mb-4">Content Updates</h3>
                        <p class="text-gray-700 mb-6">
                            We provide ongoing content updates to ensure your site stays fresh and relevant to your audience.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits of Our Services -->
        <section class="py-20 px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-bold mb-6 text-blue-700 text-center">Why Choose Our Website & App Maintenance Services?</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v1m0 14v1m0-14h1m-1 0H6m0 0h1m11-1h1M7 12h3m0 0h5m0 0h-1m-1 0h-1" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Regular Updates</h4>
                    </div>
                    <p>We provide regular updates to ensure your website and apps are functioning optimally and securely.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 1v3m0 16v3m0-16H9m3 0h3m-3 0v3m6 2h-2m-4 0h-2m0-4h4m0 4h-2m-2 0h4" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">24/7 Monitoring</h4>
                    </div>
                    <p>Our team continuously monitors your website and apps to promptly address any issues that may arise.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v4m0 0h4m-4 0H8m0 8h8m0 0h2m-2-2v-4m0 0h-2m2 0h2" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Performance Optimization</h4>
                    </div>
                    <p>We optimize the performance of your website and apps to ensure fast loading times and a smooth user experience.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m-4 0v4m0-4V8m4 8h4m0 0H4m0 0v4m0-4V8" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Backup and Recovery</h4>
                    </div>
                    <p>We implement regular backups to ensure your data is safe and can be quickly restored in case of emergencies.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-red-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2v2m0 18v2m0-2H7m5 0h5m0-14H7m0 0V1m0 2h5" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Security Enhancements</h4>
                    </div>
                    <p>We continuously improve the security of your website and apps to protect against threats and vulnerabilities.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg bg-white transition-transform transform hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="bg-teal-500 text-white rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 12h16M4 18h16m-16-6h16" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold">Analytics and Reporting</h4>
                    </div>
                    <p>We provide detailed analytics and reporting to help you understand your users and make informed decisions.</p>
                </div>
            </div>
        </section>
         

        <!-- Testimonials -->
        

        <!-- Call to Action -->
        <section class="py-20 bg-gradient-to-r from-blue-200 to-green-200 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-blue-900 mb-6">Let Us Handle Your Maintenance Needs!</h2>
            <p class="text-lg sm:text-xl text-gray-800 mb-8">
                Contact us today to discover how our maintenance services can enhance your website and app.
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
