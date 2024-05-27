<?php
// var_dump($users)
?>

<div class="text-center">
  <h2>Classement</h2>
</div>

<div class="container">
  <div class="mx-auto col-11 col-sm-9 col-md-9 col-xl-6">
    <table class="table mx-auto mt-5 ">
      <thead>
        <tr>
          <th scope="col" class="text-center">#</th>
          <th scope="col">Utilisateur</th>
          <th scope="col">Score</th>
        </tr>
      </thead>
      <tbody>
      
    <?php
          // conditions to change background color of the first three people
          foreach ($users as $index => $user) {
            $class = '';
            if ($index < 3) {
              if ($index == 0) {
                $class = 'table-warning';
                $icon = '🥇';
              } elseif ($index == 1) {
                $class = 'table-secondary';
                $icon = '🥈';
              } elseif ($index == 2) {
                $class = 'table-danger';
                $icon = '🥉';
              }
              echo '
              <tr class="'.$class.'">
                <th scope="row" class="text-center">'.$icon.'</th>
                <td>
                  <a href="?controller=user&action=public_profile&id='.$user->user_id.'" class="text-decoration-none link-dark fw-bold position-relative">
                      <img src="Public/img/'.$user->image_name.'"  alt="" title="'.$user->image_name.'" class="pp-leaderboard me-2">
                        <span class="badge-online position-absolute p-1 '.($user->active ? 'bg-success' : 'bg-danger').' border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                        </span>
                      '.$user->username.'
                      
                      </a>
                  
                </td>
                <td>'.$user->total_points.'</td>

              </tr>
              ';
            } else {
              echo '
              <tr>
                <th scope="row" class="text-center fw-light">'.($index + 1).'</th>
                <td><a href="?controller=user&action=public_profile&id='.$user->user_id.'" class="text-decoration-none link-dark fw-bold">
                <img src="Public/img/'.$user->image_name.'"  alt="" title="'.$user->image_name.'" class="pp-leaderboard me-2">
                  <span class="badge-online position-absolute p-1 '.($user->active ? 'bg-success' : 'bg-danger').' border border-light rounded-circle">
                  <span class="visually-hidden">New alerts</span>
                  </span>
                '.$user->username.'</a></td>
                <td>'.$user->total_points.'</td>

              </tr>
              ';
            }
          }
        ?>
      </tbody>
    </table>
  </div>
</div>
