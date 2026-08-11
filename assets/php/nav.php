
<?php 
//Displays main Navbar. Needs input of current page that should be displayed as selected.
//If no input is given, defaults to no selection.
function nav($selected = 'none') {
    echo '
        <nav>
            <ul>
                <a href="index"><li class="navTitle victorian-text">Project Steam</li></a>
                <ul class="navContainer de">';

switch($selected) {
    case 'home':
        echo '
                <a href="index"><li class="selected">Startseite</li></a>
                    <a href="downloads"><li>Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li>Würfelapp</li></a>
                    <a href="item_picker"><li>ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li>Impressum</li></a>
                </ul>
                <ul class="navContainer en">
                    <a href="index"><li class="selected">Home</li></a>
                    <a href="downloads"><li>Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li>Dice Roller</li></a>
                    <a href="item_picker"><li>ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li>Contact</li></a>
                </ul>';
    break;
    case 'downloads':
        echo '
                <a href="index"><li>Startseite</li></a>
                    <a href="downloads"><li class="selected">Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li>Würfelapp</li></a>
                    <a href="item_picker"><li>ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li>Impressum</li></a>
                </ul>
                <ul class="navContainer en">
                    <a href="index"><li>Home</li></a>
                    <a href="downloads"><li class="selected">Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li>Dice Roller</li></a>
                    <a href="item_picker"><li>ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li>Contact</li></a>
                </ul>';
    break;
    case 'dice_roller':
        echo '
                <a href="index"><li>Startseite</li></a>
                    <a href="downloads"><li>Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li class="selected">Würfelapp</li></a>
                    <a href="item_picker"><li>ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li>Impressum</li></a>
                </ul>
                <ul class="navContainer en">
                    <a href="index"><li>Home</li></a>
                    <a href="downloads"><li>Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li class="selected">Dice Roller</li></a>
                    <a href="item_picker"><li>ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li>Contact</li></a>
                </ul>';
    break;
    case 'item_picker':
        echo '
                <a href="index"><li>Startseite</li></a>
                    <a href="downloads"><li>Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li>Würfelapp</li></a>
                    <a href="item_picker"><li class="selected">ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li>Impressum</li></a>
                </ul>
                <ul class="navContainer en">
                    <a href="index"><li>Home</li></a>
                    <a href="downloads"><li>Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li>Dice Roller</li></a>
                    <a href="item_picker"><li class="selected">ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li>Contact</li></a>
                </ul>';
    break;
    case 'imprint':
        echo '
                <a href="index"><li>Startseite</li></a>
                    <a href="downloads"><li>Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li>Würfelapp</li></a>
                    <a href="item_picker"><li>ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li class="selected">Impressum</li></a>
                </ul>
                <ul class="navContainer en">
                    <a href="index"><li>Home</li></a>
                    <a href="downloads"><li>Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li>Dice Roller</li></a>
                    <a href="item_picker"><li>ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li class="selected">Contact</li></a>
                </ul>';
    break;
    default: 
        echo '
                <a href="index"><li>Startseite</li></a>
                    <a href="downloads"><li>Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li>Würfelapp</li></a>
                    <a href="item_picker"><li>ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li>Impressum</li></a>
                </ul>
                <ul class="navContainer en">
                    <a href="index"><li>Home</li></a>
                    <a href="downloads"><li>Downloads</li></a>
                    <!--<a href="about"><li>Über Project Steam</li></a>-->
                    <a href="dice_roller"><li>Dice Roller</li></a>
                    <a href="item_picker"><li>ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="imprint"><li>Contact</li></a>
                </ul>';
    break;
}

    echo '
                <form method="post" id="modeChange">
                    <input type="hidden" name="lightMode" value="1">
                    <button type="submit">&#9728;</button>
                </form>
                <form method="post">
                    <button type="submit" class="de" name="lang" value="en">EN</button>
                    <button type="submit"class="en" name="lang" value="de">DE</button>
                </form>
                <button id="hamburger" class="hamburger hamburger--squeeze" onClick="changeNav();" aria-label="Navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </ul>
        </nav>';
}
?>