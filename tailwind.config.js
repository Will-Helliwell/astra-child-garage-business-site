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
        'header-blue': '#264f6b',
        'image-ring-blue': '#2da0e8',
        'homepage-subtitle-yellow': '#f0b400',
        'cta-pink': '#d24a67',
        'footer-text-grey': '#484747',
      },
      fontFamily: {
        'mona': ['Mona Sans', 'sans-serif'],
      },
      fontSize: {
        'xxs': '0.6rem',
      },
    },
  },
  plugins: [],
}

