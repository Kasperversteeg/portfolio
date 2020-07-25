module.exports = {
    purge: {
        //   enabled: true,
        content: ['./resources/views/*.blade.php'],
    },
    theme: {
        fontFamily: {
            display: ['Raleway', 'sans-serif']
        },
        extend: {
            colors: {
                primary: '#AF1B1B',
                secondary: '#575757',
            }
        }
    },
    variants: {},
    plugins: [],
}