<x-app-layout>
    <div class=" w-full mx-auto py-10 sm:px-6 lg:px-8 bg-fixed bg-fondo-projects bg-cover">
        <div class=" max-w-7xl  mx-auto hidden sm:flex  bg-white bg-cover rounded-md border-2 border-blue-600 font-cairo ">
            <x-menu-project :menu="request()->route()->getName()"/>
            {!! Form::open(['route' => 'steepfour.store', 'atocomplete' => 'off', 'files' => true]) !!}
            <div class="w-full">
                <div class="">
                    <x-subtitle_form>
                        <div>
                            {{ __('Contrato') }}
                        </div>
                    </x-subtitle_form>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        <label for="thesame" class="cursor-pointer">
                        {!! Form::checkbox('responsable[thesame]', old('responsable.thesame'), old('responsable.thesame'), ['class' => 'border-2 border-blue-600  w-5 h-5 hover:bg-gray-hover', "id" => "thesame"]) !!}
                            {{__('Marcar en caso de que el Representante Legal y el Responsable del Proyecto sean la  misma persona.')}}
                    </label>
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('responsable[buro]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Deberá cargar la imagen de la opinión del Buró de Credito de máximo 2 meses de antigüedad del representante del proyecto en formato pdf legible con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">

                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        {!! Form::submit('Guardar avance', ['class' => 'bg-red-700 font-cairo text-white font-semibold rounded-full mx-3 my-1 px-5 py-3 text-sm cursor-pointer']) !!}
                        {!! Form::submit('Siguiente', ['class' => 'bg-red-700 font-cairo text-white font-semibold rounded-full mx-3 my-1 px-5 py-3 text-sm cursor-pointer']) !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
