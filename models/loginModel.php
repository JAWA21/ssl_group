<?php
//loginModel.php

//user login

	

class loginModel {
	//The view() function will display a page in the views subdirectory

	public function checklogin($username, $password) {
		//check user/pass against db - returns true on success

		$db = new PDO("mysql: hostname=localhost; dbname=simpleBlog; port=8889", "root", "root");

		$stmt = $dbh->prepare("select user_name, user_pass
				from users
				where user_name = :user_name and user_pass= md5(:user_pass));
		$stmt->bindParam(':user_name', $username);
		$stmt->bindParam(':user_pass', $password);

		$st = $db->prepare($q);
		
		$st->execute();
		$st->fetchAll();
		$isgood =$st->rowCount();
		
		if($isgood > 0){

			$_SESSION["loggedin"] = 1;
			echo 'loggedin';
			return 1;

		}else{

			$_SESSION["loggedin"] = 0;
			return 0;
		}
	}

	public function signout() {
		//clear out the session information
		session_destroy();
		session_start();
	}		
}
?>