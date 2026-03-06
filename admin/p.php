<?php include __DIR__."/../header.php"; ?>
<div class="min-h-screen bg-[#f8f9fa] flex flex-col lg:flex-row">
<?php include __DIR__."/aside.php"; ?>

    <main class="flex-1 p-6 lg:p-12 overflow-y-auto">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
            <div class="flex items-center gap-4">
                <a href="property-list.php" class="w-10 h-10 bg-white border border-gray-100 rounded-xl flex items-center justify-center text-gray-400 hover:text-dark transition-all">
                    <i class="fa-solid fa-chevron-left text-xs"></i>
                </a>
                <div>
                    <h2 class="text-3xl font-black italic tracking-tighter text-dark">Asset <span class="text-gold-500">Details</span></h2>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">ID: ASSET-7729-LX</p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <button class="px-6 py-3 bg-white border border-red-100 text-red-500 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-red-500 hover:text-white transition-all">Delete</button>
                <button class="px-8 py-3 bg-dark text-white rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-xl hover:bg-gold-600 transition-all">Update Asset</button>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-8">
            
            <div class="col-span-12 lg:col-span-8 space-y-8">
                
                <section class="bg-white rounded-[3rem] p-8 border border-gray-100 shadow-sm">
                    <div class="flex justify-between items-center mb-6">
                        <h4 class="text-xs font-black uppercase tracking-widest text-dark">Asset Gallery</h4>
                        <button class="text-[9px] font-black uppercase text-gold-600 border-b border-gold-600">Add Photos</button>
                    </div>
                    
                    <div class="grid grid-cols-4 gap-4 h-64">
                        <div class="col-span-2 row-span-2 rounded-3xl overflow-hidden relative group">
                            <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=800" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2">
                                <button class="w-8 h-8 bg-white rounded-lg text-dark text-xs"><i class="fa-solid fa-maximize"></i></button>
                                <button class="w-8 h-8 bg-white rounded-lg text-red-500 text-xs"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="rounded-2xl overflow-hidden shadow-sm">
                            <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?auto=format&fit=crop&w=400" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-2xl overflow-hidden shadow-sm bg-gray-50 flex items-center justify-center border-2 border-dashed border-gray-200">
                             <i class="fa-solid fa-plus text-gray-300"></i>
                        </div>
                        <div class="col-span-2 rounded-2xl overflow-hidden shadow-sm">
                            <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=600" class="w-full h-full object-cover">
                        </div>
                    </div>
                </section>

                <section class="bg-white rounded-[3rem] p-8 md:p-10 border border-gray-100 shadow-sm">
                    <h4 class="text-xs font-black uppercase tracking-widest text-dark mb-8 flex items-center gap-2">
                        <span class="w-2 h-2 bg-gold-500 rounded-full"></span> Listing Information
                    </h4>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase ml-2">Property Title</label>
                            <input type="text" value="The Signature Penthouses" class="w-full bg-gray-50 border border-transparent focus:bg-white focus:border-gold-500 rounded-2xl px-6 py-4 text-sm font-bold transition-all outline-none">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase ml-2">Location / Address</label>
                            <input type="text" value="Banana Island, Lagos" class="w-full bg-gray-50 border border-transparent focus:bg-white focus:border-gold-500 rounded-2xl px-6 py-4 text-sm font-bold transition-all outline-none">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase ml-2">Listing Price (₦)</label>
                            <input type="text" value="850,000,000" class="w-full bg-gray-50 border border-transparent focus:bg-white focus:border-gold-500 rounded-2xl px-6 py-4 text-sm font-black italic text-gold-600 transition-all outline-none">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-gray-400 uppercase ml-2">Property Category</label>
                            <select class="w-full bg-gray-50 border border-transparent focus:bg-white focus:border-gold-500 rounded-2xl px-6 py-4 text-sm font-bold transition-all outline-none appearance-none">
                                <option>Luxury Apartments</option>
                                <option>Landed Property</option>
                                <option>Offices</option>
                            </select>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-span-12 lg:col-span-4 space-y-8">
                
                <div class="bg-dark rounded-[2.5rem] p-8 text-white shadow-2xl">
                    <h5 class="text-[10px] font-black uppercase text-gold-500 tracking-widest mb-6">Asset Control</h5>
                    
                    <div class="space-y-6">
                        <div class="flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-sm font-bold tracking-tight">Active Listing</span>
                                <span class="text-[8px] text-white/40 uppercase">Visible to users</span>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" checked class="sr-only peer">
                                <div class="w-11 h-6 bg-white/10 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-gold-500"></div>
                            </label>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-sm font-bold tracking-tight">Hot Investment</span>
                                <span class="text-[8px] text-white/40 uppercase">Mark with badge</span>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div class="w-11 h-6 bg-white/10 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-gold-500"></div>
                            </label>
                        </div>
                    </div>

                    <button class="w-full mt-10 py-4 bg-white/5 border border-white/10 rounded-2xl text-[9px] font-black uppercase tracking-[0.2em] hover:bg-gold-500 hover:text-white transition-all">
                        View Public Link
                    </button>
                </div>

                <div class="bg-white rounded-[2.5rem] p-8 border border-gray-100 shadow-sm">
                    <h5 class="text-[10px] font-black uppercase text-gray-400 tracking-widest mb-6">Asset Performance</h5>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 bg-gray-50 rounded-2xl">
                            <p class="text-[8px] font-black text-gray-400 uppercase mb-1">Total Views</p>
                            <p class="text-xl font-black italic tracking-tighter">1,204</p>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-2xl">
                            <p class="text-[8px] font-black text-gray-400 uppercase mb-1">Inquiries</p>
                            <p class="text-xl font-black italic tracking-tighter text-gold-600">42</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>
<?php include __DIR__."/../footer.php"; ?>