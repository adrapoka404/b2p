<x-app-layout>
    <x-table-section>
        <x-slot name="title">{{__('Asignacion de Permisos a Roles')}}</x-slot>
        <x-slot name="description">{{__('Texto para las cosas generales de la lista de asignacion de permisos a los roles')}}</x-slot>
        <x-slot name="where">
            Imagen de la asignacio de permisos a los roles
           
        </x-slot>
        
        @livewire('sudo.rolepermission-index')
    </x-table-section>
</x-app-layout>
