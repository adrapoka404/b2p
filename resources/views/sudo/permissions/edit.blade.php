<x-app-layout>
    <x-form-section >
        <x-slot name="title">
            {{ __('Editar Catalogo Permisos') }}
        </x-slot>

        <x-slot name="description">
            {{ __('El nombre del permiso debe ser la ruta que se debe proteger') }}
            <x-jet-validation-errors class="mb-4" />
        </x-slot>

        <x-slot name="form">
            {!! Form::model($permiso, ['route'=> ['permissions.update', $permiso], 'method' => 'put']) !!}
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
                    {{ __('Editar') }}
                </x-jet-button>
               
                {!! Form::close() !!}
            </div>
        </x-slot>

    </x-form-section>
</x-app-layout>