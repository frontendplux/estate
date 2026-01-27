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

    public function get_related_products($category_id, $country_id){
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

<section class="bg-dark text-light py-5 my-5">
  <div class="container">
    <div class="row align-items-center min-vh-50">
      <div class="col-12">
        <a href="/<?= $product['code'] ?>/" class="text-decoration-none text-warning"><?= $product['country_name'] ?></a>
        <span class="ri-arrow-right-s-line"></span>
        <a href="/<?= $country.'/category/'.$product['cat_url'] ?>/" class="text-warning text-decoration-none"><?= $product['cat_name'] ?></a>
        <span class="ri-arrow-right-s-line"></span>
        <a href="/<?= $country.'/search/?q='.$product['name'] ?>/" class="text-warning text-decoration-none"><?= $product['name'] ?></a>

        <div class="d-sm-flex w-100 my-4">
            <div class="col-sm-6 col-12 mb-4 d-sm-flex">
                <div>
                    <!-- ONLY ADD onclick -->
                    <img 
                      src="/uploads/products/<?= $product['img'] ?? '' ?>" 
                      class="w-100" 
                      alt="<?= $product['alt'] ?>"
                      style="cursor:pointer"
                      onclick="openFullSwiper(0)"
                    >
                </div>

                <div class="col-sm-2 col-12 d-flex d-sm-block">
                    <?php foreach($main->get_all_image_by_id($product['id']) as $i=>$img): ?>
                        <img 
                          src="/uploads/products/<?= $img['img']; ?>" 
                          style="max-width:100px;cursor:pointer" 
                          class="w-100 py-1" 
                          alt="<?= $img['alt']; ?>"
                          onclick="openFullSwiper(<?= $i ?>)"
                        >
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="w-100 px-2">
                <h1 class="display-5 fw-bold m-0 p-0 fs-4"><?= $product['name'] ?></h1>
                <p class="lead text-warning">
                   <?= $product['description']; ?>
                   <div><?= $product['location'] ?></div>
                </p>

                <p class="fs-5">
                    <span class="fw-bold"><?= $product['symbol'].$product['amount'] ?></span>
                    <del class="fw-bold text-danger px-2">-<?= $product['symbol'].$product['pro_cut_off'] ?></del>
                </p>

                <div class="d-flex gap-3 flex-wrap">
                    <a href="/<?= $country ?>/carts/<?= $product['id'] ?>" class="btn btn-success btn-lg">
                        Add To Carts
                    </a>
                    <a href="https://wa.me/+2349039570800" class="btn btn-outline-light btn-lg">
                        Contact Sales
                    </a>
                    <div class="p-3 text-light">
                        <a href="/<?= $country. '/promotion/'. $product['pro_sku'] ?>" class="text-success"><?= $product['pro_desc']; ?></a>
                        <div class="text-white">when products is added to cart its leaves cart within 40mins when transaction is not sealed</div>
                    </div>
                </div>
            </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="container">
    <h4 class="text-capitalize">related products</h4>
    <div class="d-flex flex-wrap">
    <?php foreach ($main->get_related_products($product['category_id'], selectCountry($conn, $country)) as $p): ?>
    <a href="/<?= $country ?>/products?id=<?= $p['id'] ?>" class="col-sm-3 col-6 text-dark p-2 position-relative text-decoration-none">
        <div class="border-0 p-2">
            <img src="/uploads/products/<?= $p['img'] ?? 'default.jpg' ?>" class="product-img card-img-top">
            <div class="position-absolute bg-warning-subtle m-1 top-0 end-0"><?= $p['country_name'] ?></div>
            <div class="p-2" style="font-size:small">
                <h6><?= $p['name'] ?></h6>
                <p class="mb-1"><?= $p['location'] ?></p>
                <strong><?= $p['currency_symbol'] ?><?= number_format($p['amount']) ?></strong>
            </div>
        </div>
    </a>
    <?php endforeach; ?>
    </div>
</section>

<!-- ================= FULL PAGE SWIPER (ADDED ONLY) ================= -->
<div id="fullPageSwiper">
  <div class="swiper fullSwiper">
    <div class="swiper-wrapper">
      <?php foreach($main->get_all_image_by_id($product['id']) as $img): ?>
        <div class="swiper-slide">
          <img src="/uploads/products/<?= $img['img'] ?>" alt="<?= $img['alt'] ?>">
        </div>
      <?php endforeach; ?>
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="swiper-close" onclick="closeFullSwiper()">✕</div>
</div>

<style>
#fullPageSwiper{
  position:fixed;
  inset:0;
  background:#000;
  z-index:99999;
  display:none;
}
#fullPageSwiper.active{display:block;}
.fullSwiper{width:100vw;height:100vh;}
.fullSwiper img{max-width:100%;max-height:100vh;object-fit:contain;margin:auto;display:block;}
.swiper-close{
  position:fixed;
  top:15px;
  right:20px;
  font-size:32px;
  color:#fff;
  cursor:pointer;
  z-index:100000;
}
</style>

<script>
let fullSwiper;
function openFullSwiper(index){
  document.body.style.overflow='hidden';
  document.getElementById('fullPageSwiper').classList.add('active');

  if(!fullSwiper){
    fullSwiper = new Swiper('.fullSwiper',{
      loop:true,
      navigation:{nextEl:'.swiper-button-next',prevEl:'.swiper-button-prev'},
      pagination:{el:'.swiper-pagination',clickable:true},
      keyboard:true
    });
  }
  fullSwiper.slideToLoop(index,0);
}

function closeFullSwiper(){
  document.body.style.overflow='';
  document.getElementById('fullPageSwiper').classList.remove('active');
}
</script>

<?php include __DIR__."/../compo/footer.php"; ?>
