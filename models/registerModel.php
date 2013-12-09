<?php
//registerModel.php

//start the session
	session_start();

	//connect to database
	$dbh = new PDO("mysql: hostname=localhost; dbname=simpBlog; port=8889", "root", "root");
	$stmt = $dbh->prepare("INSERT INTO users(user_name, user_pass) VALUES (:user_name, :user_pass)");

	$stmt->bindParam(':user_name', $name);
	$stmt->bindParam(':user_pass', $hashsalt);

	$name =$_POST["username"];
	$str = $_POST["password"];


	$text = $_SESSION['text'];

	if(isset($_POST["pass"]) && !empty($_POST["pass"])){
		$salt = 'mysectretpassword';
		$hashsalt = md5($salt.$str);
	}

	if(isset($_POST["capt"])) { 
      	if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['capt'])) {  
			$capt = $_POST["capt"];
			
			if($capt == $text){
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

	echo "Captcha: ".$text."<br />";
?>