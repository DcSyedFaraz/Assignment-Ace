/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"],
  theme: {
    extend: {

        backgroundImage: theme => ({

            'orange': "url('../../images/bg-orange.png')",
        }),
        colors: {

            'primary-one': '#a6dafb', //LiteBlue
            'primary-one-lite': '#FFC04C',
            'primary-one-dark': '#276cb6',
            'primary-two': '#3CAEA3', //Cyan

          },
          keyframes: {
            tada: {
                '0%': { transform: 'scaleX(1)' },
                '10%, 20%': { transform: 'scale(0.9) rotate(-3deg)' },
                '30%, 50%, 70%, 90%': { transform: 'scale(1.1) rotate(3deg)' },
                '40%, 60%, 80%': { transform: 'scale(1.1) rotate(-3deg)' },
                to: { transform: 'scaleX(1)' },
              },
          },
          animation: {
            tada: 'tada 1s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite',
          },


    },
  },
  plugins: [],
}

