<?php
session_start();
include 'assets/php/nav.php';
include 'assets/php/functions.php';
$page = 'item_picker';
?>
<html>
    <head>
        <?php include 'assets/php/head.php' ?>
        <title>Item Picker</title>
        <link rel="stylesheet" href="assets/css/dice_roller-item_picker.css">
        <script type="text/javascript" src="assets/js/itemPicker.js"></script>
        <style>
<?php 
        lightMode($_SESSION['lightMode']);
        language($_SESSION['lang']);
        lightModeButtons($_SESSION['lightMode']);
        addInlineCSS($page);
?>
        </style>
    </head>
    <body>
        <?php nav($page); ?>
        <main class="mainContainer">
            <h1 class="de">Project Steam - Objektgenerator</h1>
            <h1 class="en">Project Steam - Object Generator</h1>
            <h2>V0.1.1</h2>
            <p class="en" style="text-align: center;">The Objects and Rules are only available in German during the Pre-Alpha and Alpha phases. If you want to, you may still generate them in German.</p>
            <div class="prefs counters">
                <div class="preference">
                    <p class="label de">Beschreibungen hinzufügen?</p>
                    <p class="label en">Add Descriptions?</p>
                    <input type="checkbox" id="descriptionCheckbox">
                </div>
                <div class="preference">
                    <p class="label de">Anzahl an Gegenständen?</p>
                    <p class="label en">Amout of generated Objects</p>
                    <input type="number" id="countCounter">
                </div>
            </div>
            <button onclick="onClick()" id="rollButton"><?php translate('Generieren', $_SESSION['lang'])?></button>
            <div id="objectTextResultContainer">

            </div>
        </main>
    </body>
</html>