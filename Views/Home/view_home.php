<!-- <h1>ScienceQuiz</h1> -->

<?php
// print_r($_SESSION);
?>


    <?php
    if(isset($_SESSION['firstname'])){
        echo '
        <section class="text-center" id="home_page_section">
            <h2>Bienvenue !</h2>
            <p class="fs-4">Bonjour, '.$_SESSION['firstname'].str_repeat('&nbsp;', 1).$_SESSION['lastname'] .'</p>
            <p class="fs-5">Il est temps de testez vos connaissances !</p>
            <a href="?controller=game&action=start_game"><button class="btn btn-primary">Jouer</button></a>
        </section>
        ';
    } else {
        include('view_home_animation.php');
    }
    ?>


