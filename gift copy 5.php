
<?php include __DIR__."/header.php"; ?>
<div class="bg-[#FCFBFA] min-h-screen text-[#1A1A1A] font-sans selection:bg-gold-200 overflow-x-hidden">

    <nav class="z-[100] bg-white/90 backdrop-blur-xl border-b border-gold-100 px-4 md:px-12 py-4 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <img src="biyi.png" alt="Biyi" class="h-8 md:h-10 w-auto">
            <div class="hidden sm:block h-6 w-[1px] bg-gold-200 mx-2"></div>
            <span class="hidden sm:block text-[9px] font-black uppercase tracking-[0.3em] text-gold-600">Elite Rewards</span>
        </div>
        <div class="flex items-center gap-4">
            <div class="bg-gold-50 px-4 py-2 rounded-2xl border border-gold-100 text-right">
                <p class="text-[8px] font-black text-gray-400 uppercase leading-none mb-1">Vault Balance</p>
                <p class="text-sm md:text-base font-black text-gold-600">₦120,000.00</p>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto p-4 md:p-12">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-start">
            
            <div class="bg-white rounded-[3rem] p-6 md:p-12 border border-gold-100 shadow-xl flex flex-col items-center relative overflow-hidden">
                <div class="absolute top-0 inset-x-0 h-1 bg-gold-500"></div>
                <h2 class="text-[10px] font-black uppercase tracking-[0.4em] text-gray-400 mb-8">Asset Selector</h2>

                <div class="relative w-full aspect-square max-w-[300px] md:max-w-[400px]">
                    <div id="asset-wheel" class="w-full h-full rounded-full border-[8px] border-white shadow-2xl relative transition-transform duration-[5s] cubic-bezier(0.15, 0, 0.15, 1) overflow-hidden" 
                         style="background: conic-gradient(from 0deg, #FDFCF0 0 60deg, #FFFFFF 60deg 120deg, #FDFCF0 120deg 180deg, #FFFFFF 180deg 240deg, #FDFCF0 240deg 300deg, #FFFFFF 300deg 360deg);">
                        
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                            <i class="fa-solid fa-sack-dollar absolute top-12 text-gold-500 text-2xl" title="Cash"></i>
                            <div class="absolute right-12 rotate-60 flex flex-col items-center">
                                <i class="fa-solid fa-clock text-gray-300 text-2xl"></i>
                            </div>
                            <i class="fa-solid fa-key absolute bottom-12 text-gold-500 text-2xl rotate-180"></i>
                            <i class="fa-solid fa-champagne-glasses absolute left-12 text-gray-300 text-2xl -rotate-90"></i>
                        </div>
                    </div>
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 z-20">
                        <div class="w-8 h-8 bg-gold-600 rounded-lg rotate-45 shadow-lg flex items-center justify-center">
                            <i class="fa-solid fa-caret-down text-white -rotate-45"></i>
                        </div>
                    </div>
                </div>

                <button onclick="spinForAsset()" id="spin-btn" class="mt-10 w-full bg-dark text-white py-5 rounded-3xl font-black uppercase tracking-[0.3em] text-[10px] hover:bg-gold-600 active:scale-95 transition-all shadow-xl shadow-gold-100">
                    Unlock Asset
                </button>
            </div>

            <div id="adventure-stage" class="bg-white rounded-[3rem] p-6 md:p-12 border border-gold-100 shadow-xl min-h-[450px] md:min-h-[600px] flex flex-col items-center justify-center relative overflow-hidden">
                
                <div id="snap-flash" class="absolute inset-0 bg-white opacity-0 z-[100] pointer-events-none"></div>

                <div id="vault-container" class="relative">
                    <div id="biyi-safe" class="w-56 h-56 md:w-72 md:h-72 bg-white border-8 border-gold-500 rounded-[3.5rem] shadow-2xl flex items-center justify-center relative z-20 transition-all duration-500">
                        <div class="w-16 h-16 border-4 border-gold-100 rounded-full flex items-center justify-center animate-spin-slow">
                            <div class="w-1 h-8 bg-gold-500 rounded-full"></div>
                        </div>
                    </div>

                    <div id="pop-reward" class="absolute inset-0 flex flex-col items-center justify-center opacity-0 scale-0 z-10">
                        <div class="relative group">
                            <div class="absolute -inset-10 bg-gold-400/20 blur-3xl animate-pulse rounded-full"></div>
                            <img id="reward-toy" src="" class="w-40 h-40 md:w-56 md:h-56 object-contain drop-shadow-2xl">
                        </div>
                        <h3 id="reward-title" class="text-3xl md:text-5xl font-black italic mt-6 text-dark tracking-tighter"></h3>
                        <p id="reward-msg" class="text-gray-400 font-bold uppercase tracking-[0.2em] text-[10px] mt-2"></p>
                    </div>
                </div>

                <div id="adventure-actions" class="mt-12 opacity-0 pointer-events-none flex flex-col sm:flex-row gap-4 w-full px-4">
                    <button onclick="takeSnap()" class="flex-1 bg-dark text-white py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest flex items-center justify-center gap-2">
                        <i class="fa-solid fa-camera"></i> Snap Adventure
                    </button>
                    <a id="whatsapp-claim" href="#" class="flex-1 bg-[#25D366] text-white py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest flex items-center justify-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> Claim Now
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>

<style>
    .animate-spin-slow { animation: spin 6s linear infinite; }
    @keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
    
    .shake-intense { animation: shake 0.1s infinite; }
    @keyframes shake {
        0%, 100% { transform: translate(0,0); }
        25% { transform: translate(3px, -3px); }
        75% { transform: translate(-3px, 3px); }
    }
</style>

<script>
const PRIZES = [
    { name: "₦40,000.00", img: "https://cdn-icons-png.flaticon.com/512/2489/2489756.png", msg: "CASH REWARD UNLOCKED", win: true },
    { name: "GOLD KEY", img: "https://cdn-icons-png.flaticon.com/512/3699/3699507.png", msg: "PREMIUM INSPECTION PASS", win: true },
    { name: "CHAMPAGNE", img: "https://cdn-icons-png.flaticon.com/512/3106/3106821.png", msg: "LUXURY CELEBRATION", win: true },
    { name: "REFER MORE", img: "https://cdn-icons-png.flaticon.com/512/10405/10405230.png", msg: "GET MORE TOKENS TO SPIN", win: false }
];

function spinForAsset() {
    const wheel = document.getElementById('asset-wheel');
    const safe = document.getElementById('biyi-safe');
    const rewardBox = document.getElementById('pop-reward');
    const actions = document.getElementById('adventure-actions');
    const btn = document.getElementById('spin-btn');

    // Reset
    btn.disabled = true;
    rewardBox.style.opacity = "0";
    rewardBox.style.transform = "scale(0)";
    actions.style.opacity = "0";
    safe.style.opacity = "1";
    safe.style.transform = "scale(1)";

    // 1. Spin the Dial
    const spinDeg = Math.floor(Math.random() * 3600) + 1440;
    wheel.style.transform = `rotate(${spinDeg}deg)`;

    // 2. Tactile Build-up
    setTimeout(() => {
        safe.classList.add('shake-intense');
        if(navigator.vibrate) navigator.vibrate([50, 50, 50, 50, 200]);
    }, 1500);

    // 3. THE REVEAL
    setTimeout(() => {
        safe.classList.remove('shake-intense');
        safe.style.transform = "scale(0.5) translateY(200px)";
        safe.style.opacity = "0";

        const choice = PRIZES[Math.floor(Math.random() * PRIZES.length)];
        
        document.getElementById('reward-toy').src = choice.img;
        document.getElementById('reward-title').innerText = choice.name;
        document.getElementById('reward-msg').innerText = choice.msg;
        
        rewardBox.style.opacity = "1";
        rewardBox.style.transform = "scale(1) translateY(-40px)";
        actions.style.opacity = "1";
        actions.style.pointerEvents = "auto";
        btn.disabled = false;

        if(choice.win) triggerConfetti();
    }, 5000);
}

function takeSnap() {
    const flash = document.getElementById('snap-flash');
    flash.style.opacity = "1";
    setTimeout(() => flash.style.opacity = "0", 150);
    alert("Win Adventure Captured! Sharing to Biyi Feed...");
}

function triggerConfetti() {
    // Basic logic for "light pops" or bubbles
    console.log("Win celebration triggered!");
}
</script>
<?php include __DIR__."/footer.php"; ?>