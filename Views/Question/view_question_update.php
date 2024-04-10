
<div class="mx-auto w-50">

<h2>Modifier une question</h2>

<form action="?controller=question&action=question_update_request" method="POST">

<div class="form-group mb-3">
    <label for="exampleInputEmail1">Thème</label>    
    <select class="form-select" name="theme_id">
        <option selected>Choix du thème</option>
        <?php  foreach($themes as $t ): ?>
        <option value="<?=$t->theme_id?>" <?php if($question[0]->theme_id==$t->theme_id) echo 'selected'; ?>><?=$t->theme_name?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="form-group mb-3">
    <label for="exampleInputEmail1">Difficulté</label>    
    <select class="form-select" name="question_level">
        <option selected>Choix de la difficulté</option>
        <option value="1" <?php if($question[0]->question_level=="1") echo 'selected'; ?>>1</option>
        <option value="2" <?php if($question[0]->question_level=="2") echo 'selected'; ?>>2</option>
        <option value="3" <?php if($question[0]->question_level=="3") echo 'selected'; ?>>3</option>
    </select>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Question</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="question" value="<?php echo $question[0]->question_content ?>">
    <input type="hidden" name="question_id" class="form-control" id="hide" value="<?php echo $question[0]->question_id ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Réponse 1 JUSTE</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="answer1" placeholder="Entrez la bonne réponse" value="<?php echo $answers[0]->answer_content ?>">
    <input type="hidden" name="answer1_id" class="form-control" id="hide" value="<?php echo $answers[0]->answer_id ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Réponse 2</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="answer2" value="<?php echo $answers[1]->answer_content ?>">
    <input type="hidden" name="answer2_id" class="form-control" id="hide" value="<?php echo $answers[1]->answer_id ?>">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Réponse 3</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="answer3" value="<?php echo $answers[2]->answer_content ?>">
    <input type="hidden" name="answer3_id" class="form-control" id="hide" value="<?php echo $answers[2]->answer_id ?>">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Réponse 4</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="answer4" value="<?php echo $answers[3]->answer_content ?>">
    <input type="hidden" name="answer4_id" class="form-control" id="hide" value="<?php echo $answers[3]->answer_id ?>">

  </div>


  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>