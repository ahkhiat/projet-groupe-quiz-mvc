console.log("script standard chargé");

//-----------------Confirmation avant suppression------------------------
function confirmation() {
  return confirm("Etes-vous certain de supprimer cette question ? Cette action est irréversible !");
}

function returnConfirmation() {
  return confirm("Etes-vous certain de revenir en arrière ? Toute progression sera perdue !");
}

/* ------------------------- upload profile picture ------------------------- */
document.querySelector("#img_input").onchange = function() {
  document.querySelector("#img_form").submit();
}

