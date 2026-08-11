const timeToBgChange = 20000;
let bgInterval;
window.onload = function () {
    init();
}

//Initialize Changing of Backgrounds
function init() {
    ["mousemove", "keydown", "scroll", "touchstart"].forEach(event=>{document.addEventListener(event, bgChangeTimer);});
    var bgNum = document.getElementsByClassName("bg").length;
    var initBG = document.getElementById("bg"+Math.floor(Math.random() * bgNum+1));
    displayBG(initBG);
}

//Changes BG after timeToBgChange, only when no Input was detected.
function bgChangeTimer() {
    clearInterval(bgInterval);
    bgInterval = setInterval(() => {
        changeBG();
    }, timeToBgChange);
}

//Change BG to new version.
function changeBG() {
    var currentActive = document.getElementsByClassName("bgActive")[0];
    if(!currentActive) {
        currentActive = document.getElementsByClassName("bg")[0];
    }

    var newActive = currentActive.nextElementSibling;
    if(!newActive) {
        newActive = document.getElementsByClassName("bg")[0];
    }

    displayBG(currentActive, newActive);
}

//Display the chosen BG. If no new background is passed, displays the currentActive.
function displayBG(currentActive, newActive = false) {
    if(!newActive) {
        currentActive.classList.add("bgActive");
        currentActive.style.opacity = "1";
        return;
    }
    currentActive.style.opacity = 0;
    setTimeout(() => {
        currentActive.classList.remove("bgActive");
        newActive.classList.add("bgActive");
        newActive.style.opacity = "1";
    }, 800);
}