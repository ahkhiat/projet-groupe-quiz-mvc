<div class="text-center">
  <h2>Inscription</h2>
</div>
<div class="container">
  <div class="mx-auto mt-5 col-xl-4 col-md-6 col-sm-11 col-11">
    <form action="?controller=security&action=user_registration_valid" method="post">
        
          <div class="mb-3">
              <label class="form-label" for="lastname">Nom</label>   
              <input id="lastname" type="text" class="form-control" name="lastname" >    
            </div>
            <div class="mb-3">
              <label class="form-label" for="firstname">Prenom</label>   
              <input id="firstname" type="text" class="form-control" name="firstname"  required>    
            </div>
            <div class="mb-3">
              <label class="form-label" for="username">Nom utilisateur</label>   
              <input id="username" type="text" class="form-control" name="username" >    
            </div>
            <div class="mb-3">
              <label class="form-label" for="birthdate">Date de naissance</label>   
              <input id="birthdate" type="date" class="form-control" name="birthdate" >    
            </div>
            <div class="mb-3">
              <label class="cform-label" fo="email">Email</label>   
              <input id="email" type="text" class="form-control" name="email" >    
            </div>
            <div class="mb-3">
              <label class="form-label" for="password">Mot de passe</label>   
              <input id="password" type="text" class="form-control" name="password" >    
            </div>
          
          
            <button class="btn btn-warning" type="submit">Envoyer</button>
            
    </form>
  </div>
</div>
