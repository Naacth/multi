<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Panel' ?> | CV. Multi Teknik Jaya</title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { 'inter': ['Inter', 'sans-serif'] },
                    colors: {
                        primary: { 50: '#fffbeb', 100: '#fef3c7', 200: '#fde68a', 300: '#fcd34d', 400: '#fbbf24', 500: '#f59e0b', 600: '#d97706', 700: '#b45309', 800: '#92400e', 900: '#78350f' },
                        industrial: { 50: '#fafaf9', 100: '#f5f5f4', 200: '#e7e5e4', 300: '#d6d3d1', 400: '#a8a29e', 500: '#78716c', 600: '#57534e', 700: '#44403c', 800: '#292524', 900: '#1c1917' }
                    }
                }
            }
        }
    </script>
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-industrial-50 text-industrial-800 antialiased font-inter flex flex-col min-h-screen">

    <!-- Top Navbar -->
    <nav class="bg-white border-b border-industrial-200 fixed w-full z-30 top-0 left-0 h-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center space-x-3">
                        <img src="/logo.png" alt="Logo" class="w-8 h-8 object-contain">
                        <span class="font-bold text-xl text-primary-600">Admin Panel</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <span class="text-sm text-industrial-600 mr-4">Halo, <?= session()->get('name') ?></span>
                    <a href="/admin/logout" class="text-sm font-medium text-red-600 hover:text-red-800">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex flex-1 pt-16 h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-industrial-200 hidden md:block overflow-y-auto">
            <div class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="/admin/dashboard" class="flex items-center px-4 py-2 text-industrial-700 rounded-lg hover:bg-primary-50 hover:text-primary-700 <?= ($active ?? '') === 'dashboard' ? 'bg-primary-50 text-primary-700 font-semibold' : '' ?>">
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li class="pt-4 pb-2 px-4 text-xs font-semibold text-industrial-400 uppercase tracking-wider">Konten</li>
                    <li>
                        <a href="/admin/company" class="flex items-center px-4 py-2 text-industrial-700 rounded-lg hover:bg-primary-50 hover:text-primary-700 <?= ($active ?? '') === 'company' ? 'bg-primary-50 text-primary-700 font-semibold' : '' ?>">
                            <span class="ml-3">Data Perusahaan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/clients" class="flex items-center px-4 py-2 text-industrial-700 rounded-lg hover:bg-primary-50 hover:text-primary-700 <?= ($active ?? '') === 'clients' ? 'bg-primary-50 text-primary-700 font-semibold' : '' ?>">
                            <span class="ml-3">Manajemen Klien</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/services" class="flex items-center px-4 py-2 text-industrial-700 rounded-lg hover:bg-primary-50 hover:text-primary-700 <?= ($active ?? '') === 'services' ? 'bg-primary-50 text-primary-700 font-semibold' : '' ?>">
                            <span class="ml-3">Layanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/gallery" class="flex items-center px-4 py-2 text-industrial-700 rounded-lg hover:bg-primary-50 hover:text-primary-700 <?= ($active ?? '') === 'gallery' ? 'bg-primary-50 text-primary-700 font-semibold' : '' ?>">
                            <span class="ml-3">Galeri Foto</span>
                        </a>
                    </li>
                    <li class="pt-4 pb-2 px-4 text-xs font-semibold text-industrial-400 uppercase tracking-wider">Akun</li>
                    <li>
                        <a href="/admin/profile" class="flex items-center px-4 py-2 text-industrial-700 rounded-lg hover:bg-primary-50 hover:text-primary-700 <?= ($active ?? '') === 'profile' ? 'bg-primary-50 text-primary-700 font-semibold' : '' ?>">
                            <span class="ml-3">Ganti Password</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto bg-industrial-50 p-6">
            <?= $this->renderSection('content') ?>
        </main>
    </div>

</body>
</html>
