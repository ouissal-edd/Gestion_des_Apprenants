const burgerMenu=document.getElementById('burgerMenu');
const xIcon=document.getElementById('xIcon');
const navigationPopup=document.getElementById('navigationPopup');

function myFunction(x) {
  if (x.matches) {
    burgerMenu.style.display ="block";
  } else {
    burgerMenu.style.display ="none";
  }
}

var x = window.matchMedia("(max-width: 900px)")
myFunction(x) 
x.addListener(myFunction) 



burgerMenu.addEventListener('click',function(){
 xIcon.style.display ="flex";
 burgerMenu.style.display ="none";
 navigationPopup.style.display ="flex";
})


xIcon.addEventListener('click',function(){
 navigationPopup.style.display ="none";
 xIcon.style.display ="none";
 burgerMenu.style.display ="block";
})





// function validateNumInscri() {
//     var NumInscri = document.getElementById("numInscri").value;

//     if (NumInscri.length == 0) {
//         producePrompt("ce champ est obligatoir", "error", "red");
//         return false;
        
//     }

//     if (!NumInscri.match(/^[0-9]+$/)) {
//         producePrompt("enter a Number", "error", "red");
//         return false;

//     }

//     producePrompt("ID is valid", "error", "green");
//     return true;
// }



function validateNom() {
    var Nom = document.getElementById("nom").value;

    if (Nom.length == 0) {
        producePrompt("ce champ est obligatoir", "error1", "red");
        return false;
    }

    if (!Nom.match(/^[a-zA-Z-\s]+$/)) {
        producePrompt("enter a correct name", "error1", "red");
        return false;

    }

    producePrompt("Name is valid", "error1", "green");
    return true;
}




function validatePrenom() {
    var Prenom = document.getElementById("prenom").value;

    if (Prenom.length == 0) {
        producePrompt("ce champ est obligatoir", "error2", "red");
        return false;
    }

    if (!Prenom.match(/^[a-zA-Z-\s]+$/)) {
        producePrompt("enter a correct name", "error2", "red");
        return false;

    }

    producePrompt("Name is valid", "error2", "green");
    return true;
}


function validateAge() {
    var Agee = document.getElementById("age").value;

    if (Agee.length == 0) {
        producePrompt("ce champ est obligatoir", "error3", "red");
        return false;
    }
    if (Agee.length != 2 ) {
        producePrompt("enter a logic age", "error3", "red");
        return false;

    }

    if (!Agee.match(/^[0-9]+$/)) {
        producePrompt("enter a Number", "error3", "red");
        return false;

    }

    producePrompt("Age is valid", "error3", "green");
    return true;
}



function validateGender() {
    var Prenom = document.getElementById("sexe").value;

    if (Prenom.length == 0) {
        producePrompt("ce champ est obligatoir", "error4", "red");
        return false;
    }

    if (!Prenom.match(/^[a-zA-Z-\s]+$/)) {
        producePrompt("enter Gender", "error4", "red");
        return false;

    }

    producePrompt("inssert", "error4", "green");
    return true;
}




function validateEmail() {
    var Prenom = document.getElementById("mail").value;

    if (Prenom.length == 0) {
        producePrompt("ce champ est obligatoir", "error5", "red");
        return false;
    }

    if (!Prenom.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
        producePrompt("email is invalid", "error5", "red");
        return false;

    }

    producePrompt("Email is valid", "error5", "green");
    return true;
}

function producePrompt(message, promptlocation, color) {
    document.getElementById(promptlocation).innerHTML = message;
    document.getElementById(promptlocation).style.color = color;

}