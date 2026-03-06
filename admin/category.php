
<?php include __DIR__."/../header.php"; ?>
<div class="min-h-screen bg-[#f8f9fa] flex flex-col lg:flex-row">

<?php include __DIR__."/aside.php" ?>

    <main class="flex-1 p-6 lg:p-12 overflow-y-auto">


      <div class="max-w-4xl mx-auto">
    <div class="mb-10 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-black italic tracking-tighter text-dark">Category <span class="text-gold-500">Master</span></h1>
            <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-gray-400">Add or Edit Property Segments</p>
        </div>
        <button class="bg-dark text-white px-6 py-3 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-gold-600 transition-all shadow-xl shadow-gold-100">
            View All Categories
        </button>
    </div>

    <form class="bg-white border border-gray-100 rounded-[3rem] p-8 md:p-12 shadow-2xl relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-2 gold-gradient"></div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            
            <div class="space-y-3">
                <label class="text-[10px] font-black uppercase tracking-widest text-gold-600 ml-2">Category Name</label>
                <input type="text" placeholder="e.g., Luxury Penthouses" 
                    class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-6 py-4 focus:outline-none focus:ring-2 focus:ring-gold-500/20 focus:border-gold-500 transition-all font-bold text-sm">
            </div>

            <div class="space-y-3">
                <label class="text-[10px] font-black uppercase tracking-widest text-gold-600 ml-2">Primary Classification</label>
                <select class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-6 py-4 focus:outline-none focus:ring-2 focus:ring-gold-500/20 focus:border-gold-500 transition-all font-bold text-sm appearance-none cursor-pointer">
                    <option>Residential (Rents)</option>
                    <option>Commercial (Offices)</option>
                    <option>Landed Property</option>
                    <option>Shortlet & Booking</option>
                </select>
            </div>

            <div class="space-y-3">
                <label class="text-[10px] font-black uppercase tracking-widest text-gold-600 ml-2">Display Icon (FA Class)</label>
                <div class="relative">
                    <input type="text" placeholder="fa-solid fa-crown" 
                        class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-6 py-4 focus:outline-none focus:ring-2 focus:ring-gold-500/20 transition-all font-mono text-xs">
                    <div class="absolute right-4 top-1/2 -translate-y-1/2 w-8 h-8 bg-white rounded-lg border border-gray-100 flex items-center justify-center text-gold-500">
                        <i class="fa-solid fa-icons"></i>
                    </div>
                </div>
            </div>

            <div class="space-y-3">
                <label class="text-[10px] font-black uppercase tracking-widest text-gold-600 ml-2">Referral Token Value</label>
                <div class="relative">
                    <input type="number" placeholder="40000" 
                        class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-6 py-4 focus:outline-none focus:ring-2 focus:ring-gold-500/20 transition-all font-bold text-sm">
                    <span class="absolute right-6 top-1/2 -translate-y-1/2 text-[10px] font-black text-gray-400 italic">₦</span>
                </div>
            </div>

            <div class="md:col-span-2 flex items-center justify-between bg-gold-50 p-6 rounded-3xl border border-gold-100">
                <div>
                    <p class="text-sm font-black text-dark tracking-tight">Active Visibility</p>
                    <p class="text-[10px] text-gray-500 font-bold uppercase">Show this category on the main portal and spin wheel</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" checked class="sr-only peer">
                    <div class="w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-gold-500 shadow-inner"></div>
                </label>
            </div>
        </div>

        <div class="mt-12 flex flex-col sm:flex-row gap-4">
            <button type="submit" class="flex-1 gold-gradient text-white py-5 rounded-2xl font-black uppercase text-[11px] tracking-[0.2em] shadow-xl shadow-gold-500/30 active:scale-95 transition-all">
                Create Category
            </button>
            <button type="reset" class="px-10 border-2 border-gray-100 text-gray-400 py-5 rounded-2xl font-black uppercase text-[11px] tracking-[0.2em] hover:bg-gray-50 transition-all">
                Discard
            </button>
        </div>
    </form>
</div>

    </main>
</div>

<?php include __DIR__."/../footer.php"; ?>