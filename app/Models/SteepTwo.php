<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SteepTwo extends Model
{
    use HasFactory;
    protected $table = "steeptwo";

    protected $fillable = [
        'user_id','project_id','description', 'razonsocial', 'nombrecomercial', 'constitution', 
        'iniciofunciones', 'whynoinfunction', 'rfc','siteweb', 'fb', 'tw','yt','tt','inst',
        'type','ganacias_year1','ganacias_year2', 'ganacias_year3', 'ganacias_esperadas',
        'empleados', 'calle', 'noexterior', 'nointerior', 'cp', 'colonia', 
        'referencia', 'telefono', 'correo', 'url_services', 'completo',
        'exist', 'rfc_doc', 'acta_constitutiva', 'carta_poder', 'aviso_modificacion', 'cedula', 
        'constancia_fiscal', 'declaracion_fiscal','declaracion_mensual','comprobante_domicilio',
        'datos_bancarios','cv', 'foto_exterior','foto_interior'
    ];

}
