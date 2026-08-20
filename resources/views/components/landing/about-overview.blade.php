{{-- About Overview / Story Section --}}
<section class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-14">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                Menghadirkan Solusi Pendidikan<br class="hidden md:block"> Digital Terbaik
            </h2>
        </div>

        {{-- Stats Row --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
            @foreach([
                ['value' => '100+', 'label' => 'Sekolah Aktif', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                ['value' => '50K+', 'label' => 'Pengguna Aktif', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
                ['value' => '100+', 'label' => 'Modul Fitur', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                ['value' => '24/7', 'label' => 'Customer Support', 'icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z'],
            ] as $stat)
            <div class="bg-white rounded-2xl p-6 text-center shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="w-12 h-12 rounded-xl mx-auto mb-3 flex items-center justify-center"
                     style="background-color: #e0f5f7;">
                    <svg class="w-6 h-6" fill="none" stroke="#007481" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"/>
                    </svg>
                </div>
                <p class="text-2xl font-bold text-gray-800">{{ $stat['value'] }}</p>
                <p class="text-sm text-gray-500 mt-1">{{ $stat['label'] }}</p>
            </div>
            @endforeach
        </div>

        {{-- Story Content --}}
        <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">

            {{-- Founder Image Placeholder --}}
            <div class="flex-none w-48 lg:w-56 mx-auto lg:mx-0">
                <div class="relative pb-10">
                    <div class="rounded-3xl overflow-hidden aspect-[3/4] bg-gray-200 flex items-center justify-center shadow-lg">
                        <img src="{{ asset('assets/teams/rahmat.webp') }}" alt="Founder" class="w-full h-full object-cover">
                    </div>
                    {{-- Name badge --}}
                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2 w-max bg-white rounded-xl shadow-md px-5 py-2.5 text-center">
                        <p class="font-bold text-gray-800 text-sm">Rachmat Santosa</p>
                        <p class="text-xs text-gray-500" style="color: #007481;">Founder & CEO</p>
                    </div>
                </div>
            </div>

            {{-- Story Text --}}
            <div class="flex-1 pt-10 lg:pt-0">
                <blockquote class="text-gray-600 text-lg leading-relaxed italic mb-6 border-l-4 pl-6"
                            style="border-color: #007481;">
                    "Sebuah perjalanan panjang kami dalam berinovasi mengembangkan platform digital pendidikan
                    untuk menjadi sebuah karya anak bangsa yang handal."
                </blockquote>

                <p class="text-gray-600 leading-relaxed mb-5">
                    Platform kami meng-integrasikan seluruh proses — core system akademik maupun supporting system pendidikan —
                    yang juga terhubung dengan sistem billing dan pembayaran online berbasis fintech, serta ekosistem bisnis
                    digital di lembaga pendidikan.
                </p>

                <p class="text-gray-600 leading-relaxed mb-8">
                    Dapat diakses dalam satu dashboard oleh beragam pengguna: siswa, guru, orang tua, admin sekolah, dan yayasan.
                    Didukung infrastruktur, system security, dan customer support 24/7.
                </p>
            </div>
        </div>
    </div>
</section>
