<?php

if (!isset($_GET['id'])) {
	header("Location: index.php?error=There-is-no-id-to-delete");
	exit;
}
require "../includes/db.php";
$sql = 'SELECT
            `id`,
            `name`,
  			`duration`,
  			`location`,
  			`salary`,
  			`description`,
  			`picture`
  		FROM
  			`job`
  		WHERE
 			id = :id
  		;';
$statement=$pdo->prepare($sql);
$statement->bindValue(':id', $_GET['id']);
$statement->execute();
$article = $statement->fetch(PDO::FETCH_ASSOC);
if ($article === false) {
	header("Location: index.php?error=There-is-no-data-to-delete");
	exit;
}
require 'header.php';
?>
<div class="card-body">
    <div class="form-group">
	Êtes vous s&ucirc;r de vouloir supprimer cette entrée : <strong><?=$article['name']?></strong>?
	<form  action="dodelete.php" method="post">
		<input type="hidden" name="id" value="<?=$article['id']?>">
		<input class="btn btn-danger" type="submit" value="Delete">
	</form>
    </div>
</div>

