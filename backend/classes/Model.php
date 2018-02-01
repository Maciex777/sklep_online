<?php
abstract class Model{
	protected $dbh;
	protected $stmt;

	public function __construct(){
		// połączenie bazą danych
		$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);

	}

	public function query($query){
		// przygotowanie zapytania
		$this->stmt = $this->dbh->prepare($query);
	}

	//Binds the prep statement
	// przygotowanie wartości do zapytania
	public function bind($param, $value, $type = null){
 		if (is_null($type)) {
  			switch (true) {
    			case is_int($value):
      				$type = PDO::PARAM_INT;
      				break;
    			case is_bool($value):
      				$type = PDO::PARAM_BOOL;
      				break;
    			case is_null($value):
      				$type = PDO::PARAM_NULL;
      				break;
    				default:
      				$type = PDO::PARAM_STR;
  			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

	public function execute(){
		// wykonanie zapytania
		$this->stmt->execute();
	}

//funkcja wywołująca wykonanie zapytania gdy spodziewamy
// się więcej niż jednego rekordu jako rezultat
	public function resultSet(){
		$this->execute();
// przechwytuje wyniki zapytania i prezentuje je jako tabele asocjacyjną
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	//funkcja wywołująca wykonanie zapytania gdy spodziewamy
	// się jednego rekordu jako rezultat
	public function single(){
		$this->execute();
		// przechwytuje wynik zapytania i prezentuje go jako tabele asocjacyjną
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}
}
