<?php
// var_dump($users)
?>

<div class="text-center">
  <h2>Classement</h2>
</div>

<div class="container">
  <div class="mx-auto col-xl-6 col-md-9 col-sm-9 col-9">
    <table class="table mx-auto mt-5 ">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th></th>
          <th scope="col">Utilisateur</th>
          <th scope="col">Score</th>
        </tr>
      </thead>
      <tbody>
      
    <?php
          foreach ($users as $index => $user) {
            $class = '';
            if ($index < 3) {
              if ($index == 0) {
                $class = 'table-warning';
                $icon = '<i class="fa-solid fa-medal" style="color: #FFD43B;"></i>';
              } elseif ($index == 1) {
                $class = 'table-secondary';
                $icon = '<i class="fa-solid fa-medal" style="color: #949494;"></i>';
              } elseif ($index == 2) {
                $class = 'table-danger';
                $icon = '<i class="fa-solid fa-medal" style="color: #d2852d;"></i>';
              }
              echo '
              <tr class="'.$class.'">
                <th scope="row">'.($index + 1).'</th>
                <td>'.$icon.'</td>
                <td>'.$user->username.'</td>
                <td>'.$user->total_points.'</td>
              </tr>
              ';
            } else {
              echo '
              <tr>
                <th scope="row">'.($index + 1).'</th>
                <td></td>
                <td>'.$user->username.'</td>
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