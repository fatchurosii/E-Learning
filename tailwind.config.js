module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
    },
    colors:{
      'primary' : '#8155FF',
      'dark'  : '#4C4C54',
      'secondary' : '#F8F5FF'
    }, 
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}