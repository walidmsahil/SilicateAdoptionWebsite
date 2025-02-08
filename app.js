const hamburgerToggle = document.querySelector("#hamburger-toggle");
const navbar = document.querySelector("#navbar");

hamburgerToggle.addEventListener("click", onHamburgerClick)

function onHamburgerClick() {
    if (!navbar.classList.contains("open")){
    navbar.classList.add("open");
    }
    else{
    navbar.classList.remove("open");
    }
}