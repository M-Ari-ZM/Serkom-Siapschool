@props(['setting'])

<section id="download" class="py-20 relative overflow-hidden bg-gradient-to-b from-teal-50/50 via-white to-gray-50/50">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl p-8 sm:p-12 lg:p-16 relative overflow-hidden">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center relative z-10">
                {{-- Text & Download Links --}}
                <div class="lg:col-span-7 lg:order-2 space-y-6 text-center lg:text-left">
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-800 leading-tight">
                        Akses Sistem Sekolah Lebih Mudah dari Smartphone Anda
                    </h2>

                    <p class="text-gray-500 text-base sm:text-lg leading-relaxed max-w-xl">
                        Dapatkan kemudahan pemantauan absensi, nilai, jadwal KBM, dan notifikasi penting secara real-time langsung di genggaman Anda. Unduh aplikasi SiapSchool sekarang!
                    </p>

                    {{-- Badges / Download Buttons --}}
                    <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        @if($setting?->play_store_url)
                            <a href="{{ $setting->play_store_url }}" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-3 bg-white hover:bg-slate-100 text-slate-900 px-5 py-3 rounded-xl font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 group">
                                <i class="bi bi-google-play"></i>
                                <div class="text-left">
                                    <div class="text-[10px] uppercase font-semibold text-slate-500 leading-none">GET IT ON</div>
                                    <div class="text-sm font-bold text-slate-900 leading-tight mt-0.5">Google Play</div>
                                </div>
                            </a>
                        @endif

                        @if($setting?->app_store_url)
                            <a href="{{ $setting->app_store_url }}" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-3 bg-white hover:bg-slate-100 text-slate-900 px-5 py-3 rounded-xl font-medium transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 group">
                                <i class="bi bi-apple"></i>
                                <div class="text-left">
                                    <div class="text-[10px] uppercase font-semibold text-slate-500 leading-none">Download on the</div>
                                    <div class="text-sm font-bold text-slate-900 leading-tight mt-0.5">App Store</div>
                                </div>
                            </a>
                        @endif

                        @if(!$setting?->play_store_url && !$setting?->app_store_url)
                            <div class="inline-flex items-center gap-2 text-slate-300 text-sm bg-white/10 px-4 py-2.5 rounded-xl border border-white/10">
                                <span>Tautan aplikasi sedang disiapkan oleh administrator</span>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Image --}}
                <div class="lg:col-span-5 lg:order-1 flex justify-center">
                    <div class="relative w-64 sm:w-72 py-8 lg:py-0  drop-shadow-2xl">
                        <img src="{{ asset('assets/Stats_Phone.webp') }}" 
                             alt="Download SiapSchool Mobile" 
                             class="w-full h-auto rounded-2xl transform hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
