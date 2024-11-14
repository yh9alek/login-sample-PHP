/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{php,html,js}"],
  theme: {

    screens: {
      "990": {"max":  "990px"},
      "870": {"max":  "870px"},
      "710": {"max": "710px"}
    },

    extend: {

      fontFamily: {
        "poppins": '"Poppins", sans-serif',
      },

    },
  },
  plugins: [],
}

