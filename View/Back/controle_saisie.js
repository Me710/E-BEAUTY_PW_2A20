//document.getElementById("nom").value;
/*
function verif() {
  var errors = "<ul>";
  var nom = document.querySelector("#FirstName").value;
  var prenom = document.querySelector("#LastName").value;
  var username = document.querySelector("#UserName").value;
  var ville = document.querySelectorAll("#Ville").value;
  var email = document.querySelectorAll("#Email").value;
  (nb = 0), (p = "");
  var pass = document.querySelector("#Password").value;
  var pass1 = document.querySelector("#PasswordConf").value;

  if (nom.charAt(0) < "A" || nom.charAt(0) > "Z") {
    errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
  }
  if (prenom.charAt(0) < "A" || prenom.charAt(0) > "Z") {
    errors += "<li>Le prenom doit commencer par une lettre Majuscule </li>";
  }
  if (
    ville === "" ||
    nom === "" ||
    prenom === "" ||
    email === "" ||
    pass === "" ||
    username === "" ||
    pass1 === ""
  ) {
    errors += "<li>Ce Champs est obligatoire </li>";
  }

  if (pass !== pass1 || pass === "" || pass1 === "") {
    errors += "<li> Veuillez vérifier le mot de passe saisi </li>";
    document.querySelector("#Password").value = "";
    document.querySelector("#PasswordConf").value = "";
    document.querySelector("#Password").focus();
  }

  if (errors !== "<ul>") {
    document.querySelector("#erreur").style.color = "red";
    errors += "</ul>";
    document.getElementById("erreur").innerHTML = errors;
    return false;
  } else {
    var msg = "Bienvenue " + nom + " " + prenom + ".\n Vos préférences: " + p;
    alert(msg);
  }
}*/
function Verif() {
  var test = false;
  let count = 0;
  var nomR = document.forms["FormAjout"]["FirstName"].value;
  var prenomR = document.forms["FormAjout"]["LastName"].value;
  var mail = document.forms["FormAjout"]["Email"].value;
  var password = document.forms["FormAjout"]["Password"].value;
  var passwordC = document.forms["FormAjout"]["PasswordConf"].value;
  var username = document.forms["FormAjout"]["UserName"].value;
  var ville = document.forms["FormAjout"]["Ville"].value;

  var errorN = document.getElementById("errorNR");
  var errorP = document.getElementById("errorPR");
  var errorEmail = document.getElementById("errorMR");
  var errorPass = document.getElementById("errorPass");
  var errorPassC = document.getElementById("errorPassC");
  var errorNU = document.getElementById("errorNU");
  var errorVille = document.getElementById("errorV");

  var letters = /^[A-Za-z]+$/;
  var dateNow = new Date();
  if (nomR == "") {
    errorN.innerHTML = "Veuillez entrer votre nom!";
  } else if (!(nomR.match(letters) && nomR.charAt(0).match(/^[A-Z]+$/))) {
    errorN.innerHTML = "Veuillez entrer un nom valid!";
  } else {
    errorN.innerHTML = "";
    count++;
  }

  if (prenomR == "") {
    errorP.innerHTML = "Veuillez entrer votre prenom!";
  } else if (!(prenomR.match(letters) && prenomR.charAt(0).match(/^[A-Z]+$/))) {
    errorP.innerHTML = "Veuillez entrer un prenom valid!";
  } else {
    errorP.innerHTML = "";
    count++;
  }
  if (username == "") {
    errorP.innerHTML = "Veuillez entrer votre prenom!";
  } else if (
    !(username.match(letters) && username.charAt(0).match(/^[A-Z]+$/))
  ) {
    errorNU.innerHTML = "Veuillez entrer un nom d'utiliateur valid!";
  } else {
    errorNU.innerHTML = "";
    count++;
  }
  if (mail == "") {
    errorEmail.innerHTML = "Veuillez entrer votre email!";
  } else if (!mail.match("@gmail.com")) {
    errorEmail.innerHTML = "Veuillez entrer un email valid!";
  } else {
    errorEmail.innerHTML = "";
    count++;
  }
  if (password == "") {
    errorPass.innerHTML = "Veuillez entrer votre mot de passe!";
  } else if (
    !(
      password.match(/[0-9]/g) &&
      password.match(/[A-Z]/g) &&
      password.match(/[a-z]/g) &&
      password.length >= 8
    )
  ) {
    errorPass.innerHTML =
      "Le mot de passe doit contenir au moins 8 caractères, dont au moins : Une lettre majuscule, Une lettre minuscule et un nombre.";
  } else {
    errorPass.innerHTML = "";
    count++;
  }
  if (VerifPassword()) {
    count++;
  }

  if (count === 6) {
    return true;
  }
  return false;
}

function VerifPassword() {
  var password = document.forms["FormAjout"]["Password"].value;
  var passwordC = document.forms["FormAjout"]["PasswordConf"].value;
  var errorPassC = document.getElementById("errorPassC");

  if (passwordC == "") {
    errorPassC.innerHTML = "Veuillez confirmer votre email!";
  }
  if (!(password == passwordC)) {
    errorPassC.innerHTML = "Les deux mot de passes ne sont pas identiques!";
  } else {
    errorPassC.innerHTML = "";
    return true;
  }
}

function validateForm() {
  alert(Verif());
  //e.preventDefault();
}
