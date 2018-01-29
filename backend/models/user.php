<?php
class UserModel extends Model{
	public function register(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = password_hash($post['password'], PASSWORD_DEFAULT);

		if(isset($post['submit']) && $post['submit'] == "register"){
			// Insert into MySQL
			$this->query('INSERT INTO users (name, surname, email, password) VALUES(:name, :email, :password)');
			$this->bind(':name', $post['name']);
			$this->bind(':surname', $post['surname']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'users/login');
			}
		}
		return;
	}

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$error_login = "";
		//$password = password_hash($post['password'], PASSWORD_DEFAULT);

		if(isset($post['submit']) && $post['submit'] === "login"){
			// Compare Login

			$this->query("SELECT * FROM users WHERE email = :email");
			$this->bind(':email', $post['email']);
			//	$this->bind(':password', $password);

			$row = $this->single();

			if($row && password_verify($post['password'],$row['password'])){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id"	=> $row['id'],
					"name"	=> $row['name'],
					"surname" => $row['surname'],
					"role" => $row['role'],
					"registration_date" => $row['registration_date'],
					"email"	=> $row['email'],
					"phone_number" => $row['phone_number']
				);

				header('Location: '.ROOT_URL);
			} else {
				$error_login = "Podano nieprawidłowe dane logowania!";
				return $error_login;
			}
		}
		return;
	}

	public function account(){
		unset($_SESSION['response']);
		if (!isset($_SESSION['is_logged_in'])) {

			//header('Location: '.ROOT_URL.'users/login');

		} else {

			if (isset($_POST['submit']) && $_POST['submit'] === "password_change"){

				$this->query('SELECT * FROM users WHERE email = :email');
				$this->bind(':email' , $_SESSION['user_data']['email']);
				$user = $this->single();

				if (password_verify($_POST['old_password'],$user['password'])) {

					if ($_POST['new_password_1'] === $_POST['new_password_2']){

						$pass_hash = password_hash($_POST['new_password_1'], PASSWORD_DEFAULT);
						$this->query('UPDATE users SET password = :pass_new WHERE email = :email');
						$this->bind(':pass_new' , $pass_hash);
						$this->bind(':email' , $_SESSION['user_data']['email']);
						$this->execute();
						$_SESSION['response'] = "Hasło zostało zmienione";

					} else {

						$_SESSION['response'] = "Nowe hasła nie są takie same";

					}

				} else {

					$_SESSION['response'] = "Podano niepoprawne hasło";

				}

			}

			$this->query('SELECT * FROM users_adres_data WHERE user_id = :user_id');
			$this->bind(':user_id' , $_SESSION['user_data']['id']);
			$adres = $this->single();

			return $adres;

		}
	}

}
?>
