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
                <h1 class="text-3xl font-bold mb-6 text-[#0f172a]">Terms and Conditions</h1>
        
                <p class="mb-4">Effective Date: April 13, 2025</p>
        
                <p class="mb-4">By using our website or registering for an internship at <strong>The Savants</strong>, you agree to the following terms:</p>
        
                <h2 class="text-xl font-semibold mt-6 mb-2">General</h2>
                <ul class="list-disc list-inside mb-4">
                    <li>All content is owned by The Savants and may not be reproduced.</li>
                    <li>Internship registrations are non-transferable.</li>
                    <li>Certificates are issued only after full program completion.</li>
                </ul>
        
                <h2 class="text-xl font-semibold mt-6 mb-2">Payments</h2>
                <ul class="list-disc list-inside mb-4">
                    <li>All payments are final unless covered under the refund policy.</li>
                    <li>We use Razorpay as our official secure payment gateway.</li>
                </ul>
        
                <h2 class="text-xl font-semibold mt-6 mb-2">Code of Conduct</h2>
                <ul class="list-disc list-inside mb-4">
                    <li>Maintain respectful communication throughout the program.</li>
                    <li>Violation may result in disqualification without a refund.</li>
                </ul>
        
                <h2 class="text-xl font-semibold mt-6 mb-2">Changes</h2>
                <p class="mb-4">We reserve the right to modify these terms at any time. Updates will be reflected on this page.</p>
            </div>
        </section>
      
        
        @include('components.footer')
    </div>

</body>

</html>