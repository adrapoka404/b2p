<x-app-layout>
    <x-table-section>
        <x-slot name="title">{{__('Catalogo de ingresos')}}</x-slot>
        <x-slot name="description">{{__('Texto para las cosas generales de las tablas')}}</x-slot>
        <x-slot name="where">
            Imagen
           
        </x-slot>
        
            @include('incomes.partials.table')    
        
    </x-table-section>
</x-app-layout>
