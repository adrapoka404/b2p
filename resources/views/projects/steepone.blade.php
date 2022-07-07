<x-app-layout>
    <div class=" w-full mx-auto py-10 sm:px-6 lg:px-8 bg-fixed bg-fondo-projects bg-cover">
        <div
            class=" max-w-7xl  mx-auto hidden sm:flex  bg-white bg-cover rounded-md border-2 border-blue-600 font-cairo ">
            <x-menu-project :menu="request()
                ->route()
                ->getName()" />
            {!! Form::open(['route' => 'steepone.store', 'atocomplete' => 'off', 'files' => true, 'id' => 'formSteepOne']) !!}
            <div class="w-full mx-5">
                <x-form-steep-one :projecttypes="$projecttypes" :docs="$docs" :pOptions="$pOptions" :pInputs='$pInputs'/>
                <div class="flex mx-5 ">
                    <div class=" w-2/3 mx-3 my-5">

                    </div>
                    <div class=" w-1/3 mx-2 my-5">
                        {!! Form::hidden('project[completo]', 0, ['id' => 'form_completo']) !!}
                        {!! Form::hidden('project[exist]', 0) !!}
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
                var caracteristicas = 3; // igualar con el mónimo de características requeridas
                var aportaciones = 1 // igualar con mínimo de aportaciones requeridas
                var origins = 1 // igualar con mínimo de origne de aportación requeridas
                var debs = 1 // igualar con mínimo de origne de aportación requeridas

                var debPorcent = 0;
                $("#masCaracteristicas").click(function() {
                    caracteristicas++;

                    $("#divCaracteristica" + caracteristicas).show('blind');
                    $("#menosCaracteristicas").show()
                    if (caracteristicas == 5)
                        $(this).hide();
                })

                $("#menosCaracteristicas").click(function() {
                    $("#divCaracteristica" + caracteristicas).hide('blind');
                    $("#masCaracteristicas").show()
                    caracteristicas--;
                    if (caracteristicas == 3)
                        $(this).hide();
                })

                $("#masAportaciones").click(function() {

                    aportaciones++;
                    $("#hideInput" + aportaciones).show('blind');
                    $("#menosAportaciones").show()
                    if (aportaciones == 5)
                        $(this).hide();
                })

                $("#menosAportaciones").click(function() {
                    $("#hideInput" + aportaciones).hide('blind');
                    $("#masAportaciones").show()
                    aportaciones--;
                    if (aportaciones == 1)
                        $(this).hide();

                })

                $("#masOrigins").click(function() {
                    origins++;
                    $("#hideOrigin" + origins).show('blind');
                    $("#menosOrigins").show()
                    if (origins == 5)
                        $(this).hide();

                })

                $("#menosOrigins").click(function() {
                    $("#hideOrigin" + origins).hide('blind');
                    $("#masOrigins").show()
                    origins--;
                    if (origins == 1)
                        $(this).hide();

                })

                $("#masDebs").click(function() {
                    debs++;
                    $("#hideDeb" + debs).show('blind');
                    $("#menosDebs").show()
                    if (debs == 5)
                        $(this).hide();

                })

                $("#menosDebs").click(function() {
                    $("#hideDeb" + debs).hide('blind');
                    $("#masDebs").show()
                    debs--;
                    if (debs == 1)
                        $(this).hide();

                })

                $("#project_debt").on('click', function() {
                    if ($(this).is(':checked'))
                        $('#divDeuda').show('blind')
                    else
                        $('#divDeuda').hide('blind')
                })

                $(".debAmountTotal").change(function() {
                    var debAmount = 0;
                    var maxAmount = $("#maxAmount").val();
                    var minAmount = $("#minAmount").val();

                    $(".debAmountTotal").each(function(index, value) {
                        if ($.isNumeric($(this).val()))
                            debAmount += eval($(this).val());
                    })

                    $("#debAmountTotal").html('$ ' + debAmount)

                    if (debAmount >= minAmount && debAmount <= maxAmount) {
                        $("#debAmountTotal").addClass('bg-green')
                        $("#debAmountTotal").removeClass('bg-red-300')
                        $("#errorDebAmount").hide();
                    } else {
                        $("#debAmountTotal").removeClass('bg-green')
                        $("#debAmountTotal").addClass('bg-red-300')
                        $("#errorDebAmount").show();
                    }
                })

                $(".debPorcentTotal").keyup(function() {
                    var debPorcent = 0;

                    $(".debPorcentTotal").each(function(index, value) {
                        if ($.isNumeric($(this).val()))
                            debPorcent += eval($(this).val());
                    })

                    $("#debPorcentTotal").html('$ ' + debPorcent)

                    if (debPorcent != 100) {
                        $("#debPorcentTotal").removeClass('bg-green')
                        $("#debPorcentTotal").addClass('bg-red-300')
                        $("#errorDebPorcent").show();
                    } else {
                        $("#debPorcentTotal").addClass('bg-green')
                        $("#debPorcentTotal").removeClass('bg-red-300')
                        $("#errorDebPorcent").hide();
                    }
                })

                $("#onlySave").on('click', function() {
                    $("#form_completo").val('0');
                    $("#formSteepOne").attr('action', "{{ route('steepone.store') }}");
                    $("input[name=_method]").val("POST");
                    $("#formSteepOne").submit();
                })

                $("#nextSteep").on('click', function() {
                    $("#form_completo").val('1');
                    $("#formSteepOne").attr('action', "{{ route('steepone.update', $project) }}");
                    $("#formSteepOne").submit();

                })


                $("#text_description").on('keyup', function() {
                    van = 600 - $(this).val().length;
                    $("#conteo_description").html(van);
                })
            })
        </script>
    @endsection
</x-app-layout>
