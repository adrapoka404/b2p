<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('address[address]', __('Calle'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo calle') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('address[address]', 'Emilio carranza', []) !!}
        @error('address.address')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('address[ext]', __('Num. Exterior'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo numero exterior') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('address[ext]', '2', []) !!}
        @error('address.ext')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('address[int]', __('Num. Interior'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo numero interior') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('address[int]', 'na', []) !!}
        @error('address.int')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('address[zipcode]', __('Codigo Postal'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo codigo postal') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('address[zipcode]', '56970', ['id' => 'zipcode']) !!}
        @error('address.zipcode')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('address[suburb]', __('Colonia'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo colonia') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('address[suburb]', 'San francisco', []) !!}
        @error('address.suburb')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('address[municipaly]', __('Municipio'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo mujnicipio') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('address[municipaly]', 'Atlautla', []) !!}
        @error('address.municipaly')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('address[state]', __('Estado'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo Estado') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('address[state]', 'México', []) !!}
        @error('address.state')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('address[country]', __('País'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo País') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('address[country]', 'México', []) !!}
        @error('address.country')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row text-center py-5">
    <div @click="openTab=2" :class="{ '-mb-px': openTab === 2 }" class="-mb-px mr-1 text-center w-1/2">
        <a :class="openTab === 2 ? activeClasses : inactiveClasses"
            class="bg-purple-200 rounded-full px-5 py-3 text-md font-quick leading-5 text-white hover:text-purple-200 font-semibold hover:bg-white focus:outline-none focus:text-white transition "
            href="#">
            {{ __('Volver') }}
        </a>
    </div>
    <div class="-mb-px mr-1 text-center w-1/2">
        <div @click="openTab=4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
            <a :class="openTab === 4 ? activeClasses : inactiveClasses"
                class="bg-purple-200 rounded-full px-5 py-3 text-sm font-quick font-medium leading-5 text-white hover:text-purple-200 hover:font-semibold hover:bg-white focus:outline-none focus:text-white transition"
                href="#">
                {{ __('Siguiente') }}
            </a>
        </div>
    </div>
</div>
