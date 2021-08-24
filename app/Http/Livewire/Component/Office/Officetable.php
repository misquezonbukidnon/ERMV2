<?php

namespace App\Http\Livewire\Component\Office;

use Livewire\Component;

class Officetable extends Component
{
    public $officelist;

    public function mount($offices)
    {
        $this->officelist = $offices;
    }

    public function render()
    {
        return view('livewire.component.office.officetable');
    }
}
