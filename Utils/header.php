<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./Content/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/29aef3fc25.js" crossorigin="anonymous"></script>
  <script src="./Content/js/script.js" defer></script>
  <script type="module" src="./Content/js/game.js" defer></script>


  <title>ScienceQuize</title>
</head>

<body>
  <header>

    <!--
    <nav class="navbar ">
      <div class="container">

        <div>
          <img class="logo" src="./Content/img/logo.png" alt="logo.png">
        </div>
        <div>
          <a class="navbar-brand" href="?controller=home&action=home">Accueil</a>
        </div>
        <div>
          <a class="navbar-brand" href="?controller=game&action=new_game">JOUER</a>
        </div>
        <?php
        // une fois connecter sois je suis dans l'admin ou l'utilisateur
        if (isset($_SESSION['email'])) {
          if ($_SESSION['roles'] != 'user') {
            include('header_Admin.php');
          } else {
            include('header_User.php');
          }
        } else {
        ?>
          <div>
            <a href="?controller=security&action=user_registration" class="btn btn-primary m-3 ">Inscription</a>


            <a href="?controller=security&action=user_connection" class="btn btn-danger m-3 ">Connexion</a>

          </div>

        <?php
        }
        ?>

      </div>
    </nav>
-->
    <!-- -------------------------Navbar Bootstrap---------------------------------------- -->


    <nav class="navbar navbar-expand-lg bg-light">

      <div class="container-fluid">

        <div>
          <a href="?controller=home&action=home" class="href"><img class="logo" src="./Content/img/logo.png" alt="logo.png"></a>
        </div>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="?controller=game&action=new_game">JOUER</a>
            </li>
      

            <?php
            if (isset($_SESSION['email'])) {
              if ($_SESSION['roles'] == 'admin') {
                echo
                '
              <li class="nav-item">
                <a class="nav-link" href="?controller=admin&action=dashboard">Dashboard</a>
              </li>
                  ';
              }
            }
            ?>
          </ul>


          <?php
          if (isset($_SESSION["email"])) {
            echo
            '
            <ul class="navbar-nav me-2 mb-2 mb-lg-0 ">
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  
                    <div class="user-badge">'. $_SESSION["firstname"] .'</div>
              
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="?controller=user&action=profil_user">Profil</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="?controller=security&action=disconnection">Deconnexion</a></li>
                </ul>
              </li>
            </ul>
            ';
          } else {
            echo 
            '
            <a href="?controller=security&action=user_connection" class="btn btn-danger m-3 ">Connexion</a>
            ';
            
          }
          ?>




        </div>
      </div>
    </nav>
        

  </header>
</body>

</html>