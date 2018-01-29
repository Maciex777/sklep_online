<?php
session_start();
$_SESSION['order_value'] -= $_POST['price']*$_POST['count'];
if ($_SESSION['order_value'] < 0){ $_SESSION['order_value'] = 0;}
unset($_SESSION['cart'][$_POST['id']]);
if (empty($_SESSION['cart'])){
  unset($_SESSION['cart']);
}
//if empty($_SESSION['cart']){unset($_SESSION['cart']);}
//header('Location: '.ROOT_URL);

 ?>
