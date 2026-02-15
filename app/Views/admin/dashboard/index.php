<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-industrial-800">Dashboard</h1>
    <p class="text-industrial-600">Selamat datang kembali di panel admin.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Stats Card 1 -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-industrial-100">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-primary-100 text-primary-600">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
            <div class="ml-4">
                <h2 class="font-semibold text-industrial-600">Total Klien</h2>
                <p class="text-2xl font-bold text-industrial-800"><?= model('ClientModel')->countAll() ?></p>
            </div>
        </div>
    </div>

    <!-- Stats Card 2 -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-industrial-100">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>
            <div class="ml-4">
                <h2 class="font-semibold text-industrial-600">Layanan</h2>
                <p class="text-2xl font-bold text-industrial-800"><?= model('ServiceModel')->countAll() ?></p>
            </div>
        </div>
    </div>

    <!-- Stats Card 3 -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-industrial-100">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-green-100 text-green-600">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
            <div class="ml-4">
                <h2 class="font-semibold text-industrial-600">Galeri Foto</h2>
                <p class="text-2xl font-bold text-industrial-800"><?= model('GalleryModel')->countAll() ?></p>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-xl shadow-sm border border-industrial-100 p-6">
    <h3 class="text-lg font-bold text-industrial-800 mb-4">Aksi Cepat</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <a href="/admin/company" class="flex items-center p-4 bg-industrial-50 rounded-lg hover:bg-primary-50 hover:text-primary-700 transition-colors border border-industrial-200">
            <svg class="w-6 h-6 mr-3 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
            <span class="font-medium">Update Data Perusahaan</span>
        </a>
        <a href="/admin/clients/new" class="flex items-center p-4 bg-industrial-50 rounded-lg hover:bg-primary-50 hover:text-primary-700 transition-colors border border-industrial-200">
            <svg class="w-6 h-6 mr-3 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span class="font-medium">Tambah Klien Baru</span>
        </a>
        <a href="/admin/gallery/new" class="flex items-center p-4 bg-industrial-50 rounded-lg hover:bg-primary-50 hover:text-primary-700 transition-colors border border-industrial-200">
            <svg class="w-6 h-6 mr-3 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span class="font-medium">Upload Foto Galeri</span>
        </a>
    </div>
</div>

<?= $this->endSection() ?>
