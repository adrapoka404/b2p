<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Multimedia;
use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class ProjectIndex extends Component
{
    public function render()
    {
        $projects = Project::orderBy('id', 'asc')->paginate(10);
        
        foreach($projects as &$project) {
            $project->multimedia = Multimedia::where('project_id', $project->id)->get();
            $project->investments = '0';//Multimedia::find('project_id', $project->id);
            $project->company = Company::where('project_id', $project->id)->get();
            $project->user = User::where('id', $project->user_id)->get();
        }

        return view('livewire.project-index', compact('projects'));
    }
}
