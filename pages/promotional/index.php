<?php
session_start();
class main{
    public function __construct($conn) {
        $this->conn = $conn;
    }
    

    public function getPromotionalPrompt($prompt){
     $smt=$this->conn->prepare("SELECT * from promotional where sku=? limit 1");
     $smt->bind_param('s',$prompt);
     $smt->execute();
     $res=$smt->get_result();
     return $res->fetch_assoc();
    }

    public function getPromotionalProduct($promo_id, $country_id){
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

$main = new Main($conn);
$promotion=$main->getPromotionalPrompt($router[2]);
include __DIR__."/../compo/header.php"; 
?>

<section class="bg-dark text-light py-5 my-5">
  <div class="container">
    <div class="row align-items-center min-vh-50">
      <div class="col-lg-7">
        <span class="badge bg-success mb-3">Promotional Products</span>

        <h1 class="display-5 fw-bold mt-3">
          <?= $promotion['name'] ?>
        </h1>

        <p class="lead text-secondary my-4">
          <?= $promotion['description'] ?>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="container d-flex flex-wrap">
    <?php foreach($main->getPromotionalProduct($promotion['id'],$promotion['currency_id']) as $p): ?>
     <a href="/<?= $country ?>/products?id=<?= $p['product_id'] ?>" class="col-sm-3 col-6 text-dark p-2 position-relative text-decoration-none">
        <div class="border-0 p-2">
          <img src="<?= $p['product_image'] ?>" class="product-img card-img-top">
          <div class="position-absolute bg-warning-subtle m-1 top-0 end-0"><?= $p['country_name'] ?></div>
          <div class="p-2" style="font-size:small">
            <h6><?= $p['product_name'] ?></h6>
            <p class="mb-1"><?= $p['location'] ?></p>
            <strong><?= $p['currency_symbol'] ?><?= number_format($p['amount']) ?></strong>
          </div>
        </div>
      </a>
     <?php endforeach; ?>
</section>

<?php include __DIR__."/../compo/footer.php"; ?>