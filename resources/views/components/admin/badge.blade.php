@props([
    'color' => 'indigo'
])

@php
    $classes = [
        'indigo' => 'bg-indigo-50 text-indigo-700 border-indigo-200/80',
        'emerald' => 'bg-emerald-50 text-emerald-700 border-emerald-200/80',
        'amber' => 'bg-amber-50 text-amber-700 border-amber-200/80',
        'rose' => 'bg-rose-50 text-rose-700 border-rose-200/80',
        'slate' => 'bg-slate-100 text-slate-700 border-slate-200',
    ][$color] ?? 'bg-indigo-50 text-indigo-700 border-indigo-200/80';
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold border {$classes}"]) }}>
    {{ $slot }}
</span>
