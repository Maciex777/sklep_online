<?php
class UserModel extends Model{



	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$error_login = "";

//sprawdzenie czy przekierowano poprzez wcisniecie submit w formurzu logowania
		if(isset($post['submit']) && $post['submit'] === "login"){
			// Compare Login

//pobranie z bazy rekordu zawierajacego podany email
			$this->query("SELECT * FROM users WHERE email = :email");
			$this->bind(':email', $post['email']);
			//	$this->bind(':password', $password);
			$row = $this->single();

//sprawdzenie czy zapytanie do bazy zwrocilo rekord i podane haslo jest takie samo jak to w bazie
//jezeli nie to znaczy ze podano zly email albo nie ma takiego emaila w bazie

			if($row && password_verify($post['password'],$row['password'])){

//ustawienie zmiennej sesji is_logged_in jako true - czyli zalogowanie użytkownika
				$_SESSION['is_logged_in'] = true;
				// przypisanie danych uzytkownika do zmiennej sesji na potrzeby szybkiego wypelniania formularzy na stronie
				$_SESSION['user_data'] = array(
					"id"	=> $row['id'],
					"name"	=> $row['name'],
					"surname" => $row['surname'],
					"role" => $row['role'],
					"registration_date" => $row['registration_date'],
					"email"	=> $row['email'],
					"phone_number" => $row['phone_number']

				);

//przekierowanie na stronę głowna
				header('Location: '.ROOT_URL);

			} else {
//powrot do formularza logowania z komunikatem
				$error_login = "Podano nieprawidłowe dane logowania!";
				return $error_login;

			}

		}

		return;

	}


//funkcja dla akcji account
//wywietlenie danych z bazy dla zalogowanego uzytkowniika
	public function account(){
//odpiecie zmiennej response ktorej uzytko pozniej
		unset($_SESSION['response']);
//sprawdzenie czy uzytkownik jest zalogowany
		if (!isset($_SESSION['is_logged_in'])) {

			//header('Location: '.ROOT_URL.'users/login');

		} else {

//sprawdzenie czy przekierowano poprzez wcisniecie przycisku submit do zmiany hasla
			if (isset($_POST['submit']) && $_POST['submit'] === "password_change"){

//pobranie rekordu z bazy danych z danymi zalogowanej osoby
				$this->query('SELECT * FROM users WHERE email = :email');
				$this->bind(':email' , $_SESSION['user_data']['email']);
				$user = $this->single();

//sprawdzenie czy podano haslo takie samo jak w bazie danych
//jezeli tak to kontynuuje zmiane hasla
				if (password_verify($_POST['old_password'],$user['password'])) {

//sprawdzenie czy nowe haslo podane w dwoch polach jest takie samo
					if ($_POST['new_password_1'] === $_POST['new_password_2']){

//jezeli hasla sa takie same, to zostaje ono zahashowane
						$pass_hash = password_hash($_POST['new_password_1'], PASSWORD_DEFAULT);
						//podmiana hasla na nowe w bazie danych
						$this->query('UPDATE users SET password = :pass_new WHERE email = :email');
						$this->bind(':pass_new' , $pass_hash);
						$this->bind(':email' , $_SESSION['user_data']['email']);
						$this->execute();

//odpwiedz gdy zmieniono haslo
						$_SESSION['response'] = "Hasło zostało zmienione";

					} else {
//odpowiedz gdy nie zmieniono hasla
						$_SESSION['response'] = "Nowe hasła nie są takie same";

					}

				} else {
//odpowiedz gdy podano nie poprawne haslo
					$_SESSION['response'] = "Podano niepoprawne hasło";

				}

			}
//zapytanie do bazy danych o dane adresowe zalogowanego uzytkownika
			$this->query('SELECT * FROM users_adres_data WHERE user_id = :user_id');
			$this->bind(':user_id' , $_SESSION['user_data']['id']);
			$adres = $this->single();

			return $adres;

		}

	}

}
?>
