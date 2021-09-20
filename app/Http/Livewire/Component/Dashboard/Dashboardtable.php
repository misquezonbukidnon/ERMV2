<?php

namespace App\Http\Livewire\Component\Dashboard;

use App\Models\EmployeeRelationship;
use Livewire\Component;
use App\Models\Office;
use App\Models\Position;
use App\Models\Classification;
use App\Models\EmploymentStatus;

class Dashboardtable extends Component
{
    public  $employees;
    public  $offices;
    public  $positions;
    public  $classifications;
    public  $employmentstatuses;
    public function render()
    {
        $employees = EmployeeRelationship::all();
        $this->employees = $employees;
        $offices = Office::all();
        $this->offices = $offices;
        $positions = Position::all();
        $this->positions = $positions;
        $classifications = Classification::all();
        $this->classifications = $classifications;
        $employmentstatuses = EmploymentStatus::all();
        $this->employmentstatuses = $employmentstatuses;
        return view('livewire.component.dashboard.dashboardtable' );
    }
}
