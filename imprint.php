<?php
session_start();
include 'assets/php/nav.php';
include 'assets/php/functions.php';
$page = 'imprint';
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <?php include 'assets/php/head.php' ?>
        <title>Impressum</title>
        <script src="assets/js/imprint.js" defer></script>
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
                <h2 class="de">Impressum</h2>
                <h2 class="en">Contact</h2>
                <h3 class="de">Websiteinhaber</h3>
                <p>Maeve Bollmann</p>
                <p>Anna-Lühring-Straße 35</p>
                <p>28205 Bremen</p>
                <p><a href="mailto:maeve@bollmann-hb.de">maeve@bollmann-hb.de</a></p>
                <p>Tel.: 0421 4992183</p>
                <h3 class="de">Rechtliches</h3>
                <h3 class="en">Legal Notice</h3>
                <p class="de">Verantwortliche für die redaktionellen Beiträge im Sinne des § 5 TMG bzw. § 18 Abs. 2 MStV:<br>Maeve Bollmann<br>Anna-Lühring-Str. 35<br>28205 Bremen</p>
                <p class="en">Responsible for articles and contents according to § 5 TMG or  § 18 Abs. 2 MStV:<br>Maeve Bollmann<br>Anna-Lühring-Str. 35<br>28205 Bremen</p>
                <button id="datenschutz" class="wideButton"><?php translate('Datenschutzerklärung', $_SESSION['lang']) ?></button>
                <div id="datenschutzWrapper">
                    <h3>I. Informationen über die Verarbeitung Ihrer Daten gemäß Art. 13 der Datenschutz-Grundverordnung (DS-GVO)</h3>
                    <h4>1. Verantwortlicher und Datenschutzbeauftragter</h4>
                    <p>Verantwortlich für diese Website ist<br>
                    Maeve Bollmann, Anna-Lühring-Str. 35, 28205 Bremen.<br>
                    Den Datenschutzbeauftragten erreichen Sie per E-Mail unter<br>
                    <a href="mailto:maeve@bollmann-hb.de">maeve@bollmann-hb.de</a>.
                    </p>
                    <h4>2. Daten, die für die Bereitstellung der Website und die Erstellung der Protokolldateien verarbeitet werden</h4>
                    <h5>a. Welche Daten werden für welchen Zweck verarbeitet?</h5>
                    <p>Bei jedem Zugriff auf Inhalte der Website werden vorübergehend Daten gespeichert, die möglicherweise eine Identifizierung zulassen. Die folgenden Daten werden hierbei erhoben:</p>
                    <ul>
                        <li>Datum und Uhrzeit des Zugriffs</li>
                        <li>IP-Adresse</li>
                        <li>Besuchte Seite auf unserer Website</li>
                        <li>Meldung, ob der Abruf erfolgreich war</li>
                        <li>Übertragene Datenmenge</li>
                        <li>Informationen über den Browsertyp und die verwendete Version</li>
                        <li>Betriebssystem</li>
                    </ul>
                    <p>Die vorübergehende Speicherung der Daten ist für den Ablauf eines Websitebesuchs erforderlich, um eine Auslieferung der Website zu ermöglichen. 
                    Eine weitere Speicherung in Protokolldateien erfolgt, um die Funktionsfähigkeit der Website und die Sicherheit der informationstechnischen Systeme sicherzustellen. 
                    In diesen Zwecken liegt auch unser berechtigtes Interesse an der Datenverarbeitung.</p>
                    <h5>b. Auf welcher Rechtsgrundlage werden diese Daten verarbeitet?</h5>
                    <p>Die Daten werden auf der Grundlage des Art. 6 Abs. 1 Buchstabe f DS-GVO verarbeitet.</p>
                    <h5>c. Gibt es neben dem Verantwortlichen weitere Empfänger der personenbezogenen Daten?</h5>
                    <p>Die Website wird bei IONOS SE, Elgendorfer Str. 57, 56410 Montabaur, <a href="mailto:info@ionos.de">info@ionos.de</a>, gehostet. Der Hoster empfängt die oben genannten Daten als Auftragsverarbeiter.</p>
                    <h5>d. Wie lange werden die Daten gespeichert?</h5>
                    <p>Die Daten werden gelöscht, sobald sie für die Erreichung des Zwecks ihrer Erhebung nicht mehr erforderlich sind. 
                    Bei der Bereitstellung der Website ist dies der Fall, wenn die jeweilige Sitzung beendet ist. 
                    Die Protokolldateien werden maximal bis zu 24 Stunden direkt und ausschließlich für Administratoren zugänglich aufbewahrt. 
                    Danach sind sie nur noch indirekt über die Rekonstruktion von Sicherungsbändern verfügbar und werden nach maximal 4 Wochen endgültig gelöscht.</p>
                    <h4>3. Betroffenenrechte</h4>
                    <h5>a. Recht auf Auskunft</h5>
                    <p>Sie können Auskunft nach Art. 15 DS-GVO über Ihre personenbezogenen Daten verlangen, die wir verarbeiten.</p>
                    <h5>b. Recht auf Widerspruch:</h5>
                    <p>Sie haben ein Recht auf Widerspruch aus besonderen Gründen (siehe unter Punkt II).</p>
                    <h5>c. Recht auf Berichtigung</h5>
                    <p>Sollten die Sie betreffenden Angaben nicht (mehr) zutreffend sein, können Sie nach Art. 16 DS-GVO eine Berichtigung verlangen. 
                    Sollten Ihre Daten unvollständig sein, können Sie eine Vervollständigung verlangen.</p>
                    <h5>d. Recht auf Löschung</h5>
                    <p>Sie können nach Art. 17 DS-GVO die Löschung Ihrer personenbezogenen Daten verlangen.</p>
                    <h5>e. Recht auf Einschränkung der Verarbeitung</h5>
                    <p>Sie haben nach Art. 18 DS-GVO das Recht, eine Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</p>
                    <h5>f. Recht auf Beschwerde</h5>
                    <p>Wenn Sie der Ansicht sind, dass die Verarbeitung Ihrer personenbezogenen Daten gegen Datenschutzrecht verstößt, haben Sie nach Ar. 77 Abs. 1 DS-GVO das Recht, sich bei einer Datenschutzaufsichtsbehörde eigener Wahl zu beschweren. 
                    Hierzu gehört auch die für den Verantwortlichen zuständige Datenschutzaufsichtsbehörde:<br>
                    Landesbeauftrager für Datenschutz Bremen, <a href="https://www.datenschutz.bremen.de/">https://www.datenschutz.bremen.de/</a></p>
                    <h5>g. Recht auf Datenübertragbarkeit</h5>
                    <p>Für den Fall, dass die Voraussetzungen des Art. 20 Abs. 1 DS-GVO vorliegen, steht Ihnen das Recht zu, sich Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung eines Vertrags automatisiert verarbeiten, an sich oder an Dritte aushändigen zu lassen. 
                    Die Erfassung der Daten zur Bereitstellung der Website und die Speicherung der Protokolldateien sind für den Betrieb der Internetseite zwingend erforderlich. 
                    Sie beruhen daher nicht auf einer Einwilligung nach Art. 6 Abs. 1 Buchstabe a DS-GVO oder auf einem Vertrag nach Art. 6 Abs. 1 Buchstabe b DS-GVO, sondern sind nach Art. 6 Abs. 1 Buchstabe f DS-GVO gerechtfertigt. 
                    Die Voraussetzungen des Art. 20 Abs. 1 DS-GVO sind demnach insoweit nicht erfüllt.</p>
                    <h3>II. Recht auf Widerspruch gemäß Art. 21 Abs. 1 DS-GVO</h3>
                    <p>Sie haben das Recht, aus Gründen, die sich aus Ihrer besonderen Situation ergeben, jederzeit gegen die Verarbeitung Ihrer personenbezogenen Daten, die aufgrund von Artikel 6 Abs. 1 Buchstabe f DS-GVO erfolgt, Widerspruch einzulegen. Der Verantwortliche verarbeitet die personenbezogenen Daten dann nicht mehr, es sei denn, er kann zwingende schutzwürdige Gründe für die Verarbeitung nachweisen, die die Interessen, Rechte und Freiheiten der betroffenen Person überwiegen, oder die Verarbeitung dient der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen. Die Erfassung der Daten zur Bereitstellung der Website und die Speicherung der Protokolldateien sind für den Betrieb der Internetseite zwingend erforderlich.</p>
                </div>
                <button id="haftung" class="wideButton"><?php translate('Haftungsausschluss und Urheberrechtshinweis', $_SESSION['lang']) ?></button>
                <div id="haftungWrapper">
                    <h3>Haftungsausschluss</h3>
                    <p>Die auf dieser Website bereitgestellten Downloads wurden auf Viren überprüft und vom Websiteinhaber erstellt. 
                    Dennoch kann keine Garantie für Virenfreiheit, Funktionalität oder Korrektheit der Daten übernommen werden. 
                    Die Nutzung und der Download der Dateien erfolgen auf eigene Gefahr, der Websiteinhaber übernimmt keine Haftung für Schäden durch diese, die direkt oder Indirekt aus der Nutzung oder dem Herunterladen der Dateien entstehen. 
                    Dies gilt insbesondere für Datenverlust, Systemabstürze oder Hardwareschäden.</p>
                    <h3>Urheberrecht</h3>
                    <p>Alle auf dieser Seite zur Verfügung gestellten Dateien unterliegen dem Deutschen Urheberrecht und sind Eigentum des Websiteinhabers. Die Vervielfältigung, Bearbeitung, Verbreitung und Verwertung der Inhalte bedürfen nach deutschem Urheberrecht der Zustimmung des Websiteinhabers. Downloads und Kopien dieser sind für den privaten Gebrauch gestattet. Eine Wiederveröffentlichung ist ausdrücklich untersagt.</p>
                </div>
            </section>
        </main>
        <?php include "assets/php/footer.php"; ?>
    </body>
</html>