<?php
//wyswietlanie menu z bazy danych

//require('./config.php');
class Menu {

  protected $db;
  protected $menu;

//funkcja wyswitlajaca cale menu
  public function main_menu(){

//polaczenie z baza danych
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
//przygotowanie zapytania w celu pobrania tabeli menu
    $stmt = $db->prepare("SELECT * FROM menu");
    $stmt->execute();

//przesukiwanie wyniku z tablicy menu
    foreach($stmt as $menu_item){

//sprawdzenie czy dany element tabeli menu jest rodzicem
      if ($menu_item['parent'] == 1){
//wyswietlnie kodu html dla rodzica aby mial rozwijane podmenu
    echo    "
    <li class=\"dropdown menu-large nav-item\" id=\"js-menu-".strtolower($menu_item['main'])."\"><a href=\"". ROOT_URL.$menu_item['link'].$menu_item['id_in_child']."\" class=\"nav-link dropdown-toggle\">".$menu_item['main']."</a>
          <ul class=\"dropdown-menu megamenu my-dropdown-menu fade-in\" id=\"js-dropdown-".strtolower($menu_item['main'])."\">
            <div class=\"row\">";
            //wywolanie funkcji wyswietlajacej podmenu
            $this->subMenu($menu_item['id_in_child'],$db);
            echo "</div>
          </ul>
        </li>";

      } else if ($menu_item['parent'] == 0){ //jezeli nie jest rodzicem
//linki gdy element menu nie jest rodzicem
        echo "
        <li class=\"nav-item\"><a href=\"". ROOT_URL .$menu_item['link']."\" class=\"nav-link\">".$menu_item['main']."</a></li> ";

      }

    }

  }

//funckja wyswietlajaca podmenu
  public function subMenu($parent_id,$db){

//zapytanie do bazy danych w celu pobrania dzieci obecnego elemtnu menu
    $submenu = $db->prepare("SELECT * FROM categories WHERE parent_category_id = :parent_id");
    $submenu->bindValue(':parent_id', $parent_id, PDO::PARAM_INT);
    $submenu->execute();

//przesukiwanie wynikow z tabeli kategorie
    foreach ($submenu as $submenu_item){

      echo "<li class=\"col-md-3\">
          <ul>
            <li class=\"dropdown-header\">".ucfirst(str_replace('_',' ',$submenu_item['category']))."</li>";
// sprawdzenie czy dana kategoria jest rodzicem
      if ($submenu_item['is_parent'] == 1 ){
        //wywolanie funkcji w celu wyswietlnie podkategorii dla podanej kategorii
        $this->subSubMenu($submenu_item['id'],$db);
      }
      echo "</ul>
    </li>";
    }

  }

// funkcja wyswietlajaca pod kategorie dla kategorii
  public function subSubMenu($sub_parent_id, $db){

//zapytanie do bazy danych o dzieci
    $subsubmenu = $db->prepare("SELECT * FROM categories WHERE parent_category_id = :sub_parent_id");
    $subsubmenu->bindValue(':sub_parent_id' , $sub_parent_id , PDO::PARAM_INT);
    $subsubmenu->execute();

//przeszukanie wynikow z bazy danych
    foreach($subsubmenu as $subsubmenu_item){

      echo "<li><a href=\"".ROOT_URL."sklep/produkty/".$subsubmenu_item['id']."\">".ucfirst(str_replace('_',' ',$subsubmenu_item['category']))."</a>
      </li>";

    }

    echo "<li class=\"divider\"></li>";

  }

}

//inicjalizacja nowego obiektu klasy menu
$menu_all = new Menu();
//wywolanie funckji main_menu dla obiektu $menu_all
$menu_all->main_menu();
?>
