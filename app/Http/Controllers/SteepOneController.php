<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProject;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use function GuzzleHttp\Promise\all;

class SteepOneController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'project.name' => 'required'
        ]);

        $nuevo = $request->all('project');
        $nuevo = $nuevo['project'];
        $nuevo['options'] = json_encode($nuevo['options']);
        $nuevo['inputs'] = json_encode($nuevo['inputs']);
        $nuevo['origins'] = json_encode($nuevo['origins']);
        $nuevo['debs'] = json_encode($nuevo['debs']);
        $nuevo['personal'] = json_encode($nuevo['personal']);
        $nuevo['mobra'] = json_encode($nuevo['mobra']);
        $nuevo['insumos'] = json_encode($nuevo['insumos']);
        $nuevo['equipo'] = json_encode($nuevo['equipo']);
        $nuevo['mobiliario'] = json_encode($nuevo['mobiliario']);
        $nuevo['construccion'] = json_encode($nuevo['construccion']);
        $nuevo['reparaciones'] = json_encode($nuevo['reparaciones']);
        $nuevo['arrendamiento'] = json_encode($nuevo['arrendamiento']);
        $nuevo['inmueble'] = json_encode($nuevo['inmueble']);
        $nuevo['tramites'] = json_encode($nuevo['tramites']);
        $nuevo['software'] = json_encode($nuevo['software']);
        $nuevo['otros'] = json_encode($nuevo['otros']);
        $nuevo['porcents'] = json_encode($nuevo['porcents']);


        $url_save = 'users/projects/' . $request->project['name'] . time();

        if ($request->file('project.render'))
            $nuevo['render'] = Storage::put($url_save, $request->file('project.render'));
        
        if ($request->file('project.render'))
            $nuevo['render'] = Storage::put($url_save, $request->file('project.render'));

        $nuevo['url_docs'] = $url_save;
        $nuevo['user_id'] = Auth::user()->id;
        $nProject = Project::create($nuevo);
        
        return redirect()->route('steeptwo.create', $nProject->id);
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
