{{-- About Values Section --}}
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-14">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4"
                  style="background-color: #e0f5f7; color: #007481;">
                Nilai Kami
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                Mengapa Memilih Kami?
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-base">
                Kami berkomitmen menghadirkan platform pendidikan terbaik dengan teknologi modern dan layanan prima.
            </p>
        </div>

        {{-- Values Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                [
                    'icon'  => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z',
                    'title' => 'Single Platform ERP',
                    'desc'  => 'Semua proses pendidikan dalam satu platform terintegrasi — dari akademik hingga keuangan, semua bisa dikelola dengan mudah.',
                ],
                [
                    'icon'  => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                    'title' => 'Cloud & SaaS',
                    'desc'  => 'Berbasis cloud sehingga dapat diakses kapanpun dan dimanapun tanpa perlu instalasi perangkat lunak khusus.',
                ],
                [
                    'icon'  => 'M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z',
                    'title' => 'Dapat Dikustomisasi',
                    'desc'  => 'Bisnis proses yang fleksibel dan dapat dikustomisasi sesuai kebutuhan lembaga pendidikan Anda, termasuk opsi white-label.',
                ],
                [
                    'icon'  => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',
                    'title' => 'Fintech Terintegrasi',
                    'desc'  => 'Sistem billing dan pembayaran online berbasis fintech yang terhubung langsung dengan seluruh ekosistem platform.',
                ],
                [
                    'icon'  => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z',
                    'title' => 'Keamanan Terjamin',
                    'desc'  => 'Infrastruktur dan system security berlapis yang menjamin keamanan data seluruh pengguna platform.',
                ],
                [
                    'icon'  => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z',
                    'title' => 'Support 24/7',
                    'desc'  => 'Tim customer support kami siap membantu Anda selama 24 jam sehari, 7 hari seminggu tanpa terkecuali.',
                ],
            ] as $value)
            <div class="group bg-gray-50 rounded-2xl p-6 border border-gray-100 hover:border-teal-200 hover:shadow-md transition-all duration-300">
                <div class="w-12 h-12 rounded-xl mb-5 flex items-center justify-center group-hover:scale-110 transition-transform"
                     style="background-color: #e0f5f7;">
                    <svg class="w-6 h-6" fill="none" stroke="#007481" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $value['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="text-base font-semibold text-gray-800 mb-2">{{ $value['title'] }}</h3>
                <p class="text-sm text-gray-500 leading-relaxed">{{ $value['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
