<x-app-layout>
    <x-form-section >
        <x-slot name="title">
            {{ __('Agregar Permiso a Catalogo') }}
        </x-slot>

        <x-slot name="description">
            {{ __('El nombre del permiso debe ser la ruta que se debe proteger') }}
            <x-jet-validation-errors class="mb-4" />
        </x-slot>

        <x-slot name="form">
            {!! Form::open(['route' => 'permissions.store']) !!}
            @include('sudo.permissions.partials.form')

        </x-slot>

        <x-slot name="actions">
            <div class="w-1/2">
                <x-link-cancel href="{{ route('permissions.index') }}">
                    {{ __('Volver a lista') }}
                </x-nav-link>
            </div>
            <div class="w-1/2">
                <x-jet-button>
                    {{ __('Guardar') }}
                </x-jet-button>
               
                {!! Form::close() !!}
            </div>
        </x-slot>

    </x-form-section>
</x-app-layout>
