<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/product.php');

// require Cart Class
require ('database/Cart.php');

require ('database/order.php');




// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );

$Order = new Order($db);

$product2 = new Product($db);

?>