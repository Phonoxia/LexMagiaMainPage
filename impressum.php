<?php
session_start();
if(isset($_GET['lightMode'])) {
    $_SESSION['lightMode'] = !$_SESSION['lightMode'];
    header("Location: ".strtok($_SERVER['PHP_SELF'],'.'));
}
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta name="robots" content="noindex">
	    <meta name="googlebot" content="noindex">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Project Steam</title>
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="preload" href="assets/fonts/VictorianText.ttf" as="font" type="font/ttf" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" href="assets/css/hamburger.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="assets/css/hamburger.css"></noscript>
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=Grenze+Gotisch:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=Grenze+Gotisch:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"></noscript>
        <script src="assets/js/script.js" defer></script>
        <style>

<?php 
if($_SESSION['lightMode']) {
    echo "
body {
    background-color: #fff;
    color: #000;
}
main {
    background-color: #fff;
    color: #000;
}
nav {
    background-color: #fff;
}
nav li, nav input, nav button{
    color: #000;
}
li.selected {
    background-color: #d9d9d9;
}
header {
    color: #fff;
}
.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
    background-color: #000;
}";
}
?>
        </style>
    </head>
    <body>
        <nav>
            <ul>
                <a href="index"><li class="navTitle victorian-text">Project Steam</li></a>
                <ul id="navContainer">
                    <a href="index"><li>Startseite</li></a>
                    <a href="downloads"><li class="selected">Downloads</li></a>
                    <a href="about"><li>Über Project Steam</li></a>
                    <a href="dice_roller/index"><li>Würfelapp</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li>Impressum</li></a>
                </ul>
                <form method="get">
                    <input type="hidden" name="lightMode" value="1">
                    <button type="submit">&#9728;</button>
                </form>
                <button id="hamburger" class="hamburger hamburger--squeeze" onClick="changeNav();" aria-label="Navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </ul>
        </nav>
        <main>
            <section>
                <h2>Impressum</h2>
                <h3>Websiteinhaber</h3>
                <p>Maeve Bollmann</p>
                <p>Anna-Lühring-Straße 35</p>
                <p>28205 Bremen</p>
                <p><a href="mailto:maeve@bollmann-hb.de">maeve@bollmann-hb.de</a></p>
                <p>Tel.: 0421 4992183</p>
            </section>
        </main>
        <footer>
            <section>
                <h3>Links</h3>
            </section>
            <section>
                <h3>Impressum</h3>
                <h4>Websiteinhaber</h4>
                <p>Maeve Bollmann</p>
                <p>Anna-Lühring-Str. 35</p>
                <p><a href="mailto:maeve@bollmann-hb.de">maeve@bollmann-hb.de</a></p>
            </section>
        </footer>
    </body>
</html>