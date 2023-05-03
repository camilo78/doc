<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class CreateUser extends Component
{

    public $open = false;
    public function render()
    {
        return view('livewire.user.create-user');
    }
}
