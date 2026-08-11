window.onload = function() {
    document.getElementById("descriptionCheckbox").addEventListener("click", function() {
        if (document.getElementById("descriptionCheckbox").checked) {
            desc = true;
        }else {
            desc = false;
        }
    })
    document.getElementById("countCounter").addEventListener("change", function() {count = document.getElementById("countCounter").value;});
    getJSON();
};
var test;
var desc = false;
var count = 0;
var itemObj;

/*async function getJSON() {
    // open file picker
    const [fileHandle] = await window.showOpenFilePicker();

    // get file contents
    const fileData = await fileHandle.getFile();
    
    return fileData.text();
}*/
async function getJSON() {
    const url = "https://rpg.bollmann-hb.de/assets/json/items.json"
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`Response status: ${response.status}`);
        }

        const result = await response.json();
        itemObj = result
    } catch (error) {
        console.error(error.message);
    }
}

function onClick() {
    textResult = "";
    let i = 0;
    const textResContainer = document.getElementById("objectTextResultContainer");
    textResContainer.innerHTML = '';
    const keysX = Object.keys(itemObj);

    while (i < parseInt(count)) {
        const x = keysX[Math.floor(Math.random() * keysX.length)];

        const keysCat = Object.keys(itemObj[x]);
        const cat = keysCat[Math.floor(Math.random() * keysCat.length)];

        const objs = Object.keys(itemObj[x][cat]);
        const obj = objs[Math.floor(Math.random() * objs.length)];

        if (desc === true) {
            const headingResElem = document.createElement("h3");
            const resultHeading = document.createTextNode(obj);
            headingResElem.appendChild(resultHeading);
            textResContainer.appendChild(headingResElem);
            for (const [key, value] of Object.entries(itemObj[x][cat][obj])) {
                textResElem = document.createElement("p");
                textResElem.classList.add("objTextResult");
                resultText = document.createTextNode(key + ": "+ value);
                textResElem.appendChild(resultText);
                textResContainer.appendChild(textResElem);
            }
            
        } else {
            console.log(obj);
            const textResElem = document.createElement("p");
            textResElem.classList.add("textResult");
            const resultText = document.createTextNode(obj);
            textResElem.appendChild(resultText);
            textResContainer.appendChild(textResElem);
        }
        i++;
    }
}