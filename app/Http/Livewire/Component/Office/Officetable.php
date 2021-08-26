<?php

namespace App\Http\Livewire\Component\Office;

use App\Models\Office;
use Livewire\Component;

class Officetable extends Component
{
    protected $listeners = [
        'updateTable' => 'refreshTable'
    ];

    public function refreshTable()
    {
        //
    }

    public function officeModalEdit($itemID)
    {
        $this->emit('officeModalEdit', $itemID);
    }

    public function render()
    {
        return view('livewire.component.office.officetable', [
            'offices' => Office::all(),
        ]);
    }
}
