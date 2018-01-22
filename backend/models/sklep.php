<?php

class SklepModel extends Model {
protected $id_category;
protected $id_product;
protected $sub;
protected $category;

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
  return;
}

public function produkty(){
  $this->id_category = $_GET['id'];

  $this->query('SELECT * FROM categories');
  $category = $this->resultSet();
  $current_id = $this->id;
  $category_path = '';
  for ($i=0; $i<count($category);$i++){

    
    if ($category['id'][$i] == $current_id && $current_id !=0){
      $current_category = $category['category'];
      $current_category .= $category_path;
      $category_path = $current_category;
    }


  }

  $this->query('SELECT * FROM products WHERE product_category = :id_category');
  $this->bind(':id_category' , $this->id_category);
  $products= $this->resultSet();
  return $products;
}
}

 ?>
