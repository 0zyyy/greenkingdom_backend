/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
      colors: {
          "orange": "#F7411B",
          "blue": "#040627",
          "gray": "#9192A5",
          "white": "#FFFFFF",
          "custom-green": "#8BD2A0",
      },
    extend: {},
  },
  plugins: [
      require("daisyui"),
      require("@tailwindcss/forms"),
  ],
}

