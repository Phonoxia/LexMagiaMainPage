function newChar() {
    charBasicsP1();
}

function charBasicsP1(warning) {
    //Emtpy Footer/Set new Footer
    document.getElementById("footerContainer")
        .innerHTML = ``;
    
    //Check for a warning that was sent and if one was sent, show it to the user
    if(warning) {
        document.getElementById("mainContainer").innerHTML = `<div class='warning'>` + warning + `</div>`;
    }else {
        document.getElementById("mainContainer")
        .innerHTML = ``;
    }
    
    //Inject main html into the Container
    document.getElementById("mainContainer")
        .innerHTML +=
            `<h3>Grundlagen</h3>
            <label for='charName'>Name: </label>
            <input type='text' id='charName' name='charName' autocomplete='off' autofocus required placeholder='Name deines Charakters'> <br> <hr>
            <label for='charGender'>Geschlechtsidentität: </label>
            <input type='text' id='charGender' name='charGender' autocomplete='off' required placeholder='Geschlechtsidentität deines Charakters'>
            <h4>Sonderregeln</h4>
            <label for='abilityTreesOnBox'>Eigenschaftsbäume(Noch nicht implementiert): </label>
            <input type='checkbox' id='abilityTreesOnBox' name='abilityTreesOnBox'><br>
            <button onclick='charOriginP2()'>
                Weiter
            </button>`;

    //Highlight the boxes concerned by the warning, if there was one
    if(warning) {
        document.getElementById("charName").style.borderColor = "red";
        document.getElementById("charGender").style.borderColor = "red";
    }
}

function charOriginP2(warning) {
    //Check if there are already values assigned to the variables, which would indicate that the page is displayed for the second time and values can't be loaded from the UI
    if(globalThis.charNameVar == `` || globalThis.charGenderVar == ``) {
        //Check if all fields have been filled out. If they have, set the variables. If not, return to the previous page and push a warning
        if(document.getElementById('charName').value == `` && document.getElementById('charGender').value == ``) {
            charBasicsP1("Bitte fülle alle erforderlichen Felder aus.");
            return;
        }else {
            var charNameVar;
            var charGenderVar;
            globalThis.charNameVar === document.getElementById('charName').value;
            globalThis.charGenderVar = document.getElementById('charGender').value;
        }
    }
        

    //Check for a warning that was sent and if one was sent, show it to the user
    if(warning) {
        document.getElementById("mainContainer").innerHTML = `<div class='warning'>` + warning + `</div>`;
    }else {
        document.getElementById("mainContainer")
        .innerHTML = ``;
    }

    //Main HTML
    document.getElementById("mainContainer")
        .innerHTML +=
            `<h3>Hintergrund, Spezies, Etnie und Kultur</h3>
            <div id='charBackgroundContainer'>
                <label for='charBackground'>Hintergrund: </label>` +
                returnSelect(`charBackground`) +
                `
                 <br>
                <div id='charBackgroundDescrContainer'>

                </div>
                <hr>
                <label for='charSpecies'>Spezies: </label>`+
                returnSelect(`charSpecies`) +
                `
                 <br>
                <div id='charSpeciesDescrContainer'>

                </div>
            </div>
            <hr>
            <button onclick='charJobP3()'>
                Weiter
            </button>`;
    
    //Highlight the boxes concerned by the warning, if there was one
    if(warning) {
        document.getElementById("charBackground").style.borderColor = "red";
        document.getElementById("charSpecies").style.borderColor = "red";
    }
}

function showBackgroundDescription(background) {
    var charBackgroundDescription = ``;
    switch (background) {
        case "ausgestossen":
            charBackgroundDescription = `
            Beschreibung: Dein Charakter wurde von seiner Gemeinschaft, seinen Eltern oder seiner Herrin ausgestoßen und lebt seitdem auf der Flucht. 
            Er mag zwar in einem fernen Land sein und für immer in Sicherheit, aber er wird seine Erlebnisse nie vergessen.<br>
            Regeln: Dein Charakter kann nur Berufe der Hilfreichen, Nutzlosen oder Außerständischen wählen(Andere Klassen benötigen eine Begründung, wie er diesen Status erreichen konnte). 
            Er besitzt außerdem das Merkmal <i>Angst(Entdeckung)</i> oder <i>Auffällig(Narben, Verletzungen o.ä.)</i>. Dafür erhält er am Ende der Charaktererstellung 2 Punkte auf das Talent <i>Überleben</i> oder <i>Wahrnehmung</i>.
            `;
            break;

        case "fluechtiger":
            charBackgroundDescription = `
            Beschreibung: Du hast jemanden, vielleicht den Staat, vielleicht aber auch eine mächtige Vereinigung, mit deinen Aktionen so verärgert, dass sie bis heute nach dir schicken.<br>
            Regeln: Von Zeit zu Zeit werden Söldner oder Kopfgeldjäger auf dich ausgesetzt. 
            Vielleicht sind es Wächter, vielleicht Schatten. Der Meister würfelt zu beginn jedes Abenteuers verdeckt einen W20. 
            Ist das Ergebnis >15 wird in diesem Abenteuer jemand auftreten, der deine Spur aufgenommen hat und nur deinen Tod will.
            `;
            break;

        case "gossensch":
            charBackgroundDescription = `
            Beschreibung: Als du noch sehr jung warst, wurdest du verlassen. 
            Du kennst deine Verwandten oder die Umstände unter denen sie dich aussetzten nicht, vielleicht hast du nur dumpfe Gesichtszüge deiner Eltern im Gedächtnis. 
            Doch ihre Handlungen führten dazu, dass du von den Nutzlosen aufgezogen wurdest.<br>
            Regeln: Du besitzt das Merkmal <i>Hass(Eltern, Personen die du verantwortlich machst)</i> und das Merkmal <i>Furchtlos</i>. 
            Du erhältst am Ende der Charaktererstellung außerdem je 2 Punkte auf die Talente <i>Überleben</i> und <i>Wahrnehmung</i>. 
            Du erhältst außerdem direkt einen Punkt auf ein Kampftalent deiner Wahl(Außer <i>Schnellfeuerwaffen</i>).
            `;
            break;

        case "rotblut":
            charBackgroundDescription = `
            Beschreibung: Du warst einst der Schößling einer adligen Familie, die dir alles gegeben hat, was du dir wünschen könntest. Du warst ein Leben im Überfluss gewohnt. 
            Doch irgendwann, sei es durch ein Unglück, das Wirken äußerer Personen oder gar deine eigene Hand, verstarben deine engsten Verwandten und du musstest deinen eigenen Weg durch Gehenna finden, ohne jemals auch nur einen Verlust erlebt zu haben.<br>
            Regeln: Nach deiner Wahl erhältst du eines der folgenden Merkmale: <i>Abhängig(Jegliches Mittel)</i>[Du gingst mit dem Verlust äußerst schlecht um], <i>Anhänger(Kulte der Reichen oder Hilfreichen)</i>[Du suchtest Hilfe in einer Vereinigung], 
            <i>Anpassungsfähig</i>[Du lerntest, alles an dir zu verändern] oder <i>Hass(Person(en) die dur für den Tod deiner Verwandten verantwortlich machst)</i>.
            `;
            break;

    }
    document.getElementById("charBackgroundDescrContainer").innerHTML = charBackgroundDescription;
}

function showSpeciesDescription(species) {
    var charSpeciesDescription = ``;
    switch (species) {
        case "mensch":
            charSpeciesDescription = `
            Beschreibung: Die Menschen sind eine der wichtigsten Spezies in Gehenna und sind in unzählige Kulturen und Zivilisationen aufgeteilt. 
            Sie scheinen einige Unterschiede zu den anderen humanoiden Spezies zu haben, auch wenn sie das als Überlegenheit ansehen.<br>
            FP am Start: 150 FP<br>
            Attribute: Alle auf 1, +1 auf 1 weiteres Attribut<br>
            Kulturen: <br>
            Maximale Attribute: Kein Attribut höher als 3 bei der Charaktererschaffung, kein Attribut höher als 6<br>
            Typische Merkmale: -<br>
            Untypische Merkmale: -<br>
            `;
            break;

        case "alb":
            charSpeciesDescription = `
            Beschreibung: Die Aschgrauen, humanoiden Alben wirken von ihrer Silhouette her wie Menschen, sind jedoch im Vergleich zu ihnen überaus resistent, besonders gegenüber Hitze. 
            Sie besitzen meist weißes Haar und wirken auf viele Menschen fast gespenstisch, sind aufgrund ihrer sehr humanoiden Erscheinung jedoch einigermaßen beliebt bei den Menschen. 
            Trotzdem leben die meisten Alben in Nema, während sie auf den anderen Kontinenten fast gar nicht zu finden sind.<br>
            FP am Start: 150<br>
            Attribute: Alle auf 1, KO auf 2<br>
            Kulturen: Nethaner Neuweltler, Sacianer Altweltler<br>
            Maximale Attribute: Bei der Charaktererschaffung kein Attribut außer Konstitution höher als 3, Konstitution nicht höher als 5; Im Spiel kein Attribut höher als 6 außer Konstitution, das nicht höher als 8.<br>
            Erzwungene Merkmale: <i>Hitzeresistenz</i><br>
            Typische Merkmale: -<br>
            Untypische Merkmale: <i>Nachtblind</i><br>
            `;
            break;

        case "egreden":
            charSpeciesDescription = `
            Beschreibung: Die Egreden scheinen selbst den begabtesten Academicus bis heute ein Rätsel. 
            Sie haben meistens eigene, scheinbar außerweltliche Ziele im Kopf, und kommunizieren häufiger mit der Anderswelt, in die sie scheinbar gehören und in der sie deutlich häufiger vorkommen. 
            Wenige verweilen auf Gehenna und keine von ihnen scheinen in die Anderswelt zurück zu können. 
            Sie sehen zwar humanoid aus, haben jedoch einen nicht klar definierbaren glanz an sich, der ihr sonst menschliches aussehen etwas stört, den meisten jedoch aufgrund ihrer unglaublichen Schönheit gar nicht erst bemerken.
            Wenn du einen Egreden spielen willst solltest du dich überaus ausführlich mit ihrem Hintergrund befassen, also sei gewarnt.<br>
            FP am Start: 130 FP<br>
            Attribute: Alle auf 1, Charisma auf 3, zwei weitere Attribute +1<br>
            Subspezies:Andersweltliche, Dieserweltliche, Magum<br>
            Maximale Attribute: Bei der Charaktererschaffung Charisma nicht höher als 5, der Rest nicht höher als 3. Im Spiel Charisma nicht höher als 8, den Rest nicht höher als 6.<br>
            Typische Merkmale: <i>Hübsch</i><br>
            Untypische Merkmale: <i>Hässlich</i>
            `;
            break;

        case "nanen":
            charSpeciesDescription = `
            Beschreibung: Die kleinen, aber sonst humanoiden Nanen sind nicht nur für ihre hohe Kunst der Mechanik bekannt, sondern auch für ihre Entdeckung von Magia, die inzwischen jedoch zu einer Verurteilung innerhalb vieler Praesulanischer Länder geführt hat. 
            So haben viele Nanen heutzutage nichts mehr mit Magie zu tun, aber werden trotzdem für ihre angebliche Nutzung häufig beschuldigt und müssen so meistens als Sündenbock herhalten.
            Abgesehen von dieser Verbindung genießen die Nanen jedoch einen recht hohen Stand in der Gesellschaft von Praesula, weshalb sie eine gut spielbare Spezies abgeben. 
            Sie sehen Menschen sehr ähnlich, sind jedoch unnatürlich klein und messen selten über 140 cm. Sie haben ebenfalls einen sehr gering ausgeprägten Geschlechtsdimorphismus. 
            So tragen fast alle Nanen Bärte und die meisten körperlichen Eigenschaften sind nicht geschlechtsabhängig. Die meisten Nanen leben daher geschlechtsunspezifisch, viele benutzen neutrale Pronomen oder ein generisches Maskulinum(Praesulanisch) oder femininum(Akademisch).<br>
            FP am Start: 150<br>
            Attribute: Alle Attribute bis auf GE und RE auf 1, GE und RE auf 2<br>
            Kulturen: Adorianer, Concilianer, Feren, Nethaner, Scindianer, Alle Menschlichen(Außer mit Ländern assoziierte, die bereits mit Kulturen der Puella verbunden sind).<br>
            Maximale Attribute: Alle Attribute außer Geschicklichkeit und Reflexe während der Charaktererschaffung nicht höher als 3, GE und RE bei der Charaktererschaffung nicht höher als 4; Alle Attribute im Spiel nicht höher als 7<br>
            Typische Merkmale: -<br>
            Untypische Merkmale: <i>Magische Begabung</i><br>
            `;
            break;
        
        case "puella":
            charSpeciesDescription = `
            Beschreibung: Die Puella haben eine durchaus unschöne geschichte, die von den frühen Anfängen der Sklaverei gezeichnet ist, die mit der Entdeckung ihrer Heimatstätten einherging. 
            Auch wenn genug Historiker der Meinung sind, das die Puella einfach zur falschen Zeit am falschen Ort waren, ist das Aussehen und die Magieverbundenheit der Puella sicherlich ein unterstützender Faktor.
            Puella sind meist äußerst Naturverbunden und haben häufig Probleme, in den modernen Städten zu leben. Dazu werden sie häufig angegriffen und können sich nur äußerst selten Respekt innerhalb der Praesulanischen Gesellschaft erarbeiten. 
            Auf Nema sind sie jedoch auch in eigenen Stadtteilen zu finden, die sich meist aufgrund ihrer Natürlichkeit abheben.
            Eine Puella zu spielen hat durchaus einige Vorteile, kommt jedoch mit vielen Vorurteilen, die das Leben eines Charakters durchaus schwer machen können. 
            Solltest du ein Anfänger sein, ist eine Puella zwar sicherlich überaus interessant, kann jedoch auch recht schwer zu spielen sein.<br>
            FP am Start: 160<br>
            Attribute: Alle attribute auf 1, zwei geistige Attribute +1, Reflexe oder Geschicklichkeit +2<br>
            Kulturen: Adorianer, Concilianer, Periclitianer, Eleutherianer, Nethaner, Scindianer, Alle Menschlichen(Außer mit Ländern assoziierte, die bereits mit Kulturen der Puella verbunden sind).<br>
            Maximale Attribute: Alle Attribute bei der Charaktererstellung nicht höher als 3, im Spiel nicht höher als 6<br>
            Erzwungene Merkmale: <i>Naturgebunden</i>
            Typische Merkmale: <i>Angst</i>(Menschen, Versklavung), <i>Hübsch</i>, <i>Magische Begabung</i>
            Untypische Merkmale: <i>Furchtlos</i>, <i>Hässlich</i>
            `;
            break;

        case "tierkinder":
            charSpeciesDescription = `
            Beschreibung: Die Kinder der Tellus, wie sie sich selbst nennen, sind meist recht humanoid erscheinende Wesen, welche jedoch eine sehr sichtbare tierische Komponente haben. 
            Über ihre entstehung ist nicht viel bekannt, wobei sie selbst behaupten, dass sie der Erde entsprungen sein, denken viele Praesulanische Menschen, sie seien aus einer magischen Verbindung von Mensch und Tier hervorgegangen. 
            Trotz vieler Vorurteile genießen sie jedoch auf auf Praesula meist relativ hohe stellen, wenn sie auch nicht sonderlich zahlreich sind.<br>
            FP am Start: 140 FP<br>
            Attribute: Alle auf 1, weitere Änderungen in den Subspezies<br>
            Subspezies: Rabenkinder, Anguiskinder, Vulpen<br>
            Kulturen: Alle menschlichen<br>
            Maximale Attribute: 2 Attribute nicht höher als 4, der Rest nicht höher als 3; 2 Attribute nicht höher als 7, der Rest nicht höher als 6<br>
            Typische Merkmale: <i>Magische Begabung</i><br>
            Untypische Merkmale: -
            `;
            break;

        case "traferen":
            charSpeciesDescription = `
            Beschreibung: Niemand kennt die echte Form der Traferen mit Sicherheit, da die Gestaltwandler nicht nur ständig ihre Erscheinung wechseln, sondern auch als äußerst verlogen gelten und somit ihnen kein Academicus so richtig vertraut. 
            Sie sind jedoch keine perfekten Gestaltwandler und so kann ihre Identität immer klar an zwei Hörnern bestätigt werden, die bei einer jeden Verwandlung auf dem Kopf(sofern keiner vorhanden ist beim höchsten Punkt der natürlichen Orientierung) wachsen.
            Einen Traferen zu spielen braucht meist viel Rücksprache mit dem Meister, weshalb es empfohlen ist, die Wahl dieser Spezies genauestens abzusprechen.<br>
            FP am Start: 110 FP<br>
            Attribute: Alle auf 1, je nach beliebtester Gestalt entsprechende Werte(z.B. bei Menschen ein Attribut +1)<br>
            Kulturen: <br>
            Maximale Attribute: Am Start alle Attribute nicht höher als 3; Im spiel alle Atribute nicht höher als 6<br>
            Erzwungene Merkmale: <i>Gestaltwandler</i><br>
            Typische Merkmale: <i>Magische Begabung</i><br>
            Untypische Merkmale: -
            `;
            break;

    }
    document.getElementById("charSpeciesDescrContainer").innerHTML = charSpeciesDescription;
}

// Returns a finished select, showing only useful/current/possible options
function returnSelect(idCode) {
    var finalState;
    //Main switch, selecting output via idCode
    switch(idCode) {
        case `charBackground`:
            finalState = `<select name="charBackground" id="charBackground" onchange='showBackgroundDescription(this.value)'>
                <option selected disabled value='pleaseSelect'>Bitte wähle eine Option aus</option>
                <option value="ausgestossen">Ausgestoßen</option>
                <option value="fluechtiger">Flüchtiger</option>
                <option value="gossensch">Gossenschößling</option>
                <option value="rotblut">Rotblütig</option>
            </select>`;
            break;
        case `charSpecies`:
            finalState = `<select name="charSpecies" id="charSpecies" onchange='showSpeciesDescription(this.value)'>
                <option selected disabled value='pleaseSelect'>Bitte wähle eine Option aus</option>
                <option value="mensch">Mensch</option>
                <option value="alb">Alb</option>
                <option value="egreden">Egreden</option>
                <option value="nanen">Nanen</option>
                <option value="puella">Puella</option>
                <option value="tierkinder">Tierkinder</option>
                <option value="traferen">Traferen</option>
            </select>`;
            break;
    }
        
    return finalState;
}

function charJobP3(warning) {
    console.log(document.getElementById('charBackground').value);
    //Check if all fields have been filled out. If they have, set the variables. If not, return to the previous page and push a warning
    if(document.getElementById('charBackground').value == `pleaseSelect` || document.getElementById('charSpecies').value == `pleaseSelect`) {
        charOriginP2("Bitte fülle alle erforderlichen Felder aus.");
        return;
    }else {
        var charBackgroundVar = document.getElementById('charBackground').value;
        var charSpeciesVar = document.getElementById('charSpecies').value;
    }

    //Check for a warning that was sent and if one was sent, show it to the user
    if(warning) {
        document.getElementById("mainContainer").innerHTML = `<div class='warning'>` + warning + `</div>`;
    }else {
        document.getElementById("mainContainer")
        .innerHTML = ``;
    }

    //Main HTML
    document.getElementById("mainContainer")
        .innerHTML += 
            `<h3>Beruf</h3>`;

    /*if(warning) {
        document.getElementById("charBackground").style.borderColor = "red";
        document.getElementById("charSpecies").style.borderColor = "red";
    }*/
}