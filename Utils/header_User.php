<div class="collapse navbar-collapse " id="navbarSupportedContent">
          <a class="nav-link dropdown-toggle  " href="?controller=livres&action=all_livres" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livres
          </a>
          <ul class="dropdown-menu">
          <li><a href="?controller=livres&action=all_livres">Tous les livres</a></li>
            <li><a class="dropdown-item" href="?controller=livres&action=livre_auteur">par_auteur</a></li>
            <li><a class="dropdown-item" href="?controller=livres&action=livre_editeur">par_editeur</a></li>
            <li><a class="dropdown-item" href="?controller=livres&action=livre_titre">par_titre</a></li>
          </ul>
         
    </div>
          
   <div class="user-badge"><?= $_SESSION['nom']?></div>
        
    
   <a href="?controller=security&action=disconnection" class="btn btn-danger m-2 p-2">Deconnexion</a>
   
    