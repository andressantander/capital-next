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
                primary: '#111827', // Deep Charcoal/Black
                secondary: '#22C55E', // Vibrant Financial Green
                accent: '#F5B700', // Gold (kept for contrast)
                'bg-light': '#F9FAFB', // Very light gray
                'bg-dark': '#0F172A', // Slate 900
                'text-primary': '#111827',
                'text-secondary': '#4B5563',
            },
        },
    },

    plugins: [forms, typography],
};
