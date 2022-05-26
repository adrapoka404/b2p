<div class="flex flex-row my-2">
    <div class="mx-5 w-1-3">
        {!! Form::label('multimedia[links]', __('Links'), []) !!}
        <x-help>
            {{ __('Agregue los links necesarios de videos y/o sitios de su proyecto. puede agregar mas de un link separado por coma.') }}
        </x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::textarea('multimedia[links]', 'http://algoenlinea.com,http://otracosa.com.mx,https://mifacebook.com.mx', []) !!}
        @error('multimedia.links')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('multimedia1', __('Multimedia 1'), []) !!}
        <x-help>{{ __('Fotos descriptivas del proyecto. Mínimo tres, máximo diez fotos') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('multimedia[multimedia1]', ['accept'=>'image/*']) !!}
        @error('multimedia.multimedia1')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('multimedia2', __('Multimedia 2'), []) !!}
        <x-help>{{ __('Fotos descriptivas del proyecto. Mínimo tres, máximo diez fotos') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('multimedia[multimedia2]', ['accept'=>'image/*']) !!}
        @error('multimedia.multimedia2')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('multimedia3', __('Multimedia 3'), []) !!}
        <x-help>{{ __('Fotos descriptivas del proyecto. Mínimo tres, máximo diez fotos') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('multimedia[multimedia3]', ['accept'=>'image/*']) !!}
        @error('multimedia.multimedia3')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('multimedia4', __('Multimedia 4'), []) !!}
        <x-help>{{ __('Fotos descriptivas del proyecto. Mínimo tres, máximo diez fotos') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('multimedia[multimedia4]', ['accept'=>'image/*']) !!}
        @error('multimedia.multimedia4')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('multimedia5', __('Multimedia 5'), []) !!}
        <x-help>{{ __('Fotos descriptivas del proyecto. Mínimo tres, máximo diez fotos') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('multimedia[multimedia5]', ['accept'=>'image/*']) !!}
        @error('multimedia.multimedia5')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('multimedia6', __('Multimedia 6'), []) !!}
        <x-help>{{ __('Fotos descriptivas del proyecto. Mínimo tres, máximo diez fotos') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::file('multimedia[multimedia6]', ['accept'=>'image/*']) !!}
        @error('multimedia.multimedia6')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('multimedia7', __('Multimedia 7'), []) !!}
        <x-help>{{ __('Fotos descriptivas del proyecto. Mínimo tres, máximo diez fotos') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">

        {!! Form::file('multimedia[multimedia7]', ['accept'=>'image/*']) !!}
        @error('multimedia.multimedia7')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('multimedia8', __('Multimedia 8'), []) !!}
        <x-help>{{ __('Fotos descriptivas del proyecto. Mínimo tres, máximo diez fotos') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">

        {!! Form::file('multimedia[multimedia8]', ['accept'=>'image/*']) !!}
        @error('multimedia.multimedia8')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('multimedia9', __('Multimedia 9'), []) !!}
        <x-help>{{ __('Fotos descriptivas del proyecto. Mínimo tres, máximo diez fotos') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">

        {!! Form::file('multimedia[multimedia9]', ['accept'=>'image/*']) !!}
        @error('multimedia.multimedia9')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('multimedia10', __('Multimedia 10'), []) !!}
        <x-help>{{ __('Fotos descriptivas del proyecto. Mínimo tres, máximo diez fotos') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">

        {!! Form::file('multimedia[multimedia10]', ['accept'=>'image/*']) !!}
        @error('multimedia.multimedia10')
            <div class=" text-xs text-red-300">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex flex-row text-center py-5">
    <div @click="openTab=4" :class="{ '-mb-px': openTab === 4 }" class="-mb-px mr-1 text-center w-1/2">
        <a :class="openTab === 4 ? activeClasses : inactiveClasses"
            class="bg-purple-200 rounded-full px-5 py-3 text-md font-quick leading-5 text-white hover:text-purple-200 font-semibold hover:bg-white focus:outline-none focus:text-white transition "
            href="#">
            {{ __('Volver') }}
        </a>
    </div>
    <div class="-mb-px mr-1 text-center w-1/2">
        <div @click="openTab=6" :class="{ '-mb-px': openTab === 6 }" class="mr-1">
            <a :class="openTab === 6 ? activeClasses : inactiveClasses"
                class="bg-purple-200 rounded-full px-5 py-3 text-sm font-quick font-medium leading-5 text-white hover:text-purple-200 hover:font-semibold hover:bg-white focus:outline-none focus:text-white transition"
                href="#">
                {{ __('Siguiente') }}
            </a>
        </div>
    </div>
</div>
