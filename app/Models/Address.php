<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    //Para los permitidos
    protected $fillable = ['project_id','address', 'ext', 'int', 'zipcode', 'suburb', 'municipaly', 'state', 'country'];
   //para los protegidos
   protected $guarded = [''];

}
