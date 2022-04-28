<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="text-purple-200 font-semibold text-center text-3xl w-full" id="funciona">¿Cómo funciona?</div>
    <div class="flex flex-col md:flex-row items-center my-5">
        <x-funcion>
            <x-slot name="ancho">48</x-slot>
            <x-slot name="alto">48</x-slot>
            <x-slot name="img">{{asset('img/seleccionados.png')}}</x-slot>
            <x-slot name="title">{{__('Negocios seleccionados')}}</x-slot>
        </x-funcion>
        <x-funcion>
            <x-slot name="ancho">36</x-slot>
            <x-slot name="alto">36</x-slot>
            <x-slot name="img">{{asset('img/rendimientos.png')}}</x-slot>
            <x-slot name="title">{{__('Mayores rendimientos')}}</x-slot>
        </x-funcion>
        <x-funcion>
            <x-slot name="ancho">36</x-slot>
            <x-slot name="alto">36</x-slot>
            <x-slot name="img">{{asset('img/riesgo.png')}}</x-slot>
            <x-slot name="title">{{__('Tú eliges el nivel de riesgo')}}</x-slot>
        </x-funcion>
        
    </div>

    <div class="w-full text-purple-200 text-center font-extralight text-xl mt-28 ">
        <a href="#" class="text-purple-200 underline underline-offset-4 ">Más información</a>
    </div>    
</div>
