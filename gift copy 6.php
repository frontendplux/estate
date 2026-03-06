<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biyi Elite Rewards</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
  :root {
    --gold: #C9A84C;
    --gold-light: #F0D080;
    --gold-pale: #FDF8EC;
    --gold-dark: #8B6914;
    --dark: #0D0D0D;
    --white: #FFFFFF;
    --green: #00C853;
    --red: #FF3B30;
    --blue: #007AFF;
    --purple: #AF52DE;
  }

  * { margin: 0; padding: 0; box-sizing: border-box; }

  body {
    background: #0A0A0A;
    font-family: 'DM Sans', sans-serif;
    min-height: 100vh;
    overflow-x: hidden;
    color: white;
  }

  /* Animated background */
  .bg-layer {
    position: fixed; inset: 0; z-index: 0;
    background: radial-gradient(ellipse at 20% 50%, rgba(201,168,76,0.12) 0%, transparent 60%),
                radial-gradient(ellipse at 80% 20%, rgba(175,82,222,0.08) 0%, transparent 50%),
                radial-gradient(ellipse at 60% 80%, rgba(0,200,83,0.06) 0%, transparent 40%),
                #0A0A0A;
  }

  .particles {
    position: fixed; inset: 0; z-index: 0; pointer-events: none;
  }

  .particle {
    position: absolute;
    width: 2px; height: 2px;
    background: var(--gold);
    border-radius: 50%;
    animation: float-up linear infinite;
    opacity: 0;
  }

  @keyframes float-up {
    0% { transform: translateY(100vh) scale(0); opacity: 0; }
    10% { opacity: 0.6; }
    90% { opacity: 0.3; }
    100% { transform: translateY(-10vh) scale(1.5); opacity: 0; }
  }

  /* NAV */
  nav {
    position: relative; z-index: 10;
    display: flex; justify-content: space-between; align-items: center;
    padding: 16px 24px;
    background: rgba(255,255,255,0.03);
    backdrop-filter: blur(20px);
    border-bottom: 1px solid rgba(201,168,76,0.2);
  }

  .nav-brand { display: flex; align-items: center; gap: 12px; }
  .nav-logo { 
    font-family: 'Playfair Display', serif;
    font-size: 22px; font-weight: 900;
    background: linear-gradient(135deg, var(--gold-light), var(--gold), var(--gold-dark));
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    letter-spacing: -0.5px;
  }
  .nav-badge {
    font-size: 8px; font-weight: 900; letter-spacing: 3px;
    color: var(--gold); text-transform: uppercase;
    border: 1px solid rgba(201,168,76,0.3);
    padding: 3px 8px; border-radius: 20px;
  }

  .vault-balance {
    background: linear-gradient(135deg, rgba(201,168,76,0.15), rgba(201,168,76,0.05));
    border: 1px solid rgba(201,168,76,0.3);
    padding: 8px 16px; border-radius: 20px;
    text-align: right;
  }
  .vault-label { font-size: 8px; font-weight: 900; color: rgba(255,255,255,0.4); letter-spacing: 3px; text-transform: uppercase; }
  .vault-amount { font-size: 16px; font-weight: 900; color: var(--gold-light); }

  /* MAIN LAYOUT */
  main {
    position: relative; z-index: 5;
    max-width: 1100px; margin: 0 auto;
    padding: 32px 16px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    align-items: start;
  }

  @media (max-width: 768px) {
    main { grid-template-columns: 1fr; }
  }

  /* CARD BASE */
  .card {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 32px;
    padding: 32px;
    backdrop-filter: blur(20px);
    position: relative;
    overflow: hidden;
  }

  .card::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; height: 1px;
    background: linear-gradient(90deg, transparent, var(--gold), transparent);
  }

  .card-title {
    font-size: 9px; font-weight: 900; letter-spacing: 4px;
    color: rgba(255,255,255,0.35); text-transform: uppercase;
    text-align: center; margin-bottom: 28px;
  }

  /* FREE SPIN BADGE */
  .free-spin-badge {
    position: absolute; top: 20px; right: 20px;
    background: linear-gradient(135deg, #FF6B00, #FF3B30);
    padding: 6px 14px; border-radius: 20px;
    font-size: 9px; font-weight: 900; letter-spacing: 2px;
    text-transform: uppercase; color: white;
    box-shadow: 0 4px 20px rgba(255,59,48,0.4);
    animation: pulse-badge 2s ease-in-out infinite;
  }

  @keyframes pulse-badge {
    0%, 100% { transform: scale(1); box-shadow: 0 4px 20px rgba(255,59,48,0.4); }
    50% { transform: scale(1.05); box-shadow: 0 4px 30px rgba(255,59,48,0.7); }
  }

  /* SPIN TOKENS */
  .spin-tokens {
    display: flex; align-items: center; justify-content: center; gap: 8px;
    margin-bottom: 24px;
  }
  .token {
    width: 32px; height: 32px;
    background: linear-gradient(135deg, var(--gold-light), var(--gold));
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 12px; font-weight: 900; color: var(--dark);
    box-shadow: 0 4px 12px rgba(201,168,76,0.4);
    transition: all 0.3s;
  }
  .token.used {
    background: rgba(255,255,255,0.08);
    box-shadow: none; color: rgba(255,255,255,0.2);
  }
  .token-label {
    font-size: 9px; font-weight: 700; letter-spacing: 2px;
    color: rgba(255,255,255,0.35); text-transform: uppercase;
  }

  /* WHEEL CONTAINER */
  .wheel-wrap {
    position: relative;
    width: 100%; aspect-ratio: 1;
    max-width: 340px; margin: 0 auto;
  }

  /* Outer glow ring */
  .wheel-glow {
    position: absolute; inset: -12px;
    border-radius: 50%;
    background: conic-gradient(
      rgba(201,168,76,0.3) 0deg,
      rgba(175,82,222,0.2) 90deg,
      rgba(0,200,83,0.2) 180deg,
      rgba(0,122,255,0.2) 270deg,
      rgba(201,168,76,0.3) 360deg
    );
    animation: glow-rotate 8s linear infinite;
    filter: blur(8px);
  }

  @keyframes glow-rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }

  /* Pointer */
  .wheel-pointer {
    position: absolute; top: -20px; left: 50%;
    transform: translateX(-50%);
    z-index: 30;
    filter: drop-shadow(0 4px 12px rgba(201,168,76,0.8));
    animation: pointer-bounce 1.5s ease-in-out infinite;
  }

  @keyframes pointer-bounce {
    0%, 100% { transform: translateX(-50%) translateY(0); }
    50% { transform: translateX(-50%) translateY(-4px); }
  }

  .wheel-pointer svg { width: 32px; height: 40px; }

  /* Canvas wheel */
  #wheel-canvas {
    width: 100%; height: 100%;
    border-radius: 50%;
    box-shadow: 0 0 0 6px rgba(201,168,76,0.2), 0 20px 60px rgba(0,0,0,0.5);
    transition: transform 5s cubic-bezier(0.17, 0.67, 0.12, 0.99);
  }

  /* Center hub */
  .wheel-hub {
    position: absolute; top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 56px; height: 56px;
    background: linear-gradient(135deg, var(--gold-light), var(--gold-dark));
    border-radius: 50%;
    border: 4px solid rgba(255,255,255,0.15);
    box-shadow: 0 0 0 2px rgba(201,168,76,0.3), 0 8px 24px rgba(0,0,0,0.5);
    display: flex; align-items: center; justify-content: center;
    z-index: 25;
    cursor: pointer;
  }

  .wheel-hub i { color: var(--dark); font-size: 18px; }

  /* SPIN BUTTON */
  .spin-btn {
    margin-top: 28px; width: 100%;
    background: linear-gradient(135deg, var(--gold-light), var(--gold), var(--gold-dark));
    border: none; border-radius: 20px;
    padding: 18px;
    font-family: 'DM Sans', sans-serif;
    font-size: 10px; font-weight: 900;
    letter-spacing: 4px; text-transform: uppercase;
    color: var(--dark); cursor: pointer;
    position: relative; overflow: hidden;
    box-shadow: 0 8px 32px rgba(201,168,76,0.4);
    transition: all 0.3s;
  }

  .spin-btn::before {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(135deg, transparent, rgba(255,255,255,0.2), transparent);
    transform: translateX(-100%);
    transition: transform 0.5s;
  }

  .spin-btn:hover::before { transform: translateX(100%); }
  .spin-btn:hover { transform: translateY(-2px); box-shadow: 0 12px 40px rgba(201,168,76,0.6); }
  .spin-btn:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }

  .add-spins-btn {
    margin-top: 12px; width: 100%;
    background: transparent;
    border: 1px solid rgba(201,168,76,0.3); border-radius: 16px;
    padding: 14px;
    font-family: 'DM Sans', sans-serif;
    font-size: 9px; font-weight: 900; letter-spacing: 3px; text-transform: uppercase;
    color: var(--gold); cursor: pointer;
    transition: all 0.3s;
  }
  .add-spins-btn:hover {
    background: rgba(201,168,76,0.1);
    border-color: rgba(201,168,76,0.6);
  }

  /* ===== STAGE (RIGHT PANEL) ===== */
  .stage {
    min-height: 520px;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
  }

  /* Idle state */
  .idle-state {
    display: flex; flex-direction: column; align-items: center; gap: 16px;
    transition: all 0.5s;
  }
  .idle-vault {
    width: 160px; height: 160px;
    background: linear-gradient(135deg, rgba(201,168,76,0.15), rgba(201,168,76,0.05));
    border: 2px solid rgba(201,168,76,0.3);
    border-radius: 40px;
    display: flex; align-items: center; justify-content: center;
    position: relative;
    box-shadow: 0 20px 60px rgba(201,168,76,0.1);
  }

  .vault-dial {
    width: 64px; height: 64px;
    border: 3px solid rgba(201,168,76,0.4);
    border-radius: 50%;
    position: relative;
    animation: dial-spin 4s linear infinite;
  }
  .vault-dial::after {
    content: '';
    position: absolute; top: 50%; left: 50%;
    width: 3px; height: 28px;
    background: linear-gradient(to bottom, var(--gold-light), var(--gold));
    transform: translate(-50%, -100%);
    transform-origin: 50% 100%;
    border-radius: 2px;
  }

  @keyframes dial-spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }

  .idle-text {
    font-family: 'Playfair Display', serif;
    font-size: 20px; font-style: italic;
    color: rgba(255,255,255,0.3);
    text-align: center;
  }

  /* REWARD REVEAL */
  .reward-reveal {
    display: none;
    flex-direction: column; align-items: center;
    width: 100%;
  }

  .reward-reveal.active { display: flex; }

  /* Prize burst container */
  .prize-burst {
    position: relative;
    display: flex; align-items: center; justify-content: center;
    width: 200px; height: 200px;
  }

  /* Burst rays */
  .burst-rays {
    position: absolute; inset: -40px;
    animation: burst-spin 3s linear infinite;
    opacity: 0;
    transition: opacity 0.5s;
  }

  .burst-rays.show { opacity: 1; }

  @keyframes burst-spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }

  .burst-rays svg { width: 100%; height: 100%; }

  /* Prize icon */
  .prize-icon-wrap {
    position: relative; z-index: 5;
    width: 120px; height: 120px;
    background: linear-gradient(135deg, rgba(255,255,255,0.08), rgba(255,255,255,0.02));
    border-radius: 36px;
    display: flex; align-items: center; justify-content: center;
    border: 1px solid rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    transform: scale(0);
    transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
    box-shadow: 0 20px 60px rgba(0,0,0,0.4);
  }

  .prize-icon-wrap.pop { transform: scale(1); }
  .prize-icon-wrap .prize-emoji { font-size: 52px; }
  .prize-icon-wrap .prize-img { width: 80px; height: 80px; object-fit: contain; }

  /* Prize glow based on tier */
  .prize-icon-wrap.tier-platinum { box-shadow: 0 0 0 2px rgba(220,220,255,0.4), 0 20px 60px rgba(130,130,255,0.3); }
  .prize-icon-wrap.tier-gold { box-shadow: 0 0 0 2px rgba(201,168,76,0.5), 0 20px 60px rgba(201,168,76,0.3); }
  .prize-icon-wrap.tier-silver { box-shadow: 0 0 0 2px rgba(180,180,200,0.4), 0 20px 60px rgba(180,180,200,0.2); }
  .prize-icon-wrap.tier-bronze { box-shadow: 0 0 0 2px rgba(205,127,50,0.4), 0 20px 60px rgba(205,127,50,0.2); }
  .prize-icon-wrap.tier-lose { box-shadow: 0 0 0 2px rgba(255,255,255,0.08), 0 20px 30px rgba(0,0,0,0.3); }

  /* Floating coins animation */
  .coin-burst {
    position: absolute; inset: 0;
    pointer-events: none;
    overflow: visible;
  }

  .coin-burst span {
    position: absolute;
    font-size: 20px;
    animation: coin-fly 1s ease-out forwards;
    opacity: 0;
  }

  @keyframes coin-fly {
    0% { transform: translate(0,0) scale(0) rotate(0deg); opacity: 1; }
    100% { transform: var(--fly-to) scale(1) rotate(var(--rot)); opacity: 0; }
  }

  /* Prize name */
  .prize-name {
    font-family: 'Playfair Display', serif;
    font-size: 40px; font-weight: 900; font-style: italic;
    text-align: center;
    margin-top: 20px;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.5s 0.3s;
    line-height: 1;
  }

  .prize-name.show { opacity: 1; transform: translateY(0); }

  .prize-name.tier-platinum { background: linear-gradient(135deg, #E8E8FF, #A8A8FF, #8080FF); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
  .prize-name.tier-gold { background: linear-gradient(135deg, var(--gold-light), var(--gold), var(--gold-dark)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
  .prize-name.tier-silver { background: linear-gradient(135deg, #E8E8E8, #B0B0B0, #888); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
  .prize-name.tier-bronze { background: linear-gradient(135deg, #FFD4A8, #CD7F32, #8B5E1A); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
  .prize-name.tier-lose { color: rgba(255,255,255,0.4); }

  .prize-sub {
    font-size: 9px; font-weight: 900; letter-spacing: 4px; text-transform: uppercase;
    color: rgba(255,255,255,0.3); margin-top: 8px;
    opacity: 0; transition: opacity 0.5s 0.5s;
  }
  .prize-sub.show { opacity: 1; }

  /* WIN LABEL */
  .win-label {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 6px 16px; border-radius: 20px;
    font-size: 9px; font-weight: 900; letter-spacing: 3px; text-transform: uppercase;
    margin-top: 12px;
    opacity: 0; transform: scale(0.8);
    transition: all 0.4s 0.6s;
  }

  .win-label.show { opacity: 1; transform: scale(1); }
  .win-label.win { background: linear-gradient(135deg, rgba(0,200,83,0.2), rgba(0,200,83,0.1)); border: 1px solid rgba(0,200,83,0.3); color: var(--green); }
  .win-label.try-again { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: rgba(255,255,255,0.3); }

  /* ACTION BUTTONS */
  .action-row {
    display: flex; gap: 12px; width: 100%; margin-top: 28px;
    opacity: 0; transform: translateY(20px);
    transition: all 0.5s 0.8s;
  }

  .action-row.show { opacity: 1; transform: translateY(0); }

  .btn-snap {
    flex: 1; background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1); border-radius: 16px;
    padding: 14px; color: white; cursor: pointer;
    font-family: 'DM Sans', sans-serif;
    font-size: 9px; font-weight: 900; letter-spacing: 3px; text-transform: uppercase;
    display: flex; align-items: center; justify-content: center; gap: 8px;
    transition: all 0.3s;
  }
  .btn-snap:hover { background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.2); }

  .btn-claim {
    flex: 1; background: linear-gradient(135deg, #25D366, #128C3E);
    border: none; border-radius: 16px;
    padding: 14px; color: white; cursor: pointer;
    font-family: 'DM Sans', sans-serif;
    font-size: 9px; font-weight: 900; letter-spacing: 3px; text-transform: uppercase;
    display: flex; align-items: center; justify-content: center; gap: 8px;
    transition: all 0.3s;
    box-shadow: 0 8px 24px rgba(37,211,102,0.3);
    text-decoration: none;
  }
  .btn-claim:hover { transform: translateY(-2px); box-shadow: 0 12px 32px rgba(37,211,102,0.5); }

  /* ADD SPINS MODAL */
  .modal-overlay {
    position: fixed; inset: 0; z-index: 200;
    background: rgba(0,0,0,0.85); backdrop-filter: blur(20px);
    display: flex; align-items: center; justify-content: center;
    opacity: 0; pointer-events: none;
    transition: opacity 0.3s;
  }
  .modal-overlay.open { opacity: 1; pointer-events: auto; }

  .modal {
    background: #141414;
    border: 1px solid rgba(201,168,76,0.3);
    border-radius: 32px;
    padding: 40px 32px;
    width: 100%; max-width: 400px;
    position: relative;
    transform: scale(0.9) translateY(20px);
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .modal-overlay.open .modal { transform: scale(1) translateY(0); }

  .modal::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; height: 1px;
    background: linear-gradient(90deg, transparent, var(--gold), transparent);
  }

  .modal-title {
    font-family: 'Playfair Display', serif;
    font-size: 24px; font-weight: 900; font-style: italic;
    background: linear-gradient(135deg, var(--gold-light), var(--gold));
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    text-align: center; margin-bottom: 8px;
  }
  .modal-sub { font-size: 9px; font-weight: 700; letter-spacing: 3px; color: rgba(255,255,255,0.3); text-transform: uppercase; text-align: center; margin-bottom: 28px; }

  .spin-pack {
    display: flex; align-items: center; justify-content: space-between;
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 16px; padding: 16px 20px;
    margin-bottom: 12px; cursor: pointer;
    transition: all 0.3s;
  }
  .spin-pack:hover { border-color: rgba(201,168,76,0.4); background: rgba(201,168,76,0.07); }

  .pack-info { display: flex; align-items: center; gap: 12px; }
  .pack-coins { font-size: 24px; }
  .pack-name { font-size: 14px; font-weight: 900; color: white; }
  .pack-spins { font-size: 9px; font-weight: 700; letter-spacing: 2px; color: rgba(255,255,255,0.3); text-transform: uppercase; }
  .pack-price {
    background: linear-gradient(135deg, var(--gold-light), var(--gold));
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    font-size: 16px; font-weight: 900;
  }

  .modal-close {
    position: absolute; top: 16px; right: 16px;
    background: rgba(255,255,255,0.06); border: none; border-radius: 10px;
    width: 32px; height: 32px; color: rgba(255,255,255,0.4);
    cursor: pointer; font-size: 14px;
    display: flex; align-items: center; justify-content: center;
    transition: all 0.2s;
  }
  .modal-close:hover { background: rgba(255,255,255,0.1); color: white; }

  /* CONFETTI CANVAS */
  #confetti-canvas {
    position: fixed; inset: 0; z-index: 150;
    pointer-events: none;
  }

  /* FLASH */
  #snap-flash {
    position: fixed; inset: 0; z-index: 300;
    background: white; opacity: 0; pointer-events: none;
    transition: opacity 0.1s;
  }

  /* SHAKE */
  @keyframes shake {
    0%, 100% { transform: translate(0,0) rotate(0deg); }
    20% { transform: translate(-4px, 2px) rotate(-1deg); }
    40% { transform: translate(4px, -2px) rotate(1deg); }
    60% { transform: translate(-3px, 3px) rotate(-0.5deg); }
    80% { transform: translate(3px, -3px) rotate(0.5deg); }
  }
  .shaking { animation: shake 0.08s infinite; }

  @media (max-width: 480px) {
    .prize-name { font-size: 28px; }
    nav { padding: 12px 16px; }
    main { padding: 16px 12px; gap: 16px; }
    .card { padding: 20px 16px; border-radius: 24px; }
  }
</style>
</head>
<body>

<div class="bg-layer"></div>
<div class="particles" id="particles"></div>
<canvas id="confetti-canvas"></canvas>
<div id="snap-flash"></div>

<!-- NAV -->
<nav>
  <div class="nav-brand">
    <div class="nav-logo">Biyi</div>
    <div class="nav-badge">Elite Rewards</div>
  </div>
  <div class="vault-balance">
    <div class="vault-label">Vault Balance</div>
    <div class="vault-amount">₦120,000.00</div>
  </div>
</nav>

<!-- MAIN -->
<main>

  <!-- LEFT: WHEEL CARD -->
  <div class="card">
    <div class="free-spin-badge" id="free-badge">🎁 1 Free Spin</div>
    <div class="card-title">Asset Selector</div>

    <!-- TOKENS -->
    <div class="spin-tokens">
      <span class="token-label">Spins</span>
      <div class="token" id="tok-1"><i class="fa-solid fa-bolt" style="font-size:10px"></i></div>
      <div class="token used" id="tok-2"><i class="fa-solid fa-bolt" style="font-size:10px"></i></div>
      <div class="token used" id="tok-3"><i class="fa-solid fa-bolt" style="font-size:10px"></i></div>
    </div>

    <!-- WHEEL -->
    <div class="wheel-wrap">
      <div class="wheel-glow"></div>

      <!-- Pointer -->
      <div class="wheel-pointer">
        <svg viewBox="0 0 32 40" fill="none">
          <polygon points="16,40 0,0 32,0" fill="url(#pg)" />
          <defs>
            <linearGradient id="pg" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0%" stop-color="#F0D080"/>
              <stop offset="100%" stop-color="#C9A84C"/>
            </linearGradient>
          </defs>
        </svg>
      </div>

      <canvas id="wheel-canvas" width="400" height="400"></canvas>

      <div class="wheel-hub" onclick="spinWheel()">
        <i class="fa-solid fa-play"></i>
      </div>
    </div>

    <button class="spin-btn" id="spin-btn" onclick="spinWheel()">
      <i class="fa-solid fa-bolt"></i>&nbsp; Unlock Asset
    </button>
    <button class="add-spins-btn" onclick="openModal()">
      <i class="fa-solid fa-plus"></i>&nbsp; Add More Spins
    </button>
  </div>

  <!-- RIGHT: STAGE CARD -->
  <div class="card stage" id="stage">
    <!-- IDLE -->
    <div class="idle-state" id="idle-state">
      <div class="idle-vault">
        <div class="vault-dial"></div>
      </div>
      <div class="idle-text">Spin to reveal<br>your prize</div>
    </div>

    <!-- REWARD REVEAL -->
    <div class="reward-reveal" id="reward-reveal">
      <div class="prize-burst">
        <!-- Rays SVG -->
        <div class="burst-rays" id="burst-rays">
          <svg viewBox="0 0 280 280" xmlns="http://www.w3.org/2000/svg">
            <g id="rays" transform="translate(140,140)">
              <rect x="-2" y="-140" width="4" height="60" rx="2" fill="rgba(201,168,76,0.3)"/>
              <rect x="-2" y="-140" width="4" height="60" rx="2" fill="rgba(201,168,76,0.3)" transform="rotate(30)"/>
              <rect x="-2" y="-140" width="4" height="60" rx="2" fill="rgba(201,168,76,0.3)" transform="rotate(60)"/>
              <rect x="-2" y="-140" width="4" height="60" rx="2" fill="rgba(201,168,76,0.3)" transform="rotate(90)"/>
              <rect x="-2" y="-140" width="4" height="60" rx="2" fill="rgba(201,168,76,0.3)" transform="rotate(120)"/>
              <rect x="-2" y="-140" width="4" height="60" rx="2" fill="rgba(201,168,76,0.3)" transform="rotate(150)"/>
              <rect x="-2" y="-140" width="4" height="60" rx="2" fill="rgba(201,168,76,0.3)" transform="rotate(180)"/>
              <rect x="-2" y="-140" width="4" height="60" rx="2" fill="rgba(201,168,76,0.3)" transform="rotate(210)"/>
              <rect x="-2" y="-140" width="4" height="60" rx="2" fill="rgba(201,168,76,0.3)" transform="rotate(240)"/>
              <rect x="-2" y="-140" width="4" height="60" rx="2" fill="rgba(201,168,76,0.3)" transform="rotate(270)"/>
              <rect x="-2" y="-140" width="4" height="60" rx="2" fill="rgba(201,168,76,0.3)" transform="rotate(300)"/>
              <rect x="-2" y="-140" width="4" height="60" rx="2" fill="rgba(201,168,76,0.3)" transform="rotate(330)"/>
            </g>
          </svg>
        </div>

        <!-- Coin burst container -->
        <div class="coin-burst" id="coin-burst"></div>

        <!-- Prize icon -->
        <div class="prize-icon-wrap" id="prize-icon">
          <span class="prize-emoji" id="prize-emoji"></span>
        </div>
      </div>

      <div class="prize-name" id="prize-name"></div>
      <div class="prize-sub" id="prize-sub"></div>
      <div class="win-label" id="win-label"></div>

      <div class="action-row" id="action-row">
        <button class="btn-snap" onclick="takeSnap()">
          <i class="fa-solid fa-camera"></i> Snap
        </button>
        <a class="btn-claim" id="claim-btn" href="#">
          <i class="fa-brands fa-whatsapp"></i> Claim Now
        </a>
      </div>
    </div>
  </div>

</main>

<!-- ADD SPINS MODAL -->
<div class="modal-overlay" id="modal">
  <div class="modal">
    <button class="modal-close" onclick="closeModal()"><i class="fa-solid fa-xmark"></i></button>
    <div class="modal-title">Power Up</div>
    <div class="modal-sub">Get More Spin Tokens</div>

    <div class="spin-pack" onclick="buyPack(3, 500)">
      <div class="pack-info">
        <span class="pack-coins">⚡</span>
        <div>
          <div class="pack-name">Starter Pack</div>
          <div class="pack-spins">3 Spins</div>
        </div>
      </div>
      <div class="pack-price">₦500</div>
    </div>

    <div class="spin-pack" onclick="buyPack(7, 1000)">
      <div class="pack-info">
        <span class="pack-coins">🔥</span>
        <div>
          <div class="pack-name">Hot Pack</div>
          <div class="pack-spins">7 Spins</div>
        </div>
      </div>
      <div class="pack-price">₦1,000</div>
    </div>

    <div class="spin-pack" onclick="buyPack(15, 2000)">
      <div class="pack-info">
        <span class="pack-coins">💎</span>
        <div>
          <div class="pack-name">Elite Pack</div>
          <div class="pack-spins">15 Spins</div>
        </div>
      </div>
      <div class="pack-price">₦2,000</div>
    </div>

    <div class="spin-pack" onclick="buyPack(50, 5000)">
      <div class="pack-info">
        <span class="pack-coins">👑</span>
        <div>
          <div class="pack-name">Crown Pack</div>
          <div class="pack-spins">50 Spins · Best Value</div>
        </div>
      </div>
      <div class="pack-price">₦5,000</div>
    </div>
  </div>
</div>

<script>
// ============================
// PRIZES CONFIG
// ============================
const PRIZES = [
  { id: 0,  name: "₦1,000",          emoji: "💵", sub: "CASH REWARD",         tier: "gold",     win: true,  color: "#C9A84C", dark: "#8B6914" },
  { id: 1,  name: "₦500",            emoji: "💰", sub: "CASH REWARD",         tier: "silver",   win: true,  color: "#A0A0C0", dark: "#606080" },
  { id: 2,  name: "Recharge",        emoji: "📱", sub: "₦200 AIRTIME",        tier: "bronze",   win: true,  color: "#CD7F32", dark: "#8B5E1A" },
  { id: 3,  name: "Try Again",       emoji: "🔄", sub: "BETTER LUCK NEXT",    tier: "lose",     win: false, color: "#444444", dark: "#222222" },
  { id: 4,  name: "₦40,000",         emoji: "🏆", sub: "JACKPOT REWARD",      tier: "platinum", win: true,  color: "#8080FF", dark: "#4040CC" },
  { id: 5,  name: "Recharge",        emoji: "📲", sub: "₦100 AIRTIME",        tier: "bronze",   win: true,  color: "#CD7F32", dark: "#8B5E1A" },
  { id: 6,  name: "₦200",            emoji: "💴", sub: "CASH REWARD",         tier: "bronze",   win: true,  color: "#CD7F32", dark: "#8B5E1A" },
  { id: 7,  name: "Free Spin!",      emoji: "🎰", sub: "BONUS SPIN UNLOCKED", tier: "gold",     win: true,  color: "#FF9500", dark: "#CC7000" },
  { id: 8,  name: "₦100",            emoji: "💸", sub: "CASH REWARD",         tier: "bronze",   win: true,  color: "#CD7F32", dark: "#8B5E1A" },
  { id: 9,  name: "Refer & Earn",    emoji: "👥", sub: "GET BONUS SPINS",     tier: "lose",     win: false, color: "#444444", dark: "#222222" },
  { id: 10, name: "Recharge",        emoji: "⚡", sub: "₦50 AIRTIME",         tier: "bronze",   win: true,  color: "#CD7F32", dark: "#8B5E1A" },
  { id: 11, name: "₦50",             emoji: "🪙", sub: "CASH REWARD",         tier: "bronze",   win: true,  color: "#CD7F32", dark: "#8B5E1A" },
];

// ============================
// STATE
// ============================
let spinsLeft = 1;
let spinning = false;
let currentDeg = 0;

// ============================
// DRAW WHEEL
// ============================
function drawWheel() {
  const canvas = document.getElementById('wheel-canvas');
  const ctx = canvas.getContext('2d');
  const cx = canvas.width / 2;
  const cy = canvas.height / 2;
  const radius = cx - 4;
  const numSlices = PRIZES.length;
  const sliceAngle = (2 * Math.PI) / numSlices;

  ctx.clearRect(0, 0, canvas.width, canvas.height);

  PRIZES.forEach((prize, i) => {
    const startAngle = i * sliceAngle - Math.PI / 2;
    const endAngle = startAngle + sliceAngle;
    const mid = startAngle + sliceAngle / 2;

    // Alternate dark/light backgrounds
    const bg = i % 2 === 0 ? '#1A1A1A' : '#141414';
    ctx.beginPath();
    ctx.moveTo(cx, cy);
    ctx.arc(cx, cy, radius, startAngle, endAngle);
    ctx.closePath();
    ctx.fillStyle = bg;
    ctx.fill();

    // Colored accent edge
    ctx.beginPath();
    ctx.arc(cx, cy, radius, startAngle, endAngle);
    ctx.lineWidth = 6;
    ctx.strokeStyle = prize.color + '80';
    ctx.stroke();

    // Divider lines
    ctx.beginPath();
    ctx.moveTo(cx, cy);
    ctx.lineTo(cx + radius * Math.cos(startAngle), cy + radius * Math.sin(startAngle));
    ctx.strokeStyle = 'rgba(255,255,255,0.05)';
    ctx.lineWidth = 1;
    ctx.stroke();

    // Emoji
    const emojiR = radius * 0.7;
    const ex = cx + emojiR * Math.cos(mid);
    const ey = cy + emojiR * Math.sin(mid);
    ctx.font = `${radius * 0.12}px serif`;
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText(prize.emoji, ex, ey);

    // Text
    ctx.save();
    ctx.translate(cx + radius * 0.42 * Math.cos(mid), cy + radius * 0.42 * Math.sin(mid));
    ctx.rotate(mid + Math.PI / 2);
    ctx.font = `bold ${Math.max(10, radius * 0.055)}px 'DM Sans', sans-serif`;
    ctx.fillStyle = '#FFFFFF99';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText(prize.name, 0, 0);
    ctx.restore();
  });

  // Center cap
  const grad = ctx.createRadialGradient(cx, cy, 0, cx, cy, 30);
  grad.addColorStop(0, '#2A2A2A');
  grad.addColorStop(1, '#141414');
  ctx.beginPath();
  ctx.arc(cx, cy, 30, 0, 2 * Math.PI);
  ctx.fillStyle = grad;
  ctx.fill();
  ctx.strokeStyle = 'rgba(201,168,76,0.4)';
  ctx.lineWidth = 2;
  ctx.stroke();
}

// ============================
// UPDATE TOKENS UI
// ============================
function updateTokensUI() {
  const tokens = document.querySelectorAll('.token');
  tokens.forEach((t, i) => {
    if (i < spinsLeft && i < 3) {
      t.classList.remove('used');
    } else {
      t.classList.add('used');
    }
  });

  // Adjust shown tokens — we show max 3 but indicate with number if more
  const label = document.querySelector('.token-label');
  label.textContent = spinsLeft > 3 ? `Spins × ${spinsLeft}` : 'Spins';
}

// ============================
// SPIN
// ============================
function spinWheel() {
  if (spinning || spinsLeft < 1) {
    if (spinsLeft < 1) {
      shakeBtn();
      openModal();
    }
    return;
  }

  spinning = true;
  spinsLeft--;
  updateTokensUI();

  // Hide free spin badge after first use
  document.getElementById('free-badge').style.opacity = spinsLeft > 0 ? '1' : '0.3';

  document.getElementById('spin-btn').disabled = true;

  // Reset stage
  hideReward();

  // Pick random prize (weighted: jackpot is rare)
  const weights = PRIZES.map(p => p.tier === 'platinum' ? 1 : p.tier === 'gold' ? 4 : p.tier === 'lose' ? 8 : 6);
  const totalWeight = weights.reduce((a, b) => a + b, 0);
  let rand = Math.random() * totalWeight;
  let prizeIdx = 0;
  for (let i = 0; i < weights.length; i++) {
    rand -= weights[i];
    if (rand <= 0) { prizeIdx = i; break; }
  }

  // Calculate rotation
  const numSlices = PRIZES.length;
  const sliceAngle = 360 / numSlices;
  // We want prizeIdx slice to land under the pointer (top = -90deg offset)
  const targetAngle = 360 - (prizeIdx * sliceAngle) - sliceAngle / 2;
  const extraSpins = 1440 + Math.floor(Math.random() * 720);
  const finalDeg = currentDeg + extraSpins + ((targetAngle - currentDeg % 360 + 360) % 360);

  const canvas = document.getElementById('wheel-canvas');
  canvas.style.transition = 'transform 5s cubic-bezier(0.17, 0.67, 0.12, 0.99)';
  canvas.style.transform = `rotate(${finalDeg}deg)`;
  currentDeg = finalDeg;

  // Vibrate
  if (navigator.vibrate) navigator.vibrate([30, 30, 30, 30, 100]);

  // Reveal after spin
  setTimeout(() => {
    showPrize(PRIZES[prizeIdx]);
    spinning = false;
    document.getElementById('spin-btn').disabled = false;
  }, 5200);
}

// ============================
// SHOW PRIZE
// ============================
function showPrize(prize) {
  const idle = document.getElementById('idle-state');
  idle.style.opacity = '0';
  idle.style.pointerEvents = 'none';

  const reveal = document.getElementById('reward-reveal');
  reveal.classList.add('active');

  const iconWrap = document.getElementById('prize-icon');
  iconWrap.className = `prize-icon-wrap tier-${prize.tier}`;
  document.getElementById('prize-emoji').textContent = prize.emoji;

  const nameEl = document.getElementById('prize-name');
  nameEl.className = `prize-name tier-${prize.tier}`;
  nameEl.textContent = prize.name;

  document.getElementById('prize-sub').textContent = prize.sub;

  const winLabel = document.getElementById('win-label');
  winLabel.className = `win-label ${prize.win ? 'win' : 'try-again'}`;
  winLabel.innerHTML = prize.win
    ? `<i class="fa-solid fa-star"></i> Congratulations!`
    : `<i class="fa-solid fa-rotate-right"></i> Better Luck Next Time`;

  // Animate in
  requestAnimationFrame(() => {
    iconWrap.classList.add('pop');
    setTimeout(() => {
      nameEl.classList.add('show');
      document.getElementById('prize-sub').classList.add('show');
      winLabel.classList.add('show');
      document.getElementById('action-row').classList.add('show');
    }, 200);
  });

  // Burst rays
  const rays = document.getElementById('burst-rays');
  // Update ray color based on tier
  const rayColors = { platinum: 'rgba(128,128,255,0.4)', gold: 'rgba(201,168,76,0.4)', silver: 'rgba(180,180,200,0.3)', bronze: 'rgba(205,127,50,0.3)', lose: 'rgba(255,255,255,0.08)' };
  rays.querySelectorAll('rect').forEach(r => r.setAttribute('fill', rayColors[prize.tier] || 'rgba(201,168,76,0.3)'));
  if (prize.win) rays.classList.add('show');

  // Coins
  if (prize.win) {
    spawnCoins(prize);
    if (prize.tier === 'platinum' || prize.tier === 'gold') triggerConfetti(prize.color);
  }

  // WhatsApp claim
  const msg = `🎉 I just won *${prize.name}* on Biyi Elite Rewards! ${prize.emoji}\n\n${prize.sub}\n\nClaiming my prize now! 🚀`;
  document.getElementById('claim-btn').href = `https://wa.me/2348000000000?text=${encodeURIComponent(msg)}`;

  // If free spin won, add spin
  if (prize.id === 7) {
    setTimeout(() => {
      spinsLeft += 1;
      updateTokensUI();
    }, 1500);
  }
}

// ============================
// HIDE REWARD
// ============================
function hideReward() {
  const reveal = document.getElementById('reward-reveal');
  reveal.classList.remove('active');

  const iconWrap = document.getElementById('prize-icon');
  iconWrap.classList.remove('pop');
  iconWrap.className = 'prize-icon-wrap';

  document.getElementById('prize-name').className = 'prize-name';
  document.getElementById('prize-sub').className = 'prize-sub';
  document.getElementById('win-label').className = 'win-label';
  document.getElementById('action-row').className = 'action-row';
  document.getElementById('burst-rays').classList.remove('show');
  document.getElementById('coin-burst').innerHTML = '';

  const idle = document.getElementById('idle-state');
  idle.style.opacity = '1';
  idle.style.pointerEvents = 'auto';
}

// ============================
// SPAWN COINS
// ============================
function spawnCoins(prize) {
  const container = document.getElementById('coin-burst');
  container.innerHTML = '';
  const count = prize.tier === 'platinum' ? 20 : prize.tier === 'gold' ? 12 : 6;
  const coinEmojis = ['💰', '🪙', '💵', '✨', '⭐'];

  for (let i = 0; i < count; i++) {
    const span = document.createElement('span');
    const angle = (i / count) * 360 * (Math.PI / 180);
    const dist = 60 + Math.random() * 80;
    const tx = Math.cos(angle) * dist;
    const ty = Math.sin(angle) * dist;
    span.textContent = coinEmojis[Math.floor(Math.random() * coinEmojis.length)];
    span.style.cssText = `
      left: 50%; top: 50%;
      --fly-to: translate(${tx}px, ${ty}px);
      --rot: ${Math.random() * 360}deg;
      animation-delay: ${Math.random() * 0.4}s;
      animation-duration: ${0.8 + Math.random() * 0.4}s;
    `;
    container.appendChild(span);
  }
}

// ============================
// CONFETTI
// ============================
function triggerConfetti(color = '#C9A84C') {
  const canvas = document.getElementById('confetti-canvas');
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  const ctx = canvas.getContext('2d');
  const particles = [];
  const colors = [color, '#F0D080', '#FFFFFF', '#FFD700', '#FF9500'];

  for (let i = 0; i < 120; i++) {
    particles.push({
      x: Math.random() * canvas.width,
      y: -20,
      w: 6 + Math.random() * 8,
      h: 3 + Math.random() * 4,
      color: colors[Math.floor(Math.random() * colors.length)],
      vx: (Math.random() - 0.5) * 4,
      vy: 2 + Math.random() * 4,
      rot: Math.random() * 360,
      rotV: (Math.random() - 0.5) * 8,
      opacity: 1
    });
  }

  function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    let alive = false;
    particles.forEach(p => {
      if (p.y < canvas.height + 20) {
        alive = true;
        p.x += p.vx; p.y += p.vy;
        p.rot += p.rotV;
        p.opacity = Math.max(0, 1 - p.y / canvas.height);
        ctx.save();
        ctx.translate(p.x, p.y);
        ctx.rotate(p.rot * Math.PI / 180);
        ctx.globalAlpha = p.opacity;
        ctx.fillStyle = p.color;
        ctx.fillRect(-p.w / 2, -p.h / 2, p.w, p.h);
        ctx.restore();
      }
    });
    if (alive) requestAnimationFrame(draw);
    else ctx.clearRect(0, 0, canvas.width, canvas.height);
  }
  draw();
}

// ============================
// TAKE SNAP
// ============================
function takeSnap() {
  const flash = document.getElementById('snap-flash');
  flash.style.opacity = '1';
  setTimeout(() => { flash.style.opacity = '0'; }, 100);
  if (navigator.vibrate) navigator.vibrate([50, 30, 50]);
  setTimeout(() => alert("📸 Reward captured! Sharing to Biyi Feed..."), 150);
}

// ============================
// MODAL
// ============================
function openModal() {
  document.getElementById('modal').classList.add('open');
}

function closeModal() {
  document.getElementById('modal').classList.remove('open');
}

function buyPack(spins, price) {
  spinsLeft += spins;
  updateTokensUI();
  closeModal();
  // Animate notification
  const badge = document.getElementById('free-badge');
  badge.textContent = `+${spins} Spins Added!`;
  badge.style.opacity = '1';
  badge.style.background = 'linear-gradient(135deg, #00C853, #007A32)';
  setTimeout(() => {
    badge.textContent = '⚡ Go Spin!';
  }, 2500);
}

function shakeBtn() {
  const btn = document.getElementById('spin-btn');
  btn.classList.add('shaking');
  setTimeout(() => btn.classList.remove('shaking'), 500);
}

// ============================
// PARTICLES
// ============================
function initParticles() {
  const container = document.getElementById('particles');
  for (let i = 0; i < 30; i++) {
    const p = document.createElement('div');
    p.className = 'particle';
    p.style.cssText = `
      left: ${Math.random() * 100}%;
      width: ${1 + Math.random() * 3}px;
      height: ${1 + Math.random() * 3}px;
      animation-duration: ${6 + Math.random() * 12}s;
      animation-delay: ${Math.random() * 10}s;
      opacity: 0;
    `;
    // Some purple, some green
    if (Math.random() > 0.7) p.style.background = '#AF52DE';
    else if (Math.random() > 0.8) p.style.background = '#00C853';
    container.appendChild(p);
  }
}

// ============================
// INIT
// ============================
drawWheel();
initParticles();
updateTokensUI();

// Close modal on overlay click
document.getElementById('modal').addEventListener('click', function(e) {
  if (e.target === this) closeModal();
});
</script>

</body>
</html>