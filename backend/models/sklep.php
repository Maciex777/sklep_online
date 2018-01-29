<?php

class SklepModel extends Model {
  protected $id_category;
  protected $product_id;
  protected $sub;
  protected $category;
  protected $products;
  public $product;

  public function kategoria(){
    $this->id_category = $_GET['id'];

    $this->query('SELECT * FROM categories WHERE id = :id_category');
    $this->bind(':id_category' , $this->id_category);
    $category = $this->single();

    if($category){
      $_SESSION['category'] = ucwords(str_replace('_',' ',$category['category']));

    }

    $this->query('SELECT * FROM categories WHERE parent_category_id = :id_category');
    $this->bind(':id_category' , $this->id_category);
    $sub = $this->resultSet();


    return $sub;
  }

  public function produkt(){

    $this->product_id = $_GET['id'];
  //  $_SESSION['now_id'] = $_GET['id'];

    if (isset($_POST['cart_action']) && $_POST['cart_action'] === "Dodaj do koszyka"){

      if (!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
      }

      if (!isset($_SESSION['cart'][$this->product_id])){
        $_SESSION['cart'][$this->product_id] = null;
      }
      $_SESSION['cart'][$this->product_id] += 1;

      unset($_POST['cart_action']);
    }



    $this->query('SELECT * FROM categories WHERE id = :id_category');
    $this->bind(':id_category' , $this->id_category);
    $category = $this->single();

    if($category){
      $_SESSION['category'] = ucwords(str_replace('_',' ',$category['category']));
    }

    $this->query('SELECT * FROM products WHERE product_id = :product_id');
    $this->bind(':product_id' , $this->product_id);
    $product = $this->single();
    return $product;
  }

  public function produkty(){
    $this->id_category = $_GET['id'];
    $this->query('SELECT * FROM categories WHERE id = :category_id');
    $this->bind(':category_id' , $this->id_category);
    $category = $this->single();
      $_SESSION['category_id'] = $category['parent_category_id'];

    $_SESSION['current_category'] = ucfirst(str_replace('_',' ',$category['category']));
    $this->query('SELECT * FROM products WHERE product_category = :id_category');
    $this->bind(':id_category' , $this->id_category);
    $products= $this->resultSet();
    return $products;
  }

  public function koszyk(){
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
    $items_in_cart = array();
    $_SESSION['product_value'] = array();
  //  $_SESSION['order_value'] = null;

    foreach ($_SESSION['cart'] as $id=>$count){
    $this->query('SELECT * FROM products WHERE product_id = :id');
    $this->bind(':id' , $id);
    $product = $this->single();
    array_push($items_in_cart,$product);

  //  $_SESSION['order_value'] += ($product['product_cost']*$_SESSION['cart'][$product['product_id']]);
    $_SESSION['product_value'][$product['product_id']] = $_SESSION['cart'][$product['product_id']]*$product['product_cost'];
  }
  return $items_in_cart;
} else {
  	header('Location: '.ROOT_URL);
}}

public function kasa(){
if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){
  $this->query("SELECT * FROM users_adres_data WHERE user_id = :user_id");
  $this->bind(":user_id" , $_SESSION['user_data']['id']);
  $adres_data = $this->single();

  return $adres_data;
}

  return;
}
}

?>
