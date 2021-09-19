<?php

namespace App\Http\Livewire\Component\Dashboard;

use App\Models\EmployeeRelationship;
use Livewire\Component;

class Dashboard extends Component
{
    public $honorarium;
    public $regular;
    public $jobOrder;
    public $casual;

    public function render()
    {
        $q_honorarium = EmployeeRelationship::where('classifications_id', '=', 3)->count();
        $this->honorarium = $q_honorarium;
        $q_regular = EmployeeRelationship::where('classifications_id', '=', 4)->count();
        $this->regular = $q_regular;
        $q_jobOrder = EmployeeRelationship::where('classifications_id', '=', 1)->count();
        $this->jobOrder = $q_jobOrder;
        $q_casual = EmployeeRelationship::where('classifications_id', '=', 2)->count();
        $this->casual = $q_casual;
        return view('livewire.component.dashboard.dashboard');
    }
}
