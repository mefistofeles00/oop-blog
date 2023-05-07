<?php require 'controller.php'; ?>

<?php
$post = new Post();
$last_five_post = $post->last_five_post();



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud Blog Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">



	

</head>
<body>

	<div class="container mt-5">

	<div class="card">
		<div class="card-header text-center">
			<h1  style=font-family:sans-serif; class="mb-4">My Blog</h1>
			<?php foreach ($last_five_post as $last_posts): ?>
			<h3 class="text-center"><?php echo $last_posts['title']; ?></h3>
			<?php endforeach; ?>
			<a class="btn btn-outline-primary" href="index.php">Home</a>
			<a class="btn btn-outline-primary" href="create_post.php">Add Post</a>


		</div>