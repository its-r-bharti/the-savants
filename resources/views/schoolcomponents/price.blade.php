<section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Pricing & Plans</h2>
        </div>

        <div class="mt-10">
            <div class="flex items-center justify-center space-x-2.5">
                <span class="text-base font-medium text-gray-900"> Monthly </span>

                <button type="button" id="billing-toggle"
                    class="relative inline-flex flex-shrink-0 h-6 py-0.5 transition-colors duration-200 ease-in-out bg-transparent border-2 border-blue-600 rounded-full cursor-pointer w-12 focus:outline-none"
                    role="switch">
                    <span aria-hidden="true" id="toggle-indicator"
                        class="inline-block w-4 h-4 transition duration-200 ease-in-out translate-x-0 bg-blue-600 rounded-full shadow pointer-events-none"></span>
                </button>

                <span class="text-base font-medium text-gray-900"> Yearly </span>
            </div>
        </div>

        <div class="grid max-w-3xl grid-cols-1 gap-6 mx-auto sm:grid-cols-2 mt-14 md:gap-9">



            <!-- Standard Plan -->

            <div class="overflow-hidden bg-transparent border-2 border-gray-200 rounded-md">
                <div class="p-6 md:py-8 md:px-9">
                    <h3 class="text-xl font-semibold text-black">Standard</h3>
                    <p class="mt-2.5 text-sm text-gray-600">Get a dynamic website for your school</p>
                    <div class="flex items-end mt-5">
                        <div class="flex items-start">
                            <span class="text-xl font-medium text-black"> ₹</span>
                            <p id="personal-price" class="text-6xl font-medium tracking-tight" data-monthly="1500"
                                data-yearly="15000">1500</p>
                        </div>
                        <span class="ml-0.5 text-lg text-gray-600"> / <span
                                id="personal-billing-period">month</span></span>
                    </div>

                    <button id="open-standard-form"
                        class="inline-flex items-center justify-center w-full px-4 py-3 mt-6 font-semibold text-gray-900 transition-all duration-200 bg-transparent border-2 rounded-full border-fuchsia-600 hover:bg-fuchsia-600 hover:text-white focus:text-white focus:bg-fuchsia-600">
                        Start 30 Days Free Trial
                    </button>

                    <ul class="flex flex-col mt-8 space-y-4">
                        <li class="inline-flex items-center space-x-2">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-base font-medium text-gray-900"> Get a Dynamic and Static Website </span>
                            <svg class="w-4 h-4 ml-0.5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </li>

                        <li class="inline-flex items-center space-x-2">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-base font-medium text-gray-900"> 3 Minor Changes Per Month </span>
                        </li>

                        <li class="inline-flex items-center space-x-2">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-base font-medium text-gray-900"> SEO Optimization </span>
                        </li>

                        <li class="inline-flex items-center space-x-2">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-base font-medium text-gray-900"> Mobile & Tablet Compatibility </span>
                        </li>

                        <li class="inline-flex items-center space-x-2">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-base font-medium text-gray-900">Performance Monitoring </span>
                        </li>

                        <li class="inline-flex items-center space-x-2">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-base font-medium text-gray-900"> Premium Support </span>
                        </li>
                    </ul>
                </div>
            </div>




            <!-- Professional Plan -->

            <div class="overflow-hidden bg-white border-2 border-transparent rounded-md">
                <div class="p-6 md:py-8 md:px-9">
                    <h3 class="text-xl font-semibold text-black">Professional</h3>
                    <p class="mt-2.5 text-sm text-gray-600">All the extended features for your school</p>
                    <div class="flex items-end mt-5">
                        <div class="flex items-start">
                            <span class="text-xl font-medium text-black"> ₹ </span>
                            <p id="agency-price" class="text-6xl font-medium tracking-tight" data-monthly="4000"
                                data-yearly="40000">4000</p>
                        </div>
                        <span class="ml-0.5 text-lg text-gray-600"> / <span
                                id="agency-billing-period">month</span></span>
                    </div>

                    <button id="open-professional-form"
                        class="inline-flex items-center justify-center w-full px-4 py-3 mt-6 font-semibold text-white transition-all duration-200 border-2 border-transparent rounded-full bg-gradient-to-r from-fuchsia-600 to-blue-600 hover:opacity-80 focus:opacity-80">
                        Start 30 Days Free Trial
                    </button>
                    <ul class="flex flex-col mt-8 space-y-4">
                        <li class="inline-flex items-center space-x-2">
                            {{-- <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg> --}}
                            <span class="text-base font-extrabold text-gray-900"> Everything in Standard + </span>
                            <svg class="w-4 h-4 ml-0.5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </li>



                        <li class="inline-flex items-center space-x-2">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-base font-medium text-gray-900"> Complete School Management System   </span>
                        </li>

                        <li class="inline-flex items-center space-x-2">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-base font-medium text-gray-900"> Admin ,accountant & teacher Portal
                            </span>
                        </li>

                        <li class="inline-flex items-center space-x-2">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-base font-medium text-gray-900"> Parent & Student Portal </span>
                        </li>

                        <li class="inline-flex items-center space-x-2">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-base font-medium text-gray-900"> Transporting manage System </span>
                        </li>

                        <li class="inline-flex items-center space-x-2">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-base font-medium text-gray-900"> Data Backup & Security </span>
                        </li>

                        <li class="inline-flex items-center space-x-2">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-base font-medium text-gray-900"> Dedicated Support Team </span>
                        </li>


                    </ul>


                </div>
            </div>
        </div>
    </div>

    <!-- Standard Plan Modal with Form -->
    <div id="standard-modal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-md">
            <h3 class="text-xl font-semibold text-black">Standard Plan Subscription</h3>
            <form id="standard-plan-form">
                <label for="name-standard" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name-standard"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Enter your name" required>

                <label for="email-standard" class="block text-sm font-medium text-gray-700 mt-4">Email</label>
                <input type="email" id="email-standard"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Enter your email" required>

                <label for="school-name-standard" class="block text-sm font-medium text-gray-700 mt-4">School
                    Name</label>
                <input type="text" id="school-name-standard"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Enter school name" required>

                <label for="Phone Number" class="block text-sm font-medium text-gray-700 mt-4">Phone Number</label>
                <input type="number" id="school-name-standard"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Enter Phone Number" required>

                <label for="template-standard" class="block text-sm font-medium text-gray-700 mt-4">Select Template Id
                </label>
                <select id="template-standard"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="template1">Template 1</option>
                    <option value="template2">Template 2</option>
                    <option value="template3">Template 3</option>
                </select>

                <div class="sm:col-span-2">
                    <label for="" class="text-base font-medium text-gray-900"> Message </label>
                    <div class="mt-2.5 relative">
                        <textarea name="" id="" placeholder=""
                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md resize-y focus:outline-none focus:border-blue-600 caret-blue-600"
                            rows="4"></textarea>
                    </div>
                </div>

                <button id="close-standard-modal"
                    class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md">Close</button>
                <button id="Submit-standard-modal"
                    class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md">Submit</button>
            </form>
        </div>
    </div>

    <!-- Professional Plan Modal with Form -->
    <div id="professional-modal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-md">
            <h3 class="text-xl font-semibold text-black">Professional Plan Subscription</h3>
            <form id="professional-plan-form">
                <label for="name-professional" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name-professional"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Enter your name" required>

                <label for="email-professional" class="block text-sm font-medium text-gray-700 mt-4">Email</label>
                <input type="email" id="email-professional"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Enter your email" required>

                <label for="school-name-professional" class="block text-sm font-medium text-gray-700 mt-4">School
                    Name</label>
                <input type="text" id="school-name-professional"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Enter school name" required>

                <label for="Phone Number" class="block text-sm font-medium text-gray-700 mt-4">Phone Number</label>
                <input type="number" id="school-name-standard"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Enter Phone Number" required>

                <label for="template-professional" class="block text-sm font-medium text-gray-700 mt-4">Select
                    Template Id</label>
                <select id="template-professional"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="template1">Template 1</option>
                    <option value="template2">Template 2</option>
                    <option value="template3">Template 3</option>
                </select>

                <div class="sm:col-span-2">
                    <label for="" class="text-base font-medium text-gray-900"> Message </label>
                    <div class="mt-2.5 relative">
                        <textarea name="" id="" placeholder=""
                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md resize-y focus:outline-none focus:border-blue-600 caret-blue-600"
                            rows="4"></textarea>
                    </div>
                </div>

                <button id="close-professional-modal"
                    class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md">Close</button>
                <button id="Submit-professional-modal"
                    class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md">Submit</button>
            </form>
        </div>
    </div>




</section>

<script>
    // Handle toggle for monthly/yearly switch
    document.getElementById('billing-toggle').addEventListener('click', function() {
        const toggle = document.getElementById('toggle-indicator');
        const personalPrice = document.getElementById('personal-price');
        const agencyPrice = document.getElementById('agency-price');
        const personalBillingPeriod = document.getElementById('personal-billing-period');
        const agencyBillingPeriod = document.getElementById('agency-billing-period');

        if (toggle.classList.contains('translate-x-0')) {
            toggle.classList.remove('translate-x-0');
            toggle.classList.add('translate-x-6');
            personalPrice.textContent = personalPrice.getAttribute('data-yearly');
            agencyPrice.textContent = agencyPrice.getAttribute('data-yearly');
            personalBillingPeriod.textContent = 'year';
            agencyBillingPeriod.textContent = 'year';
        } else {
            toggle.classList.remove('translate-x-6');
            toggle.classList.add('translate-x-0');
            personalPrice.textContent = personalPrice.getAttribute('data-monthly');
            agencyPrice.textContent = agencyPrice.getAttribute('data-monthly');
            personalBillingPeriod.textContent = 'month';
            agencyBillingPeriod.textContent = 'month';
        }
    });

    // Handle opening and closing of modals
    document.getElementById('open-standard-form').addEventListener('click', function() {
        document.getElementById('standard-modal').classList.remove('hidden');
    });
    document.getElementById('close-standard-modal').addEventListener('click', function() {
        document.getElementById('standard-modal').classList.add('hidden');
    });

    document.getElementById('open-professional-form').addEventListener('click', function() {
        document.getElementById('professional-modal').classList.remove('hidden');
    });
    document.getElementById('close-professional-modal').addEventListener('click', function() {
        document.getElementById('professional-modal').classList.add('hidden');
    });
</script>
