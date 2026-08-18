@props(['title'])

<div class="bg-gray-50 border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <nav class="flex items-center gap-2 text-xs text-gray-500" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="hover:text-teal-600 transition-colors">Beranda</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="font-medium" style="color: #007481;">{{ $title }}</span>
        </nav>
    </div>
</div>
