<div class="text-center">
  <h2>Connexion</h2>
</div>
<div class="w-25 mx-auto mt-5">

<form action="?controller=security&action=login_connection" method="POST">
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