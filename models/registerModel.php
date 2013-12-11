<?php
//registerModel.php

//start the session
	session_start();

	class registerModel {
		function register($username, $pass, $confirm){
			//connect to database

			$regName = $_POST["regName"];
			$regPass = $_POST["regPass"];
			$regConfirm = $_POST["regConfirm"];

			//$text = $_SESSION['text'];

//			if(isset($regPass) && !empty($regPass)){
//				$salt = 'mysectretpassword';
//				$hashsalt = md5($salt.$str);
//			}

		    if(!empty($regName) && !empty($regPass) && !empty($regConfirm)) {

				$dbh = new PDO("mysql: hostname=localhost; dbname=simpleBlog; port=8889", "root", "root");
				$stmt = $dbh->prepare("INSERT INTO users(user_name, user_pass) VALUES (:user_name, md5(:user_pass))");

			    $regPass = $pass;
				//$salt = 'mysectretpassword';
			    $regConfirm = $regPass;
				//$hashsalt = md5($regPass);

				$stmt->bindParam(':user_name', $username);
				$stmt->bindParam(':user_pass', $regPass);

				if($regConfirm == $regPass){
					$err = 'no error';
					$stmt->execute();
					echo 'worked!';
				}else{
					$err = 'error';
				}
		    }
		}
	}
?>