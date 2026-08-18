# Project Guidelines & Rules

## 1. Modularisasi Kode (Code Modularization)
- **Komponen Blade & View**: Selalu pisahkan UI yang kompleks atau bagian halaman yang dapat digunakan kembali ke dalam Blade Components terpisah (`resources/views/components/...`).
- **Reuse Logika**: Buat fungsi, helper, atau service class yang dapat digunakan kembali (*re-usable*) dan tidak menumpuk di satu tempat.

## 2. Arsitektur Kode & Controller
- **Form Request Validation**: Gunakan kelas `FormRequest` khusus untuk validasi form yang kompleks ketimbang menulis `$request->validate()` langsung di Controller.
- **Strict Type Hinting**: Terapkan type hint pada parameter method PHP dan return type-nya (contoh: `public function index(): View`).

## 3. Keamanan & Performa Database
- **Eager Loading**: Selalu gunakan `with()` pada query Eloquent yang mengambil relasi untuk mencegah masalah perfroma *N+1 Query*.
- **Proteksi Mass-Assignment**: Wajib mendefinisikan `$fillable` secara eksplisit pada setiap Model Eloquent.
- **CSRF & XSS Protection**: Sertakan directive `@csrf` pada semua form mutasi data (`POST`, `PUT`, `DELETE`) dan gunakan sintaks Blade `{{ $variable }}` untuk escaping otomatis.

## 4. Konvensi Penamaan (Naming Conventions)
- **Model**: `PascalCase` tunggal (contoh: `Lead`, `Feature`, `AppSetting`).
- **Controller**: `PascalCase` berakhiran Controller (contoh: `LandingController`, `FaqController`).
- **Blade View & Component**: `kebab-case` (contoh: `demo-modal.blade.php`, `<x-landing.demo-modal />`).
- **Route Name**: `dot.notation` bergaya resource (contoh: `admin.features.index`, `lead.store`).

## 5. UI/UX & Design System
- **Design System Consistency**: Gunakan utility Tailwind yang konsisten untuk warna utama (`indigo-600` / `blue-600`), radius border (`rounded-2xl`), dan shadow untuk menjaga kerapian estetika di halaman publik maupun admin.
