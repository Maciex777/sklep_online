<?php
session_start();
require('../config.php');
//wyswietlanie malego koszyka

//sprawdzenie czy zainicjowano zmienna sesji koszyk
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])){

  $cart = array();

//poczlaczenie z baza danych
  $products = new PDO ("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);

//przeszukanie zmiennej sesji koszyk
  foreach ($_SESSION['cart'] as $id=>$count){

//zapytanie o dane produktu w bazy danych
    $koszyk =  $products->prepare('SELECT product_id , product_name , product_cost , product_image FROM products WHERE product_id = :id');
    $koszyk->bindValue(':id' , $id, PDO::PARAM_INT);
    $product = $koszyk->execute();

//przygotowanie wyniku z bazy danych jako tablicy asocjacyjnej
    $item_in_cart = $koszyk->fetch(PDO::FETCH_ASSOC);
    //dodanie wyniku z bazy do tablicy $cart
    array_push($cart, $item_in_cart);

  }

//tablica znakow do zamiany kodow ascii na polskie znaki w pliku json`
  $ustr = array('\u0104','\u0106','\u0118','\u0141','\u0143','\u00d3','\u015a','\u0179','\u017b','\u0105','\u0107','\u0119','\u0142','\u0144','\u00f3','\u015b','\u017a','\u017c');

  $plstr = array('Ą','Ć','Ę','Ł','Ń','Ó','Ś','Ź','Ż','ą','ć','ę','ł','ń','ó','ś','ź','ż');

// wyswietlenie pliku json ze zminionymi znakami i wygladem tablicy asocjacyjnej
  echo str_replace($ustr,$plstr,json_encode($cart,JSON_PRETTY_PRINT));

}
?>
