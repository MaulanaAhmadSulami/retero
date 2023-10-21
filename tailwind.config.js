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
        ubuntuMonoBold: ['UbuntuMono-Bold', 'sans'],
        ubuntuMonoBoldItalic: ['UbuntuMono-BoldItalic', 'sans'],
        ubuntuMonoItalic: ['UbuntuMono-Italic', 'sans'],
        ubuntuMonoRegular: ['UbuntuMono', 'sans'],
      }
    },
  },
  plugins: [],
}

