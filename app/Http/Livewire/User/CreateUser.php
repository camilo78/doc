<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateUser extends Component
{

    public $open = false;
    public $name, $email, $password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|min:6',
    ];

    public function render()
    {
        return view('livewire.user.create-user');
    }

    public function save()
    {
        $this->validate();
        $status = true;

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'status' => $status,
        ]);

        $this->reset(
            'open',
            'name',
            'email',
            'password',
        );

        $this->emitTo('user.show-users', 'render');
        $this->emit('alert', 'El usuario se creó satisfactoriamente');
    }
}
