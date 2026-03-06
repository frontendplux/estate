
<?php include __DIR__."/header.php"; ?>
<section class="min-h-screen bg-[#fcfcfc] py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            
            <div class="lg:col-span-2 gold-gradient rounded-[3rem] p-10 text-white shadow-2xl shadow-gold-200 relative overflow-hidden">
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-[10px] font-black uppercase tracking-[0.3em] text-white/80">Available Win Tokens</p>
                            <h2 class="text-6xl font-black mt-2 tracking-tighter">₦120,000</h2>
                        </div>
                        <div class="bg-white/20 backdrop-blur-md p-4 rounded-2xl border border-white/10">
                            <i class="fa-solid fa-wallet text-2xl"></i>
                        </div>
                    </div>
                    
                    <div class="mt-12">
                        <div class="flex justify-between items-end mb-3">
                            <div>
                                <p class="text-xs font-bold text-gold-100">Progress to next payout</p>
                                <p class="text-2xl font-black">75%</p>
                            </div>
                            <p class="text-[10px] font-black uppercase opacity-70">1 Referral left</p>
                        </div>
                        <div class="w-full h-4 bg-black/10 rounded-full overflow-hidden border border-white/10">
                            <div class="h-full bg-white w-[75%] shadow-[0_0_20px_white]"></div>
                        </div>
                    </div>
                </div>
                <i class="fa-solid fa-coins absolute -right-10 -bottom-10 text-[250px] text-white/5 rotate-12"></i>
            </div>

            <div class="bg-dark rounded-[3rem] p-10 text-white flex flex-col justify-between items-center text-center">
                <div class="w-20 h-20 bg-gold-500/20 rounded-full flex items-center justify-center text-gold-500 mb-6">
                    <i class="fa-solid fa-paper-plane-top text-3xl"></i>
                </div>
                <div>
                    <h3 class="text-2xl font-black mb-2">Claim Cash</h3>
                    <p class="text-gray-400 text-sm mb-6">Transfer your win tokens to your bank account instantly.</p>
                </div>
                <button class="w-full bg-gold-500 text-white py-4 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-white hover:text-dark transition-all">
                    Withdraw Now
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-12">
            
            <div class="xl:col-span-2 space-y-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-black text-dark tracking-tight">Earning Tasks</h3>
                    <span class="bg-gold-50 text-gold-600 text-[10px] font-black px-3 py-1 rounded-full uppercase">Boost Earnings</span>
                </div>

                <div class="bg-white border border-gray-100 p-6 rounded-[2rem] flex items-center gap-6 group hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <i class="fa-solid fa-user-plus"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-black text-dark italic">The Big Refer</h4>
                        <p class="text-gray-400 text-xs">Invite a friend to rent a Biyi Home.</p>
                    </div>
                    <div class="text-right">
                        <p class="text-gold-600 font-black">₦40,000</p>
                        <button class="text-[10px] font-black uppercase text-dark underline">Invite</button>
                    </div>
                </div>

                <div class="bg-white border border-gray-100 p-6 rounded-[2rem] flex items-center gap-6 group hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-green-600 group-hover:text-white transition-all">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-black text-dark italic">WhatsApp Status Blitz</h4>
                        <p class="text-gray-400 text-xs">Post a luxury home link to your status.</p>
                    </div>
                    <div class="text-right">
                        <p class="text-gold-600 font-black">₦5,000 Bonus</p>
                        <button class="text-[10px] font-black uppercase text-dark underline">Share</button>
                    </div>
                </div>

                <div class="bg-white border border-gray-100 p-6 rounded-[2rem] flex items-center gap-6 opacity-60">
                    <div class="w-16 h-16 bg-gray-50 text-gray-400 rounded-2xl flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-id-card"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-black text-dark italic">KYC Verification</h4>
                        <p class="text-gray-400 text-xs">Complete your profile for faster payouts.</p>
                    </div>
                    <div class="text-right">
                        <i class="fa-solid fa-circle-check text-green-500"></i>
                        <p class="text-[10px] font-black uppercase text-green-600">Done</p>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm">
                    <h4 class="font-black text-dark mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-circle-info text-gold-500"></i> Task Rules
                    </h4>
                    <ul class="space-y-4 text-xs font-bold text-gray-500">
                        <li class="flex gap-2"><span class="text-gold-500">01.</span> Tokens are credited after tenant payment.</li>
                        <li class="flex gap-2"><span class="text-gold-500">02.</span> Social tasks require a screenshot for verification.</li>
                        <li class="flex gap-2"><span class="text-gold-500">03.</span> Zero excess charges apply to your referrals too!</li>
                    </ul>
                </div>

                <a href="https://wa.me/2348000000000?text=I%20have%20a%20question%20about%20my%20win%20tokens" 
                   class="block bg-green-50 border border-green-100 p-8 rounded-[2.5rem] group hover:bg-green-600 transition-all">
                    <p class="text-[#25D366] font-black text-[10px] uppercase group-hover:text-white">Need Help?</p>
                    <h4 class="text-lg font-black text-dark group-hover:text-white mt-1">Talk to Token Support</h4>
                    <div class="flex items-center justify-between mt-6">
                        <span class="text-[10px] font-black text-gray-400 uppercase group-hover:text-white/80">Typical reply: 2 mins</span>
                        <i class="fa-brands fa-whatsapp text-2xl text-[#25D366] group-hover:text-white"></i>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<?php include __DIR__."/footer.php"; ?>