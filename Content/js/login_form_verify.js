console.log("login_form_verify loaded");

document.addEventListener("DOMContentLoaded", () => {

  let loginContainer = document.getElementById("user_login_container");

  if(loginContainer)
  {

      // .......pouvoir voir ou cacher le mot de passe tapperdans le formulaire de connecxion.................
      console.log('login_form_verify loaded');

      let inputPassword = document.getElementById('pswd');
      let toggleButton = document.getElementById('btn');
      let iconEye = document.querySelector('#btn i');

      toggleButton.addEventListener('click',function(){

          inputPassword.type =  inputPassword.type === 'password' ? 'text' : 'password';

            //........................Changer l'icône de l'œil
          let iconEye = document.querySelector('#btn i');
          iconEye.classList.toggle('fa-eye');
          iconEye.classList.toggle('fa-eye-slash');
          
      });
  }

});
