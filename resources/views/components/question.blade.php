<section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Frequently Asked Questions</h2>
            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Find answers to common questions about our school and office management systems.</p>
        </div>

        <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16">
            <div class="faq-item transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                <button type="button" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-black"> What features are included in the School Management System? </span>
                    <svg class="w-6 h-6 text-gray-400 rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content hidden px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>Our School Management System includes features such as student record management, attendance tracking, gradebook, timetable scheduling, and parent-teacher communication tools.</p>
                </div>
            </div>

            <div class="faq-item transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                <button type="button" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-black"> How secure is the school data stored in the system? </span>
                    <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content hidden px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>We use advanced encryption protocols and regular security audits to ensure the data is securely stored and protected from unauthorized access.</p>
                </div>
            </div>

            <div class="faq-item transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                <button type="button" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-black"> What benefits does the Office Management System offer? </span>
                    <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content hidden px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>Our Office Management System helps streamline task management, scheduling, resource allocation, and internal communications, making your operations more efficient.</p>
                </div>
            </div>

            <div class="faq-item transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                <button type="button" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-black"> Can I customize the systems to fit my organization’s needs? </span>
                    <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-content hidden px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>Yes, both systems are highly customizable to fit the specific requirements of your school or office, ensuring they align perfectly with your workflow.</p>
                </div>
            </div>
        </div>

        <p class="text-center text-gray-600 textbase mt-9">Didn’t find the answer you are looking for? <a href="#" title="" class="font-medium text-blue-600 transition-all duration-200 hover:text-blue-700 focus:text-blue-700 hover:underline">Contact our support</a></p>
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
