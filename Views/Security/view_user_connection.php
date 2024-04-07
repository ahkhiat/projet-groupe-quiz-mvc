<form action="?controller=security&action=login_connection" method="POST">
  <div class="mb-3">
     <label for="exampleInputemail" class="form-label">Email</label> 
    <input type="email" class="form-control" id="email"  name="email" >
  </div>
  
  <div class="mb-3">
    <label for="Password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control " id="password" name="password">
  </div>
 
  <button type="submit" name="submit_form_connection"class="btn btn-primary">Se connecter</button>
</form>