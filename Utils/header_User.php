<ul class="navbar-nav ms-5 me-auto mb-2 mb-lg-0">
  <li class="nav-item">
    <a href="?controller=game&action=new_game" class="nav-link text-light">JOUER</a>
  </li>
  <li class="nav-item">
    <a href="?controller=user&action=leaderboard" class="nav-link text-light">Classement</a>
  </li>

  <?php // ---------------------Display dashboard if user is ADMIN --------------------
    if (isset($_SESSION['email']) && $_SESSION['roles'] == 'admin') 
      {
        echo
          '
                <li class="nav-item">
                  <a href="?controller=admin&action=dashboard" class="nav-link text-light">Dashboard</a>
                </li>
                    ';
      }
  ?>
</ul>

<!--------------------------- User badge and dropdown menu ------------------------>
<ul class="navbar-nav me-2 mb-2 mb-lg-0 align-items-center">
        <li class="nav-item">
          <?php    // ------------ Display if user is ADMIN -------------------
              if(isset($_SESSION["roles"]) && $_SESSION["roles"]=="admin")  
              {echo "<a class='nav-link text-danger' id='admin'><span class='btn btn-outline-warning rounded-pill disabled'>Mode Administrateur</span></a>";} 
          ?>
        </li>
  <li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

      <!-- <div class="user-badge"> <?= $_SESSION["firstname"] ?> </div> -->
      <?php
      if(isset($_SESSION['image_name']))
      {
        echo '
        <img src="Public/img/<?= $_SESSION["image_name"] ?>" width=125 height=125 alt="" title="<?= $_SESSION["image_name"] ?>" class="pp-navbar">
        ';
      } else {
        echo '
        <div class="user-badge">
      <strong><?= strtoupper(substr($_SESSION["firstname"], 0, 1)) ?> </strong>
      </div>
        '

      }

      ?>
      

      


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