<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-industrial-900 via-industrial-800 to-primary-900 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-32 lg:py-40">
        <div class="text-center">
            <div class="animate-fade-in-up">
                <span class="inline-flex items-center px-4 py-1.5 bg-primary-500/20 text-primary-300 text-sm font-medium rounded-full mb-6">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    Solusi Teknik Industri Terpercaya
                </span>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-white mb-6 animate-fade-in-up delay-100">
                <span class="block">CV. Multi Teknik</span>
                <span class="gradient-text bg-gradient-to-r from-primary-400 to-primary-200" style="-webkit-text-fill-color: transparent; background-clip: text; -webkit-background-clip: text;">Jaya</span>
            </h1>
            
            <p class="text-lg md:text-xl text-industrial-300 max-w-3xl mx-auto mb-10 animate-fade-in-up delay-200">
                Spesialis <strong class="text-white">Machining</strong>, <strong class="text-white">Filter</strong>, dan <strong class="text-white">Fabrikasi</strong> untuk kebutuhan industri. 
                Kami menyediakan solusi custom sesuai kondisi aktual mesin pabrik Anda.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up delay-300">
                <a href="/kontak" class="inline-flex items-center px-8 py-4 bg-primary-500 hover:bg-primary-600 text-white font-semibold rounded-xl shadow-lg shadow-primary-500/30 hover:shadow-primary-500/50 hover:scale-105 transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    Hubungi Kami
                </a>
                <a href="/tentang-kami" class="inline-flex items-center px-8 py-4 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl border border-white/20 backdrop-blur transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Tentang Kami
                </a>
            </div>
        </div>
    </div>
    
    <!-- Decorative Bottom Wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 md:h-24" viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 50L48 45.7C96 41 192 33 288 35.3C384 38 480 52 576 58.3C672 65 768 65 864 58.3C960 52 1056 38 1152 33.3C1248 28 1344 32 1392 33.7L1440 35V100H1392C1344 100 1248 100 1152 100C1056 100 960 100 864 100C768 100 672 100 576 100C480 100 384 100 288 100C192 100 96 100 48 100H0V50Z" fill="#f8fafc"/>
        </svg>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 md:py-24 bg-industrial-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12 md:mb-16">
            <span class="inline-flex items-center px-3 py-1 bg-primary-100 text-primary-700 text-sm font-medium rounded-full mb-4">
                Layanan Kami
            </span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-industrial-900 mb-4">
                Solusi Lengkap untuk <br class="hidden sm:block"><span class="text-primary-600">Industri Anda</span>
            </h2>
            <p class="text-industrial-600 text-lg max-w-2xl mx-auto">
                Kami menyediakan layanan fabrikasi, machining, dan pembuatan part yang disesuaikan dengan kebutuhan aktual mesin pabrik Anda
            </p>
        </div>
        
        <!-- Service Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Machining -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg shadow-industrial-200/50 hover:shadow-xl hover:shadow-primary-500/10 transition-all duration-300 hover-lift">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-industrial-900 mb-3">Machining</h3>
                <p class="text-industrial-600 mb-4">
                    Proses pengerjaan logam presisi dengan mesin CNC dan konvensional untuk berbagai komponen industri.
                </p>
                <ul class="text-sm text-industrial-500 space-y-2">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Bubut & Milling
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Boring & Grinding
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Repair & Modifikasi
                    </li>
                </ul>
            </div>
            
            <!-- Filter -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg shadow-industrial-200/50 hover:shadow-xl hover:shadow-primary-500/10 transition-all duration-300 hover-lift">
                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-industrial-900 mb-3">Filter</h3>
                <p class="text-industrial-600 mb-4">
                    Pembuatan dan modifikasi filter industri custom sesuai spesifikasi dan kebutuhan sistem filtrasi pabrik.
                </p>
                <ul class="text-sm text-industrial-500 space-y-2">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Filter Udara
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Filter Oli & Hydraulic
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Filter Custom
                    </li>
                </ul>
            </div>
            
            <!-- Fabrikasi -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg shadow-industrial-200/50 hover:shadow-xl hover:shadow-primary-500/10 transition-all duration-300 hover-lift">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-amber-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-industrial-900 mb-3">Fabrikasi & Konstruksi</h3>
                <p class="text-industrial-600 mb-4">
                    Pembuatan struktur baja, ducting, tangki, dan berbagai konstruksi logam untuk kebutuhan industri.
                </p>
                <ul class="text-sm text-industrial-500 space-y-2">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Struktur Baja
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Tangki & Ducting
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Piping & Support
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Content -->
            <div>
                <span class="inline-flex items-center px-3 py-1 bg-primary-100 text-primary-700 text-sm font-medium rounded-full mb-4">
                    Mengapa Memilih Kami
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-industrial-900 mb-6">
                    Solusi Custom untuk <span class="text-primary-600">Kebutuhan Aktual</span> Mesin Anda
                </h2>
                <p class="text-industrial-600 text-lg mb-8">
                    Kami tidak hanya menjual produk standar. Kami menganalisis kondisi aktual mesin di pabrik Anda dan memberikan solusi yang tepat, efisien, dan terjangkau.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-industrial-900 mb-1">Kualitas Terjamin</h4>
                            <p class="text-industrial-600 text-sm">Menggunakan material berkualitas dan proses pengerjaan presisi tinggi</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-industrial-900 mb-1">Tepat Waktu</h4>
                            <p class="text-industrial-600 text-sm">Komitmen penyelesaian proyek sesuai jadwal yang disepakati</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-industrial-900 mb-1">Tim Berpengalaman</h4>
                            <p class="text-industrial-600 text-sm">Didukung teknisi yang berpengalaman di berbagai industri</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-industrial-900 mb-1">Harga Kompetitif</h4>
                            <p class="text-industrial-600 text-sm">Solusi terbaik dengan harga yang terjangkau dan transparan</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Stats -->
            <div class="bg-gradient-to-br from-industrial-900 to-primary-900 rounded-3xl p-8 md:p-12 text-white">
                <h3 class="text-2xl font-bold mb-8">Pengalaman Kami dalam Angka</h3>
                
                <div class="grid grid-cols-2 gap-8">
                    <div class="text-center">
                        <p class="text-4xl md:text-5xl font-bold text-primary-300 mb-2">10+</p>
                        <p class="text-industrial-300 text-sm">Tahun Pengalaman</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl md:text-5xl font-bold text-primary-300 mb-2">50+</p>
                        <p class="text-industrial-300 text-sm">Klien Industri</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl md:text-5xl font-bold text-primary-300 mb-2">500+</p>
                        <p class="text-industrial-300 text-sm">Proyek Selesai</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl md:text-5xl font-bold text-primary-300 mb-2">100%</p>
                        <p class="text-industrial-300 text-sm">Kepuasan Klien</p>
                    </div>
                </div>
                
                <div class="mt-10 pt-8 border-t border-white/20">
                    <p class="text-industrial-300 text-sm mb-4">Siap bekerja sama dengan Anda?</p>
                    <a href="/kontak" class="inline-flex items-center px-6 py-3 bg-white text-industrial-900 font-semibold rounded-xl hover:bg-primary-50 transition-colors duration-300">
                        Konsultasi Gratis
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-24 bg-gradient-to-r from-primary-600 to-primary-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Butuh Solusi untuk Mesin Industri Anda?
        </h2>
        <p class="text-primary-100 text-lg mb-8 max-w-2xl mx-auto">
            Tim kami siap membantu menganalisis kebutuhan dan memberikan solusi terbaik. Hubungi kami sekarang untuk konsultasi gratis.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center px-8 py-4 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-green-500/30 hover:scale-105 transition-all duration-300">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                Hubungi via WhatsApp
            </a>
            <a href="/klien" class="inline-flex items-center px-8 py-4 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl border border-white/30 transition-all duration-300">
                Lihat Klien Kami
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
