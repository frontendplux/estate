<?php
session_start();
class main{
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getProductsById($id){
        $smt=$this->conn->prepare("SELECT 
    p.*,
    pro.off_price        AS pro_cut_off,
    pro.description      AS pro_desc,
    pro.status           AS pro_status,
    pro.sku              AS pro_sku,
    c.country_code       AS code,
    c.currency_symbol    AS symbol,
    c.name   AS country_name,
    cat.name             AS cat_name,
    cat.sku              AS cat_url,
    PImg.img, PImg.alt
FROM products p
JOIN category cat 
    ON p.category_id = cat.id
LEFT JOIN promotional_products pp 
    ON p.id = pp.products_id
LEFT JOIN products_image PImg 
    ON  p.id= PImg.products_id
LEFT JOIN promotional pro 
    ON pp.promotional_id = pro.id
JOIN country c 
    ON p.country_id = c.id
WHERE p.id = ?
LIMIT 1;
        ");
     $smt->bind_param('s',$id);
     $smt->execute();
     $res=$smt->get_result();
     return $res->fetch_assoc();
    }


    
    public function get_all_image_by_id($id){
     $smt=$this->conn->prepare('select * from products_image where products_id=?');
     $smt->bind_param('s',$id);
     $smt->execute();
     $res = $smt->get_result();
     return $res->fetch_all(MYSQLI_ASSOC);
    }

public function get_related_products($category_id, $country_id)
{
    $sql = "
        SELECT 
            p.id,
            p.name,
            p.amount,
            p.location,
            c.name AS country_name,
            c.currency_symbol,
            (
                SELECT img 
                FROM products_image 
                WHERE products_id = p.id 
                LIMIT 1
            ) AS img
        FROM products p
        JOIN country c ON p.country_id = c.id
        WHERE p.country_id = ?
          AND p.category_id = ?
        LIMIT 100
    ";

    $smt = $this->conn->prepare($sql);
    $smt->bind_param('ii', $country_id, $category_id);
    $smt->execute();

    return $smt->get_result()->fetch_all(MYSQLI_ASSOC);
}


}


$main = new Main($conn);
$product=$main->getProductsById($_GET['id'] ?? 0);
include __DIR__."/../compo/header.php"; 
?>

<div class="container" style="margin: 100px auto;">
  <h1 class="mb-4 fs-4">🛒 Your Cart</h1>
  <div class="row">
    <div class="col-md-8">
      <div id="cartItems" class="list-group mb-3"></div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Order Summary</h5>
          <p class="card-text">Total: ₦<span id="totalPrice">0</span></p>
          <a href="/af/checkout" class="btn btn-success w-100">Proceed to Checkout</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap 5 JS + Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Sample cart stored in localStorage
let cart = JSON.parse(localStorage.getItem('cart')) || [
  { id: 1, name: "Sample Product", price: 15000, qty: 1, img: "https://picsum.photos/200" }
];

function saveCart(){
  localStorage.setItem('cart', JSON.stringify(cart));
}

function renderCart(){
  const cartItems = document.getElementById('cartItems');
  cartItems.innerHTML = '';

  if(cart.length === 0){
    cartItems.innerHTML = `<div class="alert alert-secondary text-center">Your cart is empty</div>`;
    document.getElementById('totalPrice').innerText = 0;
    return;
  }

  let total = 0;

  cart.forEach((item,index)=>{
    total += item.price * item.qty;

    const itemEl = document.createElement('div');
    itemEl.className = 'list-group-item d-flex justify-content-between align-items-center';
    itemEl.innerHTML = `
      <div class="d-flex align-items-center">
        <img src="${item.img}" alt="${item.name}" class="img-fluid me-3" style="width:80px; height:80px; object-fit:cover;">
        <div>
          <h6 class="mb-1">${item.name}</h6>
          <div>₦${item.price.toLocaleString()}</div>
          <div class="mt-2">
            <button class="btn btn-sm btn-outline-secondary me-1" onclick="changeQty(${index},-1)">−</button>
            <span>${item.qty}</span>
            <button class="btn btn-sm btn-outline-secondary ms-1" onclick="changeQty(${index},1)">+</button>
            <button class="btn btn-sm btn-outline-danger ms-3" onclick="removeItem(${index})">Remove</button>
          </div>
        </div>
      </div>
    `;
    cartItems.appendChild(itemEl);
  });

  document.getElementById('totalPrice').innerText = total.toLocaleString();
}

function changeQty(index, amount){
  cart[index].qty += amount;
  if(cart[index].qty <= 0){
    cart.splice(index,1);
  }
  saveCart();
  renderCart();
}

function removeItem(index){
  cart.splice(index,1);
  saveCart();
  renderCart();
}

renderCart();
</script>
<?php include __DIR__."/../compo/footer.php"; ?>
</body>
</html>
