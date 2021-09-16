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
    public $classifications_id;
    public $employment_statuses_id;
    public $image = null;
    public $file_document = null;
    public $date;
    public $message;
    public $notification = false;

    protected $listeners = [
        'employeeModalEdit'
    ];

    // validation rules
    protected $rules = [
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
        $subq = Employee::where('id', $query->employees_id)->first();
        $this->employee_number=$subq->employee_number;
        $this->lastname=$subq->lastname;
        $this->firstname=$subq->firstname;
        $this->middlename=$subq->middlename;
        $this->suffix=$subq->suffix;
        $this->address=$subq->address;
        $this->contact_number=$subq->contact_number;
        $this->email=$subq->email;
        $this->emergency_contact_person=$subq->emergency_contact_person;
        $this->ecp_contact_number=$subq->ecp_contact_number;
        $this->ecp_email=$subq->ecp_email;
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
