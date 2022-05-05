module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require( './tailwind-typography.config.js' ),
	],
	content: [
		// Ensure changes to theme.json and all PHP files rebuild your CSS.
		'./theme/theme.json',
		'./theme/**/*.php',
	],
	safelist: [
		// Prevent editor-specific styles from being purged.
		'editor-post-title__block',
		'editor-post-title__input',
	],
	theme: {
		// Extend the default theme.
		extend: {
			height: {
				sm: '8px',
				nav: '5.7rem',
				md: '50px',
				lg: '450px',
				xl: '550px',
			},
			colors: { 
				neutral: '#EEF0F7',
				primary: '#003399',
				secondary: '#F37335',
				smoke: 'rgba(0, 0, 0, 0.8)'
			},
			fontFamily: {
				body: ['Raleway'],
				head: ['Source Serif Pro']
			},
			backgroundImage: {
				'home-banner': "url('../theme/asset/image/hero.png')",
				'project': "url('../theme/asset/image/project.png')",
				'cta': "url('../theme/asset/image/cta.png')"
			},
		},
	},
	plugins: [
		// Add Tailwind Typography.
		require( '@tailwindcss/typography' ),

		// Extract colors and widths from theme.json.
		require( '@_tw/themejson' )( require( '../theme/theme.json' ) ),

		// Uncomment below to add additionals first-party Tailwind plugins.
		// require( '@tailwindcss/aspect-ratio' ),
		// require( '@tailwindcss/forms' ),
		// require( '@tailwindcss/line-clamp' ),
	],
};
