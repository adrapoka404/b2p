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
            // campos de la sección General
            'annual_earnings'       => 'required|numeric',
            'employees'             => 'required|numeric',
            'name'                  => 'required',
            'goal'                  => 'required|numeric',
            'estimated_term'        => 'required|numeric',
            'location'              => 'required',
            'investment_breakdown'  => 'required|min:250',
            'project_type_id'       => 'required',
            'capital'               => 'required|min:250',
            'returns'               => 'required|min:250',
            //'contract'              => 'required',
            // Campos de la sección Responsable
            'personal.name'                     => 'required',
            'personal.firstname'                => 'required',
            'personal.secondname'               => 'required',
            'personal.email'                    => 'required|email',
            'personal.birthday'                 => 'required',
            'personal.genere'                   => 'required',
            'personal.mobile'                   => 'required|digits:10',
            'personal.nationality'              => 'required',
            'personal.curp'                     => 'required|max:18',
            'personal.rfc'                      => 'required|min:12|max:13',
            'personal.economic_activity_id'     => 'required',
            'personal.income_id'                => 'required',
            // Campos de la sección Dirección
            'address.address'       => 'required',
            'address.ext'           => 'required',
            'address.int'           => 'nullable',
            'address.zipcode'       => 'required|min:4|max:5',
            'address.suburb'        => 'required',
            'address.municipaly'    => 'required',
            'address.state'         => 'required',
            'address.country'       => 'required',
            // Campos de la seccion Documentos
            'documents.url_ine'             => 'required|mimes:pdf',
            'documents.url_curp'            => 'required|mimes:pdf',
            'documents.url_rfc'             => 'required|mimes:pdf',
            'documents.url_home'            => 'required|mimes:pdf',
            'documents.url_tax_situation'   => 'required|mimes:pdf',
            'documents.url_bureau_report'   => 'required|mimes:pdf',
            'documents.url_collateral'      => 'required|mimes:pdf',
            // Campos de la sección Multimedia
            'multimedia.multimedia1'    => 'required|mimes:jpg,bmp,png',
            'multimedia.multimedia2'    => 'required|mimes:jpg,bmp,png',
            'multimedia.multimedia3'    => 'required|mimes:jpg,bmp,png',
            'multimedia.multimedia4'    => 'nullable|mimes:jpg,bmp,png',
            'multimedia.multimedia5'    => 'nullable|mimes:jpg,bmp,png',
            'multimedia.multimedia6'    => 'nullable|mimes:jpg,bmp,png',
            'multimedia.multimedia7'    => 'nullable|mimes:jpg,bmp,png',
            'multimedia.multimedia8'    => 'nullable|mimes:jpg,bmp,png',
            'multimedia.multimedia9'    => 'nullable|mimes:jpg,bmp,png',
            'multimedia.multimedia10'   => 'nullable|mimes:jpg,bmp,png',
            // Campos de la sección Empresa
            'enterprise.business_name'      => 'required',
            'enterprise.tradename'          => 'required',
            'enterprise.date_constitution'  => 'required',
            'enterprise.website'            => 'nullable|url',
            'enterprise.contact_person'     => 'required',
            'enterprise.contact_mail'       => 'required|email',
            'enterprise.business_turn'      => 'required',
            'enterprise.coordenadas'        => 'required',
            'enterprise.influence'          => 'required',
        ];
    }

    public function attributes()
    {
        return [
            // Atributos para la sección General
            'annual_earnings'       => 'Ganancias anuales',
            'name'                  => 'Nombre',
            'employees'             => 'Empleados',
            'goal'                  => 'Meta',
            'estimated_term'        => 'Plazo estimado',
            'location'              => 'ubicación física',
            'investment_breakdown'  => 'Desglose de inversión',
            'project_type_id'       => 'Tipo de proyecto',
            'capital'               => 'Capital',
            'returns'               => 'Rendimientos',
            'contract'              => 'Cont    rato',
            // Atributos para la sección Responsable
            'personal.name'                     => 'Nombre del repsonsable',
            'personal.firstname'                => 'Apellido paterno del responsable',
            'personal.secondname'               => 'Apellido materno del responsable',
            'personal.email'                    => 'Corredo del responsable',
            'personal.birthday'                 => 'Fecha de nacimiento del responsable',
            'personal.genere'                   => 'Genero del responsable',
            'personal.mobile'                   => 'Teléfono móvil del responsable',
            'personal.nationality'              => 'Nacionalidad del responsable',
            'personal.curp'                     => 'CURP',
            'personal.rfc'                      => 'RFC',
            'personal.economic_activity_id'     => 'Actividad económica',
            'personal.income_id'                => 'Ingresos',
            'address.address'                => 'Ingresos',
            // Atributos de la sección Dirección
            'address.address'       => 'Calle',
            'address.ext'           => 'Número exterior',
            'address.int'           => 'Número interior',
            'address.zipcode'       => 'Código postal',
            'address.suburb'        => 'Colonia',
            'address.municipaly'    => 'Municipio',
            'address.state'         => 'Estado',
            'address.country'       => 'País',
            // Atributos de la seccion Documentos
            'documents.url_ine'             => 'INE',
            'documents.url_curp'            => 'CURP',
            'documents.url_rfc'             => 'RFC',
            'documents.url_home'            => 'Comprobante de domicilio',
            'documents.url_tax_situation'   => 'Situación fiscal',
            'documents.url_bureau_report'   => 'Reporte de crédito',
            'documents.url_collateral'      => 'Colateral',
            // Atributos de la sección Multimedia
            'multimedia.multimedia1'    => 'Multimedia 1',
            'multimedia.multimedia2'    => 'Multimedia 2',
            'multimedia.multimedia3'    => 'Multimedia 3',
            'multimedia.multimedia4'    => 'Multimedia 4',
            'multimedia.multimedia5'    => 'Multimedia 5',
            'multimedia.multimedia6'    => 'Multimedia 6',
            'multimedia.multimedia7'    => 'Multimedia 7',
            'multimedia.multimedia8'    => 'Multimedia 8',
            'multimedia.multimedia9'    => 'Multimedia 9',
            'multimedia.multimedia10'   => 'Multimedia 10',
            // Atributos de la sección Empresa
            'enterprise.business_name'      => 'Razón social',
            'enterprise.tradename'          => 'Nombre comercial',
            'enterprise.date_constitution'  => 'Fecha de constitución',
            'enterprise.website'            => 'Sitio web',
            'enterprise.contact_person'     => 'Persona de contacto',
            'enterprise.contact_mail'       => 'Correo de contacto',
            'enterprise.business_turn'      => 'Giro de empresa',
            'enterprise.coordenadas'        => 'Coordenadas del sitio',
            'enterprise.influence'          => 'Zona de influencia',
        ];
    }

    public function messages()
    {
        return [
            // Mensajes de error de la sección General
            'annual_earnings.required'      => 'Las ganancias anuales son un campo requerido',
            'annual_earnings.numeric'       => 'El campo de ganancias anuales debe ser un valor numerico valido',
            'name.required'                 => 'Debes asignar un nombre para tu proyecto',
            'employees.required'            => 'El campo empleados es requerido',
            'employees.numeric'             => 'El campo empleados debe ser un valor numerico',
            'goal.required'                 => 'El campo Meata es requerido',
            'goal.numeric'                  => 'El campo Meta debe ser un valor numerico',
            'estimated_term.required'       => 'El campo Plazo estimado es requerido',
            'estimated_term.numeric'        => 'El campo Plazo estimado debe ser entre 6 y 36 meses',
            'location.required'             => 'El campo Ubicación física es requerido',
            'investment_breakdown.required' => 'El desglose de inversión es requerido',
            'investment_breakdown.min'      => 'El Desglose de inversipon debe contener al menos 250 caracteres',
            'project_type_id.required'      => 'El campo Tipo de proyecto es requerdo',
            'capital.required'              => 'El campo capital es requerido',
            'capital.min'                   => 'El campo Capital debe contener al menos 250 caracteres',
            'returns.required'              => 'El campo Rendimiento es requerido',
            'returns.min'                   => 'El campo Rendimiento debe contener al menos 250 caracteres',
            'contract.required'             => 'Debe autorizar que se realice su contrato',
            // Mensajes de error de la sección Responsable
            'personal.name.required'                 => 'El campo Nombre en la sección de Reponsable es requerido',
            'personal.firstname.required'            => 'El campo Apellido paterno de la seccion Reponsable es requerdio',
            'personal.secondname.required'           => 'El campo Apellido materno de la seccion Reponsable es requerdio',
            'personal.email.requierd'                => 'El campo Correo electrónico de la seccion Responsable es requerido',
            'personal.email.email'                   => 'El campo Correo electrónico de la seccion Responsable debe ser un correo valido',
            'personal.birthday.required'             => 'El campo de Fecha de nacimiento es requerido',
            'personal.genere.required'               => 'El campo Genero es requerido',
            'personal.mobile.required'               => 'El campo télefono móvil esrequerido',
            'personal.mobile.digits'                    => 'El campo télefono móvil debe tener máximo 10 digitos',
            'personal.nationality.required'          => 'El campo de Nacionalidad es requerido',
            'personal.curp.required'                 => 'El campo CURP es requerido',
            'personal.curp.max'                      => 'El campo CURP debe contener 18 caracteres alfanumericos',
            'personal.rfc.required'                  => 'El campo RFC es requerido',
            'personal.rfc.min'                       => 'El campo RFC debe contener al menos 12 caracteres',
            'personal.rfc.max'                       => 'El campo RFC debe contener máximo 13 caracteres',
            'personal.economic_activity_id.required' => 'El campo Actividad económica es requerido',
            'personal.income_id.required'            => 'El campo Ingresos es requerido',
            // Mensajes de error de la sección Dirección
            'address.address.required'      => "El campo calle de la sección de direccion es obligatorio",
            'address.ext.required'          => "El campo Número exterior de la sección de direccion es obligatorio",
            'address.zipcode.required'      => "El campo Código postal de la sección de direccion es obligatorio",
            'address.zipcode.min'           => "El campo Código postal de la sección de direccion debe tener al menos cuatro carcateres numericos",
            'address.zipcode.max'           => "El campo Código postal de la sección de direccion debe tener máximo cinco carcateres numericos",
            'address.suburb.required'       => "El campo Colonia de la sección de direccion es obligatorio",
            'address.municipaly.required'   => "El campo Municipio de la sección de direccion es obligatorio",
            'address.state.required'        => "El campo Estado de la sección de direccion es obligatorio",
            'address.country.required'      => "El campo País de la sección de direccion es obligatorio",
            // Mensajes de error de la seccion Documentos
            'documents.url_ine.required'            => 'El archivo INE es requerido',
            'documents.url_ine.mimes'                => 'El archivo INE debe contener la extensión .pdf',
            'documents.url_curp.required'           => 'El archivo CURP es requerido',
            'documents.url_curp.mimes'               => 'El archivo CURP debe contener la extensión .pdf',
            'documents.url_rfc.required'            => 'El archivo RFC es requerido',
            'documents.url_rfc.mimes'                => 'El archivo RFC debe contener la extensión .pdf',
            'documents.url_home.required'           => 'El archivo Comprobante de domicilio es requerido',
            'documents.url_home.mimes'               => 'El archivo Comporbante de comicilio debe contener la extensión .pdf',
            'documents.url_tax_situation.required'  => 'El archivo Situación físcal es requerido',
            'documents.url_tax_situation.mimes'      => 'El archivo Situación físcal debe contener la extensión .pdf',
            'documents.url_bureau_report.required'  => 'El archivo Reporte de Buro de Crédito es requerido',
            'documents.url_bureau_report.mimes'      => 'El archivo Reporte de Buro de Crédito debe contener la extensión .pdf',
            'documents.url_collateral.requierd'     => 'El archivo Colateral es requerido',
            'documents.url_collateral.mimes'         => 'El archivo Colateral debe contener la extensión .pdf',
            // Mensajes de error de la sección Multimedia
            'multimedia.multimedia1.required' => 'El archivo Multimedia 1 es requerido',
            'multimedia.multimedia1.mimes'    => 'El archivo Multimedia 1 debe ser una iamgen valida con alguna de las siguientes extensiones (jpg,bmp,png)',
            'multimedia.multimedia2.required' => 'El archivo Multimedia 2 es requerido',
            'multimedia.multimedia2.mimes'    => 'El archivo Multimedia 2 debe ser una iamgen valida con alguna de las siguientes extensiones (jpg,bmp,png)',
            'multimedia.multimedia3.required' => 'El archivo Multimedia 3 es requerido',
            'multimedia.multimedia3.mimes'    => 'El archivo Multimedia 3 debe ser una iamgen valida con alguna de las siguientes extensiones (jpg,bmp,png)',
            'multimedia.multimedia4.mimes'    => 'El archivo Multimedia 4 debe ser una iamgen valida con alguna de las siguientes extensiones (jpg,bmp,png)',
            'multimedia.multimedia5.mimes'    => 'El archivo Multimedia 5 debe ser una iamgen valida con alguna de las siguientes extensiones (jpg,bmp,png)',
            'multimedia.multimedia6.mimes'    => 'El archivo Multimedia 6 debe ser una iamgen valida con alguna de las siguientes extensiones (jpg,bmp,png)',
            'multimedia.multimedia7.mimes'    => 'El archivo Multimedia 7 debe ser una iamgen valida con alguna de las siguientes extensiones (jpg,bmp,png)',
            'multimedia.multimedia8.mimes'    => 'El archivo Multimedia 8 debe ser una iamgen valida con alguna de las siguientes extensiones (jpg,bmp,png)',
            'multimedia.multimedia9.mimes'    => 'El archivo Multimedia 9 debe ser una iamgen valida con alguna de las siguientes extensiones (jpg,bmp,png)',
            'multimedia.multimedia10.mimes'   => 'El archivo Multimedia 10 debe ser una iamgen valida con alguna de las siguientes extensiones (jpg,bmp,png)',
            // Mensajes de error de la sección Empresa
            'enterprise.business_name.required'     => 'El campo Razón social es requerido',
            'enterprise.tradename.required'         => 'El campo Nombre comercial es requerido',
            'enterprise.date_constitution.required' => 'El campo Fecha de constitución es requerido',
            'enterprise.website.url'                => 'El campo Sitio web debe ser una URL valida',
            'enterprise.contact_person.required'    => 'El campo Persona de contacto es requerido',
            'enterprise.contact_mail.required'      => 'El campo Correo de contacto es requerido',
            'enterprise.contact_mail.email'         => 'El campo Correo debe ser un email valido',
            'enterprise.business_turn.required'     => 'El campo Giro de la empresa es requerido',
            'enterprise.coordenadas.required'       => 'El campo Coordenadas es requerido',
            'enterprise.influence.required'         => 'El campo Zona de influencia es requerido',
        ];
    }
}
