<?php
//loginModel.php

session_start();

//user login
$dbh = new PDO("mysql: hostname=localhost; dbname=simpBlog; port=8889", "root", "root");
$stmt = $dbh->prepare("SELECT user_id users(user_name, user_pass) VALUES (:user_name, :user_pass)");

class loginModel {
	//The view() function will display a page in the views subdirectory

	public function checklogin($username, $password) {
		//check user/pass against db - returns true on success
		$_SESSION['userid']=1;
		return false;
	}

	public function signout() {
		//clear out the session information
		session_destroy();
		session_start();
	}
}
?>