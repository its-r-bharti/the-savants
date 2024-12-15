<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>

<body>
    <div class="bg-white">
        @include('components.navbar')


        



        <section class="relative pt-60 pb-20 bg-gradient-to-r from-green-200 via-blue-200 to-blue-300 text-white overflow-hidden">
            <!-- Decorative Left Circle -->
            <div class="absolute top-0 left-0 transform -translate-x-1/2 translate-y-1/4 overflow-hidden">
                <svg width="400" height="400" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="opacity-30 max-w-full">
                    <circle cx="50" cy="50" r="50" fill="#ffffff" />
                </svg>
            </div>
        
            <!-- Decorative Right Circle -->
            <div class="absolute top-0 right-0 transform translate-x-1/2 translate-y-1/4 overflow-hidden">
                <svg width="400" height="400" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="opacity-30 max-w-full">
                    <circle cx="50" cy="50" r="50" fill="#ffffff" />
                </svg>
            </div>
        
            <!-- Blockchain Network Effect -->
            <div class="absolute inset-0 z-0">
                <!-- SVG for blockchain lines and nodes -->
                <svg
                    class="absolute inset-0 w-full h-full"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1920 1080"
                    preserveAspectRatio="none"
                >
                    <!-- Lines -->
                    <line x1="10%" y1="10%" x2="30%" y2="30%" stroke="white" stroke-width="2" class="opacity-50 animate-pulse" />
                    <line x1="30%" y1="30%" x2="50%" y2="20%" stroke="white" stroke-width="2" class="opacity-50 animate-pulse" />
                    <line x1="50%" y1="20%" x2="70%" y2="40%" stroke="white" stroke-width="2" class="opacity-50 animate-pulse" />
                    <line x1="70%" y1="40%" x2="90%" y2="30%" stroke="white" stroke-width="2" class="opacity-50 animate-pulse" />
                    <line x1="90%" y1="30%" x2="80%" y2="50%" stroke="white" stroke-width="2" class="opacity-50 animate-pulse" />
                    <line x1="80%" y1="50%" x2="60%" y2="60%" stroke="white" stroke-width="2" class="opacity-50 animate-pulse" />
                    <line x1="60%" y1="60%" x2="40%" y2="80%" stroke="white" stroke-width="2" class="opacity-50 animate-pulse" />
                    <line x1="40%" y1="80%" x2="20%" y2="60%" stroke="white" stroke-width="2" class="opacity-50 animate-pulse" />
        
                    <!-- Nodes -->
                    <circle cx="10%" cy="10%" r="8" fill="#22c55e" class="animate-scale" />
                    <circle cx="30%" cy="30%" r="8" fill="#3b82f6" class="animate-scale" />
                    <circle cx="50%" cy="20%" r="8" fill="#facc15" class="animate-scale" />
                    <circle cx="70%" cy="40%" r="8" fill="#a855f7" class="animate-scale" />
                    <circle cx="90%" cy="30%" r="8" fill="#ef4444" class="animate-scale" />
                    <circle cx="80%" cy="50%" r="8" fill="#fdba74" class="animate-scale" />
                    <circle cx="60%" cy="60%" r="8" fill="#10b981" class="animate-scale" />
                    <circle cx="40%" cy="80%" r="8" fill="#eab308" class="animate-scale" />
                    <circle cx="20%" cy="60%" r="8" fill="#f43f5e" class="animate-scale" />
                </svg>
            </div>
        
            <!-- Content -->
            <div class="relative z-10 max-w-7xl mx-auto px-4 lg:px-8 text-center">
                <h2 class="text-5xl font-bold mb-6 tracking-wide animate-fade-in text-blue-900">
                    We Deliver Your Thoughts <span class="text-red-700">- Long Term IT Partner</span>
                </h2>
                <p class="text-2xl mb-10 leading-relaxed max-w-2xl text-gray-900 mx-auto">
                    At The Savants, we’re dedicated to turning your ideas into reality with innovative IT solutions. Since our inception, we’ve been helping businesses like yours grow with custom web and mobile applications tailored just for you.
                </p>
            </div>
        </section>
        
        <!-- Tailwind CSS Animations -->
        <style>
        @keyframes scale {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.3);
            }
        }
        
        .animate-scale {
            animation: scale 3s infinite ease-in-out;
        }
        
        .animate-pulse {
            animation: pulse 2s infinite;
        }
        </style>
        
            
            
            
    
            


            <!-- Main Header Section -->


            <!-- Why People Choose The Savants Section -->

            <section class="bg-[#FCF8F1] bg-opacity-30 py-6 sm:py-10 lg:py-14">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="grid items-center grid-cols-1 gap-16 lg:grid-cols-2">
                        <div>
                            <h3 class=" text-xl font-bold text-black sm:text-3xl xl:text-4xl">Why People Choose The
                                Savants</h3>
                            <p class="mt-4 text-base text-black lg:mt-8 sm:text-lg font-sans">
                                We provide complete solutions that integrate seamlessly with your
                                existing systems, reducing the need for major changes. Unlike other firms that offer
                                separate
                                software solutions requiring you to manage different portals, we offer efficiency and
                                simplicity.
                            </p>


                        </div>

                        <div>
                            <img class="w-full" src="{{ asset('img/why.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </section>


              {{-- Web Development & Designing --}}
         <section class="bg-[#FCF8F1] bg-opacity-30 py-6 sm:py-10 lg:py-14">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-16 lg:grid-cols-2">

                    <div>
                        <img class="w-full" src="{{ asset('img/website.png') }}" alt="" />
                    </div>
                    <div>
                        <h3 class=" text-xl font-bold text-black sm:text-3xl xl:text-4xl">Web
                            Development & Designing</h3>

                        <div class="relative flex items-center justify-center my-6">
                            <hr class="w-full border-gray-800 border-t-2">
                            <div class="absolute bg-gray-900 px-4 py-2 rounded-full">
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                        <p class="mt-4 text-base text-black lg:mt-8 sm:text-lg font-sans">
                            With a professionally designed website, your visibility is worldwide! With a website,
                            people looking for your services or products will be able to find you easily using their
                            favorite search engine. Anyone who is serious about their products or services is better
                            off having a website that better communicates what they are and what they have to offer.
                        </p>
                        <br>
                        <ul class="space-y-4 list-disc list-inside md:list-outside md:pl-8 text-gray-700">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Fully Responsive Design</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>SEO Optimized for Better Visibility</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Regular Updates and Maintenance</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Better Visibility</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Better Than Print Advertising</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>A Professional Touch</span>
                            </li>
                        </ul>

                    </div>


                </div>
            </div>
        </section>

        {{-- Software Development --}}
        <section class="bg-[#FCF8F1] bg-opacity-30 py-6 sm:py-10 lg:py-14">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-16 lg:grid-cols-2">


                    <div>
                        <h3 class=" text-xl font-bold text-black sm:text-3xl xl:text-4xl">Software Development</h3>

                        <div class="relative flex items-center justify-center my-6">
                            <hr class="w-full border-gray-800 border-t-2">
                            <div class="absolute bg-gray-900 px-4 py-2 rounded-full">
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                        <p class="mt-4 text-base text-black lg:mt-8 sm:text-lg font-sans">
                            The changing dynamics of industry, business, and technology create opportunities for new
                            software solutions. Accelerated market introduction provides an early mover advantage
                            and avoids unnecessary expenses. Over the past 14 years, we have introduced more than
                            150 new software solutions. By developing our capabilities, we deliver high-quality
                            software faster and more cost- effectively using fewer resources, best-in-class tools,
                            and standardized practices.
                        </p>
                        <br>
                        <ul class="space-y-4 list-disc list-inside md:list-outside md:pl-8 text-gray-700">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>New opportunities from changing landscapes.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Early mover advantage through accelerated introduction.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Over 150 new software solutions in 10 years.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Deliver high-quality software faster and cost-effectively.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Utilize best resources, practices, and tools.</span>
                            </li>

                        </ul>

                    </div>

                    <div>
                        <img class="w-full" src="{{ asset('img/software.png') }}" alt="" />
                    </div>


                </div>
            </div>
        </section>

        {{-- Web-based IT Solutions --}}
        <section class="bg-[#FCF8F1] bg-opacity-30 py-6 sm:py-10 lg:py-14">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-16 lg:grid-cols-2">

                    <div>
                        <img class="w-full" src="{{ asset('img/web.png') }}" alt="" />
                    </div>
                    <div>
                        <h3 class=" text-xl font-bold text-black sm:text-3xl xl:text-4xl">Web-based IT Solutions
                        </h3>

                        <div class="relative flex items-center justify-center my-6">
                            <hr class="w-full border-gray-800 border-t-2">
                            <div class="absolute bg-gray-900 px-4 py-2 rounded-full">
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                        <p class="mt-4 text-base text-black lg:mt-8 sm:text-lg font-sans">Today the Internet is a
                            huge marketplace that is potentially capable of covering the entire world's population.
                            This is why electronic commerce i.e. e-commerce is so attractive to many traditional
                            businesses.</p>
                        <p class="mt-4 text-base text-black lg:mt-8 sm:text-lg font-sans"> In the virtual world, there is always an element of suspicion when sending or receiving
                            sensitive information. A large percentage of Internet users leave a website when asked
                            to provide any information about themselves.
                        </p>
                        <br>
                        <ul class="space-y-4 list-disc list-inside md:list-outside md:pl-8 text-gray-700">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Bulk Text Message</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Web Hosting</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Voice Message/OBD</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Payment Gateway</span>
                            </li>
                            
                        </ul>

                    </div>


                </div>
            </div>
        </section>


        {{-- Innovative Electronics Solutions --}}
        <section class="bg-[#FCF8F1] bg-opacity-30 py-6 sm:py-10 lg:py-14">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-16 lg:grid-cols-2">
        
                    
                    <div>
                        <h3 class="text-xl font-bold text-black sm:text-3xl xl:text-4xl">Innovative Electronics Solutions</h3>
        
                        <div class="relative flex items-center justify-center my-6">
                            <hr class="w-full border-gray-800 border-t-2">
                            <div class="absolute bg-gray-900 px-4 py-2 rounded-full">
                                <i class="fas fa-bolt text-white"></i>
                            </div>
                        </div>
        
                        <p class="mt-4 text-base text-black lg:mt-8 sm:text-lg font-sans">The electronics industry drives innovation, connecting the world with smarter and more efficient technologies. From consumer devices to industrial systems, electronics shape the future.</p>
                        <p class="mt-4 text-base text-black lg:mt-8 sm:text-lg font-sans">Modern electronic solutions offer high precision, reliability, and versatility across multiple domains, empowering businesses and individuals to achieve more with cutting-edge technology.</p>
                        <br>
                        <ul class="space-y-4 list-disc list-inside md:list-outside md:pl-8 text-gray-700">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Embedded Systems Design</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>IoT Integration</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>PCB Design and Prototyping</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>Power Electronics Solutions</span>
                            </li>
                        </ul>
        
                    </div>
                    <div>
                        <img class="w-full" src="{{ asset('img/electronics.png') }}" alt="Electronics Solutions" />
                    </div>
        
                </div>
            </div>
        </section>
            








        
        @include('components.contact')
        {{-- @include('components.team') --}}
        @include('components.footer')
    </div>

</body>

</html>
