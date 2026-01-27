<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Categories</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <h1 class="mb-4">Product Categories</h1>
    <div class="row g-3">
        <?php
        // Example categories array (replace with database fetch)
        $categories = [
            ['id'=>1,'name'=>'Electronics','img'=>'https://via.placeholder.com/200x150?text=Electronics'],
            ['id'=>2,'name'=>'Fashion','img'=>'https://via.placeholder.com/200x150?text=Fashion'],
            ['id'=>3,'name'=>'Home Appliances','img'=>'https://via.placeholder.com/200x150?text=Home+Appliances'],
            ['id'=>4,'name'=>'Books','img'=>'https://via.placeholder.com/200x150?text=Books'],
            ['id'=>5,'name'=>'Sports','img'=>'https://via.placeholder.com/200x150?text=Sports'],
        ];

        foreach($categories as $cat): ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="products.php?category_id=<?= $cat['id'] ?>" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img src="<?= $cat['img'] ?>" class="card-img-top" alt="<?= htmlspecialchars($cat['name']) ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= htmlspecialchars($cat['name']) ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
