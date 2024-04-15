document.addEventListener("DOMContentLoaded", () => {

    let registrationContainer = document.getElementById("user_registration_container");

    if(registrationContainer)
    {
        console.log('registration_form_verify loaded');

        const uppercaseRegex = /[A-Z]/;
        const lowercaseRegex = /[a-z]/;
        const specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

        const registrationForm = document.getElementById('registration-form');
        // let password = document.querySelector('input[name="password"]').value;
        let errorContainer = document.getElementById('error-message');

        // EN COURS 
        document.querySelector('input[name="password"]').addEventListener('input', (event) => {
            let password = event.target.value;

            if(uppercaseRegex.test(password)) {
                console.log('Il y a une majuscule');
                errorContainer.innerText += 'Il y a bien une majuscule'
            }
            if(lowercaseRegex.test(password)) {
                console.log('Il y a une minuscule');
                errorContainer.innerText += 'Il y a bien une minuscule'

            }
            if(specialCharRegex.test(password)) {
                console.log('Il y a un caractère spécial');
                errorContainer.innerText += 'Il y a bien un caractère spécial'

            }

        })
    
        registrationForm.addEventListener('submit', function(event) {

            password = document.querySelector('input[name="password"]').value;

            //........... Vérifier si le mot de passe a moins de 11 caractères
            if (password.length < 11) {
                console.log('le mot de passe est inférier à 11');
                event.preventDefault(); //.....................Empêcher l'envoi du formulaire
                errorContainer.textContent = 'Le mot de passe doit avoir au moins 11 caractères.';
            } else if (!uppercaseRegex.test(password) || !lowercaseRegex.test(password) || !specialCharRegex.test(password)) {
                event.preventDefault(); //...........Empêcher l'envoi du formulaire
                errorContainer.textContent = 'Le mot de passe doit contenir au moins une majuscule, une minuscule et un caractère spécial.';
            } else {
                errorContainer.textContent = ''; //.................Effacer le message d'erreur s'il existe
            }
        });

        // .......pouvoir voir ou cacher le mot de passe tapperdans le formulaire d'enregistrement.................

        const passwordInput = document.getElementById('current-password');
        const eyeIcon = document.querySelector('#button i');
        const btn=document.getElementById('button');
        btn.addEventListener('click', function() {
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
            //......................Changer l'icône de l'œil
            const eyeIcon = document.querySelector('#button i');
            eyeIcon.classList.toggle('fa-eye');
            eyeIcon.classList.toggle('fa-eye-slash');
        });
    }

});