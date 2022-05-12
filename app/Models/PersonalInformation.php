<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    //Para los permitidos
   protected $fillable = ['user_id','name', 'firstname', 'secondname', 'email', 'birthday', 'genere', 'mobile', 'nationality', 'curp', 'curp_verify', 'rfc', 'rfc_verify', 'economic_activity_id', 'income_id'];
   //para los protegidos
   protected $guarded = [''];
}
