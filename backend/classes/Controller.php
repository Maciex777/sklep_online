<?php
abstract class Controller{
	// klasa kontrolera realizująca działanie modelu mvc
	protected $request;
	protected $action;

	public function __construct($action, $request){

		$this->action = $action;
		$this->request = $request;

	}

	public function executeAction(){

		return $this->{$this->action}();

	}
// wyświetla odpowiednią podstronę z odpowiedniego folderu
// folder to nazwa kontrollera, plik to nazwa akcji
	protected function returnView($viewmodel, $fullview){

		$view = 'views/'. get_class($this). '/' . $this->action. '.php';

		if($fullview){

			require('views/main.php');

		} else {

			require($view);

		}

	}

}
