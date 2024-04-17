<div id="user_registration_container">

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
                <input type="text" class="form-control" name="username" placeholder="Entrer votre nom d'utilisateur" required>    
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span> 
                <input  type="date" class="form-control" name="birthdate" placeholder="Entrer votre Date de naissance" required>    
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>   
                <input  type="text" class="form-control" name="email" placeholder="Entrer votre email" required>    
              </div>
              <div class=" block-input input-group mb-3">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>  
                <input  type="password"id='current-password' class="form-control" name="password" placeholder="Entrer votre mot de passe" required>
                <button type="button" id="button" class="btn btn-outline-secondary"><i class="fa fa-eye"></i></button>    
              </div>
          
              <div class="d-grid">
                <div id="error-message" class="text-danger">
                </div>
                <button type="submit" name="submit_registration" class="btn btn-primary">Envoyer</button>
              </div>
          <div class="validator-criters">
            <span class="generique"><i class="far fa-check-circle"></i> &nbsp;Votre mot doit comporter 11 Caractères au minimum</span>
            <span class="majuscule"><i class="far fa-check-circle"></i> &nbsp;Votre mot de passe doit avoir 1 lettre majuscule</span>
            <span class="minuscule"><i class="far fa-check-circle"></i> &nbsp;Votre mot de passe doit avoir 1 lettre minuscule</span>
            <span class="caractere"><i class="far fa-check-circle"></i> &nbsp;Votre mot de passe doit avoir 1 caracter spécial</span>
            <span class="chiffre"><i class="far fa-check-circle"></i> &nbsp;Votre mot de passe doit avoir 1 chiffre</span>
      
        </div>
      
      </form>
  </div>

</div>