<x-app-layout>
    <div class=" w-full mx-auto py-10 sm:px-6 lg:px-8 bg-fixed bg-fondo-projects bg-cover">
        <div class=" max-w-7xl  mx-auto hidden sm:flex  bg-white bg-cover rounded-md border-2 border-blue-600 font-cairo ">
            <x-menu-project :menu="request()->route()->getName()"/>
            {!! Form::open(['route' => 'steepthree.store', 'atocomplete' => 'off', 'files' => true]) !!}
            <div class="w-full">
                <div class="">
                    <x-subtitle_form>
                        <div>
                            {{ __('Representante legar') }}
                        </div>
                        {{__('Información del Representante Legal de la empresa conforme al Acta Constitutiva o Poder Notarial Anexo en el apartado de Documentos de la Empresa')}}
                        

                    </x-subtitle_form>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('legal[nombre]', old('legal.name'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Nombre(s)')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('legal[apaterno]', old('legal.apaterno'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Apellido paterno')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('legal[amaterno]', old('legal.amaterno'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Apellido materno')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::date('legal[fnacimiento]', old('legal.fnacimiento'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Fecha de nacimiento')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Fecha de nacimiento: Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('legal[genero]', $generes, old('legal.genero'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Genero')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Genero: Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('legal[nacionalidad]', $nationalities, old('legal.nacionalidad'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Nacionalidad')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Nacionalidad: Como aparece en su Identificación oficial') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('legal[actividad]', $economicactivities, old('legal.actividad'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Actividad económica')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Actividad económica') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('legal[ingresos]', $incomes, old('legal.ingresos'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Ingresos')]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Ingresos') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('legal[curp]', old('legal.curp'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* CURP')]) !!}
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
                        {!! Form::text('legal[rfc]', old('legal.rfc'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* RFC')]) !!}
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
                        {!! Form::text('legal[calle]', old('legal.calle'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Calle']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar nombre de la Calle o Avenida') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('legal[noexterior]', old('legal.noexterior'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* No. Exterior']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar número exterior') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('legal[nointerior]', old('legal.nointerior'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => 'No. interior']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar número interior') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::number('legal[cp]', old('legal.cp'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Código postal']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Código postal') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('legal[colonia]', [], false, ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Colonia') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('legal[referencia]', old('legal.referencia'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Referencia']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Referencia') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('legal[telefono]', old('legal.telefono'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Teléfono de oficina']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Se considerará como medio de contacto. Registrar los 10 dígitos sin espacios') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('legal[movil]', old('legal.movil'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Teléfono Celular']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Se considerará como medio de contacto. Registrar los 10 dígitos sin espacios') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('legal[correo]', old('legal.correo'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Correo electrónico']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Se considerará como medio de contacto') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="">
                    <x-subtitle_form>
                            {{ __('Documentos del representante legal') }}

                    </x-subtitle_form>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('legal[identificacion]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Deberá cargar la imagen de la identificación oficial del representante legal en formato pdf legible con un peso máximo de 2MB. Sólo se acepta INE o pasaporte vigente.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('legal[curp]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Deberá cargar la imagen de la CURP del representante legal en formato pdf legible con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('legal[rfc]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Deberá cargar la imagen del RFC del representante legal en formato pdf legible con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('legal[doc_domicilio]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Deberá cargar la imagen del comprobante de domicilio de máximo 2 meses de antigüedad del representante legal en formato pdf legible con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('legal[opinion_cumplimiento]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Deberá cargar la imagen de la opinión de cumplimiento del SAT de máximo 2 meses de antigüedad del representante legal en formato pdf legible con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('legal[buro]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Deberá cargar la imagen de la opinión del Buró de Credito de máximo 2 meses de antigüedad del representante legal en formato pdf legible con un peso máximo de 2MB') }}
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
