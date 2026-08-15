<?php 
// Initializes all Variables from POST; sets defaults. All pages supporting lightMode or languages require this.
if(isset($_POST['lang'])) {
    $_SESSION['lang'] = $_POST['lang'];
}
if(!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "de";
}
if(isset($_POST['lightMode'])) {
    $_SESSION['lightMode'] = !$_SESSION['lightMode'];
}

echo "<!DOCTYPE html>
<html lang=".$_SESSION['lang'].">";

// Add critical CSS to inline.
// Needs a page to work, displays ".no-inline{} otherwise.
// Outputs .no-css{} on error.
function addInlineCSS($page = 'none') {
    //Get main css file that needs to be placed inline
    $cssRaw = file_get_contents(__DIR__ . "/../css/style.css", true);
    //Convert the raw string into an array, where the key is the #region and the value is the CSS of that section.
    $cssArr = explode("/*#region ", $cssRaw);
    foreach($cssArr as $value) {
        $value = str_replace("/*#endregion","",$value);
        $pairArr = explode("*/", $value);
        $pairArr[0] && $css[$pairArr[0]] = $pairArr[1];
    }
    if(!isset($css)) {
        echo ".no-css{}";
        return;
    }
    //Output inline CSS.
    echo $css['Init'].$css['General'].$css['Navbar'];
    switch($page) {
        case 'home':
            echo $css['Header'].$css['Main'].$css['Footer'];
        break;
        case 'downloads':
            echo $css['Main'].$css['Products'].$css['Footer'];
        break;
        case 'imprint':
            echo $css['Main'].$css['Imprint'].$css['Footer'];
        break;
        case 'item_picker':
            echo $css['Main'];
        break;
        case 'dice_roller':
            echo $css['Main'];
        break;
        case 'campaigns':
            echo $css['Main'].$css['Products'].$css['Footer'];
        break;
        default:
            echo ".no-inline{}";
        break;
    }
}

// Outputs LightMode CSS. This is only General lightMode CSS, should take the $_SESSION['lightMode'] as arg
// For site-specific CSS, see Special LightMode CSS
function lightMode($lightMode = false) {
    if($lightMode) {
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
}
// Outputs Language switching CSS
// Does NOT include inline translations, see translate();
function language($lang = 'de') {
    if($lang == "en") {
        echo "
    .de {
        display: none;
    }";
    }else if($lang == "de") {
        echo "
    .en {
        display: none;
    }";
    }
}


//Translates specific inline phrases. All Inputs should be the German translation, which is outputted as default if lang is set to de.
function translate($string = 'Error: No Translation found', $lang = 'de') {
    if($lang == 'de') {
        echo $string;
        return;
    }
    switch($string) {
        case 'Datenschutzerklärung':
            if($lang == 'en') {
                echo "Privacy Policy(currently only available in German)";
            }
        break;
        case 'Haftungsausschluss und Urheberrechtshinweis':
            if($lang == 'en') {
                echo "Disclaimer and Copyright Notice(currently only available in German)";
            }
        break;
        case 'Generieren':
            if($lang == 'en') {
                echo "Generate";
            }
        break;
        case 'Extrawürfel würfeln':
            if($lang == 'en') {
                echo "Roll additional bonus dice";
            }
        break;
        case 'Würfeln':
            if($lang == 'en') {
                echo "Roll";
            }
        break;
        case 'Keine Sammelprobe Gewürfelt':
            if($lang == 'en') {
                echo "Nothing rolled";
            }
        break;
        case 'Sammelprobe Würfeln':
            if($lang == 'en') {
                echo "Roll collection rolls";
            }
        break;
        case 'Sammelproben':
            if($lang == 'en') {
                echo "Collection rolls";
            }
        break;
        case 'Erweiterte Regeln':
            if($lang == 'en') {
                echo "Advanced Rules";
            }
        break;
        case 'Zurücksetzen':
            if($lang == 'en') {
                echo "Reset";
            }
        break;
        default:
            echo $string;
        break;
    }
}

// <-- Special LightMode CSS -->
//All Sites requiring special CSS for Lightmode are added here.

//LightMode Buttons for item_picker and dice_roller
function lightModeButtons($lightMode = false) {
    if($lightMode) {
        echo "
Button:hover {
    background-color: rgb(230, 230, 230);
}";
    }
}

?>