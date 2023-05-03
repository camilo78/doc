<?php

namespace App\Http\Livewire\Unit;

use App\Models\Unit;
use Livewire\Component;
use Livewire\WithPagination;

class ShowUnits extends Component
{
    use WithPagination;

    public $search, $unit;
    public $sort = "id";
    public $direction = "asc";
    public $cant = 10;
    public $readyToLoad = false;

    public $open_edit = false;

    protected $listeners = ['render', 'delete'];
    //protected $queryString = ['cant','sort','direction','search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }


    protected $rules = [
        'unit.name' => 'required',
        'unit.acronym' => 'required|max:10',
        'unit.address' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function loadContent()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        if ($this->readyToLoad) {
            $units = Unit::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('address', 'like', '%' . $this->search . '%')
                ->orWhere('acronym', 'like', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);
        } else {
            $units = 'spin';
        }

        return view('livewire.unit.show-units', compact('units'));
    }

    public function order($sort)
    {
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

    public function update()
    {
        $this->validate();
        $this->unit->save();
        $this->reset(
            'open_edit',
            'unit',
        );
        $this->emit('alert', 'La unidad se actualió satisfactoriamente');
    }

    public function edit(Unit $unit)
    {
        $this->unit = $unit;
        $this->open_edit = true;
    }

    public function delete(Unit $unit)
    {

        $unit->delete();
    }
}
