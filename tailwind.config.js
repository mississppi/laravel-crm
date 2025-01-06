import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',  // Vueファイルを対象にする場合
        './resources/js/**/*.jsx',  // JSXファイルを対象にする場合
        './resources/js/**/*.ts',   // TypeScriptを対象にする場合
        './resources/js/**/*.tsx',  // TypeScriptとJSXの組み合わせを対象にする場合
        './resources/css/**/*.css', // CSSファイルも対象にする場合
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
