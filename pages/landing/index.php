<?php
// Note: You must uncomment the connection file below and ensure it defines $conn
// and $country variables for this code to work with your database.

session_start();

// TEMPORARY PLACEHOLDER FUNCTION TO PREVENT FATAL ERROR
// You should replace this with your actual database function logic
if (!function_exists('selectCountry')) {
    function selectCountry($conn, $country_name) {
        // This is a dummy return to allow the script to run
        // Replace with actual database retrieval code
        return ['id' => 1]; // Assumes a default country ID of 1
    }
}

class Main {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function fetchPromotionalOnly($id) {
    $sql = "SELECT * FROM promotional where currency_id=?"; // fetch all promotional records
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $res = $stmt->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
public function fetchProductsByPromotion($promo_id, $country_id) {
    $sql = "SELECT 
                p.id AS product_id,
                p.name AS product_name,
                p.amount,
                p.location,
                c.id AS country_id,
                c.name AS country_name,
                c.currency_symbol,
                pi.img AS product_image,
                pro.name AS promo_name,
                pro.off_price
            FROM promotional_products pp
            JOIN products p ON pp.products_id = p.id
            JOIN products_image pi ON p.id = pi.products_id
            JOIN country c ON p.country_id = c.id
            JOIN promotional pro ON pp.promotional_id = pro.id
            WHERE pp.promotional_id = ? AND p.country_id = ? AND p.status = 1
            GROUP BY p.id";

    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("ii", $promo_id, $country_id);
    $stmt->execute();
    $res = $stmt->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

}

// Make sure $conn is defined via your commented-out include file
// and $country is defined somewhere (e.g., from a URL parameter or session)
// $main = new Main($conn); 

// TEMPORARY FIX to run code without $conn being defined
$main = (isset($conn)) ? new Main($conn) : null;


include __DIR__."/../compo/header.php"; 
?>

<!-- HERO -->
<section class="hero text-center">
  <div class="container">
    <h1 class="fw-bold">Find, Reserve & Pay for Your Apartment Easily</h1>
    <p class="lead mt-3">Verified apartments, secure payment, stress-free process.</p>
    <p class="d-flex justify-content-center">
      <input type="search" class="border  w-100 fw-bold p-sm-3 p-2 text-center" placeholder="Search products, furniture and more..." style="max-width:600px;border-radius:10px 0 0 10px">
      <button class="btn btn-primary" style="border-radius:0 10px 10px 0">Search</button>
    </p>
  </div>
</section>
<!-- How It Works -->
<section id="how" class="py-2 px-2" style="margin-top:-100px;">
  <div class="container rounded py-2 bg-light">
    <div class="d-flex gap-2 overflow-auto g-4">
      <?php
      $steps = [
        ['Register','Tell us your preferred location, budget, and apartment type.'],
        ['Make Deposit','Secure our service and allow us to start searching immediately.'],
        ['Get Notified','We call and notify you once a suitable apartment is available.'],
        ['Inspect & Pay','Inspect the apartment and complete payment with our assistance.']
      ];
      foreach($steps as $s):
      ?>
      <div class="col-md-3 col-11">
        <div class="card h-100 shadow-sm text-center p-3">
          <h5><?= $s[0] ?></h5>
          <p><?= $s[1] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php 
// Check if $main is null before trying to fetch data
if ($main !== null && isset($country)):
foreach($main->fetchPromotionalOnly(selectCountry($conn, $country)['id']) as $promote): ?>
<section id="rent" class="py-5">
  <div class="container">
    <div class="d-flex justify-content-between">
      <h3 class="mb-4"><i class="<?= $promote['icon'] ?>"></i> <?= $promote['name'] ?></h3>
      <a href="/<?= $country ?>/promotion/<?= $promote['sku']; ?>">see all</a>
    </div>
    <div class="swiper rentSwiper"><div class="swiper-wrapper">
      <?php foreach($main->fetchProductsByPromotion($promote['id'],$promote['currency_id']) as $p): ?>
      <a href="/<?= $country ?>/products?id=<?= $p['product_id'] ?>" class="swiper-slide position-relative text-decoration-none">
        <div class="card border-0 shadow-sm">
          <img src="<?= $p['product_image'] ?>" class="product-img card-img-top">
          <div class="position-absolute bg-warning-subtle m-1 top-0 end-0"><?= $p['country_name'] ?></div>
          <div class="card-body" style="font-size:small">
            <h6><?= $p['product_name'] ?></h6>
            <p class="mb-1"><?= $p['location'] ?></p>
            <strong><?= $p['currency_symbol'] ?><?= number_format($p['amount']) ?> / year</strong>
          </div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- <div class="swiper-pagination"></div></div> -->
  </div>
</section>
<?php endforeach; endif; // End check for $main and $country ?>


<!-- CONTACT -->
<section id="contact" class="py-5 bg-dark text-white">
  <div class="container">
    <h3 class="text-center mb-4">Contact Us</h3>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form class="card p-4">
          <input class="form-control mb-3" placeholder="Full Name">
          <input class="form-control mb-3" placeholder="Email">
          <input class="form-control mb-3" placeholder="Phone">
          <button class="btn btn-warning w-100">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__."/../compo/footer.php"; ?>
<script>
const swiperConfig = {
  slidesPerView:2,
  spaceBetween:5,
  pagination:{el:'.swiper-pagination',clickable:true},
  navigation:{nextEl:'.swiper-button-next',prevEl:'.swiper-button-prev'},
  breakpoints:{576:{slidesPerView:3},768:{slidesPerView:4},1200:{slidesPerView:6}}
};
new Swiper('.rentSwiper',swiperConfig);
new Swiper('.saleSwiper',swiperConfig);
new Swiper('.furnitureSwiper',swiperConfig);
new Swiper('.promoSwiper',swiperConfig);
</script>
</body>
</html>
