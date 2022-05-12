<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

   //Para los permitidos
   protected $fillable = ['user_id','is_working', 'annueal_earnings', 'employees', 'goal', 'estimated_term', 'location', 'project_type_id','investment_breakdown','capital','returns','contract'];
   //para los protegidos
   protected $guarded = [''];
}
