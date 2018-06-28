<?php
if (!isset($_GET['id'])) {
	header("Location: index.php?error=There-is-no-id-to-show");
	exit;
}
require '../includes/db.php';
$sql = 'SELECT 
          `id`, `name`, `duration`, `location`, `salary`, `recruiter_id`, `field_id`
        FROM 
          `job`
        WHERE
          id = :id
        ;';
$statement = $pdo->prepare($sql);
$statement -> bindValue(':id', $_GET['id']);
$statement->execute();
$article = $statement->fetchAll(PDO::FETCH_ASSOC);
if ($article === false) {
	header("Location: index.php?error=There-is-no-data-to-show");
	exit;
}
require 'header.php';
?>
<div class="container">
	<div class="card mt-5">
		<div class="card-header">
			<?php foreach($article as $art): ?>
			<h2><?= $art['name']?></h2>
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>JOB</th>
					<th>TERM</th>
					<th>LOCATION</th>
					<th>SALARY</th>
					<th>RECRUITER_ID</th>
					<th>FIELD_ID</th>
					<th>ACTIONS</th>
				</tr>
				<tr>
					<td><?= $_GET['id']?></td>
					<td><?= $art['name']?></td>
					<td><?= $art['duration']?></td>
					<td><?= $art['location']?></td>
					<td><?= $art['salary']?></td>
					<td><?= $art['recruiter_id']?></td>
					<td><?= $art['field_id']?></td>
					<td>
						<a href="edit.php?id=<?=$_GET['id']?>" class="btn btn-info" style="background-color: #39389F !important; border-color: #39389F !important;">Edit</a><br><br>
						<a href="delete.php?id=<?=$_GET['id']?>" class='btn btn-danger'>Delete</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
<?php
require 'footer.php';


