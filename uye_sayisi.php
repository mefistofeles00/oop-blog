<?php include 'controller.php'; ?>

<?php
$post = new Post;
$postcount = $post->countPost();
?>

<html>
<head></head>
<body>

<center>
    <h1><?php echo 'post sayisi --> '.$postcount?></h1>
</center>

</body>
</html>
