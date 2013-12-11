<?php
//loginModel.php

//user login

	

class loginModel {
	//The view() function will display a page in the views subdirectory

	public function checklogin($username, $password) {
		//check user/pass against db - returns true on success

		$db = new PDO("mysql: hostname=localhost; dbname=simpleBlog; port=8889", "root", "root");
		$q = "select user_name, user_pass
				from users
				where user_name = :user_name and user_pass= :user_pass";
		$q->bindParam(':user_name', $username);
		$q->bindParam(':user_pass', $password);

		$st = $db->prepare($q);
		
		$st->fetchAll();

		$isgood =$st->rowCount();
		
		if($isgood > 0){
			$_SESSION["userid"] = 1;
			echo 'loggedin';
			return false;
		}else{
			$_SESSION["userid"] = 0;
			return true;
		}
	}

	public function signout() {
		//clear out the session information
		session_destroy();
		session_start();
	}		
}
?>