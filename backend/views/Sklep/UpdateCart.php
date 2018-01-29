<?php


$_SESSION['order_value'] -= $_SESSION['cart'][$_POST['product_id']]*$_POST['product_cost'];
$_SESSION['cart'][$_POST['product_id']] = $_POST['product_count_now'];

$_SESSION['order_value'] += $_SESSION['cart'][$_POST['product_id']]*$_POST['product_cost'];
if ($_SESSION['cart'][$_POST['product_id']] == "0"){
  unset($_SESSION['cart'][$_POST['product_id']]);
}



?>
