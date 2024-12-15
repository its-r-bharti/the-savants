<!-- Main Content Section -->

    <main class="py-24">
        <h2 class="text-5xl font-bold text-center mb-8 text-gray-800">Our Services</h2>


        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-xl mx-auto text-center">

                <h2 class="mt-6 text-2xl font-bold leading-tight text-black sm:text-2xl lg:text-3xl">The Savants Helps
                    You to
                    Grow Your Business Online</h2>

            </div>
        </div>
        <br><br>

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

            .service-card::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 0%;
                /* Initially set the width to 0 */
                height: 100%;
                background-color: #cce7ff;
                transition: all 0.5s ease;
                z-index: 0;
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
                padding: 1.5rem;
            }

            .service-card img {
                height: 64px;
                width: 64px;
                margin-bottom: 1rem;
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

            .container1 {
                margin: 0 auto;
                padding: 0rem 2rem 5rem 2rem;
                max-width: 60%;
            }

            @media (max-width: 639px) {
                .container1 {
                    max-width: 85%;
                }
            }
        </style>

        <style>
            @keyframes slideLeft {
                from {
                    transform: translateX(-100%);
                    opacity: 0;
                }

                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }

            @keyframes slideRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }

                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }

            @keyframes slideCenter {
                from {
                    transform: translateY(30px);
                    opacity: 0;
                }

                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            .service-card {
                opacity: 0;
                transform: translateY(30px);
                transition: transform 0.5s ease-out, opacity 0.5s ease-out;
            }

            .service-card.show-left {
                animation: slideLeft 1s forwards;
            }

            .service-card.show-right {
                animation: slideRight 1s forwards;
            }

            .service-card.show-center {
                animation: slideCenter 1s forwards;
            }

            /* Hover effect */
            .service-card:hover {
                transform: translateY(-5px);
            }

            .service-card-content {
                text-align: center;
                padding: 1.5rem;
            }

            .service-card img {
                height: 64px;
                width: 64px;
                margin-bottom: 1rem;
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
        </style>

        <div class="container1">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- App Development -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="{{ asset('img/app.png') }}" alt="App Development">
                        <h3>App Development</h3>
                        <p>Transforming your ideas into functional apps. Let’s bring your vision to life with our
                            expertise in app development.</p>
                    </div>
                </div>

                <!-- E-commerce Website -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="{{ asset('img/ecommerce.png') }}" alt="E-commerce Website">
                        <h3>E-commerce Website</h3>
                        <p>Build your online store with ease. Let’s create an e-commerce website that boosts your
                            business.</p>
                    </div>
                </div>

                <!-- Software Development -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="{{ asset('img/softwar.png') }}" alt="Software Development">
                        <h3>Software Development</h3>
                        <p>Crafting customized software to streamline your operations. Let’s bring your ideas to life
                            with our expertise in software development.</p>
                    </div>
                </div>

                <!-- Game Development -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="{{ asset('img/game.png') }}" alt="Game Development">
                        <h3>Game Development</h3>
                        <p>Bringing your gaming ideas to life. Let’s create an immersive experience together.</p>
                    </div>
                </div>

                <!-- Graphic Designing -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="{{ asset('img/graphic.png') }}" alt="Graphic Designing">
                        <h3>Graphic Designing</h3>
                        <p>From logos to banners, we’ve got your graphic design needs covered. Let’s bring your vision
                            to life with stunning visuals.</p>
                    </div>
                </div>

                <!-- Digital Marketing -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="{{ asset('img/market.png') }}" alt="Digital Marketing">
                        <h3>Digital Marketing</h3>
                        <p>Boost your online presence with strategic digital marketing. Let’s drive growth and
                            engagement together.</p>
                    </div>
                </div>

                <!-- Google My Business -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="{{ asset('img/ecommerce.png') }}" alt="Google My Business">
                        <h3>Google My Business</h3>
                        <p>Optimize your presence on Google with ease. Let's ensure your business shines in local
                            searches.</p>
                    </div>
                </div>

                <!-- Content Writer -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="{{ asset('img/content.png') }}" alt="Content Writer">
                        <h3>Content Writer</h3>
                        <p>Engage your audience with captivating content. Let's tell your story with words that
                            resonate.</p>
                    </div>
                </div>

                <!-- SEO -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="{{ asset('img/seo.png') }}" alt="SEO">
                        <h3>SEO</h3>
                        <p>Improve your online visibility with effective SEO strategies. Let’s get your website ranking
                            higher and attracting more visitors.</p>
                    </div>
                </div>

                <!-- Training and Placement -->
                <div class="service-card">
                    <div class="service-card-content">
                        <img src="{{ asset('img/training.png') }}" alt="Training and Placement">
                        <h3>Training and Placement</h3>
                        <p>Unlock your potential with our training programs. Let’s help you find the perfect placement
                            to kickstart your career.</p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Detect when the element is in the viewport and apply corresponding animation
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



        <!-- Services Section -->
        {{-- <section>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 px-8 ">
                <!-- Web Development & Management -->
                <div
                    class="bg-gradient-to-r from-blue-200 to-green-200 shadow-lg rounded-lg p-6 text-gray-900 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-4">
                            <!-- SVG Icon -->
                            <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17l2.25-2.25L18 20.25V12h1.5V6.75h-6.75V12L9.75 9.75V6H6V12H4.5v8.25H9v-3.75z">
                                </path>
                            </svg>
                            <h3 class="text-xl font-bold">Web Development & Website Management</h3>
                        </div>
                        <p class="mb-4">Bring your business online with a professional website. From simple to
                            advanced solutions, we manage it all.</p>
                        <ul class="space-y-2">

                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                E-commerce integration, SEO optimization, dynamic content
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Advanced security protocols, SSL certificates, and GDPR compliance
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Performance optimization, lightning-fast loading times
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Analytics integration, real-time data tracking, and reporting
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                And many more powerful features
                            </li>
                        </ul>
                    </div>
                    <!-- Explore Now Button -->
                    <div class="mt-6">
                        <a href="/webapp"
                            class="inline-block bg-white text-green-600 font-bold py-2 px-4 rounded-lg shadow-md hover:bg-gray-100 transition">Explore
                            Now</a>
                    </div>
                </div>


                <!-- School Management System -->
                <div
                    class="bg-gradient-to-r from-blue-200 to-gray-200 shadow-lg rounded-lg p-6 text-gray-900 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-4">
                            <!-- SVG Icon -->
                            <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071l.879-.879a1.992 1.992 0 011.414-.586h9.172a1.992 1.992 0 011.414.586l.879.879M15 11.5a3.5 3.5 0 01-7 0m7 0a3.5 3.5 0 01-7 0M19.5 11V8.5a5 5 0 00-5-5h-5a5 5 0 00-5 5V11">
                                </path>
                            </svg>
                            <h3 class="text-xl font-bold">School Management System</h3>
                        </div>
                        <p class="mb-4">Simplify school administration with our comprehensive system, designed to
                            handle everything from admissions to alumni management.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Student Enrollment & Attendance Tracking
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Timetable & Class Scheduling
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Fee Payments & Financial Reports
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Parent-Teacher Communication Portal
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Exam & Grade Management
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Hostel & Transport Management
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Alumni Management & Event Coordination
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                And many more powerful features
                            </li>
                        </ul>
                    </div>
                    <!-- Explore Now Button -->
                    <div class="mt-6">
                        <a href="/school"
                            class="inline-block bg-white text-gray-900 font-bold py-2 px-4 rounded-lg shadow-md hover:bg-gray-100 transition">Explore
                            Now</a>
                    </div>
                </div>


                <!-- Enterprise Management System -->
                <div
                    class="bg-gradient-to-r from-blue-200 to-red-200 shadow-lg rounded-lg p-6 text-gray-900 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-4">
                            <!-- SVG Icon -->
                            <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v8m4-4H8"></path>
                            </svg>
                            <h3 class="text-xl font-bold">Enterprise Management System</h3>
                        </div>
                        <p class="mb-4">Maximize productivity with our enterprise-grade management system, offering
                            full control over operations, HR, and more.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Employee Management & Payroll
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Project & Task Tracking
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Financial Management & Reporting
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Inventory & Asset Management
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                HR Management & Recruitment
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Customer Relationship Management (CRM)
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Document Management & Collaboration
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Analytics & Performance Tracking
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                And many more powerful features tailored for your enterprise's success
                            </li>
                        </ul>
                    </div>
                    <!-- Explore Now Button -->
                    <div class="mt-6">
                        <a href="/office"
                            class="inline-block bg-white text-red-600 font-bold py-2 px-4 rounded-lg shadow-md hover:bg-gray-100 transition">Explore
                            Now</a>
                    </div>
                </div>

            </div>
        </section> --}}
        </div>

    </main>

