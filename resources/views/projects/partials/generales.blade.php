<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('is_working', __('¿Está funcionando?'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo "esta funcionando"') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::checkbox('is_working', null, true, []) !!}
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('name', __('Asigna un nombre'), []) !!}
        <x-help>{{ __('Asigna un nombre a tu proyecto dentro de la plataforma') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('name', 'Adraxia', []) !!}
        @error('name')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('annual_earnings', __('Ganancias anuales'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo ganancias anuales') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('annual_earnings', '1000000.00', []) !!}
        @error('annual_earnings')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('employees', __('Empleados'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo empeleados') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('employees', '100', []) !!}
        @error('employees')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('goal', __('Meta'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo Meta') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('goal', '500000.00', []) !!}
        @error('goal')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('estimated_term', __('Plazo estimado'), []) !!}
        <x-help>{{ __('El plazo estimado no puede superar los 36 meses') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::number('estimated_term', '36', ['min' => '6', 'max' => '36']) !!}
        @error('estimated_term')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('location', __('Ubicación física'), []) !!}
        <x-help>{{ __('El plazo estimado no puede superar los 36 meses') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('location', '19.2772759,-99.6142546', ['placeholder' => '19.2772759,-99.6142546']) !!}
        @error('location')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1-3">
        {!! Form::label('investment_breakdown', __('Desglose de inversión'), []) !!}
        <x-help>{{ __('Describen el uso de la cantidad y la inversión') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::textarea('investment_breakdown', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ad iure mollitia eveniet voluptas, amet ipsum beatae dolorum doloribus, itaque consectetur explicabo molestiae ex, aspernatur magnam dicta! Optio, quam deserunt.', []) !!}
        @error('investment_breakdown')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1-3">
        {!! Form::label('project_type_id ', __('Tipo de proyecto'), []) !!}
        <x-help>{{ __('Elige el tipo de proyecto') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        <select name="project_type_id" id="project_type_id">
            <option value="">{{ __('Selecciona tipo de proyecto') }}</option>
            @foreach ($projecttypes as $pt)
                @if (isset($project) && $pt->id == $project->project_type_id)
                    <option value="{{ $pt->id }}" selected>{{ $pt->name }}</option>
                @else
                    <option value="{{ $pt->id }}" selected>{{ $pt->name }}</option>
                @endif
            @endforeach
        </select>
        @error('project_type_id')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1-3">
        {!! Form::label('capital', __('Capital'), []) !!}
        <x-help>
            {{ __('Describe el Capital con el que cuentas: ¿Cuánto cuesta tu proyecto?, ¿Cuánto pides aquí? ¿Cómo obtuviste tu capital? ¿Tienes deuda? ¿Origen de los recursos?') }}
        </x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::textarea('capital', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ad iure mollitia eveniet voluptas, amet ipsum beatae dolorum doloribus, itaque consectetur explicabo molestiae ex, aspernatur magnam dicta! Optio, quam deserunt.', []) !!}
        @error('capital')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1-3">
        {!! Form::label('returns', __('Rendimientos'), []) !!}
        <x-help>{{ __('Describe lo que se ofrece a los que inviertan en el proyecto.') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::textarea('returns', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ad iure mollitia eveniet voluptas, amet ipsum beatae dolorum doloribus, itaque consectetur explicabo molestiae ex, aspernatur magnam dicta! Optio, quam deserunt.', []) !!}
        @error('returns')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row  my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('contract', __('Autorizo realizar mi contrato'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo "contrato"') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::checkbox('contract', 'Texto de ayuda para el campo "contrato"', true, []) !!}
        @error('contract')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row text-center py-5">
    <div class="mr-1 text-center w-1/2">

    </div>
    <div class="mr-1 text-center w-1/2">
        <div @click="openTab=2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
            <a :class="openTab === 2 ? activeClasses : inactiveClasses"
                class="bg-purple-200 rounded-full px-5 py-3 text-sm font-quick font-medium leading-5 text-white hover:text-purple-200 hover:font-semibold hover:bg-white focus:outline-none focus:text-white transition"
                href="#">
                {{ __('Siguiente') }}
            </a>
        </div>
    </div>
</div>
