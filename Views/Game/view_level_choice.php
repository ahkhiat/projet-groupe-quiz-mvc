<?php
var_dump($_POST['theme'])
?>

<form action="?controller=game&action=start_game" method="POST">
  <button type="submit" class="btn btn-primary" name="level" value="1">1</button>
  <button type="submit" class="btn btn-primary" name="level" value="2">2</button>
  <button type="submit" class="btn btn-primary" name="level" value="3">3</button>
</form>