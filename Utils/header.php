<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Content/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<header>

<nav>
    <ul class="links">
        <li class="deroulant"><a class="liens" href="?controller=livres&action=all_livres">Livres </a>
        <ul class="sous">
          <li><a href="?controller=livres&action=all_livres">Tous les livres</a></li>
        </ul>
      </li>
      <li class="deroulant"><a class="liens" href="?controller=fournisseurs&action=all_fournisseurs">Fournisseurs</a>
        <ul class="sous">
          <li><a  href="?controller=fournisseurs&action=all_fournisseurs">Tous les Fournisseurs</a></li>
        </ul>
      </li>
        
      <li class="deroulant"><a class="liens" href="?controller=commandes&action=all_commandes">User</a>
        <ul class="sous">
          <li><a  href="?controller=user&action=all_users">Toutes les users</a></li>
        </ul>
      </li>
      <div>
      <a href="?controller=security&action=user_registration" class="btn btn-primary m-3 ">Inscription</a>
      
     
      <a href="?controller=security&action=user_connetion" class="btn btn-danger m-3 ">Connexion</a> 
      <a href="?controller=security&action=disconnetion" class="btn btn-danger m-2 p-2">Deconnexion</a>
      </div> 
</nav>

    




</header>
</body>
</html>