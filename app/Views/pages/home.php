<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative bg-industrial-900 text-white min-h-screen flex items-center pt-16 overflow-hidden">
    <!-- Background Pattern/Image -->
    <div class="absolute inset-0 z-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1565008447742-97f6f38c985c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center bg-no-repeat fixed-bg"></div>
    <div class="absolute inset-0 z-0 bg-gradient-to-r from-industrial-900 via-industrial-900/90 to-transparent"></div>
    
    <!-- Animated Shapes -->
    <div class="absolute top-0 right-0 -mt-20 -mr-20 w-96 h-96 bg-primary-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
    <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8 animate-fade-in-up">
                <div class="inline-flex items-center px-4 py-2 rounded-full border border-primary-500/30 bg-primary-500/10 backdrop-blur-sm text-primary-400 font-medium text-sm">
                    <span class="w-2 h-2 rounded-full bg-primary-500 mr-2 animate-pulse"></span>
                    Solusi Industri Terpercaya
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold leading-tight">
                    Mitra Terbaik <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 to-primary-600">Industri Anda</span>
                </h1>
                <p class="text-lg md:text-xl text-industrial-300 max-w-xl leading-relaxed">
                    Spesialis Filter, Machining, dan Fabrikasi. Kami menghadirkan presisi dan kualitas untuk mendukung produktivitas bisnis Anda.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/kontak" class="px-8 py-4 bg-gradient-to-r from-primary-500 to-primary-600 rounded-xl font-bold text-white shadow-lg shadow-primary-500/25 hover:shadow-primary-500/40 hover:scale-105 transition-all duration-300 text-center">
                        Konsultasi Gratis
                    </a>
                    <a href="/tentang-kami" class="px-8 py-4 bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl font-bold text-white hover:bg-white/10 transition-all duration-300 text-center flex items-center justify-center group">
                        Profil Perusahaan
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                
                <!-- Trust Indicators -->
                <div class="pt-8 border-t border-white/10 flex items-center gap-8">
                    <div>
                        <p class="text-3xl font-bold text-white"><?= count($clients) ?>+</p>
                        <p class="text-sm text-industrial-400">Klien Aktif</p>
                    </div>
                    <div class="w-px h-12 bg-white/10"></div>
                    <div>
                        <p class="text-3xl font-bold text-white">10+</p>
                        <p class="text-sm text-industrial-400">Tahun Pengalaman</p>
                    </div>
                </div>
            </div>
            
            <!-- Hero Image/Illustration -->
            <div class="hidden lg:block relative group">
                <div class="absolute inset-0 bg-primary-500 rounded-2xl rotate-6 opacity-20 group-hover:rotate-12 transition-transform duration-500"></div>
                <img src="https://images.unsplash.com/photo-1549419227-cbc1cb27c0f0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Industrial Facility" class="relative rounded-2xl shadow-2xl transform transition-transform duration-500 group-hover:scale-[1.02] border border-white/10 grayscale hover:grayscale-0">
                
                <!-- Floating Card -->
                <div class="absolute -bottom-8 -left-8 bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20 shadow-xl">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-bold">Kualitas Terjamin</p>
                            <p class="text-industrial-300 text-sm">Standar Industri Tinggi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-industrial-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-primary-600 font-semibold tracking-wide uppercase text-sm mb-3">Layanan Kami</h2>
            <h3 class="text-3xl md:text-4xl font-bold text-industrial-900 mb-4">Solusi Komprehensif untuk Kebutuhan Industri</h3>
            <p class="text-industrial-600">Kami menyediakan berbagai layanan teknis dengan presisi tinggi dan material berkualitas.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach($services as $service): ?>
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 group hover:-translate-y-2 border border-industrial-100">
                <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 transition-colors duration-300">
                    <svg class="w-7 h-7 text-primary-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <!-- Simple logic to pick icon based on slug/icon field -->
                        <?php if(strpos($service['slug'], 'machining') !== false): ?>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <?php elseif(strpos($service['slug'], 'filter') !== false): ?>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                        <?php else: ?>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        <?php endif; ?>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-industrial-900 mb-3"><?= esc($service['title']) ?></h3>
                <p class="text-industrial-600 mb-6 line-clamp-3">
                    <?= esc($service['description']) ?>
                </p>
                <a href="/kontak" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors">
                    Pelajari Lebih Lanjut
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Gallery Section (New) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-primary-600 font-semibold tracking-wide uppercase text-sm mb-3">Galeri</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-industrial-900">Hasil Karya Kami</h3>
            </div>
            <a href="/tentang-kami" class="hidden md:inline-flex items-center text-industrial-600 hover:text-primary-600 transition-colors">
                Lihat Selengkapnya
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach($gallery as $item): ?>
            <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                <img src="/uploads/gallery/<?= esc($item['image']) ?>" alt="<?= esc($item['title']) ?>" class="w-full h-64 object-cover transform transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-primary-400 text-xs font-bold uppercase tracking-wider mb-2"><?= esc($item['category']) ?></span>
                    <h4 class="text-white text-xl font-bold"><?= esc($item['title']) ?></h4>
                </div>
            </div>
            <?php endforeach; ?>
            <?php if(empty($gallery)): ?>
                <div class="col-span-full text-center py-12 bg-industrial-50 rounded-2xl border border-dashed border-industrial-300">
                    <p class="text-industrial-500">Belum ada foto di galeri.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Clients Section -->
<section class="py-20 bg-industrial-900 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-primary-500 font-semibold tracking-wide uppercase text-sm mb-3">Klien Kami</h2>
            <h3 class="text-3xl font-bold text-white">Dipercaya Oleh Perusahaan Terkemuka</h3>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 items-center opacity-70">
            <!-- Client Names as Placeholders since we don't have logos yet -->
             <?php foreach($clients as $client): ?>
            <div class="bg-white/5 backdrop-blur rounded-xl p-4 text-center border border-white/10 hover:bg-white/10 transition-colors duration-300">
                <span class="text-white font-semibold text-sm md:text-base"><?= esc($client['name']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-primary-600 to-primary-800 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mt-20 -mr-20 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-black/10 rounded-full -mb-20 -ml-20 blur-3xl"></div>
    
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Siap Meningkatkan Efisiensi Industri Anda?</h2>
        <p class="text-primary-100 text-lg mb-8">
            Hubungi kami untuk konsultasi gratis mengenai kebutuhan machining, filter, dan fabrikasi perusahaan Anda.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="https://wa.me/<?= $company['whatsapp'] ?? '6281234567890' ?>" target="_blank" class="px-8 py-4 bg-white text-primary-700 font-bold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 flex items-center justify-center">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                Chat WhatsApp
            </a>
            <a href="/kontak" class="px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-xl hover:bg-white/10 transition-all duration-300 flex items-center justify-center">
                Lihat Lokasi Workshop
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
