<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use App\Models\Unit;
use Brick\Math\BigInteger;
use Livewire\Component;

class CreateService extends Component
{

    public $open = false;
    public $name, $acronym, $unit;

    protected $rules = [
        'name' => 'required',
        'acronym' => 'required|max:10',
        'unit' => 'required',
    ];

    public function render()
    {

        $units = Unit::all();

        return view('livewire.service.create-service', compact('units'));
    }

    public function save()
    {
        $this->validate();

        Service::create([
            'name' => $this->name,
            'acronym' => $this->acronym,
            'id_unit' => (int)$this->unit,
        ]);

        $this->reset(
            'open',
            'name',
            'acronym',
            'unit',
        );

        $this->emitTo('unit.show-units', 'render');
        $this->emit('alert', 'El servicio se creó satisfactoriamente');
    }
}
