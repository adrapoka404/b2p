<?php

namespace App\Http\Controllers;

use App\Models\EconomicActivity;
use App\Models\Genere;
use App\Models\Income;
use App\Models\Influence;
use App\Models\Nationality;
use App\Models\Project;
use App\Models\ProjectType;
use App\Models\SteepTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class SteepTwoController extends Controller
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
        $project_id = session('project_id');
        
        return view('projects.steeptwo', compact('projecttypes', 'generes', 'nationalities', 'economicactivities', 'incomes', 'influences', 'docs', 'companies', 'years', 'project_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $steeptwo = $request->all('company');

       $steeptwo = $steeptwo['company'];

        if($request->file('company.acta_constitutiva'))
            $steeptwo['acta_constitutiva'] = Storage::put(session('url_docs'), $request->file('company.acta_constitutiva'));
        
            if($request->file('company.carta_poder'))
            $steeptwo['carta_poder'] = Storage::put(session('url_docs'), $request->file('company.carta_poder'));

            if($request->file('company.rfc_doc'))
            $steeptwo['rfc_doc'] = Storage::put(session('url_docs'), $request->file('company.rfc_doc'));

            if($request->file('company.aviso_modificacion'))
            $steeptwo['aviso_modificacion'] = Storage::put(session('url_docs'), $request->file('company.aviso_modificacion'));

            if($request->file('company.cedula'))
            $steeptwo['cedula'] = Storage::put(session('url_docs'), $request->file('company.cedula'));

            if($request->file('company.constancia_fiscal'))
            $steeptwo['constancia_fiscal'] = Storage::put(session('url_docs'), $request->file('company.constancia_fiscal'));

            if($request->file('company.declaracion_fiscal'))
            $steeptwo['declaracion_fiscal'] = Storage::put(session('url_docs'), $request->file('company.declaracion_fiscal'));

            if($request->file('company.declaracion_mensual'))
            $steeptwo['declaracion_mensual'] = Storage::put(session('url_docs'), $request->file('company.declaracion_mensual'));

            if($request->file('company.comprobante_domicilio'))
            $steeptwo['comprobante_domicilio'] = Storage::put(session('url_docs'), $request->file('company.comprobante_domicilio'));

            if($request->file('company.datos_bancarios'))
            $steeptwo['datos_bancarios'] = Storage::put(session('url_docs'), $request->file('company.datos_bancarios'));

            if($request->file('company.cv'))
            $steeptwo['cv'] = Storage::put(session('url_docs'), $request->file('company.cv'));

            if($request->file('company.foto_exterior'))
            $steeptwo['foto_exterior'] = Storage::put(session('url_docs'), $request->file('company.foto_exterior'));

            if($request->file('company.foto_interior'))
            $steeptwo['foto_interior'] = Storage::put(session('url_docs'), $request->file('company.foto_interior'));
        
            $project = Project::find(session('project_id'));

            $steeptwo['project_id']     = $project->id;
            $steeptwo['user_id']        = $project->user_id;

        $steeptwo = SteepTwo::create($steeptwo);
        
        return redirect()->route('steeptwo.edit', $steeptwo->id);
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
        $steeptwo = SteepTwo::find($id);

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
        $project_id = session('project_id');
        
        return view('projects.steeptwoedit', compact('projecttypes', 'generes', 'nationalities', 'economicactivities', 'incomes', 'influences', 'docs', 'companies', 'years', 'project_id', 'steeptwo'));

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
