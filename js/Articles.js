function toggle() {
    let pop = document.querySelector(".pop-up");
    console.log(pop);
    pop.classList.toggle("show");
    var blur = document.querySelector("#main_elemdiv")
        // console.log(blur);
        // blur.classList.toggle("blur")
    var hd = document.querySelector("header")
        // console.log(hd);
        // hd.classList.toggle("blur")
}

var item = document.querySelectorAll(".item1 button");

item.forEach(function(e) {
    e.addEventListener("click", function() {
        var popup = document.querySelector(".pop-up")
            // console.log(popup);
        popup.classList.toggle("show")
        var blur = document.querySelector("#main_elemdiv")
            // console.log(blur);
            // blur.classList.toggle("blur")
            // document.querySelector("header").classList.toggle("blur")

    })
})

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