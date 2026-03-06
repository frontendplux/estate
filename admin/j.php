<?php include __DIR__."/../header.php"; ?>
<div class="min-h-screen bg-[#f8f9fa] flex flex-col lg:flex-row">
<?php include __DIR__."/aside.php"; ?>

    <main class="flex-1 p-6 lg:p-12 overflow-y-auto">
        
        <header class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-6">
            <div>
                <h2 class="text-4xl font-black italic tracking-tighter text-dark">Category <span class="text-gold-500">Registry</span></h2>
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-gray-400">Master database of property classifications</p>
            </div>
            
            <div class="flex items-center gap-3">
                <div class="bg-white border border-gray-100 rounded-2xl px-4 py-2 flex items-center gap-3 shadow-sm">
                    <span class="text-[9px] font-black uppercase text-gray-400">Total Classes</span>
                    <span class="text-sm font-black text-dark">12</span>
                </div>
                <button class="bg-dark text-white px-6 py-4 rounded-2xl shadow-xl hover:bg-gold-600 transition-all flex items-center gap-3 text-[10px] font-black uppercase tracking-widest">
                    <i class="fa-solid fa-plus"></i> New Class
                </button>
            </div>
        </header>

        <div class="bg-white rounded-[3rem] border border-gray-100 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50/50 border-b border-gray-100">
                            <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest">Icon & Class Name</th>
                            <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest">Win Token</th>
                            <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest">Inventory</th>
                            <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest">Probability</th>
                            <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest text-right">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        
                        <tr class="group hover:bg-gray-50/50 transition-all">
                            <td class="p-8">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-gold-50 rounded-xl flex items-center justify-center text-gold-500 group-hover:bg-gold-500 group-hover:text-white transition-all">
                                        <i class="fa-solid fa-building"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-black text-dark tracking-tight">Apartments & Rents</p>
                                        <p class="text-[9px] text-gray-400 font-bold uppercase tracking-tighter">ID: CAT-001</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-8">
                                <div class="flex items-center gap-2">
                                    <span class="text-xs font-black text-dark">₦40,000.00</span>
                                    <i class="fa-solid fa-coins text-[10px] text-gold-500"></i>
                                </div>
                            </td>
                            <td class="p-8">
                                <div class="flex flex-col">
                                    <span class="text-xs font-black text-dark">342 Units</span>
                                    <div class="w-24 h-1.5 bg-gray-100 rounded-full mt-2 overflow-hidden">
                                        <div class="bg-gold-500 h-full w-[70%]"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-8">
                                <span class="text-xs font-black text-gray-500 italic">15% Chance</span>
                            </td>
                            <td class="p-8 text-right">
                                <div class="flex items-center justify-end gap-6">
                                    <label class="relative inline-flex items-center cursor-pointer scale-90">
                                        <input type="checkbox" checked class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-gold-500"></div>
                                    </label>
                                    <a href="category-edit.php" class="w-10 h-10 bg-white border border-gray-100 rounded-xl flex items-center justify-center text-gray-300 hover:text-dark hover:border-dark transition-all shadow-sm">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr class="group hover:bg-gray-50/50 transition-all">
                            <td class="p-8">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-gold-50 rounded-xl flex items-center justify-center text-gold-500 group-hover:bg-gold-500 group-hover:text-white transition-all">
                                        <i class="fa-solid fa-map-location-dot"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-black text-dark tracking-tight">Landed Properties</p>
                                        <p class="text-[9px] text-gray-400 font-bold uppercase tracking-tighter">ID: CAT-002</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-8">
                                <div class="flex items-center gap-2">
                                    <span class="text-xs font-black text-dark">₦120,000.00</span>
                                    <i class="fa-solid fa-crown text-[10px] text-gold-500"></i>
                                </div>
                            </td>
                            <td class="p-8">
                                <div class="flex flex-col">
                                    <span class="text-xs font-black text-dark">128 Units</span>
                                    <div class="w-24 h-1.5 bg-gray-100 rounded-full mt-2 overflow-hidden">
                                        <div class="bg-gold-500 h-full w-[30%]"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-8">
                                <span class="text-xs font-black text-gray-500 italic">5% Chance</span>
                            </td>
                            <td class="p-8 text-right">
                                <div class="flex items-center justify-end gap-6">
                                    <label class="relative inline-flex items-center cursor-pointer scale-90">
                                        <input type="checkbox" checked class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-gold-500"></div>
                                    </label>
                                    <a href="#" class="w-10 h-10 bg-white border border-gray-100 rounded-xl flex items-center justify-center text-gray-300 hover:text-dark hover:border-dark transition-all shadow-sm">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-8 bg-gold-50 border border-gold-100 rounded-3xl p-6 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 bg-gold-500 rounded-full flex items-center justify-center text-white">
                    <i class="fa-solid fa-triangle-exclamation text-xs"></i>
                </div>
                <p class="text-[11px] font-bold text-gold-700 uppercase tracking-widest">Probability Warning: Ensure total class probability does not exceed 100%.</p>
            </div>
            <button class="text-[10px] font-black uppercase tracking-widest text-gold-600 hover:text-gold-800">Recalibrate All</button>
        </div>

    </main>

</div>
<?php include __DIR__."/../footer.php"; ?>