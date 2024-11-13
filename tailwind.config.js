/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{php,html,js}"],
  theme: {

    screens: {
      "1320": "1320px"
    },

    extend: {

      colors: {
        "blue-brain": "#0D6EFD"
      },

      fontFamily: {
        "poppins": '"Poppins", sans-serif',
      },

    },
  },
  plugins: [],
}

