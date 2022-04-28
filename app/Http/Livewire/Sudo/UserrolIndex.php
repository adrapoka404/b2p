<?php

namespace App\Http\Livewire\Sudo;

use App\Models\User;
use Livewire\Component;

class UserrolIndex extends Component
{
    public function render()
    {
        $usuarios = User::paginate(5);
        return view('livewire.sudo.userrol-index', compact('usuarios'));
    }
}
