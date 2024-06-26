<?php
        // var_dump($quiz_duration);
        // var_dump($_SESSION)
        ?> 
<div id="game_container">
<input type="hidden" class="quiz-duration" value="<?= $quiz_duration ?>">  
<div class="main-container container">
    <!-- En-tête -->

    <section class="progress-cross-container col-11 col-sm-10 col-md-10 col-xl-6 col-xxl-6">
      <a href="?controller=game&action=new_game" id="return_button"><i class="fa-solid fa-xmark fa-2xl me-3"></i></a>
      <div class="progress-container">

        <div class="progress-stacked">
        </div>

      </div>
    </section>
    

    <!-- Section question-->
    <div class="image-questions-container  col-xl-6 col-md-6 col-sm-12 col-12">
      <!-- image brain container -->
      <section class="image-brain-container border align-self-end col-3">

      </section>
      <section class="question-container">
        <p id="question" class="fs-6"></p>

      </section>
    </div>

    <!-- Timer section -->
    <div class="timer">
      
    </div>

    <!-- Answers section -->
    <div class="answers-container container-fluid">
      <ul id="answers" class="row"></ul>
    </div>

    
    <!-- Mini card section -->
    <section class="mini-card-container d-flex justify-content-between mx-auto mb-5 mt-5 col-xl-6 col-md-6 col-sm-11 col-11" id="mini-card-section" >
      <div class="mini-card col-xl-3 col-md-4 col-sm-4 col-3 me-3" id="mini_card_1" hidden>
        <div class="mini-card-head" id="mini_card_head_1">Points</div>
        <div class="mini-card-body" id="mini_card_body_1"></div>
      </div>
      <div class="mini-card col-xl-3 col-md-4 col-sm-4 col-3" id="mini_card_2" hidden>
        <div class="mini-card-head" id="mini_card_head_2">Temps</div>
        <div class="mini-card-body" id="mini_card_body_2"></div>
      </div>
      <div class="mini-card col-xl-3 col-md-4 col-sm-4 col-3 ms-3" id="mini_card_3" hidden>
        <div class="mini-card-head" id="mini_card_head_3">Réussite</div>
        <div class="mini-card-body" id="mini_card_body_3"></div>
      </div>
    </section>


    <!-- Result section-->
    <section class="result-container d-flex justify-content-center ">
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
<!-- ----------------------------- game script ------------------------------- -->
<script type="module" src="./Content/js/game.js" defer></script>
