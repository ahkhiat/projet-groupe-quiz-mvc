// console.log('cc cest moi');
        const form = document.querySelector('form');
form.addEventListener('submit', function(e) {
    const password = document.querySelector('input[name="password"]').value;
    const uppercaseRegex = /[A-Z]/;
    const lowercaseRegex = /[a-z]/;
    const specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

    // Vérifier si le mot de passe a moins de 11 caractères
    if (password.length < 11) {
        e.preventDefault(); // Empêcher l'envoi du formulaire
        document.getElementById('error-message').textContent = 'Le mot de passe doit avoir au moins 11 caractères.';
    } else if (!uppercaseRegex.test(password) || !lowercaseRegex.test(password) || !specialCharRegex.test(password)) {
        e.preventDefault(); // Empêcher l'envoi du formulaire
        document.getElementById('error-message').textContent = 'Le mot de passe doit contenir au moins une majuscule, une minuscule et un caractère spécial.';
    } else {
        document.getElementById('error-message').textContent = ''; // Effacer le message d'erreur s'il existe
    }
});
const passwordInput = document.getElementById('password');
const eyeIcon = document.querySelector('#button i');
const btn=document.getElementById('button');
btn.addEventListener('click', function() {
    
    passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
    
    
    // Changer l'icône de l'œil
     const eyeIcon = document.querySelector('#button i');
    eyeIcon.classList.toggle('fa-eye');
    eyeIcon.classList.toggle('fa-eye-slash');
});

//   document.querySelector('form').addEventListener('submit_registration', function(event) {
//     const email =document.querySelector('input[name="email"]').value;
//     const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Expression régulière pour vérifier le format de l'e-mail
    
//     if (!emailRegex.test(email)) { // Si l'e-mail ne correspond pas au format attendu
//       event.preventDefault(); // Empêcher l'envoi du formulaire
//       document.getElementById('email-error').textContent = 'Veuillez entrer une adresse email valide.'; // Afficher un message d'erreur
//     } else {
//       document.getElementById('email-error').textContent = ''; // Effacer le message d'erreur s'il existe
//     }
//   });