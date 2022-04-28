<?php

namespace App\Http\Livewire\Sudo;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolepermissionIndex extends Component
{
    public function render()
    {

        $roles = Role::orderBy('id', 'asc')->paginate(5);
        
        return view('livewire.sudo.rolepermission-index', compact('roles'));
    }
}
