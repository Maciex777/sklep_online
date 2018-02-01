<?php
session_start();
// usuwanie z koszyka

//akutalizacja wartosci zamowienia
$_SESSION['order_value'] -= $_POST['price']*$_POST['count'];

if ($_SESSION['order_value'] < 0){
//zabezpieczenie przed ujemna wartoscia zamowienia
  $_SESSION['order_value'] = 0;

}

// odpiecie id naszego usnietego produktu ze zmiennej sesji koszyk
unset($_SESSION['cart'][$_POST['id']]);

if (empty($_SESSION['cart'])){
// jezeli zostaly usuniete wszystkie rpdoutky z koszyka to odpinana jest zmienna sesji koszyk
  unset($_SESSION['cart']);

}

?>
