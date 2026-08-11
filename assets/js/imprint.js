window.addEventListener("load", (event) => {
    init();
});

function init() {
    const buttonDatenschutz = document.getElementById("datenschutz");
    const wrapperDatenschutz = document.getElementById("datenschutzWrapper");
    buttonDatenschutz.addEventListener("click", (event)=> {
        if(wrapperDatenschutz.style.display == "block") {
            wrapperDatenschutz.style.display = "none";
        }else {
            wrapperDatenschutz.style.display = "block";
        }
    });
    const buttonHaftung = document.getElementById("haftung");
    const wrapperHaftung = document.getElementById("haftungWrapper");
    buttonHaftung.addEventListener("click", (event)=> {
        if(wrapperHaftung.style.display == "block") {
            wrapperHaftung.style.display = "none";
        }else {
            wrapperHaftung.style.display = "block";
        }
    });
}