<section class="py-20 md:py-28 bg-white text-center">
    {{-- Decorative background blobs --}}
    <div class="absolute -bottom-[28rem] left-1/2 -translate-x-1/2 w-[32rem] h-[32rem] rounded-full opacity-10 pointer-events-none"
         style="background: radial-gradient(circle, #0a9db2);"></div>
    {{-- <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full opacity-10 pointer-events-none"
         style="background: radial-gradient(circle, #007481, transparent);"></div>
    <div class="absolute -bottom-24 -left-24 w-72 h-72 rounded-full opacity-10 pointer-events-none"
         style="background: radial-gradient(circle, #0a9db2, transparent);"></div>
   <div class="absolute -bottom-96 -right-24 w-48 h-48 rounded-full opacity-10 pointer-events-none"
         style="background: radial-gradient(circle, #0a9db2, transparent);"></div> --}}
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-5 leading-tight">
            Platform Aplikasi Pendidikan
        </h1>
        <p class="text-gray-500 text-base md:text-lg max-w-2xl mx-auto leading-relaxed mb-10">
            mempermudah sekolah, guru, siswa, wali murid dan staff dalam monitoring kegiatan sehari-hari,
            baik itu Kurikulum, kegiatan belajar mengajar (KBM), penilaian, raport, absensi, cuti dan lainnya.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
            <button type="button" @click="showDemoModal = true"
                class="w-full sm:w-auto text-white font-semibold px-8 py-3 rounded-lg transition-colors text-base"
                style="background-color: #007481;"
                onmouseover="this.style.backgroundColor='#005f6a'"
                onmouseout="this.style.backgroundColor='#007481'">
                Coba Demo Gratis
            </button>
        </div>

        {{-- Image --}}
        <div class="relative w-full max-w-[20rem] mx-auto mb-16">
            <img src="{{ asset('assets/Benefits_Mobile.webp') }}" alt="SiapSchool Hero Image"
                class="w-full h-auto">
        </div>

        <!-- Stats -->
        <div class="flex flex-wrap items-center justify-center gap-8 md:gap-16 text-center">
            <div>
                <p class="text-3xl font-bold text-gray-800">100+</p>
                <p class="text-sm text-gray-500 mt-1">Modul Aktif</p>
            </div>
            <div class="h-10 w-px bg-gray-200 hidden md:block"></div>
            <div>
                <p class="text-3xl font-bold text-gray-800">100+</p>
                <p class="text-sm text-gray-500 mt-1">Sekolah Aktif</p>
            </div>
            <div class="h-10 w-px bg-gray-200 hidden md:block"></div>
            <div>
                <p class="text-3xl font-bold text-gray-800">100+</p>
                <p class="text-sm text-gray-500 mt-1">Sekolah Bergabung</p>
            </div>
        </div>
    </div>
</section>
