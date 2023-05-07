<?php require 'header.php'; ?>


<?php
	
	if (isset($_GET['id'])) {
			$id = $_GET['id'];
	}
	$post = new Post;
	$fetch_singlePost = $post->readPostById($id);
?>

<div class="card-body">
	<h3 style=font-family:cursive;class="mb-4"><?php echo $fetch_singlePost->title; ?></h3>

<a class="btn btn-primary mb-4" href="edit_post.php?id=<?php echo $fetch_singlePost->id;?>">Edit</a>
<a class="btn btn-danger mb-4" href="delete_post.php?id=<?php echo $fetch_singlePost->id; ?>">Delete</a>

<p style=font-family:roboto;><?php echo $fetch_singlePost->content; ?></p>


</div>
<hr>
<?php
session_start();

if (isset($_SESSION['success'])){
?>
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey !</strong> <?= $_SESSION['success']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
			<?php 
			unset($_SESSION['success']);
}
			?>
			    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="d-flex flex-column comment-section">
                <div class="bg-white p-2">
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">Marry Andrews</span><span class="date text-black-50">Shared publicly - Jan 2020</span></div>
                    </div>
                    <div class="mt-2">
                        <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="d-flex flex-row fs-12">
                        <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                        <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
                        <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
                    </div>
                </div>
				<form action="yorum_gonder.php" method="post">
                <div class="bg-light p-2">
					<input type="hidden" name="post_id" value="<?php echo $fetch_singlePost->id; ?>">
                    <div class="d-flex flex-row align-items-start"><img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
					<textarea class="form-control ml-1 shadow-none textarea" name="yorum"></textarea></div>
                    <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="submit">Yorum gonder</button></div>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php';?>