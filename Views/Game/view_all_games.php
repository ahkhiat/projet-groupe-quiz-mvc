<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
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
        <td><?=$g->theme_id?></td>
        <td><?=$g->user_id?></td>
        <td><?=$g->game_date?></td>
        <td><?=$g->game_level?></td>
        <td><?=$g->questions_quantity?></td>
        <td><?=$g->game_score?></td>
        
       
    </tr>
    <?php endforeach; ?>
</table>
</div>       