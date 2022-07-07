<x-app-layout>
    <div class=" w-full mx-auto py-10 sm:px-6 lg:px-8 bg-fixed bg-fondo-projects bg-cover">
        <div
            class=" max-w-7xl  mx-auto hidden sm:flex  bg-white bg-cover rounded-md border-2 border-blue-600 font-cairo ">
            <x-menu-project :menu="request()
                ->route()
                ->getName()" />
            {!! Form::model($steeptwo, ['route' => ['steeptwo.update', $steeptwo], 'atocomplete' => 'off', 'files' => true, 'id' => 'formSteepTwo', 'method' => 'put']) !!}
            <div class="w-full">

                <x-form-steep-two :companies="$companies" :years="$years" :steeptwo="$steeptwo"/>
                <div class="flex mx-5 ">
                    <div class=" w-2/3 mx-3 my-5">

                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        {!! Form::hidden('company[url_services]', route('zipcode', ''), ['id' => 'url_services']) !!}
                        {!! Form::hidden('company[completo]', 0, ['id' => 'form_completo']) !!}
                        {!! Form::hidden('company[project_id]', $project_id, []) !!}
                        {!! Form::hidden('company[exist]', 0) !!}
                        <span id="onlySave"
                            class='bg-red-700 font-cairo text-white font-semibold rounded-full mx-3 my-1 px-5 py-3 text-sm cursor-pointer'>Guardar
                            Avance</span>
                        <span id="nextSteep"
                            class="bg-red-700 font-cairo text-white font-semibold rounded-full mx-3 my-1 px-5 py-3 text-sm cursor-pointer">Siguiente</span>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    @section('jquery')
        <script>
            $(document).ready(function() {
                $("#companyDescription").on('keyup', function() {
                    van = 600 - $(this).val().length;
                    $("#conteo_description").html(van);
                })

                $("#zipcode").on('keyup', function() {
                    if ($(this).val().length > 3) {

                        $.ajax($("#url_services").val() + '/' + $(this).val())
                            .done(function(zips) {
                                if (zips.length > 0) {
                                    select = "<option>Selecciona colonia</option>";
                                    $.each(zips, function(i, v) {
                                        select += "<option value='" + v.asentamiento + "'> " + v
                                            .asentamiento + "</option>";
                                    })
                                    /*zips.each(function(i, v) {
                                        select += "<option value='" + v.asentamiento + "'> " + v
                                            .asentamiento + "</option>";
                                    })*/
                                    $("#coloniasSelect").show();
                                    $("#coloniasInput").hide();
                                    $("#coloniasSelect").html(select);
                                    $("#nozips").hide();
                                } else {
                                    $("#coloniasSelect").hide();
                                    $("#coloniasInput").show();
                                    $("#nozips").show();
                                }
                            })
                            .fail(function() {
                                alert("error");
                            })
                            .always(function() {
                                console.log('Buscando...');
                            });
                    } else
                        console.log('dame mas  perro');
                })

                $("#onlySave").on('click', function() {
                    $("#form_completo").val('0');
                    $("#formSteepOne").attr('action', "{{ route('steeptwo.store') }}");
                    $("input[name=_method]").val("POST");
                    $("#formSteepTwo").submit();
                })

                $("#nextSteep").on('click', function() {
                    $("#form_completo").val('1');
                    $("#formSteepOne").attr('action', "{{ route('steeptwo.update', '') }}");
                    $("#formSteepTwo").submit();

                })
            })
        </script>
    @endsection
</x-app-layout>
