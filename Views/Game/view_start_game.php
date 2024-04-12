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


    <!-- Section résultat-->
    <section class="result-container">
      <p>Votre score est de: <span id="score">0</span>/<span id="total_questions">4</span></p>
    </section>
  </div>


</div>

<script type="module" src="./Content/js/game.js" defer></script>
