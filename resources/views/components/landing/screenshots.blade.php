@props(['screenshots'])

@if(!empty($screenshots))
<section id="screenshot" class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-10 text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">Tampilan Aplikasi</h2>
        <p class="text-gray-500 text-sm md:text-base max-w-xl mx-auto">Antarmuka yang modern dan intuitif, dirancang untuk kemudahan penggunaan di berbagai perangkat.</p>
    </div>

    {{-- Carousel Wrapper --}}
    <div class="flex flex-col items-center gap-6"
        @if(count($screenshots) > 1)
        x-data="{
            activeIndex: 0,
            total: {{ count($screenshots) }},
            timer: null,
            init() {
                this.startAutoplay();
            },
            startAutoplay() {
                this.timer = setInterval(() => { this.next(); }, 3500);
            },
            resetAutoplay() {
                if (this.timer) clearInterval(this.timer);
                this.startAutoplay();
            },
            next() {
                this.activeIndex = (this.activeIndex + 1) % this.total;
            },
            prev() {
                this.activeIndex = (this.activeIndex - 1 + this.total) % this.total;
            },
            goTo(index) {
                this.activeIndex = index;
                this.resetAutoplay();
            }
        }"
        @endif
        >

        {{-- Slide Area --}}
        <div class="flex items-center gap-4 sm:gap-8">

            {{-- Prev Button --}}
            @if(count($screenshots) > 1)
            <button @click="prev()"
                type="button"
                class="flex-shrink-0 w-10 h-10 rounded-full bg-white shadow-md border border-gray-200 flex items-center justify-center text-gray-500 hover:text-teal-600 hover:border-teal-300 transition-all hover:shadow-lg">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            @endif

            {{-- Image Frame (Phone Mockup) --}}
            <div class="relative w-48 sm:w-56 overflow-hidden rounded-sm"
                style="aspect-ratio: 9/16;">
                @foreach($screenshots as $i => $path)
                    <img src="{{ asset($path) }}"
                        alt="Screenshot aplikasi ke-{{ $i + 1 }}"
                        @if(count($screenshots) > 1)
                            x-show="activeIndex === {{ $i }}"
                        @endif
                        class="absolute inset-0 w-full h-full object-contain">
                @endforeach
            </div>

            {{-- Next Button --}}
            @if(count($screenshots) > 1)
            <button @click="next()"
                type="button"
                class="flex-shrink-0 w-10 h-10 rounded-full bg-white shadow-md border border-gray-200 flex items-center justify-center text-gray-500 hover:text-teal-600 hover:border-teal-300 transition-all hover:shadow-lg">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
            @endif
        </div>

        {{-- Dot Indicators --}}
        @if(count($screenshots) > 1)
        <div class="flex justify-center gap-1.5">
            @foreach($screenshots as $i => $path)
                <button @click="goTo({{ $i }})"
                    type="button"
                    :class="activeIndex === {{ $i }} ? 'w-5 opacity-100' : 'w-2 opacity-40'"
                    class="h-2 rounded-full transition-all duration-300"
                    style="background-color: #007481;">
                </button>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endif
