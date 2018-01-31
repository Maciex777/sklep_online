<?php
session_start();
require('../config.php');

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
  $cart = array();
  $products = new PDO ("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
  //$_SESSION['product_value'] = array();
  //  $_SESSION['order_value'] = null;
$i = 0;
  foreach ($_SESSION['cart'] as $id=>$count){
  $koszyk =  $products->prepare('SELECT product_id , product_name , product_cost , product_image FROM products WHERE product_id = :id');
    $koszyk->bindValue(':id' , $id, PDO::PARAM_INT);
    //$koszyk->bind(':id' , $id);
   $product = $koszyk->execute();
  // $koszyk->fetchAll(PDO::FETCH_ASSOC);
//$cart['product_name'][$i] = $product['product_name'];
$item_in_cart = $koszyk->fetch(PDO::FETCH_ASSOC);
array_push($cart, $item_in_cart);
    //array_push($items_in_cart,$product);

    //  $_SESSION['order_value'] += ($product['product_cost']*$_SESSION['cart'][$product['product_id']]);
    //$_SESSION['product_value'][$product['product_id']] = $_SESSION['cart'][$product['product_id']]*$product['product_cost'];
    $i++;
  }

  //echo $items_in_cart;
//$json_string = json_encode($items_in_cart, JSON_PRETTY_PRINT);
//echo $json_string;
//echo $ans;
$ustr = array('\u0104','\u0106','\u0118','\u0141','\u0143','\u00d3','\u015a','\u0179','\u017b','\u0105','\u0107','\u0119','\u0142','\u0144','\u00f3','\u015b','\u017a','\u017c');
$plstr = array('Ą','Ć','Ę','Ł','Ń','Ó','Ś','Ź','Ż','ą','ć','ę','ł','ń','ó','ś','ź','ż');

echo str_replace($ustr,$plstr,json_encode($cart,JSON_PRETTY_PRINT));

//print_r($items_in_cart);

}
//echo json_encode($cart, JSON_PRETTY_PRINT);
//print_r($cart);
?>
