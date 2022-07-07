<?php

namespace App\Http\Controllers;

use App\Models\Sepomex;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function zipcode($zipcode){
        //return "Yo mero: " . $zipcode;
        $cps = Sepomex::where('cp', $zipcode)->get();
        //$cps = Sepomex::where('cp', $zipcode)->groupBy('asentamiento')->get();
        
        return $cps;
    }
}
