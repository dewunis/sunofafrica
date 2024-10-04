<div class="flex flex-col gap-y-4 mb-16">
    <img class="rounded-lg h-[380px] w-full object-cover" src="{{$url}}" alt="" srcset="">
    <div class="px-2">
        <div class="flex justify-between items-center mb-4">
            <span class="text-white font-bold">{{ $name }}</span>
            <span class="text-primary text-sm">{{ $year }}</span>
        </div>
        <div class="flex items-center justify-between">
            <span
                class="block -mt-1 px-2 py-[1px] text-xs border-2 border-white uppercase text-primary font-medium">{{ $format }}</span>
            <div class="flex items-center space-x-2">
                <span class="flex space-x-1 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                        class="stroke-primary" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-clock">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 6 12 12 16 14" />
                    </svg>
                    <span class="text-xs text-white opacity-75">{{ $duration }} min</span>
                </span>
                <svg class="stroke-primary -mt-1" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-thumbs-up">
                    <path d="M7 10v12" />
                    <path
                        d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z" />
                </svg>
                <span class=" text-xs text-white opacity-75">{{ $like }}</span>
            </div>
        </div>
    </div>
</div>
