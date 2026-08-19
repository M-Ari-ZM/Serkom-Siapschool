<x-guest-layout>
    <div class="space-y-6">
        {{-- Header --}}
        <div class="space-y-1">
            <h1 class="text-2xl font-bold text-gray-800">Selamat Datang Kembali</h1>
            <p class="text-sm text-gray-500">Masuk ke portal administrator Siapschool.</p>
        </div>

        {{-- Session Status --}}
        @if (session('status'))
            <div class="p-3 rounded-lg bg-green-50 border border-green-200 text-green-800 text-sm">
                {{ session('status') }}
            </div>
        @endif

        {{-- Rate-limit lockout banner --}}
        @php
            $isThrottled = $errors->has('email') && str_contains($errors->first('email'), 'Terlalu banyak');
            $throttleSeconds = 0;
            if ($isThrottled) {
                preg_match('/(\d+) detik/', $errors->first('email'), $m);
                $throttleSeconds = (int) ($m[1] ?? 30);
            }
        @endphp

        @if ($isThrottled)
            <div id="lockout-banner"
                 class="flex items-start gap-3 p-4 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm"
                 role="alert">
                <svg class="w-5 h-5 mt-0.5 shrink-0 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
                <div>
                    <p class="font-semibold">Akun sementara dikunci</p>
                    <p class="mt-0.5 text-red-600">
                        Terlalu banyak percobaan gagal. Silakan tunggu
                        <span id="countdown-text" class="font-bold tabular-nums">{{ $throttleSeconds }}</span>
                        detik sebelum mencoba kembali.
                    </p>
                    {{-- Progress bar --}}
                    <div class="mt-3 w-full bg-red-200 rounded-full h-1.5 overflow-hidden">
                        <div id="countdown-bar"
                             class="h-full bg-red-500 rounded-full transition-none"
                             style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        @else
            {{-- Normal email error --}}
            @error('email')
                <div class="p-3 rounded-lg bg-red-50 border border-red-200 text-red-700 text-sm">
                    {{ $message }}
                </div>
            @enderror
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4" id="login-form">
            @csrf

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                    required autofocus autocomplete="username"
                    placeholder="admin@sekolah.sch.id"
                    class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all"
                    style="focus-outline-color: #007481;">
            </div>

            {{-- Password --}}
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-xs font-medium hover:underline transition-colors"
                            style="color: #007481;">
                            Lupa kata sandi?
                        </a>
                    @endif
                </div>
                <input id="password" type="password" name="password"
                    required autocomplete="current-password"
                    placeholder="••••••••"
                    class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition-all">
                @error('password')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Remember Me --}}
            <div class="flex items-center gap-2">
                <input id="remember_me" type="checkbox" name="remember"
                    class="w-4 h-4 rounded border-gray-300 text-teal-600 focus:ring-teal-500">
                <label for="remember_me" class="text-sm text-gray-600 cursor-pointer">Ingat saya</label>
            </div>

            {{-- Attempt counter info (shown after at least 1 failed attempt) --}}
            @if ($errors->has('email') && !$isThrottled && session()->has('login_attempts'))
                <p class="text-xs text-amber-600 font-medium">
                    ⚠ Percobaan ke-{{ session('login_attempts') }} dari 3. Akun akan dikunci sementara jika melebihi batas.
                </p>
            @endif

            {{-- Submit --}}
            <button type="submit" id="submit-btn"
                class="w-full text-white font-semibold py-3 rounded-lg transition-all text-sm mt-1 disabled:opacity-50 disabled:cursor-not-allowed"
                style="background-color: #007481;"
                onmouseover="if(!this.disabled) this.style.backgroundColor='#005f6a'"
                onmouseout="if(!this.disabled) this.style.backgroundColor='#007481'">
                <span id="submit-label">Masuk ke Dashboard</span>
            </button>
        </form>

        {{-- Register Link --}}
        {{-- <div class="pt-4 border-t border-gray-100 text-center text-sm text-gray-500">
            Belum punya akun?
            <a href="{{ route('register') }}" class="font-semibold hover:underline" style="color: #007481;">
                Daftar di sini
            </a>
        </div> --}}
    </div>

    @if ($isThrottled)
    <script>
        (function () {
            const totalSeconds = {{ $throttleSeconds }};
            let remaining = totalSeconds;

            const countdownText = document.getElementById('countdown-text');
            const countdownBar  = document.getElementById('countdown-bar');
            const submitBtn     = document.getElementById('submit-btn');
            const submitLabel   = document.getElementById('submit-label');

            // Disable the submit button immediately
            submitBtn.disabled = true;
            submitBtn.style.backgroundColor = '#9ca3af';
            submitBtn.onmouseover = null;
            submitBtn.onmouseout  = null;

            function updateBar() {
                const pct = (remaining / totalSeconds) * 100;
                countdownBar.style.width = pct + '%';
            }

            const tick = setInterval(function () {
                remaining--;

                if (remaining <= 0) {
                    clearInterval(tick);

                    // Re-enable form
                    countdownText.textContent = '0';
                    countdownBar.style.width  = '0%';

                    submitBtn.disabled = false;
                    submitBtn.style.backgroundColor = '#007481';
                    submitBtn.onmouseover = function () { this.style.backgroundColor = '#005f6a'; };
                    submitBtn.onmouseout  = function () { this.style.backgroundColor = '#007481'; };
                    submitLabel.textContent = 'Masuk ke Dashboard';

                    // Dismiss the lockout banner
                    const banner = document.getElementById('lockout-banner');
                    if (banner) {
                        banner.style.transition = 'opacity 0.4s ease';
                        banner.style.opacity = '0';
                        setTimeout(() => banner.remove(), 400);
                    }
                    return;
                }

                countdownText.textContent = remaining;
                submitLabel.textContent = 'Tunggu ' + remaining + ' detik...';
                updateBar();
            }, 1000);

            updateBar();
        })();
    </script>
    @endif
</x-guest-layout>
