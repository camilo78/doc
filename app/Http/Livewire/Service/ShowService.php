<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Livewire\Component;

class ShowService extends Component
{

    public $search, $unit;
    public $sort = "id";
    public $direction = "asc";
    public $cant = 10;
    public $readyToLoad = false;

    public function loadContent()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {

        if ($this->readyToLoad) {
            $services = Service::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('acronym', 'like', '%' . $this->search . '%')
                ->orWhere('id_unit', 'like', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);
        } else {
            $services = 'spin';
        }

        return view('livewire.service.show-service', compact('services'));
    }
}
