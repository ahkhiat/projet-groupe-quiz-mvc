<?php
// var_dump($follow);
?>
<div class="container">
  <div class="mx-auto col-xl-6 col-md-9 col-sm-9 col-9">
    
    <table class="table mx-auto mt-5 ">
    <h2><?= $message ?></h2>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Utilisateur</th>
          <th scope="col">Score</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($follow as $index => $f) : ?>
            <tr>
                <td><?= ($index + 1) ?></td>
                <td><a href="?controller=user&action=public_profile&id= <?=$f->follow_id?> " class="text-decoration-none link-dark fw-bold">
                <img src="Public/img/<?=$f->image_name ?>"  alt="" title="<?=$f->image_name?>" class="pp-leaderboard"><?= $f->username ?></a></td>
                <td><?= $f->total_points ?></td>
                

                

            </tr>

        <?php endforeach; ?>
    
    

      </tbody>
    </table>
  </div>
</div>
