<?php
session_start();

// 1. Redirect to login if user isn't logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // or login.php
    exit();
}

// 2. Optional: Get the name for the greeting
$display_name = $_SESSION['username']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <h5 class="px-3">Dashboard</h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Settings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="logout.php">
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Welcome, <?php echo htmlspecialchars($display_name); ?>!</h1>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Orders</h5>
              <p class="card-text fs-4">12</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pending Orders</h5>
              <p class="card-text fs-4">3</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Account Status</h5>
              <p class="card-text fs-4 text-success">Active</p>
            </div>
          </div>
        </div>
      </div>

      <h4 class="mt-4">Recent Orders</h4>
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Order ID</th>
              <th>Product</th>
              <th>Status</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>ORD12345</td>
              <td>Product A</td>
              <td><span class="badge bg-success">Completed</span></td>
              <td>2026-01-26</td>
            </tr>
            <tr>
              <td>2</td>
              <td>ORD12346</td>
              <td>Product B</td>
              <td><span class="badge bg-warning">Pending</span></td>
              <td>2026-01-25</td>
            </tr>
            <tr>
              <td>3</td>
              <td>ORD12347</td>
              <td>Product C</td>
              <td><span class="badge bg-danger">Cancelled</span></td>
              <td>2026-01-24</td>
            </tr>
          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
