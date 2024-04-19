
<?php
// var_dump($games)
include('./Utils/header_admin.php')
?>

<div class="table-responsive">
    <table id='table' class="table">
        <thead>
            <th>id</th>
            <th>Theme</th>
            <th>User</th>
            <th>Game date</th>
            <th>Game level</th>
            <th>Questions quantity</th>
            <th>Score</th>
        </thead>
        <?php  foreach($games as $g ): ?>
        <tr>
            <td><?=$g->game_id?></td>
            <td><?=$g->theme_name?></td>
            <td><?=$g->username?></td>
            <!-- <td><?=$g->game_date?></td> -->
            <td><?= date("d-m-Y à H:i", strtotime($g->game_date)) ?></td>
            <td><?=$g->game_level?></td>
            <td><?=$g->questions_quantity?></td>
            <td><?=$g->game_score?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>       