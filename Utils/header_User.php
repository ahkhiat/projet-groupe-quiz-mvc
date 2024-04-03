
     <div class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Theme
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><img class="coeur" src="./Content/img/Coeur.png" alt="Image 1">Corp Humain</a></li>
            <li><a class="dropdown-item" href="#"><img  class= "space" src="./Content/img/space.png" alt="Image 1">Espace</a></li>
          </ul>
     </div>     
     <div class="nav-item dropdown">
          <a class="nav-link" href="?controller=admin&action=dashboard" >
            Panneau d'administration
          </a>
          
     </div>   
    
        <div class="user-badge"><?= $_SESSION['firstname']?></div>
        
    
        <a href="?controller=security&action=disconnection" class="btn btn-danger m-2 p-2">Deconnexion</a>
   
    