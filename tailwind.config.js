module.exports = {
  content: [
    './asset/**/*.{css,js}',
    './*.php',
    './includes/*.php'
    ],
  theme: {
    extend: {
      height: {
        sm: '8px',
        nav: '5.7rem',
        md: '50px',
        lg: '450px',
        xl: '550px',
      },
      colors: { 
        neutral:   '#EEF0F7',
        primary:    '#003399',
        secondary:  '#F37335',
        smoke:      'rgba(0, 0, 0, 0.8)'
      },
      fontFamily: {
        body: ['Raleway'],
        head: ['Source Serif Pro']
      },
      backgroundImage: {
        'hero-pattern': "url('../asset/image/instructor-backgroung.jpg')",
        'home-banner': "url('../asset/image/home-hero-bg.jpg')"
       }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
