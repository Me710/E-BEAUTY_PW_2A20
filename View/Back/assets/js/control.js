function Verif() {
    var test = false;
    let count = 0;
    var idb = document.forms["FormAjout"]["id_blog"].value;
    var Aut = document.forms["FormAjout"]["Auteur"].value;
    var date = document.forms["FormAjout"]["Date"].value;
    var titre = document.forms["FormAjout"]["Titre"].value;
  
    var errorN = document.getElementById("errorNR");
    var errorP = document.getElementById("errorPR");
    var errorDate = document.getElementById("errorMR");
    var errorTitre = document.getElementById("errorV");
  
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
   /*
    if (date == "") {
      errorDate.innerHTML = "Veuillez entrer votre Date!";
    } else if (!date.match("@esprit.tn")) {
      errorDate.innerHTML = "Veuillez entrer un Date valid!";
    } else {
      errorDate.innerHTML = "";
      count++;
    }*/
  
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
      errorPassC.innerHTML = "Veuillez confirmer votre Date!";
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
  