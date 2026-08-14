
<?php 
//Displays main Navbar. Needs input of current page that should be displayed as selected.
//If no input is given, defaults to no selection.
function nav($selected = 'none') {
    echo '
        <nav>
            <div>
                <p class="navTitle victorian-text"><a href="/index">Project Steam</a></p>
                <ul class="navContainer de">
                    <li'.isSelected($selected, 'home').'><a href="/index">Startseite</a></li>
                    <li'.isSelected($selected, 'downloads').'><a href="/downloads">Downloads</a></li>
                    <!--<li'.isSelected($selected, 'about').'><a href="/about">Über Project Steam</a></li>-->
                    <li'.isSelected($selected, 'dice_roller').'><a href="/dice_roller">Würfelapp</a></li>
                    <li'.isSelected($selected, 'item_picker').'><a href="/item_picker">ObjektGen</a></li>
                    <li><a href="https://wiki.bollmann-hb.de" target="_blank">Wiki</a></li>
                    <li'.isSelected($selected, 'imprint').'><a href="/imprint">Impressum</a></li>
                </ul>
                <ul class="navContainer en">
                    <li'.isSelected($selected, 'home').'><a href="/index">Home</a></li>
                    <li'.isSelected($selected, 'downloads').'><a href="/downloads">Downloads</a></li>
                    <!--<li'.isSelected($selected, 'about').'><a href="/about">Über Project Steam</a></li>-->
                    <li'.isSelected($selected, 'dice_roller').'><a href="/dice_roller">Dice Roller</a></li>
                    <li'.isSelected($selected, 'item_picker').'><a href="/item_picker">ObjektGen</a></li>
                    <li><a href="https://wiki.bollmann-hb.de" target="_blank">Wiki</a></li>
                    <li'.isSelected($selected, 'imprint').'><a href="/imprint">Contact</a></li>
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
            </div>
        </nav>';
}
function isSelected($selected, $current) {
    if($selected == $current) {
        return ' class="selected"';
    }
}
?>
