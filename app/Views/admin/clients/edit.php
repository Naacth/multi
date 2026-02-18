<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-industrial-800">Edit Klien</h1>
    <a href="/admin/clients" class="text-primary-600 hover:text-primary-800 text-sm">&larr; Kembali ke daftar</a>
</div>

<?php if (session()->getFlashdata('error')): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>
<?php if (session()->getFlashdata('errors')): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <ul class="list-disc list-inside"><?php foreach (session()->getFlashdata('errors') as $e): ?><li><?= esc($e) ?></li><?php endforeach; ?></ul>
    </div>
<?php endif; ?>
<div class="bg-white rounded-xl shadow-sm border border-industrial-100 p-6 max-w-2xl">
    <form action="/admin/clients/<?= $client['id'] ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-industrial-700 mb-1">Nama Klien</label>
            <input type="text" name="name" id="name" value="<?= esc($client['name']) ?>" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-industrial-700 mb-1">Deskripsi / Industri</label>
            <input type="text" name="description" id="description" value="<?= esc($client['description']) ?>" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border">
        </div>

        <div class="mb-6">
            <label for="logo" class="block text-sm font-medium text-industrial-700 mb-1">Logo Klien (opsional)</label>
            <?php if (!empty($client['logo'])): ?>
                <div class="flex items-center gap-4 mb-2">
                    <img src="<?= base_url('uploads/clients/' . esc($client['logo'])) ?>" alt="Logo saat ini" class="w-16 h-16 object-contain border border-industrial-200 rounded-lg bg-industrial-50">
                    <span class="text-sm text-industrial-600">Logo saat ini. Upload file baru untuk mengganti.</span>
                </div>
            <?php endif; ?>
            <input type="file" name="logo" id="logo" accept="image/jpeg,image/png,image/gif,image/webp" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border">
            <p class="mt-1 text-xs text-industrial-500">JPG, PNG, GIF atau WebP. Maks. 2 MB. Kosongkan untuk tetap pakai logo saat ini.</p>
        </div>

        <div>
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
                Update
            </button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
