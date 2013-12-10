<?php
//registerModel.php

//start the session
	session_start();

	class registerModel {
		function loggedin($username, $pass, $confirm){
			//connect to database
			$dbh = new PDO("mysql: hostname=localhost; dbname=simpleBlog; port=8889", "root", "root");
			$stmt = $dbh->prepare("INSERT INTO users(user_name, user_pass) VALUES (:user_name, :user_pass)");

			$str = $pass;
			$salt = 'mysectretpassword';
			$confirm = md5($salt.$str);
			$hashsalt = md5($salt.$str);

			$stmt->bindParam(':user_name', $username);
			$stmt->bindParam(':user_pass', $hashsalt);
			
			
		if($confirm == $hashsalt){
			$err = 'no error';
			$stmt->execute();
		}else{
			$err = 'error';
		}

		
	}else{
		echo "all fields are required.";
	}

?>