<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('url_ine', __('INE'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo nombre de persona responsable') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('documents[url_ine]', ['accept'=>'application/pdf']) !!}
        @error('documents.url_ine')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('url_curp', __('CURP'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo nombre de persona responsable') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('documents[url_curp]', ['accept'=>'application/pdf']) !!}
        @error('documents.url_curp')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('url_rfc', __('RFC'), ['accept'=>'application/pdf']) !!}
        <x-help>{{ __('Texto de ayuda para el campo nombre de persona responsable') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('documents[url_rfc]', ['accept'=>'application/pdf']) !!}
        @error('documents.url_rfc')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('url_home', __('Comprobante de domicilio'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo nombre de persona responsable') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('documents[url_home]', ['accept'=>'application/pdf']) !!}
        @error('documents.url_home')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('url_tax_situation', __('Situacion fiscal'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo nombre de persona responsable') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('documents[url_tax_situation]', ['accept'=>'application/pdf']) !!}
        @error('documents.url_tax_situation')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('url_bureau_report', __('Reporte de credito'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo nombre de persona responsable') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('documents[url_bureau_report]', ['accept'=>'application/pdf']) !!}
        @error('documents.url_bureau_report')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('url_collateral', __('Colateral'), []) !!}
        <x-help>{{ __('propiedad o aval (propiedad sin gravamen, algo a nombre de algún socio)') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('documents[url_collateral]', ['accept'=>'application/pdf']) !!}
        @error('documents.url_collateral')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row text-center py-5">
    <div @click="openTab=3" :class="{ '-mb-px': openTab === 3 }" class="-mb-px mr-1 text-center w-1/2">
        <a :class="openTab === 3 ? activeClasses : inactiveClasses"
            class="bg-purple-200 rounded-full px-5 py-3 text-md font-quick leading-5 text-white hover:text-purple-200 font-semibold hover:bg-white focus:outline-none focus:text-white transition "
            href="#">
            {{ __('Volver') }}
        </a>
    </div>
    <div class="-mb-px mr-1 text-center w-1/2">
        <div @click="openTab=5" :class="{ '-mb-px': openTab === 5 }" class="mr-1">
            <a :class="openTab === 5 ? activeClasses : inactiveClasses"
                class="bg-purple-200 rounded-full px-5 py-3 text-sm font-quick font-medium leading-5 text-white hover:text-purple-200 hover:font-semibold hover:bg-white focus:outline-none focus:text-white transition"
                href="#">
                {{ __('Siguiente') }}
            </a>
        </div>
    </div>
</div>
