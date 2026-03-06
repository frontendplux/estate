<?php include __DIR__."/../header.php"; ?>
<div class="min-h-screen bg-[#f8f9fa] flex flex-col lg:flex-row">
<?php include __DIR__."/aside.php"; ?>

    <main class="flex-1 p-6 lg:p-12 overflow-y-auto">
        
        <header class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-6">
            <div>
                <h2 class="text-4xl font-black italic tracking-tighter text-dark">Menu <span class="text-gold-500">Architecture</span></h2>
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-gray-400">Configure how categories appear in navigation</p>
            </div>
            
            <button class="bg-dark text-white px-6 py-4 rounded-2xl shadow-xl hover:bg-gold-600 transition-all flex items-center gap-3 text-[10px] font-black uppercase tracking-widest">
                <i class="fa-solid fa-arrows-rotate"></i> Sync Menu
            </button>
        </header>

        <div class="bg-white rounded-[3rem] border border-gray-100 shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/50 border-b border-gray-100">
                        <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest w-16">Order</th>
                        <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest">Menu Label</th>
                        <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest">Show in Mobile</th>
                        <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest">Show in Desktop</th>
                        <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest text-right">Settings</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    
                    <tr class="group hover:bg-gray-50/50 transition-all">
                        <td class="p-8">
                            <i class="fa-solid fa-grip-vertical text-gray-200 group-hover:text-gold-500 cursor-grab transition-colors"></i>
                        </td>
                        <td class="p-8">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-gray-900 rounded-xl flex items-center justify-center text-white text-xs">
                                    <i class="fa-solid fa-building"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-black text-dark tracking-tight">Apartments</p>
                                    <p class="text-[9px] text-gold-500 font-bold uppercase">Primary Link</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-8">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-500 rounded-full shadow-[0_0_8px_rgba(34,197,94,0.6)]"></span>
                                <span class="text-[10px] font-black uppercase text-dark">Visible</span>
                            </div>
                        </td>
                        <td class="p-8">
                            <div class="flex items-center gap-2 text-gray-300">
                                <i class="fa-solid fa-check-double text-xs text-gold-500"></i>
                                <span class="text-[10px] font-black uppercase">Header Dropdown</span>
                            </div>
                        </td>
                        <td class="p-8 text-right">
                            <button class="text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-dark transition-all">Configure</button>
                        </td>
                    </tr>

                    <tr class="group hover:bg-gray-50/50 transition-all">
                        <td class="p-8">
                            <i class="fa-solid fa-grip-vertical text-gray-200 group-hover:text-gold-500 cursor-grab transition-colors"></i>
                        </td>
                        <td class="p-8">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-gray-900 rounded-xl flex items-center justify-center text-white text-xs">
                                    <i class="fa-solid fa-map-location-dot"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-black text-dark tracking-tight">Lands & Plots</p>
                                    <p class="text-[9px] text-gold-500 font-bold uppercase">Primary Link</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-8">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-500 rounded-full shadow-[0_0_8px_rgba(34,197,94,0.6)]"></span>
                                <span class="text-[10px] font-black uppercase text-dark">Visible</span>
                            </div>
                        </td>
                        <td class="p-8">
                            <div class="flex items-center gap-2 text-gray-300">
                                <i class="fa-solid fa-check-double text-xs text-gold-500"></i>
                                <span class="text-[10px] font-black uppercase">Header Dropdown</span>
                            </div>
                        </td>
                        <td class="p-8 text-right">
                            <button class="text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-dark transition-all">Configure</button>
                        </td>
                    </tr>

                    <tr class="group bg-gray-50/30 opacity-60">
                        <td class="p-8">
                            <i class="fa-solid fa-grip-vertical text-gray-200 cursor-not-allowed"></i>
                        </td>
                        <td class="p-8">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-gray-200 rounded-xl flex items-center justify-center text-gray-400 text-xs">
                                    <i class="fa-solid fa-hotel"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-black text-dark tracking-tight">Shortlets</p>
                                    <p class="text-[9px] text-gray-400 font-bold uppercase tracking-tighter">Draft Mode</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-8">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-gray-300 rounded-full"></span>
                                <span class="text-[10px] font-black uppercase text-gray-400">Hidden</span>
                            </div>
                        </td>
                        <td class="p-8">
                            <span class="text-[10px] font-black uppercase text-gray-300">Excluded</span>
                        </td>
                        <td class="p-8 text-right">
                            <button class="text-[10px] font-black uppercase tracking-widest text-gold-600 hover:text-gold-700">Enable</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mt-8 flex items-start gap-4 p-8 bg-white border border-gray-100 rounded-[2.5rem] shadow-sm">
            <div class="w-12 h-12 bg-dark rounded-2xl flex items-center justify-center text-gold-500 shrink-0">
                <i class="fa-solid fa-mobile-screen-button"></i>
            </div>
            <div>
                <h5 class="font-black italic text-lg tracking-tight">Sticky Mobile Optimization</h5>
                <p class="text-xs text-gray-400 font-medium leading-relaxed max-w-2xl">The order defined here directly affects your <strong>Sticky Mobile Menu</strong>. For the best user experience, keep your "Highest Payout" categories (Lands, Duplexes) at the top of the list to drive referral engagement.</p>
            </div>
        </div>

    </main>
</div>
<?php include __DIR__."/../footer.php"; ?>