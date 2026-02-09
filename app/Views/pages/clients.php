<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<section class="relative bg-gradient-to-br from-industrial-900 via-industrial-800 to-primary-900 py-16 md:py-24">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center px-4 py-1.5 bg-primary-500/20 text-primary-300 text-sm font-medium rounded-full mb-4">
            Klien Kami
        </span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Daftar Klien</h1>
        <p class="text-industrial-300 text-lg max-w-2xl mx-auto">
            Perusahaan-perusahaan yang telah mempercayakan kebutuhan machining, filter, dan fabrikasi kepada kami
        </p>
    </div>
</section>

<!-- Clients Grid -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-flex items-center px-3 py-1 bg-primary-100 text-primary-700 text-sm font-medium rounded-full mb-4">
                Dipercaya oleh Berbagai Industri
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-industrial-900 mb-4">
                Customer Kami
            </h2>
            <p class="text-industrial-600 max-w-2xl mx-auto">
                Kami bangga telah melayani berbagai perusahaan dari berbagai sektor industri
            </p>
        </div>
        
        <?php if (!empty($clients)): ?>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($clients as $client): ?>
            <div class="group bg-industrial-50 hover:bg-white rounded-2xl p-6 text-center shadow-sm hover:shadow-xl transition-all duration-300 hover-lift border border-transparent hover:border-primary-100">
                <!-- Logo Placeholder -->
                <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-white font-bold text-2xl">
                        <?= substr($client['name'], 0, 1) ?>
                    </span>
                </div>
                
                <h3 class="font-semibold text-industrial-800 text-sm md:text-base mb-1">
                    <?= esc($client['name']) ?>
                </h3>
                
                <?php if (!empty($client['description'])): ?>
                <p class="text-industrial-500 text-xs">
                    <?= esc($client['description']) ?>
                </p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="text-center py-12">
            <div class="w-24 h-24 bg-industrial-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-12 h-12 text-industrial-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
            <p class="text-industrial-500">Belum ada data klien</p>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Testimonial CTA -->
<section class="py-16 md:py-20 bg-gradient-to-r from-primary-600 to-primary-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Bergabunglah dengan Klien Kami
        </h2>
        <p class="text-primary-100 text-lg mb-8">
            Hubungi kami untuk mendiskusikan kebutuhan industri Anda
        </p>
        <a href="/kontak" class="inline-flex items-center px-8 py-4 bg-white text-primary-700 font-semibold rounded-xl shadow-lg hover:bg-primary-50 hover:scale-105 transition-all duration-300">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
            Hubungi Kami
        </a>
    </div>
</section>

<?= $this->endSection() ?>
