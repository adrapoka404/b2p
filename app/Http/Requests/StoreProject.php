<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProject extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'project.completo'                      => 'required',
            'project.name'                          => 'required_if:project.completo,=,1|max:10',
            'project.description'                   => 'required_if:project.completo,=,1|min:200|max:600',

            'project.description'                   => 'required_if:project.completo,=,1|min:200|max:600',
            'project.options.txt1'                  => 'required_if:project.completo,=,1|max:250',
            'project.options.value1'                => 'required_if:project.completo,=,1|max:250',
            'project.options.txt2'                  => 'required_if:project.completo,=,1|max:250',
            'project.options.value2'                => 'required_if:project.completo,=,1|max:250',
            'project.options.txt3'                  => 'required_if:project.completo,=,1|max:250',
            'project.options.value3'                => 'required_if:project.completo,=,1|max:250',
            'project.options.txt4'                  => 'nullable|max:250',
            'project.options.value4'                => 'nullable|max:250',
            'project.options.txt5'                  => 'nullable|max:250',
            'project.options.value5'                => 'nullable|max:250',
            'project.location'                      => 'required_if:project.completo,=,1',
            'project.goal'                          => 'required_if:project.completo,=,1|numeric',
            'project.goal_two'                      => 'required_if:project.completo,=,1|numeric',
            'project.inputs.txt1'                   => 'required_if:project.completo,=,1',
            'project.inputs.value1'                 => 'required_if:project.completo,=,1|numeric',
            'project.inputs.txt2'                   => 'nullable',
            'project.inputs.value2'                 => 'nullable|numeric',
            'project.inputs.txt3'                   => 'nullable',
            'project.inputs.value3'                 => 'nullable|numeric',
            'project.inputs.txt4'                   => 'nullable',
            'project.inputs.value4'                 => 'nullable|numeric',
            'project.inputs.txt5'                   => 'nullable',
            'project.inputs.value5'                 => 'nullable|numeric',
            'project.origins.txt1'                  => 'required_if:project.completo,=,1',
            'project.origins.value1'                => 'required_if:project.completo,=,1|numeric',
            'project.origins.txt2'                  => 'nullable',
            'project.origins.value2'                => 'nullable|numeric',
            'project.origins.txt3'                  => 'nullable',
            'project.origins.value3'                => 'nullable|numeric',
            'project.origins.txt4'                  => 'nullable',
            'project.origins.value4'                => 'nullable|numeric',
            'project.origins.txt5'                  => 'nullable',
            'project.origins.value5'                => 'nullable|numeric',
            'project.request_max'                   => 'required_if:project.completo,=,1|numeric',
            'project.request_min'                   => 'required_if:project.completo,=,1|numeric',
            'project.debt'                          => 'nullable',
            'project.debs.txt1'                     => 'required_if:project.debt,checked',
            'project.debs.value1'                   => 'required_if:project.debt,checked', 
            'project.debs.txt2'                     => 'nullable',
            'project.debs.value2'                   => 'nullable|numeric',
            'project.debs.txt3'                     => 'nullable',
            'project.debs.value3'                   => 'nullable|numeric',
            'project.debs.txt4'                     => 'nullable',
            'project.debs.value4'                   => 'nullable|numeric',
            'project.debs.txt5'                     => 'nullable',
            'project.debs.value5'                   => 'nullable|numeric',
            'project.estimated_term'                => 'required_if:project.completo,=,1|between:1,6',
            'project.estimated_ejecution'           => 'required_if:project.completo,=,1|between:1,36',
            'project.min_investment'                => 'required_if:project.completo,=,1',//|min:999',
            'project.personal.txt'                  => 'nullable',
            'project.personal.amount'               => 'nullable|numeric',
            'project.personal.porcent'              => 'nullable|numeric',
            'project.mobra.txt'                     => 'nullable',
            'project.mobra.amount'                  => 'nullable|numeric',
            'project.mobra.porcent'                 => 'nullable|numeric',
            'project.insumos.txt'                   => 'nullable',
            'project.insumos.amount'                => 'nullable|numeric',
            'project.insumos.porcent'               => 'nullable|numeric',
            'project.equipo.txt'                    => 'nullable',
            'project.equipo.amount'                 => 'nullable|numeric',
            'project.equipo.porcent'                => 'nullable|numeric',
            'project.mobiliario.txt'                => 'nullable',
            'project.mobiliario.amount'             => 'nullable|numeric',
            'project.mobiliario.porcent'            => 'nullable|numeric',
            'project.construccion.txt'              => 'nullable',
            'project.construccion.amount'           => 'nullable|numeric',
            'project.construccion.porcent'          => 'nullable|numeric',
            'project.reparaciones.txt'              => 'nullable',
            'project.reparaciones.amount'           => 'nullable|numeric',
            'project.reparaciones.porcent'          => 'nullable|numeric',
            'project.arrendamiento.txt'             => 'nullable',
            'project.arrendamiento.amount'          => 'nullable|numeric',
            'project.arrendamiento.porcent'         => 'nullable|numeric',
            'project.inmueble.txt'                  => 'nullable',
            'project.inmueble.amount'               => 'nullable|numeric',
            'project.inmueble.porcent'              => 'nullable|numeric',
            'project.tramite.txt'                   => 'nullable',
            'project.tramite.amount'                => 'nullable|numeric',
            'project.tramite.porcent'               => 'nullable|numeric',
            'project.software.txt'                  => 'nullable',
            'project.software.amount'               => 'nullable|numeric',
            'project.software.porcent'              => 'nullable|numeric',
            'project.otros.txt'                     => 'nullable',
            'project.otros.amount'                  => 'nullable|numeric',
            'project.otros.porcent'                 => 'nullable|numeric',
            'project.porcents.anual'                => 'nullable|numeric',
            'project.porcents.semestral'            => 'nullable|numeric',
            'project.porcents.trimestral'           => 'nullable|numeric',
            'project.porcents.bimestral'            => 'nullable|numeric',
            'project.porcents.desinversion'         => 'nullable|numeric',
            'project.list_avala'                    => 'required_if:project.completo,=,1|numeric',
        ];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
            'project.name.required'                             => 'El campo nombre de proyecto es obligatorio',
            'project.name.max'                                  => 'El campo nombre de proyecto no puede tener mas de 10 caracteres',
            'project.project_type_id.required'                  => 'El campo tipo de proyecto es obligatorio',
            'project.project_type_id.numeric'                   => 'El campo tipo de proyecto es obligatorio',
            'project.description.required_if'                   => 'El campo de descripcion es obligatorio para pasar al paso siguiente',
            'project.description.min'                           => 'El campo de descripción debe contener al menos 200 caracteres',
            'project.description.max'                           => 'El campo de descripción debe contener máximo 600 caracteres',
            'project.options.txt1.required_if'                  => 'El campo de opción 1 en las características es obligatorio para pasar al siguiente paso',
            'project.options.txt1.max'                          => 'El campo de opción 1 en las características no debe contener mas de 250 caracteres',
            'project.options.value1.required_if'                => 'El campo de descripción 1 en las características es obligatorio para pasar al siguiente paso',
            'project.options.value1.max'                        => 'El campo de descripción 1 en las características no debe contener mas de 250 caracteres',
            'project.options.txt2.required_if'                  => 'El campo de opción 2 en las características es obligatorio para pasar al siguiente paso',
            'project.options.txt2.max'                          => 'El campo de opción 2 en las características no debe contener mas de 250 caracteres',
            'project.options.value2.required_if'                => 'El campo de descripción 2 en las características es obligatorio para pasar al siguiente paso',
            'project.options.value2.max'                        => 'El campo de descripción 2 en las características no debe contener mas de 250 caracteres',
            'project.options.txt3.required_if'                  => 'El campo de opción 3 en las características es obligatorio para pasar al siguiente paso',
            'project.options.txt3.max'                          => 'El campo de opción 3 en las características no debe contener mas de 250 caracteres',
            'project.options.value3.required_if'                => 'El campo de descripción 3 en las características es obligatorio',
            'project.options.value3.max'                        => 'El campo de descripción 3 en las características no debe contener mas de 250 caracteres',
            'project.options.txt4.max'                          => 'El campo de opción 4 en las características no debe contener mas de 250 caracteres',
            'project.options.value4.max'                        => 'El campo de descripción 4 en las características no debe contener mas de 250 caracteres',
            'project.options.txt5.max'                          => 'El campo de opción 5 en las características no debe contener mas de 250 caracteres',
            'project.options.value5.max'                        => 'El campo de descripción 5 en las características no debe contener mas de 250 caracteres',
            'project.location.required_if'                      => 'El campo de ubicación física es obligatorio para pasar al siguiente paso',
            'project.goal.required_if'                          => 'El campo costo total del proyecto es obligatorio para pasar al siguiente paso',
            'project.goal.numeric'                              => 'El campo costo total del proyecto debe ser numerico',
            'project.goal_two.required_if'                      => 'El campo Monto de tu inversión es obligatorio para pasar al siguiente paso',
            'project.goal_two.numeric'                          => 'El campo monto de tu inversion debe ser numerico',
            'project.inputs.txt1.required_if'                   => 'Debe agregar al menos un tipo de aportación para pasar al siguiente paso',
            'project.inputs.value1.required_if'                 => 'Debe agregar al menos un monto de aportación para pasar al siguiente paso',
            'project.inputs.value1.numeric'                     => 'El campo monto 1 en la columna de monto debe ser numerico',
            'project.inputs.value2.numeric'                     => 'El campo monto 2 en la columna de monto debe ser numerico',
            'project.inputs.value3.numeric'                     => 'El campo monto 3 en la columna de monto debe ser numerico',
            'project.inputs.value4.numeric'                     => 'El campo monto 4 en la columna de monto debe ser numerico',
            'project.inputs.value5.numeric'                     => 'El campo monto 5 en la columna de monto debe ser numerico',
            'project.origins.txt1.required_if'                  => 'Debe agregar al menos un origen de inversión para pasar al siguiente paso',
            'project.origins.txt1.numeric'                      => 'El campo origen de inversión 1 en la tabla de inversión debe ser numerico',
            'project.origins.value1.required_if'                => 'Debe agregar al menos un monto de origien de inversión para pasar al siguiente paso',
            'project.origins.value1.numeric'                    => 'El campo monto 1 en la columna origen de inversión debe ser numerico',
            'project.origins.value2.numeric'                    => 'El campo monto 2 en la columna origen de inversión debe ser numerico',
            'project.origins.value3.numeric'                    => 'El campo monto 3 en la columna origen de inversión debe ser numerico',
            'project.origins.value4.numeric'                    => 'El campo monto 4 en la columna origen de inversión debe ser numerico',
            'project.origins.value5.numeric'                    => 'El campo monto 5 en la columna origen de inversión debe ser numerico',
            'project.request_max.required_if'                   => 'El campo de Monto máximo de inversion es obligatorio para pasar al siguiente paso',
            'project.request_min.required_if'                   => 'El campo de Monto mínimo de inversion es obligatorio para pasar al siguiente paso y no debe ser menor al 20% del monto máximo',
            'project.request_min.numeric'                       => 'El campo de Monto mínimo de inversion debe ser numerico y no menor al 20% del monto máximo',
            //'project.request_min.min'                         => 'El campo de Monto mínimo de inversion debe ser mayor al 20% del monto máximo de inversión',
            //'project.request_min.max'                         => 'El campo de Monto máximo de inversion debe ser numerico',
            'project.debs.txt1.required_if'                     => 'Si ha elegido que el proyecto tiene algún tipo de endeudamiento debe ingresar al menos una descripción de la deuda',
            'project.debs.value1.required_if'                   => 'Si ha elegido que el proyecto tiene algún tipo de endeudamiento debe ingresar al menos una monto de la deuda',
            'project.debs.value1.numeric'                       => 'El campo monto de la descricpión de adeudo 1 debe ser numerico',
            'project.debs.value2.numeric'                       => 'El campo monto de la descricpión de adeudo 2 debe ser numerico',
            'project.debs.value3.numeric'                       => 'El campo monto de la descricpión de adeudo 3 debe ser numerico',
            'project.debs.value4.numeric'                       => 'El campo monto de la descricpión de adeudo 4 debe ser numerico',
            'project.debs.value5.numeric'                       => 'El campo monto de la descricpión de adeudo 5 debe ser numerico',
            'project.estimated_term.required'                   => 'EL plazo para recabar la inversión es obligatorio',
            'project.estimated_term.between'                    => 'El plazo para recabar la inversión debe ser de 1 a 6 meses',
            'project.estimated_ejecution.required'              => 'El plazo para la ejecución del proyecto es obligatorio',
            'project.estimated_ejecution.between'               => 'El plazo para la ejecución del proyecto debe ser de 1 a 36 meses',
            'project.min_investment.required_if'                => 'La inversión minima para inversionistas es obligatoria para pasar al siguiente paso',
            'project.min_investment.min'                        => 'La inversión minima para inversionistas debe ser mayor o igual a $1,000.00',
            'project.personal.amount.numeric'               => 'El campo monto de la caracteristica de contratación personal debe ser numerico',
            'project.personal.porcent.numeric'              => 'El campo porcentaje de la característica de contratación de personal debe ser numerico',
            'project.mobra.amount.numeric'                  => 'El campo monto de la caracteristica de mano de obra debe ser numerico',
            'project.mobra.porcent.numeric'                 => 'El campo porcentaje de la característica de mano de obra debe ser numerico',
            'project.insumos.amount.numeric'                => 'El campo monto de la caracteristica de insumos/material debe ser numerico',
            'project.insumos.porcent.numeric'               => 'El campo porcentaje de la característica de insumos/material debe ser numerico',
            'project.equipo.amount.numeric'                 => 'El campo monto de la caracteristica de equipo debe ser numerico',
            'project.equipo.porcent.numeric'                => 'El campo porcentaje de la característica de equipo debe ser numerico',
            'project.mobiliario.amount.numeric'             => 'El campo monto de la caracteristica de mobiliario debe ser numerico',
            'project.mobiliario.porcent.numeric'            => 'El campo porcentaje de la característica de mobiliario debe ser numerico',
            'project.construccion.amount.numeric'           => 'El campo monto de la caracteristica de construcción debe ser numerico',
            'project.construccion.porcent.numeric'          => 'El campo porcentaje de la característica de construcción debe ser numerico',
            'project.reparaciones.amount.numeric'           => 'El campo monto de la caracteristica de reparaciones debe ser numerico',
            'project.reparaciones.porcent.numeric'          => 'El campo porcentaje de la característica de reparaciones debe ser numerico',
            'project.arrendamiento.amount.numeric'          => 'El campo monto de la caracteristica de arrendamiento debe ser numerico',
            'project.arrendamiento.porcent.numeric'         => 'El campo porcentaje de la característica de arrendamiento debe ser numerico',
            'project.inmueble.amount.numeric'               => 'El campo monto de la caracteristica de inmueble debe ser numerico',
            'project.inmueble.porcent.numeric'              => 'El campo porcentaje de la característica de inmueble debe ser numerico',
            'project.tramite.amount.numeric'                => 'El campo monto de la caracteristica de tramite debe ser numerico',
            'project.tramite.porcent.numeric'               => 'El campo porcentaje de la característica de tramite debe ser numerico',
            'project.software.amount.numeric'               => 'El campo monto de la caracteristica de software debe ser numerico',
            'project.software.porcent.numeric'              => 'El campo porcentaje de la característica de software debe ser numerico',
            'project.otros.amount.numeric'                  => 'El campo monto de la caracteristica de otros debe ser numerico',
            'project.otros.porcent.numeric'                 => 'El campo porcentaje de la característica de otros debe ser numerico',
            'project.porcents.anual_porcent.numeric'        => 'El campo de porcentaje en columna de ganancia de la temporalidad anual debe ser numerico',
            'project.otros.porcent.numeric'                 => 'El campo de monto en columna de ganancia de la temporalidad anual debe ser numerico',
            'project.porcents.semestral_porcent.numeric'    => 'El campo de porcentaje en columna de ganancia de la temporalidad semestral debe ser numerico',
            'project.porcents.semestral.numeric'            => 'El campo de monto en columna de ganancia de la temporalidad semestral debe ser numerico',
            'project.porcents.trimestral_porcent.numeric'   => 'El campo de porcentaje en columna de ganancia de la temporalidad trimestral debe ser numerico',
            'project.porcents.trimestral.numeric'           => 'El campo de monto en columna de ganancia de la temporalidad trimestral debe ser numerico',
            'project.porcents.bimestral_porcent.numeric'    => 'El campo de porcentaje en columna de ganancia de la temporalidad bimestral debe ser numerico',
            'project.porcents.bimestral.numeric'            => 'El campo de monto en columna de ganancia de la temporalidad bimestral debe ser numerico',
            'project.porcents.desinversion_porcent.numeric' => 'El campo de porcentaje en columna de ganancia de la temporalidad desinversión debe ser numerico',
            'project.porcents.desinversion.numeric'         => 'El campo de monto en columna de ganancia de la temporalidad desinversión debe ser numerico',
            //'project.render.required'                        => 'El campo de fotografía o render es obligatorio',
            //'project.render.mimes'                        => 'El campo de fotografía o render debe ser contener la extension .jpeg ó .pdf',
            //'project.doc_avala.required'                     => 'El archivo que avala el proyecto es obligatorio',
            //'project.doc_avala.mimes'                     => 'El archivo que avala el proyecto debe contener la extension .pdf',
            'project.list_avala.required_if'            => 'Debe elegir el documento que avala el proyecto en la lista',
            'project.list_avala.numeric'            => 'Debe elegir el documento que avala el proyecto en la lista',
        ];
    }
}
