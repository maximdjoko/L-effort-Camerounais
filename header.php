<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Open+Sans&display=swap" rel="stylesheet">
    <!-- <title>Document</title> -->
</head>
<body>
    
<header>

<!-- --------Cet Element inclu le Logo, le button de recherche et les deux autres button -->

<div class="header_items">
    <div class="ilogo">
        <img id="imgLogo" src="image/photo_2020-08-19_15-57-54.jpg" alt="L'effort logo" style="max-width: 230px;">
    </div>

    <div class="buttons">

        <div class="search_box">
            <input type="text" placeholder="Rechercher un Titre... ">
            <button>
                <img src="image/android-search.png" alt="" style="width: 40%; height: 25px;">
            </button>
        </div>
        <div id="li" class="connect">

            <div id="one"><a href="#lastft">se connecter</a></div>
            <div id="two"><a href="#">souscrire</a></div>

        </div>

    </div>

</div>

<h3>Hebdomadaire Catholique d'information</h3>


<!-----------------------------------------Ceci inclu le lien ver les autres page ----------------->

<nav>

    <div class="nav_items">
        <class class="font_icons">
            <i class="fas fa-bars"></i>
        </class>
        <ul class="nav">
            <li><a href="index.php">Accueil</a> </li>
            <li><a href="Articles.php">Articles</a> </li>
            <li><a href="About us.php">A propos</a></li>
        </ul>

    </div>

</nav>
</header>
<hr>
<div class="nav_hamburger">
<div class="cross">
    <i class="fas fa-times"></i>
</div>
<ul>
    <li>
        <a href="#">accueil</a>
    </li>
    <li>
        <a href="L'Effort Camerounais/Articles.html">articles</a>
    </li>
    <li>
        <a href="./a propos de l'effort camerounais/About us.html">a propos</a>
    </li>
    <li>
        <a href="#lastft">se connecter</a>
    </li>
    <li>
        <a href="#">souscrire</a>
    </li>
</ul>
</div>





<script >
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

        var btns = document.querySelectorAll(".nav li a");
        btns.forEach(btn => {
    btn.addEventListener('click', e => {

        if (!e.target.classList.contains('active')) {
            let a = Array.from(btns).find(btn => {
                return btn.classList.contains('active')
            }).classList.remove('active');
            e.target.classList.add('active');

        }
    })
})
</script>


