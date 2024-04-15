<div class="col-lg-4 bg-white m-auto rounded-top">
  <h2 class= "text-center"> Inscription</h2>
    <form id="registration-form" action="?controller=security&action=user_registration_valid" method="post" >
        
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fa fa-user"></i></span>   
              <input  type="text" class="form-control" name="lastname" placeholder="Entrer votre Nom"required>    
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fa fa-user"></i></span>   
              <input  type="text" class="form-control" name="firstname" placeholder="Entrer votre Prenom" required>    
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fa fa-user"></i></span>    
              <input type="text" class="form-control" name="username" placeholder="Entrer votre nom d'utilisateur"required>    
            </div>
            <div class="input-group mb-3">
              <span><i class="fa-solid fa-calendar-days"></i></span> 
              <input  type="date" class="form-control" name="birthdate" placeholder="Entrer votre Date de naissance"required>    
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fa fa-envelope"></i></span>   
              <input  type="text" class="form-control" name="email" placeholder="Entrer votre email"required>    
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fa fa-lock"></i></span>  
              <input  type="password"id='current-password' class="form-control" name="password" placeholder="Entrer votre mot de passe">
              <button type="button" id="button" class="btn btn-outline-secondary"><i class="fa fa-eye"></i></button>    
            </div>
           
          
            <div class="d-grid">
              <div id="error-message" class="text-danger">
              </div>
              <button type="submit" name="submit_registration" class="btn btn-primary">Envoyer</button>
          
            </div>
      
    </form>
</div>