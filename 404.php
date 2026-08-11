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
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/hamburger.css">
        <script src="/assets/js/script.js" defer></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=Grenze+Gotisch:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=Grenze+Gotisch:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"></noscript>
        <script>
            let timeLeft = 10;
            window.onload = function() {
                var counter = document.getElementById("counter");
                var timerID = setInterval(countdown, 1000);
            }
            function countdown() {
                if(timeLeft < 0) {
                    window.location.replace("https://rpg.bollmann-hb.de");
                    clearTimeout(timerID);
                }else {
                    counter.innerHTML = timeLeft;
                    timeLeft--;
                }
            }
        </script>
        <style>
main {
    margin-top: 10vh;
    border: none;
}
main h1 {
    font-size: 5em;
    text-align: center;
}
main p {
    text-align: center;
}

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
                    <a href="downloads"><li>Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li>Würfelapp</li></a>
                    <a href="item_picker"><li>ObjektGen</li></a>
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
            <h1>404</h1>
            <h2>Die Ressource, auf die Sie zugreifen wollten, ist nicht verfügbar.</h2>
            <p>Sie werden in <span id="counter">10</span> Sekunden zur Startseite weitergeleitet.</p>
        </main>
    </body>
</html>