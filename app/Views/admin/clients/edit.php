<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-industrial-800">Edit Klien</h1>
    <a href="/admin/clients" class="text-primary-600 hover:text-primary-800 text-sm">&larr; Kembali ke daftar</a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-industrial-100 p-6 max-w-2xl">
    <form action="/admin/clients/<?= $client['id'] ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-industrial-700 mb-1">Nama Klien</label>
            <input type="text" name="name" id="name" value="<?= esc($client['name']) ?>" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border" required>
        </div>

        <div class="mb-4">
            <label for="logo" class="block text-sm font-medium text-industrial-700 mb-1">Logo Klien (Opsional)</label>
            <?php if (!empty($client['logo'])): ?>
                <div class="mb-2">
                    <img src="/uploads/clients/<?= esc($client['logo']) ?>" alt="Logo Saat Ini" class="h-20 w-auto object-contain border border-industrial-200 rounded p-1 bg-industrial-50">
                    <p class="text-xs text-industrial-500 mt-1">Logo saat ini</p>
                </div>
            <?php endif; ?>
            <input type="file" name="logo" id="logo" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border" accept="image/*">
            <p class="mt-1 text-xs text-industrial-500">Biarkan kosong jika tidak ingin mengubah logo. Format: JPG, PNG, WEBP. Maksimal 2MB.</p>
        </div>

        <div class="mb-6">
            <label for="description" class="block text-sm font-medium text-industrial-700 mb-1">Deskripsi / Industri</label>
            <input type="text" name="description" id="description" value="<?= esc($client['description']) ?>" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border">
        </div>

        <div>
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
                Update
            </button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
