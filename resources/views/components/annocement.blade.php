<section>
    <!-- POPUP CONTAINER -->
    <div id="trainingPopup"
        class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden overflow-hidden">
        <div class="relative rounded-xl overflow-hidden border border-white max-w-[90%] sm:max-w-[700px] w-full"
            style="aspect-ratio: 7 / 5;">

            <!-- ORANGE GLOWING DOT OUTSIDE BORDER -->
            <div class="absolute -top-3 -left-3 w-[calc(100%+24px)] h-[calc(100%+24px)] z-30 pointer-events-none">
                <div class="dot"></div>
            </div>

            <!-- CLICKABLE IMAGE -->
            <a href="/training" class="block h-full w-full z-20 relative">
                <img src="/img/advertise.png" alt="Internship Poster"
                    class="h-full w-full object-contain mx-auto cursor-pointer" />
            </a>

            <!-- CLOSE BUTTON -->
            <button onclick="closePopup()"
                class="absolute top-2 right-2 text-white border border-white hover:border-gray-300 hover:text-gray-300 rounded-full w-8 h-8 flex items-center justify-center z-30 transition">
                ✕
            </button>
        </div>
    </div>

    <!-- STYLES FOR ORBIT DOT -->
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
                document.body.classList.add('no-scroll');
            }, 2000);
        });

        function closePopup() {
            document.getElementById('trainingPopup').classList.add('hidden');
            document.body.classList.remove('no-scroll');
        }
    </script>
</section>
