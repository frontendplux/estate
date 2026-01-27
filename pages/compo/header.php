<?php
// 1. Start the session to access user data
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SmartEstate | Find & Secure Apartments</title>

<!-- CSS Assets -->
<link href="/assets/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/assets/RemixIcon_Fonts_v4.1.0/remixicon.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.3.2/css/flag-icons.min.css">

<!-- JS Assets -->
<script src="/assets/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>
    .hero{background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)), url('/assets/image/1.webp') center/cover no-repeat;color:#fff;padding:120px 0}
    .product-img{height:150px;object-fit:cover}
    .swiper-slide{height:auto}
    ::-webkit-scrollbar{width:0;height:0}
    *{scrollbar-width:none;-ms-overflow-style:none}
    .ad-banner{background:#ff8c00}
    .ad-banner-2{background:#6c5ce7}
    /* Style for the welcome text */
    .welcome-user { color: #ffbc00 !important; font-weight: 600; align-self: center; }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">SmartEstate</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto gap-2">
        <li class="nav-item"><a class="nav-link" href="#how">How It Works</a></li>
        <li class="nav-item"><a class="nav-link" href="#rent">Rent</a></li>
        <li class="nav-item"><a class="nav-link" href="#buy">Buy</a></li>
        <li class="nav-item"><a class="nav-link" href="#furniture">Furniture</a></li>
        <li class="nav-item"><a class="nav-link" href="#promotions">Promotions</a></li>
        
        <?php if(isset($_SESSION['username'])): ?>
            <!-- SHOW THIS IF LOGGED IN -->
            <li class="nav-item d-flex align-items-center">
                <span class="nav-link welcome-user">
                    <i class="ri-user-smile-line"></i> Welcome, <?= htmlspecialchars($_SESSION['username']) ?>
                </span>
                <a class="btn btn-sm btn-outline-light ms-2" href="/pages/auth/logout.php">Logout</a>
            </li>
        <?php else: ?>
            <!-- SHOW THIS IF NOT LOGGED IN -->
            <li class="nav-item">
                <a class="btn btn-warning fw-bold px-5" href="/pages/auth/signup.php">Login/Register</a>
            </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
