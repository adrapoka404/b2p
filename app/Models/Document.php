<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

     //Para los permitidos
   protected $fillable = ['project_id','url_ine', 'url_curp', 'url_rfc', 'url_home', 'url_tax_situation', 'url_bureau_report', 'url_collateral'];
   //para los protegidos
   protected $guarded = [''];
}
