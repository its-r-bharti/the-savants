<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>

<body>
    <div class="bg-white">
        @include('schoolcomponents.SchoolNavbar')
<br>
<br>
<div class="bg-white-900">


    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-24">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
           
        </div>
        <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">The Savants website templates for your School</h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">A collection of professional and beautifully designed website templates, built with React, Next.js ,Laravel with Tailwind CSS.</p>
            {{-- <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#"
                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                    started</a>
               
            </div> --}}
        </div>
    </div>
    <div class="container mx-auto px-4 py-0">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-16">
{{-- poster1 cointainer --}}
            <div class="bg-gray-800 rounded-lg shadow-md">
                <img src="{{asset('img/template1.png')}}" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-white">Mailgo</h2>
                    <p class="text-gray-300">Manage your email marketing using Mailgo...</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-green-500 font-bold">$49</span>
                        <span class="text-gray-400">$0</span>
                        <button class="text-red-500 font-bold"><a  href="https://t-he-savants.github.io/Stemplate1/" target="_blank" rel="">Full Preview</a></button>
                    </div>
                </div>
            </div>
{{-- poster2 cointainer --}}
            <div class="bg-gray-800 rounded-lg shadow-md">
                <img src="{{asset('img/template2.png')}}" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-white">Mailgo</h2>
                    <p class="text-gray-300">Manage your email marketing using Mailgo...</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-green-500 font-bold">$49</span>
                        <span class="text-gray-400">$0</span>
                        <button class="text-red-500 font-bold"><a  href="http://" target="_blank" rel="">Full Preview</a></button>
                    </div>
                </div>
            </div>
{{-- poster3 cointainer --}}
            <div class="bg-gray-800 rounded-lg shadow-md">
                <img src="{{asset('img/template3.png')}}" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-white">Mailgo</h2>
                    <p class="text-gray-300">Manage your email marketing using Mailgo...</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-green-500 font-bold">$49</span>
                        <span class="text-gray-400">$0</span>
                        <button class="text-red-500 font-bold"><a  href="http://" target="_blank" rel="">Full Preview</a></button>
                    </div>
                </div>
            </div>
{{-- poster4 cointainer --}}
            <div class="bg-gray-800 rounded-lg shadow-md">
                <img src="{{asset('img/template4.png')}}" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-white">Mailgo</h2>
                    <p class="text-gray-300">Manage your email marketing using Mailgo...</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-green-500 font-bold">$49</span>
                        <span class="text-gray-400">$0</span>
                        <button class="text-red-500 font-bold"><a  href="http://" target="_blank" rel="">Full Preview</a></button>
                    </div>
                </div>
            </div>
{{-- poster5 cointainer --}}
            <div class="bg-gray-800 rounded-lg shadow-md">
                <img src="{{asset('img/template5.png')}}" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-white">Mailgo</h2>
                    <p class="text-gray-300">Manage your email marketing using Mailgo...</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-green-500 font-bold">$49</span>
                        {{-- <span class="text-gray-400">$0</span> --}}
                        <button class="text-red-500 font-bold"><a  href="http://" target="_blank" rel="">Full Preview</a></button>
                    </div>
                </div>
            </div>
{{-- poster6 cointainer --}}
            <div class="bg-gray-800 rounded-lg shadow-md">
                <img src="{{asset('img/template1.png')}}" alt="Product 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-white">Mailgo</h2>
                    <p class="text-gray-300">Manage your email marketing using Mailgo...</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-green-500 font-bold">$49</span>
                        <span class="text-gray-400">$0</span>
                        <button class="text-red-500 font-bold"><a  href="http://" target="_blank" rel="">Full Preview</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        
      
       
        @include('components.footer')
    </div>

</body>

</html>