<?php include __DIR__."/../header.php"; ?>
<div class="min-h-screen bg-[#f8f9fa] flex flex-col lg:flex-row">
<?php include __DIR__."/aside.php"; ?>

    <main class="flex-1 p-6 lg:p-12 overflow-y-auto">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
            <div class="flex items-center gap-4">
                <a href="categories.php" class="w-10 h-10 bg-white border border-gray-100 rounded-xl flex items-center justify-center text-gray-400 hover:text-dark transition-all">
                    <i class="fa-solid fa-arrow-left text-xs"></i>
                </a>
                <div>
                    <p class="text-[9px] font-black text-gold-500 uppercase tracking-widest">Editor</p>
                    <h2 class="text-3xl font-black italic tracking-tighter text-dark">Luxury <span class="text-gold-500">Apartments</span></h2>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <button class="px-6 py-3 border-2 border-gray-100 text-gray-400 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-white transition-all">Discard</button>
                <button class="px-8 py-3 bg-dark text-white rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-xl shadow-gray-200 hover:bg-gold-600 transition-all">Save Changes</button>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-8">
            
            <div class="col-span-12 lg:col-span-8 space-y-8">
                
                <section class="bg-white rounded-[3rem] p-8 md:p-10 border border-gray-100 shadow-sm">
                    <h4 class="text-sm font-black uppercase tracking-widest text-dark mb-8 flex items-center gap-2">
                        <span class="w-2 h-2 bg-gold-500 rounded-full"></span> Basic Identity
                    </h4>
                    
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-gray-400 uppercase ml-2">Display Name</label>
                                <input type="text" value="Luxury Apartments" class="w-full bg-gray-50 border border-transparent focus:bg-white focus:border-gold-500 rounded-2xl px-6 py-4 text-sm font-bold transition-all outline-none">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-gray-400 uppercase ml-2">Slug (URL)</label>
                                <input type="text" value="luxury-apartments" class="w-full bg-gray-50 border border-transparent rounded-2xl px-6 py-4 text-sm font-mono text-gray-400 outline-none" readonly>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase ml-2">Description / Tagline</label>
                            <textarea rows="3" class="w-full bg-gray-50 border border-transparent focus:bg-white focus:border-gold-500 rounded-3xl px-6 py-4 text-sm font-medium transition-all outline-none">Curated high-end residential spaces in the heart of Lagos.</textarea>
                        </div>
                    </div>
                </section>

                <section class="bg-dark rounded-[3.5rem] p-8 md:p-12 text-white shadow-2xl relative overflow-hidden">
                    <i class="fa-solid fa-dharmachakra absolute -right-16 -bottom-16 text-[15rem] text-white/5 rotate-12"></i>
                    
                    <div class="relative z-10">
                        <h4 class="text-sm font-black uppercase tracking-widest text-gold-500 mb-2">Economics</h4>
                        <h3 class="text-2xl font-black italic tracking-tighter mb-8">Spin Wheel & Referral <span class="text-gold-500">Value</span></h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="p-6 bg-white/5 rounded-3xl border border-white/10 backdrop-blur-md">
                                <p class="text-[9px] font-black text-white/40 uppercase mb-4 tracking-widest">Jackpot Amount</p>
                                <div class="flex items-center gap-3">
                                    <span class="text-2xl font-black italic text-gold-500">₦</span>
                                    <input type="number" value="40000" class="bg-transparent text-2xl font-black italic outline-none w-full">
                                </div>
                                <p class="text-[8px] font-bold text-white/30 mt-4 uppercase">Paid per successful referral</p>
                            </div>

                            <div class="p-6 bg-white/5 rounded-3xl border border-white/10 backdrop-blur-md">
                                <p class="text-[9px] font-black text-white/40 uppercase mb-4 tracking-widest">Win Probability</p>
                                <div class="flex items-center gap-3">
                                    <input type="range" min="1" max="100" value="15" class="w-full accent-gold-500">
                                    <span class="text-xl font-black italic">15%</span>
                                </div>
                                <p class="text-[8px] font-bold text-white/30 mt-4 uppercase">Chance of hitting this reward</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-span-12 lg:col-span-4 space-y-8">
                
                <div class="bg-white rounded-[2.5rem] p-8 border border-gray-100 shadow-sm">
                    <h5 class="text-[10px] font-black uppercase text-gray-400 tracking-widest mb-6">Visibility Status</h5>
                    <div class="flex items-center justify-between mb-6">
                        <span class="text-sm font-bold">Publicly Listed</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" checked class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-gold-500"></div>
                        </label>
                    </div>
                    <hr class="border-gray-50 mb-6">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold">Featured Category</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-dark"></div>
                        </label>
                    </div>
                </div>

                <div class="bg-white rounded-[2.5rem] p-8 border border-gray-100 shadow-sm">
                    <h5 class="text-[10px] font-black uppercase text-gray-400 tracking-widest mb-6">Category Visuals</h5>
                    <div class="flex items-center gap-6">
                        <div class="w-20 h-20 bg-gold-50 rounded-3xl flex items-center justify-center text-3xl text-gold-500 border border-gold-100">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <button class="flex-1 bg-gray-50 py-3 rounded-xl text-[9px] font-black uppercase tracking-widest hover:bg-gold-50 transition-all">Change Icon</button>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>

<?php include __DIR__."/../footer.php"; ?>