function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


// const burger = document.getElementById('nav')


// // J'en fait une fonction pour pouvoir l'appeler au chargement de la page car
// // le scoll n'est pas forcément en haut au chargement.
// function onWindowScroll(event) {
// 	if (window.pageYOffset < 4400) {

//     burger.classList.remove('scroll')
  
//     console.log('scrolled');
   
//   } else if (window.pageYOffset > 5150) {
  
//     burger.classList.remove('scroll')
//   }
//   else {
 
//     burger.classList.add('scroll')
  
//   }
// }


// window.addEventListener('scroll', onWindowScroll)