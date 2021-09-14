<?php

namespace App\Http\Livewire\Component\Record\Addrecordcomponent;

use App\Models\EmployeeRelationship;
use Livewire\Component;

class Employmenttable extends Component
{
    public function render()
    {
        $employees = EmployeeRelationship::all();
        return view('livewire.component.record.addrecordcomponent.employmenttable', compact('employees'));
    }
}
