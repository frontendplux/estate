
<?php include __DIR__."/header.php"; ?>
<div class="min-h-screen bg-[#f8f9fa] flex flex-col lg:flex-row">

    <aside class="hidden lg:flex w-72 bg-white border-r border-gray-100 flex-col p-8 sticky top-0 h-screen">
        <div class="flex items-center gap-3 mb-12">
            <div class="w-10 h-10 bg-gold-500 rounded-xl flex items-center justify-center text-white shadow-lg">
                <i class="fa-solid fa-chart-pie"></i>
            </div>
            <span class="font-black text-xl tracking-tighter uppercase">Portal</span>
        </div>

        <nav class="flex-1 space-y-2">
            <a href="#" class="flex items-center gap-4 bg-gold-50 text-gold-700 p-4 rounded-2xl font-bold transition-all">
                <i class="fa-solid fa-house-user w-6"></i> Overview
            </a>
            <a href="#" class="flex items-center gap-4 text-gray-400 p-4 rounded-2xl font-bold hover:bg-gray-50 hover:text-dark transition-all">
                <i class="fa-solid fa-heart w-6"></i> Saved Houses
            </a>
            <a href="#" class="flex items-center gap-4 text-gray-400 p-4 rounded-2xl font-bold hover:bg-gray-50 hover:text-dark transition-all">
                <i class="fa-solid fa-coins w-6"></i> Win Tokens
            </a>
            <a href="#" class="flex items-center gap-4 text-gray-400 p-4 rounded-2xl font-bold hover:bg-gray-50 hover:text-dark transition-all">
                <i class="fa-solid fa-vr-cardboard w-6"></i> Tour History
            </a>
        </nav>

        <div class="mt-auto pt-8">
            <button class="w-full bg-dark text-white p-4 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-gold-600 transition-all shadow-xl shadow-gold-100">
                Log Out
            </button>
        </div>
    </aside>

    <main class="flex-1 p-6 lg:p-12 overflow-y-auto">
        
        <header class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12">
            <div>
                <h1 class="text-3xl font-black text-dark tracking-tight">Welcome back, <span class="text-gold-500">Biyi Member!</span></h1>
                <p class="text-gray-400 font-medium mt-1">Manage your dream housing and referral earnings.</p>
            </div>
            <div class="flex items-center gap-4">
                <button class="w-12 h-12 bg-white rounded-full border border-gray-100 flex items-center justify-center text-gray-400 relative">
                    <i class="fa-solid fa-bell"></i>
                    <span class="absolute top-3 right-3 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                </button>
                <div class="w-12 h-12 bg-gold-100 rounded-full border-2 border-gold-500 overflow-hidden">
                    <img src="https://i.pravatar.cc/100?u=user" alt="Profile">
                </div>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div class="gold-gradient p-8 rounded-[2.5rem] text-white shadow-2xl shadow-gold-200 relative overflow-hidden">
                <div class="relative z-10">
                    <p class="text-[10px] font-black uppercase tracking-[0.2em] opacity-80 mb-2">Total Win Tokens</p>
                    <h3 class="text-4xl font-black tracking-tighter">₦120,000.00</h3>
                    <div class="mt-6 flex items-center gap-2">
                        <span class="bg-white/20 px-3 py-1 rounded-full text-[10px] font-bold">3 Referrals Successful</span>
                        <i class="fa-solid fa-circle-check text-white"></i>
                    </div>
                </div>
                <i class="fa-solid fa-gift absolute -right-6 -bottom-6 text-8xl text-white/10 -rotate-12"></i>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm flex flex-col justify-between">
                <div>
                    <p class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 mb-2">Houses Toured</p>
                    <h3 class="text-4xl font-black text-dark tracking-tighter">14</h3>
                </div>
                <p class="text-xs text-green-600 font-bold mt-4"><i class="fa-solid fa-eye"></i> 4 New since yesterday</p>
            </div>

            <div class="bg-dark p-8 rounded-[2.5rem] text-white flex flex-col justify-between">
                <div>
                    <p class="text-[10px] font-black uppercase tracking-[0.2em] text-gold-500 mb-2">Processing</p>
                    <h3 class="text-4xl font-black tracking-tighter text-white">01</h3>
                </div>
                <p class="text-xs text-gray-400 font-bold mt-4">Property: Biyi Urban Loft</p>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-12">
            
            <div class="xl:col-span-2 space-y-8">
                <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm">
                    <div class="flex items-center justify-between mb-8">
                        <h4 class="text-xl font-black tracking-tight">Refer & Earn Big</h4>
                        <span class="text-gold-600 font-bold text-sm">₦40k per lead</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-6">Share your unique link. When they rent any apartment (Expensive or Cheaper), you get credited immediately.</p>
                    
                    <div class="flex items-center gap-4 bg-gray-50 p-2 rounded-2xl border border-dashed border-gold-300">
                        <input type="text" value="biyiestate.com/ref/user77" readonly class="bg-transparent border-none flex-1 px-4 text-sm font-bold text-dark focus:ring-0">
                        <button class="bg-gold-500 text-white px-6 py-3 rounded-xl font-black text-xs uppercase tracking-widest hover:bg-dark transition-all">Copy Link</button>
                    </div>
                </div>

                <div>
                    <h4 class="text-xl font-black tracking-tight mb-6">Recent Saved Houses</h4>
                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-3xl flex items-center gap-4 border border-gray-100 hover:shadow-lg transition-all">
                            <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=100" class="w-16 h-16 rounded-2xl object-cover">
                            <div class="flex-1">
                                <h5 class="font-bold text-sm">Smart Studio B1</h5>
                                <p class="text-[10px] text-gray-400 uppercase font-black">₦450k/yr • Surulere</p>
                            </div>
                            <a href="https://wa.me/2348000000000" class="text-[#25D366] text-xl px-4"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-zinc-900 rounded-[2.5rem] p-8 text-white relative overflow-hidden">
                    <h4 class="text-gold-500 font-black mb-4">Our Promise</h4>
                    <ul class="space-y-4 text-xs">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check text-gold-500 mt-0.5"></i>
                            <span class="opacity-80">No middle-man excess charges.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check text-gold-500 mt-0.5"></i>
                            <span class="opacity-80">Full 360° VR inspection available for all.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check text-gold-500 mt-0.5"></i>
                            <span class="opacity-80">Legal documentation handled in 48hrs.</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-green-50 rounded-[2.5rem] p-8 border border-green-100">
                    <p class="text-xs font-black text-green-700 uppercase mb-2">Instant Help</p>
                    <h4 class="text-lg font-bold mb-4 leading-tight">Need a customized housing list?</h4>
                    <a href="https://wa.me/2348000000000" class="flex items-center justify-center gap-2 bg-[#25D366] text-white py-4 rounded-2xl font-black text-xs uppercase shadow-xl shadow-green-200">
                        <i class="fa-brands fa-whatsapp text-lg"></i> Chat With Biyi
                    </a>
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

<?php include __DIR__."/footer.php"; ?>