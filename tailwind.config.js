/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./*.php', './views/*.php', './src/*.js'],
	theme: {
		screens: {
			xl: { 'min': '1201px', 'max': '1700px' },
			lg: { 'max': '1200px' },
			md: { 'max': '900px' },
			sm: { 'max': '600px' },
			desktop: { 'min': '1200px' },
		},
		fontFamily: {
			'sans': ['Noto Sans TC', 'sans-serif'],
			'serif': ['Noto Serif TC', 'serif'],
		},
		container: {
			center: true,
			screens: false,
		},
		extend: {
			colors: {
				gray: {
					DEFAULT: '#595757',
					400: '#b4b4b4',
				},
			},
			fontSize: {
				'xs': ['12px'],
				'sm': ['14px'],
				'base': ['16px'],
				'lg': ['18px'],
				'xl': ['20px'],
				'2xl': ['30px'],
				'3xl': ['40px'],
				'4xl': ['66px'],
				'5xl': ['86px'],
				'6xl': ['108px'],
			},
			letterSpacing: {
				'tighter': '-2px',
				'tight': '-1px',
				'none': '0px',
				'normal': '1px',
				'wide': '3px',
				'wider': '6px',
				'widest': '9px',
			},
			lineHeight: {
				'1.1': '1.1',
				'1.2': '1.2',
				'1.3': '1.3',
				'1.4': '1.4',
				'1.5': '1.5',
				'1.6': '1.6',
				'1.8': '1.8',
				'2': '2',
			},
			borderRadius: {
				sm: '7px',
				md: '14px',
				lg: '21px',
			},
			zIndex: {
				'60': '60',
				'70': '70',
				'80': '80',
				'90': '90',
			},
			transitionDelay: {
				'0': '0s',
			},
			animation: {
				'spin-slow': 'spin 10s linear infinite',
			},
			width: {
				'fill': '-webkit-fill-available',
			},
			maxWidth: {
				'fill': '-webkit-fill-available',
			},
			height: {
				'fill': '-webkit-fill-available',
			},
			maxHeight: {
				'fill': '-webkit-fill-available',
			},
		},
	},
	variants: {
		extend: {},
	},
	plugins: [],
};