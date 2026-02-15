<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-industrial-800">Profil Admin</h1>
    <p class="text-industrial-600">Update informasi akun admin.</p>
</div>

<?php if(session()->getFlashdata('success')):?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline"><?= session()->getFlashdata('success') ?></span>
    </div>
<?php endif;?>

<div class="bg-white rounded-xl shadow-sm border border-industrial-100 p-6 max-w-2xl">
    <form action="/admin/profile/update" method="post">
        <?= csrf_field() ?>
        
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-industrial-700 mb-1">Nama Lengkap</label>
            <input type="text" name="name" id="name" value="<?= esc($user['name']) ?>" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border" required>
        </div>

        <div class="mb-6">
            <label for="username" class="block text-sm font-medium text-industrial-700 mb-1">Username</label>
            <input type="text" name="username" id="username" value="<?= esc($user['username']) ?>" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border" required>
        </div>

        <hr class="border-industrial-200 my-6">
        <h3 class="text-lg font-medium text-industrial-800 mb-4">Ganti Password</h3>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-industrial-700 mb-1">Password Baru (Optional)</label>
            <input type="password" name="password" id="password" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border" placeholder="Kosongkan jika tidak ingin mengganti">
        </div>

        <div class="mb-6">
            <label for="confirm_password" class="block text-sm font-medium text-industrial-700 mb-1">Konfirmasi Password Baru</label>
            <input type="password" name="confirm_password" id="confirm_password" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border">
        </div>

        <div>
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
                Update Profil
            </button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
