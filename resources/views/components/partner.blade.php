<div class="bg-gradient-to-r from-blue-50 via-blue-100 to-blue-50 py-12">
  <div class="container mx-auto text-center">
    <!-- Section Title -->
    <div class="flex items-center justify-center">
      <span class="bg-orange-400 text-center text-sm uppercase tracking-widest font-semibold px-4 py-2 rounded-full">
          Our Partners
      </span>
  </div>
  <br>

    <!-- Slider Section -->
    <div class="overflow-hidden relative">
      <div id="slider" class="flex gap-8 w-[200%] transition-transform duration-500 ease-linear">
        <!-- Logos -->
        <img src="{{ asset('img/logo.png') }}" alt="The Savants" class="h-20 object-contain mx-auto">
        <img src="{{ asset('img/Sansani.png') }}" alt="Sansani Express News" class="h-20 object-contain mx-auto">
        <img src="https://www.rase.co.in/_next/image?url=%2Fshiksha.png&w=640&q=75" alt="Siksha Mahakumbh" class="h-20 object-contain mx-auto">
        <img src="https://legalpalz.com/img/about/Legal-Pal-Logo.png" alt="Legal Palz" class="h-20 object-contain mx-auto">
        <img src="https://www.stpaulspalampur.com/assets/images1/logo.webp" alt="St. Paul's Senior Secondary School" class="h-20 object-contain mx-auto">
        <img src="https://mcspalampur.in/images/logo.jpg" alt="Mount Carmel School Palampur" class="h-20 object-contain mx-auto">
        
        <!-- Duplicate Logos for Smooth Loop -->
        <img src="{{ asset('img/logo.png') }}" alt="The Savants" class="h-20 object-contain mx-auto">
        <img src="{{ asset('img/sansani.png') }}" alt="Sansani Express News" class="h-20 object-contain mx-auto">
        <img src="https://www.rase.co.in/_next/image?url=%2Fshiksha.png&w=640&q=75" alt="Siksha Mahakumbh" class="h-20 object-contain mx-auto">
        <img src="https://legalpalz.com/img/about/Legal-Pal-Logo.png" alt="Legal Palz" class="h-20 object-contain mx-auto">
        <img src="https://www.stpaulspalampur.com/assets/images1/logo.webp" alt="St. Paul's Senior Secondary School" class="h-20 object-contain mx-auto">
        <img src="https://mcspalampur.in/images/logo.jpg" alt="Mount Carmel School Palampur" class="h-20 object-contain mx-auto">
      </div>
    </div>
  </div>
</div>

<!-- JavaScript for Slider -->
<script>
  const slider = document.getElementById("slider");
  const slideWidth = slider.parentElement.offsetWidth; // Calculate frame width dynamically
  let currentPosition = 0;

  function slide() {
    currentPosition -= slideWidth; // Move one frame (6 logos)
    const maxScroll = slider.scrollWidth / 2; // Prevent going beyond duplicated logos

    if (Math.abs(currentPosition) >= maxScroll) {
      // Reset to start for infinite loop
      slider.style.transition = "none"; // Remove transition for instant reset
      currentPosition = 0; // Reset position
      slider.style.transform = `translateX(${currentPosition}px)`;
      setTimeout(() => {
        slider.style.transition = "transform 0.5s ease-in-out"; // Reapply transition
      }, 50);
    } else {
      slider.style.transform = `translateX(${currentPosition}px)`;
    }
  }

  // Automatically slide every second
  setInterval(slide, 1000);
</script>
