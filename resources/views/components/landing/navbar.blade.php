@props(['setting'])

<nav class="bg-white border-b border-gray-100 sticky top-0 z-50" x-data="{ mobileOpen: false }">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-2">
                <img src="{{ asset('assets/siapschool.png') }}" alt="SiapSchool Logo" class="h-6 w-auto">
            </a>

            <!-- Desktop Nav -->
            <div class="hidden lg:flex items-center gap-8 text-sm font-medium text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-teal-600 transition-colors">Home</a>
                <a href="{{ route('about') }}" class="hover:text-teal-600 transition-colors">Tentang Kami</a>
            </div>

            <!-- Desktop CTA -->
            <div class="hidden lg:flex items-center gap-3">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-sm font-medium text-gray-600 hover:text-teal-700 transition-colors">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-teal-700 transition-colors">
                        Masuk
                    </a>
                @endauth
                <button type="button" @click="showDemoModal = true"
                    class="text-sm font-semibold text-white px-5 py-2.5 rounded-lg transition-colors"
                    style="background-color: #007481;"
                    onmouseover="this.style.backgroundColor='#005f6a'"
                    onmouseout="this.style.backgroundColor='#007481'">
                    Coba Demo Gratis
                </button>
            </div>

            <!-- Mobile: Hamburger Button -->
            <button @click="mobileOpen = !mobileOpen"
                class="lg:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors"
                aria-label="Buka menu navigasi"
                :aria-expanded="mobileOpen">
                <!-- Hamburger Icon -->
                <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <!-- Close Icon -->
                <svg x-show="mobileOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer -->
    <div x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        x-cloak
        class="lg:hidden border-t border-gray-100 bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-4 space-y-1">
            <a href="{{ route('home') }}" @click="mobileOpen = false"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-teal-600 transition-all">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Home
            </a>
            <a href="{{ route('about') }}" @click="mobileOpen = false"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-teal-600 transition-all">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Tentang Kami
            </a>

            <div class="pt-3 mt-3 border-t border-gray-100 flex flex-col gap-2">
                @auth
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl text-sm font-medium text-gray-700 border border-gray-200 hover:bg-gray-50 transition-all">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl text-sm font-medium text-gray-700 border border-gray-200 hover:bg-gray-50 transition-all">
                        Masuk
                    </a>
                @endauth
                <button type="button" @click="showDemoModal = true; mobileOpen = false"
                    class="w-full text-sm font-semibold text-white px-4 py-3 rounded-xl transition-colors"
                    style="background-color: #007481;"
                    onmouseover="this.style.backgroundColor='#005f6a'"
                    onmouseout="this.style.backgroundColor='#007481'">
                    Coba Demo Gratis
                </button>
            </div>
        </div>
    </div>
</nav>
