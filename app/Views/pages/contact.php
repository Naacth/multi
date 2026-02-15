<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<section class="relative bg-industrial-900 text-white py-20 md:py-32 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center bg-no-repeat fixed-bg"></div>
    <div class="absolute inset-0 z-0 bg-gradient-to-r from-industrial-900 to-transparent"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in-up">Hubungi Kami</h1>
        <p class="text-xl text-industrial-300 max-w-3xl mx-auto animate-fade-in-up animation-delay-300">
            Kami siap membantu kebutuhan industri Anda. Hubungi kami untuk penawaran dan konsultasi.
        </p>
    </div>
</section>

<!-- Contact Content -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="space-y-10">
                <div>
                    <h2 class="text-3xl font-bold text-industrial-900 mb-6">Informasi Kontak</h2>
                    <p class="text-industrial-600 leading-relaxed">
                        Jangan ragu untuk menghubungi kami melalui telepon, email, atau kunjungi langsung workshop kami. Tim kami siap melayani Anda.
                    </p>
                </div>

                <div class="space-y-6">
                    <!-- Address -->
                    <div class="flex items-start space-x-4">
                        <div class="w-14 h-14 bg-primary-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-industrial-900 mb-1">Alamat Workshop</h4>
                            <p class="text-industrial-600 leading-relaxed">
                                <?= $company['address'] ?? 'Alamat Belum Diatur' ?>
                            </p>
                        </div>
                    </div>

                    <!-- Phone/Fax -->
                    <div class="flex items-start space-x-4">
                        <div class="w-14 h-14 bg-primary-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-industrial-900 mb-1">Telepon & Fax</h4>
                            <p class="text-industrial-600">Telepon: <a href="tel:<?= $company['phone'] ?? '' ?>" class="text-primary-600 hover:underline"><?= $company['phone'] ?? '-' ?></a></p>
                            <p class="text-industrial-600">Fax: <?= $company['fax'] ?? '-' ?></p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start space-x-4">
                        <div class="w-14 h-14 bg-primary-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-industrial-900 mb-1">Email</h4>
                            <a href="mailto:<?= $company['email'] ?? '' ?>" class="text-primary-600 hover:underline"><?= $company['email'] ?? '-' ?></a>
                        </div>
                    </div>

                    <!-- WhatsApp -->
                    <div class="flex items-start space-x-4">
                        <div class="w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-industrial-900 mb-1">WhatsApp</h4>
                            <a href="https://wa.me/<?= $company['whatsapp'] ?? '6281234567890' ?>" target="_blank" class="text-industrial-600 hover:text-green-600 transition-colors">
                                <?= $company['whatsapp'] ?? '-' ?>
                            </a>
                            <p class="text-industrial-400 text-sm mt-1">Klik untuk chat langsung</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="h-full min-h-[400px] bg-industrial-100 rounded-2xl overflow-hidden shadow-lg border border-industrial-200">
                <?php if(!empty($company['google_maps'])): ?>
                    <iframe src="<?= $company['google_maps'] ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
                <?php else: ?>
                    <div class="w-full h-full flex items-center justify-center text-industrial-500">
                        <p>Peta lokasi belum tersedia</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Working Hours -->
<section class="py-12 bg-industrial-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl p-8 shadow-lg border border-industrial-100">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center text-center">
                <div>
                    <h4 class="font-bold text-industrial-900 text-lg mb-2">Jam Operasional</h4>
                    <p class="text-industrial-600">Senin - Jumat: 08.00 - 17.00</p>
                    <p class="text-industrial-600">Sabtu: 08.00 - 14.00</p>
                </div>
                <div class="hidden md:block w-px h-16 bg-industrial-200 mx-auto"></div>
                <div>
                    <h4 class="font-bold text-industrial-900 text-lg mb-2">Layanan Darurat</h4>
                    <p class="text-industrial-600">Butuh bantuan mendesak?</p>
                    <a href="https://wa.me/<?= $company['whatsapp'] ?? '6281234567890' ?>" class="text-primary-600 font-semibold hover:underline">Hubungi kami 24/7</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
