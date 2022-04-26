function VerifReclams() {
  var Message = document.forms["FormReclams"]["Message"].value;
  var errorMessage = document.getElementById("errorMessage");

  if (Message == "") {
    errorMessage.innerHTML = "Veuillez entrez votre message de reclamation!";
    return false;
  } else {
    errorMessage.innerHTML = "";
    return true;
  }
}
