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
    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
    <title>ScienceQuize</title>
</head>
<body>
<header>


<nav class="navbar ">
  <div class="container">
       
        <div >
          <img class="logo" src="./Content/img/logo.png" alt="logo.png"> 
        </div>
        <div> 
         <a class="navbar-brand" href="?controlleur=home&action=home">Accueil</a>
        </div>
      
        <!-- <?php
      // une fois connecter sois je suis dans l'admin ou l'utilisateur
      if(isset($_SESSION['email']))
      {  
        if($_SESSION['roles']!='user')
        {  
          include('header_Admin.php');
          
        }else{
          include('header_User.php');
        } 
      }
     else
     {  
     ?> -->
      <!-- je suis  dans la partie decconnexion,  -->
      <div>
      <a href="?controller=security&action=user_registration" class="btn btn-primary m-3 ">Inscription</a>
      
     
      <a href="?controller=security&action=user_connection" class="btn btn-danger m-3 ">Connexion</a>  
      
      </div> 

<!--       
    <?php 
   } 
   ?> -->
      
  </div> 
</nav>

    




</header>
</body>
</html>