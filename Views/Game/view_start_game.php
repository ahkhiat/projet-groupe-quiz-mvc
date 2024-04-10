<div id="game_container">
<h2>Nouvelle partie</h2>

<?php
echo 'theme dans $_SESSION : '.$_SESSION['theme'];
echo '<br>';
echo 'level dans $_SESSION : '.$_SESSION['level'];
?>

<div class="main-container">
      <!-- En-tête -->
    

      <!-- Section question-->
      <section class="question-container">
        <p id="question"></p>
        <ul id="answers"></ul>
      </section>

      <!-- Section résultat-->
      <section class="result-container">
        <p>Votre score est de: <span id="score">0</span>/<span id="total_questions">4</span></p>
      </section>
</div>


</div>