if(document.querySelector('.chero-container')) {



const heroSection = document.querySelector('.chero-container');
const images = [
  
  'url("http://test.local/wp-content/themes/GlobalGaap/assets/images/hero/Medellin.jpg")',
  'url("http://test.local/wp-content/themes/GlobalGaap/assets/images/hero/Cali.jpg")',
  'url("http://test.local/wp-content/themes/GlobalGaap/assets/images/hero/Cucuta.jpg")',
  'url("http://test.local/wp-content/themes/GlobalGaap/assets/images/hero/Barranquilla.jpg")',
  'url("http://test.local/wp-content/themes/GlobalGaap/assets/images/hero/Bogota.jpg")',
  // Add more images as needed
];
let currentIndex = 0;

setInterval(() => {
  heroSection.style.backgroundImage = images[currentIndex];
  currentIndex = (currentIndex + 1) % images.length;
}, 5000);

}