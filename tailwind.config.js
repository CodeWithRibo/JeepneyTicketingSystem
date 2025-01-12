//!everytime you make changes to this file, you need to run the command "npm run build" to apply the changes

/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: ["./public/*.{html,js}"],
  content: ["./*.{html,js}"],
  theme: {
    extend: {
      colors: {
        primary: "#478a38",
        button: " #d5c812",
        background: "#e1e2e136",
        textColor: "#565656",
      },
      fontFamily: {
        Ubuntu: ["Ubuntu"], //font-family: poppins
      },
    },
  },
  plugins: [],
};
