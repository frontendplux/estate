<?php
include __DIR__.'/config/conn.php';
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router = explode('/', trim($path, '/')); // remove empty values
$country = $router[0] ?? '';
$route=$router[1] ?? '';
if($country == null){
  header('location:/'.strtoupper(getUserCountry()['code']).'/');
}
switch ($route) {
    case '':
    case 'home':
        include __DIR__.'/pages/landing/index.php';
        break;

    case 'products':
        include __DIR__.'/pages/products/index.php';
        break;

    case 'promotion':
        include __DIR__.'/pages/promotional/index.php';
        break;

    case 'category':
        include __DIR__.'/pages/category/index.php'; 
        break;

    case 'carts':
        include __DIR__.'/pages/carts/index.php'; 
        break;

    case 'checkout':
      include __DIR__.'/pages/checkout/index.php';
      break;

    default:
        echo "404 Not Found";
        break;
}
