<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biyi Estate Management | Elite Rewards</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            50: '#fdf9ec',
                            100: '#f9f0ce',
                            200: '#f1df9c',
                            300: '#e7c762',
                            400: '#deac36',
                            500: '#d4af37',
                            600: '#b8860b',
                            700: '#94660e',
                        },
                        dark: '#121212',
                    },
                    fontFamily: {
                        display: ['Playfair Display', 'serif'],
                    },
                    animation: {
                        'spin-slow': 'spin 6s linear infinite',
                        'pulse-slow': 'pulse 3s ease-in-out infinite',
                        'bounce-slow': 'bounce-y 1.5s ease-in-out infinite',
                        'glow-rotate': 'glow-rotate 8s linear infinite',
                    },
                    keyframes: {
                        'bounce-y': {
                            '0%, 100%': { transform: 'translateX(-50%) translateY(0)' },
                            '50%': { transform: 'translateX(-50%) translateY(-5px)' },
                        },
                        'glow-rotate': {
                            'from': { transform: 'rotate(0deg)' },
                            'to': { transform: 'rotate(360deg)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .gold-gradient { background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%); }
        .glass-nav { background: rgba(255,255,255,0.88); backdrop-filter: blur(14px); }
        .property-hover:hover img { transform: scale(1.1); }

        /* Wheel canvas transition */
        #wheel-canvas { transition: transform 5s cubic-bezier(0.17, 0.67, 0.12, 0.99); }

        /* Prize pop */
        .prize-pop {
            transform: scale(0);
            transition: transform 0.55s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .prize-pop.active { transform: scale(1); }

        /* Fade slide up */
        .fade-up {
            opacity: 0;
            transform: translateY(16px);
            transition: opacity 0.45s ease, transform 0.45s ease;
        }
        .fade-up.active { opacity: 1; transform: translateY(0); }

        /* Burst rays spin */
        .rays-wrap { animation: glow-rotate 4s linear infinite; }
        @keyframes glow-rotate { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

        /* Coin fly */
        .coin-fly {
            position: absolute; left: 50%; top: 50%;
            font-size: 18px; pointer-events: none;
            animation: coin-out 0.9s ease-out forwards;
            opacity: 0;
        }
        @keyframes coin-out {
            0%   { transform: translate(-50%,-50%) scale(0) rotate(0deg); opacity: 1; }
            80%  { opacity: 1; }
            100% { transform: translate(var(--tx), var(--ty)) scale(1.2) rotate(var(--rot)); opacity: 0; }
        }

        /* Safe shake */
        .shake { animation: shake 0.08s infinite; }
        @keyframes shake {
            0%, 100% { transform: translate(0,0) rotate(0deg); }
            25%  { transform: translate(-4px, 2px) rotate(-1deg); }
            75%  { transform: translate(4px, -2px) rotate(1deg); }
        }

        /* Confetti canvas */
        #confetti-canvas { position: fixed; inset: 0; pointer-events: none; z-index: 200; }

        /* Gift badge pulse */
        .gift-badge-pulse { animation: badge-pulse 2s ease-in-out infinite; }
        @keyframes badge-pulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(255,107,0,0.4); }
            50%       { box-shadow: 0 0 0 8px rgba(255,107,0,0); }
        }

        /* Scrollbar for gift list */
        .gift-scroll::-webkit-scrollbar { width: 4px; }
        .gift-scroll::-webkit-scrollbar-track { background: transparent; }
        .gift-scroll::-webkit-scrollbar-thumb { background: #e7c762; border-radius: 2px; }

        /* Wheel hub hover */
        #wheel-hub { cursor: pointer; transition: transform 0.2s; }
        #wheel-hub:hover { transform: translate(-50%, -50%) scale(1.08); }

        /* Pointer bounce */
        #wheel-pointer { animation: ptr-bounce 1.5s ease-in-out infinite; }
        @keyframes ptr-bounce {
            0%, 100% { transform: translateX(-50%) translateY(0); }
            50%       { transform: translateX(-50%) translateY(-5px); }
        }

        /* Flash */
        #snap-flash { position: fixed; inset: 0; background: white; opacity: 0; pointer-events: none; z-index: 300; transition: opacity 0.08s; }
    </style>
</head>
<body class="bg-gray-50 text-dark antialiased">

<canvas id="confetti-canvas"></canvas>
<div id="snap-flash"></div>

<!-- ===================== NAV ===================== -->
<nav class="sticky top-0 z-50 glass-nav border-b border-gray-100 px-6 py-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-gold-500 rounded-xl flex items-center justify-center text-white shadow-lg shadow-gold-200">
                <i class="fa-solid fa-house-chimney text-xl"></i>
            </div>
            <div class="flex flex-col">
                <span class="font-black text-xl leading-none tracking-tighter">BIYI <span class="text-gold-500">ESTATE</span></span>
                <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-gray-400">Management</span>
            </div>
        </div>

        <div class="hidden md:flex items-center gap-8 font-semibold text-sm">
            <a href="#" class="hover:text-gold-500 transition-colors">Find Home</a>
            <a href="#" class="hover:text-gold-500 transition-colors">List Property</a>
            <a href="#" class="text-gold-600 bg-gold-50 px-4 py-2 rounded-full">Refer & Earn</a>
            <a href="/login.php" class="bg-dark text-white px-6 py-2 rounded-full hover:bg-gold-600 transition-all">Sign In</a>
        </div>

        <button class="md:hidden text-2xl"><i class="fa-solid fa-bars-staggered"></i></button>
    </div>
</nav>

<!-- ===================== MAIN ===================== -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <!-- Page heading -->
    <div class="mb-8 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div>
            <p class="text-[10px] font-black uppercase tracking-[0.4em] text-gold-500 mb-1">Exclusive</p>
            <h1 class="font-display text-4xl font-bold italic text-dark leading-none">Elite Rewards <span class="text-gold-500">Vault</span></h1>
        </div>
        <div class="flex items-center gap-3">
            <!-- Vault balance -->
            <div class="bg-white border border-gold-100 rounded-2xl px-5 py-3 shadow-sm">
                <p class="text-[8px] font-black uppercase tracking-[0.3em] text-gray-400">Vault Balance</p>
                <p class="text-lg font-black text-gold-600">₦120,000.00</p>
            </div>
            <!-- Manage Gifts button -->
            <button onclick="openGiftMgr()"
                class="gold-gradient text-white px-5 py-3 rounded-2xl font-black text-[10px] uppercase tracking-[0.25em] shadow-lg shadow-gold-200 hover:shadow-gold-300 hover:-translate-y-0.5 transition-all flex items-center gap-2">
                <i class="fa-solid fa-sliders"></i> Manage Gifts
            </button>
        </div>
    </div>

    <!-- 2-col grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-start">

        <!-- ===== LEFT: WHEEL ===== -->
        <div class="bg-white rounded-[2.5rem] p-6 md:p-10 border border-gold-100 shadow-xl relative overflow-hidden">
            <!-- Gold top bar -->
            <div class="absolute top-0 inset-x-0 h-1 gold-gradient rounded-t-[2.5rem]"></div>

            <p class="text-[9px] font-black uppercase tracking-[0.4em] text-gray-400 text-center mb-6">Asset Selector</p>

            <!-- Free spin badge + tokens -->
            <div class="flex items-center justify-between mb-5">
                <div id="free-badge"
                    class="gift-badge-pulse bg-gradient-to-r from-orange-500 to-red-500 text-white text-[9px] font-black uppercase tracking-[0.25em] px-4 py-1.5 rounded-full shadow-md">
                    🎁 1 Free Spin
                </div>
                <div class="flex items-center gap-2" id="token-row">
                    <!-- tokens rendered by JS -->
                </div>
            </div>

            <!-- WHEEL -->
            <div class="relative w-full aspect-square max-w-[320px] md:max-w-[380px] mx-auto">
                <!-- Outer glow ring -->
                <div class="rays-wrap absolute -inset-3 rounded-full opacity-30"
                    style="background: conic-gradient(#d4af37 0deg, #8080FF 90deg, #00C853 180deg, #d4af37 360deg); filter: blur(10px);">
                </div>

                <!-- Pointer -->
                <div id="wheel-pointer" class="absolute -top-5 left-1/2 z-30">
                    <svg width="28" height="36" viewBox="0 0 28 36" fill="none">
                        <polygon points="14,36 0,0 28,0" fill="url(#pg)"/>
                        <defs>
                            <linearGradient id="pg" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#f1df9c"/>
                                <stop offset="100%" stop-color="#b8860b"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <!-- Canvas -->
                <canvas id="wheel-canvas" width="400" height="400"
                    class="w-full h-full rounded-full shadow-2xl border-4 border-gold-100">
                </canvas>

                <!-- Center hub -->
                <div id="wheel-hub" onclick="spinWheel()"
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20
                           w-14 h-14 gold-gradient rounded-full border-4 border-white shadow-xl
                           flex items-center justify-center">
                    <i class="fa-solid fa-play text-white text-lg ml-0.5"></i>
                </div>
            </div>

            <!-- Spin button -->
            <button id="spin-btn" onclick="spinWheel()"
                class="mt-8 w-full gold-gradient text-white py-5 rounded-3xl font-black uppercase tracking-[0.35em] text-[10px]
                       shadow-lg shadow-gold-200 hover:shadow-gold-400 hover:-translate-y-0.5
                       active:scale-95 transition-all disabled:opacity-40 disabled:cursor-not-allowed disabled:translate-y-0">
                <i class="fa-solid fa-bolt mr-2"></i>Unlock Asset
            </button>

            <button onclick="openModal()"
                class="mt-3 w-full border border-gold-200 text-gold-600 py-4 rounded-2xl font-black
                       text-[9px] uppercase tracking-[0.3em] hover:bg-gold-50 transition-all">
                <i class="fa-solid fa-plus mr-2"></i>Add More Spins
            </button>
        </div>

        <!-- ===== RIGHT: STAGE ===== -->
        <div class="bg-white rounded-[2.5rem] p-6 md:p-10 border border-gold-100 shadow-xl
                    min-h-[480px] flex flex-col items-center justify-center relative overflow-hidden">
            <div class="absolute top-0 inset-x-0 h-1 gold-gradient rounded-t-[2.5rem]"></div>

            <!-- Idle -->
            <div id="idle-state" class="flex flex-col items-center gap-5 transition-all duration-500">
                <div class="w-36 h-36 bg-gold-50 border-2 border-gold-200 rounded-[2.5rem] flex items-center justify-center shadow-inner">
                    <div class="w-16 h-16 border-4 border-gold-200 rounded-full animate-spin-slow relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-1.5 h-8 gold-gradient rounded-full"></div>
                        </div>
                    </div>
                </div>
                <p class="font-display text-xl italic text-gray-300">Spin to reveal your prize</p>
            </div>

            <!-- Reward reveal (hidden initially) -->
            <div id="reward-reveal" class="hidden flex-col items-center w-full">

                <!-- Burst + icon -->
                <div class="relative flex items-center justify-center" style="width:180px;height:180px">
                    <!-- Rays -->
                    <div class="rays-wrap absolute inset-0 opacity-0 transition-opacity duration-500" id="burst-rays">
                        <svg viewBox="0 0 180 180" width="180" height="180">
                            <g transform="translate(90,90)" id="rays-g">
                                <!-- rays filled by JS -->
                            </g>
                        </svg>
                    </div>

                    <!-- Coin burst -->
                    <div id="coin-burst" class="absolute inset-0 pointer-events-none overflow-visible"></div>

                    <!-- Prize icon -->
                    <div id="prize-icon"
                        class="prize-pop relative z-10 w-28 h-28 bg-gold-50 border-2 border-gold-200 rounded-[2rem]
                               flex items-center justify-center shadow-xl">
                        <span id="prize-emoji" class="text-5xl"></span>
                    </div>
                </div>

                <!-- Prize info -->
                <h2 id="prize-name" class="fade-up font-display text-5xl italic font-bold text-dark mt-5 tracking-tight text-center leading-none"></h2>
                <p id="prize-sub" class="fade-up text-[9px] font-black uppercase tracking-[0.35em] text-gray-400 mt-2"></p>
                <div id="win-label" class="fade-up mt-3"></div>

                <!-- Actions -->
                <div id="action-row" class="fade-up flex gap-3 w-full mt-8">
                    <button onclick="takeSnap()"
                        class="flex-1 bg-dark text-white py-4 rounded-2xl font-black text-[9px] uppercase tracking-widest flex items-center justify-center gap-2 hover:bg-gray-800 transition-all">
                        <i class="fa-solid fa-camera"></i> Snap
                    </button>
                    <a id="claim-btn" href="#"
                        class="flex-1 bg-[#25D366] text-white py-4 rounded-2xl font-black text-[9px] uppercase tracking-widest flex items-center justify-center gap-2 hover:bg-[#1da850] transition-all no-underline">
                        <i class="fa-brands fa-whatsapp"></i> Claim Now
                    </a>
                </div>

                <!-- API status -->
                <div id="api-status" class="mt-4 w-full hidden">
                    <div id="api-msg" class="text-[9px] font-bold text-center py-2 px-4 rounded-xl"></div>
                </div>
            </div>
        </div>

    </div><!-- /grid -->

</main><!-- /main -->


<!-- ===================== GIFT MANAGER MODAL ===================== -->
<div id="gift-mgr-modal"
    class="fixed inset-0 z-[150] bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="bg-white rounded-[2rem] w-full max-w-2xl max-h-[90vh] flex flex-col shadow-2xl
                transform scale-95 transition-transform duration-300" id="gift-mgr-inner">

        <!-- Header -->
        <div class="flex items-center justify-between p-7 border-b border-gray-100">
            <div>
                <h2 class="font-display text-2xl italic font-bold text-dark">Gift Manager</h2>
                <p class="text-[9px] font-black uppercase tracking-[0.3em] text-gray-400 mt-0.5">Control Wheel Prizes</p>
            </div>
            <div class="flex items-center gap-3">
                <button onclick="addGiftRow()"
                    class="gold-gradient text-white px-4 py-2 rounded-xl font-black text-[9px] uppercase tracking-widest flex items-center gap-2 shadow-md hover:-translate-y-0.5 transition-all">
                    <i class="fa-solid fa-plus"></i> Add Gift
                </button>
                <button onclick="closeGiftMgr()"
                    class="w-9 h-9 rounded-xl bg-gray-100 hover:bg-gray-200 flex items-center justify-center text-gray-500 transition-all">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>

        <!-- Gift list -->
        <div class="flex-1 overflow-y-auto gift-scroll p-5 space-y-3" id="gift-list">
            <!-- Rows rendered by JS -->
        </div>

        <!-- Footer -->
        <div class="p-6 border-t border-gray-100 flex items-center justify-between gap-4">
            <p class="text-xs text-gray-400 font-semibold">
                <i class="fa-solid fa-circle-info mr-1 text-gold-400"></i>
                Changes apply immediately to the wheel
            </p>
            <button onclick="saveGifts()"
                class="gold-gradient text-white px-8 py-3 rounded-2xl font-black text-[10px] uppercase tracking-[0.3em] shadow-lg hover:-translate-y-0.5 transition-all">
                <i class="fa-solid fa-floppy-disk mr-2"></i> Save & Apply
            </button>
        </div>
    </div>
</div>


<!-- ===================== ADD SPINS MODAL ===================== -->
<div id="spins-modal"
    class="fixed inset-0 z-[150] bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="bg-white rounded-[2rem] w-full max-w-sm shadow-2xl transform scale-95 transition-transform duration-300" id="spins-modal-inner">
        <div class="relative p-8">
            <button onclick="closeModal()"
                class="absolute top-5 right-5 w-9 h-9 rounded-xl bg-gray-100 hover:bg-gray-200 flex items-center justify-center text-gray-500 transition-all">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <h2 class="font-display text-2xl italic font-bold text-dark mb-1">Power Up</h2>
            <p class="text-[9px] font-black uppercase tracking-[0.3em] text-gray-400 mb-6">Get More Spin Tokens</p>

            <div class="space-y-3">
                <div onclick="buyPack(3,'₦500')"   class="pack-row flex items-center justify-between bg-gray-50 hover:bg-gold-50 border border-gray-100 hover:border-gold-200 rounded-2xl p-4 cursor-pointer transition-all">
                    <div class="flex items-center gap-3">
                        <span class="text-2xl">⚡</span>
                        <div><p class="font-black text-sm">Starter Pack</p><p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">3 Spins</p></div>
                    </div>
                    <span class="font-black text-gold-600">₦500</span>
                </div>
                <div onclick="buyPack(7,'₦1,000')" class="pack-row flex items-center justify-between bg-gray-50 hover:bg-gold-50 border border-gray-100 hover:border-gold-200 rounded-2xl p-4 cursor-pointer transition-all">
                    <div class="flex items-center gap-3">
                        <span class="text-2xl">🔥</span>
                        <div><p class="font-black text-sm">Hot Pack</p><p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">7 Spins</p></div>
                    </div>
                    <span class="font-black text-gold-600">₦1,000</span>
                </div>
                <div onclick="buyPack(15,'₦2,000')" class="pack-row flex items-center justify-between bg-gray-50 hover:bg-gold-50 border border-gray-100 hover:border-gold-200 rounded-2xl p-4 cursor-pointer transition-all">
                    <div class="flex items-center gap-3">
                        <span class="text-2xl">💎</span>
                        <div><p class="font-black text-sm">Elite Pack</p><p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">15 Spins</p></div>
                    </div>
                    <span class="font-black text-gold-600">₦2,000</span>
                </div>
                <div onclick="buyPack(50,'₦5,000')" class="pack-row flex items-center justify-between bg-gray-50 hover:bg-gold-50 border border-gray-100 hover:border-gold-200 rounded-2xl p-4 cursor-pointer transition-all">
                    <div class="flex items-center gap-3">
                        <span class="text-2xl">👑</span>
                        <div><p class="font-black text-sm">Crown Pack</p><p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">50 Spins · Best Value</p></div>
                    </div>
                    <span class="font-black text-gold-600">₦5,000</span>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
// =============================================
// DEFAULT PRIZES (editable via Gift Manager)
// =============================================
let PRIZES = [
    { name: "₦1,000",      emoji: "💵", sub: "CASH REWARD",         tier: "gold",     win: true,  color: "#d4af37", weight: 4  },
    { name: "₦500",        emoji: "💰", sub: "CASH REWARD",         tier: "silver",   win: true,  color: "#A0A0C0", weight: 5  },
    { name: "₦200 Air",    emoji: "📱", sub: "RECHARGE VOUCHER",    tier: "bronze",   win: true,  color: "#CD7F32", weight: 6  },
    { name: "Try Again",   emoji: "🔄", sub: "BETTER LUCK NEXT",    tier: "lose",     win: false, color: "#888888", weight: 10 },
    { name: "₦40,000",     emoji: "🏆", sub: "JACKPOT REWARD",      tier: "platinum", win: true,  color: "#8080FF", weight: 1  },
    { name: "₦100 Air",    emoji: "📲", sub: "RECHARGE VOUCHER",    tier: "bronze",   win: true,  color: "#CD7F32", weight: 6  },
    { name: "₦200",        emoji: "💴", sub: "CASH REWARD",         tier: "bronze",   win: true,  color: "#CD7F32", weight: 6  },
    { name: "Free Spin!",  emoji: "🎰", sub: "BONUS SPIN UNLOCKED", tier: "gold",     win: true,  color: "#FF9500", weight: 3  },
    { name: "₦100",        emoji: "💸", sub: "CASH REWARD",         tier: "bronze",   win: true,  color: "#CD7F32", weight: 7  },
    { name: "Refer & Win", emoji: "👥", sub: "GET BONUS SPINS",     tier: "lose",     win: false, color: "#888888", weight: 8  },
    { name: "₦50 Air",     emoji: "⚡", sub: "RECHARGE VOUCHER",    tier: "bronze",   win: true,  color: "#CD7F32", weight: 7  },
    { name: "₦50",         emoji: "🪙", sub: "CASH REWARD",         tier: "bronze",   win: true,  color: "#CD7F32", weight: 8  },
];

const TIER_COLORS = {
    platinum: { text: "text-purple-600 bg-purple-50 border-purple-200" },
    gold:     { text: "text-gold-600 bg-gold-50 border-gold-200" },
    silver:   { text: "text-gray-600 bg-gray-50 border-gray-200" },
    bronze:   { text: "text-orange-700 bg-orange-50 border-orange-200" },
    lose:     { text: "text-gray-400 bg-gray-50 border-gray-200" },
};

// =============================================
// STATE
// =============================================
let spinsLeft = 1;
let spinning  = false;
let currentDeg = 0;

// =============================================
// DRAW WHEEL
// =============================================
function drawWheel() {
    const canvas = document.getElementById('wheel-canvas');
    const ctx    = canvas.getContext('2d');
    const cx = canvas.width / 2, cy = canvas.height / 2;
    const R  = cx - 6;
    const n  = PRIZES.length;
    const sa = (2 * Math.PI) / n;

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    PRIZES.forEach((p, i) => {
        const start = i * sa - Math.PI / 2;
        const end   = start + sa;
        const mid   = start + sa / 2;

        // Slice bg
        ctx.beginPath();
        ctx.moveTo(cx, cy);
        ctx.arc(cx, cy, R, start, end);
        ctx.closePath();
        ctx.fillStyle = i % 2 === 0 ? '#FFFDF5' : '#FFFFFF';
        ctx.fill();

        // Accent arc
        ctx.beginPath();
        ctx.arc(cx, cy, R, start, end);
        ctx.lineWidth = 7;
        ctx.strokeStyle = p.color + '99';
        ctx.stroke();

        // Divider
        ctx.beginPath();
        ctx.moveTo(cx, cy);
        ctx.lineTo(cx + R * Math.cos(start), cy + R * Math.sin(start));
        ctx.strokeStyle = 'rgba(0,0,0,0.06)';
        ctx.lineWidth = 1;
        ctx.stroke();

        // Emoji
        const er = R * 0.72;
        ctx.font = `${R * 0.13}px serif`;
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(p.emoji, cx + er * Math.cos(mid), cy + er * Math.sin(mid));

        // Label
        ctx.save();
        ctx.translate(cx + R * 0.42 * Math.cos(mid), cy + R * 0.42 * Math.sin(mid));
        ctx.rotate(mid + Math.PI / 2);
        ctx.font = `bold ${Math.max(9, R * 0.053)}px 'DM Sans', sans-serif`;
        ctx.fillStyle = '#555';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(p.name, 0, 0);
        ctx.restore();
    });

    // Center cap
    const g = ctx.createRadialGradient(cx, cy, 0, cx, cy, 28);
    g.addColorStop(0, '#fff8e1'); g.addColorStop(1, '#b8860b');
    ctx.beginPath();
    ctx.arc(cx, cy, 28, 0, 2 * Math.PI);
    ctx.fillStyle = g; ctx.fill();
    ctx.strokeStyle = '#d4af37'; ctx.lineWidth = 2; ctx.stroke();
}

// =============================================
// TOKENS UI
// =============================================
function updateTokens() {
    const row = document.getElementById('token-row');
    const show = Math.min(spinsLeft, 5);
    row.innerHTML = '';
    for (let i = 0; i < 3; i++) {
        const div = document.createElement('div');
        div.className = i < show
            ? 'w-7 h-7 rounded-full gold-gradient flex items-center justify-center shadow-md'
            : 'w-7 h-7 rounded-full bg-gray-100 flex items-center justify-center';
        div.innerHTML = `<i class="fa-solid fa-bolt text-[10px] ${i < show ? 'text-white' : 'text-gray-300'}"></i>`;
        row.appendChild(div);
    }
    if (spinsLeft > 3) {
        const more = document.createElement('span');
        more.className = 'text-[10px] font-black text-gold-600';
        more.textContent = `+${spinsLeft - 3}`;
        row.appendChild(more);
    }
}

// =============================================
// SPIN
// =============================================
function spinWheel() {
    if (spinning) return;
    if (spinsLeft < 1) { openModal(); shakeSpinBtn(); return; }

    spinning = true;
    spinsLeft--;
    updateTokens();
    document.getElementById('spin-btn').disabled = true;
    hideReward();

    // Weighted random pick
    const totalW = PRIZES.reduce((s, p) => s + (p.weight || 1), 0);
    let r = Math.random() * totalW;
    let idx = 0;
    for (let i = 0; i < PRIZES.length; i++) {
        r -= (PRIZES[i].weight || 1);
        if (r <= 0) { idx = i; break; }
    }

    // Target angle
    const n = PRIZES.length;
    const sliceDeg = 360 / n;
    const targetAngle = 360 - idx * sliceDeg - sliceDeg / 2;
    const extra = 1440 + Math.floor(Math.random() * 720);
    const finalDeg = currentDeg + extra + ((targetAngle - currentDeg % 360 + 360) % 360);

    const canvas = document.getElementById('wheel-canvas');
    canvas.style.transform = `rotate(${finalDeg}deg)`;
    currentDeg = finalDeg;

    if (navigator.vibrate) navigator.vibrate([40, 40, 40, 40, 150]);

    setTimeout(() => {
        showPrize(PRIZES[idx]);
        spinning = false;
        document.getElementById('spin-btn').disabled = false;
    }, 5300);
}

// =============================================
// SHOW PRIZE
// =============================================
function showPrize(prize) {
    // Swap idle ↔ reveal
    document.getElementById('idle-state').style.display = 'none';
    const rev = document.getElementById('reward-reveal');
    rev.classList.remove('hidden');
    rev.style.display = 'flex';

    // Set emoji & icon style
    const icon = document.getElementById('prize-icon');
    const tierBorder = {
        platinum: 'border-purple-300 bg-purple-50',
        gold:     'border-gold-300 bg-gold-50',
        silver:   'border-gray-300 bg-gray-50',
        bronze:   'border-orange-300 bg-orange-50',
        lose:     'border-gray-200 bg-gray-50',
    }[prize.tier] || 'border-gold-200 bg-gold-50';

    icon.className = `prize-pop relative z-10 w-28 h-28 border-2 rounded-[2rem] flex items-center justify-center shadow-xl ${tierBorder}`;
    document.getElementById('prize-emoji').textContent = prize.emoji;

    // Name
    const nameEl = document.getElementById('prize-name');
    const tierTextColors = {
        platinum: 'text-purple-700',
        gold:     'text-gold-600',
        silver:   'text-gray-600',
        bronze:   'text-orange-700',
        lose:     'text-gray-400',
    };
    nameEl.className = `fade-up font-display text-5xl italic font-bold mt-5 tracking-tight text-center leading-none ${tierTextColors[prize.tier] || 'text-dark'}`;
    nameEl.textContent = prize.name;
    document.getElementById('prize-sub').textContent = prize.sub;

    // Win label
    const winLabel = document.getElementById('win-label');
    if (prize.win) {
        winLabel.innerHTML = `<span class="inline-flex items-center gap-2 bg-green-50 border border-green-200 text-green-600 text-[9px] font-black uppercase tracking-[0.3em] px-4 py-2 rounded-full">
            <i class="fa-solid fa-star"></i> Congratulations!
        </span>`;
    } else {
        winLabel.innerHTML = `<span class="inline-flex items-center gap-2 bg-gray-50 border border-gray-200 text-gray-400 text-[9px] font-black uppercase tracking-[0.3em] px-4 py-2 rounded-full">
            <i class="fa-solid fa-rotate-right"></i> Better Luck Next Time
        </span>`;
    }

    // WhatsApp link
    const msg = `🎉 I just won *${prize.name}* on Biyi Elite Rewards! ${prize.emoji}\n${prize.sub}\n\nClaiming my prize now! 🚀`;
    document.getElementById('claim-btn').href = `https://wa.me/2348000000000?text=${encodeURIComponent(msg)}`;

    // Animate in (next frame)
    requestAnimationFrame(() => {
        icon.classList.add('active');
        setTimeout(() => {
            nameEl.classList.add('active');
            document.getElementById('prize-sub').classList.add('active');
            winLabel.classList.add('active');
            document.getElementById('action-row').classList.add('active');
        }, 200);
    });

    // Rays
    if (prize.win) {
        buildRays(prize.color);
        document.getElementById('burst-rays').style.opacity = '1';
        spawnCoins(prize);
        if (prize.tier === 'platinum' || prize.tier === 'gold') triggerConfetti(prize.color);
    }

    // Free spin
    if (prize.name === 'Free Spin!') {
        setTimeout(() => { spinsLeft++; updateTokens(); }, 1200);
    }

    // ---- POST TO req.php ----
    sendWinToServer(prize);
}

// =============================================
// POST WIN TO req.php
// =============================================
async function sendWinToServer(prize) {
    const statusDiv = document.getElementById('api-status');
    const msgDiv    = document.getElementById('api-msg');
    statusDiv.classList.remove('hidden');
    msgDiv.className = 'text-[9px] font-bold text-center py-2 px-4 rounded-xl bg-gray-50 border border-gray-200 text-gray-400';
    msgDiv.textContent = '⏳ Recording result…';

    try {
        const res = await fetch('req.php', {
            method:  'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                action:     'record_spin',
                prize_name: prize.name,
                prize_sub:  prize.sub,
                prize_tier: prize.tier,
                prize_emoji:prize.emoji,
                is_win:     prize.win,
                timestamp:  new Date().toISOString(),
            })
        });

        const data = await res.json().catch(() => ({}));

        if (res.ok) {
            msgDiv.className = 'text-[9px] font-bold text-center py-2 px-4 rounded-xl bg-green-50 border border-green-200 text-green-600';
            msgDiv.textContent = `✅ ${data.message || 'Reward recorded successfully!'}`;
        } else {
            throw new Error(data.error || `Server error ${res.status}`);
        }
    } catch (err) {
        msgDiv.className = 'text-[9px] font-bold text-center py-2 px-4 rounded-xl bg-red-50 border border-red-200 text-red-500';
        msgDiv.textContent = `⚠️ ${err.message}`;
    }
}

// =============================================
// HIDE REWARD
// =============================================
function hideReward() {
    const rev = document.getElementById('reward-reveal');
    rev.style.display = 'none';
    rev.classList.add('hidden');

    const icon = document.getElementById('prize-icon');
    icon.classList.remove('active');

    ['prize-name','prize-sub','win-label','action-row'].forEach(id => {
        document.getElementById(id).classList.remove('active');
    });
    document.getElementById('burst-rays').style.opacity = '0';
    document.getElementById('coin-burst').innerHTML = '';
    document.getElementById('api-status').classList.add('hidden');

    document.getElementById('idle-state').style.display = 'flex';
}

// =============================================
// RAYS
// =============================================
function buildRays(color) {
    const g = document.getElementById('rays-g');
    g.innerHTML = '';
    for (let i = 0; i < 12; i++) {
        const rect = document.createElementNS('http://www.w3.org/2000/svg','rect');
        rect.setAttribute('x', '-2'); rect.setAttribute('y', '-88');
        rect.setAttribute('width', '4'); rect.setAttribute('height', '44');
        rect.setAttribute('rx', '2'); rect.setAttribute('fill', color + '55');
        rect.setAttribute('transform', `rotate(${i * 30})`);
        g.appendChild(rect);
    }
}

// =============================================
// COINS
// =============================================
function spawnCoins(prize) {
    const cont = document.getElementById('coin-burst');
    cont.innerHTML = '';
    const count = prize.tier === 'platinum' ? 18 : prize.tier === 'gold' ? 10 : 5;
    const emojis = ['💰','🪙','✨','⭐','💫'];
    for (let i = 0; i < count; i++) {
        const span = document.createElement('span');
        const angle = (i / count) * Math.PI * 2;
        const d = 55 + Math.random() * 60;
        span.className = 'coin-fly';
        span.style.setProperty('--tx', `calc(-50% + ${Math.cos(angle)*d}px)`);
        span.style.setProperty('--ty', `calc(-50% + ${Math.sin(angle)*d}px)`);
        span.style.setProperty('--rot', `${Math.random()*360}deg`);
        span.style.animationDelay = `${Math.random() * 0.3}s`;
        span.textContent = emojis[Math.floor(Math.random() * emojis.length)];
        cont.appendChild(span);
    }
}

// =============================================
// CONFETTI
// =============================================
function triggerConfetti(color = '#d4af37') {
    const canvas = document.getElementById('confetti-canvas');
    canvas.width  = window.innerWidth;
    canvas.height = window.innerHeight;
    const ctx = canvas.getContext('2d');
    const colors = [color,'#f1df9c','#FFFFFF','#FFD700','#FF9500'];
    const parts = Array.from({length:100}, () => ({
        x: Math.random()*canvas.width, y: -10,
        w: 5+Math.random()*8, h: 3+Math.random()*4,
        c: colors[Math.floor(Math.random()*colors.length)],
        vx:(Math.random()-.5)*4, vy:2+Math.random()*4,
        rot:Math.random()*360, rv:(Math.random()-.5)*8,
    }));
    function draw() {
        ctx.clearRect(0,0,canvas.width,canvas.height);
        let alive = false;
        parts.forEach(p => {
            if (p.y < canvas.height+20) {
                alive = true;
                p.x+=p.vx; p.y+=p.vy; p.rot+=p.rv;
                ctx.save();
                ctx.translate(p.x,p.y); ctx.rotate(p.rot*Math.PI/180);
                ctx.globalAlpha = Math.max(0, 1-p.y/canvas.height);
                ctx.fillStyle = p.c;
                ctx.fillRect(-p.w/2,-p.h/2,p.w,p.h);
                ctx.restore();
            }
        });
        if (alive) requestAnimationFrame(draw);
        else ctx.clearRect(0,0,canvas.width,canvas.height);
    }
    draw();
}

// =============================================
// SNAP
// =============================================
function takeSnap() {
    const f = document.getElementById('snap-flash');
    f.style.opacity = '1';
    setTimeout(() => f.style.opacity = '0', 90);
    if (navigator.vibrate) navigator.vibrate([50,30,50]);
    setTimeout(() => alert('📸 Snap saved! Sharing to Biyi Feed…'), 110);
}

// =============================================
// SHAKE BTN
// =============================================
function shakeSpinBtn() {
    const btn = document.getElementById('spin-btn');
    btn.classList.add('shake');
    setTimeout(() => btn.classList.remove('shake'), 500);
}

// =============================================
// SPINS MODAL
// =============================================
function openModal() {
    const m = document.getElementById('spins-modal');
    m.classList.remove('opacity-0','pointer-events-none');
    document.getElementById('spins-modal-inner').classList.remove('scale-95');
    document.getElementById('spins-modal-inner').classList.add('scale-100');
}
function closeModal() {
    const m = document.getElementById('spins-modal');
    m.classList.add('opacity-0','pointer-events-none');
    document.getElementById('spins-modal-inner').classList.add('scale-95');
    document.getElementById('spins-modal-inner').classList.remove('scale-100');
}
function buyPack(n, priceStr) {
    spinsLeft += n;
    updateTokens();
    closeModal();
    const badge = document.getElementById('free-badge');
    badge.textContent = `⚡ +${n} Spins Added!`;
    badge.className = 'text-[9px] font-black uppercase tracking-[0.25em] px-4 py-1.5 rounded-full bg-green-500 text-white shadow-md';
    setTimeout(() => {
        badge.textContent = '⚡ Spin Now!';
        badge.className = 'gift-badge-pulse bg-gradient-to-r from-orange-500 to-red-500 text-white text-[9px] font-black uppercase tracking-[0.25em] px-4 py-1.5 rounded-full shadow-md';
    }, 2500);
}

// =============================================
// GIFT MANAGER
// =============================================
function openGiftMgr() {
    renderGiftList();
    const m = document.getElementById('gift-mgr-modal');
    m.classList.remove('opacity-0','pointer-events-none');
    document.getElementById('gift-mgr-inner').classList.remove('scale-95');
    document.getElementById('gift-mgr-inner').classList.add('scale-100');
}
function closeGiftMgr() {
    const m = document.getElementById('gift-mgr-modal');
    m.classList.add('opacity-0','pointer-events-none');
    document.getElementById('gift-mgr-inner').classList.add('scale-95');
    document.getElementById('gift-mgr-inner').classList.remove('scale-100');
}

function renderGiftList() {
    const list = document.getElementById('gift-list');
    list.innerHTML = '';
    PRIZES.forEach((p, i) => {
        const row = document.createElement('div');
        row.className = 'flex items-center gap-3 bg-gray-50 border border-gray-100 rounded-2xl p-4';
        row.innerHTML = `
            <!-- Drag handle -->
            <div class="text-gray-300 cursor-grab text-sm"><i class="fa-solid fa-grip-vertical"></i></div>

            <!-- Emoji picker -->
            <input type="text" value="${p.emoji}"
                class="w-12 text-center text-2xl bg-white border border-gray-200 rounded-xl py-1 outline-none focus:border-gold-300"
                onchange="PRIZES[${i}].emoji=this.value; drawWheel()">

            <!-- Name -->
            <input type="text" value="${p.name}" placeholder="Name"
                class="flex-1 min-w-0 bg-white border border-gray-200 rounded-xl px-3 py-2 text-sm font-bold outline-none focus:border-gold-300"
                onchange="PRIZES[${i}].name=this.value; drawWheel()">

            <!-- Sub label -->
            <input type="text" value="${p.sub}" placeholder="Sub-label"
                class="flex-1 min-w-0 bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs text-gray-500 outline-none focus:border-gold-300"
                onchange="PRIZES[${i}].sub=this.value">

            <!-- Tier -->
            <select class="bg-white border border-gray-200 rounded-xl px-2 py-2 text-xs font-bold outline-none focus:border-gold-300"
                onchange="PRIZES[${i}].tier=this.value; PRIZES[${i}].win=this.value!=='lose'; drawWheel()">
                ${['platinum','gold','silver','bronze','lose'].map(t =>
                    `<option value="${t}" ${p.tier===t?'selected':''}>${t}</option>`
                ).join('')}
            </select>

            <!-- Weight -->
            <div class="flex flex-col items-center">
                <span class="text-[8px] text-gray-400 font-bold uppercase tracking-wider mb-1">Odds</span>
                <input type="number" value="${p.weight||1}" min="1" max="20"
                    class="w-14 text-center bg-white border border-gray-200 rounded-xl py-1.5 text-xs font-black outline-none focus:border-gold-300"
                    onchange="PRIZES[${i}].weight=parseInt(this.value)||1">
            </div>

            <!-- Color -->
            <input type="color" value="${p.color}"
                class="w-9 h-9 rounded-xl border border-gray-200 cursor-pointer p-0.5 bg-white"
                onchange="PRIZES[${i}].color=this.value; drawWheel()">

            <!-- Delete -->
            <button onclick="deleteGift(${i})"
                class="w-9 h-9 rounded-xl bg-red-50 border border-red-100 text-red-400 hover:bg-red-100 flex items-center justify-center transition-all text-sm">
                <i class="fa-solid fa-trash-can"></i>
            </button>
        `;
        list.appendChild(row);
    });
}

function addGiftRow() {
    PRIZES.push({ name: "New Prize", emoji: "🎁", sub: "NEW REWARD", tier: "bronze", win: true, color: "#CD7F32", weight: 5 });
    renderGiftList();
    drawWheel();
    // Scroll to bottom
    document.getElementById('gift-list').scrollTop = 9999;
}

function deleteGift(i) {
    if (PRIZES.length <= 2) { alert('Need at least 2 prizes!'); return; }
    PRIZES.splice(i, 1);
    renderGiftList();
    drawWheel();
}

function saveGifts() {
    drawWheel();
    closeGiftMgr();
    // Flash confirmation
    const btn = document.querySelector('button[onclick="openGiftMgr()"]');
    btn.classList.add('!bg-green-500');
    btn.innerHTML = '<i class="fa-solid fa-check mr-2"></i>Saved!';
    setTimeout(() => {
        btn.classList.remove('!bg-green-500');
        btn.innerHTML = '<i class="fa-solid fa-sliders mr-2"></i>Manage Gifts';
    }, 2000);
}

// =============================================
// CLOSE MODALS ON OVERLAY CLICK
// =============================================
['gift-mgr-modal','spins-modal'].forEach(id => {
    document.getElementById(id).addEventListener('click', function(e) {
        if (e.target === this) {
            if (id === 'gift-mgr-modal') closeGiftMgr();
            else closeModal();
        }
    });
});

// =============================================
// INIT
// =============================================
drawWheel();
updateTokens();
</script>

</body>
</html>