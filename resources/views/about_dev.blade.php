<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/siapschool-icon.png') }}" type="image/png">
    <title>Tentang Kami - {{ $setting->app_name ?? 'SiapSchool' }}</title>
    <meta name="description" content="Pelajari lebih lanjut tentang {{ $setting->app_name ?? 'SiapSchool' }}, platform manajemen pendidikan digital end-to-end berbasis ERP, Cloud, dan SaaS untuk lembaga pendidikan di Indonesia.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="{ showDemoModal: false }"
      :class="{ 'overflow-hidden': showDemoModal }"
      class="bg-white text-gray-800 font-sans antialiased">

    <style>[x-cloak]{display:none!important;}</style>

    {{-- Navbar --}}
    <x-landing.navbar :setting="$setting" />

    {{-- Breadcrumb --}}
    <x-landing.breadcrumb title="Tentang Pemrogram" />


    {{-- Sections --}}
    <x-landing.about-dev />

    {{-- Footer --}}
    <x-landing.footer :setting="$setting" />

</body>
</html>
