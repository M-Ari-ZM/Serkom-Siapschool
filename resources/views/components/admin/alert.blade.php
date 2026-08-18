@props(['type' => 'success', 'message'])

@php
    $styles = match($type) {
        'success' => ['bg-green-50 border-green-200 text-green-800'],
        'error'   => ['bg-red-50 border-red-200 text-red-800'],
        'warning' => ['bg-yellow-50 border-yellow-200 text-yellow-800'],
        default   => ['bg-blue-50 border-blue-200 text-blue-800'],
    };
@endphp

<div class="p-4 rounded-lg border {{ $styles[0] }} text-sm flex items-start gap-3">
    <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        @if($type === 'success')
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        @elseif($type === 'error')
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        @else
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        @endif
    </svg>
    <span>{{ $message }}</span>
</div>
