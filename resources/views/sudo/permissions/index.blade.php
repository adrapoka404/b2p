<x-app-layout>
    <x-table-section>
        <x-slot name="title">{{__('Creación de permisos')}}</x-slot>
        <x-slot name="description">{{__('Texto para las cosas generales de las creación de permisos')}}</x-slot>
        <x-slot name="where">
            Imagen de los permisos
        </x-slot>
        
        @include('sudo.permissions.partials.table')
    </x-table-section>
</x-app-layout>
