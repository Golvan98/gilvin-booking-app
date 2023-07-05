export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],
  theme: {
    extend: {
      backgroundImage: {
        'laptop-guy': "url('/storage/home.png')",
        'raize': "url('rayz.png')",
      }

    },
  },
  plugins: [require('@tailwindcss/forms'),],
}