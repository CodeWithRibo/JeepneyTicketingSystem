//!everytime you make changes to this file, you need to run the command "npm run build" to apply the changes

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        primary: "#478a38",
      },
      fontFamily: {
        Ubuntu: ["Ubuntu"], //font-family: poppins
      },
    },
  },
  plugins: [],
};
