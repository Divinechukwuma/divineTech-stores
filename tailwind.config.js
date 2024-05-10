/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'nav-black': '#000000',
        'blood': '#350008',
        'less-blood': '#6c0010',
        'text': '#6e6e6e',
        'text-hover': '#1f1f1f',
      },

      fontFamily: {
        sans: ['Graphik', 'sans-serif'],
        serif: ['Merriweather', 'serif'],
      },
    },
  },
  plugins: [],
}

