// console.log('cc cest moi');
document.querySelector('form').addEventListener('submit_registration', function(event) {
    const password =document.querySelector('input[name="password"]').value;
              // Vérifier si le mot de passe a moins de 11 caractères
    if (password.length < 11) {
      event.preventDefault(); // Empêcher l'envoi du formulaire
      document.getElementById('error-message').textContent = 'Le mot de passe doit avoir au moins 11 caractères.';
    } else {
      document.getElementById('error-message').textContent = ''; // Effacer le message d'erreur s'il existe
    }
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