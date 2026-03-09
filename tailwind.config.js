import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                display: ['Space Grotesk', 'sans-serif'],
                mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'monospace'],
            },
            colors: {
                indigo: {
                    50: '#eef2ff',
                    100: '#e0e7ff',
                    200: '#c7d2fe',
                    300: '#a5b4fc',
                    400: '#818cf8',
                    500: '#6366f1',
                    600: '#4f46e5',
                    700: '#4338ca',
                    800: '#3730a3',
                    900: '#312e81',
                }
            },
            animation: {
                'fade-in-up': 'fadeInUp 0.8s cubic-bezier(0.25, 1, 0.5, 1) forwards',
                'bounce': 'bounce 2s infinite',
                'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'breathe': 'breathe 3s ease-in-out infinite',
                'focus-reveal': 'focusReveal 1.5s cubic-bezier(0.25, 1, 0.5, 1) forwards',
            },
            keyframes: {
                fadeInUp: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                breathe: {
                    '0%, 100%': { transform: 'scale(1)' },
                    '50%': { transform: 'scale(1.05)' },
                },
                focusReveal: {
                    '0%': { filter: 'blur(10px)', opacity: '0', letterSpacing: '0.5em' },
                    '100%': { filter: 'blur(0)', opacity: '1', letterSpacing: 'normal' },
                },
                noise: {
                    '0%, 100%': { transform: 'translate(0, 0)' },
                    '10%': { transform: 'translate(-5%, -5%)' },
                    '20%': { transform: 'translate(-10%, 5%)' },
                    '30%': { transform: 'translate(5%, -10%)' },
                    '40%': { transform: 'translate(-5%, 15%)' },
                    '50%': { transform: 'translate(-10%, 5%)' },
                    '60%': { transform: 'translate(15%, 0)' },
                    '70%': { transform: 'translate(0, 10%)' },
                    '80%': { transform: 'translate(-15%, 0)' },
                    '90%': { transform: 'translate(10%, 5%)' },
                }
            }
        },
    },

    plugins: [forms],
};
