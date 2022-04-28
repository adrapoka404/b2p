<x-app-layout>
    <x-form-section >
        <x-slot name="title">
            {{ __('Editar Ingreso en Catalogo') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Texto de ayuda para la edición de un nuevo ingreso') }}
            <x-jet-validation-errors class="mb-4" />
        </x-slot>

        <x-slot name="form">
            {!! Form::model($ingreso, ['route'=> ['incomes.update', $ingreso], 'method' => 'put']) !!}
            @include('incomes.partials.form')

        </x-slot>

        <x-slot name="actions">
            <div class="w-1/2">
                <x-link-cancel href="{{ route('incomes.index') }}">
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