<section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Frequently Asked Questions</h2>
            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Find answers to common questions about our web development, school management, and office management services.</p>
        </div>

        <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16">
            <div class="faq-item transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                <button type="button" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-black"> What web development services do you offer? </span>
                    <svg class="w-6 h-6 text-gray-400 rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content hidden px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>We offer responsive web development, e-commerce integration, SEO optimization, regular updates, and full website maintenance services to ensure your site runs smoothly and effectively.</p>
                </div>
            </div>

            <div class="faq-item transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                <button type="button" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-black"> How does your School Management System improve school administration? </span>
                    <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content hidden px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>Our School Management System simplifies student record management, attendance tracking, timetable scheduling, and offers communication tools for teachers, parents, and students, streamlining your school's operations.</p>
                </div>
            </div>

            <div class="faq-item transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                <button type="button" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-black"> What security measures are in place for data in your systems? </span>
                    <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content hidden px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>We use advanced encryption, regular security audits, and strict access control to ensure that your data is securely stored and protected from unauthorized access.</p>
                </div>
            </div>

            <div class="faq-item transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                <button type="button" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-black"> Can I customize the systems to meet my specific needs? </span>
                    <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content hidden px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>Yes, our systems are fully customizable to align with your school's or office's unique requirements, ensuring that the platform fits your workflow perfectly.</p>
                </div>
            </div>

            <div class="faq-item transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                <button type="button" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-black"> How does your Office Management System streamline operations? </span>
                    <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content hidden px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>Our Office Management System offers tools for project management, task scheduling, resource allocation, internal communication, and overall efficiency enhancement, helping you run your office smoothly.</p>
                </div>
            </div>
        </div>

        <p class="text-center text-gray-600 text-base mt-9">Didn’t find the answer you are looking for? <a href="#contact" title="" class="font-medium text-blue-600 transition-all duration-200 hover:text-blue-700 focus:text-blue-700 hover:underline">Contact our support</a></p>
    </div>
</section>

<script>
    // Select all FAQ items
    const faqItems = document.querySelectorAll('.faq-item');

    // Loop through each item
    faqItems.forEach(item => {
        const button = item.querySelector('button');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('svg');

        // Add click event listener to each button
        button.addEventListener('click', () => {
            const isActive = content.classList.contains('hidden');
            
            // Close all other FAQ items
            faqItems.forEach(i => {
                i.querySelector('.faq-content').classList.add('hidden');
                i.querySelector('svg').classList.remove('rotate-180');
            });

            // Toggle the clicked FAQ item
            if (isActive) {
                content.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        });
    });
</script>
