<?php
//registerModel.php

//start the session
	session_start();

	class registerModel {
		function loggedin($username, $pass, $confirm){
			//connect to database
<<<<<<< HEAD

			$name = $_POST["regName"];
			$str = $_POST["regPass"];

			$text = $_SESSION['text'];

			if(isset($_POST["pass"]) && !empty($_POST["pass"])){
				$salt = 'mysectretpassword';
				$hashsalt = md5($salt.$str);
			}

		    if(!empty($_POST['regName']) && !empty($_POST['regPass']) && !empty($_POST['regConfirm'])) {
			    $dbh = new PDO("mysql: hostname=localhost; dbname=simpleBlog; port=8889", "root", "root");
			    $stmt = $dbh->prepare("INSERT INTO users(user_name, user_pass) VALUES (:user_name, :user_pass)");

			    $stmt->bindParam(':user_name', $name);
			    $stmt->bindParam(':user_pass', $hashsalt);
=======
			$dbh = new PDO("mysql: hostname=localhost; dbname=simpleBlog; port=8889", "root", "root");
			$stmt = $dbh->prepare("INSERT INTO users(user_name, user_pass) VALUES (:user_name, :user_pass)");

			$str = $pass;
			$salt = 'mysectretpassword';
			$confirm = md5($salt.$str);
			$hashsalt = md5($salt.$str);

			$stmt->bindParam(':user_name', $username);
			$stmt->bindParam(':user_pass', $hashsalt);
			
			
		if($confirm == $hashsalt){
			echo 'no error';
			$stmt->execute();
		}else{
			echo 'error';
		}

	}else{
		echo "all fields are required.";
	}
>>>>>>> 098570155d2c3853de2c2eb10c5e959e31ffd078

				$confirm = $_POST["regConfirm"];

				if($confirm == $str){
					$err = 'no error';
					$stmt->execute();
				}else{
					$err = 'error';
				}

				echo "Input: ".$capt."<br/>";
			}else{
				echo "all fields are required.";
			}
		}
	}
?>