
<?php include __DIR__."/header.php"; ?>
<div id="biyi-cash-overlay" class="fixed inset-0 z-[200] bg-zinc-900/40 backdrop-blur-md flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-500">
    
    <div id="camera-shutter" class="fixed inset-0 bg-white opacity-0 z-[300] pointer-events-none transition-opacity duration-150"></div>

    <div id="confetti-container" class="absolute inset-0 z-10 pointer-events-none overflow-hidden"></div>

    <div id="cash-vault" class="relative z-20 w-[90%] max-w-sm bg-white rounded-[2.5rem] shadow-2xl overflow-hidden scale-90 translate-y-10 transition-all duration-700">
        
        <div class="bg-gold-500 h-3 w-full"></div>
        
        <div class="p-8">
            <div class="text-center mb-6">
                <div class="w-16 h-16 bg-gold-50 rounded-full flex items-center justify-center mx-auto mb-4 border border-gold-100 shadow-inner">
                    <i class="fa-solid fa-check text-2xl text-gold-500"></i>
                </div>
                <h2 class="text-3xl font-black text-dark tracking-tighter uppercase">Reward Unlocked</h2>
                <p class="text-[10px] font-black tracking-[0.2em] text-gray-400 uppercase mt-1">Transaction Success</p>
            </div>

            <div class="bg-gray-50 rounded-3xl p-6 text-center border border-gray-100 mb-8 relative overflow-hidden">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-gold-500/10 rounded-full blur-xl"></div>
                <p class="text-[10px] font-bold text-gray-400 uppercase mb-2">Total Value</p>
                <h3 class="text-4xl font-black text-green-600 tracking-tighter">₦40,000<span class="text-lg">.00</span></h3>
                <span class="inline-block mt-3 bg-white border border-gray-200 text-gray-500 text-[9px] font-black uppercase tracking-widest px-3 py-1 rounded-full shadow-sm">
                    Liquid Cash Token
                </span>
            </div>

            <div class="space-y-3 mb-8 border-t border-gray-100 pt-6 text-left">
                <div class="flex justify-between items-center">
                    <span class="text-[10px] font-black text-gray-400 uppercase">Reference</span>
                    <span class="text-xs font-bold text-dark font-mono">BY-WIN-9921</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] font-black text-gray-400 uppercase">Reward For</span>
                    <span class="text-xs font-bold text-dark italic">Verified Referral</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] font-black text-gray-400 uppercase">Deductions</span>
                    <span class="text-[10px] font-black text-gold-600 uppercase">Zero Excess</span>
                </div>
            </div>

            <div class="space-y-3">
                <button onclick="snapAndClaim()" class="w-full bg-dark text-white py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-gold-600 transition-all shadow-xl flex items-center justify-center gap-2 group">
                    <i class="fa-solid fa-camera group-hover:scale-110 transition-transform"></i> Snap Receipt
                </button>
                <a href="https://wa.me/2348000000000?text=Here%20is%20my%20snap!%20I%20just%20unlocked%20my%20₦40,000%20Win%20Token.%20Ref:%20BY-WIN-9921" class="w-full bg-white border-2 border-green-500 text-green-600 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest flex items-center justify-center gap-2 hover:bg-green-500 hover:text-white transition-all">
                    <i class="fa-brands fa-whatsapp text-lg"></i> Claim via WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<div class="min-h-screen bg-gray-50 flex items-center justify-center">
    <button onclick="triggerCashReveal()" class="bg-gold-500 text-white px-10 py-5 rounded-2xl font-black text-xs uppercase tracking-[0.2em] shadow-2xl shadow-gold-200 hover:scale-105 transition-all">
        Simulate Win
    </button>
</div>

<style>
/* Confetti Animation */
.confetti-piece {
    position: absolute;
    width: 8px;
    height: 16px;
    background: #D4AF37;
    top: -20px;
    opacity: 0;
}
@keyframes fall {
    0% { opacity: 1; transform: translateY(0) rotate(0deg); }
    100% { opacity: 0; transform: translateY(100vh) rotate(720deg); }
}
</style>

<script>
function triggerCashReveal() {
    const overlay = document.getElementById('biyi-cash-overlay');
    const vault = document.getElementById('cash-vault');
    
    // 1. Show Overlay
    overlay.classList.remove('opacity-0', 'pointer-events-none');
    
    // 2. Animate Vault Card up
    setTimeout(() => {
        vault.classList.remove('scale-90', 'translate-y-10');
        vault.classList.add('scale-100', 'translate-y-0');
        
        // 3. Fire Confetti
        fireConfetti();
        
        // Vibrate if on mobile
        if(navigator.vibrate) navigator.vibrate([100, 50, 100]);
    }, 100);
}

function fireConfetti() {
    const container = document.getElementById('confetti-container');
    container.innerHTML = ''; // Clear old confetti
    
    const colors = ['#D4AF37', '#F3E5AB', '#FFFFFF']; // Gold, Champagne, White
    
    for (let i = 0; i < 50; i++) {
        let piece = document.createElement('div');
        piece.className = 'confetti-piece rounded-sm';
        piece.style.left = Math.random() * 100 + 'vw';
        piece.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        piece.style.animation = `fall ${Math.random() * 2 + 1.5}s linear forwards`;
        piece.style.animationDelay = Math.random() * 0.5 + 's';
        
        container.appendChild(piece);
    }
}

function snapAndClaim() {
    const shutter = document.getElementById('camera-shutter');
    
    // Flash Effect
    shutter.style.opacity = '1';
    
    // Play Shutter Sound (Optional, requires user interaction first usually)
    try {
        new Audio('https://www.soundjay.com/mechanical/camera-shutter-click-01.mp3').play();
    } catch(e) {}

    setTimeout(() => {
        shutter.style.opacity = '0';
        
        // Change button text to show success
        const snapBtn = event.currentTarget;
        snapBtn.innerHTML = '<i class="fa-solid fa-check"></i> Saved to Gallery';
        snapBtn.classList.replace('bg-dark', 'bg-green-600');
        
    }, 150);
}
</script>
<?php include __DIR__."/footer.php"; ?>