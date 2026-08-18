<div x-show="showDemoModal" class="fixed inset-0 z-50 flex items-center justify-center px-4"
    x-cloak
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0">

    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/40" @click="showDemoModal = false"></div>

    <!-- Modal -->
    <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-md"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95">

        <div class="flex items-center justify-between p-6 border-b border-gray-100">
            <h3 class="font-bold text-gray-800 text-lg">Coba Demo Gratis</h3>
            <button @click="showDemoModal = false" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <form action="{{ route('lead.store') }}" method="POST" class="p-6 space-y-4">
            @csrf
            <div>
                <label for="demo_name" class="block text-sm font-medium text-gray-700 mb-1.5">Nama Lengkap</label>
                <input id="demo_name" type="text" name="name" required placeholder="Nama Anda"
                    class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:border-transparent transition-all"
                    style="--tw-ring-color: #007481;"
                    onfocus="this.style.ringColor='#007481'">
            </div>
            <div>
                <label for="demo_email" class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                <input id="demo_email" type="email" name="phone_email" required placeholder="email@contoh.com"
                    class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
            </div>
            <div>
                <label for="demo_message" class="block text-sm font-medium text-gray-700 mb-1.5">Pesan <span class="text-gray-400 font-normal">(opsional)</span></label>
                <textarea id="demo_message" name="message" rows="3" placeholder="Ceritakan kebutuhan sekolah Anda..."
                    class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:border-transparent transition-all resize-none"></textarea>
            </div>
            <div>
                <label for="demo_school" class="block text-sm font-medium text-gray-700 mb-1.5">Nama Sekolah</label>
                <input id="demo_school" type="text" name="school_name" required placeholder="Nama sekolah Anda"
                    class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
            </div>
            <button type="submit"
                class="w-full text-white font-semibold py-3 rounded-lg transition-colors text-sm mt-2"
                style="background-color: #007481;"
                onmouseover="this.style.backgroundColor='#005f6a'"
                onmouseout="this.style.backgroundColor='#007481'">
                Kirim Permintaan Demo
            </button>
        </form>
    </div>
</div>
