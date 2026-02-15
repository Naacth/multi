<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>

<div class="flex justify-between items-center mb-6">
    <div>
        <h1 class="text-3xl font-bold text-industrial-800">Galeri Foto</h1>
        <p class="text-industrial-600">Dokumentasi hasil kerja dan aktivitas perusahaan.</p>
    </div>
    <a href="/admin/gallery/new" class="bg-primary-600 hover:bg-primary-700 text-white font-bold py-2 px-4 rounded-lg shadow-sm transition-colors flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
        Upload Foto
    </a>
</div>

<?php if(session()->getFlashdata('success')):?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline"><?= session()->getFlashdata('success') ?></span>
    </div>
<?php endif;?>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php foreach($gallery as $item): ?>
    <div class="bg-white rounded-xl shadow-sm border border-industrial-100 overflow-hidden group">
        <div class="aspect-w-16 aspect-h-9 relative bg-industrial-100">
            <img src="/uploads/gallery/<?= esc($item['image']) ?>" alt="<?= esc($item['title']) ?>" class="object-cover w-full h-48 group-hover:scale-105 transition-transform duration-300">
            <div class="absolute top-2 right-2">
                <span class="px-2 py-1 text-xs font-semibold bg-white/90 backdrop-blur rounded-lg shadow-sm text-industrial-700">
                    <?= ucfirst(esc($item['category'])) ?>
                </span>
            </div>
        </div>
        <div class="p-4">
            <h3 class="font-bold text-industrial-800 mb-1"><?= esc($item['title']) ?></h3>
            <div class="flex justify-between items-center mt-4">
                <span class="text-xs text-industrial-400"><?= date('d M Y', strtotime($item['created_at'])) ?></span>
                <a href="/admin/gallery/<?= $item['id'] ?>/delete" class="text-red-600 hover:text-red-900 text-sm font-medium" onclick="return confirm('Yakin ingin menghapus foto ini?')">Hapus</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php if(empty($gallery)): ?>
<div class="text-center py-12">
    <svg class="mx-auto h-12 w-12 text-industrial-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
    </svg>
    <h3 class="mt-2 text-sm font-medium text-industrial-900">Belum ada foto</h3>
    <p class="mt-1 text-sm text-industrial-500">Mulai dengan mengupload foto baru.</p>
</div>
<?php endif; ?>

<?= $this->endSection() ?>
