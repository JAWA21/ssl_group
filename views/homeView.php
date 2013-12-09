<!doctype html>
<html>
	<head>
		<title>SSL1312 Blog</title>
	</head>
	<body>

		<header>
			<h1 id="logo">SSL1312 Blog</h1>
			<nav>
				<ul>
					<li><a href="?action=view&method=register">Register</a></li>
					<li><a href="?action=view&method=blog">Blog</a></li>
					<li><a href="?action=login">Login</a></li>
				</ul>
			</nav>
		</header>

		<img id="blogImg" src="images/blog.jpg" alt="SSL1312 Blog">

		<aside id="loginForm">
			<form method="POST" action="?action=login">
				<p>
					<label for="username">Username:</label>
					<input type="text" name="username" id="username">
				</p>

				<p>
					<label for="password">Password:</label>
					<input type="password" name="userpass" id="userpass">
				</p>

				<input type="submit" value="Submit" id="loginBtn" name="loginBtn">
			</form>
		</aside>

	</body>
</html>