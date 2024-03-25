/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./*.{php,html,js}",
        "./template-parts/*.{php,html,js}",
        "./patterns/*.{php,html,js}",
        "./**/*.{html,js}"
    ],
    important: true,
    theme: {
        extend: {
            colors: {
                GOrange: "#E68A1F",
                GBlue: "#2C4B78"
            },
            height: {
                95: "95vh",
                75: "75vh",
                600: "600px"
            },
            width: {
                "12/25": "48%",
                "8/25": "32%"
            },
            backgroundImage: {
                HeroBanner: "url(../assets/images/hero/Bogota.jpg)"
            },
            spacing: {
                "9/10": "90%"
            },
            fontSize: {
                600: "600px"
            },
            minHeight: {
                80: "80vh"
            }
        }
    },
    plugins: []
};
