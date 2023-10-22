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
      form : '#EEEEEE',
      footer: '#FAFAFA',
      copyright: '#000000',
    },
    extend: {
      fontFamily:{
        publicPixel: ['PublicPixel', 'sans'],
        ubuntuMonoRegular: ['UbuntuMono-Regular', 'sans'],
        ubuntuMonoBold: ['UbuntuMono-Bold', 'sans'],
        ubuntuMonoBoldItalic: ['UbuntuMono-BoldItalic', 'sans'],
        ubuntuMonoItalic: ['UbuntuMono-Italic', 'sans'],
      }
    },
  },
  plugins: [],
}

