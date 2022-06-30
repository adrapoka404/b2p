    <div class=" mx-5">
        <x-subtitle_form>
            {{ __('Información del proyecto') }}
        </x-subtitle_form>
    </div>
    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5">
            {!! Form::text('project[name]', old('project.name'), ['class' => 'border-2  border-blue-600 rounded rounded-full w-full hover:bg-gray-hover text-black', 'placeholder' => '* Nombre del Proyecto']) !!}
            @error('project.name')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('Asigna un nombre a tu proyecto, debe ser corto y claro. Ejemplo: "Área 404"') }}
            </x-help_form>
        </div>
    </div>
    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5">
            <select name="project[project_type_id]"
                class="border-2 border-blue-600 rounded-full w-full outline-none text-black hover:bg-gray-hover">
                <option>{{ __('Tipo de proyecto') }}</option>
                @foreach ($projecttypes as $pt)
                    @if ($pt->id == old('project.project_type_id'))
                        <option value="{{ $pt->id }}" selected>{{ $pt->name }}</option>
                    @else
                        <option value="{{ $pt->id }}">{{ $pt->name }}</option>
                    @endif
                @endforeach
            </select>
            @foreach ($projecttypes as $pt)
            @endforeach
            @error('project.project_type_id')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('Escoger el tipo de la lista') }}
            </x-help_form>
        </div>
    </div>
    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5">
            {!! Form::textarea('project[description]', old('project.description'), ['class' => 'border-2 border-blue-600 rounded rounded-2xl w-full hover:bg-gray-hover text-black', 'placeholder' => __('* Descripción del proyecto'), 'rows' => 5, 'id'=>'text_description']) !!}
            <span id="conteo_description">600</span>
            @error('project.description')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
        <div class=" w-1/3 mx-2 my--5">
            <x-help_form>
                {{ __('Escribe en qué conciste tu proyecto; Máximo 600 caracteres') }}
            </x-help_form>
        </div>
    </div>
    <div class="flex mx-5">

        <div class=" w-2/3 ml-3 text-center border-2 border-blue-600 bg-blue-600 py-3 text-white">
            <div class="w-full border-b-white border-b-2">
                {{ __('Características') }}
            </div>
            <div class="w-full flex">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {{ __('Característica') }}
                </div>
                <div class="w-1/2">
                    {{ __('Descripción') }}
                </div>
            </div>
            <div class="w-full flex  my-1">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[options][txt1]', old('project.options.txt1'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Grandes rendimientos']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::text('project[options][value1]', old('project.options.value1'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => '2% anual']) !!}
                </div>
            </div>
            <div class="w-full flex  my-1">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[options][txt2]', old('project.options.txt2'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => '* Grandes rendimientos']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::text('project[options][value2]', old('project.options.value2'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => '2% anual']) !!}
                </div>
            </div>
            <div class="w-full flex my-1">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[options][txt3]', old('project.options.txt3'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => '* Grandes rendimientos']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::text('project[options][value3]', old('project.options.value3'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => '2% anual']) !!}
                </div>
            </div>
            <div class="w-full flex my-1" style="display: none" id="divCaracteristica4">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[options][txt4]', old('project.options.txt4'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Grandes rendimientos']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::text('project[options][value4]', old('project.options.value4'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => '2% anual']) !!}
                </div>
            </div>
            <div class="w-full flex my-1" style="display: none" id="divCaracteristica5">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[options][txt5]', old('project.options.txt5'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Grandes rendimientos']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::text('project[options][value5]', old('project.options.value5'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => '2% anual']) !!}
                </div>
            </div>
            <div class="w-full flex my-1 ">
                <div class="w-full" id='masCaracteristicas'>
                    <div
                        class=" bg-blue-400 shadow-lg shadow-blue-500 text-center items-center cursor-pointer">
                        {{ __('Agregar carcaterística') }}</div>
                </div>
                <div class="w-full" id='menosCaracteristicas' style="display: none">
                    <div
                        class=" bg-blue-400 shadow-lg shadow-blue-500 text-center items-center cursor-pointer">
                        {{ __('Quitar carcaterística') }}</div>
                </div>
            </div>

        </div>
        <div class=" w-1/3 mx-2">
            <x-help_form>
                {{ __('Detalla en qué consiste el proyecto, es decir describe sus principales atributos para convencer a los inversionistas de participar en tu proyecto.') }}
            </x-help_form>

            @error('project.options.txt1')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.options.value1')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            @error('project.options.txt2')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.options.value2')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            @error('project.options.txt3')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.options.value3')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            @error('project.options.txt4')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.options.value4')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            @error('project.options.txt5')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.options.value5')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

        </div>

    </div>




    <div class="flex mx-5">
        <div class=" w-2/3 my-5 mx-3 rounded-2xl border border-blue-600">
            <div class="w-1/3 m-5">
                {{ __('* Ubicación física') }}
                {!! Form::text('project[location]', old('project.location'), ['class' => 'border-1 border-blue-600 rounded-xl mt-10 hover:bg-gray-hover text-black  ', 'placeholder' => 'Dirección']) !!}
            </div>
        </div>
        <div class=" w-1/3 my-5">
            <x-help_form>
                {{ __('Marcar en el mapa la ubicación del proyecto') }}
            </x-help_form>
            @error('project.location')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
    </div>
    <div class=" mx-5">
        <x-subtitle_form>
            <div>{{ __('Capital') }}</div>
            {{ __('Desglosa los siguientes montos relacionados con el costo del proyecto y su origen:') }}
        </x-subtitle_form>
    </div>
    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5">
            {!! Form::number('project[goal]', old('project.goal'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover text-black', 'placeholder' => '* Costo total del Proyecto']) !!}
            @error('project.goal')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('Registra cuánto costará el proyecto completo, incluyendo el monto que tu aportarás.') }}
            </x-help_form>
            @error('project.goal')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
    </div>
    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5">
            {!! Form::number('project[goal_two]', old('project.goal_two'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover', 'placeholder' => '* ¿Cuánto será el monto de tu inversión?']) !!}
            @error('project.goal_two')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('Registra cuánto dinero aportarás al proyecto.') }}
            </x-help_form>
            @error('project.goal_two')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
    </div>

    <div class="flex mx-5">
        <div
            class=" w-2/3 ml-3 flex flex-wrap text-center border-2 border-blue-600 bg-blue-600 py-1 text-white">
            <div class="w-full border-r-2 border-blue-600">
                {{ __('Aportaciones') }}
            </div>
            <div class="w-1/2 border-r-2 border-blue-600">
                {{ __('Tipo de aportación') }}
            </div>
            <div class="w-1/2">
                {{ __('Monto') }}
            </div>
            <div class="w-full flex border-r-2 border-blue-600 my-1">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[inputs][txt1]', old('project.inputs.txt1'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => '* Opción 1']) !!}
                </div>
                <div class="w-1/2 ">
                    {!! Form::number('project[inputs][value1]', old('project.inputs.value1'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>
            <div class="w-full flex border-r-2 border-blue-600 my-1" id="hideInput2" style="display:none">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[inputs][txt2]', old('project.inputs.txt2'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Opción 2']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[inputs][value2]', old('project.inputs.value2'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>
            <div class="w-full flex border-r-2 border-blue-600 my-1" id="hideInput3" style="display:none">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[inputs][txt3]', old('project.inputs.txt3'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Opción 3']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[inputs][value3]', old('project.inputs.value3'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>

            <div class="w-full flex border-r-2 border-blue-600 my-1" id="hideInput4" style="display:none">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[inputs][txt4]', old('project.inputs.txt4'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Opción 4']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[inputs][value4]', old('project.inputs.value4'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>
            <div class="w-full flex border-r-2 border-blue-600 my-1" id="hideInput5" style="display:none">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[inputs][txt5]', old('project.inputs.txt5'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Opción 5']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[inputs][value5]', old('project.inputs.value5'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>

            <div class="w-full flex my-1 ">
                <div class="w-full" id='masAportaciones'>
                    <div
                        class=" bg-blue-400 shadow-lg shadow-blue-500 text-center items-center cursor-pointer">
                        {{ __('Agregar aportación') }}</div>
                </div>
                <div class="w-full" id='menosAportaciones' style="display: none">
                    <div
                        class=" bg-blue-400 shadow-lg shadow-blue-500 text-center items-center cursor-pointer">
                        {{ __('Quitar aportación') }}</div>
                </div>
            </div>
        </div>
        <div class=" w-1/3 mx-2">
            <x-help_form>
                {{ __('Especifica si tu inversión corresponde a una propiedad, local, personal, etc.') }}
            </x-help_form>

            @error('project.inputs.txt2')
                <x-validation-error>{{ $message }}</x-validation-error>
                @error('project.inputs.txt1')
                    <x-validation-error>{{ $message }}</x-validation-error>
                @enderror
                @error('project.inputs.value1')
                    <x-validation-error>{{ $message }}</x-validation-error>
                @enderror

            @enderror
            @error('project.inputs.value2')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            @error('project.inputs.txt3')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.inputs.value3')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            @error('project.inputs.txt4')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.inputs.value4')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.inputs.txt5')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.inputs.value5')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>

    </div>

    <div class="flex mx-5">
        <div
            class=" w-2/3 ml-3 mt-5 flex flex-wrap text-center border-2 border-blue-600 bg-blue-600 py-1 text-white">
            <div class="w-full border-r-2 border-blue-600">
                {{ __('Inversión') }}
            </div>
            <div class="w-1/2 border-r-2 border-blue-600">
                {{ __('Origen de la inversión') }}
            </div>
            <div class="w-1/2">
                {{ __('Monto') }}
            </div>
            <div class="w-full flex border-r-2 border-blue-600 my-1">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[origins][txt1]', old('project.origins.txt1'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => '* Opción 1']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[origins][value1]', old('project.origins.value1'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>
            <div class="w-full flex border-r-2 border-blue-600 my-1" id="hideOrigin2" style="display: none">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[origins][txt2]', old('project.origins.txt2'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Opción 2']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[origins][value2]', old('project.origins.value2'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>
            <div class="w-full flex border-r-2 border-blue-600 my-1" id="hideOrigin3" style="display: none">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[origins][txt3]', old('project.origins.txt3'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Opción 3']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[origins][value3]', old('project.origins.value3'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>
            <div class="w-full flex border-r-2 border-blue-600 my-1" id="hideOrigin4" style="display: none">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[origins][txt4]', old('project.origins.txt4'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Opción 4']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[origins][value4]', old('project.origins.value4'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>
            <div class="w-full flex border-r-2 border-blue-600 my-1" id="hideOrigin5" style="display: none">
                <div class="w-1/2 border-r-2 border-blue-600">
                    {!! Form::text('project[origins][txt5]', old('project.origins.txt5'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Opción 5']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[origins][value5]', old('project.origins.value5'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>
            <div class="w-full flex my-1 ">
                <div class="w-full" id='masOrigins'>
                    <div
                        class=" bg-blue-400 shadow-lg shadow-blue-500 text-center items-center cursor-pointer">
                        {{ __('Agregar origen') }}</div>
                </div>
                <div class="w-full" id='menosOrigins' style="display: none">
                    <div
                        class=" bg-blue-400 shadow-lg shadow-blue-500 text-center items-center cursor-pointer">
                        {{ __('Quitar origen') }}</div>
                </div>
            </div>

        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('Especificar si es un préstamo, ahorro, reinversión.') }}
            </x-help_form>
            @error('project.origins.txt1')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.origins.value1')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.origins.txt2')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.origins.value2')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.origins.txt3')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.origins.value3')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.origins.txt4')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.origins.value4')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.origins.txt5')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.origins.value5')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>

    </div>

    <div class=" mx-5">
        <x-subtitle_form>
            <div>{{ __('Monto solicitado a la plataforma') }}</div>
        </x-subtitle_form>
    </div>
    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5">
            {!! Form::number('project[request_max]', old('project.request_max'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover text-black', 'placeholder' => '* Monto máximo solicitado', 'id' => 'maxAmount']) !!}
        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('Registrar la cantidad de inversión ideal requerida para el proyecto. ') }}
            </x-help_form>
        </div>
    </div>
    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5">
            {!! Form::number('project[request_min]', old('project.request_min'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover text-black', 'placeholder' => '* Monto mínimo  solicitado', 'id' => 'minAmount']) !!}
        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('Registrar la cantidad de inversión mínima requerida para el proyecto. No puede ser menor del 20% del máximo.') }}
            </x-help_form>
        </div>
    </div>
    <div class=" mx-5">
        <x-subtitle_form>
            <div>{{ __('Deuda') }}</div>
        </x-subtitle_form>
    </div>
    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5">
            <label for="project_debt" class="cursor-pointer">
                {!! Form::checkbox('project[debt]', old('project.debt'), false, ['class' => 'border-2 border-blue-600 w-5 h-5 mr-5 ', 'id' => 'project_debt']) !!}
                {{ __('El proyecto tiene algún tipo de endeudamiento') }}
            </label>
        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('Elegir si en caso de que el proyecto ya cuente con algún préstamo.') }}
            </x-help_form>
        </div>
    </div>

    <div class="flex mx-5" style="display: none" id="divDeuda">
        <div
            class=" w-2/3 ml-3 flex flex-wrap text-center border-2 border-blue-600 bg-blue-600 py-1 text-white">
            <div class="w-full">
                {{ __('Deuda') }}
            </div>
            <div class="w-1/2 border-r-2 border-blue-600">
                {{ __('Origen de la deuda') }}
            </div>
            <div class="w-1/2">
                {{ __('Monto') }}
            </div>
            <div class="w-full flex my-1">
                <div class="w-1/2 border-r-2 border-blue-600" >
                    {!! Form::text('project[debs][txt1]', old('project.debs.txt1'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Descripción de adeudo']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[debs][value1]', old('project.debs.value1'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>

            <div class="w-full flex my-1" id="hideDeb2" style="display: none">
                <div class="w-1/2 border-r-2 border-blue-600" >
                    {!! Form::text('project[debs][txt2]', old('project.debs.txt2'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Descripción de adeudo']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[debs][value2]', old('project.debs.value2'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>
            <div class="w-full flex my-1" id="hideDeb3" style="display: none">
                <div class="w-1/2 border-r-2 border-blue-600" >
                    {!! Form::text('project[debs][txt3]', old('project.debs.txt3'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Descripción de adeudo']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[debs][value3]', old('project.debs.value3'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>
            <div class="w-full flex my-1" id="hideDeb4" style="display: none">
                <div class="w-1/2 border-r-2 border-blue-600" >
                    {!! Form::text('project[debs][txt4]', old('project.debs.txt4'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Descripción de adeudo']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[debs][value4]', old('project.debs.value4'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>
            <div class="w-full flex my-1" id="hideDeb5" style="display: none">
                <div class="w-1/2 border-r-2 border-blue-600" >
                    {!! Form::text('project[debs][txt5]', old('project.debs.txt5'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => 'Descripción de adeudo']) !!}
                </div>
                <div class="w-1/2">
                    {!! Form::number('project[debs][value5]', old('project.debs.value5'), ['class' => 'border-0 w-full hover:bg-gray-hover text-black', 'placeholder' => "$"]) !!}
                </div>
            </div>
            <div class="w-full flex my-1 ">
                <div class="w-full" id='masDebs'>
                    <div
                        class=" bg-blue-400 shadow-lg shadow-blue-500 text-center items-center cursor-pointer">
                        {{ __('Agregar deuda') }}</div>
                </div>
                <div class="w-full" id='menosDebs' style="display: none">
                    <div
                        class=" bg-blue-400 shadow-lg shadow-blue-500 text-center items-center cursor-pointer">
                        {{ __('Quitar deuda') }}</div>
                </div>
            </div>


        </div>

        <div class=" w-1/3 mx-2">
            <x-help_form>
                {{ __('En caso de que si tenga deuda describir el monto y origen de la deuda. Es decir, escribir banco, préstamo familiar, asociados, etc.') }}
            </x-help_form>
        </div>
        @error('project.debs.txt1')
            <x-validation-error>{{ $message }}</x-validation-error>
        @enderror
        @error('project.debs.value1')
            <x-validation-error>{{ $message }}</x-validation-error>
        @enderror

        @error('project.debs.txt2')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.debs.value2')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            @error('project.debs.txt3')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.debs.value3')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            @error('project.debs.txt4')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.debs.value4')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            @error('project.debs.txt5')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.debs.value5')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
    </div>

    
    
    
   
    <div class=" mx-5">
        <x-subtitle_form>
            {{ __('Inversión') }}
        </x-subtitle_form>

    </div>
    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5">
            <label for="">
                {{ __('Plazo para recabar la inversión en meses.') }}
                {!! Form::selectRange('project[estimated_term]', 1, 6, old('project.estimated_term'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover text-black']) !!}
            </label>
        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('No puede superar los 6 meses ni ser menor a 1 mes.') }}
            </x-help_form>
            @error('project.estimated_term')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
    </div>

    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5">
            <label for="">
                {{ __('Plazo para ejecutar el proyecto en meses') }}
                {!! Form::selectRange('project[estimated_ejecution]', 1, 36, old('project.estimated_ejecution'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover text-black']) !!}
            </label>
        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('No puede superar los 36 meses, ni ser menor a 6 meses incluyendo el tiempo para conseguir la inversión.') }}
            </x-help_form>
            @error('project.estimated_ejecution')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
    </div>

    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5">
            {!! Form::number('project[min_investment]', old('project.min_investment'), ['class' => 'border-2 border-blue-600 rounded rounded-full w-full hover:bg-gray-hover text-black', 'placeholder' => '* Inversión mínima solicitada']) !!}
        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('Mínimo solicitado por inversionista, no puede ser menor a $1,000.00 ') }}
            </x-help_form>
            @error('project.min_investment')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
    </div>

    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5">
            <div class="flex flex-wrap text-center bg-blue-600 py-1  ">
                <div class="w-full border-b-white border-b-2 text-white">
                    {{__('Conceptos del proyecto')}}
                </div>
                <div class="w-1/4 text-white">
                    {{ __('Concepto') }}
                </div>
                <div class="w-1/4 text-white">
                    {{ __('Características') }}
                </div>
                <div class="w-1/4 text-white">
                    {{ __('Monto') }}
                </div>
                <div class="w-1/4 text-white">
                    {{ __('%') }}
                </div>
                <div class="w-1/4 border-b-white border-b-2 text-left pl-2 text-white">{{ __('Contratación de personal') }}</div>
                <div class="w-1/4">{!! Form::text('project[personal][txt]', old('project.personal.txt'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => 'Característica']) !!}</div>
                <div class="w-1/4">{!! Form::number('project[personal][amount]', old('project.personal.amount'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover debAmountTotal text-black', 'placeholder' => 'Monto']) !!}</div>
                
                <div class="w-1/4">
                    {!! Form::selectRange('project[personal][porcent]', 1, 100, old('project.personal.porcent'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-full debPorcentTotal text-black', 'placeholder' => '%']) !!}
                </div>
                
                <div class="w-1/4 border-b-white border-b-2 text-left pl-2 text-white">{{ __('Mano de obra') }}</div>
                <div class="w-1/4">{!! Form::text('project[mobra][txt]', old('project.mobra.txt'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => 'Característica']) !!}</div>
                <div class="w-1/4">{!! Form::number('project[mobra][amount]', old('project.mobra.amount'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover debAmountTotal text-black', 'placeholder' => 'Monto']) !!}</div>
                <div class="w-1/4">
                    {!! Form::selectRange('project[mobra][porcent]', 1, 100, old('project.mobra.porcent'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-full debPorcentTotal text-black', 'placeholder' => '%']) !!}
                </div>

                <div class="w-1/4 border-b-white border-b-2 text-left pl-2 text-white">{{ __('Insumos/Material') }}</div>
                <div class="w-1/4">{!! Form::text('project[insumos][txt]', old('project.insumos.txt'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => 'Característica']) !!}</div>
                <div class="w-1/4">{!! Form::number('project[insumos][amount]', old('project.insumos.amount'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover debAmountTotal text-black', 'placeholder' => 'Monto']) !!}</div>
                <div class="w-1/4">
                    {!! Form::selectRange('project[insumos][porcent]', 1, 100, old('project.insumos.porcent'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-full debPorcentTotal text-black', 'placeholder' => '%']) !!}
                </div>
                
                <div class="w-1/4 border-b-white border-b-2 text-left pl-2 text-white">{{ __('Equipo') }}</div>
                <div class="w-1/4">{!! Form::text('project[equipo][txt]', old('project.equipo.txt'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => 'Característica']) !!}</div>
                <div class="w-1/4">{!! Form::number('project[equipo][amount]', old('project.equipo.amount'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover debAmountTotal text-black', 'placeholder' => 'Monto']) !!}</div>
                <div class="w-1/4">
                    {!! Form::selectRange('project[equipo][porcent]', 1, 100, old('project.equipo.porcent'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-full debPorcentTotal text-black', 'placeholder' => '%']) !!}
                </div>
               
                <div class="w-1/4 border-b-white border-b-2 text-left pl-2 text-white">{{ __('Mobiliario') }}</div>
                <div class="w-1/4">{!! Form::text('project[mobiliario][txt]', old('project.mobiliario.txt'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => 'Característica']) !!}</div>
                <div class="w-1/4">{!! Form::number('project[mobiliario][amount]', old('project.mobiliario.amount'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover debAmountTotal text-black', 'placeholder' => 'Monto']) !!}</div>
                <div class="w-1/4">
                    {!! Form::selectRange('project[mobiliario][porcent]', 1, 100, old('project.mobiliario.porcent'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-full debPorcentTotal text-black', 'placeholder' => '%']) !!}
                </div>

                
                <div class="w-1/4 border-b-white border-b-2 text-left pl-2 text-white">{{ __('Construcción') }}</div>
                <div class="w-1/4">{!! Form::text('project[construccion][txt]', old('project.construccion.txt'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => 'Característica']) !!}</div>
                <div class="w-1/4">{!! Form::number('project[construccion][amount]', old('project.construccion.amount'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover debAmountTotal text-black', 'placeholder' => 'Monto']) !!}</div>
                <div class="w-1/4">
                    {!! Form::selectRange('project[construccion][porcent]', 1, 100, old('project.construccion.porcent'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-full debPorcentTotal text-black', 'placeholder' => '%']) !!}
                </div>

                <div class="w-1/4 border-b-white border-b-2 text-left pl-2 text-white">{{ __('Reparaciones') }}</div>
                <div class="w-1/4">{!! Form::text('project[reparaciones][txt]', old('project.reparaciones.txt'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => 'Característica']) !!}</div>
                <div class="w-1/4">{!! Form::number('project[reparaciones][amount]', old('project.reparaciones.amount'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover debAmountTotal text-black', 'placeholder' => 'Monto']) !!}</div>
                <div class="w-1/4">
                    {!! Form::selectRange('project[reparaciones][porcent]', 1, 100, old('project.reparaciones.porcent'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-full debPorcentTotal text-black', 'placeholder' => '%']) !!}
                </div>

                <div class="w-1/4 border-b-white border-b-2 text-left pl-2 text-white">{{ __('Arrendamiento') }}</div>
                <div class="w-1/4">{!! Form::text('project[arrendamiento][txt]', old('project.arrendamiento.txt'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => 'Característica']) !!}</div>
                <div class="w-1/4">{!! Form::number('project[arrendamiento][amount]', old('project.arrendamiento.amount'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover debAmountTotal text-black', 'placeholder' => 'Monto']) !!}</div>
                <div class="w-1/4">
                    {!! Form::selectRange('project[arrendamiento][porcent]', 1, 100, old('project.arrendamiento.porcent'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-full debPorcentTotal text-black', 'placeholder' => '%']) !!}
                </div>

                <div class="w-1/4 border-b-white border-b-2 text-left pl-2 text-white">{{ __('Adquisición de inmueble') }}</div>
                <div class="w-1/4">{!! Form::text('project[inmueble][txt]', old('project.inmueble.txt'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => 'Característica']) !!}</div>
                <div class="w-1/4">{!! Form::number('project[inmueble][amount_inmueble]', old('project.inmueble.amount'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover debAmountTotal text-black', 'placeholder' => 'Monto']) !!}</div>
                <div class="w-1/4">
                    {!! Form::selectRange('project[inmueble][porcent]', 1, 100, old('project.inmueble.porcent'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-full debPorcentTotal text-black', 'placeholder' => '%']) !!}
                </div>

                <div class="w-1/4 border-b-white border-b-2 text-left pl-2 text-white">{{ __('Permisos y trámites') }}</div>
                <div class="w-1/4">{!! Form::text('project[tramites][txt]', old('project.tramites.txt'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => 'Característica']) !!}</div>
                <div class="w-1/4">{!! Form::number('project[tramites][amount]', old('project.tramites.amount'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover debAmountTotal text-black', 'placeholder' => 'Monto']) !!}</div>
                <div class="w-1/4">
                    {!! Form::selectRange('project[tramites][porcent]', 1, 100, old('project.tramites.porcent'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-full debPorcentTotal text-black', 'placeholder' => '%']) !!}
                </div>
                
                <div class="w-1/4 border-b-white border-b-2 text-left pl-2 text-white">{{ __('Software') }}</div>
                <div class="w-1/4">{!! Form::text('project[software][txt]', old('project.software.txt'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => 'Característica']) !!}</div>
                <div class="w-1/4">{!! Form::number('project[software][amount]', old('project.software.amount'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover debAmountTotal text-black', 'placeholder' => 'Monto']) !!}</div>
                <div class="w-1/4">
                    {!! Form::selectRange('project[software][porcent]', 1, 100, old('project.software.porcent'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-full debPorcentTotal text-black', 'placeholder' => '%']) !!}
                </div>
                
                <div class="w-1/4 border-b-white border-b-2 text-left pl-2 text-white">{{ __('Otros') }}</div>
                <div class="w-1/4">{!! Form::text('project[otros][txt]', old('project.otros.txt'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => 'Característica']) !!}</div>
                <div class="w-1/4">{!! Form::number('project[otros][amount]', old('project.otros.amount'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover debAmountTotal text-black', 'placeholder' => 'Monto']) !!}</div>
                <div class="w-1/4">
                    {!! Form::selectRange('project[otros][porcent]', 1, 100, old('project.otros.porcent'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover w-full debPorcentTotal text-black', 'placeholder' => '%']) !!}
                </div>

                <div class="w-1/4 text-left pl-2 text-white">{{ __('Total') }}</div>
                <div class="w-1/4 text-white">{{ __('Monto Solicitado máximo') }}</div>
                <div class="w-1/4 text-white" id="debAmountTotal"></div>
                <div class="w-1/4 text-white" id="debPorcentTotal"></div>
            </div>
             
        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('Escoger todos los conceptos que apliquen a su proyecto y desglosar las características de cada uno. El total debe coincidir con el monto máximo solicitado. ') }}
            </x-help_form>
            <div id="errorDebAmount" style="display: none">
                <x-validation-error>{{ __('La suma de los montos en los conceptos debe estar entre el monto máximo y monto mínimo solicitado') }}</x-validation-error>
            </div>
            <div id="errorDebPorcent" style="display: none">
                <x-validation-error>{{ __('La suma de los porcentajes en los conceptos debe ser exactamente igual a 100%') }}</x-validation-error>
            </div>
            @error('project.personal.txt')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.personal.amount')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.personal.porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror

            @error('project.mobra.txt')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.mobra.amount')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.mobra.porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.insumos.txt')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.insumos.amount')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.insumos.porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.equipo.txt')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.equipo.amount')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.equipo.porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.mobiliario.txt')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.mobiliario.amount')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.mobiliario.porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.construccion.txt')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.construccion.amount')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.construccion.porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.reaparaciones.txt')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.reaparaciones.amount')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.reaparaciones.porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.arrendamiento.txt')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.arrendamiento.amount')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.arrendamiento.porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.inmueble.txt')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.inmueble.amount')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.inmueble.porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.tramites.txt')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.tramites.amount')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.tramites.porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.software.txt')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.software.amount')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.software.porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.otros.txt')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.otros.amount')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.otros.porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
    </div>
    <div class=" mx-5">
        <x-subtitle_form>
            <div>{{ __('Ganancias') }}</div>
            {{ __('Describe lo que se ofrece a los que inviertan en el proyecto.') }}
        </x-subtitle_form>

    </div>

    <div class="flex mx-5">
        <div class=" w-2/3  mx-3 my-5">
            <div class=" flex flex-wrap text-center bg-blue-600 py-1 ">
                <div class="w-full text-white border-b-2 border-b-white">{{__('Detallle de temporalidad')}}</div>
                <div class="w-1/2 text-white border-b-2 border-b-white">{{ __('Temporalidad') }}</div>
                <div class="w-1/2 text-white">{{ __('% de ganacia') }}</div>

                <div class="w-1/2 text-white border-b-2 border-b-white">{{ __('Anual') }}</div>
                <div class="w-1/2">
                    {!! Form::selectRange('project[porcents][anual]', 1, 100, old('project.porcents.anual'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => '%'])!!}
                </div>
                <div class="w-1/2 text-white border-b-2 border-b-white">{{ __('Semestral') }}</div>
                <div class="w-1/2">
                    {!! Form::selectRange('project[porcents][semestral]', 1, 100, old('project.porcents.semestral'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => '%'])!!}
                </div>
            
                <div class="w-1/2 text-white border-b-2 border-b-white">{{ __('Trimestral') }}</div>
                <div class="w-1/2">
                    {!! Form::selectRange('project[porcents][trimestral]', 1, 100, old('project.porcents.trimestral'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => '%'])!!}
                </div>
                
                <div class="w-1/2 text-white border-b-2 border-b-white">{{ __('Bimestral') }}</div>
                <div class="w-1/2">
                    {!! Form::selectRange('project[porcents][bimestral]', 1, 100, old('project.porcents.bimestral'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => '%'])!!}
                </div>
                
                <div class="w-1/2 text-white">{{ __('Desinversión') }}</div>
                <div class="w-1/2">
                    {!! Form::selectRange('project[porcents][desinversion]', 1, 100, old('project.porcents.desinversion'), ['class' => 'border-2 border-blue-600 hover:bg-gray-hover text-black', 'placeholder' => '%'])!!}
                </div>
                
            </div>
        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('Se puede elegir más de un concepto de temporalidad es decir puede dar ganancias trimestrales de cierto % y ganancia anual de otro porcentaje ó ganancias anuales y al final del proyecto un % más el monto de desinversión.') }}
            </x-help_form>
            @error('project.porcents.anual_porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.porcents.anual')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.porcents.anual_porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.porcents.anual')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.porcents.semestral_porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.porcents.semestral')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.porcents.trimestral_porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.porcents.trimestral')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.porcents.bimestral_porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.porcents.bimestral')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.porcents.desinversion_porcent')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.porcents.desinversion')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
    </div>
    <div class="flex mx-5">
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
            aqui deberia haber un problema
            @error('project.render')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
    </div>
    <div class="flex mx-5">
        <div class=" w-2/3 mx-3 my-5 flex">
            <div class="w-1/2">
                <select name="project[list_avala]"
                    class="border-2 border-blue-600 rounded-full  outline-none hover:bg-gray-hover">
                    <option>{{ __('Documento que avala el proyecto') }}</option>
                    @foreach ($docs as $doc)
                        @if ($doc->id == old('project.list_avala'))
                            <option value="{{ $doc->id }}" selected>{{ $doc->name }}</option>
                        @else
                            <option value="{{ $doc->id }}">{{ $doc->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="w-1/2">
                {!! Form::file('project[doc_avala]', ['class' => '', 'id' => 'project_render']) !!}
            </div>

        </div>
        <div class=" w-1/3 mx-2 my-5">
            <x-help_form>
                {{ __('Escoger de la lista el tipo de documento y agregar el pdf.') }}
            </x-help_form>
            @error('project.list_avala')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
            @error('project.doc_avala')
                <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
    </div>

   