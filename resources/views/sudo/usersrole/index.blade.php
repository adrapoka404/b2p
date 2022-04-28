<x-app-layout>
    <x-table-section>
        <x-slot name="title">{{__('Asignacion de Roles de usuarios')}}</x-slot>
        <x-slot name="description">{{__('Texto para las cosas generales de la lista de asignacion de roles de usuarios')}}</x-slot>
        <x-slot name="where">
            Imagen de la asignacio de roles de usuarios
           
        </x-slot>
        
        @livewire('sudo.userrol-index')
    </x-table-section>
</x-app-layout>
