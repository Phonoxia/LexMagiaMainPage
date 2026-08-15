<?php
session_start();
$page = 'campaigns';
include 'assets/php/nav.php';
include 'assets/php/functions.php';
?>
    <head>
        <?php include 'assets/php/head.php'?>
        <title>Kampagnen</title>
        <script src="/assets/js/campaignSwitcher.js" defer></script>
        <style>
        <?php 
        addInlineCSS($page);
        lightMode($_SESSION['lightMode']);
        language($_SESSION['lang']);
        ?>
        </style>
    </head>
    <body>
        <?php nav($page); ?>
        <main>
            <section>
                <h2 class="de">Kampagnen</h2>
                <h2 class="en">Campaigns</h2>
                <p class="en">As Project Steam is still in development, all Campaigns and their descriptions remain only available in German.</p>
            </section>
            <section class="productContainer campaigns wide">
                    <a class="product sklaven" style="background-image: url('assets/images/campaigns/sklaven.jpg')" onclick="productSwitch('sklaven');">
                        <p>Sklaven des Kriegs</p>
                    </a>
                    <a class="product aurorae" style="background-image: url('assets/images//campaigns/aurorae.jpg')" onclick="productSwitch('aurorae');">
                        <p>Im Schatten der Aurorae</p>
                    </a>
                    <a class="product maskenspiel" style="background-image: url('assets/images//campaigns/maskenspiel.jpg')" onclick="productSwitch('maskenspiel');">
                        <p>Maskenspiel</p>
                    </a>
                    <a class="product banner" style="background-image: url('assets/images//campaigns/banner.jpg')" onclick="productSwitch('banner');">
                        <p>Unter dem Banner des Chamen</p>
                    </a>
            </section>
            <section class="productDesc" id="sklaven">
                <h3>Sklaven des Kriegs</h3>
                <p>Dunkle Wolken ziehen über die Montanen. Gefangen genommen und mit einem mysteriösen Kristall implantiert, müsst ihr mit euren neuen Fähigkeiten umgehen lernen. Doch in den Bergen braut sich ein Sturm unbekannten Ausmaßes zusammen, den selbst Nema nicht vorhersehen konnte. Während sich viele mächtige Augen auf die eigentlich im großen Bild des Krieges doch so unwichtigen Montanen richten, steht ihr mitten im Geschehen - ob ihr das wollt, oder nicht.</p>
                <p><b>Typ: </b>Kampagne, Botenkampagne</p>
                <p><b>Schwierigkeit: </b>Komplex</p>
                <p><b>Spielort/e: </b>Conlin</p>
                <p><b>Klasse: </b>Außenständische, Nutzlose, Hilfreiche, Wächter</p>
                <p><b>Spielerzahl: </b>2-6</p>
                <p><b>Charakterstufe: </b>Erfahren(+400FP)</p>
                <p><b>Kampf: 4</b>/4</p>
                <p><b>Überleben: 3</b>/4</p>
                <p><b>Politisch: 3</b>/4</p>
                <p><b>Sozial: 2</b>/4</p>
                <p><b>Wissenschaftlich: 3</b>/4</p>
                <p><b>Magia: 4</b>/4</p>
            </section>
            <section class="productDesc" id="aurorae">
                <h3>Im Schatten der Aurorae</h3>
                <p>Die Aurorae scheinen hell über Cruoria, während sich die Gruppe Abenteurer stetig durch das Dickicht schlägt. Das verfluchte Land mag ihnen bekannt sein, aber was ist hier schon unmöglich? Tauche ein in eine Geschichte in Cruoria, die neben der gefährlichen Umgebung einige Überraschungen bereithält und selbst erfahrene Charaktere an ihre Grenzen zwingen wird.</p>
                <p><b>Typ: </b>Alleinstehende Kampagne, Botenkampagne</p>
                <p><b>Schwierigkeit: </b>Kompetent</p>
                <p><b>Spielort/e: </b>Cruoria</p>
                <p><b>Klasse: </b>Nutzlose/Hilfreiche</p>
                <p><b>Spielerzahl: </b>2-6</p>
                <p><b>Länge: </b>11 Abenteuer</p>
                <p><b>Charakterstufe: </b>Kompetent(+200 FP)</p>
                <p><b>Kampf: 3</b>/4</p>
                <p><b>Überleben: 4</b>/4</p>
                <p><b>Politisch: 1</b>/4</p>
                <p><b>Sozial: 2</b>/4</p>
                <p><b>Wissenschaftlich: 2</b>/4</p>
                <p><b>Magia: 3</b>/4</p>
            </section>
            <section class="productDesc" id="maskenspiel">
                <h3>Maskenspiel</h3>
                <p>Dunkle Wellen zieren die Strände Concilias. Doch die Wogen sind an diesem Abend anders. Tretet ein in die Meere, denn sie erwarten euch bereits. 
                    Zwischen Kulten und Politik müsst ihr euch durch diese Kampagne kämpfen, die einen besonderen Fokus auf das wunderschöne Meer legt.
                </p>
                <p><b>Typ: </b>Kampagne</p>
                <p><b>Schwierigkeit: </b>Anfänger</p>
                <p><b>Spielort/e: </b>Concilia</p>
                <p><b>Klasse: </b> Nutzlose, Hilfreiche nach Absprache</p>
                <p><b>Spielerzahl: </b>2-6</p>
                <p><b>Kampf: 4</b>/4</p>
                <p><b>Überleben: 3</b>/4</p>
                <p><b>Politisch: 2</b>/4</p>
                <p><b>Sozial: 3</b>/4</p>
                <p><b>Wissenschaftlich: 3</b>/4</p>
                <p><b>Magia: 4</b>/4</p>
            </section>
            <section class="productDesc" id="banner">
                <h3>Unter dem Banner des Chamen</h3>
                <p>Die Rebellion des Chamen He’Chaw’Kre kann immer wieder Siege auf dem Schlachtfeld einfordern. Selbst in der Hauptstadt ist ihr Einfluss spürbar. Aber wie sollte dies die einfachen Studenten der Universität der Hohen Künste zu Feren beeinflussen? Taucht ein in das rebellierende Reich voller Kulte und Intrigen. Doch werdet ihr euch schlussendlich unter dem Banner des Chamen vereinen, oder gegen den größten Rebellen der modernen Geschichte eine Rebellion anzetteln?</p>
                <p><b>Typ: </b>Kampagne</p>
                <p><b>Schwierigkeit: </b>Erfahren</p>
                <p><b>Spielort/e: </b>Ferenreich: Feren, Fluven’Ki</p>
                <p><b>Klasse: </b>Hilfreiche/Nutzlose</p>
                <p><b>Spielerzahl: </b>2-6</p>
                <p><b>Kampf: 4</b>/4</p>
                <p><b>Überleben: 3</b>/4</p>
                <p><b>Politisch: 3</b>/4</p>
                <p><b>Sozial: 2</b>/4</p>
                <p><b>Wissenschaftlich: 2</b>/4</p>
                <p><b>Magia: 2</b>/4</p>
            </section>
        </main>
        <?php include "assets/php/footer.php"; ?>
    </body>
</html>