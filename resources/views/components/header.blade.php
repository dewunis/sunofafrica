<header style="transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out, color 0.3s ease-in-out;"
    id="app-header"
    class="px-16 flex items-center justify-between h-24 bg-transparent text-white fixed left-0 top-0 w-full z-[100]">
    <div class="text-2xl font-bold">Logo.</div>
    <ul class="flex items-center gap-x-8">
        <x-header-nav-item :active="request()->routeIs('welcome')" link="/" name="Accueil"></x-header-nav-item>
        <x-header-nav-item :active="request()->routeIs('joker-group')" link="joker-group" name="Joker Group"></x-header-nav-item>
        <x-header-nav-item :active="request()->routeIs('about')" link="about" name="A Propos"></x-header-nav-item>
        <x-header-nav-item :active="request()->routeIs('actu')" link="actu" name="Actualité"></x-header-nav-item>
        <x-header-nav-item :active="request()->routeIs('contact')" link="contact" name="Contact"></x-header-nav-item>
    </ul>
</header>

<script defer>
    const header = document.querySelector("#app-header");
    let lastScrollTop = document.documentElement.scrollTop;

    document.addEventListener("scroll", handleSwipeIn);

    function handleSwipeIn() {
        const currentScroll = document.documentElement.scrollTop;
        const viewportHeight = window.innerHeight;

        // Gestion de l'apparition/disparition du header
        if (currentScroll > lastScrollTop) {
            header.style.transform = `translateY(-100%)`;
        } else {
            header.style.transform = `translateY(0)`;
        }

        // Appliquer le flou et ajuster les couleurs si le scroll dépasse la hauteur de l'écran
        if (currentScroll > viewportHeight) {
            header.style.backgroundColor = `rgba(255, 255, 255, 1)`; // Fond semi-transparent avec du blanc
            header.style.color = `#000`; // Texte en noir
            header.style.backdropFilter = "blur(10px)"; // Appliquer le blur sur l'arrière-plan
            header.classList.add("shadow-sm");
        } else {
            header.style.backgroundColor = `transparent`;
            header.style.color = `#fff`; // Texte blanc sur fond transparent
            header.style.backdropFilter = "none"; // Retirer le blur
            header.classList.remove("shadow-sm");
        }

        lastScrollTop = currentScroll;
    }
</script>
