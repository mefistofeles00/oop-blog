<?php require 'db.php'; ?>

<?php 


class Post{

	public function insertPost($title,$content){

		global $pdo;

		$stmt = $pdo->prepare('INSERT INTO user_post (title,content) VALUES (?,?)');

		$stmt->execute([

			$title,
			$content

		]);

		return $pdo->lastInsertId();
	}




	public function readAllPost($fetchType = PDO::FETCH_OBJ){

		global $pdo;

		$stmt = $pdo->prepare('SELECT * FROM user_post ORDER BY id DESC');
		$stmt->execute();

		return $stmt->fetchAll($fetchType);

	}

	public function readPostById($id, $fetchType = PDO::FETCH_OBJ){

		global $pdo;

		$stmt = $pdo->prepare('SELECT * FROM user_post WHERE id=?');
		
		$stmt->execute([$id]);

		return $stmt->fetch($fetchType);

	}


	//UPDATE POST


	public function updatePost($id,$title,$content){

global $pdo;

$stmt = $pdo->prepare('UPDATE user_post SET title=?, content=? WHERE id=?');

$stmt->execute([

$title,
$content,
$id

]);


	}


public function deletePost($id){

	global $pdo;

	$stmt = $pdo->prepare("DELETE FROM user_post WHERE id=?");

	$stmt->execute([$id]);
}

public function countPost()
{
    global $pdo;
    $stmt = $pdo->prepare('select count(id) as post_count From user_post');
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['post_count'];

}

public function last_five_post()
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * from user_post order by id DESC limit 5");
    $stmt->execute();
    $sonuc = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $sonuc;

}

public function addComment($yorum, $post_id)
{
	global $pdo;
	
	$stmt = $pdo->prepare("UPDATE user_post SET comments = :yorumlar where id = :post_id");
	$stmt->execute(array(
		':yorumlar' => json_encode($yorum),
		':post_id' => $post_id
	));
}

}