
<?php include __DIR__."/header.php"; ?>
<section class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
        <nav class="flex text-gray-400 text-[10px] font-black uppercase tracking-widest mb-4">
            <a href="#" class="hover:text-gold-500">Dashboard</a>
            <span class="mx-2">/</span>
            <span class="text-dark">Saved Properties</span>
        </nav>
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 border-b border-gray-100 pb-8">
            <div>
                <h1 class="text-4xl font-black text-dark tracking-tighter">My Wishlist <span class="text-gold-500">(4)</span></h1>
                <p class="text-gray-500 mt-2">Your curated list of dream housing with zero excess charges.</p>
            </div>
            <button class="bg-dark text-white px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-gold-600 transition-all shadow-xl shadow-gold-100">
                <i class="fa-solid fa-share-nodes mr-2"></i> Share My List
            </button>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 lg:grid-cols-4 gap-12">
        
        <div class="lg:col-span-1 space-y-8">
            <div class="bg-gray-50 rounded-[2rem] p-8">
                <h3 class="font-black text-dark uppercase text-xs tracking-widest mb-6">Filter Saved</h3>
                <div class="space-y-4">
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="checkbox" checked class="w-5 h-5 border-2 border-gray-200 rounded text-gold-500 focus:ring-gold-500">
                        <span class="text-sm font-bold text-gray-600 group-hover:text-dark">Luxury (Expensive)</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="checkbox" checked class="w-5 h-5 border-2 border-gray-200 rounded text-gold-500 focus:ring-gold-500">
                        <span class="text-sm font-bold text-gray-600 group-hover:text-dark">Budget (Cheaper)</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="checkbox" class="w-5 h-5 border-2 border-gray-200 rounded text-gold-500 focus:ring-gold-500">
                        <span class="text-sm font-bold text-gray-600 group-hover:text-dark">Available Now</span>
                    </label>
                </div>
            </div>

            <div class="gold-gradient rounded-[2rem] p-8 text-white relative overflow-hidden">
                <h4 class="font-black text-lg leading-tight mb-4">Earn While You Search!</h4>
                <p class="text-xs opacity-90 mb-6">Refer a friend to any of these houses and get your ₦40,000.00 win token.</p>
                <button class="w-full bg-white text-gold-700 font-black py-3 rounded-xl text-[10px] uppercase tracking-widest">Get Referral Link</button>
            </div>
        </div>

        <div class="lg:col-span-3">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <div class="group bg-white rounded-[2.5rem] border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-500 relative">
                    <button class="absolute top-4 right-4 z-20 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center text-red-500 shadow-lg">
                        <i class="fa-solid fa-heart"></i>
                    </button>
                    
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=600" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute bottom-4 left-4 bg-dark/80 backdrop-blur text-gold-400 text-[10px] font-black px-3 py-1.5 rounded-lg border border-gold-500/30">
                            VIRTUAL TOUR READY
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-black text-dark">Lekki Skyline Villa</h3>
                            <span class="text-gold-600 font-bold">₦8.5M/yr</span>
                        </div>
                        <p class="text-gray-400 text-xs mb-6"><i class="fa-solid fa-location-dot mr-1"></i> Phase 1, Lekki</p>
                        
                        <div class="flex gap-2">
                            <a href="https://wa.me/2348000000000" class="flex-1 bg-[#25D366] text-white py-3 rounded-xl font-black text-[10px] uppercase tracking-widest flex items-center justify-center gap-2">
                                <i class="fa-brands fa-whatsapp text-lg"></i> Book Inspection
                            </a>
                            <button class="w-12 bg-gray-50 text-dark rounded-xl flex items-center justify-center hover:bg-gold-500 hover:text-white transition-all">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="group bg-white rounded-[2.5rem] border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-500 relative">
                    <button class="absolute top-4 right-4 z-20 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center text-red-500 shadow-lg">
                        <i class="fa-solid fa-heart"></i>
                    </button>
                    
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554995207-c18c203602cb?auto=format&fit=crop&w=600" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute bottom-4 left-4 bg-green-600 text-white text-[10px] font-black px-3 py-1.5 rounded-lg">
                            BUDGET FRIENDLY
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-black text-dark">Modern Mini Flat</h3>
                            <span class="text-gold-600 font-bold">₦750k/yr</span>
                        </div>
                        <p class="text-gray-400 text-xs mb-6"><i class="fa-solid fa-location-dot mr-1"></i> Yaba, Lagos</p>
                        
                        <div class="flex gap-2">
                            <a href="https://wa.me/2348000000000" class="flex-1 bg-[#25D366] text-white py-3 rounded-xl font-black text-[10px] uppercase tracking-widest flex items-center justify-center gap-2">
                                <i class="fa-brands fa-whatsapp text-lg"></i> Book Inspection
                            </a>
                            <button class="w-12 bg-gray-50 text-dark rounded-xl flex items-center justify-center hover:bg-gold-500 hover:text-white transition-all">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="hidden flex flex-col items-center justify-center py-20 text-center">
                <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center text-gray-200 text-4xl mb-6">
                    <i class="fa-solid fa-heart-crack"></i>
                </div>
                <h3 class="text-xl font-black text-dark">No saved houses yet</h3>
                <p class="text-gray-400 mt-2 max-w-xs">Start exploring our luxury and budget homes to build your wishlist!</p>
                <button class="mt-8 bg-gold-500 text-white px-8 py-4 rounded-2xl font-black uppercase tracking-widest text-xs shadow-xl shadow-gold-200">Start Browsing</button>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__."/footer.php"; ?>