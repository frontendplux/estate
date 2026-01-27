<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
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
          <h3 class="card-title mb-4 text-center">Sign Up</h3>
          <form id="signupForm">
            <div class="mb-3">
              <label for="fullname" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullname" placeholder="Enter full name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Sign Up</button>
          </form>
          <div class="mt-3 text-center">
            Already have an account? <a href="index.php">Login here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Simple frontend-only signup simulation
document.getElementById('signupForm').addEventListener('submit', function(e){
  e.preventDefault();

  const fullname = document.getElementById('fullname').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirmPassword').value;

  if(password !== confirmPassword){
    alert("Passwords do not match!");
    return;
  }

  // Save user in localStorage (frontend-only)
  const user = { fullname, email, password };
  localStorage.setItem('user', JSON.stringify(user));

  alert("Sign up successful! You can now login.");
  window.location.href = "index.php"; // Redirect to login
});
</script>

</body>
</html>
