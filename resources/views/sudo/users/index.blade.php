<x-app-layout>
    <x-table-section>
        <x-slot name="title">{{__('CLista de usuarios')}}</x-slot>
        <x-slot name="description">{{__('Texto para las cosas generales de la lista de usuarios')}}</x-slot>
        <x-slot name="where">
            Imagen de los usuarios
           
        </x-slot>
        
        @livewire('sudo.user-index')
    </x-table-section>
</x-app-layout>
