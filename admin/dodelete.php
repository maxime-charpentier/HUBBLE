<?php

if (!isset($_POST['id'])) {
	header("Location: index.php?error=There-is-no-id-to-delete");
	exit;
}
require_once "../includes/db.php";
$sql = "DELETE FROM 
  			`job` 
		WHERE 
  			`id` = :id
		;";
$statement=$pdo->prepare($sql);
$statement->bindValue(':id', $_POST['id']);
$statement->execute();
errorHandler($statement);
header("Location: index.php");