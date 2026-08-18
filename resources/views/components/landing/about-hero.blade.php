{{-- About Hero Section --}}
<section class="relative bg-white overflow-hidden py-20 md:py-28">
    {{-- Decorative background blobs --}}
    <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full opacity-10 pointer-events-none"
         style="background: radial-gradient(circle, #007481, transparent);"></div>
    <div class="absolute -bottom-24 -left-24 w-72 h-72 rounded-full opacity-10 pointer-events-none"
         style="background: radial-gradient(circle, #0a9db2, transparent);"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">

            {{-- Text Side --}}
            <div class="flex-1 text-center lg:text-left">
                <span class="inline-block text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-5"
                      style="background-color: #e0f5f7; color: #007481;">
                    Tentang Kami
                </span>

                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight mb-6">
                    Platform Manajemen<br>
                    <span style="color: #007481;">Pendidikan</span> Terpadu
                </h1>

                <p class="text-gray-500 text-base md:text-lg leading-relaxed mb-5">
                    Platform digital otomasi tatakelola manajemen pendidikan <em>end-to-end</em> berbasis ERP, Cloud, dan SaaS
                    yang bisnis prosesnya dapat dikustomisasi dan di-<em>white-label</em>.
                </p>
                <p class="text-gray-500 text-base leading-relaxed mb-8">
                    Mengintegrasikan seluruh proses di core system akademik — mulai dari pendaftaran, LMS, digital library,
                    online test, hingga penilaian dan rapot — maupun supporting system pendidikan seperti HR payroll,
                    budgeting, inventory asset, dan accounting.
                </p>

                <div class="flex flex-col sm:flex-row items-center sm:items-center gap-4">
                    <button type="button" @click="showDemoModal = true"
                            class="inline-flex items-center gap-2 text-white font-semibold px-8 py-3 rounded-lg transition-colors text-sm"
                            style="background-color: #007481;"
                            onmouseover="this.style.backgroundColor='#005f6a'"
                            onmouseout="this.style.backgroundColor='#007481'">
                        Coba Demo Gratis
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </button>
                    <a href="{{ route('home') }}"
                       class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-teal-700 transition-colors">
                        ← Kembali ke Beranda
                    </a>
                </div>
            </div>

            {{-- Image Side --}}
            <div class="flex-1 flex justify-center lg:justify-center">
                <div class="relative w-full max-w-[13rem] pb-8">
                    {{-- Placeholder image area --}}
                    <div class="relative rounded-sm overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('assets/GetApp_Mobile1.webp') }}" alt="mobile1" class="w-full h-full object-cover">
                    </div>

                    {{-- Floating badge --}}
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-lg px-5 py-3 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                             style="background-color: #007481;">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Platform Terpercaya</p>
                            <p class="text-sm font-bold text-gray-800">100+ Sekolah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
