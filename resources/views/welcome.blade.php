<x-layouts.app>

    {{-- Welcome Section --}}

    <section class="px-16 h-screen flex flex-col justify-center"
        style="background-image: url('/images/main_bg2.jpeg');background-size: cover;background-position:center;">
        <div class="flex justify-start max-w-xl mt-36">
            <h1 class="text-6xl font-semibold text-start text-white reveal-1">Sun Of Africa, TVs Shows, & More.</h1>
        </div>

        <div class="flex items-center space-x-4 my-10 text-white">
            <span
                class="block px-2 bg-white text-black uppercase font-medium py-[2px] text-sm border-2 border-white rounded">pg
                18
            </span>
            <span class="block px-2 py-[2px] text-sm border-2 border-white uppercase font-medium rounded">hd</span>
            <span class="text-sm font-medium">Romance, Drama</span>
            <div class="flex items-center space-x-2">
                <span class="flex space-x-1 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        class="stroke-primary" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-calendar-days">
                        <path d="M8 2v4" />
                        <path d="M16 2v4" />
                        <rect width="18" height="18" x="3" y="4" rx="2" />
                        <path d="M3 10h18" />
                        <path d="M8 14h.01" />
                        <path d="M12 14h.01" />
                        <path d="M16 14h.01" />
                        <path d="M8 18h.01" />
                        <path d="M12 18h.01" />
                        <path d="M16 18h.01" />
                    </svg>
                    <span class="text-sm">2024</span>
                </span>
                <span class="flex space-x-1 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        class="stroke-primary" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-clock">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 6 12 12 16 14" />
                    </svg>
                    <span class="text-sm">128 min</span>
                </span>
            </div>
        </div>

        <button class="btn-primary bg-[#171d22] text-white flex items-center justify-center watch-now-btn max-w-48">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="#fff"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-play">
                <polygon points="6 3 20 12 6 21 6 3" />
            </svg>
            <span class="block ml-2">Watch now</span>
        </button>
    </section>


    <section class="watch-now-section">
        <div class="modal-overlay"></div>
        <div class="modal-box">
            <div
                class="fixed -right-2 p-[6px] rounded-full -top-8 bg-white stroke-white close-watch-now-btn cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="#fff"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-x">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
            </div>

            <iframe width="100%" height="480" src="https://www.youtube.com/embed/_7nlqMoIAFM?si=lWdytJM2RsL8yY_m"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>

    <section class="bg-white px-16 py-28 items-start grid grid-cols-2">
        <div class="flex-col reveal-2">
            <div class="flex items-center gap-x-4 ">
                <span class="block h-1 w-16 bg-primary rounded-full"></span>
                <span class="uppercase text-gray-600 text-xs font-medium">A propos de nous</span>
            </div>
            <h2 class="text-4xl font-bold text-start mt-8">
                Live Movie & TV Shows For Friends & Family.
            </h2>

            <p class="text-gray-600 text-sm mt-8 pr-20">
                Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod There are many variations of passages
                of lorem Ipsum available, but the majority have suffered alteration.
            </p>

            <div class="mt-8">
                <h3 class="resolution-text font-bold reveal-2">
                    HD 4K
                </h3>
            </div>

            <button
                class="btn-secondary mt-8 h-11 text-black hover:bg-white hover:border-2 hover:border-primary flex items-center justify-center watch-now-btn max-w-48 w-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#000"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-play">
                    <polygon points="6 3 20 12 6 21 6 3" />
                </svg>
                <span class="block ml-2 text-sm">Watch now</span>
            </button>
        </div>
        <div class="reveal-2 pl-8">
            <img class="w-full h-full" src="/images/live_img.png" alt="" srcset="">
        </div>
    </section>

    <section class="px-16 py-28 bg-opacity-50" style="background: url('/images/shape.png')">
        <div class="flex items-center gap-x-4 ">
            <span class="block h-1 w-16 bg-primary rounded-full"></span>
            <span class="uppercase text-white text-xs font-medium">Streaming en ligne</span>
        </div>
        <h3 class="text-2xl text-white pt-6 font-bold">Nos dernières réalisations</h3>

        <div class="grid grid-cols-4 gap-x-6 mt-14">
            <x-latest-moovie name="The Cooking" format="hd" year="2021" duration="128" like="3.5"
                url="/images/m1.jpeg"></x-latest-moovie>

            <x-latest-moovie name="The Perfect Match" format="hd" year="2021" duration="128" like="3.5"
                url="/images/m2.jpeg"></x-latest-moovie>

            <x-latest-moovie name="Woomen's Day" format="hd" year="2021" duration="128" like="3.5"
                url="/images/m3.jpeg"></x-latest-moovie>

            <x-latest-moovie name="The Easy Reach" format="hd" year="2021" duration="128" like="3.5"
                url="/images/m4.jpeg"></x-latest-moovie>
        </div>
    </section>

    <section class="grid grid-cols-2 px-16 py-20 gap-x-12" style="background: url('/images/stb.jpg')">
        <div class="p-8">
            <div class="bg-primary h-[520px] p-8">
                <img src="/images/tabou.jpeg" alt="" class="h-full object-cover w-full">
            </div>
        </div>
        <div class="p-8 reveal-1">
            <div class="flex items-center gap-x-4">
                <span class="block h-1 w-16 bg-primary rounded-full"></span>
                <span class="uppercase text-white text-xs font-medium">Emission</span>
            </div>

            <h3 class="text-2xl text-white pt-6 font-bold">Sans Tabou</h3>

            <p class="mt-8 mb-10 text-white text-sm">Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod
                tempor.There
                are many variations of
                passages of lorem Ipsum available, but the majority have suffered alteration in some injected humour.
            </p>

            <div class="flex items-center mt-8">
                <div class="dashed-circle p-2">
                    <div style="transition: 0.5s"
                        class="hover:bg-primary transition-opacity duration-500 h-full w-full rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-clapperboard">
                            <path d="M20.2 6 3 11l-.9-2.4c-.3-1.1.3-2.2 1.3-2.5l13.5-4c1.1-.3 2.2.3 2.5 1.3Z" />
                            <path d="m6.2 5.3 3.1 3.9" />
                            <path d="m12.4 3.4 3.1 4" />
                            <path d="M3 11h18v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z" />
                        </svg>
                    </div>
                </div>
                <div class="text-white">
                    <h4 class="text-lg font-bold pb-2">Enjoy on Your TV.</h4>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                </div>
            </div>

            <div class="border-b border-dashed border-gray-600 mt-8 block"></div>

            <div class="flex items-center gap-y-8 mt-8">
                <div class="dashed-circle p-2 flex items-center flex-col gap-y-8">
                    <div style="transition: 0.5s"
                        class="hover:bg-primary transition-opacity duration-500 h-full w-full rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-monitor-smartphone">
                            <path d="M18 8V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h8" />
                            <path d="M10 19v-3.96 3.15" />
                            <path d="M7 19h5" />
                            <rect width="6" height="10" x="16" y="12" rx="2" />
                        </svg>
                    </div>
                </div>
                <div class="text-white">
                    <h4 class="text-lg font-bold pb-2">Watch Everywhere </h4>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Components --}}
    <section class="px-16 py-20">
        <div class="flex items-center gap-x-4">
            <span class="block h-1 w-16 bg-primary rounded-full"></span>
            <span class="uppercase text-white text-xs font-medium">actualité</span>
        </div>

        <h4 class="text-white text-2xl font-bold pt-6">Nos dernières actualités</h4>
        <div class="grid grid-cols-3 gap-x-6 mt-14">
            <x-latest-actu url="/images/ci1.jpeg" title="Lorem ipsum dolor sit amet voluptatem"
                text="Accusamus amet ut laborum autem officiis, quidem molestias voluptatem non, dignissimos nemo eum, in corrupti. Porro, maxime..."></x-latest-actu>
            <x-latest-actu url="/images/ci2.jpeg" title="Lorem ipsum dolor sit amet consectetur"
                text="Accusamus amet ut laborum autem officiis, quidem molestias voluptatem non, dignissimos nemo eum, in corrupti. Porro, maxime..."></x-latest-actu>
            <x-latest-actu url="/images/ci3.jpeg" title="Lorem ipsum dolor sit amet adipisicing elit"
                text="Accusamus amet ut laborum autem officiis, quidem molestias voluptatem non, dignissimos nemo eum, in corrupti. Porro, maxime..."></x-latest-actu>
        </div>
    </section>



    <script>
        let watchNowSection = document.querySelector(".watch-now-section");
        let modalOverlay = document.querySelector(".modal-overlay");
        let watchNowBtn = document.querySelectorAll(".watch-now-btn");
        let closeWatchNowBtn = document.querySelector(".close-watch-now-btn");

        watchNowBtn.forEach(btn => {
            btn.addEventListener("click", () => {
                watchNowSection.classList.add("active");
            });
        });

        modalOverlay.addEventListener("click", () =>
            watchNowSection.classList.remove("active")
        );

        closeWatchNowBtn.addEventListener("click", () =>
            watchNowSection.classList.remove("active")
        );
    </script>
</x-layouts.app>
