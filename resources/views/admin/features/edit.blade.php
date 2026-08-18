<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-xl font-bold text-gray-800">Edit Fitur</h1>
                <p class="text-sm text-gray-500 mt-0.5">Perbarui informasi fitur landing page.</p>
            </div>
            <a href="{{ route('admin.features.index') }}"
                class="text-sm text-gray-500 hover:text-gray-800 flex items-center gap-1.5 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl border border-gray-100 p-6 sm:p-8">
                <form action="{{ route('admin.features.update', $feature) }}" method="POST" class="space-y-5">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1.5">Judul Fitur</label>
                        <input id="title" name="title" value="{{ old('title', $feature->title) }}"
                            required
                            class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
                        @error('title')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1.5">Deskripsi Fitur</label>
                        <textarea id="description" name="description" rows="4"
                            required
                            class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all resize-none">{{ old('description', $feature->description) }}</textarea>
                        @error('description')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Icon Picker --}}
                    <div class="pt-1">
                        <x-admin.icon-picker :selected="old('icon', $feature->icon)" />
                        @error('icon')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-4 border-t border-gray-100">
                        <a href="{{ route('admin.features.index') }}"
                            class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-800 transition-colors">
                            Batal
                        </a>
                        <button type="submit"
                            class="px-5 py-2.5 text-white text-sm font-semibold rounded-lg transition-colors"
                            style="background-color: #007481;"
                            onmouseover="this.style.backgroundColor='#005f6a'"
                            onmouseout="this.style.backgroundColor='#007481'">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
