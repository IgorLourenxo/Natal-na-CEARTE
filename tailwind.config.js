module.exports = {
  theme: {
    extend: {
      colors: {
        'primary': '#ED173A',
        'light': '#F2F2F2',
        'neutral': '#8C8C8C',
        'dark': '#262626'
      },
      fontFamily: {
        'montserrat': 'montserrat, sans-serif',
        'amaranth': 'amaranth, sans-serif'
      }
    }
  },
  variants: {
    padding: ['responsive', 'hover', 'focus'],
    fontSize: ['responsive', 'hover', 'focus'],
    height: ['responsive', 'hover', 'focus'],
    width: ['responsive', 'hover', 'focus'],
    borderWidth: ['responsive', 'hover', 'focus'],
    borderColor: ['responsive', 'hover', 'focus'],
    textDecoration: ['responsive', 'hover', 'focus', 'active'],
  },
  plugins: []
}
