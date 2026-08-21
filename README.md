# Serkom-Siapschool

Aplikasi manajemen sekolah yang dibangun dengan Laravel 12, Tailwind CSS, dan Alpine JS.

## Tentang Project

**Serkom-Siapschool** adalah aplikasi web modern untuk mengelola berbagai aspek operasional sekolah, termasuk manajemen siswa, guru, kelas, dan data akademik lainnya.

### Fitur Utama

- 📚 Manajemen data siswa dan guru
- 🏫 Kelola kelas dan jadwal pelajaran
- 📊 Laporan akademik dan nilai
- 👥 Sistem manajemen pengguna dengan role-based access
- 🎨 UI responsif dengan Tailwind CSS
- ⚡ Interaktif dengan Alpine JS

## Screenshots

### Home
![Home]([https://via.placeholder.com/800x500?text=Dashboard+Screenshot](https://github.com/M-Ari-ZM/Serkom-Siapschool/blob/1e175ff81e59770890d20c7536352dcba328c25a/public/assets/screenshot/Screenshot%202026-08-20%20091240.png))

### Tentang kami
![Tentang kami](https://via.placeholder.com/800x500?text=Kelas+&+Jadwal+Screenshot)

### Dashboard admin
![Dashboard](https://via.placeholder.com/800x500?text=Laporan+Nilai+Screenshot)

### Manajemen keunggulan, fitur, dan tampilan aplikasi
![Manajemen](https://via.placeholder.com/800x500?text=Laporan+Nilai+Screenshot)

## Requirements

- PHP >= 8.2
- Composer
- Node.js dan npm
- Database (SQLite, MySQL, atau PostgreSQL)

## Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/M-Ari-ZM/Serkom-Siapschool.git
cd Serkom-Siapschool
```

### 2. Setup Otomatis (Rekomendasi)
```bash
composer setup
```

Perintah ini akan:
- Install dependencies PHP
- Copy `.env.example` ke `.env`
- Generate app key
- Jalankan database migration
- Install dependencies npm
- Build assets frontend

### 3. Setup Manual

Jika prefer setup manual:

```bash
# Install PHP dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Setup database
php artisan migrate

# Install npm dependencies
npm install

# Build assets
npm run build
```

## Development

### Menjalankan Server

Untuk development dengan hot reload:

```bash
composer run dev
```

Ini akan menjalankan:
- Laravel development server
- Vite untuk frontend assets
- Queue listener untuk background jobs
- Pail untuk log monitoring

### Build Production

```bash
npm run build
```

## Testing

Jalankan test suite:

```bash
composer test
```

Test menggunakan Pest PHP dan Laravel's testing utilities.

## Struktur Project

```
.
├── app/                    # Application code
├── bootstrap/             # Application bootstrap
├── config/                # Configuration files
├── database/              # Database migrations & seeders
├── public/                # Public assets
├── resources/
│   ├── css/              # CSS files dengan Tailwind
│   ├── js/               # JavaScript dengan Alpine JS
│   └── views/            # Blade templates
├── routes/               # Application routes
├── storage/              # Application storage
├── tests/                # Test files (Pest)
└── ...
```

## Technology Stack

### Backend
- **Laravel 12** - Web application framework
- **PHP 8.2+** - Server-side language
- **Laravel Tinker** - REPL untuk debugging

### Frontend
- **Tailwind CSS** - Utility-first CSS framework
- **Alpine JS** - Lightweight JavaScript framework
- **Vite** - Next generation frontend tooling
- **Bootstrap Icons** - Icon library

### Development Tools
- **Pest** - PHP testing framework
- **Laravel Breeze** - Starter kit untuk authentication
- **Laravel Pint** - Code style formatter
- **Laravel Sail** - Docker development environment

## Environment Variables

Edit file `.env` untuk konfigurasi:

```env
APP_NAME=Siapschool
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite
# atau gunakan MySQL/PostgreSQL

MAIL_DRIVER=log
# Konfigurasi email sesuai kebutuhan
```

## Contributing

Kontribusi sangat diterima! Untuk berkontribusi:

1. Fork repository ini
2. Buat feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## License

Project ini dilisensikan di bawah [MIT license](https://opensource.org/licenses/MIT) - lihat file [LICENSE](LICENSE) untuk detail.

## Kontak

- **Author**: M-Ari-ZM
- **GitHub**: [@M-Ari-ZM](https://github.com/M-Ari-ZM)

## Support

Jika menemukan bug atau ingin request fitur baru, silakan buka [Issue](https://github.com/M-Ari-ZM/Serkom-Siapschool/issues) di repository ini.

---

**Happy Coding! 🚀**
