// /*button1*/
// var btnPopup = document.getElementById('btnPopup1');
// var overlay = document.getElementById('overlay1');
// var btnClose = document.getElementById('btnClose1');

// btnPopup1.addEventListener('click', openModal);

// function openModal() {
//     overlay1.style.display = 'block';
// }

// btnClose1.addEventListener('click', closeModal);

// function closeModal() {
//     overlay1.style.display = 'none';
// }




let btnClose = document.querySelectorAll(".popup button")

btnClose.forEach((close) => {
    close.addEventListener("click", function(event) {
        event.target.parentElement.style.display = "none";
    });
});

let btnOpen = document.querySelectorAll(".btnPopup")
    // console.log(btnOpen)
btnOpen.forEach((btn) => {
    btn.addEventListener("click", function() {
        btn.nextElementSibling.style.display = "block";
    });
});


var hamburger = document.querySelector(".fa-bars")
var cross = document.querySelector(".fa-times")
var hamnav = document.querySelector(".nav_hamburger")

hamburger.addEventListener("click", function() {
    hamnav.style.display = "block"
    hamburger.style.display = "none"
})

cross.addEventListener("click", function() {
    hamnav.style.display = "none"
    hamburger.style.display = "block"
})