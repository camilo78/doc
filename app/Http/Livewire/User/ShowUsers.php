<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;

class ShowUsers extends Component
{

    public $search;
    public $sort = "id";
    public $direction = "asc";

    public function render()
    {
        $users = User::where('name','like','%'.$this->search.'%')
        ->orWhere('email','like','%'.$this->search.'%')
        ->orderBy($this->sort, $this->direction)
        ->get();
        return view('livewire.user.show-users', compact('users'));
    }

    public function order($sort){
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            } 
        } else {
            $this->sort = $sort;
            $this->direction = 'desc';
        }
        
    }
}
