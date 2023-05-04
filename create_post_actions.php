<?php require 'controller.php';?>

<?php

	if (isset($_POST['publish'])) {
		$title = $_POST['title'];
		$content = $_POST['content'];


		if (!empty($title) && !empty($content)) {
			$create_post = new Post;
			$last_id = $create_post->insertPost($title,$content);
			header('Location:single_post.php?id='.$last_id);
		}
		else {
			header("Location:create_post.php?empty");
		}
	}