const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            backgroundImage: {
                'fondo-home-logo': "url('/img/logo_beezper_home.png')",
                'fondo-projects': "url('/img/fondo_forms.png')",
                'menu-project': "url('/img/menu_form.png')",
                'menu-project-two': "url('/img/menu_selected.png')",
                'fondo-home-registrate': "url('/img/icono_registrate.png')",
                'fondo-home-elegir': "url('/img/icono_elegir.png')",
                'fondo-home-invierte': "url('/img/icono_invierte.png')",
                'fondo-home-gana': "url('/img/icono_gana.png')",
                'registrate-animate': "url('/img/register/registrate_base.png')",
                'registrate-boton': "url('/img/register/registrate_boton.png')",
                'elegir-animate': "url('/img/icono_elegir.png')",
                'invierte-animate': "url('/img/icono_invierte.png')",
                'home-gana-animate': "url('/img/icono_gana.png')",
                'fondo-home-footer': "url('/img/logo_beezper_blanco.png')",
                'fondo-registro': "url('/img/edificios_registro.jpg')",
              },
            fontFamily: {
                'quick' : ['Quicksand'],
                'cairo' : [ 'Cairo']
            },
            height: {
                '128': '32rem',
              }
        },
        colors: {
            'blue': {
                300:'#44B5E3',
                400:'#3EC4DC',
                500:'#609DB0',
                600:'#46BDD6',
            },
            'pink': '#ff49db',
            'orange': '#ff7849',
            'green': '#13ce66',
            'gray-dark': '#273444',
            'gray': '#8492a6',
            'gray-light': '#d3dce6',
            'black':'#000',
            'white':'#fff',
            'file':'#6199AB',
            'gray-input':'#E2E9EE',
            'gray-hover':'#9E9E9F',
            'red':{
                300:'#E90000',
                400:'#C7272C',
                500:'#E90000',
                700:'#C4282D',//Para errores
            },
            'purple':{
                200:'#5C7BFF',
                300:'#568AF8',
                400:'#5098F1',
                500:'#4AA7EA',
            },
            'melon':'#ffe4e1',
            'bg-content' : '#F3F3EB',
          },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
