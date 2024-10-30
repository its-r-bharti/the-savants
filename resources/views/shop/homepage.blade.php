<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Patrick+Hand&display=swap" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Patrick+Hand&display=swap');
    .font-handwriting {
      font-family: 'Patrick Hand', cursive;
    }
    .animate-fade-in {
      animation: fadeIn 2s ease-in-out forwards;
    }
    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
  </style>

<body>
    
    

    <div class="bg-gradient-to-r from-blue-50 to-green-50 text-gray-900">
        @include('components.navbar')
       

            <!-- Hero Section -->
            <section class="py-60 bg-gradient-to-br from-green-200 via-blue-200 to-blue-300">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h1 class="text-5xl sm:text-5xl font-bold text-gray-900 mb-6 animate-fade-in text-center relative">
                        <span class="block sm:inline text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-blue-600">
                            We are <b>Almost</b> there!
                        </span> <br></h1>
                        <span class="block sm:inline italic text-green-600 animate-bounce mt-2 font-handwriting">
                            Stay tuned for something amazing!!!
                        </span>
                      
                      <div class="mt-10 mb-5">
                        <div class="shadow w-full bg-white mt-2 max-w-2xl mx-auto rounded-full">
                            <div class="rounded-full bg-indigo-600 text-xs leading-none text-center text-white py-1"
                                style="width: 75%">75%</div>
                        </div>
                    </div>
                </div>
            </section>
    </div>

@include('components.contact')



    @include('components.footer')







</body>

</html>
