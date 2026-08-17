window.onload = initialize;
var diceNumbers = {
        tw: 0,
        sw: 0,
        bw: 0,
        mw: 0,
        af: 0,
        ae: 0,
        ws: 0
}
var spCount = 0;
var resultsObj;
var errorCode = null;
var save1 = null;
var learningMode = false;
function initialize() {
    document.getElementById("rollButton").addEventListener("click", rollAllButton());
    document.getElementById("spRoll").addEventListener("click", function() {rollMultipleDice()});

    
    document.getElementById("twCount").addEventListener("change", function() {diceNumbers.tw = document.getElementById("twCount").value;});
    document.getElementById("swCount").addEventListener("change", function() {diceNumbers.sw = document.getElementById("swCount").value;});
    document.getElementById("bwCount").addEventListener("change", function() {diceNumbers.bw = document.getElementById("bwCount").value;});
    document.getElementById("mwCount").addEventListener("change", function() {diceNumbers.mw = document.getElementById("mwCount").value;});

    document.getElementById("aeCount").addEventListener("change", function() {diceNumbers.ae = document.getElementById("aeCount").value;});
    document.getElementById("afCount").addEventListener("change", function() {diceNumbers.af = document.getElementById("afCount").value;});
    document.getElementById("wsCount").addEventListener("change", function() {diceNumbers.ws = document.getElementById("wsCount").value;});

    document.getElementById("counterTwMinus").addEventListener("click", function(){if(diceNumbers.tw > 0) {diceNumbers.tw = diceNumbers.tw - 1;} refreshCounters();});
    document.getElementById("counterTwPlus").addEventListener("click", function(){diceNumbers.tw = Number(diceNumbers.tw) + 1; refreshCounters();});

    document.getElementById("counterSwMinus").addEventListener("click", function(){if(diceNumbers.sw > 0) {diceNumbers.sw = diceNumbers.sw - 1;} refreshCounters();});
    document.getElementById("counterSwPlus").addEventListener("click", function(){diceNumbers.sw = Number(diceNumbers.sw) + 1; refreshCounters();});

    document.getElementById("counterBwMinus").addEventListener("click", function(){if(diceNumbers.bw > 0) {diceNumbers.bw = diceNumbers.bw - 1;} refreshCounters();});
    document.getElementById("counterBwPlus").addEventListener("click", function(){diceNumbers.bw = Number(diceNumbers.bw) + 1; refreshCounters();});

    document.getElementById("counterMwMinus").addEventListener("click", function(){if(diceNumbers.mw > 0) {diceNumbers.mw = diceNumbers.mw - 1;} refreshCounters();});
    document.getElementById("counterMwPlus").addEventListener("click", function(){diceNumbers.mw = Number(diceNumbers.mw) + 1; refreshCounters();});


    document.getElementById("counterAEMinus").addEventListener("click", function(){diceNumbers.ae = diceNumbers.ae - 1; refreshCounters();});
    document.getElementById("counterAEPlus").addEventListener("click", function(){diceNumbers.ae = Number(diceNumbers.ae) + 1; refreshCounters();});

    document.getElementById("counterAFMinus").addEventListener("click", function(){diceNumbers.af = diceNumbers.af - 1; refreshCounters();});
    document.getElementById("counterAFPlus").addEventListener("click", function(){diceNumbers.af = Number(diceNumbers.af) + 1; refreshCounters();});

    document.getElementById("counterWSMinus").addEventListener("click", function(){diceNumbers.ws = diceNumbers.ws - 1; refreshCounters();});
    document.getElementById("counterWSPlus").addEventListener("click", function(){diceNumbers.ws = Number(diceNumbers.ws) + 1; refreshCounters();});

    //Sammelprobe Init
    document.getElementById("spCount").addEventListener("change", function() {spCount = document.getElementById("spCount").value;});
    document.getElementById("counterSpMinus").addEventListener("click", function(){if(spCount > 0) {spCount = spCount - 1;} refreshCounters();});
    document.getElementById("counterSpPlus").addEventListener("click", function(){spCount = Number(spCount) + 1; refreshCounters();});
    


    document.getElementById("expandedSection").addEventListener("click", function() {
        var content = this.nextElementSibling;
        if(content.style.display === "block") {
            content.style.display = "none";
        }else {
            content.style.display = "block"
        }
    });
    document.getElementById("checkSection").addEventListener("click", function() {
        var content = this.nextElementSibling;
        if(content.style.display === "block") {
            content.style.display = "none";
        }else {
            content.style.display = "block"
        }
    });

    document.getElementById("newDieButton").addEventListener("click", function() {rollSingleNewDie();});

    document.getElementById("resetButton").addEventListener("click", function() {reset();});

    document.getElementById("twChanger1").addEventListener("click", function() {diceNumbers.tw = 4; diceNumbers.sw = 2; refreshCounters();});
    document.getElementById("twChanger2").addEventListener("click", function() {diceNumbers.tw = 4; diceNumbers.sw = 3; refreshCounters();});
    document.getElementById("twChanger3").addEventListener("click", function() {diceNumbers.tw = 6; diceNumbers.sw = 3; refreshCounters();});

    var selects = document.querySelectorAll(".slButton");
            for (let i = 0; i < selects.length; i++) {
                selects[i].className += "slShown";
        }

    document.getElementById("meisterModus").addEventListener("click", function() {
        if (document.getElementById("meisterModus").checked) {
            var saveButtons = document.getElementById("saveButtons");
            saveButtons.classList.add("slShown");
        }else {
            var saveButtons = document.getElementById("saveButtons");
            saveButtons.classList.remove("slShown");
        }
    })
    document.getElementById("lernModus").addEventListener("click", function() {
        if (document.getElementById("lernModus").checked) {
            learningMode = true;
        }else {
            learningMode = false;
        }
    })

    document.getElementById("clearSave").addEventListener("click", function() {
        console.warn("Cleared Saves");
        localStorage.clear();
        refreshCounters();
        renameSaves();
    });
    document.getElementById("save1").addEventListener("click", function() {
        if(!localStorage.getItem('save1')) {
            localStorage.setItem('save1', JSON.stringify(diceNumbers));
            console.log("Save1 set");
            renameSaves();
        }else {
            console.log("save1 called");
            diceNumbers = JSON.parse(localStorage.getItem('save1'));
            refreshCounters();
            renameSaves();
        }
        
    });
    document.getElementById("save2").addEventListener("click", function() {
        if(!localStorage.getItem('save2')) {
            localStorage.setItem('save2', JSON.stringify(diceNumbers));
        }else {
            diceNumbers = JSON.parse(localStorage.getItem('save2'));
            refreshCounters();
            renameSaves();
        }
    });
    document.getElementById("save3").addEventListener("click", function() {
        if(!localStorage.getItem('save3')) {
            localStorage.setItem('save3', JSON.stringify(diceNumbers));
        }else {
            diceNumbers = JSON.parse(localStorage.getItem('save3'));
            refreshCounters();
            renameSaves();
        }
    });

    renameSaves();
    refreshCounters();
    displayResults();
}

function reset() {
    diceNumbers = {
        tw: 0,
        sw: 0,
        bw: 0,
        mw: 0,
        af: 0,
        ae: 0,
        ws: 0
    }
    resultsObj = null;
    errorCode = null;
    refreshCounters();
}

function rollAllButton() {
    diceNumbers.tw = document.getElementById('twCount').value;
    diceNumbers.sw = document.getElementById('swCount').value;
    diceNumbers.bw = document.getElementById('bwCount').value;
    diceNumbers.mw = document.getElementById('mwCount').value;
    results = rollAll(diceNumbers);
    displayResults(results);
}


function rollAll(diceNums) {
    var diceResults = [];
    var results = {
        successes: 0,
        failures: 0,
        critSuccesses: 0,
        critFailures: 0,
        newDie: 0
    }
    for (let i = 0; i < diceNums.tw; i++) {
        let index = "tw" + i;
        diceResults[index] = rollDie("tw");
        results = addResults(diceResults[index], results);
    }
    for (let i = 0; i < diceNums.sw; i++) {
        let index = "sw" + i;
        diceResults[index] = rollDie("sw");
        results = addResults(diceResults[index], results);
    }
    for (let i = 0; i < diceNums.bw; i++) {
        let index = "bw" + i;
        diceResults[index] = rollDie("bw");
        results = addResults(diceResults[index], results);
    }
    for (let i = 0; i < diceNums.mw; i++) {
        let index = "mw" + i;
        diceResults[index] = rollDie("mw");
        results = addResults(diceResults[index], results);
    }
    var diceResTemp = []
    for (let i = 0; i < Object.keys(diceResults).length; i++) {
        diceResTemp.push({
            diceNum: diceResults[Object.keys(diceResults)[i]].diceT,
            diceRes: diceResults[Object.keys(diceResults)[i]].rollRes
        });
    }
    return [results, diceResTemp];
}

function addResults(diceResult, results) {
    results.successes += diceResult.successes;
    results.failures += diceResult.failures;
    results.critSuccesses += diceResult.critSuccesses;
    results.critFailures += diceResult.critFailures;
    results.newDie += diceResult.newDie;

    return results;
}


function rollDie(diceType) {
    var roll = Math.floor(Math.random()*6) + 1;
    var diceRes = {
        diceT: diceType,
        rollRes: roll,
        successes: 0,
        failures: 0,
        critSuccesses: 0,
        critFailures: 0,
        newDie: 0
    }

    
    switch (diceType) {
        case "tw":
            switch(roll) {
                case 1:
                    diceRes.failures = 1;
                    break;
                
                case 2:
                    diceRes.successes = 1;
                    break;

                case 3:
                    diceRes.successes = 1;
                    break;

                case 4:
                    diceRes.successes = 1;
                    break;

                case 5:
                    diceRes.successes = 1;
                    break;

                case 6:
                    diceRes.critSuccesses = 1;
                    break;
                
                default:
                    errorCode = "Error: dice result value was out of range. Result: " + roll;
                    break;
            }
            break;
        
        case "sw":
            switch(roll) {
                case 1:
                    diceRes.critFailures = 1;
                    break;
                
                case 2:
                    diceRes.failures = 1;
                    break;

                case 3:
                    diceRes.failures = 1;
                    break;

                case 4:
                    diceRes.failures = 1;
                    break;

                case 5:
                    diceRes.failures =1;
                    break;

                case 6:
                    diceRes.newDie = 1;
                    break;
                
                default:
                    errorCode = "Error: dice result value was out of range. Result: " + roll;
                    break;
            }
            break;
        
        case "bw":
            switch(roll) {
                case 1:
                    break;
                
                case 2:
                    break;

                case 3:
                    diceRes.successes = 1;
                    break;

                case 4:
                    diceRes.successes = 1;
                    break;

                case 5:
                    diceRes.successes = 1;
                    break;

                case 6:
                    diceRes.successes = 1;
                    break;
                
                default:
                    errorCode = "Error: dice result value was out of range. Result: " + roll;
                    break;
            }
            break;
        
        case "mw":
            switch(roll) {
                case 1:
                    diceRes.failures = 1;
                    break;
                
                case 2:
                    diceRes.failures = 1;
                    break;

                case 3:
                    diceRes.failures = 1;
                    break;

                case 4:
                    diceRes.failures = 1;
                    break;

                case 5:
                    break;

                case 6:
                    break;
                
                default:
                    errorCode = "Error: dice result value was out of range. Result: " + roll;
                    break;
            }
            break;
        default:
            errorCode = "Invalid dice Type: " + diceType;
            break;
    }
    if(errorCode) {
        console.error(errorCode);
    }
    return diceRes;
}

function refreshCounters() {
    document.getElementById("twCount").value =  diceNumbers.tw;
    document.getElementById("swCount").value =  diceNumbers.sw;
    document.getElementById("bwCount").value = diceNumbers.bw;
    document.getElementById("mwCount").value = diceNumbers.mw;
    /*document.getElementById("swCount").textContent = diceNumbers.sw;
    document.getElementById("bwCount").textContent = diceNumbers.bw;
    document.getElementById("mwCount").textContent = diceNumbers.mw;*/
    document.getElementById("aeCount").value = diceNumbers.ae;
    document.getElementById("afCount").value = diceNumbers.af;
    document.getElementById("wsCount").value = diceNumbers.ws;
    document.getElementById("spCount").value = spCount;
}

function renameSaves() {
    var diceNumTemp = JSON.parse(localStorage.getItem('save1'));
    if(!localStorage.getItem('save1')) {
        document.getElementById("save1").innerHTML = "Save1"
    }else {
        document.getElementById("save1").innerHTML = "Tw" + diceNumTemp.tw + "Sw" + diceNumTemp.sw;
    }
    var diceNumTemp = JSON.parse(localStorage.getItem('save2'));
    if(!localStorage.getItem('save2')) {
       
        document.getElementById("save2").innerHTML = "Save2"
    }else {
        document.getElementById("save2").innerHTML = "Tw" + diceNumTemp.tw + "Sw" + diceNumTemp.sw;
    }
    var diceNumTemp = JSON.parse(localStorage.getItem('save3'));
    if(!localStorage.getItem('save3')) {
        document.getElementById("save3").innerHTML = "Save3"
    }else {
        document.getElementById("save3").innerHTML = "Tw" + diceNumTemp.tw + "Sw" + diceNumTemp.sw;
    }
    
    console.log("renameSaves called");
}

function displayResults(resultsObject) {
    if(!resultsObject) {
        return;
    }
    document.getElementById("textResultContainer").textContent = "";
    document.getElementById("diceResultContainer").textContent = "";

    diceResultsArray = resultsObject[1];
    resultsObj = resultsObject[0];
    displayDice(diceResultsArray);
    displayText(resultsObj);
    document.getElementById("extraDiceAlert").style.display = "none";
    if(resultsObj.newDie > 0) {
        if(document.getElementById("extraDieAutomatic").checked) {
            while(resultsObj.newDie > 0) {
                rollSingleNewDie();
            }
        }else {
            displayNewDice(resultsObj);
            document.getElementById("extraDiceAlert").style.display = "block";
        }
        
    }else {
        document.getElementById("newDieSectionContainer").style.display = "none";
    }
}

function displayText(results) {
    automaticResults = {
        successes: Number(diceNumbers.ae),
        failures: Number(diceNumbers.af),
        critFailures: 0,
        critSuccesses: 0,
        newDie: 0
    }
    results = addResults(results, automaticResults)
    textResultDE = "";
    textResultEN = "";
    textResult= computeText(results);
    textResultDE = textResult[0];
    textResultEN = textResult[1];

    console.log(textResultDE);

    const textResContainer = document.getElementById("textResultContainer");

    const textResElem = document.createElement("p");
    const textResElemEN = document.createElement("p");
    const resultTextDE = document.createTextNode(textResultDE);
    const resultTextEN = document.createTextNode(textResultEN);
    textResElem.classList.add("textResult");
    textResElem.classList.add("de");
    textResElemEN.classList.add("textResult");
    textResElemEN.classList.add("en");
    if (textResultDE.includes("Kritischer Erfolg")) {
        textResElem.classList.add("success");
    }else if(textResultDE.includes("Kritischer Fehler")) {
        textResElem.classList.add("fail");
    }

    textResElem.appendChild(resultTextDE);
    textResElemEN.appendChild(resultTextEN);
    textResContainer.appendChild(textResElem);
    textResContainer.appendChild(textResElemEN);
}

function computeText(results) {
    textResult = "";
    textResultEN = "";
    var result = {
        successes: (results.successes + results.critSuccesses *2) - (results.failures + results.critFailures *2)
    }
    if(result.successes > 0) {
        textResult += "Probe bestanden, ";
        textResultEN += "Success, ";
    }else {
        textResult += "Probe versagt, ";
        textResultEN += "Failure, ";
    }
    if(results.critSuccesses >= diceNumbers.tw/2 && result.successes > 1 && diceNumbers.tw != 0) {
        textResult = 'Kritischer Erfolg, ';
        textResultEN = "Critical success, ";
    }else if(results.critFailures >= diceNumbers.sw/2 && result.successes < -1 && results.critFailures > 0 && diceNumbers.sw > 0) {
        textResult = "Kritischer Fehler, ";
        textResultEN = "Critical Failure, ";
    }
    if(result.successes >= 0) {
        textResult += "Erfolge: " + result.successes;
        textResultEN += result.successes + " Successes";
    }else {
        textResult += "Fehler: " + result.successes*(-1);
        textResultEN += result.successes*(-1) + " Failures";
    }

    if(Object.values(results).every(value => {
        if (value === 0) {
            return true;
        }
        return false;
    })) {
        textResult = "Keine Würfel wurden gewürfelt";
        textResultEN = "No dice were rolled";
    }
    return [textResult, textResultEN];
}

function displayDice(dice) {
    const diceResContainer = document.getElementById("diceResultContainer");
    for (let i = 0; i < dice.length; i++) {
        var container = document.createElement("div");
        var img = document.createElement("img");
        var text = document.createElement("p");
        img.src = "assets/images/dice/" + dice[i].diceNum + dice[i].diceRes + ".png";
        img.classList.add("diceFace");
        img.alt, img.title, text.textContent = giveDiceResultName(dice[i].diceNum, dice[i].diceRes);
        container.classList.add("dice");
        diceResContainer.appendChild(container);
        container.appendChild(img);
        if (learningMode) {
            container.appendChild(text);
        }
    }
    for (let i = 0; i < diceNumbers.ws; i++) {
        var roll = Math.floor(Math.random()*6) + 1;
        var img = document.createElement("img");
        img.src = "assets/images/dice/ds" + roll + ".png";
        img.classList.add("diceFace");
        img.style.order = "2";
        diceResContainer.appendChild(img);
    }
}

function giveDiceResultName(diceName, diceRes) {
    var textresult;
    switch (diceName) {
        case "tw":
            textresult = "Talentwürfel, Ergebnis: ";
            switch(diceRes) {
                case 1:
                    textresult += "Fehler";
                break;
                case 6:
                    textresult += "Kritischer Erfolg";
                break;
                default:
                    textresult += "Erfolg"
                break;
            }
        break;
        case "sw":
            textresult = "Schwierigkeitswürfel, Ergebnis: ";
            switch(diceRes) {
                case 1:
                    textresult += "Kritischer Fehler";
                break;
                case 6:
                    textresult += "Bonuswürfel addiert";
                break;
                default:
                    textresult += "Fehler";
                break;
            }
        break;
        case "bw":
            textresult = "Bonuswürfel, Ergebnis: ";
            switch(diceRes) {
                case 1:
                    textresult +="Nichts"
                break;
                case 2:
                    textresult +="Nichts"
                break;
                default:
                    textresult +="Erfolg"
                break;
            }
        break;
        case "mw":
            textresult = "Maluswürfel, Ergebnis: ";
            switch(diceRes) {
                case 5:
                    textresult +="Nichts";
                break;
                case 6:
                    textresult +="Nichts";
                break;
                default:
                    textresult +="Fehler";
                break;
            }
        break;
    }
    textresult += ".";
    return textresult;
}

function displayNewDice(results) {
    const container = document.getElementById("newDieSectionContainer");
    const newDieCounter = document.getElementById("newDieCounter");
    newDieCounter.textContent = "Extrawürfel: " + results.newDie;
    container.style.display = "block";
}

function rollSingleNewDie() {
    const newDieContainer = document.getElementById("newDieSectionContainer");
    const diceResContainer = document.getElementById("diceResultContainer");
    resultsObj.newDie = resultsObj.newDie - 1;
    
    
    displayNewDice(resultsObj);
    var result = rollDie("bw");
    var container = document.createElement("div");
    var img = document.createElement("img");
    var text = document.createElement("p");
    img.src = "assets/images/dice/bw" + result.rollRes + ".png";
    img.classList.add("diceFace");
    img.alt, img.title, text.textContent = giveDiceResultName("bw", result.rollRes);
    container.classList.add("dice");
    diceResContainer.appendChild(container);
    container.appendChild(img);
    if (learningMode) {
        container.appendChild(text);
    }
    resultsObj = addResults(result, resultsObj);
    document.getElementById("textResultContainer").textContent = "";
    displayText(resultsObj);
    if(resultsObj.newDie <= 0) {
        newDieContainer.style.display = "none";
        document.getElementById("extraDiceAlert").style.display = "none";
    }
}

// Sammelproben
function rollMultipleDice() {
    diceNumbers.tw = document.getElementById('twCount').value;
    diceNumbers.sw = document.getElementById('swCount').value;
    diceNumbers.bw = document.getElementById('bwCount').value;
    diceNumbers.mw = document.getElementById('mwCount').value;
    var spResults = new Array();
    spResults.push({
        successes: 0,
        failures: 0,
        critSuccesses: 0,
        critFailures: 0,
        newDie: 0
    })

    
    var spResultsTMP = {
        successes: 0,
        failures: 0,
        critSuccesses: 0,
        critFailures: 0,
        newDie: 0
    }
    var spResultSum = {
        critSuc: 0,
        critFail: 0,
        suc: 0,
        fail: 0
    }

    for (let i = 0; i < spCount; i++) {
        spResultsTMP = rollAll(diceNumbers);
        while(spResultsTMP[0].newDie > 0) {
            var res = rollDie("tw");
            spResultsTMP[0].successes += res.successes;
            spResultsTMP[0].failures += res.failures;
            spResultsTMP[0].critSuccesses += res.critSuccesses;
            spResultsTMP[0].newDie = spResultsTMP.newDie - 1;
        }
        if(spCount < 100) {
            console.debug("Teilprobe " + i + ": " + JSON.stringify(spResultsTMP[0]));
        }
        spResults[0] = addResults(spResultsTMP[0], spResults[0]);
        successRatingText = computeText(spResultsTMP[0])[0];
        if (successRatingText.includes("Kritischer Erfolg")) {
            spResultSum.critSuc +=1;
            spResultSum.suc += 1;
        }else if (successRatingText.includes("Kritischer Fehler")) {
            spResultSum.critFail +=1;
            spResultSum.fail += 1;
        }else if (successRatingText.includes("Probe bestanden")){
            spResultSum.suc += 1;
        }else {
            spResultSum.fail += 1;
        }
    }
    var textResult = "";
    var textResultEN = "";
    var successCombined  = (spResults[0].successes + spResults[0].critSuccesses *2) - (spResults[0].failures + spResults[0].critFailures *2);
    var successText = "";
    var successTextEN = "";
    if(successCombined >= 0) {
        successText = successCombined + "\xa0Erfolge";
        successTextEN = successCombined + "\xa0successes";
    }else {
        successText = successCombined*(-1) + "\xa0Fehler";
        successTextEN = successCombined*(-1) + "\xa0failures";
    }
    textResult = "Sammelprobe: " + spResultSum.suc + "/" + spCount + "\xa0Proben bestanden(" + round(spResultSum.suc/spCount*100) + "%). Insgesamt "+ successText + ".";
    textResultEN = "Collection Roll: " + spResultSum.suc + "/" + spCount + "\xa0successfull rolls(" + round(spResultSum.suc/spCount*100) + "%). Total of "+ successText + ".";
    if(spResultSum.critSuc > 0 || spResultSum.critFail > 0) {
        textResult += " Davon " + spResultSum.critSuc + "\xa0kritische Erfolge und " + spResultSum.critFail + "\xa0kritische Fehler.";
        textResultEN += " Additional " + spResultSum.critSuc + "\xa0critical successes and " + spResultSum.critFail + "\xa0critical Failures.";
    }
    if(spCount <= 0 || diceNumbers.tw == 0 && diceNumbers.sw == 0 && diceNumbers.bw == 0 && diceNumbers.mw == 0) {
        textResult = "Keine Würfel gewürfelt.";
        textResultEN = "No dice were rolled.";
    }
    console.log(textResult);
    deTextElem = document.createElement("p");
    enTextElem = document.createElement("p");
    document.getElementById("spRes").textContent = "";
    deTextElem.classList.add("de");
    deTextElem.textContent = textResult;
    enTextElem.classList.add("en");
    enTextElem.textContent = textResultEN;
    document.getElementById("spRes").appendChild(deTextElem);
    document.getElementById("spRes").appendChild(enTextElem);
    
}

function round(x, places = 2) {
    return Number.parseFloat(x).toFixed(places);
}