<?php

class SklepModel extends Model {

  protected $id_category;
  protected $product_id;
  protected $sub;
  protected $category;
  protected $products;
  public $product;

//funkcja dla akcji kategoria
//wyświetla wszystkie podkategorie
  public function kategoria(){

//pobranie id z url aby okreslic kategorie dla ktorej szukamy podkategorii
    $this->id_category = $_GET['id'];

//zapytanie pobierające rekord z bazy danych odpowiadający naszemu id
    $this->query('SELECT * FROM categories WHERE id = :id_category');
    $this->bind(':id_category' , $this->id_category);
    $category = $this->single();

//jeżeli zostało coś zwrocone to
    if($category){

//obecna kategoria przymuje nazwę kategorii z pobranego rekordu
      $_SESSION['category'] = ucwords(str_replace('_',' ',$category['category']));
      //określenie kategorii rodzic naszej kategorii
      $_SESSION['parent_category_id'] = $category['parent_category_id'];

    }

//zapytanie szukające w bazie dzieci obecnej kategorii
    $this->query('SELECT * FROM categories WHERE parent_category_id = :id_category');
    $this->bind(':id_category' , $this->id_category);
    $sub = $this->resultSet();

// zwrocenie wynikow
    return $sub;

  }

//funkcja dla akcji produkt
//wyswietla konkretny produkt
  public function produkt(){

//pobiera z url id produktu do wyswietlenia
    $this->product_id = $_GET['id'];

//sprawdzenie czy wywołanie nastąpiło poprzez kliknięcie przycisku dodaj do koszyka
    if (isset($_POST['cart_action']) && $_POST['cart_action'] === "Dodaj do koszyka"){

// sprawdzenie czy zainicjowano zmienną sesji o nazwie cart - koszyk
      if (!isset($_SESSION['cart'])){
        //przypisanie zmiennej sesji cart typu tablicowego
        $_SESSION['cart'] = array();

      }

//sprawdzenie czy w zmiennej sesji cart zainicjowano pozycje o id naszego produktu
      if (!isset($_SESSION['cart'][$this->product_id])){

//przypisanie pozycji o id naszego produktu
        $_SESSION['cart'][$this->product_id] = null;

      }

//inkrementacja ilosci produktu w koszyku
      $_SESSION['cart'][$this->product_id] += 1;

//odłączenie cart_action
      unset($_POST['cart_action']);

    }

//zapytanie do bazy danych o categorie
    $this->query('SELECT * FROM categories WHERE id = :id_category');
    $this->bind(':id_category' , $this->id_category);
    $category = $this->single();

    if($category){


      $_SESSION['category'] = ucwords(str_replace('_',' ',$category['category']));
      $_SESSION['current_category'] = ucwords(str_replace('_',' ',$category['category']));

    }

// zapytanie do bazy danych o nasz produkt
    $this->query('SELECT * FROM products WHERE product_id = :product_id');
    $this->bind(':product_id' , $this->product_id);
    $product = $this->single();

    return $product;

  }

//funkcja dla akcji produkty
//wyswietla wszystkie produkty dla podanej kategorii
  public function produkty(){

//podanie id z url
    $this->id_category = $_GET['id'];

// zapytanie o kategorie
    $this->query('SELECT * FROM categories WHERE id = :category_id');
    $this->bind(':category_id' , $this->id_category);
    $category = $this->single();

//sprawdzenie czy ma rodzica
    if ($category['parent_category_id'] == 0){

      $_SESSION['category_id'] = $category['id'];

    } else {

      $_SESSION['category_id'] = $category['parent_category_id'];

    }

//sprawdzenie czy jest rodzicem
    if ($category['is_parent'] == 1){

      $_SESSION['current_category'] = ucfirst(str_replace('_',' ',$category['category']));

//pobranie wszystkich dzieci kategorii dla naszej kategorii
      $this->query('SELECT * FROM categories WHERE parent_category_id = :parent_id');
      $this->bind(':parent_id' , $this->id_category);
      $categories = $this->resultSet();

      $products = array();

//iteracja przez otrzymane kategorie
      foreach ($categories as $cat){
//pobranie produktow dla poszczegolnych kategorii
        $this->query('SELECT * FROM products WHERE product_category = :category_id');
        $this->bind(':category_id' , $cat['id']);
        $products_partial = $this->resultSet();
        //polaczenie tablicy ze wszystkimi produktami z tablica z produktami dla danej kategorii
        $products = array_merge($products,$products_partial);

      }

    }else{ //gdy kategoria nie jest rodzicem

      $_SESSION['current_category'] = ucfirst(str_replace('_',' ',$category['category']));

//wyswietlenie produktow dla kategorii
      $this->query('SELECT * FROM products WHERE product_category = :id_category');
      $this->bind(':id_category' , $this->id_category);
      $products= $this->resultSet();

    }

    return $products;

  }

//funkcja dla akcji koszyka
//wyswietla koszyk
  public function koszyk(){

//sprawdzenie czy zmienna sesji koszyk zostala zainicjowana i czy nie jest pusta
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
//deklaracja zmiennej ktora bedzie przechowywac produkty z koszyka
      $items_in_cart = array();
      //zmienna sejsi przechowujaca wartosc dla poszczegolnych produktow z koszyka
      $_SESSION['product_value'] = array();

//przeszukanie zmiennej sesji koszyk w poszukiwaniu produktow
      foreach ($_SESSION['cart'] as $id=>$count){

//zapytanie do bazy o poszczegolne produkty
        $this->query('SELECT * FROM products WHERE product_id = :id');
        $this->bind(':id' , $id);
        $product = $this->single();

//podpięcie wyniku do zmiennej $items_in_cart
        array_push($items_in_cart,$product);

//aktualizacja indeksu w tablicy z wartosciami produktow
        $_SESSION['product_value'][$product['product_id']] = $_SESSION['cart'][$product['product_id']]*$product['product_cost'];

      }

      return $items_in_cart;

    } else {
//gdy koszyk jest pusty przekierowuje nas na stronę głowna
      header('Location: '.ROOT_URL);

    }

  }

//funckja dla akcji klasa
//wyswietla zamowienie
  public function kasa(){

//sprawdzenie czy uzytkownik jest zalogowany
    if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true){

//pobranie danych zalogowanego uzytkownika
      $this->query("SELECT * FROM users_adres_data WHERE user_id = :user_id");
      $this->bind(":user_id" , $_SESSION['user_data']['id']);
      $adres_data = $this->single();

      return $adres_data;

    }

    return;

  }

}

?>
