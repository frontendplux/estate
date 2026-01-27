<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-5 col-sm-8">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title mb-4 text-center">Login</h3>
        <form id="loginForm" action="login.php" method="POST">
            <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
    <!-- Added name="email" -->
        <input type="email" name="email" class="form-control" id="email" required>
         </div>
        <div class="mb-3">
        <label for="password" class="form-label">Password</label>
    <!-- Added name="password" -->
         <input type="password" name="password" class="form-control" id="password" required>
         </div>
         <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
          <div class="mt-3 text-center">
            <a href="#">Forgot password?</a> | <a href="signup.php">Register</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
