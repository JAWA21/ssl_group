<div class="wrap">
	<form id="blogPost" name="blogPost" method="post" action="blogModel.php">

		<input type="hidden" id="blogid" name="blogid" />

		<div class="blogToolbar"></div>
		<p>
			<label for="title">Title:</label>
			<input type="text" id="title" name="title" />
		</p>

		<p>
			<label for="text">Text:</label>
			<textarea id="text" rows="6" cols="50"></textarea>
		</p>

		<input type="submit" value="Post" id="postBtn" />
	</form>
</div>
