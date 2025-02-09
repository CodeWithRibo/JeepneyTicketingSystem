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
          // daiysui colors
          customYellow: "#e7f20f",
        },
        fontFamily: {
          sanscalp: ["SansCalps", "sans-serif"],
        },
        gridTemplateColumns: {},
      },
    },
    plugins: [
      require('daisyui'),
    ],
    daisyui: {
      themes: false, // Disable all themes
      darkTheme: "dark", // Optional: name of one of the included themes for dark mode
      base: false, // Disable background and foreground color for root element
      styled: true, // Include DaisyUI colors and design decisions for all components
      utils: true, // Adds responsive and modifier utility classes
      prefix: "", // Prefix for DaisyUI classnames (optional)
      logs: true, // Shows info about DaisyUI version and used config in the console when building your CSS
      themeRoot: ":root", // The element that receives theme color CSS variables
    },
  }