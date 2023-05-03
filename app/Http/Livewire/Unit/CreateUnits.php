<?php

namespace App\Http\Livewire\Unit;

use Livewire\Component;
use App\Models\Unit;

class CreateUnits extends Component
{

    public $open = false;
    public $name, $acronym, $address;

    protected $rules = [
        'name' => 'required',
        'acronym' => 'required|max:10',
        'address' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.unit.create-units');
    }

    public function save()
    {
        $this->validate();

        Unit::create([
            'name' => $this->name,
            'acronym' => $this->acronym,
            'address' => $this->address,
        ]);

        $this->reset(
            'open',
            'name',
            'acronym',
            'address',
        );

        $this->emitTo('unit.show-units', 'render');
        $this->emit('alert', 'La unidad se creó satisfactoriamente');
    }
}
