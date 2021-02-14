<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'EFFOT Camerounais.com</title>
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <main>
<?php include('header.php'); ?>
        <!---------------------------------------SECTION D'ACCEUIL --------------------------------------------->
        <section>

            <div class="announcement">
                <h2 id="anounce">Soutenez L’Effort camerounais en souscrivant un abonnement. Pour les modalités, veuillez contacter le Tel 670-27-72-86</h2>

            </div>

            <div class="mainsection">

                <div class="subsection">

                    <!-- -----------------------------------------------Styling de L'Element Gauche---------------------------------------------->
                    <div class="left">
                        <div class="Advertisement">
                            <!-- -----------------------------------------------L'IMAGE Slider----------------------------------->
                            <div class="image">
                                <img src="image/" name="slid" alt="sliding image ">
                            </div>
                            <!-- -----------------------------------------------Le TEXT Slider----------------------------------->

                            <div class="Text ">
                                <h4>L'actualite</h4>
                                <div class="comment ">
                                    <div class="animdiv">
                                        <span class="h1 ">EN MEMOIRE DE BABA SIMON La paroisse de Tokombéré se dote d’une nouvelle église</span><br>
                                        <span class="h2 ">Les Eveques du Cameroun  a Obala pour une nouvelle conference</span>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="the_NEws ">
                            <div class="secone">
                                <div class="news_title ">
                                    <h3>BAFIA </h3>
                                    <p>Le 1er anniversaire de décès de Mgr Athanase Bala célébré dans la prière</p>
                                    <h4>sortie le 20/07/2020 </h4>
                                </div>
                                <div class="news_title ">
                                    <h3>EDITORIAL</h3>
                                    <p>
                                        L’essentiel se trouve dans la formation morale et civique des jeunes </p>
                                    <h4>sortie le 20/07/2020 </h4>
                                </div>
                            </div>
                            <div class="sectwo">

                                <div class="news_title ">
                                    <h3>NGAOUNDERE </h3>
                                    <p>Commémoration du 29ème anniversaire du décès de Mgr Yves Plumey</p>
                                    <br>
                                    <h4>sortie le 20/07/2020 </h4>
                                </div>
                                <div class="news_title ">
                                    <h3>YAGOUA </h3>
                                    <p>Profession solennelle d’un moine autochtone</p>
                                    <br>
                                    <h4>sortie le 20/07/2020 </h4>
                                </div>
                            </div>
                        </div>
                        <div class="Image_news ">

                            <div class="image_title ">
                                <img src="image/Eff 720.jpg " alt=" " width="100% " height="50% ">
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicing. </h4>
                            </div>
                            <div class="image_title ">
                                <img src="image/IMG-20200816-WA0000.jpg " alt=" " width="100% " height="50% ">
                                <h4>Lorem ipsum dolor sit amet consectetur. Lore</h4>

                            </div>
                            <div class="image_title ">
                                <img src="image/IMG-20200816-WA0012.jpg " alt=" " width="100% " height="50% ">
                                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
                            </div>
                        </div>

                    </div>
                    <!-- -----------------------------------------Styling de l'Element Droit-------------------------------->
                    <div class="right ">
                        <div class="news_titles ">
                            <img src="image/photo_2020-08-19_15-57-54.jpg " style="width:100%; height: 100%; ">
                            <p>LES GRANDS TITRES DE LA SEMAINE</p>
                        </div>

                        <div class="news_titles ">
                            <h3>L'actue</h3>
                            <p>Lorem ipsum dolor sit amet elit. Placeat eum aut.</p>
                            <h4>sortie le 20/07/2020 </h4>
                        </div>
                        <div class="news_titles ">
                            <h3>L'actue</h3>
                            <p>Lorem ipsum sitelit. Placeat eum aut nisi atque! Lorem possimus.</p>
                            <h4>sortie le 20/07/2020 </h4>
                        </div>
                        <div class="news_titles ">
                            <h3>L'actue</h3>
                            <p>Amet sit amet consect elit. Placeat eum aut nisi atque! Lorem ipsum Earum, possimus.</p>
                            <h4>sortie le 20/07/2020 </h4>
                        </div>
                        <div class="news_titles ">
                            <h3>L'actue</h3>
                            <p>Lorem ipsum dolor sit, aut nisi atque! Lorem ipsum dolor elit. Earum, possimus.</p>
                            <h4>sortie le 20/07/2020 </h4>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <div class="second" id="lastft">

            <div class="form" id="formm">

                <form id="form " action=" ">
                    <div id="Frm">
                        <input type="text " placeholder="first name ">
                        <input type="text " placeholder="last name ">
                    </div>
                    <input type="email" required placeholder="type in your Email address">
                    <textarea placeholder="message"></textarea>
                    <div id="btns">
                        <input type="submit">
                        <input type="reset">
                    </div>
                </form>
            </div>
        </div>
        <?php include('footer.php') ?>
    </main>

    <script src="Article.js"></script>
    <script>
        var foot = document.querySelector('.second')
        this.addEventListener('scroll', () => {
            foot.classList.toggle('Style', this.scrollY > 1000);
        })

        // ----------------------------------- image slider codes---------------------------------->
        var imaglist = [];
        var initialiser = 0;
        const timer = 3900; {
            imaglist[0] = 'image/Obala1.jpg';
            imaglist[1] = 'image/SEMIN_EV.jpg';
            imaglist[2] = 'image/Eveque 1.jpg';
        }
        const imgSlider = () => {
            document.slid.src = imaglist[initialiser];
            if (initialiser < imaglist.length - 1) {
                initialiser++;
            } else {
                initialiser = 0;
            }
            setTimeout("imgSlider()", timer);
        }
        this.onload = imgSlider();
    </script>
</body>

</html>