<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>

<div class="flex justify-between items-center mb-6">
    <div>
        <h1 class="text-3xl font-bold text-industrial-800">Manajemen Klien</h1>
        <p class="text-industrial-600">Daftar klien yang bekerjasama dengan perusahaan.</p>
    </div>
    <a href="/admin/clients/new" class="bg-primary-600 hover:bg-primary-700 text-white font-bold py-2 px-4 rounded-lg shadow-sm transition-colors flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Tambah Klien
    </a>
</div>

<?php if(session()->getFlashdata('success')):?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline"><?= session()->getFlashdata('success') ?></span>
    </div>
<?php endif;?>

<div class="bg-white rounded-xl shadow-sm border border-industrial-100 overflow-hidden">
    <table class="min-w-full divide-y divide-industrial-200">
        <thead class="bg-industrial-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-industrial-500 uppercase tracking-wider">Nama Klien</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-industrial-500 uppercase tracking-wider">Deskripsi</th>
                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-industrial-500 uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-industrial-200">
            <?php foreach($clients as $client): ?>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-medium text-industrial-900"><?= esc($client['name']) ?></div>
                </td>
                <td class="px-6 py-4">
                    <div class="text-sm text-industrial-500"><?= esc($client['description']) ?></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="/admin/clients/<?= $client['id'] ?>/edit" class="text-primary-600 hover:text-primary-900 mr-3">Edit</a>
                    <a href="/admin/clients/<?= $client['id'] ?>/delete" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin ingin menghapus klien ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
