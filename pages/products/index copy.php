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
                                c.currency_symbol    AS symbol
                            FROM products p
                            JOIN promotional_products pp 
                                ON p.id = pp.products_id
                            JOIN promotional pro 
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
}
$main = new Main($conn);
$product=$main->getProductsById($_GET['id'] ?? 0);
include __DIR__."/../compo/header.php"; 
?>

<section class="bg-dark text-light py-5 my-5">
  <div class="container">
    <div class="row align-items-center min-vh-50">
      <div class="col-lg-7">
        <span class="badge bg-success mb-3">Our Products</span>

        <h1 class="display-5 fw-bold mt-3">
          Quality Products Built for Everyday Use
         
        </h1>

        <p class="lead text-secondary my-4">
          Explore our wide range of reliable, affordable, and high-quality
          products designed to meet your needs.
        </p>

        <div class="d-flex gap-3 flex-wrap">
          <a href="#products" class="btn btn-success btn-lg">
            Browse Products
          </a>
          <a href="#contact" class="btn btn-outline-light btn-lg">
            Contact Sales
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
    <pre>
        <?= print_r($product) ?>
    </pre>
</section>