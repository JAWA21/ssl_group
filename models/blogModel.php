<?php
//blogModel.php


	class blodModel {

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
	}


?>