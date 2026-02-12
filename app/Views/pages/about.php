<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<section class="relative bg-gradient-to-br from-industrial-900 via-industrial-800 to-primary-900 py-16 md:py-24">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center px-4 py-1.5 bg-primary-500/20 text-primary-300 text-sm font-medium rounded-full mb-4">
            Profil Perusahaan
        </span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Tentang Kami</h1>
        <p class="text-industrial-300 text-lg max-w-2xl mx-auto">
            Mengenal lebih dekat CV. Multi Teknik Jaya
        </p>
    </div>
</section>

<!-- Company Profile -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="bg-gradient-to-br from-primary-500 to-primary-700 rounded-3xl p-10">
                <div class="bg-white/10 rounded-2xl p-8 backdrop-blur text-center">
                    <div class="w-24 h-24 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-6 backdrop-blur">
                        <img src="/logo.png" alt="CV. Multi Teknik Jaya Logo" class="w-20 h-20">
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">CV. Multi Teknik Jaya</h3>
                    <p class="text-primary-100 text-sm">Filter • Machining • Fabrikasi</p>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="bg-white/10 rounded-xl p-4 text-center backdrop-blur">
                        <p class="text-2xl font-bold text-white">13+</p>
                        <p class="text-primary-100 text-sm">Customer</p>
                    </div>
                    <div class="bg-white/10 rounded-xl p-4 text-center backdrop-blur">
                        <p class="text-2xl font-bold text-white">7</p>
                        <p class="text-primary-100 text-sm">Karyawan</p>
                    </div>
                </div>
            </div>
            
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-industrial-900 mb-6">
                    Partner Terpercaya untuk <span class="text-primary-600">Industri Anda</span>
                </h2>
                <div class="text-industrial-600 space-y-4">
                    <p>Indonesia merupakan negara yang sedang berkembang. Melalui pembangunan diupayakan untuk dapat menciptakan kesempatan dan peluang yang lebih besar kepada setiap warga negara.</p>
                    <p><strong class="text-industrial-800">CV. Multi Teknik Jaya</strong> yang bergerak dalam bidang layanan jasa <strong>Filter</strong>, <strong>Machining (Bubut)</strong> dan <strong>Fabrikasi (Konstruksi)</strong> senantiasa akan berupaya untuk melaksanakan pembangunan yang baik, sesuai dengan kebijaksanaan yang telah ditetapkan.</p>
                    <p>Didukung oleh para tenaga ahli dari berbagai disiplin ilmu dan pengalaman yang dimilikinya, kami senantiasa siap untuk memberikan jasa layanan sesuai permintaan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-16 md:py-24 bg-industrial-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-industrial-900">Visi & Misi</h2>
        </div>
        
        <div class="bg-white rounded-2xl p-8 shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-industrial-900 mb-4">Visi & Misi Kami</h3>
                </div>
                <div>
                    <ul class="text-industrial-600 space-y-4">
                        <li class="flex items-start">
                            <span class="w-6 h-6 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-0.5 flex-shrink-0">1</span>
                            <span>Menjadi bengkel Filter, Bubut dan Fabrikasi <strong>terbaik dan terpercaya</strong> serta pilihan utama para Customer</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-6 h-6 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-0.5 flex-shrink-0">2</span>
                            <span>Meningkatkan nilai-nilai perusahaan melalui <strong>kreativitas dan inovasi</strong> serta pengembangan sumber daya manusia yang professional</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-6 h-6 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-0.5 flex-shrink-0">3</span>
                            <span>Memberikan <strong>kepuasan kepada seluruh Customer</strong> dan kemajuan karyawan dengan menjunjung tinggi nilai-nilai perusahaan</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-6 h-6 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center text-sm font-bold mr-3 mt-0.5 flex-shrink-0">4</span>
                            <span>Membangun <strong>koordinasi dan kemitraan</strong> yang erat dan saling menguntungkan dengan seluruh stakeholder</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lingkup Layanan -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-industrial-900">Lingkup Layanan</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-industrial-50 rounded-2xl p-8 hover-lift">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-industrial-900 mb-3">Perbengkelan / Machining</h3>
                <p class="text-industrial-600">Pembuatan, perbaikan serta Recondisi Alat berat dan Sparepart Mesin Industri</p>
            </div>
            
            <div class="bg-industrial-50 rounded-2xl p-8 hover-lift">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-amber-700 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-industrial-900 mb-3">Fabrikasi (Konstruksi)</h3>
                <p class="text-industrial-600">Komponen material baik berupa Plat, Pipa ataupun Baja yang dapat dibentuk sesuai kebutuhan</p>
            </div>
        </div>
    </div>
</section>

<!-- Fasilitas -->
<section class="py-16 md:py-24 bg-industrial-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-industrial-900">Fasilitas Perusahaan</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Tenaga Ahli -->
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <h3 class="text-xl font-bold text-industrial-900 mb-6">Tenaga Ahli</h3>
                <ul class="space-y-3">
                    <li class="flex items-center text-industrial-600">
                        <svg class="w-5 h-5 mr-3 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Ahli Teknik Konstruksi
                    </li>
                    <li class="flex items-center text-industrial-600">
                        <svg class="w-5 h-5 mr-3 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Ahli Teknik Bubut
                    </li>
                    <li class="flex items-center text-industrial-600">
                        <svg class="w-5 h-5 mr-3 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Ahli Teknik Las
                    </li>
                    <li class="flex items-center text-industrial-600">
                        <svg class="w-5 h-5 mr-3 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Ahli Teknik Pengecoran
                    </li>
                    <li class="flex items-center text-industrial-600">
                        <svg class="w-5 h-5 mr-3 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Ahli Perencanaan
                    </li>
                </ul>
            </div>
            
            <!-- Daftar Mesin -->
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <h3 class="text-xl font-bold text-industrial-900 mb-6">Daftar Mesin</h3>
                <div class="grid grid-cols-2 gap-3">
                    <div class="text-industrial-600 text-sm flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span>Mesin Bubut</div>
                    <div class="text-industrial-600 text-sm flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span>Mesin Milling</div>
                    <div class="text-industrial-600 text-sm flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span>Mesin Bor Duduk</div>
                    <div class="text-industrial-600 text-sm flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span>Mesin Las Argon</div>
                    <div class="text-industrial-600 text-sm flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span>Mesin Las Elektro</div>
                    <div class="text-industrial-600 text-sm flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span>Mesin Hobbing</div>
                    <div class="text-industrial-600 text-sm flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span>Mesin Poles</div>
                    <div class="text-industrial-600 text-sm flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span>Las Acetilin</div>
                    <div class="text-industrial-600 text-sm flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span>Press Jig Filter</div>
                    <div class="text-industrial-600 text-sm flex items-center"><span class="w-2 h-2 bg-primary-500 rounded-full mr-2"></span>Metal Spray</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Data -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-industrial-900">Data Perusahaan</h2>
        </div>
        
        <div class="bg-industrial-50 rounded-2xl overflow-hidden">
            <table class="w-full">
                <tbody class="divide-y divide-industrial-200">
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-100 w-2/5">Nama</td>
                        <td class="px-6 py-4 text-sm text-industrial-800 font-semibold">CV. Multi Teknik Jaya</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-100">Bidang Usaha</td>
                        <td class="px-6 py-4 text-sm text-industrial-800">Filter, Machining, Fabrikasi</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-100">Alamat</td>
                        <td class="px-6 py-4 text-sm text-industrial-800">Bumi Indah City Tahap 2 Blok FH No.3A, Kel. Sukamantri Kec. Pasarkemis Kab. Tangerang</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-100">Telepon</td>
                        <td class="px-6 py-4 text-sm text-industrial-800">(021) 59313656</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-100">Fax</td>
                        <td class="px-6 py-4 text-sm text-industrial-800">(021) 5905343</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-100">Email</td>
                        <td class="px-6 py-4 text-sm text-industrial-800">multiteknikj@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-100">Jumlah Karyawan</td>
                        <td class="px-6 py-4 text-sm text-industrial-800">7 Orang</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-industrial-500 bg-industrial-100">Direktur</td>
                        <td class="px-6 py-4 text-sm text-industrial-800 font-semibold">TRI LUARTININGSIH</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
