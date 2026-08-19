<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/siapschool-icon.png') }}" type="image/png">
    <title>{{ $setting->app_name ?? 'SiapSchool' }} - Platform Aplikasi & Sistem Informasi Sekolah</title>
    <meta name="description" content="Platform aplikasi pendidikan terpadu yang mempermudah pengelolaan sekolah, KBM, absensi, penilaian, raport, dan komunikasi antar civitas sekolah.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="{ showDemoModal: {{ $errors->any() ? 'true' : 'false' }} }"
    :class="{ 'overflow-hidden': showDemoModal }"
    class="bg-white text-gray-800 font-sans antialiased">

    <style>[x-cloak]{display:none!important;}</style>

    {{-- Navbar --}}
    <x-landing.navbar :setting="$setting" />

    {{-- Success Toast --}}
    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-transition
            class="fixed top-20 right-4 z-50 max-w-sm">
            <div class="bg-white border border-green-200 rounded-xl shadow-lg p-4 flex items-start gap-3">
                <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #007481;">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-semibold text-gray-800">Permintaan Demo Terkirim!</p>
                    <p class="text-xs text-gray-500 mt-0.5">{{ session('success') }}</p>
                </div>
                <button @click="show = false" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    @endif

    {{-- Sections --}}
    <x-landing.hero />
    <x-landing.screenshots :screenshots="$screenshots" />
    <x-landing.advantages />
    <x-landing.features :features="$features" />
    <x-landing.faq :faqs="$faqs" />
    <x-landing.cta />

    {{-- Demo Modal --}}
    <x-landing.demo-modal :errors="$errors" />

    {{-- Footer --}}
    <x-landing.footer :setting="$setting" />

</body>
</html>