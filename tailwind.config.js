const colors = require('tailwindcss/colors');

module.exports = {
  mode: 'jit',
  purge: {
    enabled: true,
    content: ['./*.php'],
    // '*.js',
  },
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    screens: {
      'phone-m': '320px',
      // => @media (min-width: 320px) { ... }

      'phone-l': '375px',
      // => @media (min-width: 375px) { ... }

      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1200px',
      // => @media (min-width: 1200px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        lime: colors.lime,
        lblue: colors.sky,
        // bgray: colors.blueGray,
        // pink: colors.pink,
        // pBlue: 'hsl(216, 100%, 98%)',
        pDrkBlue: 'hsl(240, 100%, 10%)',
        // mBlue: 'hsl(215, 100%, 94%)',
        mDrkBlue: 'hsl(240, 100%, 8%)',
        // sBlue: 'hsl(215, 100%, 90%)',
        // sDrkBlue: 'hsl(240, 100%, 4%)',
        // mmlBlue: 'hsl(220, 100%, 50%)',
        dBlue: 'hsl(220, 100%, 20%)',
        // slPurp: 'hsl(245, 100%, 85%)',
        lPurp: 'hsl(245, 58%, 51%)',
        dPurp: 'hsl(238, 45%, 22%)',
        dXlPurp: 'hsl(250, 90%, 20%)',
        d2XlPurp: 'hsl(250, 90%, 15%)',
        d3XlPurp: 'hsl(250, 90%, 6%)'
      },
      gradientColorStops: (theme) => ({

        ...theme("colors"),

        GLightestBlue: "hsl(216, 100%, 98%) 20%",

        GLighterBlue: "hsl(215, 100%, 94%) 40%",

        GLightBlue: "hsl(215, 100%, 90%) 80%",

        GDarkBlue: "hsl(240, 100%, 8%) 0%",

        GDarkerBlue: "hsl(240, 100%, 4%) 40%",

        GDarkestBlue: "hsl(240, 100%, 2%) 80%",

      }),
      letterSpacing: {
        // tightest: '-.075em',
        // tighter: '-.05em',
        // tight: '-.025em',
        normal: '0',
        smidge: '.05em',
        wide: '.15em',
        wideish: '.2em',
        wider: '.25em',
        // widest: '.1em',
        widest: '.35em'
        // morewide: '.45em'
        // morewider: '.55em'
      },
      fontSize: {
        // '4xs': '.45rem',
        '3.5xs': '.45rem',
        '3xs': '.5rem',
        '2.5xs': '.6rem',
        '2xs': '.65rem',
        '1.5xs': '.7rem',
        'xs': '.75rem',
        'xsxmini': '.8rem',
        'mini': '.825rem',
        'minixsm': '.85rem',
        'sm': '.875rem',
        'sm+': '.9rem',
        'tinyxsm': '.925rem',
        'tiny': '.95rem',
        'base': '1rem',
        'l': '1.075rem',
        'lg': '1.125rem',
        'lg+': '1.2rem',
        'xl': '1.25rem',
        '1.5xl': '1.35rem',
        '2xl': '1.45rem',
        '2.5xl': '1.65rem',
        '3xl': '1.875rem',
        '3.5xl': '2rem',
        '3.75xl': '2.15rem',
        '4xl': '2.25rem',
        '4.5xl': '2.5rem',
        '4.75xl': '2.75rem',
        '5xl': '3rem',
        '5.5xl': '3.5rem',
        '6xl': '4rem',
        '6.25xl': '4.25rem',
        '6.5xl': '4.5rem',
        '7xl': '5rem',
        '7.5xl': '5.5rem'
        // '7xl': '5rem',
        // '7.5xl': '5.5rem'
      },
      height: {
        '15': '3.75rem',
        '17': '4.25rem',
        '18': '4.5rem',
        '19': '4.75rem',
        '70': '17rem',
        '90': '22rem',
        '92': '23rem',
        '100': '25rem',
        '105': '27.5rem',
        '110': '30rem'
      },
      width: {
        '17': '4.25rem',
        '18': '4.5rem',
        '19': '4.75rem',
        '21': '5.25rem',
        '22': '5.5rem',
        '23': '5.75rem',
        '66': '17rem',
        '74': '18.5rem',
        '78': '19rem',
        '100': '25rem',
        '105': '27.5rem',
        '110': '30rem'
      },
      inset: {
        '15': '3.85rem',
      },
      borderWidth: {
        DEFAULT: '1px',
        '0': '0',
        '2': '2px',
        '3': '3px',
        '4': '4px',
        '5': '5px',
        '6': '6px',
        '7': '7px',
        '8': '8px'
      },
      borderOpacity: {
        '15': '0.15'
      },
      dropShadow: {
        '3xl': '0 36px 42px hsla(210, 28%, 40%, 0.35)',
      },
      backgroundImage: {
        'ptn': "url('../img/mm-pattn.webp')",
        'ptnDrk': "url('../img/mm-pattn_drk.webp')"
      },
      translate: {
        '4.5': '1.125rem',
      },
      /* backgroundSize: {
        'auto': 'auto',
        'cover': 'cover',
        'contain': 'contain',
        '50%': '50%',
        '100%': '100%',
        '120%': '120%',
        '16': '4rem'
      }, */
      backgroundOpacity: {
        '15': '0.15',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}