<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('business_name', __('Razón Social'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo Razon social') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('enterprise[business_name]', 'Adraxia', []) !!}
        @error('enterprise.business_name')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('tradename', __('Normbre comercial'), []) !!}
        <x-help>{{ __('Texto de ayuda para el nombre comercial') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('enterprise[tradename]', 'Adraxia', []) !!}
        @error('enterprise.tradename')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('date_constitution', __('Fecha de constitucion'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo inversión') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::date('enterprise[date_constitution]', now(), []) !!}
        @error('enterprise.date_constitution')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('website', __('Sitio web'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo sitio web') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('enterprise[website]', 'https://beezper.imvdemexico.com/', []) !!}
        @error('enterprise.website')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('contact_person', __('Persona de contacto'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo persona de contacto') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('enterprise[contact_person]', 'Raymundo Rivera González', []) !!}
        @error('enterprise.contact_person')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('contact_mail', __('Correo de contacto'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo email de contacto') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('enterprise[contact_mail]', 'contacto@adraxia.com', []) !!}
        @error('enterprise.contact_mail')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('business_turn', __('Giro de empresa'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo inversión') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('enterprise[business_turn]', 'por definir', []) !!}
        @error('enterprise.business_turn')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('coordenadas', __('Coordenadas de sitio'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo coordenadas') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('enterprise[coordenadas]', '19.2772759,-99.6142546', []) !!}
        @error('enterprise.coordenadas')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('influence', __('Zona de influencia'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo inversión') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        <select name="enterprise[influence]" id="incluence">
            <option value="">{{ __('Selecciona') }}</option>
            @foreach ($influences as $influence)
                @if (isset($project) && $influence->id == $project['enterprise']['id'])
                    <option value="{{ $influence->id }}" selected>{{ $influence->name }}</option>
                @else
                    <option value="{{ $influence->id }}" selected>{{ $influence->name }}</option>
                @endif
            @endforeach
        </select>
        @error('enterprise.influence')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row text-center py-5">
    <div @click="openTab=6" :class="{ '-mb-px': openTab === 6 }" class="-mb-px mr-1 text-center w-1/2">
        <a :class="openTab === 6 ? activeClasses : inactiveClasses"
            class="bg-purple-200 rounded-full px-5 py-3 text-md font-quick leading-5 text-white hover:text-purple-200 font-semibold hover:bg-white focus:outline-none focus:text-white transition "
            href="#">
            {{ __('Volver') }}
        </a>
    </div>
    <div class="-mb-px mr-1 text-center w-1/2">
        {!! Form::submit('Guardar', ['class' => 'bg-green rounded-full px-5 py-3 text-md font-quick leading-5 text-white hover:text-green font-semibold hover:bg-white focus:outline-none focus:text-white transition']) !!}
    </div>
</div>
