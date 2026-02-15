<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-industrial-800">Tambah Klien Baru</h1>
    <a href="/admin/clients" class="text-primary-600 hover:text-primary-800 text-sm">&larr; Kembali ke daftar</a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-industrial-100 p-6 max-w-2xl">
    <form action="/admin/clients" method="post">
        <?= csrf_field() ?>
        
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-industrial-700 mb-1">Nama Klien</label>
            <input type="text" name="name" id="name" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border" required placeholder="Contoh: PT. Sumber Makmur">
        </div>

        <div class="mb-6">
            <label for="description" class="block text-sm font-medium text-industrial-700 mb-1">Deskripsi / Industri</label>
            <input type="text" name="description" id="description" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border" placeholder="Contoh: Industri Tekstil">
        </div>

        <div>
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
                Simpan
            </button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
