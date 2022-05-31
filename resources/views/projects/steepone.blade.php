<x-app-layout>
    <div class=" w-full mx-auto py-10 sm:px-6 lg:px-8 bg-fixed bg-fondo-projects bg-cover">
        <div  class=" max-w-7xl  mx-auto hidden sm:flex  bg-white bg-cover rounded-md border-2 border-blue-600 font-cairo ">
             <x-menu-project :menu="request()->route()->getName()"/>
            {!! Form::open(['route' => 'steepone.store', 'atocomplete' => 'off', 'files' => true]) !!}
            <div class="w-full">
                <div class="">
                    <x-subtitle_form>
                        {{ __('Información del proyecto') }}
                    </x-subtitle_form>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::text('project[name]', old('project.name'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Nombre del Proyecto']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Asigna un nombre a tu proyecto, debe ser corto y claro. Ejemplo: "Área 404"') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::select('project[proyect_type_id]', $projecttypes, old('project.project_type_id'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full outline-none hover:bg-gray-hover']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Escoger el tipo de la lista') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::textarea('project[description]', old('project.description'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover', 'placeholder' => __('* Descripción del proyecto'), 'rows' => 5]) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my--5">
                        <x-help_form>
                            {{ __('Escribe en qué conciste tu proyecto; Máximo 600 caracteres') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 ml-3 flex text-center border-2 border-blue-600 bg-blue-600 py-3 text-white">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Características') }}
                        </div>
                        <div class="w-1/2">
                            {{ __('Descripción') }}
                        </div>
                    </div>
                    <div class=" w-1/3 mx-2">
                        <x-help_form>
                            {{ __('Detalla en qué consiste el proyecto, es decir describe sus principales atributos para convencer a los inversionistas de participar en tu proyecto.') }}
                        </x-help_form>
                    </div>

                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('* Opción 1') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::text('project[option1]', old('project.option1'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => 'Obligatorio']) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('* Opción 2') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::text('project[option2]', old('project.option2'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => 'Obligatorio']) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('* Opción 3') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::text('project[option3]', old('project.option3'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => 'Obligatorio']) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Opción 4') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::text('project[option4]', old('project.option4'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => 'Opcional']) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Opción 5') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::text('project[option5]', old('project.option5'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => 'Opcional']) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 my-5 mx-3 rounded-2xl border border-blue-600">
                        <div class="w-1/3 m-5">
                            {{ __('* Ubicación física') }}
                            {!! Form::text('project[location]', old('project.location'), ['class' => 'border-1 border-blue-600 rounded-xl mt-10 hover:bg-gray-hover   ', 'placeholder' => 'Dirección']) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 my-5">
                        <x-help_form>
                            {{ __('Marcar en el mapa la ubicación del proyecto') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="">
                    <x-subtitle_form>
                        <div>{{ __('Capital') }}</div>
                        {{ __('Desglosa los siguientes montos relacionados con el costo del proyecto y su origen:') }}
                    </x-subtitle_form>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::number('project[goal]', old('project.goal'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Costo total del Proyecto']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registra cuánto costará el proyecto completo, incluyendo el monto que tu aportarás.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::number('project[goal_two]', old('project.goal_two'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* ¿Cuánto será el monto de tu inversión?']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registra cuánto dinero aportarás al proyecto.') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 ml-3 flex text-center border-2 border-blue-600 bg-blue-600 py-1 text-white">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Tipo de aportación') }}
                        </div>
                        <div class="w-1/2">
                            {{ __('Monto') }}
                        </div>
                    </div>
                    <div class=" w-1/3 mx-2">
                        <x-help_form>
                            {{ __('Especifica si tu inversión corresponde a una propiedad, local, personal, etc.') }}
                        </x-help_form>
                    </div>

                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('* Opción 1') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[input1]', old('project.input1'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Opción 2') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[input2]', old('project.input2'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Opción 3') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[input3]', old('project.input3'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Opción 4') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[input4]', old('project.input4'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Opción 5') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[input5]', old('project.input5'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 ml-3 mt-5 flex text-center border-2 border-blue-600 bg-blue-600 py-1 text-white">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Origen de la inversión') }}
                        </div>
                        <div class="w-1/2">
                            {{ __('Monto') }}
                        </div>
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Especificar si es un préstamo, ahorro, reinversión.') }}
                        </x-help_form>
                    </div>

                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('* Opción 1') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[input_origin1]', old('project.input_origin1'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Opción 2') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[input_origin2]', old('project.input_origin2'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Opción 3') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[input_origin3]', old('project.input_origin3'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Opción 4') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[input_origin4]', old('project.input_origin4'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Opción 5') }}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[input_origin5]', old('project.input_origin5'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::number('project[request_max]', old('project.request_max'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Monto máximo solicitado']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar la cantidad de inversión ideal requerida para el proyecto. ') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::number('project[request_min]', old('project.request_min'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Monto mínimo  solicitado']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Registrar la cantidad de inversión mínima requerida para el proyecto. No puede ser menor del 20% del máximo.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        <label for="project_debt" class="cursor-pointer">
                            {!! Form::checkbox('project[debt]', old('project.debt'), false, ['class' => 'border-2 border-blue-600 w-5 h-5 mr-5', 'id' => 'project_debt']) !!}
                            {{ __('El proyecto tiene algún tipo de endeudamiento') }}
                        </label>
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Elegir si en caso de que el proyecto ya cuente con algún préstamo.') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 ml-3 flex text-center border-2 border-blue-600 bg-blue-600 py-1 text-white">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {{ __('Origen de la deuda') }}
                        </div>
                        <div class="w-1/2">
                            {{ __('Monto') }}
                        </div>
                    </div>
                    <div class=" w-1/3 mx-2">
                        <x-help_form>
                            {{ __('En caso de que si tenga deuda describir el monto y origen de la deuda. Es decir, escribir banco, préstamo familiar, asociados, etc.') }}
                        </x-help_form>
                    </div>

                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {!! Form::text('project[origin_debt1]', old('project.origin_debt1'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => 'Descripción de adeudo']) !!}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[amount_origin_debt1]', old('project.amount_origin_debt1'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {!! Form::text('project[origin_debt2]', old('project.origin_debt2'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => 'Descripción de adeudo']) !!}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[amount_origin_debt2]', old('project.amount_origin_debt2'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {!! Form::text('project[origin_debt3]', old('project.origin_debt3'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => 'Descripción de adeudo']) !!}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[amount_origin_debt3]', old('project.amount_origin_debt3'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {!! Form::text('project[origin_debt4]', old('project.origin_debt4'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => 'Descripción de adeudo']) !!}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[amount_origin_debt4]', old('project.amount_origin_debt4'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 flex text-center border-2 border-blue-600">
                        <div class="w-1/2 border-r-2 border-blue-600">
                            {!! Form::text('project[origin_debt5]', old('project.origin_debt5'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => 'Descripción de adeudo']) !!}
                        </div>
                        <div class="w-1/2">
                            {!! Form::number('project[amount_origin_debt5]', old('project.amount_origin_debt5'), ['class' => 'border-0 w-full hover:bg-gray-hover', 'placeholder' => "$"]) !!}
                        </div>
                    </div>
                    <div class=" w-1/3 "></div>
                </div>
                <div class="">
                    <x-subtitle_form>
                        {{ __('Inversión') }}
                    </x-subtitle_form>

                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        <label for="">
                            {{ __('Plazo para recabar la inversión.') }}
                            {!! Form::selectRange('project[estimated_term]', 1, 6, old('project.estimated_term'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover']) !!}
                        </label>
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('No puede superar los 6 meses ni ser menor a 1 mes.') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        <label for="">
                            {{ __('Plazo para ejecutar el proyecto') }}
                            {!! Form::selectRange('project[estimated_ejecution]', 1, 36, old('project.estimated_ejecution'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover']) !!}
                        </label>
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('No puede superar los 36 meses, ni ser menor a 6 meses incluyendo el tiempo para conseguir la inversión.') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        {!! Form::number('project[min_investment]', old('project.min_investment'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* Inversión mínima solicitada']) !!}
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Mínimo solicitado por inversionista, no puede ser menor a $1,000.00 ') }}
                        </x-help_form>
                    </div>
                </div>

                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        <div class=" grid grid-cols-4 text-center bg-blue-600 text-white py-1 ">
                            <div>{{ __('Concepto') }}</div>
                            <div>{{ __('Características') }}</div>
                            <div>{{ __('Monto') }}</div>
                            <div>{{ __('%') }}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Contratación de personal') }}</div>
                            <div>{!! Form::text('project[desgloce_personal]', old('project.desgloce_personal'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Característica']) !!}</div>
                            <div>{!! Form::number('project[amount_personal]', old('project.amount_personal'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Monto']) !!}</div>
                            <div>{!! Form::number('project[porcent_personal]', old('project.porcent_personal'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-2/3', 'placeholder' => '%']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Mano de obra') }}</div>
                            <div>{!! Form::text('project[desgloce_mobra]', old('project.desgloce_mobra'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Característica']) !!}</div>
                            <div>{!! Form::number('project[amount_mobra]', old('project.amount_mobra'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Monto']) !!}</div>
                            <div>{!! Form::number('project[porcent_mobra]', old('project.porcent_mobra'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-2/3', 'placeholder' => '%']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Insumos/Material') }}</div>
                            <div>{!! Form::text('project[desgloce_insumos]', old('project.desgloce_insumos'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Característica']) !!}</div>
                            <div>{!! Form::number('project[amount_insumos]', old('project.amount_insumos'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Monto']) !!}</div>
                            <div>{!! Form::number('project[porcent_insumos]', old('project.porcent_insumos'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-2/3', 'placeholder' => '%']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Equipo') }}</div>
                            <div>{!! Form::text('project[desgloce_equipo]', old('project.desgloce_equipo'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Característica']) !!}</div>
                            <div>{!! Form::number('project[amount_equipo]', old('project.amount_equipo'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Monto']) !!}</div>
                            <div>{!! Form::number('project[porcent_equipo]', old('project.porcent_equipo'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-2/3', 'placeholder' => '%']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Mobiliario') }}</div>
                            <div>{!! Form::text('project[desgloce_mobiliario]', old('project.desgloce_mobiliario'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Característica']) !!}</div>
                            <div>{!! Form::number('project[amount_mobiliario]', old('project.amount_mobiliario'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Monto']) !!}</div>
                            <div>{!! Form::number('project[porcent_mobiliario]', old('project.porcent_mobiliario'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-2/3', 'placeholder' => '%']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Construcción') }}</div>
                            <div>{!! Form::text('project[desgloce_construccion]', old('project.desgloce_construccion'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Característica']) !!}</div>
                            <div>{!! Form::number('project[amount_construccion]', old('project.amount_construccion'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Monto']) !!}</div>
                            <div>{!! Form::number('project[porcent_construccion]', old('project.porcent_construccion'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-2/3', 'placeholder' => '%']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Reparaciones') }}</div>
                            <div>{!! Form::text('project[desgloce_reparaciones]', old('project.desgloce_reparaciones'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Característica']) !!}</div>
                            <div>{!! Form::number('project[amount_reparaciones]', old('project.amount_reparaciones'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Monto']) !!}</div>
                            <div>{!! Form::number('project[porcent_reparaciones]', old('project.porcent_reparaciones'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-2/3', 'placeholder' => '%']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Arrendamiento') }}</div>
                            <div>{!! Form::text('project[desgloce_arrendamiento]', old('project.desgloce_arrendamiento'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Característica']) !!}</div>
                            <div>{!! Form::number('project[amount_arrendamiento]', old('project.amount_arrendamiento'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Monto']) !!}</div>
                            <div>{!! Form::number('project[porcent_arrendamiento]', old('project.porcent_arrendamiento'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-2/3', 'placeholder' => '%']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Adquisición de inmueble') }}</div>
                            <div>{!! Form::text('project[desgloce_inmueble]', old('project.desgloce_inmueble'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Característica']) !!}</div>
                            <div>{!! Form::number('project[amount_inmueble]', old('project.amount_inmueble'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Monto']) !!}</div>
                            <div>{!! Form::number('project[porcent_inmueble]', old('project.porcent_inmueble'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-2/3', 'placeholder' => '%']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Permisos y trámites') }}</div>
                            <div>{!! Form::text('project[desgloce_tramites]', old('project.desgloce_tramites'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Característica']) !!}</div>
                            <div>{!! Form::number('project[amount_tramites]', old('project.amount_tramites'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Monto']) !!}</div>
                            <div>{!! Form::number('project[porcent_tramites]', old('project.porcent_tramites'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-2/3', 'placeholder' => '%']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Software') }}</div>
                            <div>{!! Form::text('project[desgloce_software]', old('project.desgloce_software'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Característica']) !!}</div>
                            <div>{!! Form::number('project[amount_software]', old('project.amount_software'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Monto']) !!}</div>
                            <div>{!! Form::number('project[porcent_software]', old('project.porcent_software'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-2/3', 'placeholder' => '%']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Otros') }}</div>
                            <div>{!! Form::text('project[desgloce_otros]', old('project.desgloce_otros'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Característica']) !!}</div>
                            <div>{!! Form::number('project[amount_otros]', old('project.amount_otros'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => 'Monto']) !!}</div>
                            <div>{!! Form::number('project[porcent_otros]', old('project.porcent_otros'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-2/3', 'placeholder' => '%']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Total') }}</div>
                            <div>&nbsp;</div>
                            <div>{{ __('Monto Solicitado máximo') }}</div>
                            <div>{{ __('100%') }}</div>
                        </div>
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Escoger todos los conceptos que apliquen a su proyecto y desglosar las características de cada uno. El total debe coincidir con el monto máximo solicitado. ') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="">
                    <x-subtitle_form>
                        <div>{{ __('Ganancias') }}</div>
                        {{ __('Describe lo que se ofrece a los que inviertan en el proyecto.') }}
                    </x-subtitle_form>

                </div>

                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5">
                        <div class=" grid grid-cols-4 text-center bg-blue-600 text-white py-1 ">
                            <div>{{ __('Temporalidad') }}</div>
                            <div>{{ __('% de ganacia') }}</div>
                            <div></div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Anual') }}</div>
                            <div>{!! Form::text('project[porcent_anual]', old('project.porcent_anual'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => '%']) !!}</div>
                            <div>{!! Form::number('', '', ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => '']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Semestral') }}</div>
                            <div>{!! Form::text('project[porcent_semestral]', old('project.porcent_semestral'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => '%']) !!}</div>
                            <div>{!! Form::number('', '', ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => '']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Trimestral') }}</div>
                            <div>{!! Form::text('project[porcent_trimestral]', old('project.porcent_trimestral'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => '%']) !!}</div>
                            <div>{!! Form::number('', '', ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => '']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Bimestral') }}</div>
                            <div>{!! Form::text('project[porcent_bimestral]', old('project.porcent_bimestral'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => '%']) !!}</div>
                            <div>{!! Form::number('', '', ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => '']) !!}</div>
                        </div>
                        <div class=" grid grid-cols-4">
                            <div>{{ __('Desinversión') }}</div>
                            <div>{!! Form::text('project[porcent_desinversion]', old('project.porcent_desinversion'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => '%']) !!}</div>
                            <div>{!! Form::number('', '', ['class' => 'border-2 border-blue-600 hover:bg-gray-hover', 'placeholder' => '']) !!}</div>
                        </div>
                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Se puede elegir más de un concepto de temporalidad es decir puede dar ganancias trimestrales de cierto % y ganancia anual de otro porcentaje ó ganancias anuales y al final del proyecto un % más el monto de desinversión.') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5 flex">
                        <div class="w-1/2">
                            <label for="project_render">
                                {{ __('Fotografías o render') }}
                            </label>
                        </div>
                        <div class="w-1/2">
                            {!! Form::file('project[render]', ['class' => '', 'id' => 'project_render']) !!}
                        </div>

                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Subir pdf o jpeg') }}
                        </x-help_form>
                    </div>
                </div>
                <div class="flex">
                    <div class=" w-2/3 mx-3 my-5 flex">
                        <div class="w-1/2">
                            {!! Form::select('project[list_avala]', $docs, old('project.list_avala'), ['class' => 'border-2 border-blue-600 rounded rounded-full  outline-none hover:bg-gray-hover']) !!}
                        </div>
                        <div class="w-1/2">
                            {!! Form::file('project[doc_avala]', ['class' => '', 'id' => 'project_render']) !!}
                        </div>

                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        <x-help_form>
                            {{ __('Escoger de la lista el tipo de documento y agregar el pdf.') }}
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
