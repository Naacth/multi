<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-industrial-800">Upload Foto Baru</h1>
    <a href="/admin/gallery" class="text-primary-600 hover:text-primary-800 text-sm">&larr; Kembali ke galeri</a>
</div>

<?php if(session()->has('errors')): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif; ?>

<div class="bg-white rounded-xl shadow-sm border border-industrial-100 p-6 max-w-2xl">
    <form action="/admin/gallery" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-industrial-700 mb-1">Judul Foto</label>
            <input type="text" name="title" id="title" value="<?= old('title') ?>" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border" required placeholder="Contoh: Mesin Bubut CNC">
        </div>

        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-industrial-700 mb-1">Kategori</label>
            <select name="category" id="category" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-industrial-300 rounded-md p-2 border">
                <option value="machining" <?= old('category') == 'machining' ? 'selected' : '' ?>>Machining</option>
                <option value="filter" <?= old('category') == 'filter' ? 'selected' : '' ?>>Filter</option>
                <option value="fabrikasi" <?= old('category') == 'fabrikasi' ? 'selected' : '' ?>>Fabrikasi</option>
                <option value="lainnya" <?= old('category') == 'lainnya' ? 'selected' : '' ?>>Lainnya</option>
            </select>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-industrial-700 mb-1">File Foto</label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-industrial-300 border-dashed rounded-md hover:border-primary-500 transition-colors">
                <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-industrial-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-industrial-600">
                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                            <span>Upload file</span>
                            <input id="image" name="image" type="file" class="sr-only" accept="image/*" required>
                        </label>
                        <p class="pl-1">atau drag and drop</p>
                    </div>
                    <p class="text-xs text-industrial-500">
                        PNG, JPG, GIF up to 5MB
                    </p>
                </div>
            </div>
        </div>

        <div>
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
                Upload
            </button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
