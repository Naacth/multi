<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative bg-industrial-900 text-white py-20 md:py-32 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center bg-no-repeat fixed-bg"></div>
    <div class="absolute inset-0 z-0 bg-gradient-to-r from-industrial-900 to-transparent"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in-up">Tentang Kami</h1>
        <p class="text-xl text-industrial-300 max-w-3xl mx-auto animate-fade-in-up animation-delay-300">
            Mengenal lebih dekat <?= $company['name'] ?? 'CV. Multi Teknik Jaya' ?>, mitra solusi industri Anda.
        </p>
    </div>
</section>

<!-- Company Profile -->
<section class="relative bg-gradient-to-br from-industrial-900 via-industrial-800 to-primary-900 py-16 md:py-24">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6 text-white">
                <div class="inline-flex items-center space-x-2 text-primary-400 font-semibold tracking-wider uppercase text-sm">
                    <span class="w-8 h-0.5 bg-primary-500"></span>
                    <span>Profil Perusahaan</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold leading-tight">
                    Dedikasi untuk <span class="text-primary-400">Presisi</span> dan <span class="text-primary-400">Kualitas</span>
                </h2>
                <div class="space-y-4 text-industrial-200 leading-relaxed text-lg">
                    <p>
                        <strong><?= $company['name'] ?? 'CV. Multi Teknik Jaya' ?></strong> adalah perusahaan yang bergerak di bidang Filter, Machining, dan Fabrikasi. Kami berdedikasi untuk memberikan solusi teknis terbaik bagi industri manufaktur, pertambangan, dan konstruksi.
                    </p>
                    <p>
                        Didirikan dengan komitmen terhadap keunggulan, kami memiliki workshop yang dilengkapi dengan mesin-mesin presisi dan didukung oleh tenaga ahli yang berpengalaman di bidangnya.
                    </p>
                    <p>
                        Kami melayani pembuatan sparepart custom, perbaikan part mesin (recondisi), serta pembuatan filter industri dengan spesifikasi khusus.
                    </p>
                </div>
                
                <div class="grid grid-cols-2 gap-6 pt-6">
                    <div class="bg-white/5 backdrop-blur rounded-xl p-4 border border-white/10">
                        <p class="text-3xl font-bold text-primary-400"><?= date('Y') - 2013 // Assuming established 2013 based on 10+ years ?>+</p>
                        <p class="text-sm text-industrial-400">Tahun Pengalaman</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur rounded-xl p-4 border border-white/10">
                        <p class="text-3xl font-bold text-primary-400"><?= $company['employees'] ?? '10+' ?></p>
                        <p class="text-sm text-industrial-400">Karyawan Profesional</p>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <div class="absolute inset-0 bg-primary-500 rounded-2xl rotate-3 opacity-20"></div>
                <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Workshop Activity" class="relative rounded-2xl shadow-2xl border border-white/10 grayscale hover:grayscale-0 transition-all duration-500">
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-16 md:py-24 bg-industrial-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Vision -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-industrial-100">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-primary-500/30">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-industrial-900 mb-4">Visi Kami</h3>
                <p class="text-industrial-600 text-lg leading-relaxed">
                    <?= $company['vision'] ?? 'Menjadi bengkel Filter, Bubut dan Fabrikasi terbaik dan terpercaya serta pilihan utama para Customer.' ?>
                </p>
            </div>

            <!-- Mission -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-industrial-100">
                <div class="w-16 h-16 bg-gradient-to-br from-industrial-700 to-industrial-900 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-industrial-900/30">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-industrial-900 mb-4">Misi Kami</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-primary-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-industrial-600">Terus meningkatkan kualitas (Quality)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-primary-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-industrial-600">Menjaga biaya agar tetap kompetitif (Cost)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-primary-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-industrial-600">Ketepatan waktu pengiriman (Delivery)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-primary-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-industrial-600">Pelayanan terbaik kepada Customer (Service)</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Company Data Table -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-industrial-900">Data Perusahaan</h2>
        </div>
        <div class="bg-white rounded-xl shadow-lg border border-industrial-100 overflow-hidden">
            <table class="w-full">
                <tbody class="divide-y divide-industrial-100">
                    <tr class="hover:bg-industrial-50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-50 w-1/3">Nama Perusahaan</td>
                        <td class="px-6 py-4 text-sm text-industrial-900 font-bold"><?= $company['name'] ?? 'CV. Multi Teknik Jaya' ?></td>
                    </tr>
                    <tr class="hover:bg-industrial-50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-50">Alamat Workshop</td>
                        <td class="px-6 py-4 text-sm text-industrial-900"><?= $company['address'] ?? 'Tangerang' ?></td>
                    </tr>
                    <tr class="hover:bg-industrial-50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-50">Telepon</td>
                        <td class="px-6 py-4 text-sm text-industrial-900"><?= $company['phone'] ?? '-' ?></td>
                    </tr>
                    <tr class="hover:bg-industrial-50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-50">Fax</td>
                        <td class="px-6 py-4 text-sm text-industrial-900"><?= $company['fax'] ?? '-' ?></td>
                    </tr>
                    <tr class="hover:bg-industrial-50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-50">Email</td>
                        <td class="px-6 py-4 text-sm text-industrial-900"><?= $company['email'] ?? '-' ?></td>
                    </tr>
                    <tr class="hover:bg-industrial-50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-50">Direktur</td>
                        <td class="px-6 py-4 text-sm text-industrial-900 font-semibold"><?= $company['director'] ?? '-' ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
