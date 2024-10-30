<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Savants') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">

    <!-- SEO Meta Tags -->
    <meta name="description" content="The Savants offers comprehensive web and app development services, including school and office management systems tailored for efficiency and success.">
    <meta name="keywords" content="web development, app development, school management system, office management system, The Savants, digital solutions, management software, thesavants, savants, ">
    <meta name="author" content="The Savants">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="rating" content="general">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ config('app.name', 'The Savants') }}">
    <meta property="og:description" content="Explore our services for web and app development, tailored for educational and organizational management.">
    <meta property="og:image" content="{{ asset('img/logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name', 'The Savants') }}">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'The Savants') }}">
    <meta name="twitter:description" content="Discover our innovative solutions for school and office management systems, empowering organizations to thrive.">
    <meta name="twitter:image" content="{{ asset('img/logo.png') }}">
    <meta name="twitter:site" content="@YourTwitterHandle">
    <meta name="twitter:creator" content="@YourTwitterHandle">

    <!-- Structured Data (Schema.org) for SEO -->
    {{-- <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "{{ config('app.name', 'The Savants') }}",
        "url": "{{ url()->current() }}",
        "logo": "{{ asset('img/logo.png') }}",
        "sameAs": [
            "https://www.facebook.com/YourPage",
            "https://twitter.com/YourTwitterHandle",
            "https://www.linkedin.com/company/YourCompany"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-9056425289",
            "contactType": "Customer Service"
        },
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Your Street Address",
            "addressLocality": "Your City",
            "addressRegion": "Your Region",
            "postalCode": "824236",
            "addressCountry": "India"
        }
    }
    </script> --}}

    <!-- Additional Meta Tags for Outreach -->
    <meta name="theme-color" content="#4CAF50">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="twitter:image:alt" content="Logo of The Savants">
    <meta property="og:image:alt" content="Logo of The Savants">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
