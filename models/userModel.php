<?php
//userModel.php

//create, delete, update

	class UserModel {
		function getUsers() {

			$db = new PDO("mysql:hostname=localhost;dbname=simpleBlog", "root", "root");

			$sql = "SELECT * FROM users";

			$st = $db->prepare($sql);

			$st->execute();

			$users = $st->fetchAll();

			return $users;
		}

		function getUser($uid = 0) {
			$db = new PDO("mysql:hostname=localhost;dbname=simpleBlog", "root", "root");

			$sql = "SELECT * FROM users WHERE user_id = :user_id";

			$st = $db->prepare($sql);

			$st->execute(array(":user_id"=>$uid));

			$user = $st->fetchAll();

			return $user;
		}
	}
?>