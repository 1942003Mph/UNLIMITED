// script.js
// document.addEventListener("DOMContentLoaded", function () {
//   const openFormBtn = document.getElementById("openFormBtn");
//   const closeFormBtn = document.getElementById("closeFormBtn");
//   const popupForm = document.getElementById("popupForm");
//   const overlay = document.getElementById("overlay");

//   openFormBtn.addEventListener("click", function () {
//       popupForm.style.display = "block";
//       overlay.style.display = "block";
//   });

//   closeFormBtn.addEventListener("click", function () {
//       popupForm.style.display = "none";
//       overlay.style.display = "none";
//   });

//   // Close the popup when the overlay is clicked
//   overlay.addEventListener("click", function () {
//       popupForm.style.display = "none";
//       overlay.style.display = "none";
//   });
// });
document.addEventListener("DOMContentLoaded", function() {
  const openBtn = document.getElementById("openBtn");
  const overlay = document.getElementById("overlay");
  const popup = document.getElementById("popup");
  const closeBtn = document.getElementById("closeBtn");

  openBtn.addEventListener("click", function() {
    overlay.style.display = "block";
    popup.style.display = "block";
  });

  closeBtn.addEventListener("click", function() {
    overlay.style.display = "none";
    popup.style.display = "none";
  });

  overlay.addEventListener("click", function() {
    overlay.style.display = "none";
    popup.style.display = "none";
  });
});


// start pop-up whatsapp

// Get the button
let mybutton = document.getElementById("myBtn");
        
 // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

 // When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}