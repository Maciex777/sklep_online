<?php
//aktualizacja koszyka po dodaniu nowego produktu


$_SESSION['cart'][$_POST['product_id']] = $_POST['product_count_now'];


if ($_SESSION['cart'][$_POST['product_id']] === "0"){
  unset($_SESSION['cart'][$_POST['product_id']]);
}



?>
