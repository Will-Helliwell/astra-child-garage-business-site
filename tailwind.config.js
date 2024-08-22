/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './**/*.html',
    './**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'header-blue': '#264f6b', // Add your custom color here
      },
    },
  },
  plugins: [],
}

