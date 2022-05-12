<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    use HasFactory;
    //Para los permitidos
    protected $fillable = ['name', 'status'];
    //para los protegidos
    protected $guarded = [''];
}
