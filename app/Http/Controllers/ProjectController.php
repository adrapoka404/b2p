<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProject;
use App\Models\Address;
use App\Models\Company;
use App\Models\Document;
use App\Models\DocumentType;
use App\Models\EconomicActivity;
use App\Models\Genere;
use App\Models\Income;
use App\Models\Influence;
use App\Models\Investor;
use App\Models\Multimedia;
use App\Models\Nationality;
use App\Models\PersonalInformation;
use App\Models\Project;
use App\Models\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projecttypes   = ProjectType::orderBy('name', 'asc')->get();
        $docs           = DocumentType::all();

        return view('projects.steepone', compact('projecttypes', 'docs'));
    }

    public function steepone(Request $request){
        return $request;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProject $request)
    {


        $project = new Project();
        $project->user_id               = $request->user()->id;
        $project->name                  = $request->name;
        $project->is_working            = ($request->is_working == 'on' ? 1 : 0);
        $project->annual_earnings       = $request->annual_earnings;
        $project->employees             = $request->employees;
        $project->goal                  = $request->goal;
        $project->estimated_term        = $request->estimated_term;
        $project->location              = $request->location;
        $project->project_type_id       = $request->project_type_id;
        $project->investment_breakdown  = $request->investment_breakdown;
        $project->capital               = $request->capital;
        $project->returns               = $request->returns;
        //$project->contract              = $request->contract;
        

        $project->save();
             
        $personal_info = new PersonalInformation();

        $personal_info->user_id                 = $request->user()->id;
        $personal_info->name                    = $request->personal['name'];
        $personal_info->firstname               = $request->personal['firstname'];
        $personal_info->secondname              = $request->personal['secondname'];
        $personal_info->email                   = $request->user()->email;
        $personal_info->birthday                = $request->personal['birthday'];
        $personal_info->genere                  = $request->personal['genere'];
        $personal_info->mobile                  = $request->personal['mobile'];
        $personal_info->nationality             = $request->personal['nationality'];
        $personal_info->curp                    = $request->personal['curp'];
        $personal_info->rfc                     = $request->personal['rfc'];
        $personal_info->economic_activity_id    = $request->personal['economic_activity_id'];
        $personal_info->income_id               = $request->personal['income_id'];

        $personal_info->save();

        $address = new Address();
        
        $address->project_id    = $project->id;
        $address->address       = $request->address['address'];
        $address->ext           = $request->address['ext'];
        $address->int           = $request->address['int'];
        $address->zipcode       = $request->address['zipcode'];
        $address->suburb        = $request->address['suburb'];
        $address->municipaly    = $request->address['municipaly'];
        $address->state         = $request->address['state'];
        $address->country       = $request->address['country'];

        $address->save();
        
        $url_save = 'users/'.$request->user()->email.'/documents';
        
        $documents = new Document();
    
        $documents->user_id             = $request->user()->id;    
        $documents->url_ine             = Storage::put($url_save, $request->file('documents.url_ine'));
        $documents->url_curp            = Storage::put($url_save, $request->file('documents.url_curp'));
        $documents->url_rfc             = Storage::put($url_save, $request->file('documents.url_rfc'));
        $documents->url_home            = Storage::put($url_save, $request->file('documents.url_home'));
        $documents->url_tax_situation   = Storage::put($url_save, $request->file('documents.url_tax_situation'));
        $documents->url_bureau_report   = Storage::put($url_save, $request->file('documents.url_bureau_report'));
        $documents->url_collateral      = Storage::put($url_save, $request->file('documents.url_collateral'));

        $documents->save();
        
        $url_save = 'users/projects/' . $request->enterprise['business_name'];

        $multimedia = new Multimedia();

        $multimedia->project_id     = $project->id;
        $multimedia->links          = $request->multimedia['links'];
        $multimedia->multimedia1    = Storage::put($url_save, $request->file('multimedia.multimedia1'));
        $multimedia->multimedia2    = Storage::put($url_save, $request->file('multimedia.multimedia2'));
        $multimedia->multimedia3    = Storage::put($url_save, $request->file('multimedia.multimedia3'));

        if ($request->file('multimedia.multimedia4'))
            $multimedia->multimedia4 = Storage::put($url_save, $request->file('multimedia.multimedia4'));

        if ($request->file('multimedia.multimedia5'))
            $multimedia->multimedia5 = Storage::put($url_save, $request->file('multimedia.multimedia5'));

        if ($request->file('multimedia.multimedia6'))
            $multimedia->multimedia6 = Storage::put($url_save, $request->file('multimedia.multimedia6'));

        if ($request->file('multimedia.multimedia7'))
            $multimedia->multimedia7 = Storage::put($url_save, $request->file('multimedia.multimedia7'));

        if ($request->file('multimedia.multimedia8'))
            $multimedia->multimedia8 = Storage::put($url_save, $request->file('multimedia.multimedia8'));

        if ($request->file('multimedia.multimedia9'))
            $multimedia->multimedia9 = Storage::put($url_save, $request->file('multimedia.multimedia9'));

        if ($request->file('multimedia.multimedia10'))
            $multimedia->multimedia10 = Storage::put($url_save, $request->file('multimedia.multimedia10'));

        $multimedia->save();

        $company = new Company();

        $company->project_id        = $project->id;
        $company->business_name     = $request->enterprise['business_name']; 
        $company->tradename         = $request->enterprise['tradename'];
        $company->constitution_date = $request->enterprise['date_constitution'];
        $company->website           = $request->enterprise['website'];
        $company->contact_person    = $request->enterprise['contact_person'];
        $company->contact_email     = $request->enterprise['contact_mail'];
        $company->turn              = $request->enterprise['business_turn'];
        $company->locations         = $request->enterprise['coordenadas'];
        $company->record_situation  = $request->enterprise['influence'];
        
        $company->save();

        if($request->investment['investment'] > 0) {
            $investor = new Investor();
            
            $investor->investment               = $request->investment['investment'];
            $investor->partner                  = 1;
            $investor->personal_information_id  = $personal_info->id;
            $investor->address_id               = $address->id;
            $investor->documents_id             = $documents->id;

            $investor->save();
        }
        
        return redirect()->route('projects.index')->with('info', 'Proyecto creado con éxito');
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
