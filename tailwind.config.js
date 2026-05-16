import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import flowbite from 'flowbite/plugin';
import colors from 'tailwindcss/colors';
import plugin from 'tailwindcss/plugin';

/** @type {import('tailwindcss').Config} */
export default {
	darkMode: null,
	content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		'./storage/framework/views/*.php',
		'./resources/views/**/*.blade.php',
	],
	safelist: [
		{
			pattern: /(bg|border|text)-(base|red|green|yellow)-(200|500|700)/,
		},
	],
	theme: {
		extend: {
			container: {
				center: true,
				padding: '1rem',
			},
			fontFamily: {
				sans: ['var(--font-sans)', ...defaultTheme.fontFamily.sans],
			},
			colors: {
				base: colors.zinc,
				primary: {
					50: '#fef3ea',
					100: '#ffe5d1',
					200: '#fecca7',
					300: '#f1b281',
					400: '#d49059',
					500: '#b97338',
					600: '#9e5c20',
					700: '#884c12',
					800: '#733e06',
					900: '#633506',
					950: '#411f00',
				},
			},
			spacing: {
				icon: '46px',
			},
			aspectRatio: {
				banner: '5/2',
				poster: '3/4',
				thumbnail: '4/3',
			},
		},
	},
	plugins: [
		forms,
		flowbite,
		plugin(({ addVariant }) => {
			addVariant('both', ['&:focus', '&:hover']);
		}),
	],
};

