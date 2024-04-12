<ul class="navbar-nav ms-5 me-auto mb-2 mb-lg-0">
  <li class="nav-item">
    <a class="nav-link" href="?controller=game&action=new_game">JOUER</a>
  </li>

  <?php // ---------------------Display dashboard if user is ADMIN --------------------
    if (isset($_SESSION['email']) && $_SESSION['roles'] == 'admin') 
      {
        echo
          '
                <li class="nav-item">
                  <a class="nav-link" href="?controller=admin&action=dashboard">Dashboard</a>
                </li>
                    ';
      }
  ?>
</ul>

<!--------------------------- User badge and dropdown menu ------------------------>
<ul class="navbar-nav me-2 mb-2 mb-lg-0 ">
        <li class="nav-item">
          <?php    // ------------ Display if user is ADMIN -------------------
              if(isset($_SESSION["roles"]) && $_SESSION["roles"]=="admin")  
              {echo "<a class='nav-link text-danger' id='admin'>Mode Administrateur</a>";} 
          ?>
        </li>
  <li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

      <div class="user-badge"> <?= $_SESSION["firstname"] ?> </div>

    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="?controller=user&action=user_profile">Profil</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="?controller=security&action=disconnection">Deconnexion</a></li>
    </ul>
  </li>
</ul>