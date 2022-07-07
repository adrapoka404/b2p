<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProject;
use App\Models\DocumentType;
use App\Models\Project;
use App\Models\ProjectType;
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
        $myProjects = Project::where('user_id', Auth::user()->id)->get();
        return view('projects.myprojects', compact('myProjects'));
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
            'project.name' => 'required',
            'project.project_type_id' => 'required|numeric',
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


        $url_save = Auth::user()->email . '/projects/' . $request->project['name'];

        if ($request->file('project.render'))
            $nuevo['render'] = Storage::put($url_save, $request->file('project.render'));
        
        if ($request->file('project.render'))
            $nuevo['render'] = Storage::put($url_save, $request->file('project.render'));

        $nuevo['url_docs'] = $url_save;
        $nuevo['user_id'] = Auth::user()->id;
        
        if($nuevo['exist'] != 0) {
           $nProject = Project::find($nuevo['exist']);
               
           $nProject->update($nuevo);
        } else
            $nProject = Project::create($nuevo);
        
        if($nuevo['completo'] == 0)
        return redirect()->route('steepone.edit', $nProject->id);

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
        $project        = Project::find($id);

        if($project->completo == 1)
            return redirect()->route('steeptwo.edit', $project->id);

        $projecttypes   = ProjectType::orderBy('name', 'asc')->get();
        $docs           = DocumentType::all();

        $project->options       = json_decode($project->options);
        $project->inputs        = json_decode($project->inputs);
        $project->origins       = json_decode($project->origins);
        $project->debs          = json_decode($project->debs);
        $project->personal      = json_decode($project->personal);
        $project->mobra         = json_decode($project->mobra);
        $project->insumos       = json_decode($project->insumos);
        $project->equipo        = json_decode($project->equipo);
        $project->mobiliario    = json_decode($project->mobiliario);
        $project->construccion  = json_decode($project->construccion);
        $project->reparaciones  = json_decode($project->reparaciones);
        $project->arrendamiento = json_decode($project->arrendamiento);
        $project->inmueble      = json_decode($project->inmueble);
        $project->tramites      = json_decode($project->tramites);
        $project->software      = json_decode($project->software);
        $project->otros         = json_decode($project->otros);
        $project->porcents      = json_decode($project->porcents);
        
        $pOptions   = $this->cuenta_valores($project->options);
        $pInputs    = $this->cuenta_valores($project->inputs);
        $pOrigins   = $this->cuenta_valores($project->origins);
            
        //return $pOptions;
        return view('projects.steeponeedit', compact('projecttypes', 'docs', 'project', 'pOptions', 'pInputs', 'pOrigins'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProject $request, Project $id)
    {
  /*      
        
*/
        $nuevo = $request->all('project');
       
        if($request->file('project.render') ) {
            $request->validate([
                'project.render'                        => 'required_if:project.completo,=,1|mimes:jpeg,pdf',
            ]);
        }

        if($request->file('project.doc_avala') ) {
            $request->validate([
                'project.doc_avala'                     => 'required_if:project.completo,=,1|mimes:pdf',
            ]);
        }
        $nuevo                  = $nuevo['project'];
        $nuevo['options']       = json_encode($nuevo['options']);
        $nuevo['inputs']        = json_encode($nuevo['inputs']);
        $nuevo['origins']       = json_encode($nuevo['origins']);
        $nuevo['debs']          = json_encode($nuevo['debs']);
        $nuevo['personal']      = json_encode($nuevo['personal']);
        $nuevo['mobra']         = json_encode($nuevo['mobra']);
        $nuevo['insumos']       = json_encode($nuevo['insumos']);
        $nuevo['equipo']        = json_encode($nuevo['equipo']);
        $nuevo['mobiliario']    = json_encode($nuevo['mobiliario']);
        $nuevo['construccion']  = json_encode($nuevo['construccion']);
        $nuevo['reparaciones']  = json_encode($nuevo['reparaciones']);
        $nuevo['arrendamiento'] = json_encode($nuevo['arrendamiento']);
        $nuevo['inmueble']      = json_encode($nuevo['inmueble']);
        $nuevo['tramites']      = json_encode($nuevo['tramites']);
        $nuevo['software']      = json_encode($nuevo['software']);
        $nuevo['otros']         = json_encode($nuevo['otros']);
        $nuevo['porcents']      = json_encode($nuevo['porcents']);


        $url_save = Auth::user()->email . '/projects/' . $request->project['name'];

        if ($request->file('project.render'))
            $nuevo['render'] = Storage::put($url_save, $request->file('project.render'));
                
        if ($request->file('project.doc_avala'))
            $nuevo['doc_avala'] = Storage::put($url_save, $request->file('project.doc_avala'));

        $nuevo['url_docs'] = $url_save;
        $nuevo['user_id'] = Auth::user()->id;
        
        if($nuevo['exist'] != 0) {
           $nProject = Project::find($nuevo['exist']);
               
           $nProject->update($nuevo);
        } else
            $nProject = Project::create($nuevo);
        
        if($nuevo['completo'] == 0)
            return redirect()->route('steepone.edit', $nProject->id);

        session()->put('project_id', $nProject->id);
        session()->put('url_docs', $nProject->url_docs);
        return redirect()->route('steeptwo.create', $nProject->id);
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

    private function cuenta_valores($array){
        $v = 0;
        
        foreach($array as $e)
            if($e != null)
                $v++;

        $v = ceil($v / 2);
        
        return $v;
    }
}
