
<?php include __DIR__."/header.php"; ?>
<div id="celebration-overlay" class="fixed inset-0 z-[200] bg-white/90 backdrop-blur-sm flex items-center justify-center hidden">
    
    <div id="camera-flash" class="absolute inset-0 bg-white opacity-0 z-[300] pointer-events-none"></div>

    <div class="relative text-center">
        <div id="shake-wrapper" class="relative">
            
            <div id="biyi-vault" class="w-64 h-64 bg-white border-4 border-gold-500 rounded-3xl shadow-2xl relative z-20 mx-auto flex items-center justify-center cursor-pointer overflow-visible">
                <div class="absolute inset-y-0 w-8 bg-gold-500 shadow-lg"></div>
                <div class="absolute inset-x-0 h-8 bg-gold-500 shadow-lg"></div>
                
                <div id="toy-reward" class="absolute -top-20 opacity-0 scale-0 transition-all duration-700 ease-out-back">
                    <div class="relative">
                        <div class="absolute -inset-10 bg-gold-400/30 blur-3xl animate-pulse"></div>
                        <img src="https://cdn-icons-png.flaticon.com/512/3081/3081840.png" class="w-40 h-40 relative z-10 drop-shadow-2xl" alt="Win Toy">
                        <div class="mt-4 bg-dark text-white px-6 py-2 rounded-full font-black text-xl shadow-xl">
                            ₦40,000.00
                        </div>
                    </div>
                </div>

                <div id="vault-lid" class="absolute -top-4 -left-2 w-[calc(100%+16px)] h-12 bg-white border-4 border-gold-500 shadow-xl z-30 transition-all duration-500"></div>
            </div>
        </div>

        <div id="share-zone" class="mt-20 opacity-0 translate-y-10 transition-all duration-1000">
            <h2 class="text-4xl font-black text-dark tracking-tighter mb-2">YOU WON!</h2>
            <p class="text-gray-500 font-bold mb-8 uppercase tracking-widest text-xs">Snap your win & share to the Biyi Wall</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button onclick="takeSnap()" class="bg-dark text-white px-10 py-4 rounded-2xl font-black text-xs uppercase tracking-widest flex items-center gap-3 hover:bg-gold-600 transition-all">
                    <i class="fa-solid fa-camera"></i> Snap Win
                </button>
                <button class="bg-[#25D366] text-white px-10 py-4 rounded-2xl font-black text-xs uppercase tracking-widest flex items-center gap-3">
                    <i class="fa-brands fa-whatsapp"></i> Share to Status
                </button>
            </div>
        </div>
    </div>
</div>

<div class="text-center py-10 bg-white">
    <button onclick="startSequence()" class="bg-gold-500 text-white px-12 py-6 rounded-full font-black uppercase tracking-[0.2em] shadow-2xl shadow-gold-200 hover:scale-110 transition-transform">
        Open My Gift Box
    </button>
</div>

<style>
/* Intense Shaking Animation */
@keyframes shake {
    0% { transform: translate(1px, 1px) rotate(0deg); }
    10% { transform: translate(-1px, -2px) rotate(-1deg); }
    20% { transform: translate(-3px, 0px) rotate(1deg); }
    30% { transform: translate(3px, 2px) rotate(0deg); }
    40% { transform: translate(1px, -1px) rotate(1deg); }
    50% { transform: translate(-1px, 2px) rotate(-1deg); }
    60% { transform: translate(-3px, 1px) rotate(0deg); }
    70% { transform: translate(3px, 1px) rotate(-1deg); }
    80% { transform: translate(-1px, -1px) rotate(1deg); }
    90% { transform: translate(1px, 2px) rotate(0deg); }
    100% { transform: translate(1px, -2px) rotate(-1deg); }
}

.shake-active {
    animation: shake 0.15s infinite;
}

/* Flash Animation */
@keyframes flash-out {
    0% { opacity: 1; }
    100% { opacity: 0; }
}
.camera-flash-active {
    animation: flash-out 0.8s ease-out forwards;
}
</style>

<script>
function startSequence() {
    const overlay = document.getElementById('celebration-overlay');
    const wrapper = document.getElementById('shake-wrapper');
    const lid = document.getElementById('vault-lid');
    const toy = document.getElementById('toy-reward');
    const share = document.getElementById('share-zone');

    overlay.classList.remove('hidden');

    // 1. Start Shaking
    wrapper.classList.add('shake-active');

    // 2. After 1.5 seconds, Pop!
    setTimeout(() => {
        wrapper.classList.remove('shake-active');
        
        // Lid flies off
        lid.style.transform = 'translateY(-300px) translateX(100px) rotate(45deg)';
        lid.style.opacity = '0';
        
        // Toy pops out
        toy.style.opacity = '1';
        toy.style.scale = '1';
        toy.style.top = '-160px';
        
        // Show share zone
        share.style.opacity = '1';
        share.style.transform = 'translateY(0)';
    }, 1500);
}

function takeSnap() {
    const flash = document.getElementById('camera-flash');
    flash.classList.add('camera-flash-active');
    
    // Simulate Shutter Sound
    const audio = new Audio('https://www.soundjay.com/mechanical/camera-shutter-click-01.mp3');
    audio.play();

    setTimeout(() => {
        flash.classList.remove('camera-flash-active');
        alert("Snapshot saved! Redirecting to Biyi Wall...");
    }, 800);
}
</script>
<?php include __DIR__."/footer.php"; ?>