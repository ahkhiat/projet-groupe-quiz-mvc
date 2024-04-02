<form action="?controller=security&action=user_registration_valid" method="post">
    
       <div class="form-row">
          <label class="col-md-3" for="lastname">Nom</label>   
          <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Entrer votre Nom">    
        </div>
        <div class="form-row">
          <label class="col-md-3" for="firstname">Prenom</label>   
          <input id="firstname" type="text" class="form-control" name="firstname" placeholder="Entrer votre Prenom" required>    
        </div>
        <div class="form-row">
          <label class="col-md-3" for="username">Nom utilisateur</label>   
          <input id="username" type="text" class="form-control" name="username" placeholder="Entrer votre mot de passe">    
        </div>
        <div class="form-row">
          <label class="col-md-3" for="birthdate">Date de naissance</label>   
          <input id="birthdate" type="date" class="form-control" name="birthdate" placeholder="Entrer votre Date de naissance">    
        </div>
        <div class="form-row">
          <label class="col-md-3" fo="email">Email</label>   
          <input id="email" type="text" class="form-control" name="email" placeholder="Entrer votre email">    
        </div>
        <div class="form-row">
          <label class="col-md-3" for="password">Mot de passe</label>   
          <input id="password" type="text" class="form-control" name="password" placeholder="Entrer votre mot de passe">    
        </div>
       
        <div class="col-md-1 offset-md-11">
         <button class="btn btn-warning">Envoyer</button>
        </div>
  
</form>