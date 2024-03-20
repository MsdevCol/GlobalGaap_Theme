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
      },
    },
  },
  plugins: [],
};
