module.exports = {
    purge: {
        //   enabled: true,
        content: ['./resources/views/*.blade.php', './resources/js/components/*.vue'],
    },
    theme: {
        fontFamily: {
            display: ['Raleway', 'sans-serif']
        },
        extend: {
            maxWidth: {
                '1/4': '25%',
                '1/2': '50%',
                '3/4': '75%'
            },
            colors: {
                primary: '#AF1B1B',
                secondary: '#575757',
                tertiary: '#606c76',
                text: '#343b42'
            }
        }
    },
    variants: {},
    plugins: [],
}