<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;
use App\Models\Faq;
use App\Models\AppSetting;

class LandingSeeder extends Seeder
{
    public function run()
    {
        // 1. Data Pengaturan Aplikasi
        AppSetting::create([
            'play_store_url' => 'https://play.google.com/store/apps/details?id=siapschool.os.webview',
            'app_store_url' => 'https://apps.apple.com/id/app/siap-school/id6737998600',
            'whatsapp_cs' => '08123456789',
            'copyright_text' => 'Copyright © 2026 siapschool.com. All Rights Reserved.'
        ]);

        // 2. Data Fitur / Modul
        Feature::create([
            'title' => 'Makan Bergizi Gratis',
            'description' => 'Modul terbaru untuk support pemerintah monitoring Makan Bergizi Gratis'
        ]);
        Feature::create([
            'title' => 'Sistem Terintegrasi',
            'description' => 'Aplikasi sekolah yang menghubungkan berbagai modul (akademik, keuangan, presensi, dsb.) dalam satu sistem.'
        ]);

        // 3. Data FAQ
        Faq::create([
            'question' => 'Apa itu Siapschool?',
            'answer' => 'Siapschool adalah aplikasi manajemen pendidikan yang dirancang untuk membantu sekolah, guru, siswa, dan orang tua dalam mengelola berbagai aspek kegiatan belajar mengajar secara efektif dan efisien.'
        ]);
    }
}