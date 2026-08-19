@props(['leads'])

<div class="bg-white rounded-xl border border-gray-100 overflow-hidden" x-data="{ search: '' }">
    {{-- Table Header --}}
    <div class="px-6 py-4 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
        <h2 class="text-base font-semibold text-gray-800">Daftar Pendaftar Demo</h2>
        <div class="relative w-full sm:w-64">
            <svg class="w-4 h-4 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <input x-model="search" type="text" placeholder="Cari nama / sekolah..."
                class="w-full pl-9 pr-4 py-2 border border-gray-200 rounded-lg text-sm text-gray-700 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
        </div>
    </div>

    {{-- Table --}}
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-gray-50 border-b border-gray-100 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-3">Tanggal</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Sekolah</th>
                    <th class="px-6 py-3">Kontak</th>
                    <th class="px-6 py-3">Pesan</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($leads as $lead)
                    @php
                        $rawPhone = preg_replace('/[^0-9]/', '', $lead->phone_email);
                        $waPhone  = str_starts_with($rawPhone, '0') ? '62' . substr($rawPhone, 1) : $rawPhone;
                        $isWaValid = strlen($waPhone) >= 10;
                    @endphp
                    <tr class="hover:bg-gray-50 transition-colors"
                        x-show="!search || '{{ strtolower($lead->name . ' ' . $lead->school_name . ' ' . $lead->phone_email) }}'.includes(search.toLowerCase())">

                        {{-- Tanggal --}}
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-medium text-gray-800">{{ $lead->created_at->format('d M Y') }}</p>
                            <p class="text-xs text-gray-400">{{ $lead->created_at->format('H:i') }} WIB</p>
                        </td>

                        {{-- Nama --}}
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg flex items-center justify-center text-xs font-bold text-white flex-shrink-0"
                                    style="background-color: #007481;">
                                    {{ strtoupper(substr($lead->name, 0, 1)) }}
                                </div>
                                <span class="font-medium text-gray-800">{{ $lead->name }}</span>
                            </div>
                        </td>

                        {{-- Sekolah --}}
                        <td class="px-6 py-4 text-gray-700">
                            {{ $lead->school_name }}
                        </td>

                        {{-- Kontak --}}
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm text-gray-700 mb-1.5">{{ $lead->phone_email }}</p>
                            <div class="flex items-center gap-1.5">
                                @if($isWaValid)
                                    <a href="https://wa.me/{{ $waPhone }}?text=Halo%20Bpk/Ibu%20{{ urlencode($lead->name) }},%20terima%20kasih%20telah%20mengajukan%20demo%20aplikasi%20untuk%20{{ urlencode($lead->school_name) }}."
                                        target="_blank"
                                        class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md text-xs font-medium text-white transition-colors"
                                        style="background-color: #25D366;"
                                        onmouseover="this.style.backgroundColor='#1da851'"
                                        onmouseout="this.style.backgroundColor='#25D366'">
                                        WhatsApp
                                    </a>
                                @endif
                                <a href="mailto:{{ $lead->phone_email }}"
                                    class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md text-xs font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 transition-colors">
                                    Email
                                </a>
                            </div>
                        </td>

                        {{-- Pesan --}}
                        <td class="px-6 py-4 text-sm text-gray-500 max-w-xs">
                            @if($lead->message)
                                <p class="truncate italic">"{{ $lead->message }}"</p>
                            @else
                                <span class="text-gray-300">—</span>
                            @endif
                        </td>

                        {{-- Aksi --}}
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form action="{{ route('admin.leads.destroy', $lead) }}" method="POST" class="inline-block"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data pendaftar ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-2.5 py-1 text-xs font-medium text-red-600 bg-red-50 hover:bg-red-100 rounded-md transition-colors">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-16 text-center">
                            <div class="flex flex-col items-center gap-3">
                                <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                    </svg>
                                </div>
                                <p class="font-medium text-gray-700">Belum ada permintaan demo</p>
                                <p class="text-xs text-gray-400">Pendaftar baru akan muncul di sini secara otomatis.</p>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
