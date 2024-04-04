

<div class="dashboard" >
      
    <a class="navbar-brand" href="?controller=game&action=all_games">Parties</a>
    <a class="navbar-brand" href="?controller=question&action=all_questions">Questions</a>
    <a class="navbar-brand" href="?controller=theme&action=all_themes">Thèmes</a>
    <a class="navbar-brand" href="?controller=user&action=all_users">Utilisateurs</a>
    <a class="nav-link" href="?controller=admin&action=dashboard">Dashboard</a>
</div>
         
    <div class="admin-badge"><?= $_SESSION['firstname'] ?></div>

    
    <a href="?controller=security&action=disconnection" class="btn btn-danger m-2 p-2">Deconnexion</a>
 