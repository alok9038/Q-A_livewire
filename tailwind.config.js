const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};


// const mix = require('laravel-mix');
// const tailwindcss = require('tailwindcss');


// mix.js('resources/js/app.js', 'public/js')
// .postCss('resources/css/app.css', 'public/css', [
//     require('tailwindcss'),
// ]);
