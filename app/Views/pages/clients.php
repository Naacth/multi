<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative bg-industrial-900 text-white py-20 md:py-32 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center bg-no-repeat fixed-bg"></div>
    <div class="absolute inset-0 z-0 bg-gradient-to-r from-industrial-900 to-transparent"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in-up">Klien Kami</h1>
        <p class="text-xl text-industrial-300 max-w-3xl mx-auto animate-fade-in-up animation-delay-300">
            Kepercayaan dari berbagai perusahaan terkemuka adalah bukti komitmen kami terhadap kualitas.
        </p>
    </div>
</section>

<!-- Client List -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <?php foreach($clients as $client): ?>
            <!-- DEBUG: logo_value=<?= $client['logo'] ?? 'NULL' ?> -->
            <div class="bg-white rounded-xl p-8 shadow hover:shadow-lg transition-all duration-300 border border-industrial-100 flex flex-col items-center justify-center text-center group hover:-translate-y-1 h-full">
                <div class="w-24 h-24 mb-6 flex items-center justify-center">
                    <?php if (!empty($client['logo'])): ?>
                        <img src="/uploads/clients/<?= esc($client['logo']) ?>" alt="<?= esc($client['name']) ?>" class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300">
                    <?php else: ?>
                        <div class="w-20 h-20 bg-industrial-50 rounded-full flex items-center justify-center group-hover:bg-primary-100 transition-colors">
                            <span class="text-3xl font-bold text-industrial-400 group-hover:text-primary-600">
                                <?= strtoupper(substr($client['name'], 0, 1)) ?>
                            </span>
                        </div>
                    <?php endif; ?>
                </div>
                <h3 class="font-bold text-industrial-900 mb-2"><?= esc($client['name']) ?></h3>
                <?php if(!empty($client['description'])): ?>
                    <span class="text-xs font-semibold text-primary-600 bg-primary-50 px-2 py-1 rounded-full">
                        <?= esc($client['description']) ?>
                    </span>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        
        <?php if(empty($clients)): ?>
            <div class="text-center py-12">
                <p class="text-industrial-500 text-lg">Belum ada data klien yang ditampilkan.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-industrial-900 text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-white mb-6">Ingin Menjadi Mitra Kami?</h2>
        <p class="text-industrial-300 text-lg mb-8">
            Hubungi kami untuk mendiskusikan kebutuhan teknis perusahaan Anda.
        </p>
        <a href="/kontak" class="inline-block px-8 py-4 bg-primary-600 text-white font-bold rounded-xl shadow-lg hover:bg-primary-700 hover:scale-105 transition-all duration-300">
            Hubungi Kami
        </a>
    </div>
</section>

<?= $this->endSection() ?>
