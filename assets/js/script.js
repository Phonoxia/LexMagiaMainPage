//Change Nav state on mobile
function changeNav() {
    const nav = document.getElementsByClassName("navContainer");
    const ham = document.getElementById("hamburger");
    for (let i = 0; i < nav.length; i++) {
        if(nav[i].classList.contains("selected")) {
            nav[i].classList.remove("selected");
            ham.classList.remove("is-active");
        }else {
            nav[i].classList.add("selected");
            ham.classList.add("is-active");
        }
    }
}