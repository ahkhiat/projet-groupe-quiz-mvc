

<div class="dashboard" >
      
    <a class="navbar-brand" href="?controller=theme&action=theme">Theme</a>
    <a class="navbar-brand" href="?controller=question&action=question">Question</a>
    <a class="navbar-brand" href="?controller=reponse&action=reponse">Reponse</a>
    <a class="navbar-brand" href="?controller=game&action=game">Game</a>
    <a class="navbar-brand" href="?controller=user&action=user">Gestion utilisateur</a>       

</div>
         
    <div class="admin-badge"><?= $_SESSION['firstname'] ?></div>

    
    <a href="?controller=security&action=disconnection" class="btn btn-danger m-2 p-2">Deconnexion</a>
 