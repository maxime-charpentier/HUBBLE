<?php
require "../../includes/db.php";
    $sql = "SELECT
        `name`,
        `password`
    FROM
        `recruiter`;
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    errorHandler($stmt);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $user) {
        if ($user['name'] == $_POST['username'] && $user['password'] == $_POST['password']) {
            session_start();
            $_SESSION['user'] = $user['name'];
            header("Location: /recruiter/gestion.php");
            
            return;
        }
    }
    header("Location: /recruiter/signin.php");

    return;

