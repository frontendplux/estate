
<?php include __DIR__."/../header.php"; ?>
<div class="min-h-screen bg-[#f8f9fa] flex flex-col lg:flex-row">
<?php include __DIR__."/aside.php"; ?>

    <main class="flex-1 p-6 lg:p-12 overflow-y-auto">
        
    <header class="flex items-center justify-between mb-10 px-4 md:px-0">
        <div>
            <h2 class="text-4xl font-black italic tracking-tighter text-dark">Portfolio <span class="text-gold-500">Pulse</span></h2>
            <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-gray-400">Real-time assets & referral analytics</p>
        </div>
        <div class="flex items-center gap-4">
            <div class="hidden sm:block text-right">
                <p class="text-[9px] font-black text-gray-400 uppercase">System Health</p>
                <p class="text-xs font-bold text-green-500 flex items-center gap-1 justify-end">
                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span> Optimal
                </p>
            </div>
            <div class="w-12 h-12 bg-white border border-gray-100 rounded-2xl flex items-center justify-center text-dark shadow-sm">
                <i class="fa-solid fa-bell"></i>
            </div>
        </div>
    </header>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <div class="bg-white p-6 rounded-[2.5rem] border border-gray-100 shadow-sm group hover:border-gold-300 transition-all">
            <div class="w-12 h-12 bg-gold-50 rounded-2xl flex items-center justify-center text-gold-600 mb-4">
                <i class="fa-solid fa-users-crown"></i>
            </div>
            <p class="text-[10px] font-black text-gray-400 uppercase mb-1">Total Members</p>
            <h3 class="text-3xl font-black tracking-tighter italic">12,482</h3>
            <p class="text-[10px] font-bold text-green-600 mt-2">+12% this week</p>
        </div>

        <div class="bg-dark p-6 rounded-[2.5rem] text-white shadow-2xl relative overflow-hidden">
            <i class="fa-solid fa-coins absolute -right-4 -bottom-4 text-7xl opacity-10 -rotate-12"></i>
            <p class="text-[10px] font-black text-gold-400 uppercase mb-1">Payouts Made</p>
            <h3 class="text-3xl font-black tracking-tighter italic">₦4.2M</h3>
            <p class="text-[10px] font-bold text-white/60 mt-2">105 Jackpot Claims</p>
        </div>

        <div class="bg-white p-6 rounded-[2.5rem] border border-gray-100 shadow-sm">
            <div class="w-12 h-12 bg-gray-50 rounded-2xl flex items-center justify-center text-dark mb-4">
                <i class="fa-solid fa-building-circle-check"></i>
            </div>
            <p class="text-[10px] font-black text-gray-400 uppercase mb-1">Active Listings</p>
            <h3 class="text-3xl font-black tracking-tighter italic">842</h3>
            <p class="text-[10px] font-bold text-gold-600 mt-2">Lagos • Abuja • Port-H</p>
        </div>

        <div class="bg-gold-500 p-6 rounded-[2.5rem] text-white">
            <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center text-white mb-4">
                <i class="fa-solid fa-eye"></i>
            </div>
            <p class="text-[10px] font-black text-white/80 uppercase mb-1">Site Inspections</p>
            <h3 class="text-3xl font-black tracking-tighter italic">56</h3>
            <p class="text-[10px] font-bold text-white mt-2">Scheduled Today</p>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-8">
        <div class="col-span-12 lg:col-span-8 bg-white rounded-[3rem] border border-gray-100 p-8 shadow-sm">
            <div class="flex justify-between items-center mb-8">
                <h4 class="font-black italic text-xl tracking-tighter">Growth <span class="text-gold-500">Analysis</span></h4>
                <div class="flex gap-2">
                    <span class="px-3 py-1 bg-gray-50 rounded-full text-[9px] font-black uppercase">Weekly</span>
                    <span class="px-3 py-1 text-gray-300 rounded-full text-[9px] font-black uppercase">Monthly</span>
                </div>
            </div>
            <div class="h-64 flex items-end justify-between gap-2">
                <div class="w-full bg-gold-100 rounded-t-xl h-[40%] hover:bg-gold-500 transition-all"></div>
                <div class="w-full bg-gold-100 rounded-t-xl h-[60%] hover:bg-gold-500 transition-all"></div>
                <div class="w-full bg-gold-100 rounded-t-xl h-[45%] hover:bg-gold-500 transition-all"></div>
                <div class="w-full bg-gold-500 rounded-t-xl h-[85%]"></div>
                <div class="w-full bg-gold-100 rounded-t-xl h-[55%] hover:bg-gold-500 transition-all"></div>
                <div class="w-full bg-gold-100 rounded-t-xl h-[75%] hover:bg-gold-500 transition-all"></div>
                <div class="w-full bg-gold-100 rounded-t-xl h-[95%] hover:bg-gold-500 transition-all"></div>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-4 bg-white rounded-[3rem] border border-gray-100 p-8 shadow-sm">
            <h4 class="font-black italic text-xl tracking-tighter mb-6">Recent <span class="text-gold-500">Wins</span></h4>
            <div class="space-y-6">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-gray-100 overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=121212&color=fff">
                    </div>
                    <div class="flex-1">
                        <p class="text-xs font-black">John Doe</p>
                        <p class="text-[9px] font-bold text-gray-400 uppercase">₦40,000 Win</p>
                    </div>
                    <span class="text-[9px] font-black text-gold-600 uppercase">2m ago</span>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-gray-100 overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name=Sarah+B&background=d4af37&color=fff">
                    </div>
                    <div class="flex-1">
                        <p class="text-xs font-black">Sarah B.</p>
                        <p class="text-[9px] font-bold text-gray-400 uppercase">Referral Token</p>
                    </div>
                    <span class="text-[9px] font-black text-gold-600 uppercase">15m ago</span>
                </div>
            </div>
            <button class="w-full mt-8 py-3 border border-gold-100 rounded-xl text-[9px] font-black uppercase tracking-widest text-gold-600 hover:bg-gold-50 transition-all">
                View Full Ledger
            </button>
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