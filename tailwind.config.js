/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'hero': "url('/public/img/avion.jpg')",
        'login': "url('/public/img/login.jpg')",
        'nav': "url('/public/img/nav.png')",

      },
      fontFamily: {
        'bungee': ['Bungee Hairline', 'sans-serif']
      },
    },
  },
  plugins: [],
}