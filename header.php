<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biyi Estate Management | Premium Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            50: '#fdf9ec',
                            100: '#f9f0ce',
                            200: '#f1df9c',
                            300: '#e7c762',
                            400: '#deac36',
                            500: '#d4af37', 
                            600: '#b8860b',
                            700: '#94660e',
                        },
                        dark: '#121212',
                    }
                }
            }
        }
    </script>
    <style>
        .gold-gradient { background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); }
        .glass-nav { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); }
        .property-hover:hover img { transform: scale(1.1); }
        
    </style>
    
</head>
<body class="bg-gray-50 text-dark antialiased">
<nav class="sticky top-0 z-50 glass-nav border-b border-gray-100 px-6 py-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-gold-500 rounded-xl flex items-center justify-center text-white shadow-lg shadow-gold-200">
                <i class="fa-solid fa-house-chimney text-xl"></i>
            </div>
            <div class="flex flex-col">
                <span class="font-black text-xl leading-none tracking-tighter">BIYI <span class="text-gold-500">ESTATE</span></span>
                <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-gray-400">Management</span>
            </div>
        </div>
        
        <div class="hidden md:flex items-center gap-8 font-semibold text-sm">
            
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-gold-500 transition-colors py-2">
                    Find Home <i class="fa-solid fa-chevron-down text-[10px] transition-transform group-hover:rotate-180"></i>
                </button>
                <div class="absolute top-full left-0 w-56 bg-white border border-gray-100 rounded-2xl shadow-2xl opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-300 p-2 overflow-hidden">
                    <a href="#" class="flex items-center gap-3 p-3 hover:bg-gold-50 rounded-xl transition-all group/item">
                        <i class="fa-solid fa-building text-gold-500 opacity-50 group-hover/item:opacity-100"></i>
                        <span>Apartments / rents</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 p-3 hover:bg-gold-50 rounded-xl transition-all group/item">
                        <i class="fa-solid fa-hotel text-gold-500 opacity-50 group-hover/item:opacity-100"></i>
                        <span>shops / offices</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 p-3 hover:bg-gold-50 rounded-xl transition-all group/item">
                        <i class="fa-solid fa-map-location-dot text-gold-500 opacity-50 group-hover/item:opacity-100"></i>
                        <span>Lands & Property</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 p-3 hover:bg-gold-50 rounded-xl transition-all group/item">
                        <i class="fa-solid fa-map-location-dot text-gold-500 opacity-50 group-hover/item:opacity-100"></i>
                        <span>Hotel & booking</span>
                    </a>
                </div>
            </div>

            <a href="#" class="hover:text-gold-500 transition-colors">List Property</a>

            <div class="relative group">
                <a href="#" class="text-gold-600 bg-gold-50 px-4 py-2 rounded-full flex items-center gap-2 group-hover:bg-gold-500 group-hover:text-white transition-all">
                    Refer & Earn <i class="fa-solid fa-crown text-[10px]"></i>
                </a>
                <div class="absolute top-full right-0 w-64 bg-white border border-gray-100 rounded-[2rem] shadow-2xl opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-300 p-4">
                    <div class="bg-gray-900 rounded-2xl p-4 mb-2 text-white">
                        <p class="text-[9px] uppercase font-black tracking-widest text-gold-400">Your Tokens</p>
                        <h4 class="text-lg font-black italic">3 Spins Available</h4>
                    </div>
                    <a href="#" class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-xl transition-all text-xs font-bold">
                        <span>Spin the Vault</span> <i class="fa-solid fa-rotate text-gold-500"></i>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-xl transition-all text-xs font-bold">
                        <span>My Earnings</span> <span class="text-green-600">₦120k</span>
                    </a>
                    <div class="h-[1px] bg-gray-100 my-2"></div>
                    <a href="#" class="block text-center p-2 text-[10px] font-black uppercase text-gold-600 hover:tracking-widest transition-all">Claim ₦40,000.00 Token</a>
                </div>
            </div>

            <a href="/login.php" class="bg-dark text-white px-6 py-2 rounded-full hover:bg-gold-600 transition-all">Sign In</a>
        </div>

        <button class="md:hidden text-2xl" onclick="document.getElementById('mobile-nav').classList.toggle('hidden')">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>
    </div>
</nav>

<div id="mobile-nav" class="hidden md:hidden fixed top-[73px] left-0 w-full h-[calc(100vh-73px)] bg-white/95 backdrop-blur-xl border-b border-gray-100 p-8 space-y-8 font-semibold z-[49] overflow-y-auto transition-all duration-300">
    
    <div class="space-y-4">
        <p class="text-[10px] font-black uppercase tracking-[0.2em] text-gold-500">Find Property</p>
        <div class="grid grid-cols-2 gap-3">
            <a href="#" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-2xl border border-gray-100 active:scale-95 transition-all">
                <i class="fa-solid fa-building text-gold-500 mb-2"></i>
                <span class="text-[10px] uppercase font-bold">Rents</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-2xl border border-gray-100 active:scale-95 transition-all">
                <i class="fa-solid fa-hotel text-gold-500 mb-2"></i>
                <span class="text-[10px] uppercase font-bold">Offices</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-2xl border border-gray-100 active:scale-95 transition-all">
                <i class="fa-solid fa-map-location-dot text-gold-500 mb-2"></i>
                <span class="text-[10px] uppercase font-bold">Lands</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-2xl border border-gray-100 active:scale-95 transition-all">
                <i class="fa-solid fa-bed text-gold-500 mb-2"></i>
                <span class="text-[10px] uppercase font-bold">Hotels</span>
            </a>
        </div>
    </div>

    <div class="space-y-4">
        <p class="text-[10px] font-black uppercase tracking-[0.2em] text-gold-500">Elite Rewards</p>
        <div class="bg-dark rounded-[2.5rem] p-6 text-white relative overflow-hidden shadow-2xl">
            <i class="fa-solid fa-sack-dollar absolute -right-4 -bottom-4 text-6xl text-white/5 -rotate-12"></i>
            
            <p class="text-[9px] uppercase font-black opacity-60 tracking-widest mb-1">Vault Status</p>
            <h4 class="text-3xl font-black italic mb-6">₦120,000.00</h4>
            
            <div class="flex items-center gap-4 mb-6">
                <div class="flex -space-x-3">
                    <div class="w-10 h-10 rounded-full bg-gold-500 border-2 border-dark flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-crown text-[10px]"></i>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-white border-2 border-dark flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-gift text-dark text-[10px]"></i>
                    </div>
                </div>
                <p class="text-[10px] font-bold uppercase opacity-80">3 Active Spins</p>
            </div>

            <button class="w-full bg-gold-500 text-white py-4 rounded-2xl font-black uppercase text-[10px] tracking-[0.2em] shadow-lg shadow-gold-500/20 active:scale-95 transition-all">
                Spin the Vault
            </button>
        </div>
    </div>

    <div class="pt-4 pb-12">
        <a href="/login.php" class="block w-full border-2 border-gray-200 text-center py-4 rounded-2xl font-black uppercase text-[10px] tracking-widest">Sign In to Portal</a>
    </div>
</div>

<!-- <div id="mobile-nav" class="hidden md:hidden bg-white border-b border-gray-100 p-6 space-y-4 font-semibold">
    <a href="#" class="block hover:text-gold-500">Find Home</a>
    <a href="#" class="block hover:text-gold-500">List Property</a>
    <a href="#" class="block text-gold-600">Refer & Earn (3 Spins)</a>
    <a href="/login.php" class="block bg-dark text-white text-center py-3 rounded-xl">Sign In</a>
</div> -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">