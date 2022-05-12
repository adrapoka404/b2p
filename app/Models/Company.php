<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    //Para los permitidos
    protected $fillable = ['project_id', 'business_name', '	tradename', 'constitution _date', '	website', 'contact_person', 'contact_email ', 'turn', 'locations', 'record_situation', 'area_oparations'];
    //para los protegidos
    protected $guarded = [''];
}
