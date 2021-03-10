const studentsBtn = document.getElementById('studentsBtn');
const adminsBtn = document.getElementById('adminsBtn');

const defaultText = document.getElementById('defaultText');
const adminsPick = document.getElementById('adminsPick');
const studentsPick = document.getElementById('studentsPick');
const managePick = document.getElementById('managePick');
const manageBtn = document.getElementById('manageBtn');

studentsBtn.addEventListener('click', function(){
 studentsPick.style.display ="flex";
 defaultText.style.display ="none";
 managePick.style.display ="none";
 adminsPick.style.display ="none";
})
adminsBtn.addEventListener('click', function(){
 studentsPick.style.display ="none";
 defaultText.style.display ="none";
 managePick.style.display ="none";
 adminsPick.style.display ="flex";
})
manageBtn.addEventListener('click', function(){
 studentsPick.style.display ="none";
 defaultText.style.display ="none";
 managePick.style.display ="flex";
 adminsPick.style.display ="none";
})

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
