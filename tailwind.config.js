/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            transparent: colors.transparent,
            primary: {
                100: '#BBDEFB',
                200: '#64B5F6',
                300: '#1976D2',
            },
            text: {
                100: '#000000',
                200: '#7F7F7F',
                300: '#FFFFFF',
            },
        },
        extend: {},
    },
    plugins: [],
}
