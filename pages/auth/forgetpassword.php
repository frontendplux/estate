<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
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
          <h3 class="card-title mb-4 text-center">Forgot Password</h3>
          <form id="forgotPasswordForm">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Reset Password</button>
          </form>
          <div class="mt-3 text-center">
            Remembered? <a href="login.php">Login here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Frontend-only password reset simulation
document.getElementById('forgotPasswordForm').addEventListener('submit', function(e){
  e.preventDefault();

  const email = document.getElementById('email').value;

  // Simple frontend simulation
  const user = JSON.parse(localStorage.getItem('user'));
  if(user && user.email === email){
    alert("Password reset link has been sent to your email (simulated).");
  } else {
    alert("Email not found. Please sign up first.");
  }

  // Redirect to login
  window.location.href = "login.php";
});
</script>

</body>
</html>
