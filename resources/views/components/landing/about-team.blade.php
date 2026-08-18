{{-- About Team Section --}}
<section class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-14">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4"
                  style="background-color: #e0f5f7; color: #007481;">
                Tim Kami
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                Orang-Orang di Balik Platform
            </h2>
            <p class="text-gray-500 mt-4 max-w-xl mx-auto text-base">
                Tim kami yang berdedikasi bekerja keras setiap hari untuk menghadirkan inovasi terbaik bagi dunia pendidikan.
            </p>
        </div>

        {{-- Team Grid --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-6">
            @foreach([
                ['file' => 'rahmat','name' => 'Rachmat Santosa',  'role' => 'Founder & CEO',              'delay' => '0'],
                ['file' => 'aziz','name' => 'Abdul Aziz',        'role' => 'Project Manager',            'delay' => '75'],
                ['file' => 'andres','name' => 'Krisna Andresta',   'role' => 'Account Executive',          'delay' => '150'],
                ['file' => 'deny','name' => 'Deny Sutrisman',    'role' => 'Account Executive',          'delay' => '225'],
                ['file' => 'algi','name' => 'M. Zein Algifari',  'role' => 'Mobile Developer',           'delay' => '0'],
                ['file' => 'ayip','name' => 'M. Ayip Rosidi',    'role' => 'Head Design Division',       'delay' => '75'],
                ['file' => 'rizki','name' => 'Rizki Satriyo',     'role' => 'Head Programming Division',  'delay' => '150'],
                ['file' => 'salman','name' => 'M. Salman Alfarisi','role' => 'Programming Division',       'delay' => '225'],
            ] as $member)
            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                {{-- Photo Placeholder --}}
                <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center relative overflow-hidden">
                    <img src="{{ asset('assets/teams/' . $member['file'] . '.webp') }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover">
                    {{-- Overlay on hover --}}
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end"
                         style="background: linear-gradient(to top, rgba(0,116,129,0.85), transparent);">
                        <div class="w-full flex justify-center pb-4 gap-3">
                            <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center text-white hover:bg-white/40 transition-colors"
                               aria-label="LinkedIn {{ $member['name'] }}">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Info --}}
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-gray-800 text-sm leading-tight">{{ $member['name'] }}</h3>
                    <p class="text-xs mt-1" style="color: #007481;">{{ $member['role'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
