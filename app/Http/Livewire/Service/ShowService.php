<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Illuminate\Support\Facades\DB;
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

            $services = DB::table('services')
                ->select('services.id', 'services.name', 'services.acronym', 'units.name as unit')
                ->join('units', 'units.id', '=', 'services.id_unit')
                ->where('services.name', 'like', '%' . $this->search . '%')
                ->orWhere('services.acronym', 'like', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);
        } else {
            $services = 'spin';
        }

        return view('livewire.service.show-service', compact('services'));
    }
}
