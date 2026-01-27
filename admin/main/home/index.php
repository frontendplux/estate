<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php");
    exit;
}

// Example admin info
$admin_username = $_SESSION['admin_username'] ?? 'Admin';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item">
          <span class="nav-link text-light">Welcome, <?= htmlspecialchars($admin_username) ?></span>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-light ms-2" href="admin_logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Dashboard Content -->
<div class="container my-5">
    <h1 class="mb-4">Dashboard</h1>

    <div class="row g-4">
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text">Manage your products</p>
                    <a href="admin_products.php" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text">Manage categories</p>
                    <a href="admin_categories.php" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-text">View orders</p>
                    <a href="admin_orders.php" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">Manage users</p>
                    <a href="admin_users.php" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
