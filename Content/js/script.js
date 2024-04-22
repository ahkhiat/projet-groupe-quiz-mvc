document.addEventListener("DOMContentLoaded", () => {

  const profileContainer = document.getElementById("profile_container");
  const dashboardContainer = document.getElementById("dashboard_container");
  const questionsContainer = document.getElementById("questions_container");
  const themesContainer = document.getElementById("themes_container");
  const gameContainer = document.getElementById("game_container")

  // console.log("script standard chargé");
 
/* --------------------- execute only in game container --------------------- */
if(gameContainer) {
  // console.log("game container")
  let returnButton = document.getElementById("return_button").addEventListener("click", (event) => {
    event.preventDefault();
    if (confirm("Etes-vous certain de revenir en arrère ?")) {
      window.location.href = event.currentTarget.href; 
    }
  });
  

}

/* ------------------------ execute only in dashboard ----------------------- */
  if(dashboardContainer) {
    // console.log("dashboard container")
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

/* --------------------- execute only in theme container -------------------- */
  if(themesContainer) {
    // console.log("themes container")
    let deleteButton = document.querySelectorAll(".delete-button");
    deleteButton.forEach((button) => {
      button.addEventListener("click", (event) => {
        event.preventDefault();
        if (confirm("Êtes-vous sûr de vouloir supprimer le thème ?")) {
          button.closest('form').submit();
        } 
      })
    })
  }

/* ------------------- execute only in questions container ------------------ */
  if(questionsContainer) {
    // console.log("questions container")
    let deleteButton = document.querySelectorAll(".delete-button");
    deleteButton.forEach((button) => {
      button.addEventListener("click", (event) => {
        event.preventDefault();
        if (confirm("Êtes-vous sûr de vouloir supprimer la question ?")) {
          button.closest('form').submit();
        }
      })
    })
  }

/* ------------------------- upload profile picture ------------------------- */

  // The form is automatically sended when the pic is changed
  if(profileContainer) {
      document.querySelector("#img_input").onchange = function() {
      document.querySelector("#img_form").submit();
      }
    }

});


