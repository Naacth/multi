<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-industrial-800">Data Perusahaan</h1>
    <p class="text-industrial-600">Update informasi mengenai perusahaan yang tampil di website.</p>
</div>

<?php if(session()->getFlashdata('success')):?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline"><?= session()->getFlashdata('success') ?></span>
    </div>
<?php endif;?>

<div class="bg-white rounded-xl shadow-sm border border-industrial-100 p-6">
    <form action="/admin/company/update" method="post">
        <?= csrf_field() ?>
        
        <div class="grid grid-cols-1 gap-6">
            <?php foreach($company as $row): ?>
                <div>
                    <label for="<?= $row['key'] ?>" class="block text-sm font-medium text-industrial-700 mb-1">
                        <?= $row['description'] ?? ucwords(str_replace('_', ' ', $row['key'])) ?>
                    </label>
                    
                    <?php if($row['key'] === 'vision'): ?>
                        <textarea name="<?= $row['key'] ?>" id="<?= $row['key'] ?>" rows="4" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border"><?= esc($row['value']) ?></textarea>
                    <?php elseif($row['key'] === 'google_maps'): ?>
                        <textarea name="<?= $row['key'] ?>" id="<?= $row['key'] ?>" rows="3" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border"><?= esc($row['value']) ?></textarea>
                        <p class="mt-1 text-xs text-industrial-500">Masukkan link embed iframe dari Google Maps.</p>
                    <?php else: ?>
                        <input type="text" name="<?= $row['key'] ?>" id="<?= $row['key'] ?>" value="<?= esc($row['value']) ?>" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border">
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
