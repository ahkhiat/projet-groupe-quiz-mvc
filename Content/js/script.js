document.addEventListener("DOMContentLoaded", () => {

  let profileContainer = document.getElementById("profile_container");

  

      console.log("script standard chargé");

      //-----------------Confirmation avant suppression------------------------
      function confirmation() {
        return confirm("Etes-vous certain de supprimer cette question ? Cette action est irréversible !");
      }
      function returnConfirmation() {
        return confirm("Etes-vous certain de revenir en arrière ? Toute progression sera perdue !");
      }
      

      document.getElementById("nbr_questions_form").addEventListener("submit", function(event) {
        event.preventDefault();
        
        if (confirm("Etes-vous certain de modifier cette valeur ?")) {
          this.submit(); 
        }
      });

      document.getElementById("quiz_duration_form").addEventListener("submit", function(event) {
        event.preventDefault();
        
        if (confirm("Etes-vous certain de modifier cette valeur ?")) {
          this.submit(); 
        }
      });

      /* ------------------------- upload profile picture ------------------------- */


    if(profileContainer) {
        document.querySelector("#img_input").onchange = function() {
        document.querySelector("#img_form").submit();
        }
      }

});


