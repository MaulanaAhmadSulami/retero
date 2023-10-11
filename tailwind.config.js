/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      button : '#FFC800',
      headline : '#384259',
      form : '#EEEEEE'
    },
    extend: {
      fontFamily:{
        publicPixel: ['PublicPixel', 'sans'],
      }
    },
  },
  plugins: [],
}

