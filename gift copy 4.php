
<?php include __DIR__."/header.php"; ?>
<div class="bg-[#FDFCF0] min-h-screen font-sans text-gray-900 overflow-x-hidden selection:bg-gold-200">

    <nav class="sticky top-0 z-[100] bg-white/80 backdrop-blur-2xl border-b border-gold-100 px-6 py-4 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <img src="biyi.png" alt="Biyi" class="h-10 w-auto">
            <span class="h-6 w-[1px] bg-gold-200"></span>
            <span class="text-[10px] font-black uppercase tracking-[0.3em] text-gold-600">Rewards Vault</span>
        </div>
        <div class="flex items-center gap-6">
            <div class="text-right">
                <p class="text-[9px] font-black text-gray-400 uppercase">Your Balance</p>
                <p class="text-lg font-black text-gold-600">₦120,000.00</p>
            </div>
            <div class="w-12 h-12 rounded-full bg-gold-500 flex items-center justify-center text-white shadow-lg shadow-gold-200">
                <i class="fa-solid fa-wallet"></i>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-12">
        
        <div class="grid grid-cols-12 gap-12 mb-24">
            
            <div class="col-span-12 lg:col-span-5 flex flex-col items-center justify-center bg-white rounded-[4rem] p-12 border border-gold-100 shadow-xl relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-gold-400 via-gold-600 to-gold-400"></div>
                
                <h2 class="text-center font-black uppercase tracking-widest text-xs text-gray-400 mb-10">The Selection Dial</h2>
                
                <div class="relative group">
                    <div id="main-wheel" class="w-64 h-64 md:w-80 md:h-80 rounded-full border-[12px] border-white shadow-2xl relative transition-transform duration-[5s] ease-in-out" style="background: conic-gradient(#FDFCF0 0deg 90deg, #FFFFFF 90deg 180deg, #FDFCF0 180deg 270deg, #FFFFFF 270deg 360deg);">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="absolute top-10 font-black text-[10px] text-gold-600 uppercase">₦40k Cash</span>
                            <span class="absolute right-10 rotate-90 font-black text-[10px] text-gray-300 uppercase">Try Again</span>
                            <span class="absolute bottom-10 rotate-180 font-black text-[10px] text-gold-600 uppercase">Inspection</span>
                            <span class="absolute left-10 -rotate-90 font-black text-[10px] text-gray-300 uppercase">Referral</span>
                        </div>
                    </div>
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 z-20">
                        <div class="w-10 h-10 bg-gold-600 rounded-lg rotate-45 shadow-lg flex items-center justify-center">
                            <i class="fa-solid fa-caret-down text-white -rotate-45"></i>
                        </div>
                    </div>
                </div>

                <button onclick="spinAndStart()" class="mt-12 w-full bg-dark text-white py-6 rounded-3xl font-black uppercase tracking-[0.3em] text-[10px] hover:bg-gold-600 hover:scale-105 transition-all shadow-2xl shadow-gold-200">
                    Use 1 Token Spin
                </button>
                <p class="mt-6 text-[10px] font-bold text-gray-400 uppercase tracking-widest">3 Spins remaining</p>
            </div>

            <div id="vault-zone" class="col-span-12 lg:col-span-7 bg-white rounded-[4rem] border border-gold-100 p-12 flex flex-col items-center justify-center relative overflow-hidden min-h-[500px]">
                
                <div id="pop-container" class="absolute inset-0 pointer-events-none"></div>
                
                <div id="flash-effect" class="absolute inset-0 bg-white opacity-0 z-[100] pointer-events-none"></div>

                <div id="adventure-box" class="relative">
                    <div id="safe-door" class="w-56 h-56 md:w-72 md:h-72 bg-white border-8 border-gold-500 rounded-[3.5rem] shadow-2xl flex items-center justify-center relative z-20 transition-all duration-300">
                        <div class="w-20 h-20 border-8 border-gold-100 rounded-full flex items-center justify-center animate-spin-slow">
                            <div class="w-2 h-10 bg-gold-500 rounded-full"></div>
                        </div>
                    </div>

                    <div id="prize-asset" class="absolute inset-0 flex flex-col items-center justify-center opacity-0 scale-0 z-10">
                        <img id="prize-img" src="" class="w-48 h-48 object-contain drop-shadow-2xl">
                        <h3 id="prize-text" class="text-4xl font-black italic mt-4 text-dark tracking-tighter"></h3>
                    </div>
                </div>

                <div id="result-actions" class="mt-12 opacity-0 pointer-events-none text-center">
                    <p id="sub-text" class="text-gray-400 font-bold text-xs uppercase tracking-widest mb-6"></p>
                    <div class="flex gap-4">
                        <button onclick="takeSnap()" class="bg-gray-900 text-white px-8 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest flex items-center gap-2">
                            <i class="fa-solid fa-camera"></i> Snap Receipt
                        </button>
                        <a id="share-link" href="#" class="bg-[#25D366] text-white px-8 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest">Share Win</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-20">
            <h2 class="text-4xl font-black tracking-tighter text-dark mb-12">Win <span class="text-gold-500">Live</span> Feed</h2>
            <div class="columns-1 sm:columns-2 lg:columns-4 gap-6 space-y-6">
                
                <div class="break-inside-avoid bg-white p-4 rounded-3xl border border-gold-50 shadow-sm group">
                    <div class="relative h-48 rounded-2xl overflow-hidden mb-4 bg-gray-50">
                        <img src="https://images.unsplash.com/photo-1553481235-903021ed9033?auto=format&fit=crop&w=400" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity">
                        <div class="absolute top-2 right-2 bg-green-500 text-white text-[8px] font-black px-2 py-1 rounded-full">PAID OUT</div>
                    </div>
                    <p class="text-[10px] font-black uppercase text-gold-600 mb-1">@tunde_biyi</p>
                    <p class="text-sm font-bold text-dark italic">"₦40k straight to my wallet! Real vibes only."</p>
                </div>

                <div class="break-inside-avoid bg-gold-500 p-8 rounded-[2.5rem] text-white">
                    <i class="fa-solid fa-quote-left text-3xl opacity-20 mb-4"></i>
                    <p class="text-xl font-black leading-tight italic mb-8">Next winner could be you. Refer a friend and get a spin!</p>
                    <button class="w-full bg-white text-gold-600 py-3 rounded-xl font-black text-[10px] uppercase tracking-widest">Refer Now</button>
                </div>

                <div class="break-inside-avoid bg-white p-4 rounded-3xl border border-gold-50 shadow-sm">
                    <div class="relative h-32 rounded-2xl overflow-hidden mb-4 bg-gray-50 flex items-center justify-center">
                        <h2 class="text-3xl font-black text-gold-100 italic">Receipt #992</h2>
                    </div>
                    <p class="text-[10px] font-black uppercase text-gray-400 mb-1">@sharon_dx</p>
                    <p class="text-sm font-bold text-dark italic italic">Just won an inspection voucher!</p>
                </div>

                 <div class="break-inside-avoid bg-white p-4 rounded-3xl border border-gold-50 shadow-sm">
                    <div class="relative h-56 rounded-2xl overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1580519542036-c47de6196ba5?auto=format&fit=crop&w=400" class="w-full h-full object-cover">
                    </div>
                    <p class="text-[10px] font-black uppercase text-gold-600 mb-1">@bolu_dev</p>
                    <p class="text-sm font-bold text-dark italic">Cash received! Biyi Estate is the future.</p>
                </div>

            </div>
        </div>
    </main>
</div>

<style>
    @keyframes spin-slow { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
    .animate-spin-slow { animation: spin-slow 4s linear infinite; }
    
    .safe-shake { animation: shake 0.1s infinite; }
    @keyframes shake {
        0%, 100% { transform: translate(0,0) rotate(0); }
        25% { transform: translate(2px, -2px) rotate(1deg); }
        50% { transform: translate(-2px, 2px) rotate(-1deg); }
    }

    .light-pop {
        position: absolute;
        border-radius: 50%;
        border: 2px solid #D4AF37;
        animation: burst 0.8s ease-out forwards;
    }
    @keyframes burst {
        0% { transform: scale(0); opacity: 1; }
        100% { transform: scale(4); opacity: 0; }
    }
</style>

<script>
function spinAndStart() {
    const wheel = document.getElementById('main-wheel');
    const safe = document.getElementById('safe-door');
    const prizeAsset = document.getElementById('prize-asset');
    const prizeImg = document.getElementById('prize-img');
    const prizeText = document.getElementById('prize-text');
    const subText = document.getElementById('sub-text');
    const actions = document.getElementById('result-actions');
    
    // 1. Reset
    actions.style.opacity = "0";
    prizeAsset.style.opacity = "0";
    prizeAsset.style.transform = "scale(0)";

    // 2. Spin Wheel
    const spinDeg = Math.floor(Math.random() * 3600) + 1800;
    wheel.style.transform = `rotate(${spinDeg}deg)`;

    // 3. Shake Vault during spin
    setTimeout(() => {
        safe.classList.add('safe-shake');
        if(navigator.vibrate) navigator.vibrate([100, 50, 100, 50, 300]);
    }, 1000);

    // 4. THE BIG REVEAL
    setTimeout(() => {
        safe.classList.remove('safe-shake');
        safe.style.transform = "scale(0.8) translateY(100px)";
        safe.style.opacity = "0";
        
        const isWin = Math.random() > 0.5;

        if(isWin) {
            prizeImg.src = "https://cdn-icons-png.flaticon.com/512/2489/2489756.png"; // Cash
            prizeText.innerText = "₦40,000.00";
            prizeText.classList.add('text-gold-600');
            subText.innerText = "Jackpot Token Unlocked!";
            triggerLightPops();
        } else {
            prizeImg.src = "https://cdn-icons-png.flaticon.com/512/10405/10405230.png"; // Sad/Refer icon
            prizeText.innerText = "NOT YET";
            prizeText.classList.add('text-gray-400');
            subText.innerText = "Refer more to get another spin!";
        }

        prizeAsset.style.opacity = "1";
        prizeAsset.style.transform = "scale(1.2) translateY(-20px)";
        actions.style.opacity = "1";
        actions.style.pointerEvents = "auto";
    }, 5000);
}

function triggerLightPops() {
    const container = document.getElementById('pop-container');
    for(let i=0; i<10; i++) {
        setTimeout(() => {
            const pop = document.createElement('div');
            pop.className = 'light-pop';
            pop.style.left = Math.random() * 100 + '%';
            pop.style.top = Math.random() * 100 + '%';
            pop.style.width = '50px'; pop.style.height = '50px';
            container.appendChild(pop);
            setTimeout(() => pop.remove(), 800);
        }, i * 150);
    }
}

function takeSnap() {
    const flash = document.getElementById('flash-effect');
    flash.style.opacity = "1";
    setTimeout(() => flash.style.opacity = "0", 150);
    alert("Snapshot saved to Biyi Wall!");
}
</script>
<?php include __DIR__."/footer.php"; ?>