if (document.querySelector(".chero-container")) {
  const heroSection = document.querySelector(".chero-container");
  const images = [
    globalGaap.theme_url + "Medellin.jpg",
    globalGaap.theme_url + "Cali.jpg",
    globalGaap.theme_url + "Cucuta.jpg",
    globalGaap.theme_url + "Barranquilla.jpg",
    globalGaap.theme_url + "Bogota.jpg",
  ];
  let currentIndex = 0;

  setInterval(() => {
    heroSection.style.backgroundImage = `url(${images[currentIndex]})`;
    currentIndex = (currentIndex + 1) % images.length;
  }, 5000);
}
