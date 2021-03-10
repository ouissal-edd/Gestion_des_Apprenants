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