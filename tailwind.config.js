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
                'gray-light': '#dae1e7',
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
              4: '1rem',
              8: '2rem',
            },
            variants: ['responsive'],
          }),
    ],
    }
