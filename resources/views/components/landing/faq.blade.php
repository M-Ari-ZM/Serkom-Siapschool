@props(['faqs'])

<section id="faq" class="py-16 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-12">
            Pertanyaan Umum
        </h2>

        <div class="space-y-3" x-data="{ open: null }">
            @forelse($faqs as $i => $faq)
                <div class="bg-white rounded-xl border border-gray-100 overflow-hidden">
                    <button class="w-full flex items-center justify-between px-6 py-4 text-left"
                        @click="open === {{ $i }} ? open = null : open = {{ $i }}">
                        <span class="font-medium text-gray-800 text-sm">{{ $faq->question }}</span>
                        <svg class="w-5 h-5 text-gray-400 flex-shrink-0 transition-transform duration-300"
                            :class="open === {{ $i }} ? 'rotate-45' : ''"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </button>
                    <div x-show="open === {{ $i }}"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-cloak>
                        <div class="px-6 pb-4 text-sm text-gray-500 leading-relaxed border-t border-gray-100 pt-3">
                            {{ $faq->answer }}
                        </div>
                    </div>
                </div>
            @empty
                @php
                    $defaultFaqs = [
                        ['q' => 'Apakah ada biaya langganan bulanan?', 'a' => 'Kami menawarkan berbagai paket berlangganan yang fleksibel dan terjangkau. Silakan hubungi tim kami untuk informasi harga yang sesuai dengan kebutuhan sekolah Anda.'],
                        ['q' => 'Bagaimana cara memulai demo?', 'a' => 'Klik tombol "Coba Demo Gratis" dan isi formulir singkat. Tim kami akan menghubungi Anda dalam 1x24 jam untuk pengaturan akun demo.'],
                        ['q' => 'Apakah data sekolah kami aman?', 'a' => 'Keamanan data adalah prioritas utama kami. Seluruh data dienkripsi dan disimpan di server yang aman dengan backup rutin setiap hari.'],
                        ['q' => 'Apakah tersedia dukungan teknis?', 'a' => 'Ya, kami menyediakan dukungan teknis 24 jam melalui chat, email, dan telepon untuk memastikan operasional sekolah Anda berjalan lancar.'],
                        ['q' => 'Berapa lama proses implementasi?', 'a' => 'Proses implementasi biasanya membutuhkan 1-2 minggu tergantung kompleksitas kebutuhan sekolah Anda, termasuk migrasi data dan pelatihan staff.'],
                    ];
                @endphp
                @foreach($defaultFaqs as $i => $faq)
                    <div class="bg-white rounded-xl border border-gray-100 overflow-hidden">
                        <button class="w-full flex items-center justify-between px-6 py-4 text-left"
                            @click="open === {{ $i }} ? open = null : open = {{ $i }}">
                            <span class="font-medium text-gray-800 text-sm">{{ $faq['q'] }}</span>
                            <svg class="w-5 h-5 text-gray-400 flex-shrink-0 transition-transform duration-300"
                                :class="open === {{ $i }} ? 'rotate-45' : ''"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>
                        <div x-show="open === {{ $i }}"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-cloak>
                            <div class="px-6 pb-4 text-sm text-gray-500 leading-relaxed border-t border-gray-100 pt-3">
                                {{ $faq['a'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforelse
        </div>
    </div>
</section>
