<?php
session_start();
require('config.php');
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
  $items_in_cart = array();
  $koszyk = new PDO ("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
  //$_SESSION['product_value'] = array();
  //  $_SESSION['order_value'] = null;

  foreach ($_SESSION['cart'] as $id=>$count){
    $koszyk->query('SELECT * FROM products WHERE product_id = :id');
    $koszyk->bind(':id' , $id);
    $product = $koszyk->execute();
    array_push($items_in_cart,$product);

    //  $_SESSION['order_value'] += ($product['product_cost']*$_SESSION['cart'][$product['product_id']]);
    //$_SESSION['product_value'][$product['product_id']] = $_SESSION['cart'][$product['product_id']]*$product['product_cost'];
  }

  $ans = json_encode($items_in_cart);
  $ans;
}

?>
