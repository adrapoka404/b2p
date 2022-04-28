<x-app-layout>
    <x-form-section >
        <x-slot name="title">
            {{ __('Editar Actividad en Catalogo') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Texto de ayuda para la edición de una nueva actividad economica') }}
            <x-jet-validation-errors class="mb-4" />
        </x-slot>

        <x-slot name="form">
            {!! Form::model($actividad, ['route'=> ['economicactivities.update', $actividad], 'method' => 'put']) !!}
            @include('economicactivities.partials.form')

        </x-slot>

        <x-slot name="actions">
            <div class="w-1/2">
                <x-link-cancel href="{{ route('economicactivities.index') }}">
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