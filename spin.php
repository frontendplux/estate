
<?php include __DIR__."/header.php"; ?>
<section class="min-h-screen bg-[#FFFFFF] py-20 px-6 relative overflow-hidden">
    
    <div class="absolute top-0 right-0 w-1/3 h-full bg-gold-50/30 -skew-x-12 translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
        
        <div class="relative z-10">
            <span class="bg-gold-100 text-gold-700 px-5 py-2 rounded-full text-[10px] font-black uppercase tracking-widest mb-6 inline-block">
                Exclusive Rewards
            </span>
            <h1 class="text-6xl md:text-7xl font-black tracking-tighter text-gray-900 mb-8">
                Spin the <span class="text-gold-500 italic font-serif font-light">Biyi Vault.</span>
            </h1>
            <p class="text-gray-500 text-lg leading-relaxed mb-10 max-w-md">
                Every successful referral earns you a spin. Unlock your <span class="text-dark font-bold">₦40,000.00 Win Token</span>, inspection vouchers, or premium gift boxes.
            </p>

            <div class="flex gap-10 border-t border-gray-100 pt-10">
                <div>
                    <p class="text-[10px] font-black text-gray-400 uppercase mb-1">Available Spins</p>
                    <p class="text-3xl font-black text-gold-600">02</p>
                </div>
                <div>
                    <p class="text-[10px] font-black text-gray-400 uppercase mb-1">Total Won</p>
                    <p class="text-3xl font-black text-dark">₦120k</p>
                </div>
            </div>
        </div>

        <div class="relative flex justify-center items-center">
            
            <div class="absolute w-[500px] h-[500px] bg-gold-200/20 blur-[120px] rounded-full"></div>

            <div class="relative w-[320px] h-[320px] md:w-[450px] md:h-[450px]">
                
                <div class="absolute inset-0 rounded-full border-[12px] border-white shadow-2xl z-20 pointer-events-none"></div>
                <div class="absolute -inset-4 rounded-full border-[1px] border-gold-100 z-10"></div>

                <div id="biyi-wheel" class="w-full h-full rounded-full border-[2px] border-gold-200 relative overflow-hidden bg-white shadow-inner transition-transform duration-[5s] cubic-bezier(0.15, 0, 0.15, 1)">
                    
                    <div class="absolute top-0 left-1/2 w-1/2 h-1/2 origin-bottom-left bg-gold-50 border-r border-gold-100 rotate-0 flex items-center justify-center">
                        <span class="rotate-45 text-[10px] font-black text-gold-600">₦40,000</span>
                    </div>
                    <div class="absolute top-0 left-1/2 w-1/2 h-1/2 origin-bottom-left bg-white border-r border-gold-100 rotate-90 flex items-center justify-center">
                        <span class="rotate-45 text-[10px] font-black text-gray-400">Gift Box</span>
                    </div>
                    <div class="absolute top-0 left-1/2 w-1/2 h-1/2 origin-bottom-left bg-gold-50 border-r border-gold-100 rotate-180 flex items-center justify-center">
                        <span class="rotate-45 text-[10px] font-black text-gold-600">₦40,000</span>
                    </div>
                    <div class="absolute top-0 left-1/2 w-1/2 h-1/2 origin-bottom-left bg-white border-r border-gold-100 rotate-270 flex items-center justify-center">
                        <span class="rotate-45 text-[10px] font-black text-gray-400">Voucher</span>
                    </div>

                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-20 h-20 bg-white rounded-full z-30 shadow-xl border border-gold-100 flex items-center justify-center">
                         <img src="biyi.png" class="w-10 h-auto opacity-80" alt="Biyi">
                    </div>
                </div>

                <div class="absolute -top-4 left-1/2 -translate-x-1/2 z-40">
                    <div class="w-8 h-8 bg-gold-500 rounded-lg rotate-45 shadow-lg flex items-center justify-center">
                         <i class="fa-solid fa-caret-down text-white -rotate-45"></i>
                    </div>
                </div>
            </div>

            <button onclick="spinWheel()" class="absolute -bottom-10 bg-gray-900 text-white px-12 py-5 rounded-2xl font-black text-xs uppercase tracking-[0.3em] hover:bg-gold-600 hover:scale-105 transition-all shadow-2xl shadow-gold-200/50 z-50">
                Unlock Reward
            </button>
        </div>
    </div>
</section>

<script>
    function spinWheel() {
        const wheel = document.getElementById('biyi-wheel');
        const randomSpin = Math.floor(Math.random() * 3600) + 1440; // At least 4 full spins
        wheel.style.transform = `rotate(${randomSpin}deg)`;
    }
</script>
<?php include __DIR__."/footer.php"; ?>