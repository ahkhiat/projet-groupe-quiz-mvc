<?php
include('./Utils/header_admin.php')
?>
<div>
    
<table id='table' class="table">
    <thead>
        <th>email</th>
        <th>role</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>username</th>
       
    </thead>
    <?php  foreach($users as $u ): ?>
    <tr>
        <td><?=$u->email?></td>
        <td><?=$u->roles?></td>
        <td><?=$u->firstname?></td>
        <td><?=$u->lastname?></td>
        <td><?=$u->username?></td>
        <!-- <td><?=$l->lastname?></td> -->
        <!-- <td><?=$l->lastname?></td> -->
        
       
    </tr>
    
    <?php endforeach; ?>
    
</table>
</div>       