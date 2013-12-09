<?php
//loginModel.php

session_start();

//user login


	$username =$_POST["username"];
	$pass = $_POST["password"];

	echo $result;

class loginModel {
	//The view() function will display a page in the views subdirectory

	public function checklogin($username, $password) {
		//check user/pass against db - returns true on success
		// if($username == $result:user_name){
		$dbh = new PDO("mysql: hostname=localhost; dbname=simpBlog; port=8889", "root", "root");
$result = mysql_query("SELECT user_name,user_pass FROM users where user_id=$_SESSION['userid'] VALUES (:user_name, :user_pass)");


	$result->bindParam(':user_name', $username);
	$result->bindParam(':user_pass', $password);

		// }
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