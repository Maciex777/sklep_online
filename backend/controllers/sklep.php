<?php

class Sklep extends Controller {

protected function kategoria(){
  $viewmodel = new SklepModel();
  $this->returnView($viewmodel->kategoria(), true);
}

protected function produkt(){
  $viewmodel = new SklepMoel();
  $this->returnView($viewmodel->produkt(), true);
}

}

 ?>
