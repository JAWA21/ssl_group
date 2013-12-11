
<form id="blogPost" name="blogPost" method="post" action="?method=views&action=blog">

	<input type="hidden" id="blogId" name="blogId" />

	<div class="blogToolbar"></div>

	<label for="title">Title:</label>
	<input type="text" id="title" name="title" />

	<label for="text">Text:</label>
	<textarea id="text" rows="4" cols="50"></textarea>

	<input type="submit" value="Post" id="sendBtn" />
</form>