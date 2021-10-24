const menuBtn = document.querySelector('.menu-btn');
const navBar = document.querySelector('.nav-menu');
const activeMenu = document.querySelector('body');

menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle("open");
    navBar.classList.toggle("open");
    activeMenu.classList.toggle("open");
});

// // const checkpoint = 300;
 
// // window.addEventListener("scroll", () => {
// //   const currentScroll = window.pageYOffset;
// //   if (currentScroll <= checkpoint) {
// //     opacity = 1 - currentScroll / checkpoint;
// //   } else {
// //     opacity = 0;
// //   }
// //   document.querySelector(".fwh-container").style.opacity = opacity;
// // });

// window.addEventListener("scroll", reveal);
//   function reveal() {
//     let reveals = document.querySelectorAll(".proj");

//     for(let i = 0; i < reveals.length; i++) {
//       let windowHeight = window.innerHeight;
//       let revealTop = reveals[i].getBoundingClientRect().top;
//       let revealPoint = 150; 

//       if(revealTop < windowHeight - revealPoint) {
//         reveals[i].classList.add("reveal");
//       }
//     }
//   }
  

