<!-- Navigation Header -->
<header class="fixed top-0 left-0 right-0 z-50 glass border-b border-industrial-200">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-primary-500 to-primary-700 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-primary-500/25 transition-all duration-300">
                    <span class="text-white font-bold text-lg md:text-xl">M</span>
                </div>
                <div class="hidden sm:block">
                    <p class="font-bold text-lg md:text-xl text-industrial-800"><?= $company['name'] ?? 'Multi Teknik Jaya' ?></p>
                    <p class="text-xs text-industrial-500 -mt-1">Filter • Machining • Fabrikasi</p>
                </div>
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="/" class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 <?= ($active ?? '') === 'home' ? 'bg-primary-500 text-white shadow-lg shadow-primary-500/25' : 'text-industrial-600 hover:text-primary-600 hover:bg-primary-50' ?>">
                    Beranda
                </a>
                <a href="/tentang-kami" class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 <?= ($active ?? '') === 'about' ? 'bg-primary-500 text-white shadow-lg shadow-primary-500/25' : 'text-industrial-600 hover:text-primary-600 hover:bg-primary-50' ?>">
                    Tentang Kami
                </a>
                <a href="/klien" class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 <?= ($active ?? '') === 'clients' ? 'bg-primary-500 text-white shadow-lg shadow-primary-500/25' : 'text-industrial-600 hover:text-primary-600 hover:bg-primary-50' ?>">
                    Klien
                </a>
                <a href="/kontak" class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 <?= ($active ?? '') === 'contact' ? 'bg-primary-500 text-white shadow-lg shadow-primary-500/25' : 'text-industrial-600 hover:text-primary-600 hover:bg-primary-50' ?>">
                    Kontak
                </a>
            </div>
            
            <!-- CTA Button (Desktop) -->
            <div class="hidden md:block">
                <a href="https://wa.me/<?= $company['whatsapp'] ?? '6281234567890' ?>" target="_blank" class="inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-green-500 to-green-600 text-white font-medium rounded-xl shadow-lg shadow-green-500/25 hover:shadow-green-500/40 hover:scale-105 transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Hubungi Kami
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg text-industrial-600 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4 border-t border-industrial-100 mt-2 pt-4">
            <div class="flex flex-col space-y-2">
                <a href="/" class="px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 <?= ($active ?? '') === 'home' ? 'bg-primary-500 text-white' : 'text-industrial-600 hover:bg-primary-50' ?>">
                    Beranda
                </a>
                <a href="/tentang-kami" class="px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 <?= ($active ?? '') === 'about' ? 'bg-primary-500 text-white' : 'text-industrial-600 hover:bg-primary-50' ?>">
                    Tentang Kami
                </a>
                <a href="/klien" class="px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 <?= ($active ?? '') === 'clients' ? 'bg-primary-500 text-white' : 'text-industrial-600 hover:bg-primary-50' ?>">
                    Klien
                </a>
                <a href="/kontak" class="px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 <?= ($active ?? '') === 'contact' ? 'bg-primary-500 text-white' : 'text-industrial-600 hover:bg-primary-50' ?>">
                    Kontak
                </a>
                <a href="https://wa.me/<?= $company['whatsapp'] ?? '6281234567890' ?>" target="_blank" class="inline-flex items-center justify-center px-4 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white font-medium rounded-lg mt-2">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </nav>
</header>

<!-- Spacer for fixed header -->
<div class="h-16 md:h-20"></div>
