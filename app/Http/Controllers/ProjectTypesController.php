<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectType;
use App\Models\ProjectType;
use Illuminate\Http\Request;

class ProjectTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projecttypes = ProjectType::orderBy('id', 'asc')->paginate(10);
        
        return view('sudo.projecttypes.index', compact('projecttypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sudo.projecttypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectType $request)
    {
        ProjectType::create($request->all()); 

        return redirect()->route('projecttypes.index')->with('info', 'Perfect');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectType $projecttype)
    {
        return "ñ_ñ";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit( ProjectType $projecttype)
    {
        return view('sudo.projecttypes.edit', compact('projecttype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjectType $request, ProjectType $projecttype)
    {
        $projecttype->update($request->all());

        return redirect()->route('projecttypes.index')->with('info', 'Perfect edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectType $projecttype)
    {
        //
    }
}
