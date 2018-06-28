<?php

require '../includes/db.php';
$sql = 'SELECT 
          `id`, `name`, `recruiter_id`, `need_validation`
        FROM 
          `job`';
$statement = $pdo->prepare($sql);
$statement->execute();
errorHandler($statement);
$article = $statement->fetchAll(PDO::FETCH_OBJ);
require 'header.php';
?>
    <div class="container">
      <div class="card mt-5">
        <div class="card-header">
          <h2>All Jobs Offers</h2>
        </div>
         <div class="card-body">
           <table class="table table-bordered">
             <tr>
               <th>ID</th>
               <th>Job</th>
               <th>Recruiter ID</th>
               <th>Actions</th>
             </tr>
             <?php foreach($article as $art): 
              ?>
               <tr>
                 <td><?= $art->id; ?></td>
                 <td><?= $art->name; ?></td>
                 <td><?= $art->recruiter_id; ?></td>
                 <td>
                  <?php
                    if ($art->need_validation == 0) {
                  ?>
                  <a href="/admin/validate.php?id=<?=$art->id ?>" class="btn btn-info" style="background-color: #39389F !important; border-color: #39389F !important;">Validate</a><br><br>
                  <?php
                    }
                    else {
                  ?>
                   <a href="/admin/validate.php?id=<?=$art->id ?>" class="btn btn-success" style="background-color: #1DB100 !important; border-color: #1DB100 !important;">Validation: OK</a><br><br>
                   <?php
                    }
                   ?>
                   <a href="/admin/show.php?id=<?= $art->id ?>" class="btn btn-info" style="background-color: #4F53FA !important; border-color: #4F53FA !important;">See More</a>
                 </td>
               </tr>
             <?php endforeach; ?>
           </table>
         </div>
      </div>
    </div>
<?php
require 'footer.php';

