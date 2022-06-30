<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

   //Para los permitidos
   protected $fillable = [
                            'user_id','name', 'project_type_id', 'description', 'options', 
                            'location', 'goal', 'goal_two','inputs', 'origins', 'request_max',
                            'request_min','debt','debs', 'estimated_term', 'estimated_ejecution',
                            'min_investment', 'personal', 'mobra', 'insumos', 'equipo', 'mobiliario', 
                            'construccion', 'reparaciones', 'arrendamiento', 'inmueble', 'tramites',
                            'software', 'otros', 'porcents', 'render', 'doc_avala', 'document_type_id', 
                            'completo', 'url_docs'
                        ];
   //para los protegidos
   protected $guarded = [''];
}
