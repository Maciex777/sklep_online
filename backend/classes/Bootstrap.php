<?php
class Bootstrap{
	private $controller;
	private $action;
	private $request;
	public $id;

	public function __construct($request){
		$this->request = $request;
		//sprawdzenie wartości id w url i przypisanie do zmiennej id
		if (isset($this->request['id']) && $this->request['id'] != null && $this->request['id'] != 0){
		$this->id = $this->request['id'];
	}
	// sprawdzenie czy podano kontroler, jeżeli nie to ustawiany jest na home
		if($this->request['controller'] == ""){
			$this->controller = 'home';
		} else {
			// jeżeli tak to przypisany do zmiennej controller
			$this->controller = $this->request['controller'];
		}
		// sprawdzanie czy podano akcje, jeżeli nie to ustawiany jest na index
		if($this->request['action'] == ""){
			$this->action = 'index';
		} else {
			// jeżeli tak to przypisany do zmiennej action
			$this->action = $this->request['action'];
		}
	}

	public function createController(){
		// Check Class
		if(class_exists($this->controller)){
			$parents = class_parents($this->controller);
			// Check Extend
			if(in_array("Controller", $parents)){
				if(method_exists($this->controller, $this->action)){
					return new $this->controller($this->action, $this->request);
				} else {
					// Method Does Not Exist
					echo '<h1>Method does not exist</h1>';
					return;
				}
			} else {
				// Base Controller Does Not Exist
				echo '<h1>Base controller not found</h1>';
				return;
			}
		} else {
			// Controller Class Does Not Exist
			echo '<h1>Controller class does not exist</h1>';
			return;
		}
	}
}
