<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div>
                <h1 class="text-xl font-bold text-gray-800">Kelola Fitur</h1>
                <p class="text-sm text-gray-500 mt-0.5">Atur fitur yang ditampilkan di landing page.</p>
            </div>
            <a href="{{ route('admin.features.create') }}"
                class="inline-flex items-center gap-1.5 px-4 py-2.5 text-white text-sm font-semibold rounded-lg transition-colors"
                style="background-color: #007481;"
                onmouseover="this.style.backgroundColor='#005f6a'"
                onmouseout="this.style.backgroundColor='#007481'">
                + Tambah Fitur
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-5">

            @if(session('success'))
                <x-admin.alert type="success" :message="session('success')" />
            @endif

            <div class="bg-white rounded-xl border border-gray-100 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-gray-50 border-b border-gray-100 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            <tr>
                                <th class="px-6 py-3">Icon</th>
                                <th class="px-6 py-3">Judul Fitur</th>
                                <th class="px-6 py-3">Deskripsi</th>
                                <th class="px-6 py-3 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse($features as $feature)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        @if($feature->icon)
                                            <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background-color: #e6f5f6;">
                                                <svg class="w-5 h-5" style="color: #007481;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature->icon }}"/>
                                                </svg>
                                            </div>
                                        @else
                                            <span class="text-gray-300">—</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-800">
                                        {{ $feature->title }}
                                    </td>
                                    <td class="px-6 py-4 text-gray-500 text-sm max-w-md leading-relaxed">
                                        {{ Str::limit($feature->description, 100) }}
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="{{ route('admin.features.edit', $feature) }}"
                                                class="px-3 py-1.5 text-xs font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.features.destroy', $feature) }}" method="POST" class="inline-block"
                                                onsubmit="return confirm('Hapus fitur ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-3 py-1.5 text-xs font-medium text-red-600 bg-red-50 hover:bg-red-100 rounded-lg transition-colors">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-16 text-center">
                                        <div class="flex flex-col items-center gap-2">
                                            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center">
                                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                </svg>
                                            </div>
                                            <p class="font-medium text-gray-700">Belum ada fitur</p>
                                            <p class="text-xs text-gray-400">Tambahkan fitur baru dengan klik tombol di atas.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
