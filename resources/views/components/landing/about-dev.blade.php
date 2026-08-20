{{-- About Hero Section --}}
<section class="relative bg-white overflow-hidden py-20">
    {{-- Decorative background blobs --}}
    <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full opacity-10 pointer-events-none"
         style="background: radial-gradient(circle, #007481, transparent);"></div>
    <div class="absolute -bottom-24 -left-24 w-72 h-72 rounded-full opacity-10 pointer-events-none"
         style="background: radial-gradient(circle, #0a9db2, transparent);"></div>

        <h1 class="text-4xl text-center md:text-5xl font-bold text-gray-800 leading-tight mb-14">
                    Profil <span style="color: #007481;">Pemrogram</span>
        </h1>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col justify-center lg:flex-row items-center gap-10">
             {{-- Image Side --}}
            <div class="w-48 lg:w-24">
                <div class="mt-3 relative pb-10">
                    <div class="rounded-3xl overflow-hidden aspect-[3/4] bg-gray-200 flex items-center justify-center shadow-lg">
                        <img src="{{ asset('assets/developer.jpg') }}" alt="Founder" class="w-full h-full object-cover">
                    </div>
                    {{-- Name badge --}}
                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2 w-max bg-white rounded-xl shadow-md px-5 py-2.5 text-center">
                        <p class="font-bold text-gray-800 text-sm">M. Ari Zainal Mutaqin</p>
                        <p class="text-xs text-gray-500" style="color: #007481;">Pemrogram</p>
                    </div>
                </div>
            </div>

            {{-- Text Side --}}
            <div class="text-center lg:text-left">
    
                    <ul class="space-y-5">
                        <li class="bg-white w-fit p-2 px-5 rounded-md shadow-lg text-center font-medium">
                            <p>
                                <span class="mr-2 text-lg" style="color: #007481;"><i class="bi bi-mortarboard-fill"></i></span>
                                SMKN 1 Maja
                            </p>
                        </li>
                        <li class="bg-white w-fit p-2 px-5 rounded-md shadow-lg text-blue-100 text-center font-medium"><span class="mr-2 text-lg" style="color: #007481;"><i class="bi bi-calendar-fill"></i></span>
                        02 Mei 2008</li>
                        <li class="bg-white w-fit p-2 px-5 rounded-md shadow-lg text-blue-100 text-center font-medium"><span class="mr-2 text-lg" style="color: #007481;"><i class="bi bi-geo-alt-fill"></i></span>
                        Blok Gumulung Desa Cipicung, Kec. Maja, Kab. Majalengka</li>
                        <li class="bg-white w-fit p-2 px-5 rounded-md shadow-lg text-blue-100 text-center font-medium"><span class="mr-2 text-lg" style="color: #007481;"><i class="bi bi-heart-fill"></i></span>
                        Menonton Youtube, mendengarkan musik dan mencari berita dunia</li>
                    </ul>
        
               
            </div>
        </div>
    </div>
</section>
