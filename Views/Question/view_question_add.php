
<div class="mx-auto w-50">

<h2>Ajouter une question</h2>

<form action="?controller=question&action=question_add_request" method="POST">

<div class="form-group mb-3">
    <label for="exampleInputEmail1">Thème</label>    
    <select class="form-select" name="theme_id">
        <option selected>Choix du thème</option>
        <?php  foreach($themes as $t ): ?>
        <option value="<?=$t->theme_id?>"><?=$t->theme_name?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="form-group mb-3">
    <label for="exampleInputEmail1">Difficulté</label>    
    <select class="form-select" name="question_level">
        <option selected>Choix de la difficulté</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Question</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="question">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Réponse 1 JUSTE</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="answer1" placeholder="Entrez la bonne réponse">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Réponse 2</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="answer2">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Réponse 3</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="answer3">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Réponse 4</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="answer4">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>