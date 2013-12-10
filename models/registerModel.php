<?php
//registerModel.php

//start the session
	session_start();

	class registerModel {
		function loggedin($data){
			//connect to database
			$dbh = new PDO("mysql: hostname=localhost; dbname=simpBlog; port=8889", "root", "root");
			$stmt = $dbh->prepare("INSERT INTO users(user_name, user_pass) VALUES (:user_name, :user_pass)");

			$stmt->bindParam(':user_name', $name);
			$stmt->bindParam(':user_pass', $hashsalt);

	$name =$_POST["regName"];
	$str = $_POST["regPass"];


			$name = $_POST["regName"];

			$text = $_SESSION['text'];

			if(isset($_POST["pass"]) && !empty($_POST["pass"])){
				$salt = 'mysectretpassword';
				$hashsalt = md5($salt.$str);
			}

  	if(!empty($_POST['regName']) && !empty($_POST['regPass']) && !empty($_POST['regConfirm'])) {  
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

?>