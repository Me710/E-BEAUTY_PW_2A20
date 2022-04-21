function Verif() {
    var test = false;
    let count = 0;
    var idb = document.forms["FormAjout"]["id_blog"].value;
    var Aut = document.forms["FormAjout"]["Auteur"].value;
    var date = document.forms["FormAjout"]["Date"].value;
    var titre = document.forms["FormAjout"]["Titre"].value;
    var nom = document.forms["FormAjout"]["Nom"].value;
  
    var errorN = document.getElementById("errorNR");
    var errorP = document.getElementById("errorPR");
    var errorDate = document.getElementById("errorMR");
    var errorTitre = document.getElementById("errorV");
    var errorType = document.getElementById("errorPP");

    var jour=dateGlobale.getDay();
    var annee=dateGlobale.getyear();
    var mois=dateGlobale.getMonth();
    var numeroJour = dateGlobale.getDate();
  
  /*  var letters = /^[A-Za-z]+$/;
    var dateNow = new Date();
    if (aut == "") {
      errorN.innerHTML = "Veuillez entrer l auteur!";
    } else if (!(idb.match(letters) && idb.charAt(0).match(/^[A-Z]+$/))) {
      errorN.innerHTML = "Veuillez entrer un nom valid!";
    } else {
      errorN.innerHTML = "";
      count++;
    }*/
  
    if (Aut == "") {
      errorP.innerHTML = "Veuillez entrer l auteur !";
    } else if (!(Aut.match(letters) && Aut.charAt(0).match(/^[A-Z]+$/))) {
      errorP.innerHTML = "Veuillez entrer un auteur valid !";
    } else {
      errorP.innerHTML = "";
      count++;
    }

    if (titre == "") {
        errorTitre.innerHTML = "Veuillez entrer un titre !";
      } else if (!(titre.match(letters) && titre.charAt(0).match(/^[A-Z]+$/))) {
        errorTitre.innerHTML = "Veuillez entrer un titre valid !";
      } else {
        errorTitre.innerHTML = "";
        count++;
      }

      if (nom == "") {
        errorType.innerHTML = "Veuillez entrer un nom !";
      } else if (!(nom.match(letters) && nom.charAt(0).match(/^[A-Z]+$/))) {
        errorType.innerHTML = "Veuillez entrer un nom valid !";
      } else {
        errorType.innerHTML = "";
        count++;
      }
   /*
    if (date == "") {
      errorDate.innerHTML = "Veuillez entrer votre Date!";
    } else if (!date.match("@esprit.tn")) {
      errorDate.innerHTML = "Veuillez entrer un Date valid!";
    } else {
      errorDate.innerHTML = "";
      count++;
    }*/
  
    
  
 
  
  function validateForm() {
    alert(Verif());
    //e.preventDefault();
  }
  