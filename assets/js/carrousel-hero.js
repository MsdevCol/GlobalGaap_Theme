const heroSection = document.getElementById("chero-container");
let currentIndex = 0;

const images = [
    globalGaap.theme_url + "Medellin.jpg",
    globalGaap.theme_url + "Cali.jpg",
    globalGaap.theme_url + "Cucuta.jpg",
    globalGaap.theme_url + "Barranquilla.jpg",
    globalGaap.theme_url + "Bogota.jpg"
];

// Function to preload images
function preloadImages(urls) {
    const imgArray = [];
    for (let i = 0; i < urls.length; i++) {
        const img = new Image();
        img.src = urls[i];
        imgArray.push(img);
    }
}

// Preload all images
preloadImages(images);

setInterval(() => {
    heroSection.classList.remove("bg-HeroBanner");
    heroSection.style.backgroundImage = `url(${images[currentIndex]})`;
    currentIndex = (currentIndex + 1) % images.length;
    console.log("interval");
}, 5000);
