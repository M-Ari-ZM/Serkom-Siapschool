<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SiapSchool') }} - Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800">

    <div class="min-h-screen flex flex-col">
        @include('layouts.navigation')

        {{-- Page Heading --}}
        @isset($header)
            <div class="bg-white border-b border-gray-100">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
                    {{ $header }}
                </div>
            </div>
        @endisset

        {{-- Page Content --}}
        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>

    @stack('scripts')
</body>
</html>
