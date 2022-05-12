<div class="flex flex-row my-2">
    <div class="mx-5 w-1/3">
        {!! Form::label('investment', __('Monto a invertir'), []) !!}
        <x-help>{{ __('Texto de ayuda para el campo inversión') }}</x-help>
    </div>

    <div class="mx-5 w-2/3">
        {!! Form::text('investment[investment]', null, []) !!}
    </div>
</div>

<div class="flex flex-row text-center py-5">
    <div @click="openTab=5" :class="{ '-mb-px': openTab === 5 }" class="-mb-px mr-1 text-center w-1/2">
        <a :class="openTab === 5 ? activeClasses : inactiveClasses"
            class="bg-purple-200 rounded-full px-5 py-3 text-md font-quick leading-5 text-white hover:text-purple-200 font-semibold hover:bg-white focus:outline-none focus:text-white transition "
            href="#">
            {{ __('Volver') }}
        </a>
    </div>
    <div class="-mb-px mr-1 text-center w-1/2">
        <div @click="openTab=7" :class="{ '-mb-px': openTab === 7 }" class="mr-1">
            <a :class="openTab === 7 ? activeClasses : inactiveClasses"
                class="bg-purple-200 rounded-full px-5 py-3 text-sm font-quick font-medium leading-5 text-white hover:text-purple-200 hover:font-semibold hover:bg-white focus:outline-none focus:text-white transition "
                href="#">
                {{ __('Siguiente') }}
            </a>
        </div>
    </div>
</div>
