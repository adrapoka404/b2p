<x-app-layout>
    <x-table-section>
        <x-slot name="title">{{__('Catalogo de actividades economicas')}}</x-slot>
        <x-slot name="description">{{__('Texto para las cosas generales de las tablas')}}</x-slot>
        <x-slot name="where">
            Imagen Catalogo Actividades economicasS
           
        </x-slot>
        
            @include('economicactivities.partials.table')    
        
    </x-table-section>
</x-app-layout>
