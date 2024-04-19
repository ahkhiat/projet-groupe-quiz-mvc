<?php
// var_dump($nbr_questions_themes)
?>
<div class="container">
  <div class="title">
      <h2>Choisissez le thème</h2>
  </div>
  <form action="?controller=game&action=level_choice" method="POST">
    <div class="buttons-container container-fluid ">
      <?php
        foreach($nbr_questions_themes as $nqt) 
        {
          echo '
          <button type="submit" class="pushable col-xl-6 col-md-6 col-sm-9 col-9" name="theme" value="'.$nqt->theme_id.'">
            '. $nqt->theme_name .'
          </button>
          ';
        }
      ?>
    </div>
  </form>

      </div>