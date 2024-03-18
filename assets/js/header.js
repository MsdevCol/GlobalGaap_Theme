if (document.querySelector(".dynamH-container")) {
  const burger_menu = document.querySelector(".navbar-burger");
  const mobileContainer = document.querySelector(".navbar-mobileContainer");
  const closebutton = document.getElementById("navbar-closeButton");

  burger_menu.addEventListener("click", () => {
    mobileContainer.style.right = "-1svw";
  });
  closebutton.addEventListener("click", () => {
    mobileContainer.style.right = "-70svw";
  });
}
