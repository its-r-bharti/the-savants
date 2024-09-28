<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>

<body>
    <div class="bg-white">
        @include('components.navbar')


        <div class="bg-gray-100 ">

            

                <!-- New About Us Section -->
                <section class="relative pt-60 pb-20 bg-gradient-to-r from-green-200 via-blue-200 to-blue-300 text-white">
                  <!-- Background Decorative Circles -->
                  <div class="absolute top-0 left-0 transform -translate-x-1/2 translate-y-1/4">
                    <svg width="400" height="400" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="opacity-30">
                      <circle cx="50" cy="50" r="50" fill="#ffffff"/>
                    </svg>
                  </div>
                  <div class="absolute top-0 right-0 transform translate-x-1/2 translate-y-1/4">
                    <svg width="400" height="400" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="opacity-30">
                      <circle cx="50" cy="50" r="50" fill="#ffffff"/>
                    </svg>
                  </div>
              
                  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 text-center">
                    <h1 class="text-7xl font-bold mb-6 tracking-wide animate-fade-in text-blue-900">Welcome to <span class="text-red-700">The Savants</span></h1>
                    <p class="text-2xl mb-10 leading-relaxed max-w-2xl text-gray-900 mx-auto">Where we craft cutting-edge digital solutions that empower businesses to succeed in today’s competitive market.</p>
              
                    {{-- <!-- New Icons and Grid Structure -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-12">
                      <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/100x100" alt="Custom Web Solutions Icon" class="w-24 h-24 mb-4 transform transition hover:scale-110">
                        <h3 class="text-2xl font-semibold">Custom Web Solutions</h3>
                        <p class="mt-3 text-lg">Tailored, dynamic websites that are scalable and powerful to help your business grow.</p>
                      </div>
                      <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/100x100" alt="School Management Icon" class="w-24 h-24 mb-4 transform transition hover:scale-110">
                        <h3 class="text-2xl font-semibold">School Management Systems</h3>
                        <p class="mt-3 text-lg">Comprehensive, intuitive management systems for schools, designed for seamless operations.</p>
                      </div>
                      <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/100x100" alt="Enterprise Solutions Icon" class="w-24 h-24 mb-4 transform transition hover:scale-110">
                        <h3 class="text-2xl font-semibold">Enterprise Solutions</h3>
                        <p class="mt-3 text-lg">Full-featured office management systems for boosting organizational efficiency.</p>
                      </div>
                    </div> --}}
                  </div>
                </section>
              
                <!-- Rest of the content (Our Journey) as before -->
                <section class="relative py-16 bg-white text-gray-900">
                  <div class="max-w-6xl mx-auto px-6 lg:px-12 text-center">
                    <h2 class="text-4xl font-bold mb-8">Our Journey</h2>
              
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                      <!-- Text Section -->
                      <div>
                        <p class="text-lg mb-6">
                          The Savants started its incredible journey with a passion for innovation and digital excellence. Our breakthrough moment came when we participated in the prestigious <strong>National Startup and Innovation Program</strong> conducted by IIT Roorkee.
                        </p>
                        <p class="text-lg mb-6">
                          Competing among some of the brightest minds and most innovative startups, we proudly secured <strong>first prize</strong> at this national event. This win validated our mission and gave us the momentum to accelerate growth, building solutions that help businesses thrive in the digital age.
                        </p>
                        <p class="text-lg mb-6">
                          Today, we continue to expand on our success, offering world-class web and management systems, driven by our commitment to excellence and the recognition that innovation is at the heart of everything we do.
                        </p>
                      </div>
              
                      <!-- Image Section -->
                      <div class="flex justify-center">
                        <img src="https://via.placeholder.com/400x300" alt="IIT Roorkee Event" class="rounded-lg shadow-lg transform transition hover:scale-105">
                      </div>
                    </div>
                  </div>
                </section>
              

        </div>
        @include('components.contact')
        {{-- @include('components.team') --}}
        @include('components.footer')
    </div>

</body>

</html>