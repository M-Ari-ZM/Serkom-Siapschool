<x-guest-layout>
    <div class="space-y-6">
        {{-- Header --}}
        <div class="space-y-1">
            <h1 class="text-2xl font-bold text-gray-800">Buat Akun Administrator</h1>
            <p class="text-sm text-gray-500">Daftarkan akun pengelola portal sekolah Anda.</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            {{-- Name --}}
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">Nama Lengkap</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}"
                    required autofocus autocomplete="name"
                    placeholder="Nama Anda"
                    class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
                @error('name')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                    required autocomplete="username"
                    placeholder="nama@sekolah.sch.id"
                    class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
                @error('email')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">
                    Kata Sandi <span class="text-gray-400 font-normal">(min. 8 karakter)</span>
                </label>
                <input id="password" type="password" name="password"
                    required autocomplete="new-password"
                    placeholder="••••••••"
                    class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
                @error('password')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1.5">Konfirmasi Kata Sandi</label>
                <input id="password_confirmation" type="password" name="password_confirmation"
                    required autocomplete="new-password"
                    placeholder="••••••••"
                    class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
                @error('password_confirmation')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit --}}
            <button type="submit"
                class="w-full text-white font-semibold py-3 rounded-lg transition-colors text-sm mt-1"
                style="background-color: #007481;"
                onmouseover="this.style.backgroundColor='#005f6a'"
                onmouseout="this.style.backgroundColor='#007481'">
                Buat Akun
            </button>
        </form>

        {{-- Login Link --}}
        <div class="pt-4 border-t border-gray-100 text-center text-sm text-gray-500">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="font-semibold hover:underline" style="color: #007481;">
                Masuk di sini
            </a>
        </div>
    </div>
</x-guest-layout>
