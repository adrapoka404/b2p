<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    //Para los permitidos
    protected $fillable = ['name', 'status'];
    //para los protegidos
    protected $guarded = [''];
    //relación uno a muchos de datos personales 
    public function personalInformations(){
        return $this->hasMany('App\Models\PersonalInformation');
    }
}
