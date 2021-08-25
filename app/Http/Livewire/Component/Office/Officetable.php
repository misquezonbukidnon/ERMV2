<?php

namespace App\Http\Livewire\Component\Office;

use App\Models\Office;
use Livewire\Component;

class Officetable extends Component
{
    public function render()
    {
        return view('livewire.component.office.officetable', [
            'offices' => Office::all(),
        ]);
    }
}
