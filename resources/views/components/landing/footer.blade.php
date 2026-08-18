@props(['setting'])

<footer class="bg-gray-800 text-gray-300">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
            <!-- Brand -->
            <div>
                <h3 class="text-white font-bold text-xl mb-3">{{ $setting->app_name ?? 'SiapSchool' }}</h3>
                <p class="text-sm text-gray-400 leading-relaxed">
                    Platform aplikasi pendidikan terpadu untuk sekolah modern di Indonesia.
                </p>
            </div>

            <!-- Links -->
            <div>
                <h4 class="text-white font-semibold text-sm mb-4 uppercase tracking-wider">Navigasi</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">Tentang Kami</a></li>
                    <li><a href="{{ route('home') }}#advantages" class="hover:text-white transition-colors">Keunggulan</a></li>
                    <li><a href="{{ route('home') }}#features" class="hover:text-white transition-colors">Fitur</a></li>
                    <li><a href="{{ route('home') }}#faq" class="hover:text-white transition-colors">FAQ</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-semibold text-sm mb-4 uppercase tracking-wider">Kontak</h4>
                <ul class="space-y-2 text-sm">
                    @if($setting->contact_email ?? false)
                        <li><a href="mailto:{{ $setting->contact_email }}" class="hover:text-white transition-colors">{{ $setting->contact_email }}</a></li>
                    @else
                        <li>info@siapschool.com</li>
                    @endif
                    @if($setting->whatsapp ?? false)
                        <li><a href="https://wa.me/{{ $setting->whatsapp }}" class="hover:text-white transition-colors">{{ $setting->whatsapp }}</a></li>
                    @endif
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-700 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-gray-500">
            <p>&copy; {{ date('Y') }} {{ $setting->app_name ?? 'SiapSchool' }}. All rights reserved.</p>
            <p>Made with ❤️ for Indonesian Education</p>
        </div>
    </div>
</footer>
