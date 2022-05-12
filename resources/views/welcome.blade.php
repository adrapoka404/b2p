<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
    <style>
        .circulo {
            position: relative;
            width: 60vh;
            height: 60vh;
            background: linear-gradient(#e90000, #5c7bff, #44b5e3);
            border-radius: 50%;
            animation: animate 5s linear infinite;
        }

        @keyframes animate{
            from{
                transform: rotate(0deg);
            }

            to{
                transform: rotate(360deg);
            }
        }

        .circulo::after {
            content: '';
            position: absolute;
            top: 35px;
            right: 35px;
            bottom: 35px;
            left: 35px;
            border-radius: 50%;
            background-color: #fff;
        }

        .circulo span{
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(#e90000, #5c7bff, #44b5e3);
            border-radius: 50%;
        }

        .circulo span:nth-child(1){
            filter: blur(15px)
        }
        .circulo span:nth-child(2){
            filter: blur(15px)
        }
        .circulo span:nth-child(3){
            filter: blur(15px)
        }
        .circulo span:nth-child(4){
            filter: blur(15px)
        }
    </style>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="antialiased">
    <div class="min-h-screen bg-gray-100">
        @livewire('header');
        @livewire('funciones');
        <div class=" max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8  mt-20 ">
            <div class="text-purple-200 font-semibold text-center text-3xl w-full" id="proyectos">Interconectamos</div>
            <div>
                Alocandonos
                <div class="circulo">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
            <div class="w-full md:flex ">
                <x-funcion>
                    <x-slot name="ancho">48</x-slot>
                    <x-slot name="alto">48</x-slot>
                    <x-slot name="img">{{ asset('img/negocios.png') }}</x-slot>
                    <x-slot name="title">{{ __('Negocios exitosos') }}</x-slot>
                </x-funcion>
                <x-funcion>
                    <x-slot name="ancho">48</x-slot>
                    <x-slot name="alto">48</x-slot>
                    <x-slot name="img">{{ asset('img/inversionistas.png') }}</x-slot>
                    <x-slot name="title">{{ __('Inversionistas inteligentes') }}</x-slot>
                </x-funcion>
            </div>
        </div>
        <x-no-solo-ladrillos />
        <div class=" text-center text-blue-300 font-semibold text-xl my-16" id="enqueinvierte">
            Conoce los negocios en los que puedes invertir

            <div class="md:flex md:justify-center my-16 ">
                <div class=" h-52 w-96   bg-blue-300 rounded-3xl my-10 md:my-auto grid mx-auto md:mx-5">
                    <div class="font-extralight text-2xl w-32 mx-auto my-auto right-0 h-20">

                    </div>
                </div>
                <div class=" h-52 w-96 bg-blue-300 rounded-3xl my-10 md:my-auto grid mx-auto md:mx-0">
                    <div class="font-extralight text-2xl w-32 mx-auto my-auto right-0 h-20">

                    </div>
                </div>
            </div>
            <div class=" max-w-screen-xl mx-auto">
                <div class=" text-left text-purple-200 my-20">
                    Invertir es muy sencillo
                </div>
                <div class="grid grid-cols-2 grid-rows-2">
                    <div class="w-full">
                        <div class="my-10 bg-fondo-home-registrate  w-11/12 h-96 bg-contain bg-no-repeat mx-auto"></div>
                    </div>
                    <div class="w-full">
                        <div class="my-10 bg-fondo-home-elegir  w-11/12 h-96 bg-contain bg-no-repeat mx-auto"></div>
                    </div>
                    <div class="w-full">
                        <div class="my-10 bg-fondo-home-invierte w-11/12  h-96 bg-contain bg-no-repeat mx-auto"></div>
                    </div>
                    <div class="w-full mt-10">
                        <div class="my-14 bg-fondo-home-gana w-11/12 h-96 bg-contain bg-no-repeat mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>
        @livewire('footer')

        @livewireScripts
</body>

</html>
