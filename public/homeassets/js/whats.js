// script.js
document.getElementById("openPopupBtn").addEventListener("click", function() {
    document.getElementById("contactPopup").style.display = "block";
});

document.getElementById("closePopupBtn").addEventListener("click", function() {
    document.getElementById("contactPopup").style.display = "none";
});

// document.getElementById("contactForm").addEventListener("submit", function(event) {
//     event.preventDefault();
//     // Here, you can add the code to process the form submission (e.g., send the email).
//     // You can use XMLHttpRequest, fetch API, or any other method to send the data to the server.
//     // After successful submission, you may want to display a success message or close the popup.
//     document.getElementById("contactPopup").style.display = "block";
// });
