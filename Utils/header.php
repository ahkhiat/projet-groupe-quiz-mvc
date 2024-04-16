<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ------------------------------- stylesheets ------------------------------ -->
  <link rel="stylesheet" href="./Content/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- ------------------------------- libraries scripts  ------------------------------ -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/29aef3fc25.js" crossorigin="anonymous"></script>

  <!-- ------------------------------- scripts ------------------------------ -->
  <script src="./Content/js/script.js" defer></script>

  <script src="./Content/js/login_form_verify.js" defer></script>
  <script src="./Content/js/registration_form_verify.js" defer></script>

  <!-- The game script is in the game view (view_start_game.php) -->


  <title>ScienceQuiz</title>
</head>

<body>
  <header>

    <!-- -------------------------Navbar Bootstrap---------------------------------------- -->


    <nav class="navbar navbar-expand-lg bg-light navbar-main">

      <div class="container-fluid">

        <div>
          <a href="?controller=home&action=home" class="href"><img class="logo" src="./Content/img/logo.png" alt="logo.png"></a>
        </div>

        <?php
            if (isset($_SESSION["email"])) 
            { echo 
              '
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            ';
            }
            ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <?php
            if (isset($_SESSION["email"])) {
              include('Utils/header_User.php') ;
              };
          ?> 
            
        </div>

        <!-- this button is here to respect the automatic justify between of the bootstrap navbar  -->
        <?php
          if (!isset($_SESSION["email"])) 
          {
            echo '
            <ul class="nav-item me-3 mb-2 mb-lg-0">
              <a href="?controller=security&action=user_connection" ><i class="home-user fa-solid fa-user fa-xl"></i></a>
            </ul>
            ';
          }
        ?>

      </div>

    </nav>
        

  </header>
</body>

</html>