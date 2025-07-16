import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                inter: ['Inter', 'sans-serif']
            },
            colors: {
                primary: '#78be3c',
                secondary: '#f2f2f2',
                gray: '#53565a',
                black: '#000000',
                white: '#ffffff',
                accent: '#fbbf24',
                neutral: '#64748b',
                'base-100': '#ffffff',
                info: '#3abff8',
                success: '#36d399',
                warning: '#fbbd23',
                error: '#f87272',

            },

        },
    },

    plugins: [forms],
};
