<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 sticky top-0 z-30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Logo + Nav Links --}}
            <div class="flex items-center gap-8">
                <a href="{{ route('dashboard') }}" class="font-bold text-lg" style="color: #007481;">
                    <img src="{{ asset('assets/siapschool.png') }}" alt="SiapSchool Logo" class="h-6 w-auto">
                </a>

                <div class="hidden lg:flex items-center gap-1">
                    <a href="{{ route('dashboard') }}"
                        class="px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('dashboard') ? 'text-teal-700 bg-teal-50' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50' }}"
                        style="{{ request()->routeIs('dashboard') ? 'color: #007481; background-color: #e6f5f6;' : '' }}">
                        Leads Demo
                    </a>
                    <a href="{{ route('admin.features.index') }}"
                        class="px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.features.*') ? 'text-teal-700 bg-teal-50' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50' }}"
                        style="{{ request()->routeIs('admin.features.*') ? 'color: #007481; background-color: #e6f5f6;' : '' }}">
                        Fitur
                    </a>
                    <a href="{{ route('admin.faqs.index') }}"
                        class="px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.faqs.*') ? 'text-teal-700 bg-teal-50' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50' }}"
                        style="{{ request()->routeIs('admin.faqs.*') ? 'color: #007481; background-color: #e6f5f6;' : '' }}">
                        FAQ
                    </a>
                    <a href="{{ route('admin.settings.edit') }}"
                        class="px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.settings.*') ? 'text-teal-700 bg-teal-50' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50' }}"
                        style="{{ request()->routeIs('admin.settings.*') ? 'color: #007481; background-color: #e6f5f6;' : '' }}">
                        Pengaturan
                    </a>
                </div>
            </div>

            {{-- Right Actions --}}
            <div class="hidden sm:flex items-center gap-3">
                <a href="{{ route('home') }}" target="_blank"
                    class="text-xs font-medium text-gray-500 hover:text-gray-800 flex items-center gap-1.5 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                    Landing Page
                </a>

                {{-- Profile Dropdown --}}
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center gap-2 text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors">
                            <div class="w-8 h-8 rounded-lg text-white flex items-center justify-center text-xs font-bold"
                                style="background-color: #007481;">
                                {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                            </div>
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            Edit Profil
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Keluar
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            {{-- Hamburger --}}
            <button @click="open = !open" class="lg:hidden p-2 rounded-lg text-gray-500 hover:bg-gray-100 transition-colors">
                <svg class="w-5 h-5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div :class="{'block': open, 'hidden': !open}" class="hidden lg:hidden border-t border-gray-100 px-4 pt-2 pb-4 space-y-1 bg-white">
        <a href="{{ route('dashboard') }}"
            class="block px-3 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('dashboard') ? 'text-teal-700 bg-teal-50' : 'text-gray-600' }}">
            Leads Demo
        </a>
        <a href="{{ route('admin.features.index') }}"
            class="block px-3 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.features.*') ? 'text-teal-700 bg-teal-50' : 'text-gray-600' }}">
            Fitur
        </a>
        <a href="{{ route('admin.faqs.index') }}"
            class="block px-3 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.faqs.*') ? 'text-teal-700 bg-teal-50' : 'text-gray-600' }}">
            FAQ
        </a>
        <a href="{{ route('admin.settings.edit') }}"
            class="block px-3 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.settings.*') ? 'text-teal-700 bg-teal-50' : 'text-gray-600' }}">
            Pengaturan
        </a>

        <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
            <div class="text-xs">
                <p class="font-semibold text-gray-800">{{ Auth::user()->name }}</p>
                <p class="text-gray-500">{{ Auth::user()->email }}</p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-3 py-1.5 rounded-lg bg-red-50 text-red-600 font-medium text-xs">
                    Keluar
                </button>
            </form>
        </div>
    </div>
</nav>
