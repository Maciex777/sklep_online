<?php

class Sklep extends Controller {

  protected function kategoria(){

    $viewmodel = new SklepModel();
    $this->returnView($viewmodel->kategoria(), true);

  }

  protected function produkt(){

    $viewmodel = new SklepModel();
    $this->returnView($viewmodel->produkt(), true);

  }

  protected function produkty(){

    $viewmodel = new SklepModel();
    $this->returnView($viewmodel->produkty(), true);

  }

  protected function koszyk(){

    $viewmodel = new SklepModel();
    $this->returnView($viewmodel->koszyk(), true);

  }

  protected function kasa(){

    $viewmodel = new SklepModel();
    $this->returnView($viewmodel->kasa(), true);

  }

}

?>
