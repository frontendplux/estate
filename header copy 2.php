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
                <a href="#" class="hover:text-gold-500 transition-colors">Find Home</a>
                <a href="#" class="hover:text-gold-500 transition-colors">List Property</a>
                <a href="" class="text-gold-600 bg-gold-50 px-4 py-2 rounded-full">Refer & Earn</a>
                <a href="/login.php" class="bg-dark text-white px-6 py-2 rounded-full hover:bg-gold-600 transition-all">Sign In</a>
            </div>

            <button class="md:hidden text-2xl"><i class="fa-solid fa-bars-staggered"></i></button>
        </div>
    </nav>
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">