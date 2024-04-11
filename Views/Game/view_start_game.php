<div id="game_container">

  <!-- <?php
        echo 'theme dans $_SESSION : ' . $_SESSION['theme'];
        echo '<br>';
        echo 'level dans $_SESSION : ' . $_SESSION['level'];
        ?> -->

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