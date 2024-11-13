/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{php,html,js}"],
  theme: {

    screens: {
      "990": {"max":  "990px"},
    },

    extend: {

      fontFamily: {
        "poppins": '"Poppins", sans-serif',
      },

    },
  },
  plugins: [],
}

