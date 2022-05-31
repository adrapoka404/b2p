<x-app-layout>
    <div class=" w-full mx-auto py-10 sm:px-6 lg:px-8 bg-fixed bg-fondo-projects bg-cover">
        <div class=" max-w-7xl  mx-auto hidden sm:flex  bg-white bg-cover rounded-md border-2 border-blue-600 font-cairo ">
            <x-menu-project :menu="request()->route()->getName()"/>
            {!! Form::open(['route' => 'steepfour.store', 'atocomplete' => 'off', 'files' => true]) !!}
            <div class="w-full">
                <div class="">
                    <x-subtitle_form>
                        <div>
                            {{ __('Responsable del proyecto') }}
                        </div>
                        {{__('Información del responsable del Proyecto asignado por la empresa, es quien dará seguimiento y atención a cualquier requerimiento durante todo el proceso.')}}
                        

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
                        {!! Form::text('responsable[nombre]', old('responsable.name'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Nombre(s)')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('responsable[apaterno]', old('responsable.apaterno'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Apellido paterno')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('responsable[amaterno]', old('responsable.amaterno'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Apellido materno')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::date('responsable[fnacimiento]', old('responsable.fnacimiento'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Fecha de nacimiento')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Fecha de nacimiento: Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('responsable[genero]', $generes, old('responsable.genero'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Genero')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Genero: Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('responsable[nacionalidad]', $nationalities, old('responsable.nacionalidad'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Nacionalidad')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Nacionalidad: Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('responsable[actividad]', $economicactivities, old('responsable.actividad'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Actividad económica')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Actividad económica') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('responsable[ingresos]', $incomes, old('responsable.ingresos'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Ingresos')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Ingresos') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('responsable[curp]', old('responsable.curp'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* CURP')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Clave única de registro de población... ') }}
                            <div>
                                <a href="https://www.gob.mx/curp/" target="_blank" class="cursor-pinter text-blue-300" >Tramitar</a>
                            </div>
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('responsable[rfc]', old('responsable.rfc'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* RFC')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registro Federal del Contribuyente') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="">
                    <x-subtitle_form>
                            {{ __('Datos de contacto') }}

                    </x-subtitle_form>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('responsable[calle]', old('responsable.calle'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Calle']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar nombre de la Calle o Avenida') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('responsable[noexterior]', old('responsable.noexterior'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* No. Exterior']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar número exterior') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('responsable[nointerior]', old('responsable.nointerior'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => 'No. interior']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar número interior') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::number('responsable[cp]', old('responsable.cp'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Código postal']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Código postal') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('responsable[colonia]', [], false, ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Colonia') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('responsable[referencia]', old('responsable.referencia'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Referencia']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Referencia') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('responsable[telefono]', old('responsable.telefono'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Teléfono de oficina']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Se considerará como medio de contacto. Registrar los 10 dígitos sin espacios') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('responsable[movil]', old('responsable.movil'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Teléfono Celular']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Se considerará como medio de contacto. Registrar los 10 dígitos sin espacios') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('responsable[correo]', old('responsable.correo'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Correo electrónico']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Se considerará como medio de contacto') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="">
                    <x-subtitle_form>
                            {{ __('Documentos del respondable del proyecto') }}

                    </x-subtitle_form>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('responsable[identificacion]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Deberá cargar la imagen de la identificación oficial del representante del proyecto en formato pdf legible con un peso máximo de 2MB. Sólo se acepta INE o pasaporte vigente.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('responsable[curp]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Deberá cargar la imagen de la CURP del representante del proyecto en formato pdf legible con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('responsable[rfc]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Deberá cargar la imagen del RFC del representante del proyecto en formato pdf legible con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('responsable[doc_domicilio]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Deberá cargar la imagen del comprobante de domicilio de máximo 2 meses de antigüedad del representante del proyecto en formato pdf legible con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('responsable[opinion_cumplimiento]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Deberá cargar la imagen de la opinión de cumplimiento del SAT de máximo 2 meses de antigüedad del representante del proyecto en formato pdf legible con un peso máximo de 2MB') }}
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
