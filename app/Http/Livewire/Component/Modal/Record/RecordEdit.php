<?php

namespace App\Http\Livewire\Component\Modal\Record;

use App\Models\Classification;
use App\Models\Employee;
use App\Models\EmployeeRelationship;
use App\Models\EmploymentStatus;
use Livewire\Component;
use App\Models\Office;
use App\Models\Position;
use Livewire\WithFileUploads;

class RecordEdit extends Component
{
    // Global Input
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
    public $offices_id;
    public $positions_id;
    public $positions_name;
    public $classifications_id;
    public $employment_statuses_id;
    public $image = null;
    public $file_document = null;
    public $message;
    public $notification = false;

    protected $listeners = [
        'employeeModalEdit'
    ];

    // validation rules
    protected $rules = [
        'employment_date' => 'required',
        'employee_number' => 'required',
        'lastname' => 'required',
        'firstname' => 'required',
        'middlename' => 'required',
        'address' => 'required|min:5',
        'emergency_contact_person' => 'required',
        'ecp_contact_number' => 'required',
        'offices_id' => 'required',
        'positions_id' => 'required',
        'classifications_id' => 'required',
        'employment_statuses_id' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function employeeModalEdit($empId)
    {
        $query = EmployeeRelationship::where('id', $empId)->first();
        $subq_employees = Employee::where('id', $query->employees_id)->first();
        $subq_positions = Position::where('id', $query->positions_id)->first();
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
        $this->positions_id=$subq_positions->id;
        $this->positions_name=$subq_positions->name;
    }


    public function render()
    {
        $offices = Office::all();
        $positions = Position::all();
        $classifications = Classification::all();
        $employmentstatuses = EmploymentStatus::all();
        return view('livewire.component.modal.record.record-edit', compact('offices', 'positions', 'classifications', 'employmentstatuses'));
    }
}
