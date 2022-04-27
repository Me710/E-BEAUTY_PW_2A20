function Verif() {
    var test = false;
    let count = 0;
   // var idb = document.forms["FormAjout"]["id_blog"].value;
    var Aut = document.forms["FormAjout"]["Auteur"].value;
    var date = document.forms["FormAjout"]["Date"].value;
    var titre = document.forms["FormAjout"]["Titre"].value;
    var nom = document.forms["FormAjout"]["type"].value;
    var descrip = document.forms["FormAjout"]["texte"].value;
  
 //   var errorN = document.getElementById("errorNR");
    var errorP = document.getElementById("errorPR");
    var errorDate = document.getElementById("errorDT");
    var errorTitre = document.getElementById("errorV");
    var errorType = document.getElementById("errorX");
    var errorD = document.getElementById("errorDE");

    var jour=dateGlobale.getDay();
    var annee=dateGlobale.getyear();
    var mois=dateGlobale.getMonth();
    var numeroJour = dateGlobale.getDate();
  
    var letters = /^[A-Za-z]+$/;
    var dateNow = new Date();
/*    if (aut == "") {
      errorN.innerHTML = "Veuillez entrer l auteur!";
    } else if (!(idb.match(letters) && idb.charAt(0).match(/^[A-Z]+$/))) {
      errorN.innerHTML = "Veuillez entrer un nom valid!";
    } else {
      errorN.innerHTML = "";
      count++;
    }*/
  
    if (Aut == "") 
    {
      errorP.innerHTML = "Veuillez entrer l auteur !";
    } else if (!(Aut.match(letters) && Aut.charAt(0).match(/^[A-Z]+$/))) 
    {
      errorP.innerHTML = "Veuillez entrer un auteur valid !";
    } else 
    {
      errorP.innerHTML = "";
      count++;
    }

    if (descrip == "") 
    {
      errorD.innerHTML = "Veuillez entrer la description !";
    } else if (!(descrip.match(letters) && descrip.charAt(0).match(/^[A-Z]+$/))) 
    {
      errorD.innerHTML = "Veuillez entrer une description valide !";
    } else 
    {
      errorD.innerHTML = "";
      count++;
    }

    if (date == "") {
      errorDate.innerHTML = "Veuillez choisir une date!";

  }
  else if (new Date(date).toLocaleString() != dateNow.toLocaleString()) {
      errorDate.innerHTML = "La date de publication doit être égale à la date actuelle";
  }
  else {
      errorDate.innerHTML = "";
 }

    if (titre == "") 
    {
        errorTitre.innerHTML = "Veuillez entrer un titre !";
      } else if (!(titre.match(letters) && titre.charAt(0).match(/^[A-Z]+$/)))
     {
        errorTitre.innerHTML = "Veuillez entrer un titre valid !";
      } else 
      {
        errorTitre.innerHTML = "";
        count++;
      }

      if (nom == "") 
      {
        errorType.innerHTML = "Veuillez entrer un type !";
      } else if (!(nom.match(letters) && nom.charAt(0).match(/^[A-Z]+$/))) 
      {
        errorType.innerHTML = "Veuillez entrer un type valid !";
      } else 
      {
        errorType.innerHTML = "";
        count++;
      }
      if (count === 5)
      {
        return true;
      }
      return false;
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
  