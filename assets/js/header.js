if (document.querySelector(".dynamH-container")) {
  const navbar = document.querySelector(".dynamH-container");
  const logo = document.querySelector("#navbar-logo");
  const scrollWatcher = document.createElement("div");
  const burger_menu = document.querySelector(".navbar-burger");
  const mobileContainer = document.querySelector(".navbar-mobileContainer");
  const closebutton = document.getElementById("navbar-closeButton");
  if (document.getElementsByClassName("fpage-teamsContainer").length) {
    navbar.classList.remove("scrolled");
    scrollWatcher.setAttribute("data-scroll-watcher", "");

    navbar.before(scrollWatcher);

    const navObserver = new IntersectionObserver((data) => {
      navbar.classList.toggle("scrolled", !data[0].isIntersecting);
      logo.classList.toggle("navbar-logo-container", data[0].isIntersecting);
      logo.classList.toggle("navbar-logo-container2", !data[0].isIntersecting);
      burger_menu.classList.toggle("burger_menu_2", !data[0].isIntersecting);
    });

    navObserver.observe(scrollWatcher);
  } else {
    navbar.style.transition = "0s";
    navbar.classList.add("scrolled");
    logo.classList.remove("navbar-logo-container");
    logo.classList.add("navbar-logo-container2");
    burger_menu.classList.add("burger_menu_2");
  }
  burger_menu.addEventListener("click", () => {
    mobileContainer.style.right = "-1svw";
  });
  closebutton.addEventListener("click", () => {
    mobileContainer.style.right = "-70svw";
  });
}
