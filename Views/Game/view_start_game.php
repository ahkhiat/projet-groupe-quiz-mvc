<div id="game_container">

  <?php
        // var_dump($quiz_duration);
        ?> 
<input type="hidden" class="quiz-duration" value="<?= $quiz_duration ?>">  
<div class="main-container">
    <!-- En-tête -->

    <section class="progress-cross-container">
      <a href="?controller=game&action=new_game" onclick="return returnConfirmation()"><i class="fa-solid fa-xmark fa-2xl"></i></a>
      <div class="progress-container">

        <div class="progress-stacked">
        </div>

      </div>
    </section>
    

    <!-- Section question-->
    <div class="image-questions-container">
      <section class="image-brain-container">

      </section>
      <section class="question-container">
        <p id="question"></p>

      </section>
    </div>

    <!-- Answers section -->
    <div class="answers-container">
      <ul id="answers"></ul>
    </div>

    <!-- Timer section -->
    <div class="timer">
      
    </div>

    <!-- Mini card section -->
    <section class="mini-card-container d-flex justify-content-between w-50 mx-auto mb-5" id="mini-card-section" >
      <div class="mini-card" id="mini_card_1" hidden>
        <div class="mini-card-head" id="mini_card-head_1">Points</div>
        <div class="mini-card-body" id="mini_card_body_1"></div>
      </div>
      <div class="mini-card" id="mini_card_2" hidden>
        <div class="mini-card-head" id="mini_card-head_2">Temps</div>
        <div class="mini-card-body" id="mini_card_body_2"></div>
      </div>
      <div class="mini-card" id="mini_card_3" hidden>
        <div class="mini-card-head" id="mini_card-head_2">Réussite</div>
        <div class="mini-card-body" id="mini_card_body_2"></div>
      </div>
</section>


    <!-- Result section-->
    <section class="result-container d-flex justify-content-center">
      <p>Votre score est de: <span id="score">0</span>/<span id="total_questions">4</span></p>
      <!-- this form is sended to database when game is over -->
      <form action="?controller=game&action=store_game" method="POST">
        <input type="hidden" name="theme_id" class="theme_id" value="<?=$_SESSION['theme']?>">
        <input type="hidden" name="user_id" class="user_id" value="<?=$_SESSION['id']?>">
        <input type="hidden" name="game_level" class="game_level" value="<?=$_SESSION['level']?>">
        <input type="hidden" name="questions_quantity" class="questions_quantity">
        <input type="hidden" name="game_score" class="game_score">
        <button type=submit class="btn btn-primary" id="store_game_button" hidden>Continuer</button>
      </form>
    </section>
  </div>


</div>

<script type="module" src="./Content/js/game.js" defer></script>
