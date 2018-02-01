<?php
class Home extends Controller{

	protected function Index(){

		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Index(), true);

	}

	protected function About(){

		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->About(), true);

	}

	protected function Kontakt(){

		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Kontakt(), true);

	}

	protected function Regulamin(){

		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Regulamin(), true);

		}

	}
