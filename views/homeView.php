<!-- homeView -->

		<div class="wrap">
			<img id="blogImg" src="images/blog.jpg" alt="SSL1312 Blog">

			<aside id="loginForm">
				<h3>User Login</h3>
				<form id="userLogin" method="POST" action="?action=view&method=loggedin">
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
		</div>