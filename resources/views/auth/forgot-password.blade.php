<x-guest-layout>
    <div class="space-y-6">
        {{-- Header --}}
        <div class="space-y-1">
            <h1 class="text-2xl font-bold text-gray-800">Lupa Kata Sandi?</h1>
            <p class="text-sm text-gray-500 leading-relaxed">
                Masukkan alamat email terdaftar Anda, kami akan mengirimkan tautan untuk mengatur ulang kata sandi.
            </p>
        </div>

        {{-- Status --}}
        @if (session('status'))
            <div class="p-3 rounded-lg bg-green-50 border border-green-200 text-green-800 text-sm">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                    required autofocus
                    placeholder="admin@sekolah.sch.id"
                    class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
                @error('email')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full text-white font-semibold py-3 rounded-lg transition-colors text-sm"
                style="background-color: #007481;"
                onmouseover="this.style.backgroundColor='#005f6a'"
                onmouseout="this.style.backgroundColor='#007481'">
                Kirim Tautan Reset Password
            </button>
        </form>

        {{-- Back to Login --}}
        <div class="pt-4 border-t border-gray-100 text-center text-sm text-gray-500">
            Ingat kata sandi Anda?
            <a href="{{ route('login') }}" class="font-semibold hover:underline" style="color: #007481;">
                Kembali ke Login
            </a>
        </div>
    </div>
</x-guest-layout>
