<?php
/**
 * Created by PhpStorm.
 * User: joseteixeira
 * Date: 28/03/2018
 * Time: 23:26
 */

error_reporting(E_ALL);

$dsn = 'mysql:host=localhost;dbname=hubble';
$username = 'root';
$password = '';
try {
	$pdo = new PDO($dsn, $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec("SET NAMES UTF8");
} catch(PDOException $exception) {
	require "databaseDied.php";
	die($exception->getMessage());
}
/**
 * Error Handler after PDO Execution
 * @param PDOStatement $statement
 * @return void
 */
function errorHandler(PDOStatement $statement) : void
{
	if ($statement->errorCode() !== '00000') {
		var_dump($statement->errorInfo());
		die();
	}
}
