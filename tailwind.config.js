/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}",
    "./template-parts/*.{php,html,js}",
    "./patterns/*.{php,html,js}",
    "./**/*.{html,js}",
  ],
  theme: {
    extend: {
      colors: {
        GOrange: "#E68A1F",
        GBlue: "#2C4B78",
      },
      height: {
        95: "95vh",
        75: "75vh",
      },
      backgroundImage: {
        HeroBanner: "url(../assets/images/hero/Bogota.jpg)",
      },
    },
  },
  plugins: [],
};
