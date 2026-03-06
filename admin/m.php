<?php include __DIR__."/../header.php"; ?>
<div class="min-h-screen bg-[#f8f9fa] flex flex-col lg:flex-row">
<?php include __DIR__."/aside.php"; ?>

    <main class="flex-1 p-6 lg:p-12 overflow-y-auto">
        
        <header class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-6">
            <div>
                <h2 class="text-4xl font-black italic tracking-tighter text-dark">Asset <span class="text-gold-500">Inventory</span></h2>
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-gray-400">Manage, Verify, and Feature Listings</p>
            </div>
            
            <div class="flex items-center gap-3">
                <div class="relative group">
                    <input type="text" placeholder="Search Property ID..." class="bg-white border border-gray-100 rounded-2xl py-3 px-6 pr-12 text-xs font-bold focus:outline-none focus:ring-2 focus:ring-gold-500/20 w-64 transition-all">
                    <i class="fa-solid fa-magnifying-glass absolute right-5 top-1/2 -translate-y-1/2 text-gray-300 text-xs"></i>
                </div>
                <button class="bg-dark text-white p-4 rounded-2xl shadow-xl hover:bg-gold-600 transition-all">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </header>

        <div class="flex flex-wrap items-center gap-4 mb-8">
            <button class="bg-gold-500 text-white px-6 py-2 rounded-full text-[10px] font-black uppercase tracking-widest shadow-lg shadow-gold-200">All Assets (842)</button>
            <button class="bg-white text-gray-400 px-6 py-2 rounded-full text-[10px] font-black uppercase tracking-widest border border-gray-100 hover:text-dark transition-all">Pending (12)</button>
            <button class="bg-white text-gray-400 px-6 py-2 rounded-full text-[10px] font-black uppercase tracking-widest border border-gray-100 hover:text-dark transition-all">Sold / Rented</button>
            <div class="h-4 w-[1px] bg-gray-200 mx-2"></div>
            <select class="bg-transparent text-[10px] font-black uppercase tracking-widest text-gray-500 cursor-pointer outline-none">
                <option>Sort by Date</option>
                <option>Price: High to Low</option>
                <option>Most Viewed</option>
            </select>
        </div>

        <div class="bg-white rounded-[3rem] border border-gray-100 shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/50 border-b border-gray-100">
                        <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest">Property Details</th>
                        <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest">Category</th>
                        <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest">Price / Status</th>
                        <th class="p-8 text-[10px] font-black uppercase text-gray-400 tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <tr class="group hover:bg-gray-50/50 transition-all">
                        <td class="p-8">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 rounded-2xl overflow-hidden shadow-md">
                                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=200" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div>
                                    <p class="text-sm font-black text-dark tracking-tight">Eko Atlantic Duplex</p>
                                    <p class="text-[10px] text-gray-400 font-bold uppercase"><i class="fa-solid fa-location-dot text-gold-500 mr-1"></i> Victoria Island, Lagos</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-8">
                            <span class="bg-gold-50 text-gold-600 px-3 py-1 rounded-lg text-[9px] font-black uppercase">Luxury Collection</span>
                        </td>
                        <td class="p-8">
                            <p class="text-sm font-black text-dark italic">₦450,000,000</p>
                            <span class="flex items-center gap-1.5 text-[9px] font-bold text-green-500 uppercase mt-1">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> Available
                            </span>
                        </td>
                        <td class="p-8">
                            <div class="flex items-center justify-end gap-2">
                                <button class="w-10 h-10 bg-white border border-gray-100 rounded-xl flex items-center justify-center text-gray-400 hover:text-gold-500 hover:border-gold-200 transition-all shadow-sm">
                                    <i class="fa-solid fa-pen-to-square text-xs"></i>
                                </button>
                                <button class="w-10 h-10 bg-white border border-gray-100 rounded-xl flex items-center justify-center text-gray-400 hover:text-red-500 hover:border-red-100 transition-all shadow-sm">
                                    <i class="fa-solid fa-trash-can text-xs"></i>
                                </button>
                                <button class="w-10 h-10 bg-dark text-white rounded-xl flex items-center justify-center shadow-lg hover:bg-gold-600 transition-all">
                                    <i class="fa-solid fa-eye text-xs"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="group hover:bg-gray-50/50 transition-all">
                        <td class="p-8">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 rounded-2xl overflow-hidden shadow-md">
                                    <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?auto=format&fit=crop&w=200" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div>
                                    <p class="text-sm font-black text-dark tracking-tight">Yaba Smart Studio</p>
                                    <p class="text-[10px] text-gray-400 font-bold uppercase"><i class="fa-solid fa-location-dot text-gold-500 mr-1"></i> Sabo, Yaba</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-8">
                            <span class="bg-gray-100 text-gray-500 px-3 py-1 rounded-lg text-[9px] font-black uppercase">Standard Rent</span>
                        </td>
                        <td class="p-8">
                            <p class="text-sm font-black text-dark italic">₦2,500,000/yr</p>
                            <span class="flex items-center gap-1.5 text-[9px] font-bold text-gold-500 uppercase mt-1">
                                <span class="w-1.5 h-1.5 bg-gold-500 rounded-full animate-pulse"></span> Pending Approval
                            </span>
                        </td>
                        <td class="p-8 text-right">
                             <div class="flex items-center justify-end gap-2">
                                <button class="w-10 h-10 bg-white border border-gray-100 rounded-xl flex items-center justify-center text-gray-400 hover:text-gold-500 hover:border-gold-200 transition-all shadow-sm">
                                    <i class="fa-solid fa-pen-to-square text-xs"></i>
                                </button>
                                <button class="w-10 h-10 bg-white border border-gray-100 rounded-xl flex items-center justify-center text-gray-400 hover:text-red-500 hover:border-red-100 transition-all shadow-sm">
                                    <i class="fa-solid fa-trash-can text-xs"></i>
                                </button>
                                <button class="w-10 h-10 bg-dark text-white rounded-xl flex items-center justify-center shadow-lg hover:bg-gold-600 transition-all">
                                    <i class="fa-solid fa-eye text-xs"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div class="p-8 bg-gray-50/50 flex justify-between items-center">
                <p class="text-[10px] font-black uppercase text-gray-400">Showing 1 to 10 of 842 Assets</p>
                <div class="flex gap-2">
                    <button class="w-8 h-8 rounded-lg border border-gray-200 flex items-center justify-center text-gray-400 hover:bg-white transition-all"><i class="fa-solid fa-chevron-left text-[10px]"></i></button>
                    <button class="w-8 h-8 rounded-lg bg-dark text-white flex items-center justify-center text-[10px] font-black">1</button>
                    <button class="w-8 h-8 rounded-lg border border-gray-200 flex items-center justify-center text-[10px] font-black text-gray-400 hover:bg-white transition-all">2</button>
                    <button class="w-8 h-8 rounded-lg border border-gray-200 flex items-center justify-center text-gray-400 hover:bg-white transition-all"><i class="fa-solid fa-chevron-right text-[10px]"></i></button>
                </div>
            </div>
        </div>
    </main>

    <nav class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-gray-100 px-8 py-4 flex justify-between items-center z-50">
        <button class="text-gold-500 text-xl"><i class="fa-solid fa-house-chimney"></i></button>
        <button class="text-gray-300 text-xl"><i class="fa-solid fa-heart"></i></button>
        <button class="bg-dark text-white w-12 h-12 rounded-2xl -mt-10 shadow-xl flex items-center justify-center"><i class="fa-solid fa-plus"></i></button>
        <button class="text-gray-300 text-xl"><i class="fa-solid fa-coins"></i></button>
        <button class="text-gray-300 text-xl"><i class="fa-solid fa-user-gear"></i></button>
    </nav>
</div>
<?php include __DIR__."/../footer.php"; ?>