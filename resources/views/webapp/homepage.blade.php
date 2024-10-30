<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Patrick+Hand&display=swap" rel="stylesheet">
<style>
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

<body>
    <div class="bg-gradient-to-r from-blue-50 to-green-50 text-gray-900">
        @include('webcomponents.navbar')
       

            <!-- Hero Section -->
            <section class="py-60 bg-gradient-to-br from-green-200 via-blue-200 to-blue-300">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h1 class="text-3xl sm:text-5xl font-bold text-blue-900 mb-6 animate-fade-in text-center relative">
                        <span class="block sm:inline text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-blue-600">
                          All your business on one platform
                        </span> <br>
                        <span class="block sm:inline italic text-green-600 animate-bounce mt-2 font-handwriting">
                          Simple, efficient, <br> yet affordable!
                        </span>
                      </h1>
                    <p class="text-lg sm:text-xl text-gray-800 max-w-3xl mx-auto mb-8">
                        From crafting exceptional websites to building and maintaining powerful mobile and web applications, we are your go-to solution for all digital development needs. Let us take care of your online presence, so you can focus on your business.
                    </p>
                    <a href="#service" class="primary-btn text-white font-bold px-6 sm:px-8 py-3 sm:py-4 rounded-full shadow-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105">
                        Launch Your Project
                    </a>
                </div>
            </section>
        
            <!-- Services Section -->
            <section id="service" class="py-16" >
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl sm:text-4xl font-bold text-center text-green-700 mb-12">
                        Our Comprehensive Services
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                        <!-- Web Development -->
                        <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                            <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 mb-4">Web Development</h3>
                            <p class="text-gray-700 mb-6">
                                Web Development We create stunning, responsive, and secure websites that not only represent your brand but also cater to the diverse needs of Indian users. From e-commerce solutions for small businesses to educational portals for schools, our expertise covers it all.
                            </p>
                            <a href="/web" class="text-green-500 hover:text-green-700 font-semibold">
                                Explore More &rarr;
                            </a>
                        </div>
        
                        <!-- App Development -->
                        <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                            <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 mb-4">App Development</h3>
                            <p class="text-gray-700 mb-6">
                                Our expert team builds dynamic web and mobile applications designed for performance and scalability. From native apps to cross-platform solutions, we ensure seamless user experiences across devices.
                            </p>
                            <a href="/app" class="text-green-500 hover:text-green-700 font-semibold">
                                Explore More &rarr;
                            </a>
                        </div>
        
                        <!-- Website & App Maintenance -->
                        <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                            <h3 class="text-xl sm:text-2xl font-semibold text-blue-700 mb-4">Website & App Maintenance</h3>
                            <p class="text-gray-700 mb-6">
                                Keep your website and apps up-to-date, secure, and running smoothly. We offer regular updates, security patches, and performance optimizations to ensure your platforms always perform at their best.
                            </p>
                            <a href="/maintainance" class="text-green-500 hover:text-green-700 font-semibold">
                                Explore More &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        
            <!-- App Maintenance Feature Section -->
            <section class="py-16 bg-green-100">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl sm:text-4xl font-bold text-green-800 mb-6">
                        Why App Maintenance is Critical
                    </h2>
                    <p class="text-lg sm:text-xl text-gray-800 max-w-2xl mx-auto mb-8">
                        Our app maintenance services ensure that your mobile or web apps are always updated, secure, and functioning seamlessly. We focus on ongoing improvements, bug fixes, and adapting your app to the latest technologies to keep users engaged.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-6">
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <h3 class="text-lg sm:text-xl font-semibold text-blue-800 mb-4">Security Patches</h3>
                            <p class="text-gray-700">Regular security updates to prevent vulnerabilities.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <h3 class="text-lg sm:text-xl font-semibold text-blue-800 mb-4">Performance Optimization</h3>
                            <p class="text-gray-700">Improve app speed and responsiveness for a smoother user experience.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <h3 class="text-lg sm:text-xl font-semibold text-blue-800 mb-4">New Feature Integration</h3>
                            <p class="text-gray-700">Implement new features to keep your app competitive and engaging.</p>
                        </div>
                    </div>
                </div>
            </section>
        
            <!-- Why Choose Us Section -->
            <section class="py-20 bg-blue-50">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl sm:text-4xl font-bold text-blue-700 mb-8">Why Choose Us?</h2>
                    <p class="text-lg sm:text-xl text-gray-800 max-w-3xl mx-auto mb-12">
                        We believe in delivering nothing less than excellence. Our comprehensive development and maintenance services are designed to elevate your digital platforms and ensure their success. From idea to execution, we’re with you every step of the way.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-6">
                        <div class="p-8 bg-white rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <h3 class="text-lg sm:text-xl font-semibold text-green-700 mb-4">Innovative Solutions</h3>
                            <p class="text-gray-700">Our solutions are driven by cutting-edge technology and creativity.</p>
                        </div>
                        <div class="p-8 bg-white rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <h3 class="text-lg sm:text-xl font-semibold text-green-700 mb-4">Dedicated Support</h3>
                            <p class="text-gray-700">We offer round-the-clock support to ensure you have peace of mind.</p>
                        </div>
                        <div class="p-8 bg-white rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <h3 class="text-lg sm:text-xl font-semibold text-green-700 mb-4">Proven Track Record</h3>
                            <p class="text-gray-700">Hundreds of satisfied clients trust us with their digital presence.</p>
                        </div>
                    </div>
                </div>
            </section>
        
            <!-- Call to Action Section -->
            <section class="py-20 bg-gradient-to-r from-blue-200 to-green-200">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl sm:text-4xl font-bold text-blue-900 mb-6">
                        Let's Bring Your Vision to Life
                    </h2>
                    <p class="text-lg sm:text-xl text-gray-800 max-w-xl mx-auto mb-8">
                        Ready to get started? Contact us today and discover how our services can elevate your web and app presence to new heights.
                    </p>
                    <a href="#contact" class="primary-btn text-white font-semibold px-8 sm:px-10 py-3 sm:py-4 rounded-full shadow-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105">
                        Get in Touch
                    </a>
                </div>
            </section>
        
     




    </div>

@include('components.contact')
    @include('components.footer')







</body>

</html>
