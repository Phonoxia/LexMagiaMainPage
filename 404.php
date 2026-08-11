<?php
session_start();
include __DIR__.'/assets/php/nav.php';
include __DIR__.'/assets/php/functions.php';
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <?php include __DIR__.'/assets/php/head.php';?>
        <title>404 - Project Steam</title>
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
        lightMode($_SESSION['lightMode']);
        language($_SESSION['lang']);
?>
        </style>
    </head>
    <body>
        <?php nav('none'); ?>
        <main>
            <h1>404</h1>
            <h2>Die Ressource, auf die Sie zugreifen wollten, ist nicht verfügbar.</h2>
            <p>Sie werden in <span id="counter">10</span> Sekunden zur Startseite weitergeleitet.</p>
        </main>
    </body>
</html>