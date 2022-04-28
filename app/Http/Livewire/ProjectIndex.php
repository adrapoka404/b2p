<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectIndex extends Component
{
    public function render()
    {
        $projects = Project::orderBy('name', 'asc')->paginate(10);
        return view('livewire.project-index', compact('projects'));
    }
}
