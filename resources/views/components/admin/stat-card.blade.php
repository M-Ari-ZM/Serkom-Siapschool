@props(['title', 'value', 'description' => null, 'color' => 'teal'])

<div class="bg-white rounded-xl border border-gray-100 p-6">
    <div class="flex items-start justify-between">
        <div class="flex-1 min-w-0">
            <p class="text-sm text-gray-500 mb-1">{{ $title }}</p>
            <p class="text-3xl font-bold text-gray-800">{{ $value }}</p>
            @if($description)
                <p class="text-xs text-gray-400 mt-1">{{ $description }}</p>
            @endif
        </div>
        <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0 ml-4"
            style="background-color: #e6f5f6; color: #007481;">
            {{ $slot }}
        </div>
    </div>
</div>
