
<?php 
//Displays main Navbar. Needs input of current page that should be displayed as selected.
//If no input is given, defaults to no selection.
function nav($selected = 'none') {
    echo '
        <nav>
            <ul>
                <a href="/index"><li class="navTitle victorian-text">Project Steam</li></a>
                <ul class="navContainer de">
                <a href="/index"><li'.isSelected($selected, 'home').'>Startseite</li></a>
                    <a href="/downloads"><li'.isSelected($selected, 'downloads').'>Downloads</li></a>
                    <!--<a href="/about"><li'.isSelected($selected, 'about').'>Über Project Steam</li></a>-->
                    <a href="/dice_roller"><li'.isSelected($selected, 'dice_roller').'>Würfelapp</li></a>
                    <a href="/item_picker"><li'.isSelected($selected, 'item_picker').'>ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="/imprint"><li'.isSelected($selected, 'imprint').'>Impressum</li></a>
                </ul>
                <ul class="navContainer en">
                    <a href="/index"><li'.isSelected($selected, 'home').'>Home</li></a>
                    <a href="/downloads"><li'.isSelected($selected, 'downloads').'>Downloads</li></a>
                    <!--<a href="/about"><li'.isSelected($selected, 'about').'>Über Project Steam</li></a>-->
                    <a href="/dice_roller"><li'.isSelected($selected, 'dice_roller').'>Dice Roller</li></a>
                    <a href="/item_picker"><li'.isSelected($selected, 'item_picker').'>ObjektGen</li></a>
                    <a href="https://wiki.bollmann-hb.de" target="_blank"><li>Wiki</li></a>
                    <a href="/imprint"><li'.isSelected($selected, 'imprint').'>Contact</li></a>
                </ul>
                <form method="post" id="modeChange">
                    <input type="hidden" name="lightMode" value="1">
                    <button type="submit">&#9728;</button>
                </form>
                <form method="post">
                    <button type="submit" class="de" name="lang" value="en">EN</button>
                    <button type="submit" class="en" name="lang" value="de">DE</button>
                </form>
                <button id="hamburger" class="hamburger hamburger--squeeze" onClick="changeNav();" aria-label="Navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </ul>
        </nav>';
}
function isSelected($selected, $current) {
    if($selected == $current) {
        return ' class="selected"';
    }
}
?>
