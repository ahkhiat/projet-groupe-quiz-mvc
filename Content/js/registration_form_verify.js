document.addEventListener("DOMContentLoaded", () => {

    let registrationContainer = document.getElementById("user_registration_container");

    if(registrationContainer)
    {
        console.log('registration_form_verify loaded');
        // ..............verification du mot de passe avant enregistrement

        const registrationForm = document.getElementById('registration-form');
        let password = document.querySelector('input[name="password"]').value;

        registrationForm.addEventListener('submit', function(event) {

            password = document.querySelector('input[name="password"]').value;

            const uppercaseRegex = /[A-Z]/;
            const lowercaseRegex = /[a-z]/;
            const specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

            //........... Vérifier si le mot de passe a moins de 11 caractères
            if (password.length < 11) {
                console.log('le mot de passe est inférier à 11');
                event.preventDefault(); //.....................Empêcher l'envoi du formulaire
                document.getElementById('error-message').textContent = 'Le mot de passe doit avoir au moins 11 caractères.';
            } else if (!uppercaseRegex.test(password) || !lowercaseRegex.test(password) || !specialCharRegex.test(password)) {
                event.preventDefault(); //...........Empêcher l'envoi du formulaire
                document.getElementById('error-message').textContent = 'Le mot de passe doit contenir au moins une majuscule, une minuscule et un caractère spécial.';
            } else {
                document.getElementById('error-message').textContent = ''; //.................Effacer le message d'erreur s'il existe
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