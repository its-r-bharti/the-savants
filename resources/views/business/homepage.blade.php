@include('components.header')

<body>
    <div class="bg-white">
        @include('bcomponents.BussinessNavbar')

        <div class="relative" x-data="{ state: false }">
            <div
              class="absolute inset-0 blur-xl h-[580px]"
              style="
                background: linear-gradient(
                  143.6deg,
                  rgba(192, 132, 252, 0) 20.79%,
                  rgba(232, 121, 249, 0.26) 40.92%,
                  rgba(204, 171, 238, 0) 70.35%
                );
              "
            ></div>
            <div class="relative">
              <header>
                <div
                  :class="{'mx-2 pb-5': state, 'hidden': !state}"
                  class="md:hidden"
                >
                  <div class="flex items-center justify-between py-5 md:block">
                    <a href="javascript:void(0)">
                      <img
                        src="https://www.floatui.com/logo.svg"
                        width="120"
                        height="50"
                        alt="Enterprise Management Logo"
                      />
                    </a>
                    <div class="md:hidden">
                      <button
                        @click="state = !state"
                        class="menu-btn text-gray-500 hover:text-gray-800"
                      >
                        <template x-if="state">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"
                            />
                          </svg>
                        </template>
                        <template x-if="!state">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                            />
                          </svg>
                        </template>
                      </button>
                    </div>
                  </div>
                </div>
                <nav
                  :class="{'absolute top-0 inset-x-0 bg-white shadow-lg rounded-xl border mx-2 mt-2 md:shadow-none md:border-none md:mx-0 md:mt-0 md:relative md:bg-transparent': state}"
                  class="pb-5 md:text-sm"
                >
                <!-- Section -->
                <section>
                  <div
                    class="max-w-screen-xl mx-auto px-4 py-32 gap-12 text-gray-600 overflow-hidden md:px-8 md:flex"
                  >
                    <div class="flex-none space-y-5 max-w-xl">
                      <a
                        href="javascript:void(0)"
                        class="inline-flex gap-x-6 items-center rounded-full p-1 pr-6 border text-sm font-medium duration-150 hover:bg-white"
                      >
                        <p class="flex items-center">
                          Explore our enterprise solutions
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="w-5 h-5"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd"
                            />
                          </svg>
                        </p>
                      </a>
                      <h1 class="text-4xl text-gray-800 font-extrabold sm:text-5xl">
                        Optimize Your Business Operations
                      </h1>
                      <p>
                        Manage your enterprise effectively with our comprehensive solutions designed for scalability and efficiency.
                      </p>
                      <div class="flex items-center gap-x-3 sm:text-sm">
                        <a
                          href="javascript:void(0)"
                          class="flex items-center justify-center gap-x-1 py-2 px-4 text-white font-medium bg-gray-800 duration-150 hover:bg-gray-700 active:bg-gray-900 rounded-full md:inline-flex"
                        >
                          Get Started
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="w-5 h-5"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd"
                            />
                          </svg>
                        </a>
                        <a
                          href="javascript:void(0)"
                          class="flex items-center justify-center gap-x-1 py-2 px-4 text-gray-700 hover:text-gray-900 font-medium duration-150 md:inline-flex"
                        >
                          Contact Sales
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="w-5 h-5"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd"
                            />
                          </svg>
                        </a>
                      </div>
                    </div>
                    <div class="flex-1 hidden md:block">
                      <!-- Replace with your image -->
                      <img
                        src="https://raw.githubusercontent.com/sidiDev/remote-assets/c86a7ae02ac188442548f510b5393c04140515d7/undraw_progressive_app_m-9-ms_oftfv5.svg"
                        class="max-w-xl"
                      />
                    </div>
                  </div>
                </section>
              </div>
            </div>
          
          <script>
            document.addEventListener("alpine:init", () => {
              Alpine.data("dropdown", () => ({
                open: false,
                toggle() {
                  this.open = !this.open;
                },
                close() {
                  this.open = false;
                },
                init() {
                  this.$watch("open", (value) => {
                    if (value) {
                      this.$nextTick(() => {
                        window.addEventListener("click", this.close);
                      });
                    } else {
                      window.removeEventListener("click", this.close);
                    }
                  });
                },
              }));
            });
          </script>
          
        {{-- @include('enterprisecomponents.enterpriseFeatures') --}}

        <section class="py-10 bg-white sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">
                    <div class="relative lg:mb-12">
                        <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4" src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg" alt="" />
                        <div class="pl-12 pr-6">
                            <img class="relative" src="{{ asset('img/blog3.png')  }}" alt="" />
                        </div>
                    </div>
                    <div class="lg:py-12">
                        <div class="mb-6">
                            <h2 class="text-3xl font-extrabold leading-tight text-gray-800 sm:text-4xl">Integrated Solutions for Business Growth</h2>
                            <p class="mt-4 text-lg text-gray-600">Our enterprise management system brings all your business functions together, fostering collaboration and efficiency.</p>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <span class="inline-flex items-center justify-center w-8 h-8 text-white bg-gray-800 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 3.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zm0 1.5a5 5 0 11-5 5 5 5 0 015-5zm1 7h-2v2h2v-2zm0-3h-2v2h2V9z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-800">Streamlined Communication</h3>
                                    <p class="text-gray-600">Enhance team communication and collaboration with our integrated tools.</p>
                                </div>
                            </li>
                            <li class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <span class="inline-flex items-center justify-center w-8 h-8 text-white bg-gray-800 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 4a1 1 0 011 1v8a1 1 0 11-2 0V5a1 1 0 011-1zm-1 10a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-800">Real-Time Analytics</h3>
                                    <p class="text-gray-600">Gain insights into your operations with powerful analytics tools.</p>
                                </div>
                            </li>
                            <li class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <span class="inline-flex items-center justify-center w-8 h-8 text-white bg-gray-800 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v6h6a1 1 0 110 2h-6v6a1 1 0 11-2 0v-6H4a1 1 0 110-2h6V3a1 1 0 011-1z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-800">Customizable Workflows</h3>
                                    <p class="text-gray-600">Tailor workflows to meet the unique needs of your business.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

       @include('components.testimonial') 
          
          @include('components.footer')
      </body>
