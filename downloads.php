<?php
session_start();
include 'assets/php/functions.php';
include 'assets/php/nav.php';
$page = 'downloads';
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <?php include 'assets/php/head.php' ?>
        <title>Project Steam</title>
        <style>
        <?php 
        lightMode($_SESSION['lightMode']);
        language($_SESSION['lang']);
        addInlineCSS($page);
        ?>
        </style>
    </head>
    <body>
        <?php nav($page); ?>
        <main>
            <section>
                <h2>Downloads</h2>
                <p>As Project Steam is still in development, there are no english versions of the books available yet. If you want to, you may of course still download the german versions.</p>
                <div class="productContainer">
                    <a class="product" href="download/1.1 Grundregelwerk V0.0.1.7" target="_blank" style="background-image: url('assets/images/grwBG.webp')">
                        <p class="de">Grundregelwerk</p>
                        <p class="en">Core Rulebook</p>
                    </a>
                    <a class="product" href="download/2.0 Gehenna an Caelum V0.0.16.2.pdf" target="_blank" style="background-image: url('assets/images/gacBG.webp')">
                        <p>Gehenna an Caelum</p>
                    </a>
                    <a class="product" href="download/1.2 (Mobile) Grundregelwerk V0.0.1.7" target="_blank" style="background-image: url('assets/images/grwmBG.webp')">
                        <p class="de">Grundregelwerk<br>(Mobile)</p>
                        <p class="en">Core Rulebook<br>(Mobile)</p>
                    </a>
                    <a class="product" href="download/2.1 (Mobile)Gehenna an Caelum V0.0.16.2.pdf" target="_blank" style="background-image: url('assets/images/gacmBG.webp')">
                        <p>Gehenna an Caelum<br>(Mobile)</p>
                    </a>
                    <a class="product" href="download/X. BürgerwehrDemo.pdf" target="_blank">
                        <p class="de">Eigenschaftsbaum:<br>Bürgerwehr</p>
                        <p class="en">Abilities:<br>Bürgerwehr</p>
                    </a>
                    <a class="product" href="download/X. DuellantDemo.pdf" target="_blank">
                        <p class="de">Eigenschaftsbaum:<br>Duellant</p>
                        <p class="en">Abilities:<br>Duellant</p>
                    </a>
                    <a class="product" href="download/X. EntdeckerDemo.pdf" target="_blank">
                        <p class="de">Eigenschaftsbaum:<br>Entdecker</p>
                        <p class="en">Abilities:<br>Entdecker</p>
                    </a>
                    <a class="product" href="download/X. KäuflicherDemo.pdf" target="_blank">
                        <p class="de">Eigenschaftsbaum:<br>Käuflicher</p>
                        <p class="en">Abilities:<br>Käuflicher</p>
                    </a>
                    <a class="product" href="download/X. KultistDemo.pdf" target="_blank">
                        <p class="de">Eigenschaftsbaum:<br>Kultist</p>
                        <p class="en">Abilities:<br>Kultist</p>
                    </a>
                </div>
            </section>
        </main>
        <?php include "assets/php/footer.php"; ?>
    </body>
</html>