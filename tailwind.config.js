const defaultTheme = require('tailwindcss/defaultTheme');


module.exports = {
    theme: {        
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                primary: {
                  light: '#A5F3FC',
                  DEFAULT: '#0EA5E9',
                  dark: '#0369A1',
                },
                gray: {
                  light: '#E5E7EB',
                  DEFAULT: '#6B7280',
                  dark: '#1F2937',
                },
                amber: {
                  light: '#FDE68A',
                  DEFAULT: '#F59E0B',
                  dark: '#B45309',
                },
            },            
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
