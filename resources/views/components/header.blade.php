<header class="flex items-center justify-between container h-24">
    <div class="text-2xl font-bold">Logo.</div>
    <ul class="flex items-center gap-x-8">
        <x-header-nav-item link="home" name="Accueil"></x-header-nav-item>
        <x-header-nav-item link="joker-group" name="Joker Group"></x-header-nav-item>
        <x-header-nav-item link="about" name="A Propos"></x-header-nav-item>
        <x-header-nav-item link="actu" name="Actualité"></x-header-nav-item>
        <x-header-nav-item link="contact" name="Contact"></x-header-nav-item>
    </ul>
    <div class="flex items-center gap-x-2">
        <div class="block h-5 rounded-xl w-[3px] bg-gray-100"></div>
        <div class="flex items-center gap-x-2 ml-3 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-globe">
                <circle cx="12" cy="12" r="10" />
                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                <path d="M2 12h20" />
            </svg>
            <span class="uppercase">Fr</span>
        </div>
    </div>
</header>
