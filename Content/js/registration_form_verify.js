document.addEventListener("DOMContentLoaded", () => {

    let registrationContainer = document.getElementById("user_registration_container");

    if(registrationContainer)
    {
        console.log('registration_form_verify loaded');
     

     
        // ..............verification du mot de passe avant enregistrement
      let groupForm = document.getElementById("registration-form");
        let input = groupForm.password;
        let caractere = document.querySelector(".caractere");
        let majuscule = document.querySelector(".majuscule");
        let minuscule = document.querySelector(".minuscule");
        let generique = document.querySelector(".generique");
        let chiffre = document.querySelector(".chiffre");
        
        input.addEventListener("input", function(){
            validation(this);
        
            if(!this.value){
                remove();
            }
        })
        
        function validation(password){
            
            if(password.value.length >= 11){
                generique.classList.remove("error");
                generique.classList.add("succes");
            }
            else{
                generique.classList.add("error");
                generique.classList.remove("succes");
            }
        
            if(/[A-Z]{1}/.test(password.value)){
                input.classList.remove("invalide");
                majuscule.classList.remove("error");
        
                input.classList.add("succes");
                majuscule.classList.add("succes")
            }
            else{
                input.classList.remove("succes");
                majuscule.classList.remove("succes");
        
                input.classList.add("invalide");
                majuscule.classList.add("error");
            }
        
            if(/[a-z]{1}/.test(password.value)){
                input.classList.remove("invalide");
                minuscule.classList.remove("error");
        
                input.classList.add("succes");
                minuscule.classList.add("succes")
            }
            else{
                input.classList.remove("succes");
                minuscule.classList.remove("succes");
        
                input.classList.add("invalide");
                minuscule.classList.add("error");
            }
            
           
            if(/[0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{1}/.test(password.value)){
                input.classList.remove("invalide");
                caractere.classList.remove("error");
        
                input.classList.add("succes");
                caractere.classList.add("succes");
            }
            else{
                input.classList.remove("succes");
                caractere.classList.remove("succes");
        
                input.classList.add("invalide");
                caractere.classList.add("error");
            }
            if(/[0-9]{1}/.test(password.value)){
                input.classList.remove("invalide");
                chiffre.classList.remove("error");
        
                input.classList.add("succes");
                chiffre.classList.add("succes");
            }
            else{
                input.classList.remove("succes");
                chiffre.classList.remove("succes");
        
                input.classList.add("invalide");
                chiffre.classList.add("error");
            }
        }
        function remove(){
        
            input.classList.remove("invalide");
            input.classList.remove("succes");
        
            caractere.classList.remove("error");
            caractere.classList.remove("succes");
        
            majuscule.classList.remove("succes");
            majuscule.classList.remove("error");
        
            minuscule.classList.remove("succes");
            minuscule.classList.remove("error")
        
            generique.classList.remove("succes")
            generique.classList.remove("error");

            chiffre.classList.remove("succes")
            chiffre.classList.remove("error");
        }
        const passwordInput = document.getElementById('current-password');
        // const eyeIcon = document.querySelector('#button i');
        const btn=document.getElementById('button');
        btn.addEventListener('click', function() {
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
            //......................Changer l'icône de l'œil
            const eyeIcon = document.querySelector('#button i');
            eyeIcon.classList.toggle('fa-eye');
            eyeIcon.classList.toggle('fa-eye-slash');
        });
    }
        // const registrationForm = document.getElementById('registration-form');
        // let password = document.querySelector('input[name="password"]').value;

        // registrationForm.addEventListener('submit', function(event) {

        // const uppercaseRegex = /[A-Z]/;
        // const lowercaseRegex = /[a-z]/;
        // const specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
        // const numbers = /[0-9]/g;

        // const registrationForm = document.getElementById('registration-form');
        // // let password = document.querySelector('input[name="password"]').value;
        // let errorContainer = document.getElementById('error-message');

        // let letter = document.getElementById("letter");
        // let capital = document.getElementById("capital");
        // let number = document.getElementById("number");
        // let length = document.getElementById("length");
        // let special = document.getElementById("special");

        // // EN COURS 
        // document.querySelector('input[name="password"]').addEventListener('input', (event) => {
        //     let password = event.target.value;

        //     if(uppercaseRegex.test(password)) {
        //         capital.classList.remove("invalid");
        //         capital.classList.add("valid");
        //         } else {
        //         capital.classList.remove("valid");
        //         capital.classList.add("invalid");
        //     }
        //     if(lowercaseRegex.test(password)) {
        //         letter.classList.remove("invalid");
        //         letter.classList.add("valid");
        //         } else {
        //         letter.classList.remove("valid");
        //         letter.classList.add("invalid");

        //     }
        //     if(specialCharRegex.test(password)) {
        //         special.classList.remove("invalid");
        //         special.classList.add("valid");
        //         } else {
        //         special.classList.remove("valid");
        //         special.classList.add("invalid");
        //     }
        //     if(numbers.test(password)) {
        //         number.classList.remove("invalid");
        //         number.classList.add("valid");
        //         } else {
        //         number.classList.remove("valid");
        //         number.classList.add("invalid");
        //     }
        //     if(myInput.value.length >= 8) {
        //         length.classList.remove("invalid");
        //         length.classList.add("valid");
        //       } else {
        //         length.classList.remove("valid");
        //         length.classList.add("invalid");
        //       }

        // })
    
        // registrationForm.addEventListener('submit', function(event) {


        //     password = document.querySelector('input[name="password"]').value;


        //     const uppercaseRegex = /[A-Z]/;
        //     const lowercaseRegex = /[a-z]/;
        //     const specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

        //     //........... Vérifier si le mot de passe a moins de 11 caractères
        //     if (password.length < 11) {
        //         console.log('le mot de passe est inférier à 11');
        //         event.preventDefault(); //.....................Empêcher l'envoi du formulaire
        //         document.getElementById('error-message').textContent = 'Le mot de passe doit avoir au moins 11 caractères.';
        //     } else if (!uppercaseRegex.test(password) || !lowercaseRegex.test(password) || !specialCharRegex.test(password)) {
        //         event.preventDefault(); //...........Empêcher l'envoi du formulaire
        //         document.getElementById('error-message').textContent = 'Le mot de passe doit contenir au moins une majuscule, une minuscule et un caractère spécial.';
        //     } else {
        //         document.getElementById('error-message').textContent = ''; //.................Effacer le message d'erreur s'il existe
        //     }
        // });

            //........... Vérifier si le mot de passe a moins de 11 caractères
        //     if (password.length < 11) {
        //         console.log('le mot de passe est inférier à 11');
        //         event.preventDefault(); //.....................Empêcher l'envoi du formulaire
        //         errorContainer.textContent = 'Le mot de passe doit avoir au moins 11 caractères.';
        //     } else if (!uppercaseRegex.test(password) || !lowercaseRegex.test(password) || !specialCharRegex.test(password)) {
        //         event.preventDefault(); //...........Empêcher l'envoi du formulaire
        //         errorContainer.textContent = 'Le mot de passe doit contenir au moins une majuscule, une minuscule et un caractère spécial.';
        //     } else {
        //         errorContainer.textContent = ''; //.................Effacer le message d'erreur s'il existe
        //     }
        // });


        // .......hide and show password.................

     

});