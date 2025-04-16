<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>

<body>
    <div class="bg-white">
        @include('components.navbar') 
        <br><br> <br>
       
        <section class="py-16 bg-white text-gray-800">
            <div class="container mx-auto px-6 max-w-4xl">
                <h1 class="text-3xl font-bold mb-6 text-[#0f172a]">Return & Refund Policy</h1>
        
                <p class="mb-4">Effective Date: April 13, 2025</p>
        
                <p class="mb-4">At <strong>The Savants</strong>, we want every student to have a meaningful experience. If you're not satisfied, we may offer a refund under the conditions below.</p>
        
                <h2 class="text-xl font-semibold mt-6 mb-2">Eligibility</h2>
                <ul class="list-disc list-inside mb-4">
                    <li>Refunds must be requested within <strong>7 days</strong> of payment.</li>
                    <li>The internship must not be started or any material received.</li>
                    <li>No partial refunds for 30/45-day internships.</li>
                </ul>
        
                <h2 class="text-xl font-semibold mt-6 mb-2">How to Request</h2>
                <p class="mb-4">Send an email to <a href="mailto:support@thesavants.in" class="text-blue-600 underline">contact@thesavants.in</a> with your full name, registration email, payment ID, and refund reason.</p>
        
                <h2 class="text-xl font-semibold mt-6 mb-2">Processing</h2>
                <p class="mb-4">Approved refunds will be processed within <strong>7–10 business days</strong> via the original payment method.</p>
            </div>
        </section>
      
        
        @include('components.footer')
    </div>

</body>

</html>