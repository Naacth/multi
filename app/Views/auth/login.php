<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | CV. Multi Teknik Jaya</title>
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
<body class="bg-industrial-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="bg-gradient-to-r from-primary-600 to-primary-700 p-8 text-center">
            <div class="w-20 h-20 bg-white/10 backdrop-blur rounded-xl flex items-center justify-center mx-auto mb-4 p-2">
                <img src="/logo.png" alt="Logo" class="w-full h-full object-contain">
            </div>
            <h2 class="text-2xl font-bold text-white">Admin Panel</h2>
            <p class="text-primary-100 text-sm">Masuk untuk mengelola website</p>
        </div>

        <div class="p-8">
            <?php if(session()->getFlashdata('msg')):?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline"><?= session()->getFlashdata('msg') ?></span>
                </div>
            <?php endif;?>

            <form action="/admin/login" method="post">
                <div class="mb-4">
                    <label class="block text-industrial-700 text-sm font-bold mb-2" for="username">Username</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-industrial-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" id="username" name="username" type="text" placeholder="Username" required>
                </div>
                <div class="mb-6">
                    <label class="block text-industrial-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-industrial-700 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" id="password" name="password" type="password" placeholder="******************" required>
                </div>
                <div class="flex items-center justify-between">
                    <button class="w-full bg-primary-600 hover:bg-primary-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-200" type="button" onclick="this.form.submit()">
                        Masuk
                    </button>
                </div>
            </form>
        </div>
        <div class="bg-industrial-50 px-8 py-4 text-center border-t border-industrial-200">
            <p class="text-xs text-industrial-500">&copy; <?= date('Y') ?> CV. Multi Teknik Jaya</p>
        </div>
    </div>

</body>
</html>
