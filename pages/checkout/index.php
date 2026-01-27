<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
  <h1 class="mb-4">🛒 Checkout</h1>
  <div class="row">
    
    <!-- Billing / Shipping Form -->
    <div class="col-md-7">
      <h4 class="mb-3">Billing Details</h4>
      <form id="checkoutForm">
        <div class="mb-3">
          <label for="fullName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullName" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="phone" required>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" required>
        </div>
        <div class="mb-3">
          <label for="city" class="form-label">City</label>
          <input type="text" class="form-control" id="city" required>
        </div>
        <div class="mb-3">
          <label for="country" class="form-label">Country</label>
          <input type="text" class="form-control" id="country" required>
        </div>
        <div class="mb-3">
          <label for="zip" class="form-label">ZIP / Postal Code</label>
          <input type="text" class="form-control" id="zip" required>
        </div>
      </form>
    </div>

    <!-- Order Summary -->
    <div class="col-md-5">
      <h4 class="mb-3">Order Summary</h4>
      <div id="checkoutItems" class="list-group mb-3"></div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total: ₦<span id="checkoutTotal">0</span></h5>
          <button class="btn btn-success w-100" onclick="placeOrder()">Place Order</button>
        </div>
      </div>
    </div>
    
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Sample cart stored in localStorage (same as previous page)
let cart = JSON.parse(localStorage.getItem('cart')) || [];

function renderCheckout(){
  const checkoutItems = document.getElementById('checkoutItems');
  checkoutItems.innerHTML = '';

  if(cart.length === 0){
    checkoutItems.innerHTML = `<div class="alert alert-secondary text-center">Your cart is empty</div>`;
    document.getElementById('checkoutTotal').innerText = 0;
    return;
  }

  let total = 0;

  cart.forEach(item => {
    total += item.price * item.qty;

    const itemEl = document.createElement('div');
    itemEl.className = 'list-group-item d-flex justify-content-between align-items-center';
    itemEl.innerHTML = `
      <div>
        <h6 class="mb-1">${item.name}</h6>
        <small>${item.qty} × ₦${item.price.toLocaleString()}</small>
      </div>
      <span>₦${(item.price * item.qty).toLocaleString()}</span>
    `;
    checkoutItems.appendChild(itemEl);
  });

  document.getElementById('checkoutTotal').innerText = total.toLocaleString();
}

function placeOrder(){
  const form = document.getElementById('checkoutForm');
  if(!form.checkValidity()){
    form.reportValidity();
    return;
  }

  // Collect form data
  const order = {
    fullName: document.getElementById('fullName').value,
    email: document.getElementById('email').value,
    phone: document.getElementById('phone').value,
    address: document.getElementById('address').value,
    city: document.getElementById('city').value,
    country: document.getElementById('country').value,
    zip: document.getElementById('zip').value,
    cart: cart,
    total: cart.reduce((acc, item) => acc + item.price * item.qty, 0)
  };

  console.log("Order Placed:", order);

  // Clear cart
  localStorage.removeItem('cart');
  cart = [];
  renderCheckout();

  alert("Thank you! Your order has been placed.");
}

renderCheckout();
</script>

</body>
</html>
