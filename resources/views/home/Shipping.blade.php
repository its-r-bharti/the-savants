<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>

<body>
    <div class="bg-white">
        @include('components.navbar') 
        <br><br> <br>
       
        <section class="bg-white text-gray-800 py-16 px-6 lg:px-20">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold mb-8 text-center text-black">Shipping and Delivery Policy</h1>
        
                <p class="text-lg mb-6">Last updated: <strong>April 2025</strong></p>
        
                <p class="mb-4">
                    At <strong>The Savants</strong>, we specialize in delivering high-quality digital products and services,
                    including internship programs, training modules, software development, and enterprise solutions. As such,
                    our offerings do not involve the physical shipment of goods.
                </p>
        
                <h2 class="text-2xl font-semibold mt-8 mb-2">📦 Digital Delivery</h2>
                <p class="mb-4">
                    All services offered by The Savants are delivered electronically. Upon successful registration and/or payment,
                    users will receive:
                </p>
                <ul class="list-disc list-inside mb-4">
                    <li>A confirmation email with program or service details.</li>
                    <li>Access credentials (if applicable) for online portals.</li>
                    <li>Downloadable material shared via email or secure links.</li>
                </ul>
        
                <h2 class="text-2xl font-semibold mt-8 mb-2">⏱ Delivery Timeline</h2>
                <ul class="list-disc list-inside mb-4">
                    <li><strong>Internship/Training Access:</strong> Provided within 24–48 hours after successful registration and payment confirmation.</li>
                    <li><strong>Software & Web Services:</strong> Timelines are communicated during consultation and agreed upon in the service agreement or invoice.</li>
                </ul>
        
                <h2 class="text-2xl font-semibold mt-8 mb-2">📮 Communication</h2>
                <p class="mb-4">
                    All delivery updates and service-related communication are sent to the email address provided during registration.
                    Please ensure your contact details are accurate and up to date.
                </p>
                <p class="mb-4">
                    If you do not receive expected communication within the mentioned timeframe, please contact us:
                </p>
                <ul class="list-inside mb-4">
                    <li>📧 <strong>Email:</strong> <a href="mailto:contact@thesavants.in" class="text-blue-600 hover:underline">contact@thesavants.in</a></li>
                    <li>📞 <strong>Phone:</strong> +91 9056425289</li>
                </ul>
        
                <h2 class="text-2xl font-semibold mt-8 mb-2">🌍 Service Availability</h2>
                <p class="mb-4">
                    Our digital services are accessible globally unless otherwise stated. Delivery timelines may vary based on
                    time zone differences and service-specific requirements.
                </p>
            </div>
        </section>
      
        
        @include('components.footer')
    </div>

</body>

</html>