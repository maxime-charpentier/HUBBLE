<?php
require "../includes/db.php";
$sql = 'UPDATE
			`job`
		SET
			`need_validation` = :valid
  		WHERE
  			`id` = :id
  		;';
$statement = $pdo->prepare($sql);
$statement->bindValue(':id', intval($_GET['id']));
$statement->bindValue(':valid', 1);
$statement->execute();
errorHandler($statement);
header("Location: index.php");

