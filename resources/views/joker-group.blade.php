<x-layouts.app>
    <section class="px-16 h-screen flex flex-col justify-center"
        style="background-image: url('/images/main_bg2.jpeg');background-size: cover;background-position:center;">
        <div class="flex justify-center mt-36">
            <h1 class="text-6xl font-semibold text-center text-white reveal-1">Our Movies</h1>
        </div>
    </section>

    <section class="px-16 py-28 bg-opacity-50" style="background: url('/images/shape.png')">
        <div class="flex items-center gap-x-4 ">
            <span class="block h-1 w-16 bg-primary rounded-full"></span>
            <span class="uppercase text-white text-xs font-medium">Streaming en ligne</span>
        </div>
        <h3 class="text-2xl text-white pt-6 font-bold">Nos réalisations</h3>

        <div class="grid grid-cols-4 gap-x-6 mt-14">
            <x-moovie name="The Cooking" format="hd" year="2021" duration="128" like="3.5"
                url="/images/m1.jpeg"></x-latest-moovie>

                <x-moovie name="The Perfect Match" format="hd" year="2021" duration="128" like="3.5"
                    url="/images/m2.jpeg"></x-latest-moovie>

                    <x-moovie name="Woomen's Day" format="hd" year="2021" duration="128" like="3.5"
                        url="/images/m3.jpeg"></x-latest-moovie>

                        <x-moovie name="The Easy Reach" format="hd" year="2021" duration="128" like="3.5"
                            url="/images/m4.jpeg"></x-latest-moovie>

                            <x-moovie name="The Easy Reach" format="hd" year="2021" duration="128" like="3.5"
                                url="/images/m2.jpeg"></x-latest-moovie>

                                <x-moovie name="The Easy Reach" format="hd" year="2021" duration="128"
                                    like="3.5" url="/images/m1.jpeg"></x-latest-moovie>

                                    <x-moovie name="The Easy Reach" format="hd" year="2021" duration="128"
                                        like="3.5" url="/images/m3.jpeg"></x-latest-moovie>

                                        <x-moovie name="The Easy Reach" format="hd" year="2021" duration="128"
                                            like="3.5" url="/images/m2.jpeg"></x-latest-moovie>
        </div>
    </section>

</x-layouts.app>
