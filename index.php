<?php
session_start();
$page = 'home';
include 'assets/php/nav.php';
include 'assets/php/functions.php';
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <?php include 'assets/php/head.php'?>
        <title>Project Steam</title>
        <link rel="preload" as="image" href="/assets/images/bgs/bg3.webp" fetchpriority="high">
        <style>
        <?php 
        addInlineCSS($page);
        lightMode($_SESSION['lightMode']);
        language($_SESSION['lang']);
        ?>
        </style>
        <script src="/assets/js/bgChange.js" defer></script>
    </head>
    <body>
        <?php nav($page); ?>
        <header>
            <div class="bgContainer">
                <div class="bg" id="bg1"></div>
                <div class="bg" id="bg2"></div>
                <div class="bg" id="bg3"></div>
                <div class="bg" id="bg4"></div>
                <noscript><div class="bg bgActive" id="bg3" style="opacity: 1;"></div></noscript>
            </div>
            <div class="textContainer">
                <h1>Project Steam</h1>
                <h2 class="de">Ein Steampunk Rollenspiel</h2>
                <h2 class="en">A Steampunk RPG</h2>
                <h3>Pre-Alpha</h3>
                
            </div>
        </header>
        <main>
            <section>
                <h2 class="de">Willkommen in Gehenna</h2>
                <h2 class="en">Welcome to Gehenna</h2>
                <p class="de">Salve Legens und Willkommen in der Welt von <i>Project Steam</i>. Wie du vielleicht bereits in der Überschrift gelesen hast, ist Project Steam weiterhin in einer Pre-Alpha-Phase. Neben den Büchern betrifft das auch diese Website - einige Seiten sind nicht verfügbar und die Website ist nicht auf Suchmaschinen gelistet.<br>
                Dennoch wirst du hier alle wichtigen Infos zum aktuellen Stand des Projekts finden, natürlich neben allen wichtigen Tools wie der Würfelapp oder dem ObjektGenerator.</p>
                <p class="en">Salve Legens and welcome to the world of <i>Project Steam</i>, a steampunk RPG currently in pre-alpha. That doesn't only apply to the books - this website is still in pre-alpha and will frequently change.<br>
                All updates to Project Steam will be published here, as well as the expanding set of tools, like the dice roller. Have fun playing!</p>
            </section>
        </main>
        <?php include "assets/php/footer.php"; ?>
    </body>
</html>