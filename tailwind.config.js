/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{php,html,js}"],
  theme: {

    screens: {
      "990": {"max":  "990px"},
      "870": {"max":  "870px"},
      "830": {"max":  "830px"},
      "770": {"max":  "770px"},
      "710": {"max": "710px"},
      "500": {"max": "500px"},
    },

    extend: {

      fontFamily: {
        "poppins": '"Poppins", sans-serif',
      },

    },
  },
  plugins: [],
}

