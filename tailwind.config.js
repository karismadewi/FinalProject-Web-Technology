const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                sacramento :['Sacramento'],
                unbounded:['Unbounded'],
                mon:['Montserrat'],
            },
            colors: {
				primary: "#10567A",
				secondary: "#38A4DC",
				textPrimary: "#333333",
			},
        
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
