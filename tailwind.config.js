 /** @type {import('tailwindcss').Config} */
 export default {
  content: [
    "./public/**/*.{html,js,css,php}",
      "./src/**/*.{html,js,css,php}",
      "./*.{html,js,css,php}",
      "./custom.css",
      "./src/custom.css",

  ],
  theme: {
    extend: {
      colors: {
        primary: "#478a38",
        button: "#d5c812",
        background: "#e1e2e136",
        textColor: "#565656",
      },
      fontFamily: {
        sanscalp: ["SansCalps", "sans-serif"]
      }
    },
  },
  plugins: [],
}