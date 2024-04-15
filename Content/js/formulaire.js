 console.log('cc cest moi');
// ..............verification du mot de passe avant enregistrement

    const registrationForm = document.getElementById('registration-form');
    const password = document.querySelector('input[name="password"]').value;
registrationForm.addEventListener('submit', function(e) {
    password = document.querySelector('input[name="password"]').value;
    const uppercaseRegex = /[A-Z]/;
    const lowercaseRegex = /[a-z]/;
    const specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

    //........... Vérifier si le mot de passe a moins de 11 caractères
    if (password.length < 11) {
        e.preventDefault(); //.....................Empêcher l'envoi du formulaire
        document.getElementById('error-message').textContent = 'Le mot de passe doit avoir au moins 11 caractères.';
    } else if (!uppercaseRegex.test(password) || !lowercaseRegex.test(password) || !specialCharRegex.test(password)) {
        e.preventDefault(); //...........Empêcher l'envoi du formulaire
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

  



