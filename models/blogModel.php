<?php
//blogModel.php


	class blogModel {

		//retrieving all posts from database
		public function getPosts() {
			$db = new PDO("mysql:hostname=localhost;dbname=simpleBlog", "root", "root");

			$sql = "SELECT * FROM blog";

			$st = $db->prepare($sql);

			$st->execute();

			$posts = $st->fetchAll();

			return $posts;
		}

		//retrieve a single post from database
		public function getPost($mid = 0) {
			$db = new PDO("mysql:hostname=localhost;dbname=simpleBlog", "root", "root");

			$sql = "SELECT * FROM blog WHERE blogid = :blog_id";

			$st = $db->prepare($sql);

			$st->bindParam(":blog_id", $mid);

			$st->execute();

			$post = $st->fetchAll();

			return $post;
		}

		public function createPost($title = "", $text="") {
			$db = new PDO("mysql:hostname=localhost;dbname=simpleBlog", "root", "root");

			$sql = "INSERT INTO blog (blogTitle, blogText) VALUES (:title, :text)";

			$st = $db->prepare($sql);

			$st->execute(array(":title"=>$title, ":text"=>$text));
		}

		public function deletePost($bid = 0) {
			$db = new PDO("mysql:hostname=localhost;dbname=simpleBlog", "root", "root");

			$sql = "DELETE FROM blog WHERE blogid = :blog_id";

			$st = $db->prepare($sql);

			$st->execute(array(":blog_id"=>$bid));
		}
	}


?>