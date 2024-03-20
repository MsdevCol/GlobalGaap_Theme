const burger_menu = document.getElementById("navbar-burger");
const mobileContainer = document.getElementById("navbar-mobileContainer");
const closebutton = document.getElementById("navbar-closeButton");
const transparentCover = document.getElementById("navbar-transparentCover");

burger_menu.addEventListener("click", () => {
  mobileContainer.classList.replace("translate-x-full", "translate-x-0");
  transparentCover.classList.replace("hidden", "block");
});
closebutton.addEventListener("click", () => {
  mobileContainer.classList.replace("translate-x-0", "translate-x-full");
  transparentCover.classList.replace("block", "hidden");
});
