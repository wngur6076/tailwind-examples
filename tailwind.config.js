const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                'gray': '#b8c2cc',
                'gray-light': '#dae1e7',
                'gray-lighter': '#f1f5f8',
                'gray-lightest': '#f8fafc',
                'gray-darkest': '#3d4852',
                'gray-darker': '#606f7b',
                'gray-custom': '#e4eaef',

                'red-darkest': '#3b0d0c',
                'red-darker': '#621b18',
                'red': '#FF0000',

                'teal': colors.teal,
            },
            height: {
                '112': '28rem',
            },
            width: {
                '128': '32rem',
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('./plugins/css-grid')({
            grids: [2, 3, 5, 6, 8, 10, 12],
            gaps: {
              0: '0',
              2: '0.5rem',
              4: '1rem',
              8: '2rem',
            },
            variants: ['responsive'],
          }),
          require('glhd-tailwindcss-transitions')(),
    ],
    }
