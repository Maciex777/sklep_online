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
				"email"	=> $row['email']
			);

			header('Location: '.ROOT_URL);
		} else {
			echo 'Podano złe dane logowania';
		}
	}
		return;
	}
}
