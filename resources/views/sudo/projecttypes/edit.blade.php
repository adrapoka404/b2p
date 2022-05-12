<x-app-layout>
    <x-form-section >
        <x-slot name="title">
            {{ __('Editar Tipo de proyecto en Catalogo') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Algun texto de ayuda si señor') }}
            <x-jet-validation-errors class="mb-4" />
        </x-slot>

        <x-slot name="form">
            {!! Form::model($projecttype, ['route' => ['projecttypes.update', $projecttype], 'method' => 'put']) !!}
            @include('sudo.projecttypes.partials.form')

        </x-slot>

        <x-slot name="actions">
            <div class="w-1/2">
                <x-link-cancel href="{{ route('projecttypes.index') }}">
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
