<?php
require "../../includes/db.php";
$sql = 'INSERT INTO `recruiter` (
    	`name`,
        `password`
	) VALUES (
		:name,
		:pwd
	)
	;';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":name", $_POST['username']);
    $stmt->bindParam(":pwd", $_POST['password']);
    $stmt->execute();
    errorHandler($stmt);
    session_start();
    $_SESSION['user'] = $user['name'];
	header("Location: /recruiter/gestion.php");

    return;

