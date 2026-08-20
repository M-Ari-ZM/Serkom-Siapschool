<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-xl font-bold text-gray-800">Pengaturan Aplikasi</h1>
            <p class="text-sm text-gray-500 mt-0.5">Konfigurasi tautan, kontak, dan informasi umum aplikasi.</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 space-y-5">

            @if(session('success'))
                <x-admin.alert type="success" :message="session('success')" />
            @endif

            {{-- FORM KHUSUS HAPUS SCREENSHOT (Dilepas di luar form utama agar tidak bentrok) --}}
            <form id="delete-screenshot-form" action="{{ route('admin.settings.screenshots.destroy') }}" method="POST" class="hidden">
                @csrf
                @method('DELETE')
                <input type="hidden" name="path" id="delete-screenshot-path">
            </form>

            {{-- General Settings Form --}}
            <div class="bg-white rounded-xl border border-gray-100 p-6 sm:p-8">
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="play_store_url" class="block text-sm font-medium text-gray-700 mb-1.5">Tautan Google Play Store</label>
                        <input id="play_store_url" name="play_store_url"
                            value="{{ old('play_store_url', $setting?->play_store_url) }}"
                            placeholder="https://play.google.com/store/apps/details?id=..."
                            class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
                        @error('play_store_url')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="app_store_url" class="block text-sm font-medium text-gray-700 mb-1.5">Tautan Apple App Store</label>
                        <input id="app_store_url" name="app_store_url"
                            value="{{ old('app_store_url', $setting?->app_store_url) }}"
                            placeholder="https://apps.apple.com/app/id..."
                            class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
                        @error('app_store_url')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="whatsapp_cs" class="block text-sm font-medium text-gray-700 mb-1.5">Nomor WhatsApp CS</label>
                        <input id="whatsapp_cs" name="whatsapp_cs"
                            value="{{ old('whatsapp_cs', $setting?->whatsapp_cs) }}"
                            placeholder="081234567890"
                            class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
                        @error('whatsapp_cs')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="contact_email" class="block text-sm font-medium text-gray-700 mb-1.5">Email Kontak CS / Info</label>
                        <input type="email" id="contact_email" name="contact_email"
                            value="{{ old('contact_email', $setting?->contact_email) }}"
                            placeholder="info@siapschool.com"
                            class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
                        @error('contact_email')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Screenshot Upload Section --}}
                    <div class="pt-2 border-t border-gray-100" x-data="screenshotUpload()">
                        <label class="block text-sm font-medium text-gray-700 mb-3">
                            Screenshot Aplikasi
                            <span class="font-normal text-gray-400 ml-1">(tampil di landing page)</span>
                        </label>

                        {{-- Existing Screenshots --}}
                        @if($setting && !empty($setting->app_screenshots))
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach($setting->app_screenshots as $screenshotPath)
                                    <div class="relative group w-12 flex-shrink-0 rounded-xl overflow-hidden border border-gray-100 bg-gray-50 aspect-[9/16]">
                                        <img src="{{ asset($screenshotPath) }}"
                                            alt="Screenshot aplikasi"
                                            class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                            {{-- Ganti form internal dengan button biasa --}}
                                            <button type="button"
                                                onclick="deleteScreenshot('{{ $screenshotPath }}')"
                                                class="bg-red-500 hover:bg-red-600 text-white rounded-lg px-3 py-1.5 text-xs font-medium transition-colors flex items-center gap-1.5">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        {{-- Upload Drop Zone --}}
                        <div
                            @dragover.prevent="isDragging = true"
                            @dragleave.prevent="isDragging = false"
                            @drop.prevent="handleDrop($event)"
                            :class="isDragging ? 'border-teal-400 bg-teal-50' : 'border-gray-200 hover:border-teal-300 hover:bg-gray-50'"
                            class="border-2 border-dashed rounded-xl p-6 text-center transition-all cursor-pointer"
                            @click="$refs.screenshotInput.click()">
                            <input x-ref="screenshotInput" type="file" name="screenshots[]"
                                id="screenshots" multiple accept="image/*"
                                class="hidden"
                                @change="handleFileSelect($event)">

                            <template x-if="previews.length === 0">
                                <div>
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mx-auto mb-3" style="background-color: #e6f5f6;">
                                        <svg class="w-5 h-5" style="color: #007481;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700">Klik atau seret gambar ke sini</p>
                                    <p class="text-xs text-gray-400 mt-1">JPG, PNG, WebP – maks. 3 MB per gambar</p>
                                </div>
                            </template>

                            {{-- New Upload Previews --}}
                            <template x-if="previews.length > 0">
                                <div class="grid grid-cols-4 sm:grid-cols-5 lg:grid-cols-8 gap-2 md:gap-3" @click.stop>
                                    <template x-for="(src, index) in previews" :key="index">
                                        <div class="relative rounded-lg overflow-hidden aspect-[9/16] bg-gray-100">
                                            <img :src="src" class="w-full h-full object-cover">
                                            <button type="button"
                                                @click.stop="removePreview(index)"
                                                class="absolute top-1 right-1 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs hover:bg-red-600 transition-colors">
                                                ✕
                                            </button>
                                        </div>
                                    </template>
                                    <div class="aspect-[9/16] rounded-lg border-2 border-dashed border-gray-200 flex items-center justify-center cursor-pointer hover:border-teal-300 transition-colors"
                                        @click="$refs.screenshotInput.click()">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                        </svg>
                                    </div>
                                </div>
                            </template>
                        </div>

                        @error('screenshots.*')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end pt-4 border-t border-gray-100">
                        <button type="submit"
                            class="px-5 py-2.5 text-white text-sm font-semibold rounded-lg transition-colors"
                            style="background-color: #007481;"
                            onmouseover="this.style.backgroundColor='#005f6a'"
                            onmouseout="this.style.backgroundColor='#007481'">
                            Simpan Pengaturan
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    @push('scripts')
    <script>
        function deleteScreenshot(path) {
            if (confirm('Hapus screenshot ini?')) {
                const form = document.getElementById('delete-screenshot-form');
                document.getElementById('delete-screenshot-path').value = path;
                form.submit();
            }
        }

        function screenshotUpload() {
            return {
                isDragging: false,
                previews: [],
                files: [],

                handleDrop(event) {
                    this.isDragging = false;
                    const droppedFiles = Array.from(event.dataTransfer.files).filter(f => f.type.startsWith('image/'));
                    this.addFiles(droppedFiles);
                },

                handleFileSelect(event) {
                    const selected = Array.from(event.target.files);
                    this.addFiles(selected);
                },

                addFiles(newFiles) {
                    newFiles.forEach(file => {
                        const reader = new FileReader();
                        reader.onload = (e) => this.previews.push(e.target.result);
                        reader.readAsDataURL(file);
                        this.files.push(file);
                    });
                },

                removePreview(index) {
                    this.previews.splice(index, 1);
                    this.files.splice(index, 1);

                    // Rebuild FileList on the input
                    const dt = new DataTransfer();
                    this.files.forEach(f => dt.items.add(f));
                    this.$refs.screenshotInput.files = dt.files;
                }
            }
        }
    </script>
    @endpush
</x-app-layout>