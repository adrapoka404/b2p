<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;
use Illuminate\Http\Request;
class NewProject extends Component
{
    public $new_project = [];

    public function mount(){
        $this->new_project = [
            'is_working'        => 1,
            'annual_earnings'   => '1000000',
            'employees'         => '1000',
            'goal'              => '100000',
            'estimated_term'    => '36',
            'location'          => '19.2772759,-99.6142546	',
            'project_type_id'   => '0',
        ];
    }

    public function render(Request $request)
    {
        //$request->session()->forget('new_project');
        if ($request->session()->get('new_project'))
            $project = Project::find(session('new_project'));
        else {
            $project = new Project();

            $project->save();
            $request->session()->put('new_project', $project->id);
            $request->session()->put('project_steep', 1);
        }

        return view('livewire.new-project', compact('project'));
    }


}
