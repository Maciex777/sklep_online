<?php
session_start();
$product_id = $_POST['product_id'];
if (!isset($_SESSION['cart'])){
  $_SESSION['cart'] = array();
}

if (!isset($_SESSION['cart'][$product_id])){
  $_SESSION['cart'][$product_id] = null;
}
$_SESSION['cart'][$product_id] += $_POST['product_count'];

if (!isset($_SESSION['order_value'])) {
  $_SESSION['order_value'] = null;
}
$_SESSION['order_value'] += $_POST['product_cost']*$_POST['product_count'];
 ?>
