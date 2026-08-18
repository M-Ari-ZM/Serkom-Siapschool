@props(['features'])

<section id="features" class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-12">
            Bagaimana Kami Dapat Membantu Sekolah Anda
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($features as $feature)
                <div class="p-6 rounded-xl border border-gray-100 hover:border-teal-100 hover:shadow-md transition-all">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background-color: #e6f5f6;">
                        <svg class="w-6 h-6" style="color: #007481;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="{{ $feature->icon ?: 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z' }}"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">{{ $feature->title }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">{{ $feature->description }}</p>
                </div>
            @empty
                {{-- Default fallback features from siapschool.com --}}
                @php
                    $defaults = [
                        ['title' => 'Sistem Terintegrasi', 'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'desc' => 'Aplikasi sekolah yang menghubungkan berbagai modul (akademik, keuangan, presensi) dalam satu sistem yang saling berinteraksi.'],
                        ['title' => 'Software as a Service', 'icon' => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z', 'desc' => 'Aplikasi berbasis cloud yang dapat diakses kapan saja dan di mana saja melalui internet tanpa perlu instalasi.'],
                        ['title' => 'WhatsApp Notifikasi', 'icon' => 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z', 'desc' => 'Fitur yang memungkinkan pengiriman pemberitahuan otomatis kepada siswa, orang tua, dan guru melalui WhatsApp.'],
                        ['title' => 'Secure & Reliable', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'desc' => 'Sistem yang dilengkapi dengan proteksi keamanan data, enkripsi, autentikasi berlapis, serta ketersediaan tinggi.'],
                        ['title' => 'Edu Pay', 'icon' => 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z', 'desc' => 'Solusi pembayaran digital yang terintegrasi dalam aplikasi untuk memudahkan pembayaran SPP dan biaya lainnya.'],
                        ['title' => 'Multi Level Education', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'desc' => 'Aplikasi mendukung berbagai jenjang pendidikan seperti SD, SMP, SMA, hingga perguruan tinggi dalam satu platform.'],
                        ['title' => 'Multi Kurikulum', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'desc' => 'Sistem yang dapat digunakan untuk berbagai jenis kurikulum seperti nasional, internasional, atau kurikulum khusus.'],
                        ['title' => 'Multi User', 'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z', 'desc' => 'Mendukung banyak tipe pengguna seperti admin, guru, siswa, dan orang tua dengan hak akses yang berbeda.'],
                        ['title' => 'Multi Platform', 'icon' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z', 'desc' => 'Dapat diakses melalui komputer, tablet, dan smartphone, kompatibel dengan Windows, Android, dan iOS.'],
                    ];
                @endphp
                @foreach($defaults as $item)
                    <div class="p-6 rounded-xl border border-gray-100 hover:border-teal-100 hover:shadow-md transition-all">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background-color: #e6f5f6;">
                            <svg class="w-6 h-6" style="color: #007481;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">{{ $item['title'] }}</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            @endforelse
        </div>
    </div>
</section>
