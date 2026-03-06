
<?php include __DIR__."/header.php"; ?>
<div class="flex flex-col items-center justify-center py-20 bg-white">
    
    <div class="relative group cursor-pointer" onclick="openBox()">
        <div class="absolute inset-0 bg-gold-400/20 blur-[80px] rounded-full scale-0 group-hover:scale-150 transition-transform duration-1000"></div>

        <div id="gift-box" class="relative w-64 h-64 transition-all duration-700 ease-in-out">
            
            <div id="box-lid" class="absolute -top-2 left-[-5%] w-[110%] h-12 bg-white border-2 border-gold-200 shadow-xl z-30 transition-all duration-500 origin-bottom">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-8 h-full bg-gold-500 shadow-inner"></div>
                <div class="absolute -top-6 left-1/2 -translate-x-1/2 flex gap-1">
                    <div class="w-8 h-8 rounded-full border-4 border-gold-500 -rotate-45"></div>
                    <div class="w-8 h-8 rounded-full border-4 border-gold-500 rotate-45"></div>
                </div>
            </div>

            <div class="absolute inset-0 bg-white border-2 border-gold-100 shadow-2xl z-20 overflow-hidden">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-8 h-full bg-gold-500 shadow-lg"></div>
                <div class="absolute top-1/2 left-0 -translate-y-1/2 w-full h-8 bg-gold-500 shadow-lg"></div>
                
                <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: url('https://www.transparenttextures.com/patterns/white-diamond.png');"></div>
            </div>

            <div id="reward-token" class="absolute inset-0 flex flex-col items-center justify-center z-10 opacity-0 scale-50 transition-all duration-700 delay-300">
                <div class="w-32 h-32 rounded-full bg-white shadow-[0_0_50px_rgba(212,175,55,0.6)] border-4 border-gold-500 flex items-center justify-center">
                    <span class="text-gold-600 font-black text-xl">₦40k</span>
                </div>
                <p class="mt-4 text-gold-600 font-black uppercase tracking-widest text-[10px]">Win Token Unlocked</p>
            </div>
        </div>

        <p id="tap-text" class="mt-12 text-center text-[10px] font-black uppercase tracking-[0.4em] text-gray-400 group-hover:text-gold-500 transition-colors">
            Tap to Unlock Vault
        </p>
    </div>

    <div id="payout-action" class="mt-10 opacity-0 pointer-events-none transition-all duration-500">
        <a href="https://wa.me/2348000000000?text=I%20just%20unlocked%20a%2040k%20Win%20Token!" 
           class="bg-[#25D366] text-white px-10 py-4 rounded-2xl font-black text-xs uppercase tracking-widest flex items-center gap-3 shadow-xl">
            <i class="fa-brands fa-whatsapp"></i> Claim via WhatsApp
        </a>
    </div>
</div>

<script>
function openBox() {
    const lid = document.getElementById('box-lid');
    const reward = document.getElementById('reward-token');
    const box = document.getElementById('gift-box');
    const text = document.getElementById('tap-text');
    const payout = document.getElementById('payout-action');

    // Lid Animation: fly up and tilt
    lid.style.transform = 'translateY(-150px) rotate(-15deg)';
    lid.style.opacity = '0';
    
    // Reward Animation: burst out
    reward.style.opacity = '1';
    reward.style.transform = 'scale(1.2) translateY(-40px)';
    
    // Box Shake
    box.classList.add('animate-bounce');
    
    // UI Updates
    text.innerHTML = "Congratulations!";
    text.style.color = "#D4AF37";
    payout.style.opacity = "1";
    payout.style.pointerEvents = "auto";
}
</script>

<style>
@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}
.animate-bounce {
    animation: bounce 0.5s ease-in-out infinite;
}
</style>
<?php include __DIR__."/footer.php"; ?>