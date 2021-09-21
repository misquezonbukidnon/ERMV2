<?php

namespace App\Http\Livewire\Component\Modal\Dashboard;

use Livewire\Component;
use App\Models\Classification;
use App\Models\Employee;
use App\Models\EmployeeRelationship;
use App\Models\EmploymentStatus;
use App\Models\Office;
use App\Models\Position;

class EmployeeDashboard extends Component
{
    public $employment_date;
    public $employee_number;
    public $lastname;
    public $firstname;
    public $middlename;
    public $suffix;
    public $address;
    public $contact_number;
    public $email;
    public $emergency_contact_person;
    public $ecp_contact_number;
    public $ecp_email;
    public $offices_name;
    public $positions_name;
    public $classifications_name;
    public $employment_statuses_name;
    public $image = null;
    public $file_document = null;

    protected $listeners = [
        'showEmployee',
    ];

    public function showEmployee($empId)
    {
        $query = EmployeeRelationship::where('id', $empId)->first();
        $subq_employees = Employee::where('id', $query->employees_id)->first();
        $subq_positions = Position::where('id', $query->positions_id)->first();
        $subq_offices = Office::where('id', $query->offices_id)->first();
        $subq_classifications = Classification::where('id', $query->classifications_id)->first();
        $subq_employment_statuses = EmploymentStatus::where('id', $query->employment_statuses_id)->first();

        $this->employment_date=$subq_employees->employment_date;
        $this->employee_number=$subq_employees->employee_number;
        $this->lastname=$subq_employees->lastname;
        $this->firstname=$subq_employees->firstname;
        $this->middlename=$subq_employees->middlename;
        $this->suffix=$subq_employees->suffix;
        $this->address=$subq_employees->address;
        $this->contact_number=$subq_employees->contact_number;
        $this->email=$subq_employees->email;
        $this->emergency_contact_person=$subq_employees->emergency_contact_person;
        $this->ecp_contact_number=$subq_employees->ecp_contact_number;
        $this->ecp_email=$subq_employees->ecp_email;
        $this->positions_name=$subq_positions->name;
        $this->offices_name=$subq_offices->name;
        $this->classifications_name=$subq_classifications->name;
        $this->employment_statuses_name=$subq_employment_statuses->name;
    }

    public function render()
    {
        return view('livewire.component.modal.dashboard.employee-dashboard');
    }
}
