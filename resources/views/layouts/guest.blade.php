<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/siapschool-icon.png') }}" type="image/png">
    <title>{{ config('app.name', 'SiapSchool') }} - Autentikasi Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-gray-50 font-sans text-gray-900 antialiased">

    <div class="min-h-screen flex flex-col lg:flex-row">

        {{-- Left: Brand Panel --}}
        <div class="hidden lg:flex lg:w-2/5 xl:w-1/3 flex-col justify-between p-12 text-white"
            style="background-color: #007481;">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <img src="{{ asset('assets/siapschool.png') }}" alt="SiapSchool Logo" class="h-6 w-auto">
            </a>

            {{-- Center Copy --}}
            <div class="space-y-6">
                <h2 class="text-3xl font-bold leading-tight text-white">
                    Kelola Sekolah Lebih Cerdas & Efisien
                </h2>
                <p class="text-sm leading-relaxed" style="color: rgba(255,255,255,0.75);">
                    Platform manajemen sekolah terpadu untuk administrasi, KBM, absensi, penilaian, dan komunikasi yang lebih mudah.
                </p>

                <div class="space-y-3 pt-2">
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-sm" style="color: rgba(255,255,255,0.85);">100+ Modul Aktif</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-sm" style="color: rgba(255,255,255,0.85);">100+ Sekolah Bergabung</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-sm" style="color: rgba(255,255,255,0.85);">Dukungan 24 Jam</span>
                    </div>
                </div>
            </div>

            {{-- Bottom --}}
            <p class="text-xs" style="color: rgba(255,255,255,0.5);">
                &copy; {{ date('Y') }} {{ config('app.name', 'SiapSchool') }}. All rights reserved.
            </p>
        </div>

        {{-- Right: Form Area --}}
        <div class="w-full lg:w-3/5 xl:w-2/3 flex flex-col justify-between p-6 sm:p-10 lg:p-16">
            {{-- Top Bar --}}
            <div class="flex items-center justify-between">
                {{-- Mobile logo --}}
                <a href="{{ route('home') }}" class="flex lg:hidden items-center gap-2">
                    <span class="font-bold text-gray-800" style="color: #007481;">{{ config('app.name', 'SiapSchool') }}</span>
                </a>

                <a href="{{ route('home') }}"
                    class="ml-auto inline-flex items-center gap-1.5 text-xs font-medium text-gray-500 hover:text-gray-800 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali ke Landing Page
                </a>
            </div>

            {{-- Form Slot --}}
            <div class="my-auto py-8 max-w-sm w-full mx-auto">
                {{ $slot }}
            </div>

            {{-- Bottom --}}
            <p class="text-center text-xs text-gray-400">
                Butuh bantuan? Hubungi Tim IT Support.
            </p>
        </div>

    </div>

</body>
</html>
