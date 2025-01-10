

<section id="contact">
    <div class="py-14">
        <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
            <div class="max-w-lg mx-auto gap-12 justify-between lg:flex lg:max-w-none">
                <div class="max-w-lg space-y-3">
                    <h3 class="text-indigo-600 font-semibold">Contact</h3>
                    <p class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                        Let’s Get to know you
                    </p>
                    <p>
                        We’re here to help and answer any question you might have. We look forward to hearing from you!
                        Please fill out the form or use the contact information below.
                    </p>
                    <div>
                        <ul class="mt-6 flex flex-wrap gap-x-10 gap-y-6 items-center">
                            <li class="flex items-center gap-x-3">
                                <div class="flex-none text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                </div>
                                <p>contact@thesavants.in</p>
                            </li>
                            <li class="flex items-center gap-x-3">
                                <div class="flex-none text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                </div>
                                <p>+91 9056425289</p>
                            </li>
                            <li class="flex items-center gap-x-3">
                                <div class="flex-none text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                </div>
                                <p>Mohali, Punjab, India</p>
                            </li>
                            
                            <li class="flex items-center gap-x-3">
                                <div class="flex-none text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 6.75a3 3 0 013 3v6.75a3 3 0 01-3 3H6.75a3 3 0 01-3-3V9.75a3 3 0 013-3h10.5zm-7.5 9.75a2.25 2.25 0 110-4.5 2.25 2.25 0 010 4.5zm7.5 0a2.25 2.25 0 110-4.5 2.25 2.25 0 010 4.5z" />
                                    </svg>
                                </div>
                                <p>Business Hours: Mon-Fri, 9:00 AM - 6:00 PM</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Google Map Embed -->
                    <div class="mt-6 border border-black rounded-md overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.090063979931!2d76.72596637574325!3d30.70464768162561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3910333b13a9e7a9%3A0xc32b917ff6d9491e!2sMohali%2C%20Punjab!5e0!3m2!1sen!2sin!4v1698084068661!5m2!1sen!2sin" 
                            width="100%" 
                            height="350" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                
                <div class="flex-1 mt-12 sm:max-w-lg lg:max-w-md">

                    @if (Session::has('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif


                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                        @csrf
                        <div>
                            <label class="font-medium">Full name</label>
                            <input type="text" name="name" required
                                class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg" />
                        </div>
                        <div>
                            <label class="font-medium">Email</label>
                            <input type="email" name="email" required
                                class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg" />
                        </div>
                        <div>
                            <label class="font-medium">Phone</label>
                            <input type="text" name="phone" required
                                class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg" />
                        </div>
                        <div>
                            <label class="font-medium">Organization Name</label>
                            <input type="text" name="company" required
                                class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg" />
                        </div>
                        <div>
                            <label class="font-medium">Message</label>
                            <textarea name="message" required
                                class="w-full mt-2 h-36 px-3 py-2 resize-none appearance-none bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg"></textarea>
                        </div>
                        <button
                            class="w-full px-4 py-2 text-white font-medium bg-indigo-500 border-2 border-indigo-500  hover:text-gray-900 hover:bg-indigo-600 active:bg-orange-600 rounded-lg duration-150">
                            Submit
                        </button>
                    </form>



                </div>
            </div>
        </div>
    </div>
</section>
