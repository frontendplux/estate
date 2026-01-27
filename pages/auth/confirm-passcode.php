<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Confirm Passcode</title>
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
          <h3 class="card-title mb-4 text-center">Confirm Passcode</h3>
          <p class="text-center">Enter the 6-digit passcode sent to your email</p>
          <form id="passcodeForm">
            <div class="mb-3">
              <label for="passcode" class="form-label">Passcode</label>
              <input type="text" class="form-control text-center fs-4" id="passcode" maxlength="6" placeholder="Enter 6-digit code" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Verify Passcode</button>
          </form>
          <div class="mt-3 text-center">
            Didn't receive code? <a href="forgot-password.php">Resend</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Frontend-only OTP simulation
document.getElementById('passcodeForm').addEventListener('submit', function(e){
  e.preventDefault();

  const inputCode = document.getElementById('passcode').value;
  const correctCode = "123456"; // simulated passcode

  if(inputCode === correctCode){
    alert("Passcode verified! You can now reset your password.");
    window.location.href = "reset-password.php"; // redirect to reset password page
  } else {
    alert("Invalid passcode! Please try again.");
  }
});
</script>

</body>
</html>
