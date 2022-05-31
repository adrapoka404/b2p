<x-app-layout>
    <div class=" w-full mx-auto py-10 sm:px-6 lg:px-8 bg-fixed bg-fondo-projects bg-cover">
        <div class=" max-w-7xl  mx-auto hidden sm:flex  bg-white bg-cover rounded-md border-2 border-blue-600 font-cairo ">
            <x-menu-project :menu="request()->route()->getName()"/>
            {!! Form::open(['route' => 'steeptwo.store', 'atocomplete' => 'off', 'files' => true]) !!}
            <div class="w-full">
                <div class="">
                    <x-subtitle_form>
                        {{ __('Información de la Empresa') }}
                    </x-subtitle_form>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::textarea('company[description]', old('company.description'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Descripción de la empresa'), 'rows' => 5]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Resume en un máximo de 600 caracteres el track record (trayectoria) de tu empresa, desde que fue constituida, si es una empresa familiar, proyectos exitosos concluidos, experiencia, ejemplos de la calidad de su trabajo, referencias de clientes, proveedores.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[razonsocial]', old('project.razonsocial'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Razón social']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('La razón social como aparece en el RFC incluyendo el tipo de empresa, es decir, si es Sociedad Anónima, Capital Variable, etc.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[nombrecomercial]', old('project.nombrecomercial'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Nombre comercial']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar el nombre comercial de la empresa') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::date('company[contitution]', old('company.constitution'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Fecha de constitución: Registrar 2 números para día, 2 números para mes y 4 números para el año. Debe coincidir con el acta constitutiva y el RFC') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[iniciofunciones]', old('project.iniciofunciones'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => 'Mes y año de inicio de funciones']) !!}
                        <div class="my-3">
                            <label for="noinfunction" class="my-3">
                                {!! Form::checkbox('copany[noinfuntion]', old('company.noinfunction'), old('company.noinfunction'), ['class' => 'border-2 border-blue-600 h-5 w-5 hover:bg-gray-hover', 'id' => 'noinfunction']) !!}
                                {{ __('Aún NO está en funciones ') }}
                            </label>
                        </div>
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar 2 números para mes y 4 números para el año ó marcar casilla Aún NO está en funciones.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::textarea('company[whynoinfunction]', old('company.whynoinfunction'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('En caso de NO estar en funcionamiento registrar el motivo'), 'rows' => 5]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('En caso de NO estar en funcionamiento registrar el motivo') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[rfc]', old('project.rfc'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* RFC']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Anotar el registro Federal de Contribuyentes de la empresa') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[siteweb]', old('project.siteweb'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Sitio web']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Anotar el sitio web de la empresa') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[fb]', old('project.fb'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => 'Facebook']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Anotar el Facebook de la empresa') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[tw]', old('project.tw'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => 'Twitter']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Anotar el Twitter de la empresa') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[yt]', old('project.yt'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => 'YouTube']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Anotar el YouTube de la empresa') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[tt]', old('project.tt'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => 'TikTok']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Anotar el TikTok de la empresa') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[inst]', old('project.inst'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => 'Instagram']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Anotar el Instagram de la empresa') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('company[type]', $companies, old('company.type'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Giro de la empresa: Escoger el tipo de la lista') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        @foreach ($years as $year)
                            <div class="flex">
                                <div>
                                    {{ __('Ganancias: ' . $year) }}
                                </div>
                                {!! Form::number('company[ganacias_' . $year . ']', old("company.ganancias_'.$year.'"), ['class' => 'border-2 border-blue-600 rounded rounded-full w-1/2 hover:bg-gray-hover']) !!}
                                <div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar las ganancias anuales de los últimos 3 años, en caso de NO estar en funcionamiento registrar las ganancias anuales esperadas.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::number('company[ganacias_esperadas]', old('company.ganancias_esperadas'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => 'Ganancias esperadas']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('En caso de NO estar en funcionamiento registrar las ganancias anuales esperadas.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::number('company[empleados]', old('company.empleados'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => 'Número de empleados']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar el número de empleados activos, en caso de NO estar en funcionamiento registrar el número de empleados que se necesitan.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="">
                    <x-subtitle_form>
                        <div>
                            {{ __('Dirección') }}
                        </div>
                        {{ __('Debe coincidir con el comprobante de domicilio.') }}

                    </x-subtitle_form>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[calle]', old('company.calle'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Calle']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar nombre de la Calle o Avenida') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[noexterior]', old('company.noexterior'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* No. Exterior']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar número exterior') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[nointerior]', old('company.nointerior'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => 'No. interior']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar número interior') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::number('company[cp]', old('company.cp'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Código postal']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Código postal') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('company[colonia]', [], false, ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Colonia') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[referencia]', old('company.referencia'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Referencia']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Referencia') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[telefono]', old('company.telefono'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Teléfono']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Se considerará como medio de contacto. Registrar los 10 dígitos sin espacios') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('company[correo]', old('company.correo'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Correo electrónico']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('* Se considerará como medio de contacto') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="">
                    <x-subtitle_form>
                        {{ __('Documentos de la empresa') }}

                    </x-subtitle_form>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[acta_constitutiva]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Copia simple, completa en tamaño carta y totalmente legible, sin tachaduras, enmiendas o cualquier otra alteración del Acta Constitutiva de la empresa, la cual deberá de contener el objeto social, inscrita en el Registro Público de Comercio y su última modificación. Deberá cargar la imagen del Acta Constitutiva de la empresa en formato pdf legible con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[carta_poder]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Carta Poder del representante legal. De ser necesario deberá cargar el documento en formato pdf legible con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[rfc]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Copia simple, completa y legible de la Solicitud de Inscripción en el Registro Federal de Contribuyentes. Deberá cargar la imagen del RFC de la empresa de no más de 3 meses en formato pdf legible con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[aviso_modificacion]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Último aviso de cambio o modificación. Deberá cargar la imagen en formato pdf legible con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[cedula]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Copia simple, completa, de fecha de impresión no mayor a 3 meses y legible de la Cédula de Registro Federal de Contribuyentes. Deberá cargar en formato pdf el documento con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[constancia_fiscal]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('CONSTANCIA DE SITUACIÓN FISCAL actualizada al mes en el que realiza la solicitud.  Deberá cargar en formato pdf el documento con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[declaracion_fiscal]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Copia de la Declaración Fiscal del ultomo ejercicio, con sus anexos completos; con acuse de recibo del SAT, a través de internet con la cadena original de pago o recibo del banco y sello de pagado ante institución bancaria. Deberá cargar en formato pdf el documento con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[declaracion_mensual]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Copia de la Declaración mensual del Impuesto sobre la Renta correspondiente a cualquiera de los últimos tres meses anteriores a la fecha de las propuestas, con recibo de banco y sello de pagado ante institución bancaria o acuse de recibo del SAT, a través de internet, con cadena original de pago. Deberá cargar en formato pdf el documento con un peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[comprobante_domicilio]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Documento Comprobante de domicilio actualizado al mes en el que realiza la solicitud. Deberá cargar la imagen del comprobante de domicilio de la empresa en formato pdf legible con un peso máximo de 2 MB. Deberá coincidir con la registrada en el RFC.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[datos_bancarios]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Hoja de Datos bancarios. Deberá cargar en formato pdf el documento con un peso máximo de 2MB.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[cv]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Currículum de la empresa en el cual se aprecien los siguientes puntos:') }}
                            <ul class="list-disc">
                                <li>{{ __('Antigüedad de la empresa.') }} </li>
                                <li>{{ __('Dirección, números telefónicos, correos electrónicos, página web.') }}</li>
                                <li>{{ __('Recursos Humanos con número de IMSS.') }}</li>
                            </ul>
                            {{ __('Principales clientes (cuatro mínimos) (indicar nombre de la empresa o dependencia, dirección, nombre del titular de la empresa receptora del servicio, números telefónicos y de fax y correo electrónico). Deberá cargar en formato pdf el documento con peso máximo de 2MB') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[foto_exterior]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Foto del exterior de la empresa. Subir en archivo jpeg o pdf') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::file('company[foto_interior]', []) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Foto del interior de la empresa. Subir en archivo jpeg o pdf') }}
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
