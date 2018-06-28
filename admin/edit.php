<?php
if (!isset($_GET['id'])) {
	header("Location: index.php?error=There-is-no-id-to-edit");
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
errorHandler($statement);
$article = $statement->fetch(PDO::FETCH_ASSOC);
require 'header.php';
?>
<div class="container">
	<div class="card mt-5">
		<div class="card-header">
			<h2>Update: <?= $article['name'] ?></h2>
		</div>
		<div class="card-body">
			<form action="doedit.php" method="post">
                <input type="hidden" name="id" value="<?=$article['id']?>">
				<div class="form-group">
					<label for="name">Name</label>
					<input value="<?= $article['name'] ?>" type="text" name="name" id="name" class="form-control">
				</div>

                <div class="form-group">
                    <label for="duration">Term</label>
                    <input value="<?= $article['duration'] ?>" type="text" name="duration" id="duration" class="form-control">
                </div>

				<div class="form-group">
					<label for="location">Location</label>
					<input value="<?= $article['location'] ?>" type="text" name="location" id="location" class="form-control">
				</div>

				<div class="form-group">
					<label for="salary">Salary</label>
					<input value="<?= $article['salary'] ?>" type="text" name="salary" id="salary" class="form-control">
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<input value="<?= $article['description'] ?>" type="text" name="description" id="description" class="form-control">
				</div>

				<div class="form-group">
					<label for="picture">Photo</label>
					<input  value="<?= $article['picture'] ?>" type="text" name="picture" id="picture" class="form-control">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-info">Edit</button>
					<a href="index.php" class="btn btn-info">Homepage</a>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
require 'footer.php';