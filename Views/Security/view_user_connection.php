<div id="user_login_container">


  <!-- <div class="text-center">
  <h2>Connexion</h2>
</div> -->

  <!-- <div class="container">
  <div class="mx-auto mt-5 col-xl-4 col-md-6 col-sm-11 col-11">
    <form action="?controller=security&action=login" method="POST" id="login-form">
      <div class="mb-3">
        <label for="exampleInputemail" class="form-label">Email</label> 
        <input type="email" class="form-control" id="email"  name="email" >
      </div>
      
      <div class="mb-3">
        <label for="Password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control " id="password" name="password">
      </div>
    
      <button type="submit" class="btn btn-primary">Se connecter</button>
      <p>Pas de compte? <a href="?controller=security&action=user_registration">s'enregistrer</a>.</p>

    </form>
  </div>
</div> -->

  <div class="col-lg-4 bg-white m-auto rounded-top">
    <h2 class="text-center"> Se connecter</h2>
    <form id="login-form" action="?controller=security&action=login" method="POST">
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
        <input id="email" type="text" class="form-control" name="email" placeholder="Entrer votre email" required>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa fa-lock"></i></span>
        <input type="password" id='pswd' class="form-control" name="password" placeholder="Entrer votre mot de passe" required>
        <button type="button" id="btn" class="btn btn-outline-secondary"><i class="fa fa-eye"></i></button>
      </div>
      <div class="col-md-6 col-sm-6 ">
        <button type="submit" name="submit_connection" class="btn btn-primary">Se connecter</button>
        <p>Pas de compte? <a href="?controller=security&action=user_registration">s'enregistrer</a>.</p>

      </div>

    </form>
  </div>

</div>