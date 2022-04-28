<x-app-layout>
    <x-form-section>
        <x-slot name="title">
            {{ __('Editar Permisos del Rol: ') . ' ' . $rol->name }}
        </x-slot>

        <x-slot name="description">
            {{ __('Texto de ayuda para la asignacion de permisos de un Role') }}
            <x-jet-validation-errors class="mb-4" />
            <x-info />
        </x-slot>

        <x-slot name="form">
            {!! Form::model($rol, ['route' => ['rolespermission.update', $rol], 'method' => 'put']) !!}
            @include('sudo.rolepermissions.partials.form')

        </x-slot>

        <x-slot name="actions">
            <div class="w-1/2">
                <x-link-cancel href="{{ route('rolespermission.index') }}">
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
