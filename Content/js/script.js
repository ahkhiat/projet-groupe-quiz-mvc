document.addEventListener("DOMContentLoaded", () => {

  const profileContainer = document.getElementById("profile_container");
  const dashboardContainer = document.getElementById("dashboard_container");
  const questionsContainer = document.getElementById("questions_container");
  const themesContainer = document.getElementById("themes_container");

  

  console.log("script standard chargé");

  function returnConfirmation() {
    return confirm("Etes-vous certain de revenir en arrière ? Toute progression sera perdue !");
  }
  
      
  if(dashboardContainer) {
    console.log("dashboard container")
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
  }

  if(themesContainer) {
    console.log("themes container")
    document.querySelector("#theme_delete_form").addEventListener("submit", function(event) {
      console.log('toto');
  
      event.preventDefault();
      if (confirm("Etes-vous certain de supprimer ce thème ? Cette action est irréversible !")) {
        this.submit(); 
      }
    });

  }

  if(questionsContainer) {
    console.log("questions container")
    document.getElementById("question_delete_form").addEventListener("submit", function(event) {
      event.preventDefault();
      if (confirm("Etes-vous certain de supprimer cette question ? Cette action est irréversible !")) {
        this.submit(); 
      }
    });
  }
      

/* ------------------------- upload profile picture ------------------------- */

  // The form is automatically sended when the pic is changed
  if(profileContainer) {
      document.querySelector("#img_input").onchange = function() {
      document.querySelector("#img_form").submit();
      }
    }

});


