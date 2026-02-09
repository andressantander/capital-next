import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'Roboto', ...defaultTheme.fontFamily.sans],
                heading: ['Poppins', 'Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#1A232A', // FBS "Mirage" (Dark Blue-Grey)
                secondary: '#26914A', // FBS "Eucalyptus" (Primary Green)
                accent: '#79F4A4', // FBS "Mint" (Accent Green)
                'bg-light': '#F9FAFB', // Very light gray (Keep for light sections)
                'bg-dark': '#0F172A', // Slate 900 (Keep as deep dark alternative)
                'text-primary': '#1A232A', // Match primary
                'text-secondary': '#4B5563', // Gray 600
            },
        },
    },

    plugins: [forms, typography],
};
