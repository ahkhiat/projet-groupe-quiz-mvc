<?php
include('./Utils/header_admin.php');
// var_dump($users);
?>
<div>
    
<table id='table' class="table">
    <thead>

        <th>username</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>role</th>
        
       
       
    </thead>
    <?php  foreach($users as $u ): ?>
    <tr>

    <td> <img src="Public/img/<?= $u->image_name ?>"  alt="" title="<?= $u->image_name ?>" class="pp-leaderboard me-2"> <?= $u->username ?></td>
        <td><?=$u->firstname?></td>
        <td><?=$u->lastname?></td>
        <td><?=$u->email?></td>
        <td><?=$u->roles?></td>
        
        
        
       
    </tr>
    
    <?php endforeach; ?>
    
</table>
</div>       