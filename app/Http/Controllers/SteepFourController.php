<?php

namespace App\Http\Controllers;

use App\Models\EconomicActivity;
use App\Models\Genere;
use App\Models\Income;
use App\Models\Influence;
use App\Models\Nationality;
use App\Models\ProjectType;
use Illuminate\Http\Request;

class SteepFourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projecttypes       = ProjectType::orderBy('name', 'asc')->get();
        $generes            = Genere::orderBy('id', 'asc')->get();
        $nationalities      = Nationality::orderBy('id', 'asc')->get();
        $economicactivities = EconomicActivity::where('status', 1)
            ->orderBy('id', 'asc')
            ->get();

        $incomes            = Income::where('status', 1)
            ->orderBy('id', 'asc')
            ->get();

        $influences            = Influence::orderBy('id', 'asc')
            ->get();

        $docs = [
                    "1" => "Titulo de propiedad",
                    "2" => "Factibilidad de servicios",
                    "3" => "Permisos",
                    "4" => "Licencia de funcionamiento",
                    "5" => "Planos",
                    "6" => "Contrato de arrendamiento",
                    "7" => "Otro ¿Cúal?"
        ];

        $companies = [
                    "1" => "Adquisición de equipo y maquinaria",
                    "2" => "Adquisición de insumos",
                    "3" => "Comercialización",
                    "4" => "Construcción",
                    "5" => "Productos y Servicios",
                    "6" => "Tecnología",
                    "7" => "Transporte"
                    ];
        
        
        $thisYear = date('Y');
        $years = [
            "1" => $thisYear - 2,
            "2" => $thisYear - 1,
            "3" => $thisYear

        ];

        return view('projects.steepfour', compact('projecttypes', 'generes', 'nationalities', 'economicactivities', 'incomes', 'influences', 'docs', 'companies', 'years'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "redirect steep three";
        return redirect()->route('steepfive.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
