<x-app-layout>
    <x-table-section>
        <x-slot name="title">{{__('Creación de tipo d proyectos')}}</x-slot>
        <x-slot name="description">{{__('Texto para las cosas generales de las creación de tipos de proyectos')}}</x-slot>
        <x-slot name="where">
            Imagen de a seccion tipo de proyecto
           
        </x-slot>
        
        @include('sudo.projecttypes.partials.table')
    </x-table-section>
</x-app-layout>
