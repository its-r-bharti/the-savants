


<section class="py-12 bg-white sm:py-16 lg:py-20">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl relative">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- FAQ Header -->
            <div class="lg:col-span-2">
                <span
                    class="inline-block px-4 py-2 mb-4 text-sm font-semibold text-white bg-orange-400 rounded-full">FAQ</span>
                <h2 class="text-4xl font-extrabold leading-tight text-gray-900 sm:text-5xl">General Question</h2>
                <p class="max-w-xl mt-4 text-lg leading-relaxed text-gray-600">Do you have a question? Don’t hesitate to
                    reach out to us. Our team is here to assist you every step of the way.</p>

                <!-- FAQ Items -->
                <div class="space-y-6 mt-6">
                    <div>
                        <p class="text-lg font-medium text-gray-900">What technology is used for web development?</p>
                        <p class="mt-2 text-gray-700">We utilize a variety of technologies and platforms for web
                            development, including HTML, CSS, JavaScript, and popular frameworks like React and Angular.
                            Our approach is tailored to meet the specific needs of each project, ensuring optimal
                            performance and user experience.</p>
                        <hr class="my-4 border-gray-300">
                    </div>

                    <div class="faq-item">
                        <button type="button"
                            class="flex items-center justify-between w-full px-0 py-4 text-left bg-white hover:bg-gray-50">
                            <span class="text-lg font-medium text-gray-900">How is social media marketing effective in
                                business?</span>
                            <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden">
                            <p class="text-gray-700">Social media marketing enhances brand visibility, engages with
                                customers, and drives traffic to your website, ultimately increasing conversions and
                                fostering customer loyalty.</p>
                        </div>
                        <hr class="my-4 border-gray-300">
                    </div>

                    <div class="faq-item">
                        <button type="button"
                            class="flex items-center justify-between w-full px-0 py-4 text-left bg-white hover:bg-gray-50">
                            <span class="text-lg font-medium text-gray-900">What services does your IT company
                                offer?</span>
                            <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden">
                            <p class="text-gray-700">We offer web development, school management systems, office
                                management solutions, and ongoing technical support tailored to your business needs.</p>
                        </div>
                        <hr class="my-4 border-gray-300">
                    </div>

                    <div class="faq-item">
                        <button type="button"
                            class="flex items-center justify-between w-full px-0 py-4 text-left bg-white hover:bg-gray-50">
                            <span class="text-lg font-medium text-gray-900">Do you provide ongoing support after project
                                completion?</span>
                            <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden">
                            <p class="text-gray-700">Yes, we offer ongoing support and maintenance to ensure that your
                                systems and solutions continue to perform optimally. Our dedicated support team is
                                always available to assist with any issues or updates.</p>
                        </div>
                        <hr class="my-4 border-gray-300">
                    </div>

                    <div class="faq-item">
                        <button type="button"
                            class="flex items-center justify-between w-full px-0 py-4 text-left bg-white hover:bg-gray-50">
                            <span class="text-lg font-medium text-gray-900">How can I get started with your
                                services?</span>
                            <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden">
                            <p class="text-gray-700">To get started, reach out to us via our contact form or phone
                                number. We’ll discuss your requirements and provide a tailored plan to meet your needs.
                            </p>
                        </div>
                        <hr class="my-4 border-gray-300">
                    </div>
                </div>
            </div>

            <!-- Sidebar Call to Action -->
            <div
                class="bg-gray-800 text-white p-4 rounded-3xl relative shadow-lg hover:shadow-xl  transition-shadow duration-300 w-[300px] h-[250px] flex flex-col justify-center items-center">
                <p class="text-lg font-semibold mb-4 text-center">Don't See The Answer You Need? Contact Us</p>
                <p class="text-sm mb-6 text-center">If you don’t see the answer you need, don’t hesitate to contact us.
                </p>
                <a href="#contactModal"
                    class="block w-[50%] h-10 flex items-center justify-center text-white bg-indigo-500 rounded-3xl border-2 border-indigo-500 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400 transition duration-200 mb-4"
                    onclick="toggleModal(true)">Contact Us</a>

            </div>




        </div>
    </div>
</section>

<div id="contactModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden z-50">
    <!-- Modal Content -->
    <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg space-y-4">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold text-gray-800">Talk to Us</h2>
            <button onclick="toggleModal(false)" class="text-gray-400 hover:text-gray-600">
                ✕
            </button>
        </div>
        @if (Session::has('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var successMessage = '{{ Session::get('success') }}';
                    if (successMessage) {
                        alert(successMessage);
                    }
                });
            </script>
        @endif
        <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" required
                        class="mt-1 w-full px-3 py-2 text-sm bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" required
                        class="mt-1 w-full px-3 py-2 text-sm bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Phone</label>
                    <input type="text" name="phone" required
                        class="mt-1 w-full px-3 py-2 text-sm bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Organization</label>
                    <input type="text" name="company" required
                        class="mt-1 w-full px-3 py-2 text-sm bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Message</label>
                <textarea name="message" rows="3" required
                    class="mt-1 w-full px-3 py-2 text-sm bg-gray-100 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>
            <button id="submitBtn" type="submit"
                class="w-full py-2 text-sm font-medium text-white bg-indigo-500 border-2 border-orange-500  hover:text-gray-900 hover:bg-gray-50 active:bg-indigo-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 flex justify-center items-center">
                <span id="buttonText">Submit</span>
                <span id="loadingSpinner"
                    class="hidden ml-2 w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin"></span>
            </button>
        </form>
    </div>
</div>

<style>
    .animation-slide-in {
        animation: slide-in 1s ease-in-out;
    }

    @keyframes slide-in {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
</style>

<script>
    // function toggleModal(show) {
    //     const modal = document.getElementById('contactModal');
    //     modal.classList.toggle('hidden', );
    // }
    // const form = document.getElementById('contactForm');
    // const submitBtn = document.getElementById('submitBtn');
    // const buttonText = document.getElementById('buttonText');
    // const loadingSpinner = document.getElementById('loadingSpinner');

    // form.addEventListener('submit', function(e) {
    //     // Show spinner and disable button
    //     submitBtn.disabled = true;
    //     buttonText.textContent = 'Sending...';
    //     loadingSpinner.classList.remove('hidden');
    // });
    // FAQ Toggle Functionality
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const button = item.querySelector('button');
        const content = item.querySelector('.faq-content');

        button.addEventListener('click', () => {
            const isActive = !content.classList.contains('hidden');

            faqItems.forEach(i => i.querySelector('.faq-content').classList.add('hidden'));

            if (!isActive) {
                content.classList.remove('hidden');
            }
        });
    });

    
</script>
