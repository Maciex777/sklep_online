<?php
session_start();
$product_id = $_SESSION['now_id'];
if (!isset($_SESSION['cart'])){
  $_SESSION['cart'] = array();
}

if (!isset($_SESSION['cart'][$product_id])){
  $_SESSION['cart'][$product_id] = null;
}
$_SESSION['cart'][$product_id] += 1;

 ?>
