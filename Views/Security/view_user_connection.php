<form action="?controlleur=security&action=login_connetion", method="post">
  <div class="mb-3">
     <label for="exampleInputemail" class="form-label">Email</label> 
    <input type="email" class="form-control" id="email"  name=email >
  </div>
  
  <div class="mb-3">
    <label for="Password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control " id="password" name="password">
  </div>
 
  <input type="submit" class="btn btn-primary"value="Se connecter">
</form>