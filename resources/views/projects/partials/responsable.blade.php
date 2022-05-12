<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('personal[name]', __('Nombre de persona responsable'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo nombre de persona responsable') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('personal[name]', 'Raymundo', []) !!}
        @error('personal.name')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('personal[firstname]', __('Apellido paterno'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo apellido paterno') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('personal[firstname]', 'Rivera', []) !!}
        @error('personal.firstname')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('personal[secondname]', __('Apellido materno'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo apellido materno') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('personal[secondname]', 'González', []) !!}
        @error('personal.secondname')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('personal[email]', __('Correo eléctronico'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo correo electronico') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('personal[email]', 'testeando@mail.com', []) !!}
        @error('personal.email')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('personal[birthday]', __('Fecha de nacimiento'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo fecha de nacimiento') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::date('personal[birthday]', now(), []) !!}
        @error('personal.birthday')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('personal[genere]', __('Genero'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo genero') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        <select name="personal[genere]" id="genere">
            <option value="">{{ __('Selecciona') }}</option>
            @foreach ($generes as $genere)
                @if (isset($project) && $project['personal']['genere'] == $genere->short)
                    <option value="{{ $genere['short'] }}" selected>{{ $genere['name'] }}</option>
                @else
                    <option value="{{ $genere['short'] }}" selected>{{ $genere['name'] }}</option>
                @endif
            @endforeach
        </select>
        @error('personal.genere')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('personal[mobile]', __('Movíl'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo Móvil') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('personal[mobile]', '5566778899', []) !!}
        @error('personal.mobile')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('personal[nationality]', __('Nacionalidad'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo Nacionalidads') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        <select name="personal[nationality]" id="nationality">
            <option value="">{{ __('Selecciona') }}</option>
            @foreach ($nationalities as $nationality)
                @if (isset($project) && $project['personal']['nationality'] == $nationality->name)
                    <option value="{{ $nationality['name'] }}" selected>{{ $nationality['name'] }}</option>
                @else
                    <option value="{{ $nationality['name'] }}" selected>{{ $nationality['name'] }}</option>
                @endif
            @endforeach
        </select>
        @error('personal.nationality')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('personal[curp]', __('CURP'), []) !!}
        <x-help>{{ __('Clave unica de registro de población... link a tramitar') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('personal[curp]', 'rigr870404hmcvny09', ['class' => 'uppercase']) !!}
        @error('personal.curp')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('personal[rfc]', __('RFC'), []) !!}
        <x-help>{{ __('Registro Federal del Contribuyente') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('personal[rfc]', 'rigr870704bg0', ['class' => 'uppercase']) !!}
        @error('personal.rfc')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('personal[economic_activity_id]', __('Actividad económica'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo actividad economica') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        <select name="personal[economic_activity_id]" id="economic_activity_id">
            <option value="">{{ __('Selecciona') }}</option>
            @foreach ($economicactivities as $ea)
                @if (isset($project) && $project['personal']['economic_activity_id'] == $ea->name)
                    <option value="{{ $ea['id'] }}" selected>{{ $ea['name'] }}</option>
                @else
                    <option value="{{ $ea['id'] }}" selected>{{ $ea['name'] }}</option>
                @endif
            @endforeach
        </select>
        @error('personal.economic_activity_id')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('personal[income_id]', __('Ingresos'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo ingresos') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        <select name="personal[income_id]" id="incomes">
            <option value="">{{ __('Selecciona') }}</option>
            @foreach ($incomes as $income)
                @if (isset($project) && $project['personal']['income'] == $income->name)
                    <option value="{{ $income['id'] }}" selected>{{ $income['name'] }}</option>
                @else
                    <option value="{{ $income['id'] }}" selected>{{ $income['name'] }}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
<div class="flex flex-row text-center py-5">
    <div @click="openTab=1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1 text-center w-1/2">
        <a :class="openTab === 1 ? activeClasses : inactiveClasses"
            class="bg-purple-200 rounded-full px-5 py-3 text-md font-quick leading-5 text-white hover:text-purple-200 font-semibold hover:bg-white focus:outline-none focus:text-white transition "
            href="#">
            {{ __('Volver') }}
        </a>
    </div>
    <div class="-mb-px mr-1 text-center w-1/2">
        <div @click="openTab=3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
            <a :class="openTab === 3 ? activeClasses : inactiveClasses"
                class="bg-purple-200 rounded-full px-5 py-3 text-md  font-quick leading-5 text-white hover:text-purple-200 font-semibold hover:bg-white focus:outline-none focus:text-white transition"
                href="#">
                {{ __('Siguiente') }}
            </a>
        </div>
    </div>
</div>
