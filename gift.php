<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biyi Estate | Elite Rewards</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
<script>
tailwind.config = {
  theme: { extend: {
    colors: {
      gold:{ 50:'#fdf9ec',100:'#f9f0ce',200:'#f1df9c',300:'#e7c762',
             400:'#deac36',500:'#d4af37',600:'#b8860b',700:'#94660e' },
      dark:'#121212'
    },
    fontFamily:{ serif2:['Playfair Display','serif'] }
  }}
}
</script>
<style>
/* ── Utilities ── */
.gold-bg  { background:linear-gradient(135deg,#d4af37,#b8860b); }
.glass    { background:rgba(255,255,255,.92); backdrop-filter:blur(14px); }
.card     { background:#fff; border-radius:2rem; border:1px solid #f1df9c;
            box-shadow:0 8px 40px rgba(212,175,55,.08); }

/* ── Nav dropdown ── */
.dd-menu  { opacity:0; pointer-events:none; transform:translateY(6px);
            transition:opacity .2s,transform .2s; }
.dd-wrap:hover .dd-menu { opacity:1; pointer-events:auto; transform:translateY(0); }

/* ── Mobile menu ── */
#m-menu   { max-height:0; overflow:hidden; transition:max-height .35s ease; }
#m-menu.open { max-height:480px; }

/* ── Wheel canvas ── */
#wcanvas  { border-radius:50%; display:block;
            transition:transform 5s cubic-bezier(.15,.5,.1,1); }

/* ── Pointer bounce ── */
#wptr { animation:ptr-bob 1.8s ease-in-out infinite; }
@keyframes ptr-bob { 0%,100%{transform:translateX(-50%) translateY(0)} 50%{transform:translateX(-50%) translateY(-7px)} }

/* ── Outer ring glow ── */
.ring-glow { animation:ring-spin 10s linear infinite; }
@keyframes ring-spin { to{transform:rotate(360deg)} }

/* ── Stage card slide ── */
#stage    { transition:transform .55s cubic-bezier(.34,1.3,.64,1), opacity .45s;
            transform:translateX(60px) scale(.96); opacity:0; pointer-events:none; }
#stage.ready { transform:none; opacity:1; pointer-events:auto; }

/* ── Idle dial ── */
.dial { animation:dial-rock 3s ease-in-out infinite; transform-origin:50% 100%; }
@keyframes dial-rock { 0%,100%{transform:rotate(-22deg)} 50%{transform:rotate(22deg)} }

/* ── Prize icon bounce in ── */
#p-icon   { transform:scale(0) rotate(-15deg);
            transition:transform .6s cubic-bezier(.34,1.6,.64,1); }
#p-icon.pop { transform:scale(1) rotate(0); }

/* ── Stagger reveal ── */
.ritem    { opacity:0; transform:translateY(18px);
            transition:opacity .4s,transform .4s; }
.ritem.in { opacity:1; transform:none; }

/* ── Rays spin ── */
#p-rays   { animation:ring-spin 5s linear infinite; opacity:0; transition:opacity .3s; }
#p-rays.on{ opacity:1; }

/* ── Coin burst ── */
.coin     { position:absolute; left:50%; top:50%; font-size:20px; pointer-events:none;
            animation:coin-fly 1s ease-out forwards; opacity:0; }
@keyframes coin-fly {
  0%  { transform:translate(-50%,-50%) scale(0); opacity:1; }
  70% { opacity:1; }
  100%{ transform:translate(var(--tx),var(--ty)) scale(1.3) rotate(var(--rot)); opacity:0; }
}

/* ── Confetti ── */
#ccanvas  { position:fixed; inset:0; pointer-events:none; z-index:400; }
#flash    { position:fixed; inset:0; background:#fff; opacity:0;
            pointer-events:none; z-index:500; transition:opacity .07s; }

/* ── Modal ── */
.mwrap    { opacity:0; pointer-events:none; transition:opacity .25s; }
.mwrap.on { opacity:1; pointer-events:auto; }
.mbox     { transform:scale(.93) translateY(14px);
            transition:transform .32s cubic-bezier(.34,1.3,.64,1); }
.mwrap.on .mbox { transform:none; }

/* ── Shake ── */
.shake    { animation:shake .08s infinite; }
@keyframes shake { 0%,100%{transform:none} 33%{transform:translate(-3px,1px)} 67%{transform:translate(3px,-1px)} }

/* ── Budget bar ── */
#b-bar    { transition:width .6s ease; }

/* ── Gift list scroll ── */
.gscroll::-webkit-scrollbar      { width:4px; }
.gscroll::-webkit-scrollbar-thumb{ background:#e7c762; border-radius:2px; }

/* ── Badge pulse ── */
@keyframes bpulse { 0%,100%{box-shadow:0 0 0 0 rgba(249,115,22,.5)} 50%{box-shadow:0 0 0 8px rgba(249,115,22,0)} }
.bpulse { animation:bpulse 2s ease-in-out infinite; }

/* ── Stage idle dots ── */
.idot { animation:bounce .8s ease-in-out infinite; }
@keyframes bounce { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-6px)} }
</style>
</head>
<body class="bg-gray-50 text-dark antialiased min-h-screen">

<canvas id="ccanvas"></canvas>
<div id="flash"></div>

<!-- ══════════════════════════════════
     NAV
══════════════════════════════════ -->
<nav class="sticky top-0 z-50 glass border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-6 py-4">
    <div class="flex items-center justify-between">

      <!-- Brand -->
      <a href="#" class="flex items-center gap-3">
        <div class="w-10 h-10 gold-bg rounded-xl flex items-center justify-center text-white shadow-lg shadow-gold-200">
          <i class="fa-solid fa-house-chimney text-xl"></i>
        </div>
        <div>
          <div class="font-black text-xl leading-none tracking-tighter">
            BIYI <span class="text-gold-500">ESTATE</span>
          </div>
          <div class="text-[10px] uppercase tracking-[.2em] font-bold text-gray-400">Management</div>
        </div>
      </a>

      <!-- Desktop links -->
      <div class="hidden md:flex items-center gap-7 text-sm font-semibold">

        <div class="dd-wrap relative">
          <button class="flex items-center gap-1.5 hover:text-gold-500 transition-colors py-1">
            Find Home <i class="fa-solid fa-chevron-down text-[9px] transition-transform duration-200 dd-wrap:hover:rotate-180"></i>
          </button>
          <div class="dd-menu absolute top-full left-1/2 -translate-x-1/2 mt-3 w-52 bg-white rounded-2xl shadow-xl border border-gray-100 py-2 z-50">
            <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-gold-50 hover:text-gold-600 rounded-xl mx-1 transition-colors"><i class="fa-solid fa-building w-4 text-gold-400"></i>Apartments</a>
            <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-gold-50 hover:text-gold-600 rounded-xl mx-1 transition-colors"><i class="fa-solid fa-house w-4 text-gold-400"></i>Detached Houses</a>
            <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-gold-50 hover:text-gold-600 rounded-xl mx-1 transition-colors"><i class="fa-solid fa-map-location-dot w-4 text-gold-400"></i>Land &amp; Plots</a>
            <hr class="my-1 mx-3 border-gray-100">
            <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-gold-50 hover:text-gold-600 rounded-xl mx-1 transition-colors"><i class="fa-solid fa-magnifying-glass w-4 text-gold-400"></i>Advanced Search</a>
          </div>
        </div>

        <div class="dd-wrap relative">
          <button class="flex items-center gap-1.5 hover:text-gold-500 transition-colors py-1">
            List Property <i class="fa-solid fa-chevron-down text-[9px]"></i>
          </button>
          <div class="dd-menu absolute top-full left-1/2 -translate-x-1/2 mt-3 w-52 bg-white rounded-2xl shadow-xl border border-gray-100 py-2 z-50">
            <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-gold-50 hover:text-gold-600 rounded-xl mx-1 transition-colors"><i class="fa-solid fa-plus w-4 text-gold-400"></i>New Listing</a>
            <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-gold-50 hover:text-gold-600 rounded-xl mx-1 transition-colors"><i class="fa-solid fa-pen-to-square w-4 text-gold-400"></i>Manage Listings</a>
            <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-gold-50 hover:text-gold-600 rounded-xl mx-1 transition-colors"><i class="fa-solid fa-chart-line w-4 text-gold-400"></i>Analytics</a>
          </div>
        </div>

        <a href="#" class="text-gold-600 bg-gold-50 px-4 py-2 rounded-full hover:bg-gold-100 transition-colors">Refer &amp; Earn</a>
        <a href="/login.php" class="gold-bg text-white px-6 py-2 rounded-full hover:opacity-90 transition-opacity">Sign In</a>
      </div>

      <!-- Hamburger -->
      <button id="ham" onclick="navToggle()" class="md:hidden text-2xl text-dark">
        <i class="fa-solid fa-bars-staggered"></i>
      </button>
    </div>

    <!-- Mobile menu -->
    <div id="m-menu">
      <div class="border-t border-gray-100 mt-4 pt-3 pb-2 space-y-0.5">
        <div>
          <button onclick="mSub('find')" class="w-full flex items-center justify-between px-4 py-3 rounded-xl hover:bg-gold-50 hover:text-gold-600 font-semibold text-sm transition-colors">
            Find Home <i id="m-find-ico" class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200"></i>
          </button>
          <div id="m-find" class="hidden pl-8 space-y-0.5 pb-1">
            <a href="#" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-gold-600 rounded-lg hover:bg-gold-50"><i class="fa-solid fa-building w-4 text-gold-300"></i>Apartments</a>
            <a href="#" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-gold-600 rounded-lg hover:bg-gold-50"><i class="fa-solid fa-house w-4 text-gold-300"></i>Detached Houses</a>
            <a href="#" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-gold-600 rounded-lg hover:bg-gold-50"><i class="fa-solid fa-map-location-dot w-4 text-gold-300"></i>Land &amp; Plots</a>
          </div>
        </div>
        <div>
          <button onclick="mSub('list')" class="w-full flex items-center justify-between px-4 py-3 rounded-xl hover:bg-gold-50 hover:text-gold-600 font-semibold text-sm transition-colors">
            List Property <i id="m-list-ico" class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200"></i>
          </button>
          <div id="m-list" class="hidden pl-8 space-y-0.5 pb-1">
            <a href="#" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-gold-600 rounded-lg hover:bg-gold-50"><i class="fa-solid fa-plus w-4 text-gold-300"></i>New Listing</a>
            <a href="#" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-gold-600 rounded-lg hover:bg-gold-50"><i class="fa-solid fa-pen-to-square w-4 text-gold-300"></i>Manage Listings</a>
          </div>
        </div>
        <a href="#" class="flex px-4 py-3 rounded-xl font-semibold text-sm text-gold-600 hover:bg-gold-50 transition-colors">Refer &amp; Earn</a>
        <a href="/login.php" class="flex px-4 py-3 rounded-xl font-semibold text-sm hover:bg-gray-50 transition-colors">Sign In</a>
      </div>
    </div>
  </div>
</nav>

<!-- ══════════════════════════════════
     MAIN
══════════════════════════════════ -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

  <!-- Top row -->
  <div class="mb-8 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
    <div>
      <p class="text-[10px] font-black uppercase tracking-[.4em] text-gold-500 mb-1">Exclusive</p>
      <h1 class="font-serif2 text-4xl font-bold italic leading-none">
        Elite Rewards <span class="text-gold-500">Vault</span>
      </h1>
    </div>
    <div class="flex items-center gap-3 flex-wrap">
      <div class="card px-5 py-3 shadow-sm !rounded-2xl">
        <p class="text-[8px] font-black uppercase tracking-[.3em] text-gray-400">Vault Balance</p>
        <p class="text-lg font-black text-gold-600">₦120,000.00</p>
      </div>
      <button onclick="openBudget()"
        class="bg-white border border-gray-200 hover:border-gold-300 hover:text-gold-600 text-gray-600 px-5 py-3 rounded-2xl font-black text-[9px] uppercase tracking-widest shadow-sm transition-all flex items-center gap-2">
        <i class="fa-solid fa-gauge-high text-gold-500"></i>Budget Control
      </button>
      <button onclick="openGifts()"
        class="gold-bg text-white px-5 py-3 rounded-2xl font-black text-[9px] uppercase tracking-widest shadow-lg shadow-gold-200 hover:-translate-y-0.5 transition-all flex items-center gap-2">
        <i class="fa-solid fa-sliders"></i>Manage Gifts
      </button>
    </div>
  </div>

  <!-- 2-col -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">

    <!-- ──── LEFT: Wheel ──── -->
    <div class="card p-6 md:p-10 relative overflow-hidden">
      <div class="absolute top-0 inset-x-0 h-1 gold-bg rounded-t-[2rem]"></div>
      <p class="text-[9px] font-black uppercase tracking-[.4em] text-gray-400 text-center mb-5">Asset Selector</p>

      <!-- Tokens + free badge -->
      <div class="flex items-center justify-between mb-5">
        <div id="free-badge"
          class="bpulse text-[9px] font-black uppercase tracking-[.2em] px-4 py-1.5 rounded-full bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-md">
          🎁 1 Free Spin
        </div>
        <div id="tok-row" class="flex items-center gap-2"></div>
      </div>

      <!-- Wheel -->
      <div class="relative mx-auto aspect-square max-w-[320px] md:max-w-[360px]">

        <!-- Animated outer glow -->
        <div class="ring-glow absolute -inset-3 rounded-full pointer-events-none opacity-20"
          style="background:conic-gradient(#d4af37,#8080ff,#00c853,#ff9500,#d4af37);filter:blur(14px)"></div>

        <!-- Pointer -->
        <div id="wptr" class="absolute -top-5 left-1/2 z-30 pointer-events-none">
          <svg width="26" height="34" viewBox="0 0 26 34">
            <defs>
              <linearGradient id="pg" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#f1df9c"/>
                <stop offset="100%" stop-color="#b8860b"/>
              </linearGradient>
            </defs>
            <polygon points="13,34 0,0 26,0" fill="url(#pg)"/>
            <polygon points="13,34 0,0 26,0" fill="none" stroke="rgba(255,255,255,.5)" stroke-width="1"/>
          </svg>
        </div>

        <!-- Canvas -->
        <canvas id="wcanvas" width="420" height="420" class="w-full h-full shadow-2xl"></canvas>

        <!-- Hub -->
        <div onclick="doSpin()"
          class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20
                 w-14 h-14 gold-bg rounded-full border-4 border-white shadow-xl
                 flex items-center justify-center cursor-pointer
                 hover:scale-110 active:scale-95 transition-transform select-none">
          <i class="fa-solid fa-play text-white text-lg ml-0.5"></i>
        </div>
      </div>

      <!-- Buttons -->
      <button id="spin-btn" onclick="doSpin()"
        class="mt-8 w-full gold-bg text-white py-5 rounded-3xl font-black uppercase tracking-[.35em] text-[10px]
               shadow-lg shadow-gold-200 hover:-translate-y-0.5 active:scale-95 transition-all
               disabled:opacity-40 disabled:cursor-not-allowed disabled:translate-y-0">
        <i class="fa-solid fa-bolt mr-2"></i>Unlock Asset
      </button>
      <button onclick="openSpins()"
        class="mt-3 w-full border border-gold-200 text-gold-600 py-4 rounded-2xl font-black text-[9px] uppercase tracking-[.3em] hover:bg-gold-50 transition-all">
        <i class="fa-solid fa-plus mr-2"></i>Add More Spins
      </button>
    </div>

    <!-- ──── RIGHT: Stage ──── -->
    <div id="stage" class="card relative overflow-hidden" style="min-height:520px">
      <div class="absolute top-0 inset-x-0 h-1 gold-bg rounded-t-[2rem]"></div>

      <!-- Idle -->
      <div id="idle" class="absolute inset-0 flex flex-col items-center justify-center gap-5 p-10">
        <div class="w-36 h-36 bg-gold-50 border-2 border-gold-200 rounded-[2rem] flex items-center justify-center shadow-inner">
          <svg width="64" height="64" viewBox="0 0 64 64">
            <circle cx="32" cy="32" r="28" fill="none" stroke="#e7c762" stroke-width="3" stroke-dasharray="6 4" opacity=".6"/>
            <circle cx="32" cy="32" r="16" fill="none" stroke="#d4af37" stroke-width="2"/>
            <circle cx="32" cy="32" r="4" fill="#d4af37"/>
            <line class="dial" x1="32" y1="32" x2="32" y2="11"
                  stroke="#b8860b" stroke-width="3" stroke-linecap="round"/>
          </svg>
        </div>
        <p class="font-serif2 text-xl italic text-gray-300 text-center leading-snug">
          Spin the wheel<br>to reveal your prize
        </p>
        <div class="flex gap-2">
          <div class="idot w-2 h-2 rounded-full bg-gold-200" style="animation-delay:0s"></div>
          <div class="idot w-2 h-2 rounded-full bg-gold-300" style="animation-delay:.15s"></div>
          <div class="idot w-2 h-2 rounded-full bg-gold-400" style="animation-delay:.3s"></div>
        </div>
      </div>

      <!-- Prize reveal (hidden initially) -->
      <div id="reveal" class="absolute inset-0 flex-col items-center justify-center p-8" style="display:none">

        <!-- Burst zone -->
        <div class="relative flex-shrink-0 flex items-center justify-center" style="width:200px;height:200px">
          <!-- Rays -->
          <div id="p-rays" class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <svg id="rays-svg" width="200" height="200" viewBox="0 0 200 200"></svg>
          </div>
          <!-- Coins -->
          <div id="coins" class="absolute inset-0 overflow-visible pointer-events-none"></div>
          <!-- Icon -->
          <div id="p-icon"
            class="relative z-10 w-32 h-32 rounded-[2rem] flex items-center justify-center shadow-2xl border-2">
            <span id="p-emoji" class="text-6xl leading-none select-none"></span>
          </div>
        </div>

        <h2 id="p-name"  class="ritem font-serif2 text-5xl italic font-bold text-center mt-5 leading-none tracking-tight"></h2>
        <p  id="p-sub"   class="ritem text-[9px] font-black uppercase tracking-[.4em] text-gray-400 mt-2 text-center"></p>
        <div id="p-badge" class="ritem mt-4"></div>

        <div id="p-actions" class="ritem flex gap-3 w-full mt-7">
          <button onclick="doSnap()"
            class="flex-1 bg-dark text-white py-4 rounded-2xl font-black text-[9px] uppercase tracking-widest flex items-center justify-center gap-2 hover:bg-gray-800 transition-all">
            <i class="fa-solid fa-camera"></i>Snap
          </button>
          <a id="wa-btn" href="#"
            class="flex-1 bg-[#25D366] text-white py-4 rounded-2xl font-black text-[9px] uppercase tracking-widest flex items-center justify-center gap-2 hover:bg-[#1da850] transition-all">
            <i class="fa-brands fa-whatsapp"></i>Claim
          </a>
        </div>

        <div id="api-wrap" class="ritem mt-4 w-full" style="display:none">
          <div id="api-msg" class="text-[9px] font-bold text-center py-2 px-4 rounded-xl"></div>
        </div>
      </div>
    </div>

  </div><!-- /grid -->

  <!-- ── Info box ── -->
  <div class="mt-8 bg-white rounded-[1.75rem] border border-blue-100 p-6 md:p-8 shadow-sm">
    <div class="flex items-start gap-4">
      <div class="w-10 h-10 bg-blue-50 border border-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
        <i class="fa-solid fa-circle-info text-blue-400"></i>
      </div>
      <div class="flex-1">
        <h3 class="font-black text-sm mb-3">How to Control Wins &amp; Prevent Over-Payout</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-xs text-gray-600">
          <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
            <p class="font-black text-dark mb-1">① Odds Weight (Manage Gifts)</p>
            <p>Each prize has an <strong>Odds</strong> number. Higher = lands more often. Set <em>Try Again → 15</em>, <em>₦40k → 1</em> to make jackpots rare. The engine picks prizes proportionally.</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
            <p class="font-black text-dark mb-1">② Daily Budget Cap</p>
            <p>Set a <strong>total daily payout cap</strong>. Once paid-out amount hits the cap, ALL winning prizes silently redirect to <em>Try Again</em>. Users see a normal spin — they just don't win.</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
            <p class="font-black text-dark mb-1">③ Server Override via req.php</p>
            <p>Every spin result is POSTed to <code class="bg-gray-200 px-1 rounded">req.php</code>. Your server can check DB quotas and return <code>{"override":"lose"}</code> to force a loss. The client always honours the server response.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>


<!-- ══════════════════════════════════
     BUDGET MODAL
══════════════════════════════════ -->
<div id="m-budget" class="mwrap fixed inset-0 z-[150] bg-black/50 backdrop-blur-sm flex items-center justify-center p-4">
  <div class="mbox card w-full max-w-md shadow-2xl">
    <div class="p-7 border-b border-gray-100 flex items-center justify-between">
      <div>
        <h2 class="font-serif2 text-2xl italic font-bold">Budget Control</h2>
        <p class="text-[9px] font-black uppercase tracking-[.3em] text-gray-400 mt-0.5">Payout Limits &amp; Win Caps</p>
      </div>
      <button onclick="closeBudget()" class="w-9 h-9 rounded-xl bg-gray-100 hover:bg-gray-200 flex items-center justify-center text-gray-500 transition-all">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
    <div class="p-7 space-y-5">

      <div>
        <label class="text-[10px] font-black uppercase tracking-widest text-gray-500 mb-2 block">Daily Payout Cap (₦)</label>
        <input id="b-cap" type="number" value="50000" min="0" step="1000"
          class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm font-black outline-none focus:border-gold-400 focus:ring-2 focus:ring-gold-100">
        <div class="mt-3">
          <div class="flex justify-between text-[10px] font-bold text-gray-400 mb-1.5">
            <span>Today's payout</span><span id="b-used-lbl">₦0 used</span>
          </div>
          <div class="w-full h-2.5 bg-gray-100 rounded-full overflow-hidden">
            <div id="b-bar" class="h-full gold-bg rounded-full" style="width:0%"></div>
          </div>
        </div>
      </div>

      <div>
        <label class="text-[10px] font-black uppercase tracking-widest text-gray-500 mb-2 block">Max Wins Per User / Day</label>
        <input id="b-maxw" type="number" value="3" min="1" max="99"
          class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm font-black outline-none focus:border-gold-400 focus:ring-2 focus:ring-gold-100">
      </div>

      <div>
        <label class="text-[10px] font-black uppercase tracking-widest text-gray-500 mb-2 block">Jackpot (₦40,000) Max Per Day</label>
        <div class="flex gap-3">
          <div class="flex-1 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 text-center">
            <p class="text-2xl font-black" id="b-jw">0</p>
            <p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">Won today</p>
          </div>
          <div class="flex-1">
            <label class="text-[9px] font-bold text-gray-400 uppercase tracking-wider block mb-1.5">Max allowed</label>
            <input id="b-jmax" type="number" value="2" min="0" max="99"
              class="w-full border border-gray-200 rounded-xl px-3 py-3 text-sm font-black outline-none focus:border-gold-400">
          </div>
        </div>
      </div>

      <div class="bg-amber-50 border border-amber-200 rounded-2xl p-4">
        <p class="text-xs font-black text-amber-700 mb-1">
          <i class="fa-solid fa-triangle-exclamation mr-1"></i>When cap is reached
        </p>
        <p class="text-xs text-amber-600">All winning prizes silently become <strong>Try Again</strong>. Users see a normal spin. No warning is shown.</p>
      </div>
    </div>
    <div class="p-6 border-t border-gray-100 flex gap-3">
      <button onclick="resetBudget()" class="flex-1 border border-gray-200 text-gray-600 py-3 rounded-2xl font-black text-[9px] uppercase tracking-widest hover:bg-gray-50 transition-all">Reset Today</button>
      <button onclick="saveBudget()" class="flex-1 gold-bg text-white py-3 rounded-2xl font-black text-[10px] uppercase tracking-[.3em] shadow-md hover:-translate-y-0.5 transition-all">
        <i class="fa-solid fa-floppy-disk mr-2"></i>Save
      </button>
    </div>
  </div>
</div>


<!-- ══════════════════════════════════
     GIFT MANAGER MODAL
══════════════════════════════════ -->
<div id="m-gifts" class="mwrap fixed inset-0 z-[150] bg-black/50 backdrop-blur-sm flex items-center justify-center p-4">
  <div class="mbox card w-full max-w-3xl max-h-[92vh] flex flex-col shadow-2xl">
    <div class="p-6 border-b border-gray-100 flex items-center justify-between flex-shrink-0">
      <div>
        <h2 class="font-serif2 text-2xl italic font-bold">Gift Manager</h2>
        <p class="text-[9px] font-black uppercase tracking-[.3em] text-gray-400 mt-0.5">Edit · Add · Delete prizes</p>
      </div>
      <div class="flex gap-2">
        <button onclick="addGift()"
          class="gold-bg text-white px-4 py-2 rounded-xl font-black text-[9px] uppercase tracking-widest flex items-center gap-2 shadow-sm hover:-translate-y-0.5 transition-all">
          <i class="fa-solid fa-plus"></i>Add Prize
        </button>
        <button onclick="closeGifts()" class="w-9 h-9 rounded-xl bg-gray-100 hover:bg-gray-200 flex items-center justify-center text-gray-500 transition-all">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
    </div>
    <!-- Headers -->
    <div class="px-5 py-2 border-b border-gray-50 flex-shrink-0 text-[8px] font-black uppercase tracking-widest text-gray-400"
         style="display:grid;grid-template-columns:24px 44px 1fr 1fr 78px 50px 40px 32px;gap:8px;align-items:center">
      <span></span><span>Icon</span><span>Name</span><span>Sub-label</span>
      <span>Tier</span><span title="Higher=more frequent">Odds↑</span><span>Color</span><span></span>
    </div>
    <div id="gift-list" class="flex-1 overflow-y-auto gscroll px-5 py-3 space-y-2"></div>
    <div class="p-5 border-t border-gray-100 flex items-center justify-between gap-4 flex-shrink-0">
      <p class="text-xs text-gray-400">
        <i class="fa-solid fa-circle-info mr-1 text-gold-400"></i>
        Higher <strong>Odds</strong> = lands more often. Changes apply live to wheel.
      </p>
      <button id="save-gifts-btn" onclick="saveGifts()"
        class="gold-bg text-white px-8 py-3 rounded-2xl font-black text-[10px] uppercase tracking-[.3em] shadow-lg hover:-translate-y-0.5 transition-all">
        <i class="fa-solid fa-floppy-disk mr-2"></i>Save &amp; Apply
      </button>
    </div>
  </div>
</div>


<!-- ══════════════════════════════════
     ADD SPINS MODAL
══════════════════════════════════ -->
<div id="m-spins" class="mwrap fixed inset-0 z-[150] bg-black/50 backdrop-blur-sm flex items-center justify-center p-4">
  <div class="mbox card w-full max-w-sm shadow-2xl">
    <div class="p-8 relative">
      <button onclick="closeSpins()" class="absolute top-5 right-5 w-9 h-9 rounded-xl bg-gray-100 hover:bg-gray-200 flex items-center justify-center text-gray-500 transition-all">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <h2 class="font-serif2 text-2xl italic font-bold mb-1">Power Up</h2>
      <p class="text-[9px] font-black uppercase tracking-[.3em] text-gray-400 mb-6">Get More Spin Tokens</p>
      <div class="space-y-3">
        <div onclick="buyPack(3)"  class="pack-row flex items-center justify-between bg-gray-50 hover:bg-gold-50 border border-gray-100 hover:border-gold-200 rounded-2xl p-4 cursor-pointer transition-all group">
          <div class="flex items-center gap-3"><span class="text-2xl">⚡</span><div><p class="font-black text-sm">Starter Pack</p><p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">3 Spins</p></div></div>
          <span class="font-black text-gold-600 group-hover:scale-110 transition-transform">₦500</span>
        </div>
        <div onclick="buyPack(7)"  class="pack-row flex items-center justify-between bg-gray-50 hover:bg-gold-50 border border-gray-100 hover:border-gold-200 rounded-2xl p-4 cursor-pointer transition-all group">
          <div class="flex items-center gap-3"><span class="text-2xl">🔥</span><div><p class="font-black text-sm">Hot Pack</p><p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">7 Spins</p></div></div>
          <span class="font-black text-gold-600 group-hover:scale-110 transition-transform">₦1,000</span>
        </div>
        <div onclick="buyPack(15)" class="pack-row flex items-center justify-between bg-gray-50 hover:bg-gold-50 border border-gray-100 hover:border-gold-200 rounded-2xl p-4 cursor-pointer transition-all group">
          <div class="flex items-center gap-3"><span class="text-2xl">💎</span><div><p class="font-black text-sm">Elite Pack</p><p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">15 Spins</p></div></div>
          <span class="font-black text-gold-600 group-hover:scale-110 transition-transform">₦2,000</span>
        </div>
        <div onclick="buyPack(50)" class="pack-row flex items-center justify-between bg-gray-50 hover:bg-gold-50 border border-gray-100 hover:border-gold-200 rounded-2xl p-4 cursor-pointer transition-all group">
          <div class="flex items-center gap-3"><span class="text-2xl">👑</span><div><p class="font-black text-sm">Crown Pack</p><p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">50 Spins · Best Value</p></div></div>
          <span class="font-black text-gold-600 group-hover:scale-110 transition-transform">₦5,000</span>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- ══════════════════════════════════
     JAVASCRIPT
══════════════════════════════════ -->
<script>
/* ─────────────────────────────────────────────────────────
   PRIZES
   The wheel canvas draws slice[i] with its CENTRE pointing
   straight UP when the canvas rotation is 0°.
   Proof: drawWheel starts at angle = -π/2 (top), each slice
   sweeps 2π/N, so slice[i] centre = -π/2 + i*(2π/N) + π/N
   which is exactly "top" when i=0.
───────────────────────────────────────────────────────── */
let PRIZES = [
  { name:'₦1,000',     emoji:'💵', sub:'CASH REWARD',          tier:'gold',     win:true,  color:'#d4af37', weight:4  },
  { name:'₦500',       emoji:'💰', sub:'CASH REWARD',          tier:'silver',   win:true,  color:'#A0A0C0', weight:5  },
  { name:'₦200 Air',   emoji:'📱', sub:'RECHARGE VOUCHER',     tier:'bronze',   win:true,  color:'#CD7F32', weight:6  },
  { name:'Try Again',  emoji:'🔄', sub:'BETTER LUCK NEXT TIME',tier:'lose',     win:false, color:'#999999', weight:12 },
  { name:'₦40,000',    emoji:'🏆', sub:'JACKPOT REWARD',       tier:'platinum', win:true,  color:'#8080FF', weight:1  },
  { name:'₦100 Air',   emoji:'📲', sub:'RECHARGE VOUCHER',     tier:'bronze',   win:true,  color:'#CD7F32', weight:6  },
  { name:'₦200',       emoji:'💴', sub:'CASH REWARD',          tier:'bronze',   win:true,  color:'#CD7F32', weight:6  },
  { name:'Free Spin!', emoji:'🎰', sub:'BONUS SPIN UNLOCKED',  tier:'gold',     win:true,  color:'#FF9500', weight:3  },
  { name:'₦100',       emoji:'💸', sub:'CASH REWARD',          tier:'bronze',   win:true,  color:'#CD7F32', weight:7  },
  { name:'Refer&Win',  emoji:'👥', sub:'GET BONUS SPINS',      tier:'lose',     win:false, color:'#999999', weight:9  },
  { name:'₦50 Air',    emoji:'⚡', sub:'RECHARGE VOUCHER',     tier:'bronze',   win:true,  color:'#CD7F32', weight:7  },
  { name:'₦50',        emoji:'🪙', sub:'CASH REWARD',          tier:'bronze',   win:true,  color:'#CD7F32', weight:8  },
];

/* Budget state */
let B = { cap:50000, used:0, maxWins:3, jMax:2, jToday:0 };
let sessionWins = 0;

/* Spin state */
let spinsLeft = 1;
let spinning  = false;
let cumDeg    = 0;   // always increases — never reset


/* ─────────────────────────────────────────────────────────
   DRAW WHEEL
   Slice i: startAngle = -π/2 + i * arc
             endAngle   = startAngle + arc
             midAngle   = startAngle + arc/2   ← this is where the label/emoji go
   At cumDeg = 0, slice[0] mid points UP (12 o'clock).
───────────────────────────────────────────────────────── */
function drawWheel() {
  const cvs = document.getElementById('wcanvas');
  const ctx  = cvs.getContext('2d');
  const S = cvs.width, cx = S/2, cy = S/2, R = S/2 - 8;
  const N = PRIZES.length;
  const arc = (2 * Math.PI) / N;
  ctx.clearRect(0, 0, S, S);

  for (let i = 0; i < N; i++) {
    const sa = -Math.PI/2 + i * arc;
    const ea = sa + arc;
    const ma = sa + arc / 2;
    const p  = PRIZES[i];

    /* Slice fill */
    ctx.beginPath();
    ctx.moveTo(cx, cy);
    ctx.arc(cx, cy, R, sa, ea);
    ctx.closePath();
    ctx.fillStyle = i % 2 === 0 ? '#FFFEF8' : '#FFFFFF';
    ctx.fill();

    /* Coloured rim */
    ctx.beginPath();
    ctx.arc(cx, cy, R, sa, ea);
    ctx.lineWidth = 9;
    ctx.strokeStyle = p.color + 'BB';
    ctx.stroke();

    /* Divider */
    ctx.beginPath();
    ctx.moveTo(cx, cy);
    ctx.lineTo(cx + R * Math.cos(sa), cy + R * Math.sin(sa));
    ctx.strokeStyle = 'rgba(0,0,0,.07)';
    ctx.lineWidth   = 1.5;
    ctx.stroke();

    /* Emoji */
    ctx.font = `${Math.max(13, R * .12)}px serif`;
    ctx.textAlign    = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText(p.emoji,
      cx + R * .73 * Math.cos(ma),
      cy + R * .73 * Math.sin(ma));

    /* Label */
    ctx.save();
    ctx.translate(cx + R * .43 * Math.cos(ma), cy + R * .43 * Math.sin(ma));
    ctx.rotate(ma + Math.PI / 2);
    ctx.font         = `bold ${Math.max(9, R * .051)}px sans-serif`;
    ctx.fillStyle    = '#555';
    ctx.textAlign    = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText(p.name, 0, 0);
    ctx.restore();
  }

  /* Hub */
  const g = ctx.createRadialGradient(cx, cy, 0, cx, cy, 30);
  g.addColorStop(0, '#fffbec'); g.addColorStop(1, '#b8860b');
  ctx.beginPath(); ctx.arc(cx, cy, 30, 0, 2*Math.PI);
  ctx.fillStyle   = g;   ctx.fill();
  ctx.strokeStyle = '#d4af37'; ctx.lineWidth = 2.5; ctx.stroke();
}


/* ─────────────────────────────────────────────────────────
   PICK PRIZE — weighted random, respects budget caps
───────────────────────────────────────────────────────── */
function pickPrize() {
  const capHit  = B.used >= B.cap;
  const userHit = sessionWins >= B.maxWins;

  /* Build eligible pool */
  let pool = PRIZES.map((p, i) => ({ i, p, w: p.weight || 1 }));

  if (capHit || userHit) {
    /* Force lose — only non-win prizes */
    const losers = pool.filter(x => !x.p.win);
    if (losers.length) pool = losers;
  } else {
    /* Remove jackpot if today's quota met */
    pool = pool.filter(x => !(x.p.tier === 'platinum' && B.jToday >= B.jMax));
  }

  const total = pool.reduce((s, x) => s + x.w, 0);
  let r = Math.random() * total;
  let pick = pool[pool.length - 1];
  for (const x of pool) { r -= x.w; if (r <= 0) { pick = x; break; } }
  return pick.i;
}


/* ─────────────────────────────────────────────────────────
   SPIN — accurate landing maths
   ──────────────────────────────────────────────────────
   The pointer is at 12 o'clock (the top of the wheel div).
   The canvas is rotated by CSS `transform:rotate(Tdeg)`.

   When the canvas is rotated by T degrees clockwise, the
   canvas angle that appears at the top (12 o'clock) is:
       canvas_angle_at_top = -T   (mod 360)

   We draw slice[i] with its centre at canvas angle:
       slice_mid_deg = -90 + i*(360/N) + (360/N)/2

   We want:   -T ≡ slice_mid_deg   (mod 360)
          =>   T ≡ -slice_mid_deg  (mod 360)
          =>   T ≡ (360 - (slice_mid_deg % 360 + 360) % 360) % 360

   Then we add enough full clockwise rotations so the wheel
   always spins dramatically forward.
───────────────────────────────────────────────────────── */
function doSpin() {
  if (spinning) return;
  if (spinsLeft < 1) { shake('spin-btn'); openSpins(); return; }

  spinning = true;
  spinsLeft--;
  renderTokens();
  document.getElementById('spin-btn').disabled = true;

  /* Reset stage to idle while spinning */
  showIdle();

  const idx    = pickPrize();
  const N      = PRIZES.length;
  const sDeg   = 360 / N;                          // degrees per slice

  /* Centre of slice[idx] in canvas-drawing degrees */
  const midDeg = -90 + idx * sDeg + sDeg / 2;      // e.g. slice 0 → -90+15 = -75? No:
  /* Wait — slice 0 centre = -90 + 0*sDeg + sDeg/2 = -90 + 15 = -75 for N=12.
     But we DRAW slice 0 starting at -90 so its centre is at -90 + sDeg/2.
     For N=12: sDeg=30, centre of slice 0 = -90+15 = -75° (canvas coords).
     At T=0 the top of canvas = 0° wait — let's be explicit.

     Canvas "angle 0°" = 3 o'clock (rightward), increases clockwise.
     Top of canvas = 270° (or -90°).
     Slice 0 mid in canvas coords = -90 + 0 + sDeg/2 = -90 + 15 = -75°.
     At T=0 the CSS pointer sees whatever canvas angle = 270° - 0 = 270°, not -75°.

     General: angle visible at top when CSS rotation = T:
       visible = (270 - T) mod 360   [canvas degrees]

     We want:  (270 - T) ≡ midDeg  (mod 360)
           =>  T ≡ 270 - midDeg    (mod 360)
  */
  const targetMod = ((270 - midDeg) % 360 + 360) % 360;

  /* Forward distance from current position */
  const presentMod = ((cumDeg % 360) + 360) % 360;
  let fwd = targetMod - presentMod;
  if (fwd <= 0) fwd += 360;          // always go forward

  /* Small random jitter within slice so pointer doesn't always hit dead-centre */
  const jitter = (Math.random() - .5) * sDeg * .65;

  /* At least 5 full extra rotations for drama */
  const extra = (5 + Math.floor(Math.random() * 3)) * 360;

  const finalDeg = cumDeg + extra + fwd + jitter;
  document.getElementById('wcanvas').style.transform = `rotate(${finalDeg}deg)`;
  cumDeg = finalDeg;

  if (navigator.vibrate) navigator.vibrate([30, 30, 60, 30, 120]);

  /* Reveal after spin completes (transition is 5s) */
  setTimeout(() => {
    showReveal(PRIZES[idx]);
    spinning = false;
    document.getElementById('spin-btn').disabled = false;
  }, 5300);
}


/* ─────────────────────────────────────────────────────────
   STAGE PANEL
───────────────────────────────────────────────────────── */
function showIdle() {
  document.getElementById('idle').style.display   = '';
  document.getElementById('reveal').style.display = 'none';
}

function showReveal(prize) {
  /* 1. Slide stage card in */
  document.getElementById('stage').classList.add('ready');

  /* 2. Short delay so card slide is visible first */
  setTimeout(() => {
    document.getElementById('idle').style.display   = 'none';
    document.getElementById('reveal').style.display = 'flex';
    animateReveal(prize);
    postToServer(prize);
  }, 260);
}

const TIER = {
  platinum: { bg:'#f5f0ff', border:'#c4b5fd', name:'#6d28d9' },
  gold:     { bg:'#fdf9ec', border:'#e7c762', name:'#b8860b' },
  silver:   { bg:'#f8f8f8', border:'#c0c0c0', name:'#555'    },
  bronze:   { bg:'#fff7ed', border:'#fdba74', name:'#9a3412' },
  lose:     { bg:'#f8f8f8', border:'#e0e0e0', name:'#999'    },
};

function animateReveal(prize) {
  const t = TIER[prize.tier] || TIER.bronze;

  /* Icon box */
  const icon = document.getElementById('p-icon');
  icon.style.background   = t.bg;
  icon.style.borderColor  = t.border;
  icon.style.boxShadow    = `0 20px 60px ${t.border}66`;
  icon.classList.remove('pop');
  document.getElementById('p-emoji').textContent = prize.emoji;

  /* Text */
  const pname = document.getElementById('p-name');
  pname.style.color = t.name;
  pname.textContent = prize.name;
  document.getElementById('p-sub').textContent = prize.sub;

  /* Badge */
  document.getElementById('p-badge').innerHTML = prize.win
    ? `<span class="inline-flex items-center gap-2 bg-green-50 border border-green-200 text-green-600 text-[9px] font-black uppercase tracking-[.3em] px-4 py-2 rounded-full"><i class="fa-solid fa-star"></i>Congratulations!</span>`
    : `<span class="inline-flex items-center gap-2 bg-gray-100 border border-gray-200 text-gray-500 text-[9px] font-black uppercase tracking-[.3em] px-4 py-2 rounded-full"><i class="fa-solid fa-rotate-right"></i>Better Luck Next Time</span>`;

  /* WhatsApp */
  document.getElementById('wa-btn').href =
    `https://wa.me/2348000000000?text=${encodeURIComponent(
      `🎉 I just won *${prize.name}* on Biyi Elite Rewards! ${prize.emoji}\n${prize.sub}\n\nClaiming now 🚀`)}`;

  /* Reset animation states */
  ['p-name','p-sub','p-badge','p-actions','api-wrap'].forEach(id => {
    const el = document.getElementById(id);
    if (el) el.classList.remove('in');
  });
  document.getElementById('p-rays').classList.remove('on');
  document.getElementById('coins').innerHTML = '';
  document.getElementById('api-wrap').style.display = 'none';

  /* Fire animations in sequence */
  requestAnimationFrame(() => {
    icon.classList.add('pop');                                    // 0ms  – icon bounces in
    ['p-name','p-sub','p-badge','p-actions'].forEach((id, i) => {
      setTimeout(() => document.getElementById(id)?.classList.add('in'),
                 180 + i * 110);                                  // stagger text in
    });

    if (prize.win) {
      setTimeout(() => {
        buildRays(t.border);
        document.getElementById('p-rays').classList.add('on');
        spawnCoins(prize);
      }, 200);
      if (['platinum','gold'].includes(prize.tier))
        setTimeout(() => confetti(prize.color), 380);

      /* Track budget */
      const val = prizeValue(prize.name);
      if (val > 0) { B.used += val; sessionWins++; }
      if (prize.tier === 'platinum') B.jToday++;
    }

    if (prize.name === 'Free Spin!')
      setTimeout(() => { spinsLeft++; renderTokens(); }, 1200);

    setTimeout(() => {
      document.getElementById('api-wrap').style.display = '';
      document.getElementById('api-wrap').classList.add('in');
    }, 650);
  });
}


/* ─────────────────────────────────────────────────────────
   EFFECTS
───────────────────────────────────────────────────────── */
function buildRays(color) {
  const svg = document.getElementById('rays-svg');
  svg.innerHTML = '';
  const g = document.createElementNS('http://www.w3.org/2000/svg','g');
  g.setAttribute('transform','translate(100,100)');
  for (let i = 0; i < 12; i++) {
    const r = document.createElementNS('http://www.w3.org/2000/svg','rect');
    Object.entries({ x:'-2', y:'-96', width:'4', height:'42', rx:'2',
                     fill: color + '66',
                     transform:`rotate(${i*30})` })
          .forEach(([k,v]) => r.setAttribute(k, v));
    g.appendChild(r);
  }
  svg.appendChild(g);
}

function spawnCoins(prize) {
  const c = document.getElementById('coins');
  c.innerHTML = '';
  const n = prize.tier === 'platinum' ? 20 : prize.tier === 'gold' ? 12 : 6;
  const emos = ['💰','🪙','✨','⭐','💫','🎊'];
  for (let i = 0; i < n; i++) {
    const a = (i / n) * Math.PI * 2;
    const d = 55 + Math.random() * 70;
    const s = document.createElement('span');
    s.className = 'coin';
    s.style.setProperty('--tx', `calc(-50% + ${Math.cos(a)*d}px)`);
    s.style.setProperty('--ty', `calc(-50% + ${Math.sin(a)*d}px)`);
    s.style.setProperty('--rot', `${Math.random()*360}deg`);
    s.style.animationDelay = `${Math.random()*.35}s`;
    s.textContent = emos[Math.floor(Math.random()*emos.length)];
    c.appendChild(s);
  }
}

function confetti(color = '#d4af37') {
  const cvs = document.getElementById('ccanvas');
  cvs.width = innerWidth; cvs.height = innerHeight;
  const ctx = cvs.getContext('2d');
  const pal = [color,'#f1df9c','#fff','#FFD700','#FF9500'];
  const ps  = Array.from({length:110}, () => ({
    x:Math.random()*cvs.width, y:-10,
    w:5+Math.random()*9, h:3+Math.random()*4,
    c:pal[~~(Math.random()*pal.length)],
    vx:(Math.random()-.5)*4.5, vy:2+Math.random()*5,
    rot:Math.random()*360, rv:(Math.random()-.5)*9
  }));
  let af;
  (function draw() {
    ctx.clearRect(0,0,cvs.width,cvs.height);
    let alive = false;
    ps.forEach(p => {
      if (p.y < cvs.height + 20) {
        alive = true; p.x+=p.vx; p.y+=p.vy; p.rot+=p.rv;
        ctx.save(); ctx.translate(p.x,p.y); ctx.rotate(p.rot*Math.PI/180);
        ctx.globalAlpha = Math.max(0, 1 - p.y/cvs.height);
        ctx.fillStyle = p.c; ctx.fillRect(-p.w/2,-p.h/2,p.w,p.h); ctx.restore();
      }
    });
    if (alive) af = requestAnimationFrame(draw);
    else ctx.clearRect(0,0,cvs.width,cvs.height);
  })();
}

function doSnap() {
  const f = document.getElementById('flash');
  f.style.opacity = '1';
  setTimeout(() => f.style.opacity = '0', 90);
  if (navigator.vibrate) navigator.vibrate([50,30,50]);
  setTimeout(() => alert('📸 Snap saved! Sharing to Biyi Feed…'), 110);
}

function prizeValue(name) {
  const m = name.match(/₦([\d,]+)/);
  return m ? parseInt(m[1].replace(/,/g,'')) || 0 : 0;
}

function shake(id) {
  const el = document.getElementById(id);
  el.classList.add('shake');
  setTimeout(() => el.classList.remove('shake'), 500);
}


/* ─────────────────────────────────────────────────────────
   POST TO req.php
───────────────────────────────────────────────────────── */
async function postToServer(prize) {
  const wrap = document.getElementById('api-wrap');
  const msg  = document.getElementById('api-msg');
  wrap.style.display = '';
  msg.className = 'text-[9px] font-bold text-center py-2 px-4 rounded-xl bg-gray-50 border border-gray-200 text-gray-400';
  msg.textContent = '⏳ Recording result…';
  try {
    const res  = await fetch('req.php', {
      method:'POST', headers:{'Content-Type':'application/json'},
      body: JSON.stringify({
        action:'record_spin', prize_name:prize.name, prize_sub:prize.sub,
        prize_tier:prize.tier, prize_emoji:prize.emoji,
        is_win:prize.win, prize_value:prizeValue(prize.name),
        timestamp:new Date().toISOString()
      })
    });
    const data = await res.json().catch(()=>({}));
    if (res.ok) {
      msg.className = 'text-[9px] font-bold text-center py-2 px-4 rounded-xl bg-green-50 border border-green-200 text-green-600';
      msg.textContent = `✅ ${data.message || 'Reward recorded!'}`;
    } else throw new Error(data.error || `Server error ${res.status}`);
  } catch(e) {
    msg.className = 'text-[9px] font-bold text-center py-2 px-4 rounded-xl bg-red-50 border border-red-200 text-red-500';
    msg.textContent = `⚠️ ${e.message}`;
  }
}


/* ─────────────────────────────────────────────────────────
   TOKENS UI
───────────────────────────────────────────────────────── */
function renderTokens() {
  const row  = document.getElementById('tok-row');
  const show = Math.min(spinsLeft, 5);
  row.innerHTML = '';
  for (let i = 0; i < 3; i++) {
    const d = document.createElement('div');
    d.className = i < show
      ? 'w-7 h-7 rounded-full gold-bg flex items-center justify-center shadow-md'
      : 'w-7 h-7 rounded-full bg-gray-100 flex items-center justify-center';
    d.innerHTML = `<i class="fa-solid fa-bolt text-[10px] ${i<show?'text-white':'text-gray-300'}"></i>`;
    row.appendChild(d);
  }
  if (spinsLeft > 3) {
    const s = document.createElement('span');
    s.className = 'text-[10px] font-black text-gold-600';
    s.textContent = `+${spinsLeft-3}`;
    row.appendChild(s);
  }
}


/* ─────────────────────────────────────────────────────────
   MODALS
───────────────────────────────────────────────────────── */
const openBudget  = () => { syncBudgetUI(); document.getElementById('m-budget').classList.add('on'); };
const closeBudget = () => document.getElementById('m-budget').classList.remove('on');
const openGifts   = () => { renderGiftList(); document.getElementById('m-gifts').classList.add('on'); };
const closeGifts  = () => document.getElementById('m-gifts').classList.remove('on');
const openSpins   = () => document.getElementById('m-spins').classList.add('on');
const closeSpins  = () => document.getElementById('m-spins').classList.remove('on');

['m-budget','m-gifts','m-spins'].forEach(id =>
  document.getElementById(id).addEventListener('click', function(e) {
    if (e.target === this) this.classList.remove('on');
  })
);


/* ─────────────────────────────────────────────────────────
   BUDGET PANEL
───────────────────────────────────────────────────────── */
function syncBudgetUI() {
  const pct = B.cap > 0 ? Math.min(100, (B.used / B.cap) * 100) : 0;
  const bar  = document.getElementById('b-bar');
  bar.style.width = pct + '%';
  bar.style.background = pct >= 80 ? 'linear-gradient(135deg,#ef4444,#dc2626)'
                       : pct >= 60 ? 'linear-gradient(135deg,#f97316,#ea580c)' : '';
  document.getElementById('b-used-lbl').textContent = `₦${B.used.toLocaleString()} used`;
  document.getElementById('b-jw').textContent = B.jToday;
  document.getElementById('b-cap').value  = B.cap;
  document.getElementById('b-maxw').value = B.maxWins;
  document.getElementById('b-jmax').value = B.jMax;
}

function saveBudget() {
  B.cap    = parseInt(document.getElementById('b-cap').value)  || 50000;
  B.maxWins= parseInt(document.getElementById('b-maxw').value) || 3;
  B.jMax   = parseInt(document.getElementById('b-jmax').value) || 2;
  closeBudget();
}

function resetBudget() {
  B.used = 0; B.jToday = 0; sessionWins = 0;
  syncBudgetUI();
}


/* ─────────────────────────────────────────────────────────
   GIFT MANAGER
───────────────────────────────────────────────────────── */
function renderGiftList() {
  const list = document.getElementById('gift-list');
  list.innerHTML = '';
  PRIZES.forEach((p, i) => {
    const row = document.createElement('div');
    row.style.cssText = 'display:grid;grid-template-columns:24px 44px 1fr 1fr 78px 50px 40px 32px;gap:8px;align-items:center;background:#f9fafb;border:1px solid #f1df9c22;border-radius:1rem;padding:10px 12px;transition:background .2s;';
    row.onmouseenter = () => row.style.background = '#fdf9ec';
    row.onmouseleave = () => row.style.background = '#f9fafb';
    row.innerHTML = `
      <div style="color:#ccc;text-align:center;cursor:grab;font-size:13px;"><i class="fa-solid fa-grip-vertical"></i></div>
      <input type="text" value="${p.emoji}"
        style="text-align:center;font-size:22px;background:#fff;border:1px solid #e7c762;border-radius:.75rem;padding:4px;outline:none;width:100%"
        onchange="PRIZES[${i}].emoji=this.value;drawWheel()">
      <input type="text" value="${p.name}" placeholder="Name"
        style="background:#fff;border:1px solid #e7e7e7;border-radius:.75rem;padding:7px 10px;font-weight:700;font-size:.85rem;outline:none;width:100%"
        onchange="PRIZES[${i}].name=this.value;drawWheel()">
      <input type="text" value="${p.sub}" placeholder="Sub label"
        style="background:#fff;border:1px solid #e7e7e7;border-radius:.75rem;padding:7px 10px;font-size:.75rem;color:#888;outline:none;width:100%"
        onchange="PRIZES[${i}].sub=this.value">
      <select style="background:#fff;border:1px solid #e7e7e7;border-radius:.75rem;padding:7px 6px;font-size:.75rem;font-weight:700;outline:none;width:100%;cursor:pointer"
        onchange="PRIZES[${i}].tier=this.value;PRIZES[${i}].win=this.value!=='lose';drawWheel()">
        ${['platinum','gold','silver','bronze','lose'].map(t=>`<option value="${t}"${p.tier===t?' selected':''}>${t}</option>`).join('')}
      </select>
      <input type="number" value="${p.weight||1}" min="1" max="50" title="Odds weight — higher lands more often"
        style="text-align:center;background:#fff;border:1px solid #e7e7e7;border-radius:.75rem;padding:7px 4px;font-weight:900;font-size:.75rem;outline:none;width:100%"
        onchange="PRIZES[${i}].weight=parseInt(this.value)||1">
      <input type="color" value="${p.color}"
        style="width:100%;height:36px;border-radius:.75rem;border:1px solid #e7e7e7;cursor:pointer;padding:2px;background:#fff"
        onchange="PRIZES[${i}].color=this.value;drawWheel()">
      <button onclick="deleteGift(${i})"
        style="width:32px;height:36px;border-radius:.75rem;background:#fef2f2;border:1px solid #fecaca;color:#f87171;cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:12px;transition:background .2s"
        onmouseenter="this.style.background='#fee2e2'" onmouseleave="this.style.background='#fef2f2'">
        <i class="fa-solid fa-trash-can"></i>
      </button>`;
    list.appendChild(row);
  });
}

function addGift() {
  PRIZES.push({ name:'New Prize', emoji:'🎁', sub:'NEW REWARD', tier:'bronze', win:true, color:'#CD7F32', weight:5 });
  renderGiftList(); drawWheel();
  document.getElementById('gift-list').scrollTop = 99999;
}

function deleteGift(i) {
  if (PRIZES.length <= 2) { alert('Need at least 2 prizes!'); return; }
  PRIZES.splice(i, 1); renderGiftList(); drawWheel();
}

function saveGifts() {
  drawWheel(); closeGifts();
  const btn = document.getElementById('save-gifts-btn');
  const orig = btn.innerHTML;
  btn.innerHTML = '<i class="fa-solid fa-check mr-2"></i>Saved!';
  btn.style.background = '#22c55e';
  setTimeout(() => { btn.innerHTML = orig; btn.style.background = ''; }, 2000);
}

function buyPack(n) {
  spinsLeft += n; renderTokens(); closeSpins();
  const b = document.getElementById('free-badge');
  const oc = b.className;
  b.textContent = `⚡ +${n} Spins Added!`;
  b.style.background = '#22c55e'; b.style.animation = 'none';
  setTimeout(() => { b.textContent = '🎁 Spin Now!'; b.style.background = ''; b.style.animation = ''; b.className = oc; }, 2500);
}


/* ─────────────────────────────────────────────────────────
   NAV
───────────────────────────────────────────────────────── */
function navToggle() {
  const m = document.getElementById('m-menu');
  m.classList.toggle('open');
  document.getElementById('ham').querySelector('i').className =
    m.classList.contains('open') ? 'fa-solid fa-xmark' : 'fa-solid fa-bars-staggered';
}

function mSub(key) {
  const sub = document.getElementById(`m-${key}`);
  const ico = document.getElementById(`m-${key}-ico`);
  sub.classList.toggle('hidden');
  ico.style.transform = sub.classList.contains('hidden') ? '' : 'rotate(180deg)';
}


/* ─────────────────────────────────────────────────────────
   INIT
───────────────────────────────────────────────────────── */
drawWheel();
renderTokens();
</script>
</body>
</html>