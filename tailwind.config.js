import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const { createThemes } = require('tw-colors');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		 './storage/framework/views/*.php',
		 './resources/views/**/*.blade.php',
        'node_modules/preline/dist/*.js',
	],

    darkMode:'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },


    plugins: [
		forms,
		require("preline/plugin"),
        createThemes({
            light:{
                'primary': '#2563eb',
                'secondary': '#93c5fd',
                'tertiary': '#38bdf8',
            },
            dark:{
                'primary': '#0f172a',
                'secondary': '#64748b',
                'tertiary': '#e2e8f0',
            },
            orange:{
                'primary': '#fbbf24',
                'secondary': '#c2410c',
                'tertiary': '#fcd34d',
            }
        })
	],
};
