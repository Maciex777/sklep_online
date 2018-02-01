<?php
session_start();
//pobranie id przekazanego przez ajaxa
$product_id = $_POST['product_id'];

//sprawdzenie czy zainicjowano zmienna sesji koszyk
if (!isset($_SESSION['cart'])){
//przypisanie typu tablicowego do zmiennej sesji koszyk
  $_SESSION['cart'] = array();

}

// sprawdzenie czy zmienna koszyk na podanym id ma juz jakas wartosc
if (!isset($_SESSION['cart'][$product_id])){
//przypisanie wartosci null
  $_SESSION['cart'][$product_id] = null;

}

//aktualizajca ilosci porduktow w koszyku na podanej pozycji
$_SESSION['cart'][$product_id] += $_POST['product_count'];

//sprawdzenie czy zainicjowano zmienna sesji wartosc zamowienia
if (!isset($_SESSION['order_value'])) {

  $_SESSION['order_value'] = null;

}
//aktualizacja zmiennej sesji wartosc zamowienia
$_SESSION['order_value'] += $_POST['product_cost']*$_POST['product_count'];
?>
