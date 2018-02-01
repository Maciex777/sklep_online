<?php


//require('./config.php');
class Menu {
  //protected $sql;
  protected $db;
  protected $menu;

  public function main_menu(){
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
    $stmt = $db->prepare("SELECT * FROM menu");
    $stmt->execute();

    foreach($stmt as $menu_item){

      if ($menu_item['parent'] == 1){
    echo    "
    <li class=\"dropdown menu-large nav-item\" id=\"js-menu-".strtolower($menu_item['main'])."\"><a href=\"". ROOT_URL.$menu_item['link'].$menu_item['id_in_child']."\" class=\"nav-link dropdown-toggle\">".$menu_item['main']."</a>
          <ul class=\"dropdown-menu megamenu my-dropdown-menu\" id=\"js-dropdown-".strtolower($menu_item['main'])."\">
            <div class=\"row\">";
            $this->subMenu($menu_item['id_in_child'],$db);
            echo "</div>
          </ul>
        </li>";
      } else if ($menu_item['parent'] == 0){

        echo "
        <li class=\"nav-item\"><a href=\"". ROOT_URL .$menu_item['link']."\" class=\"nav-link\">".$menu_item['main']."</a></li> ";

      }

    }
  }



  public function subMenu($parent_id,$db){
    $submenu = $db->prepare("SELECT * FROM categories WHERE parent_category_id = :parent_id");
    $submenu->bindValue(':parent_id', $parent_id, PDO::PARAM_INT);
    $submenu->execute();
    foreach ($submenu as $submenu_item){
    //  $_SESSION['current_category'] = ucfirst(str_replace('_',' ',$submenu_item['category']));
      echo "<li class=\"col-md-3\">
          <ul>
            <li class=\"dropdown-header\">".ucfirst(str_replace('_',' ',$submenu_item['category']))."</li>";
      if ($submenu_item['is_parent'] == 1 ){
        $this->subSubMenu($submenu_item['id'],$db);
      }
      echo "</ul>
    </li>";
    }

  }
  public function subSubMenu($sub_parent_id, $db){
    $subsubmenu = $db->prepare("SELECT * FROM categories WHERE parent_category_id = :sub_parent_id");
    $subsubmenu->bindValue(':sub_parent_id' , $sub_parent_id , PDO::PARAM_INT);
    $subsubmenu->execute();
    foreach($subsubmenu as $subsubmenu_item){
      echo "<li><a href=\"".ROOT_URL."sklep/produkty/".$subsubmenu_item['id']."\">".ucfirst(str_replace('_',' ',$subsubmenu_item['category']))."</a>
      </li>";
    }
    echo "<li class=\"divider\"></li>";
  }
}

$menu_all = new Menu();
$menu_all->main_menu();
?>
<!-- <div class="row col-md-12">
  <nav class="fixtop navbar navbar-expand-md navbar-light mx-auto mx-sm-0">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span> MENU
      </button>
      <div class="navbar-collapse collapse" id="collapsibleNavbar">
        <ul class="nav navbar-nav">
          <li class="dropdown menu-large nav-item"><a href="<?php //echo ROOT_URL; ?>sklep/kategoria/9" class="nav-link dropdown-toggle">Pani</a>
            <ul class="dropdown-menu megamenu my-dropdown-menu">
              <div class="row">
                <li class="col-md-3">
                  <ul>
                    <li class="dropdown-header">Piżamy i rajstopy</li>
                    <li><a href="#">Pozycja 1</a>
                    </li>
                    <li class="disabled"><a href="#">Pozycja 2</a>
                    </li>
                    <li><a href="#">Pozycja 3</a>
                    </li>
                    <li class="divider"></li>
                  </ul>
                </li>
                <li class="col-md-3">
                  <ul>
                    <li class="dropdown-header">Bielizna i getry</li>
                    <li><a href="#">Pozycja 1</a>
                    </li>
                    <li><a href="#">Pozycja 2</a>
                    </li>
                    <li><a href="#">Pozycja 3</a>
                    </li>
                    <li><a href="#">Pozycja 4</a>
                    </li>
                    <li><a href="#">Pozycja 5</a>
                    </li>
                    <li class="divider"></li>
                  </ul>
                </li>
                <li class="col-md-3">
                  <ul>
                    <li class="dropdown-header">Bielizna</li>
                    <li><a href="#">Pozycja 1</a>
                    </li>
                    <li><a href="#">Pozycja 2</a>
                    </li>
                    <li><a href="#">Pozycja 3</a>
                    </li>
                    <li class="divider"></li>
                  </ul>
                </li>
                <li class="col-md-3">
                  <ul>
                    <li class="dropdown-header">Spodnie</li>
                    <li><a href="#">Pozycja 1</a>
                    </li>
                    <li><a href="#">Pozycja 2</a>
                    </li>
                    <li><a href="#">Pozycja 3</a>
                    </li>
                    <li><a href="#">Pozycja 4</a>
                    </li>
                    <li><a href="#">Pozycja 5</a>
                    </li>
                    <li><a href="#">Pozycja 6</a>
                    </li>
                    <li><a href="#">Pozycja 7</a>
                    </li>
                    <li><a href="#">Pozycja 8</a>
                    </li>
                    <li><a href="#">Pozycja 9</a>
                    </li>
                  </ul>
                </li>
              </div>
            </ul>
          </li>
          <li class="dropdown menu-large nav-item"><a href="<?php// echo ROOT_URL; ?>sklep/kategoria/1" class="nav-link dropdown-toggle">Pan</a>
            <ul class="dropdown-menu megamenu my-dropdown-menu">
              <div class="row">
                <li class="col-md-3">
                  <ul>
                    <li class="dropdown-header">Bielizna</li>
                    <li><a href="#">Pozycja 1</a>
                    </li>
                    <li class="disabled"><a href="#">Pozycja 2</a>
                    </li>
                    <li><a href="#">Pozycja 3</a>
                    </li>
                    <li class="divider"></li>
                  </ul>
                </li>
                <li class="col-md-3">
                  <ul>
                    <li class="dropdown-header">Piżamy i szlafroki</li>
                    <li><a href="#">Pozycja 1</a>
                    </li>
                    <li><a href="#">Pozycja 2</a>
                    </li>
                    <li><a href="#">Pozycja 3</a>
                    </li>
                    <li><a href="#">Pozycja 4</a>
                    </li>
                    <li><a href="#">Pozycja 5</a>
                    </li>
                    <li class="divider"></li>
                  </ul>
                </li>
                <li class="col-md-3">
                  <ul>
                    <li class="dropdown-header">Podkoszulki</li>
                    <li><a href="#">Pozycja 1</a>
                    </li>
                    <li><a href="#">Pozycja 2</a>
                    </li>
                    <li><a href="#">Pozycja 3</a>
                    </li>
                    <li class="divider"></li>
                  </ul>
                </li>
                <li class="col-md-3">
                  <ul>
                    <li class="dropdown-header">Spodnie</li>
                    <li><a href="#">Pozycja 1</a>
                    </li>
                    <li><a href="#">Pozycja 2</a>
                    </li>
                    <li><a href="#">Pozycja 3</a>
                    </li>
                    <li><a href="#">Pozycja 4</a>
                    </li>
                    <li><a href="#">Pozycja 5</a>
                    </li>
                    <li><a href="#">Pozycja 6</a>
                    </li>
                    <li><a href="#">Pozycja 7</a>
                    </li>
                    <li><a href="#">Pozycja 8</a>
                    </li>
                    <li><a href="#">Pozycja 9</a>
                    </li>
                  </ul>
                </li>
              </div>
            </ul>
          </li>
          <li class="nav-item"><a href="<?php// echo ROOT_URL; ?>home/about" class="nav-link">O sklepie</a></li>
          <li class="nav-item"><a href="<?php //echo ROOT_URL; ?>home/kontakt" class="nav-link">Kontakt</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div> -->
