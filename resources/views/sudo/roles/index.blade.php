<x-app-layout>
    <x-table-section>
        <x-slot name="title">{{__('Asignacion de roless')}}</x-slot>
        <x-slot name="description">{{__('Texto para las cosas generales de las asignacion de rolas')}}</x-slot>
        <x-slot name="where">
            Imagen de los roles
           
        </x-slot>
        
        @include('sudo.roles.partials.table')
    </x-table-section>
</x-app-layout>
