let menuSwitch = document.querySelector("#menu-switch");
let navbarMenu = document.querySelector("#navbar-menu");

menuSwitch.addEventListener("change", function () {
    if (menuSwitch.checked == true) {
        navbarMenu.classList.add("on");
        console.log("true");
    } else {
        navbarMenu.classList.remove("on");
        console.log("false");
    }
});
