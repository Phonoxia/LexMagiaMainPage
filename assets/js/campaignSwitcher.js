function productSwitch(newProduct) {
    //Reset all active Elements
    active = document.querySelectorAll('.active');
    if(active.length > 0) {
        for (let i = 0; i < active.length; i++) {
            active[i].classList.remove('active');
        }
    }

    //Try to find the new element. Alert the user if the product can't be found.
    try {
        document.getElementById(newProduct).classList.add("active");
        document.getElementsByClassName(newProduct)[0].classList.add("active");
        //Scroll to the productDesc if the user is on mobile.
        if(window.innerWidth < 992) {
            setTimeout(() => {
                document.getElementById(newProduct).scrollIntoView({
                    behavior: "smooth"
                });
            }, 300);
        }
    }catch(e) {
        console.error("Could not switch Product. Error: " + e);
        window.alert("Could not show selected Product: Product ID not found.");
    }
}