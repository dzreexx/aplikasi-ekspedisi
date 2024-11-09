/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/views/**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        'roboto': ["Roboto", 'sans-serif'],
      },
      keyframes: {
        marquee: {
          '0%': {transform: 'translateX(0)'},
          '100%': {transform: 'translateX(-50%)'},
        }
      },
      animation: {
        marquee: 'marquee 20s linear infinite',
      }
    },
  },
  plugins: [
    require('daisyui'),
  ],
}

