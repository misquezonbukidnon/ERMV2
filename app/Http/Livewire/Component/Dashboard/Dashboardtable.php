<?php

namespace App\Http\Livewire\Component\Dashboard;

use App\Models\EmployeeRelationship;
use Livewire\Component;

class Dashboardtable extends Component
{
    public $employees;
    public $offices;
    public $positions;
    public $classifications;
    public $employmentstatuses;


    public function showEmployee($empId)
    {
        $this->emit('showEmployee', $empId);
    }

    public function render()
    {
        $query = EmployeeRelationship::with('employees', 'offices', 'positions', 'classifications', 'employment_statuses')->get();
        $this->employees = $query;
        $this->offices = $query;
        $this->positions = $query;
        $this->classifications = $query;
        $this->employmentstatuses = $query;
        return view('livewire.component.dashboard.dashboardtable');
    }
}
