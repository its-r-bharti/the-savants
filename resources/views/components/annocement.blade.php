 <section>
     <!-- POPUP CONTAINER -->
     <div id="trainingPopup"
         class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden overflow-hidden">
         <div class="relative rounded-xl overflow-hidden border border-white" style="height: 60vh; width: auto;">

             <!-- ORANGE GLOWING DOT OUTSIDE BORDER -->
             <div class="absolute -top-3 -left-3 w-[calc(100%+24px)] h-[calc(100%+24px)] z-30 pointer-events-none">
                 <div class="dot"></div>
             </div>

             <!-- CLICKABLE IMAGE -->
             <a href="/training" class="block h-full w-auto z-20 relative">
                 <img src="/img/advertise.png" alt="Internship Poster"
                     class="h-full w-auto object-contain mx-auto cursor-pointer" />
             </a>

             <!-- CLOSE BUTTON -->
             <button onclick="closePopup()"
                 class="absolute top-2 right-2 text-white bg-red-600 hover:bg-red-700 rounded-full p-2 z-30">
                 ✕
             </button>
         </div>
     </div>

     <!-- STYLES FOR OUTER GLOWING DOT -->
     <style>
         .orbit-dot {
             position: absolute;
         }

         .dot {
             position: absolute;
             width: 12px;
             height: 12px;
             border-radius: 50%;
             background-color: rgb(255, 30, 0);
             box-shadow: 0 0 15px orange, 0 0 30px rgba(255, 165, 0, 0.5);
             animation: orbitOutside 6s linear infinite;
         }

         @keyframes orbitOutside {
             0% {
                 top: 0;
                 left: 0;
             }

             25% {
                 top: 0;
                 left: 100%;
                 transform: translateX(-100%);
             }

             50% {
                 top: 100%;
                 left: 100%;
                 transform: translate(-100%, -100%);
             }

             75% {
                 top: 100%;
                 left: 0;
                 transform: translateY(-100%);
             }

             100% {
                 top: 0;
                 left: 0;
                 transform: none;
             }
         }

         /* Hide Scrollbar (Desktop) */
         @media (min-width: 768px) {
             .no-scroll {
                 overflow: hidden;
             }
         }
     </style>

     <!-- SCRIPT TO TRIGGER POPUP -->
     <script>
         window.addEventListener('load', () => {
             setTimeout(() => {
                 const popup = document.getElementById('trainingPopup');
                 popup.classList.remove('hidden');
                 document.body.classList.add('no-scroll'); // Disable scroll when popup opens
             }, 2000);
         });

         function closePopup() {
             document.getElementById('trainingPopup').classList.add('hidden');
             document.body.classList.remove('no-scroll'); // Re-enable scroll
         }
     </script>




 </section>
