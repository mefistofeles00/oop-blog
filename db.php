<?php
try {
	$pdo = new PDO("mysql:host=localhost;dbname=oop",'root','');

} catch (PDOexception $e) {
	echo "connection error" . $e->getMessage();
}
?>