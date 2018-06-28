<?php
if (isset($_POST['name']) && isset($_POST['duration']) && isset($_POST['location']) && isset($_POST['salary']) && isset($_POST['description']) && isset($_POST['picture'])) {
	header("Location: index.php?error=There-is-no-edit-data-posted");
}
require "../includes/db.php";
$sql = 'UPDATE
			`job`
		SET
			`name` = :name,
			`duration` = :duration,
			`location` = :location,
			`salary` = :salary,
			`description` = :description,
			`picture` = :picture
  		WHERE
  			`id` = :id
  		;';
$statement = $pdo->prepare($sql);
$statement->bindValue(':id', $_POST['id']);
$statement->bindValue(':name', $_POST['name']);
$statement->bindValue(':duration', $_POST['duration']);
$statement->bindValue(':location', $_POST['location']);
$statement->bindValue(':salary', $_POST['salary']);
$statement->bindvalue(':description', $_POST['description']);
$statement->bindValue(':picture',$_POST['picture']);
$statement->execute();
errorHandler($statement);
header("Location: index.php");

