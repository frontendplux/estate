
<?php include __DIR__."/header.php"; ?>
<section class="min-h-screen bg-[#fafafa] py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-10">
            <div>
                <h1 class="text-3xl font-black text-dark tracking-tighter uppercase">Win Token <span class="text-gold-500">Wallet</span></h1>
                <p class="text-gray-500 font-medium">Earn ₦40,000.00 for every successful house referral.</p>
            </div>
            <div class="flex items-center gap-3 bg-white p-2 rounded-2xl shadow-sm border border-gray-100">
                <div class="w-10 h-10 bg-gold-500 rounded-xl flex items-center justify-center text-white">
                    <i class="fa-solid fa-coins"></i>
                </div>
                <div class="pr-4">
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Balance</p>
                    <p class="text-lg font-black text-dark tracking-tighter">₦120,000.00</p>
                </div>
            </div>
        </div>

        <div class="gold-gradient rounded-[3rem] p-10 text-white shadow-2xl shadow-gold-200 relative overflow-hidden mb-12">
            <div class="relative z-10">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                    <div>
                        <span class="bg-white/20 px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-[0.2em]">Referral Milestone</span>
                        <h2 class="text-5xl font-black mt-4 tracking-tighter">₦40,000.00</h2>
                        <p class="text-gold-100 mt-2 font-medium italic">Next Win Token Payout</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-6 rounded-[2rem] border border-white/20 text-center">
                        <p class="text-[10px] font-black uppercase mb-2">Referral Link</p>
                        <p class="font-mono text-sm mb-4">biyi.estate/ref/user99</p>
                        <button class="bg-white text-gold-700 px-6 py-2.5 rounded-xl font-black text-[10px] uppercase tracking-widest hover:scale-105 transition-transform">
                            Copy & Share
                        </button>
                    </div>
                </div>
                
                <div class="mt-12">
                    <div class="flex justify-between text-[10px] font-black uppercase mb-2">
                        <span>Progress to next ₦40k</span>
                        <span>75% Completed</span>
                    </div>
                    <div class="w-full h-3 bg-white/20 rounded-full overflow-hidden">
                        <div class="h-full bg-white w-[75%] shadow-[0_0_15px_rgba(255,255,255,0.5)]"></div>
                    </div>
                    <p class="mt-4 text-xs opacity-80">Just 1 more successful rental to unlock your next token!</p>
                </div>
            </div>
            <i class="fa-solid fa-gem absolute -right-12 -bottom-12 text-[280px] text-white/5 rotate-12"></i>
        </div>

        <div class="bg-white rounded-[2.5rem] p-8 border border-gray-100 shadow-sm">
            <h3 class="text-xl font-black text-dark mb-8 flex items-center gap-2">
                <i class="fa-solid fa-clock-rotate-left text-gold-500"></i> Token History
            </h3>
            
            <div class="space-y-6">
                <div class="flex items-center justify-between py-4 border-b border-gray-50 last:border-0 group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-green-50 rounded-2xl flex items-center justify-center text-green-600 group-hover:bg-green-600 group-hover:text-white transition-all">
                            <i class="fa-solid fa-plus text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-black text-dark text-sm">Successful Referral: Lekki Penthouse</h4>
                            <p class="text-[10px] text-gray-400 font-bold uppercase">March 04, 2026 • Ref ID: #8821</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-black text-green-600">+₦40,000</p>
                        <span class="text-[9px] font-black uppercase text-gray-300">Completed</span>
                    </div>
                </div>

                <div class="flex items-center justify-between py-4 border-b border-gray-100 last:border-0 group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gold-50 rounded-2xl flex items-center justify-center text-gold-600">
                            <i class="fa-solid fa-hourglass-half text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-black text-dark text-sm">Pending: Smart Studio B1 Referral</h4>
                            <p class="text-[10px] text-gray-400 font-bold uppercase">Pending Inspection • Ref ID: #9902</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-black text-gray-400">₦40,000</p>
                        <span class="text-[9px] font-black uppercase text-gold-600 italic animate-pulse">Processing</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 bg-zinc-900 rounded-[2.5rem] p-8 text-center border border-white/5">
            <h4 class="text-white font-black mb-2 tracking-tight text-xl">Ready to Withdraw?</h4>
            <p class="text-gray-400 text-sm mb-6 max-w-sm mx-auto">Win Tokens are usually credited to your bank within 24 hours. Contact Biyi Support for instant payout confirmation.</p>
            <a href="https://wa.me/2348000000000?text=I%20want%20to%20withdraw%20my%20Win%20Tokens" 
               class="inline-flex items-center gap-2 bg-[#25D366] text-white px-10 py-4 rounded-2xl font-black text-xs uppercase tracking-widest hover:scale-105 transition-all">
                <i class="fa-brands fa-whatsapp text-xl"></i> Payout via WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include __DIR__."/footer.php"; ?>