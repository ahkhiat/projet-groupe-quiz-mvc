<?php
var_dump($theme);
?>

<div class="mx-auto w-50">

<h2>Modifier un thème</h2>


<form action="?controller=theme&action=theme_update_request" method="POST">

  <div class="mb-3">
    <label for="theme_name" class="form-label">Thème</label>
    <input type="text" class="form-control" id="theme_name"  name="theme_name" value="<?php echo $theme[0]->theme_name ?>" >
    <input type="hidden" class="form-control" id="theme_id"  name="theme_id" value="<?php echo $theme[0]->theme_id ?>" >
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>