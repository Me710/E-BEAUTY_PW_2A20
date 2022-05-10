function verif () {
      let temp = 0;
      var libelle = document.forms["formAddService"]["libelle"].value;
      var description = document.forms["formAddService"]["description"].value;
      var prix = document.forms["formAddService"]["prix"].value;
      
      var errorL = document.getElementById('errorLib');
      var errorD = document.getElementById('errorDesc');
      var errorP = document.getElementById('errorPrix');
  
      if (libelle == "") {
        errorL.innerHTML = "Veuillez entrer le libelle du service!";
    } else {
        errorL.innerHTML = "";
        temp++;
    }
      if (description == "") {
        errorD.innerHTML = "Veuillez entrer la description du service!";
        } else {
            errorD.innerHTML = "";
            temp++;
        }

      if (prix =="") {
      errorP.innerHTML = "Veuillez rentrer le prix du service!";
  } else if (isNaN(prix) ) {
    errorP.innerHTML = "Seulement des chiffres";
  }  else {
      errorP.innerHTML = "";
      temp++;
  }
  if (temp === 3) {
    return true;
  }
  return false;    
}


function verifU () {
  let temp = 0;
  var libelle = document.forms["formUpdate"]["libelle"].value;
  var description = document.forms["formUpdate"]["description"].value;
  var prix = document.forms["formUpdate"]["prix"].value;
  
  var errorL = document.getElementById('errorLib');
  var errorD = document.getElementById('errorDesc');
  var errorP = document.getElementById('errorPrix');

  if (libelle == "") {
    errorL.innerHTML = "Veuillez entrer le libelle du service!";
} else {
    errorL.innerHTML = "";
    temp++;
}
  if (description == "") {
    errorD.innerHTML = "Veuillez entrer la description du service!";
    } else {
        errorD.innerHTML = "";
        temp++;
    }

  if (prix =="") {
  errorP.innerHTML = "Veuillez rentrer le prix du service!";
} else if (isNaN(prix) ) {
errorP.innerHTML = "Seulement des chiffres";
}  else {
  errorP.innerHTML = "";
  temp++;
}
if (temp === 3) {
return true;
}
return false;    
}

function verifPack () {
  let temp = 0;
  var nom = document.forms["formAddPack"]["nomP"].value;
  var description = document.forms["formAddPack"]["descriptionP"].value;

  
  var errorNP = document.getElementById('errorNomP');
  var errorD = document.getElementById('errorDescP');

  if (nom == "") {
    errorNP.innerHTML = "Veuillez entrer le nom du pack!";
} else {
    errorNP.innerHTML = "";
    temp++;
}
  if (description == "") {
    errorD.innerHTML = "Veuillez entrer la description du pack!";
    } else {
        errorD.innerHTML = "";
        temp++;
    }

if (temp === 2) {
return true;
}
return false;    
}

function verifIns () {
  let temp = 0;

  var card = document.getElementByName("packSelection")[0].value;
  
  var errorCHP = document.getElementById('errorCP');

  if (card.value == choisir) {
    errorCHP.innerHTML = "Veuillez choisir un pack!";
} else {
    errorCHP.innerHTML = "";
    temp++;
}

if (temp === 1) {
return true;
}
return false;    
}