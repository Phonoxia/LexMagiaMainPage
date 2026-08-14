<?php
session_start();
include 'assets/php/nav.php';
include 'assets/php/functions.php';
$page = 'dice_roller';
?>
    <head>
        <?php include 'assets/php/head.php' ?>
        <title>Würfelapp</title>
        <link rel="stylesheet" href="assets/css/dice_roller-item_picker.css">
        <script src="assets/js/dice_roller.js" defer></script>
        <style>
<?php 
        addInlineCSS($page);
        lightMode($_SESSION['lightMode']);
        language($_SESSION['lang']);
        lightModeButtons($_SESSION['lightMode']);
?>
        </style>
    </head>
    <body>
        <?php nav($page); ?>
        <main class="mainContainer">
            <h1 class="de">
                Project Steam - Würfelapp - Early Alpha
            </h1>
            <h1 class="en">
                Project Steam - Dice roller - Early Alpha
            </h1>
            <h2>V 0.3.2</h2>
            <div id="diceResultContainer" class="diceResContainer">

            </div>
            <div id="textResultContainer" class="textResContainer">

            </div>
            <div id="extraDiceAlert" class="extraDiceAlertContainer" style="display: none;">
                <p class="de">Achtung! Du hast ungenutzte Extrawürfel</p>
                <p class="en">Attention! You have unused bonus dice...</p>
            </div>
            <div id="newDieSectionContainer" style="display: none;">
                <p id="newDieCounter"></p>
                <button id="newDieButton"><?php translate('Extrawürfel würfeln', $_SESSION['lang']);?></button>
                
            </div>
            <div class="diceCounters counters">
                <div class="counter">
                    <p class="counterLabel de">Talentwürfel</p>
                    <p class="counterLabel en">Talent dice</p>
                    <button id="counterTwMinus" class="counterButton">-</button>
                    <input type="number" id="twCount" class="count" value="0" min="0">
                    <button id="counterTwPlus" class="counterButton">+</button>
                </div>
                <div class="counter">
                    <p class="counterLabel de">Schwierigkeitswürfel</p>
                    <p class="counterLabel en">Difficulty dice</p>
                    <button id="counterSwMinus" class="counterButton">-</button>
                    <input type="number" id="swCount" class="count" value="0" >
                    <button id="counterSwPlus" class="counterButton">+</button>
                </div>
                <div class="counter">
                    <p class="counterLabel de">Bonuswürfel</p>
                    <p class="counterLabel en">Bonus dice</p>
                    <button id="counterBwMinus" class="counterButton">-</button>
                    <input type="number" id="bwCount" class="count" value="0" min="0">
                    <button id="counterBwPlus" class="counterButton">+</button>
                </div>
                <div class="counter">
                    <p class="counterLabel de">Maluswürfel</p>
                    <p class="counterLabel en">Malum dice</p>
                    <button id="counterMwMinus" class="counterButton">-</button>
                    <input type="number" id="mwCount" class="count" value="0" min="0">
                    <button id="counterMwPlus" class="counterButton">+</button>
                </div>
            </div>
            <div id="saveButtons" class="saveButtons">
                <button type="button" id="resetButton" class="resetButton slButton"><?php translate('Zurücksetzen', $_SESSION['lang']); ?></button>
                <button type="button" class="saveButton slButton" id="twChanger1">Tw4/Sw2</button>
                <button type="button" class="saveButton slButton" id="twChanger2">Tw4/Sw3</button>
                <button type="button" class="saveButton slButton" id="twChanger3">Tw6/Sw3</button>
                <button type="button" class="saveButton slButton" id="save1">Save1</button>
                <button type="button" class="saveButton slButton" id="save2">Save2</button>
                <button type="button" class="saveButton slButton" id="save3">Save3</button>
                <button type="button" class="resetButton slButton" id="clearSave">Clear Saves</button>
            </div>
            <div>
                <button type="button" id="expandedSection" class="sectionButton"><?php translate('Erweiterte Regeln', $_SESSION['lang']); ?></button>
                <div class="expandedSectionContent">
                    <div class="counters">
                        <div class="counter" style="display:none;">
                            <p class="counterLabel de">Automatische Erfolge</p>
                            <p class="counterLabel en">Automatic successes</p>
                            <button id="counterAEMinus" class="counterButton">-</button>
                            <input type="number" id="aeCount" class="count" value="0" min="0">
                            <button id="counterAEPlus" class="counterButton">+</button>
                        </div>
                        <div class="counter" style="display:none;">
                            <p class="counterLabel de">Automatische Fehler</p>
                            <p class="counterLabel en">Automatic failures</p>
                            <button id="counterAFMinus" class="counterButton">-</button>
                            <input type="number" id="afCount" class="count" value="0" min="0">
                            <button id="counterAFPlus" class="counterButton">+</button>
                        </div>
                        <div class="counter">
                            <p class="counterLabel de">6er-Würfel</p>
                            <p class="counterLabel en">D6</p>
                            <button id="counterWSMinus" class="counterButton">-</button>
                            <input type="number" id="wsCount" class="count" value="0" min="0">
                            <button id="counterWSPlus" class="counterButton">+</button>
                        </div>
                        <div class="counter">
                            <p class="counterLabel de">Extrawürfel automatisch würfeln?</p>
                            <p class="counterLabel en">Roll additional dice automatically?</p>
                            <input type="checkbox" id="extraDieAutomatic">
                        </div>
                        <div class="counter">
                            <p class="counterLabel de">Meistermodus?</p>
                            <p class="counterLabel en">DM-Mode?</p>
                            <input type="checkbox" id="meisterModus">
                        </div>
                        <div class="counter de">
                            <p class="counterLabel">Lernmodus?</p>
                            <input type="checkbox" id="lernModus">
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkSectionWrapper">
                <button type="button" id="checkSection" class="sectionButton"><?php translate('Sammelproben', $_SESSION['lang']); ?></button>
                <div class="checkSectionContent">
                    <div class="counters">
                        <div class="counter">
                            <p class="counterLabel de">Probenzahl</p>
                            <p class="counterLabel en">Amount of rolls</p>
                            <button id="counterSpMinus" class="counterButton">-</button>
                            <input type="number" id="spCount" class="count" value="0" min="0">
                            <button id="counterSpPlus" class="counterButton">+</button>
                        </div>
                        <button id="spRoll"><?php translate('Sammelprobe Würfeln', $_SESSION['lang']); ?></button>
                    </div>
                    <p id="spRes"><?php translate('Keine Sammelprobe Gewürfelt', $_SESSION['lang']); ?></p>
                </div>
            </div>
            <button id="rollButton" type="button" value="rollAllButton" onclick="rollAllButton();"><?php translate('Würfeln', $_SESSION['lang']); ?></button>
        </main>
    </body>
</html>