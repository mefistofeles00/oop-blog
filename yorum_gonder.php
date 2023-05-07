<?php require 'controller.php'; ?>
<?php

if (!empty($_POST['yorum'] and !empty($_POST['post_id'])))
{
    session_start();
    $yorum = $_POST['yorum'];
    $post_id = $_POST['post_id'];

    $post = new Post;
    $post->addComment($yorum, $post_id);
    $_SESSION['success'] = "yorum basarili bir sekilde gonderildi";
    header("Location:single_post.php");
}
else {
    header('Location:index.php');
}

?>