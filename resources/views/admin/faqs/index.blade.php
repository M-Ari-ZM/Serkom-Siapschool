<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div>
                <h1 class="text-xl font-bold text-gray-800">Kelola FAQ</h1>
                <p class="text-sm text-gray-500 mt-0.5">Kelola pertanyaan dan jawaban yang ditampilkan di landing page.</p>
            </div>
            <a href="{{ route('admin.faqs.create') }}"
                class="inline-flex items-center gap-1.5 px-4 py-2.5 text-white text-sm font-semibold rounded-lg transition-colors"
                style="background-color: #007481;"
                onmouseover="this.style.backgroundColor='#005f6a'"
                onmouseout="this.style.backgroundColor='#007481'">
                + Tambah FAQ
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
                                <th class="px-6 py-3">Pertanyaan</th>
                                <th class="px-6 py-3">Jawaban</th>
                                <th class="px-6 py-3 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse($faqs as $faq)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 font-medium text-gray-800 max-w-xs">
                                        {{ $faq->question }}
                                    </td>
                                    <td class="px-6 py-4 text-gray-500 text-sm max-w-md leading-relaxed">
                                        {{ Str::limit($faq->answer, 100) }}
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="{{ route('admin.faqs.edit', $faq) }}"
                                                class="px-3 py-1.5 text-xs font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" class="inline-block"
                                                onsubmit="return confirm('Hapus FAQ ini?');">
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
                                    <td colspan="3" class="px-6 py-16 text-center">
                                        <div class="flex flex-col items-center gap-2">
                                            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center">
                                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                            </div>
                                            <p class="font-medium text-gray-700">Belum ada FAQ</p>
                                            <p class="text-xs text-gray-400">Tambahkan FAQ baru dengan klik tombol di atas.</p>
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
