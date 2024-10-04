<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">



    <title>{{ config('app.name') }}</title>

    {{-- Resources --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins bg-[#171d22] bg-opacity-95">
    <x-header />
    <x-main>
        {{ $slot }}
    </x-main>
    <x-footer />

    <script>
        const ratio = .1
        let options = {
            root: null,
            rootMargin: "0px",
            threshold: .1
        }

        let callback = (entires, observer) => {
            entires.forEach(entry => {
                if (entry.intersectionRatio > ratio) {
                    observer.unobserve(entry.target);
                    entry.target.classList.add("reveal-visible")
                }
            });
        }

        let observer = new IntersectionObserver(callback, options);
        document.querySelectorAll('[class*="reveal-"]').forEach((element) => {
            observer.observe(element);
        })
    </script>
</body>

</html>
